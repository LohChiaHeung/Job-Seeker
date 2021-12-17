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
        $r=request(); 
        $image=$r->file('companyImage');        
        $image->move('images',$image->getClientOriginalName());              
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
        return view('viewJob')
        ->with('jobs',$viewJob);
    }

    public function delete($id){
        
        $deleteJob=Job::find($id);
        $deleteJob->delete();
        Session::flash('success',"Job was delete successfully!");
        Return redirect()->route('viewJob');
    }
}

 