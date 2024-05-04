<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $services_count = Service::count();
        return view('admin.services.index', compact('services', 'services_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            'description' => ['required', 'max:2000'],
            'images' => ['required', 'max:5000'],
        ]);
        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;

        if ($request->hasFile('images')) {
             $file = $request->hasFile('images');
            $filenamewithext =  $request->file('images')->getClientOriginalName();
            $filename  = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $extension = $request->file('images')->getClientOriginalExtension();
            $FileNameToStoreFeature = $filename.'-'.time().'.'.$extension;

            $path = $request->file('images')->move(public_path('assets/uploads/place_images/'),$FileNameToStoreFeature);
            $service->images = $FileNameToStoreFeature;

            $img = Image::make(public_path('assets/uploads/place_images/' . $FileNameToStoreFeature))->resize(100, 100);
             $img->save(public_path('assets/uploads/thumbnails/' . $FileNameToStoreFeature));
                $service->thumbnail =  $FileNameToStoreFeature;
        }

        $service->save();
        session()->flash('alert_success' . 'Service Created Successfully');
        return redirect()->route('service.index');
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
        $service = Service::where('id', $id)->first();
        return view('admin.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Service $service)
    {
        $data = $request->validate([
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:2000'],
            'images' => ['nullable', 'max:5000'],
        ]);
        $service->title = $request->title;
        $service->description = $request->description;
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $filenamewithext = $file->getClientOriginalName();

            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();

            $FileNameToStoreFeature = $filename . '-' . time() . '.' . $extension;


            $path = public_path('assets/uploads/place_images/') . $service->images;
            if (File::exists($path)) {
                File::delete($path);
            }
            $path = $request->file('images')->move(public_path('assets/uploads/place_images/'),$FileNameToStoreFeature);


            // Update the $service object with the new image filename
            $service->images = $FileNameToStoreFeature;


            $thumbnailpath = public_path('assets/uploads/thumbnails/') . $service->thumbnail;
            if (File::exists($thumbnailpath)) {
                File::delete($thumbnailpath);
            }
            $img = Image::make(public_path('assets/uploads/place_images/' . $FileNameToStoreFeature))->resize(100, 100);
            $img->save(public_path('assets/uploads/thumbnails/' . $FileNameToStoreFeature));
             $service->thumbnail =  $FileNameToStoreFeature;


            // Update the $service object with the new image filename




        }
        $service->update();
        session()->flash('alert_success', 'Service Updated Successfully');
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if ($service->images) {
            $path = public_path('assets/uploads/place_images/') . $service->images;
            if (File::exists($path)) {
                File::delete($path);
            }
            $thumbnailpath = public_path('assets/uploads/thumbnails/') . $service->thumbnail;
            if (File::exists($thumbnailpath)) {
                File::delete($thumbnailpath);
            }

        }
        $service->delete();
        session()->flash('alert_danger', 'Service Deleted Successfully');
        return redirect()->route('service.index');
    }
}
