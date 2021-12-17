<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Job;
use App\Models\Category;

class JobController extends Controller
{
    //
    public function store(){
        $r=request();  //received the data by GET or POST mothod 
        $image=$r->file('companyImage');        
        $image->move('images',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName(); 
        $addJob=Job::create([
            'name'=>$r->jobName,
            'description'=>$r->jobDescription,
            'numberOfHiring'=>$r->numberOfHiring,
            'salary'=>$r->jobSalary,
            'CategoryID'=>$r->CategoryID,
            'image'=>$imageName,
        ]);

        Session::flash('success',"Job create succesful!");
        Return redirect()->route('viewJob');
    }

    public function view(){
        $viewJob = DB::table("jobs")
        ->leftjoin('categories','categories.id','=','jobs.CategoryID')
        ->select('jobs.*','categories.name as cName')
        ->get();
        return view('showJob')
        ->with('jobs',$viewJob);
    }
}

 