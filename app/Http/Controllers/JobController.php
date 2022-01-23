<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Job;
use App\Models\Category;
use Auth;

class JobController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }

    public function store(){
        $r=request();  //received the data by GET or POST mothod 
        $image=$r->file('companyImage');        
        $image->move('images',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName();
        $addJob=Job::create([
            'name'=>$r->jobName,
            'company'=>$r->companyName,
            'gender'=>$r->gender,
            'position'=>$r->position,
            'FullPart'=>$r->FP,
            'skill'=>$r->skill,
            'numberOfHiring'=>$r->numberOfHiring,
            'salary'=>$r->jobSalary,
            'CategoryID'=>$r->CategoryID,
            'image'=>$imageName,
            'Tel'=>$r->Tel,
        ]);
        Session::flash('success',"Job is created successfully!");
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
            $jobs->tel=$r->Tel;
            $jobs->CategoryID=$r->CategoryID;
            $jobs->save();

        return redirect()->route('viewJob');
    }

    public function listJob(){
        (new WishlistController)->wishListItems(); 
        $jobs=Job::all();
        return view('listJob')->with('jobs',$jobs);
    }

    
    public function jobdetail($id){
        $jobs=job::all()->where('id',$id);
        return view("jobDetail")->with('jobs',$jobs);
        (new WishlistController)->wishListItems(); 
    }

    public function viewIT(){
        $jobs=DB::table('jobs')->where('CategoryID','=','1')->get();
        if(!$jobs->first()){  return view('noResult');  } //no result
            else{  return view('listJob')->with('jobs',$jobs);  }
        return view('listJob')->with('jobs',$jobs);
    }

    public function viewAccountant(){
        $jobs=DB::table('jobs')->where('CategoryID','=','2')->get();
        if(!$jobs->first()){  return view('noResult');  } //no result
            else{  return view('listJob')->with('jobs',$jobs);  }
        return view('listJob')->with('jobs',$jobs);
    }

    public function viewArtist(){
        $jobs=DB::table('jobs')->where('CategoryID','=','3')->get();
        if(!$jobs->first()){  return view('noResult');  } //no result
            else{  return view('listJob')->with('jobs',$jobs);  }
        return view('listJob')->with('jobs',$jobs);
    }

    public function viewFull(){
        $jobs=DB::table('jobs')->where('FullPart','=','Full Time')->get();
        if(!$jobs->first()){  return view('noResult');  } //no result
        else{  return view('listJob')->with('jobs',$jobs);  }
        return view('listJob')->with('jobs',$jobs);
    }

    public function viewPart(){
        $jobs=DB::table('jobs')->where('FullPart','=','Part Time')->get();
        if(!$jobs->first()){  return view('noResult');  } //no result
        else{  return view('listJob')->with('jobs',$jobs);  }
        return view('listJob')->with('jobs',$jobs);

    }

    public function searchCareer(){
        $r=request();
        $keyword=$r->keyword;
        $jobs=DB::table('jobs')
        ->where('name','like','%'.$keyword.'%')
        ->orWhere(DB::raw('lower(FullPart)'), strtolower("$keyword")) //ignore case
        ->get();
        if(!$jobs->first()){  return view('noResult');  } //no result
            else{  return view('listJob')->with('jobs',$jobs);  }
    }
}