<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Project;
use App\Models\Customer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $services = Service::get();
        $projects = Project::get();

    //    $imgs = $projects->first()->images;
    //    dd($imgs);
        return view('home', compact('services','projects'));
    }
    public function services(){
        $services = Service::get();
        return view('services', compact('services'));
    }
    public function portfolio(){
        $projects = Project::get();
        return view('portfolio',compact('projects'));
    }
    public function about(){

        return view('about');
    }
    public function contact(){

        return view('contact');
    }

    public function projectDetail($id)
    {
        $projectDetail = Project::where('id',$id)->first();
        return view('portfolio_detail', compact('projectDetail'));
    }

    public function serviceDetail($id)
    {
        $serviceDetail = Service::where('id',$id)->first();
        return view('service_details', compact('serviceDetail'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'fname' => ['required', 'max:255'],
            'lname' => ['required', 'max:255'],
            'email' => ['required','email','unique:customers','regex:/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/'],
            'telephone' => ['required'],
            'description' => ['required', 'max:400'],
        ]);
        $customer = new Customer();
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->email = $request->email;
        $customer->telephone = $request->telephone;
        $customer->description = $request->description;
        //json files handing start
        $customer->save();
        session()->flash('alert_success','Subscription Created Successfully');
        return redirect()->back();
    }

}
