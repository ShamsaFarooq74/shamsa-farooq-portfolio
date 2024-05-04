<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        $project_count = Project::count();
        return view('admin.Project.index', compact('projects', 'project_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:5000'],
            'tags' => ['required'],
            'images' => ['required', 'max:5000'],
        ]);
        $project = new Project();
        $project->title = $request->title;
        $project->tags = $request->tags;
        $project->description = $request->description;
        if ($request->hasFile('images')) {

            $filenamewithext =  $request->file('images')->getClientOriginalName();
            $filename  = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $extension = $request->file('images')->getClientOriginalExtension();

            $FileNameToStoreFeature = $filename.'-'.time().'.'.$extension;

            $path = $request->file('images')->move(public_path('assets/uploads/place_images/'),$FileNameToStoreFeature);
            $project->images=$FileNameToStoreFeature;
        }
        $project->save();
        session()->flash('alert_success' . 'Project Created Successfully');
        return redirect()->route('project.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::where('id', $id)->first();
        return view('admin.project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Project $project)
    {
        $data = $request->validate([
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:5000'],
            'tags' => ['required'],
            'images' => ['nullable', 'max:5000'],
        ]);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->tags = $request->tags;
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $filenamewithext = $file->getClientOriginalName();

            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();

            $FileNameToStoreFeature = $filename . '-' . time() . '.' . $extension;


            $path = public_path('assets/uploads/place_images/') . $project->images;
            if (File::exists($path)) {
                File::delete($path);
            }
            $path = $request->file('images')->move(public_path('assets/uploads/place_images/'),$FileNameToStoreFeature);

            // Update the $project object with the new image filename
            $project->images = $FileNameToStoreFeature;
        }
        $project->update();
        session()->flash('alert_success', 'Project Updated Successfully');
        return redirect()->route('project.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if ($project->images) {
            $path = public_path('assets/uploads/place_images/') . $project->images;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $project->delete();
        session()->flash('alert_danger', 'Project Deleted Successfully');
        return redirect()->route('project.index');
    }



}
