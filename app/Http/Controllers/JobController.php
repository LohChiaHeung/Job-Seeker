<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Job;
use App\Models\Category;
use App\Models\Company;
use Auth;

class JobController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }

    public function store(){
        $r=request();  //received the data by GET or POST mothod 
        $addJob=Job::create([
            'name'=>$r->jobName,
            'CompanyID'=>$r->CompanyID,
            'gender'=>$r->gender,
            'position'=>$r->position,
            'FullPart'=>$r->FP,
            'skill'=>$r->skill,
            'numberOfHiring'=>$r->numberOfHiring,
            'salary'=>$r->jobSalary,
            'CategoryID'=>$r->CategoryID,
        ]);
        Session::flash('success',"Job is created successfully!");
        Return redirect()->route('viewJob');
    }


    public function view(){
        $viewJob = DB::table("jobs")
        ->leftjoin('categories','categories.id','=','jobs.CategoryID')
        ->leftjoin('companies','companies.id','=','jobs.CompanyID')
        ->select('jobs.*','categories.name as cName','companies.companyName as compName','companies.companyLogo as image','companies.companyTelephone as Tel')
        ->get();
        return view('showJob')
        ->with('jobs',$viewJob);
    }

    public function delete($id){
        
        $deleteJob=Job::find($id);
        $deleteJob->delete();
        Session::flash('success',"Job was deleted successfully!");
        Return redirect()->route('viewJob');
    }

    public function edit($id){
        $Jobs = Job::all()->where('id',$id);
        return view('editJob')->with('jobs', $Jobs)
                                  ->with('categoryID',Category::all());
    }

    public function update(){
        $r=request();
        $jobs=Job::find($r->jobID);
        
        if($r->file('jobImage')!=''){
            $image=$r->file('jobImage');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $jobs->image=$imageName;
            } 

            $jobs->name=$r->jobName;
            $jobs->company=$r->companyName;
            $jobs->gender=$r->gender;
            $jobs->position=$r->position;
            $jobs->FullPart=$r->FP;
            $jobs->skill=$r->skill;
            $jobs->salary=$r->jobSalary;
            $jobs->numberOfHiring=$r->numberOfHiring;
            $jobs->CategoryID=$r->CategoryID;
            $jobs->save();

        return redirect()->route('viewJob');
    }

    public function listJob(){
        (new WishlistController)->wishListItems(); 
        $jobs= DB::table("jobs")
        ->leftjoin('companies','companies.id','=','jobs.CompanyID')
        ->select('jobs.*','companies.companyName as company','companies.companyLogo as image')
        ->get();
        return view('listJob')->with('jobs',$jobs);
    }

    
    public function jobdetail($id){
        (new WishlistController)->wishListItems(); 
        $jobs= DB::table("jobs")
        ->leftjoin('companies','companies.id','=','jobs.CompanyID')
        ->select('jobs.*','companies.companyName as company','companies.companyLogo as image','companies.companyTelephone as Tel')
        ->where('jobs.id',$id)
        ->get();
        return view("jobDetail")->with('jobs',$jobs);
    }

    public function viewIT(){
        $jobs=DB::table('jobs')
        ->leftjoin('categories','categories.id','=','jobs.CategoryID')
        ->leftjoin('companies','companies.id','=','jobs.CompanyID')
        ->select('jobs.*','companies.companyName as company','companies.companyLogo as image','companies.companyTelephone as Tel','categories.name as cname')
        ->where('categories.name','=','IT')
        ->get();
        if(!$jobs->first()){  return view('noResult');  } //no result
            else{  return view('listJob')->with('jobs',$jobs);  }
        return view('listJob')->with('jobs',$jobs);
    }

    public function viewAccountant(){
        $jobs=DB::table('jobs')
        ->leftjoin('categories','categories.id','=','jobs.CategoryID')
        ->leftjoin('companies','companies.id','=','jobs.CompanyID')
        ->select('jobs.*','companies.companyName as company','companies.companyLogo as image','companies.companyTelephone as Tel','categories.name as cname')
        ->where('categories.name','=','Accountant')
        ->get();
        if(!$jobs->first()){  return view('noResult');  } //no result
            else{  return view('listJob')->with('jobs',$jobs);  }
        return view('listJob')->with('jobs',$jobs);
    }

    public function viewArtist(){
        $jobs=DB::table('jobs')
        ->leftjoin('categories','categories.id','=','jobs.CategoryID')
        ->leftjoin('companies','companies.id','=','jobs.CompanyID')
        ->select('jobs.*','companies.companyName as company','companies.companyLogo as image','companies.companyTelephone as Tel','categories.name as cname')
        ->where('categories.name','=','Artist')
        ->get();
        if(!$jobs->first()){  return view('noResult');  } //no result
            else{  return view('listJob')->with('jobs',$jobs);  }
        return view('listJob')->with('jobs',$jobs);
    }

    public function viewFull(){
        $jobs=DB::table('jobs')
        ->leftjoin('companies','companies.id','=','jobs.CompanyID')
        ->select('jobs.*','companies.companyName as company','companies.companyLogo as image','companies.companyTelephone as Tel')
        ->where('FullPart','=','Full Time')
        ->get();
        if(!$jobs->first()){  return view('noResult');  } //no result
        else{  return view('listJob')->with('jobs',$jobs);  }
        return view('listJob')->with('jobs',$jobs);
    }

    public function viewPart(){
        $jobs=DB::table('jobs')
        ->leftjoin('companies','companies.id','=','jobs.CompanyID')
        ->select('jobs.*','companies.companyName as company','companies.companyLogo as image','companies.companyTelephone as Tel')
        ->where('FullPart','=','Part Time')
        ->get();
        if(!$jobs->first()){  return view('noResult');  } //no result
        else{  return view('listJob')->with('jobs',$jobs);  }
        return view('listJob')->with('jobs',$jobs);

    }

    public function searchCareer(){
        $r=request();
        $keyword=$r->keyword;
        $jobs=DB::table('jobs')
        ->leftjoin('companies','companies.id','=','jobs.CompanyID')
        ->select('jobs.*','companies.companyName as company','companies.companyLogo as image','companies.companyTelephone as Tel')
        ->where('name','like','%'.$keyword.'%')
        ->orWhere(DB::raw('lower(FullPart)'), strtolower("$keyword")) //ignore case
        ->get();
        if(!$jobs->first()){  return view('noResult');  } //no result
            else{  return view('listJob')->with('jobs',$jobs);  }
    }

    
}