<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use DB;
use Session;
use Auth;

class CompanyController extends Controller
{   
    public function __construct(){
        $this->middleware('auth'); 
    }

    public function store(){
        $r=request();  //received the data by GET or POST mothod 
        $image=$r->file('companyLogo');        
        $image->move('images',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName(); 
        $addCompany=Company::create([
            'companyName'=>$r->companyName,
            'companyLogo'=>$imageName,
            'companySize'=>$r->companySize,
            'companyLocation'=>$r->companyLocation,
            'companyTelephone'=>$r->companyTelephone,
            'companyEmail'=>$r->companyEmail,
            'companyAdditionalInfo'=>$r->companyAdditionalInfo,
        ]);
        Session::flash('success',"Company is created successfully!");
        Return redirect()->route('viewCompany');
    } 

    public function view(){
        $viewCompany=Company::all(); //generate SQL select * from categories
        Return view('showCompany')->with('companies',$viewCompany);
    }

    public function delete($id){      
        $deleteCompany=Company::find($id);
        $deleteCompany->delete();
        Session::flash('success',"Company was deleted successfully!");
        Return redirect()->route('viewCompany');
    }

    public function edit($id){
        $companies = Company::all()->where('id',$id);
        return view('editCompany')->with('companies', $companies);
    }

    public function update(){
        $r=request();
        $company=Company::find($r->companyID);
        
        if($r->file('companyLogo')!=''){
            $image=$r->file('companyLogo');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $company->image=$imageName;
            } 

            $company->companyName=$r->companyName;
            $company->companySize=$r->companySize;
            $company->companyLocation=$r->companyLocation;
            $company->companyTelephone=$r->companyTelephone;
            $company->companyEmail=$r->companyEmail;
            $company->companyAdditionalInfo=$r->companyAdditionalInfo;
            $company->save();

        return redirect()->route('viewCompany');
    }

    
    public function listCompany(){
        $companies=Company::all();
        return view('listCompanies')->with('companies',$companies);
    }

    public function companiesDetails($id){
        $companies=company::all()->where('id',$id);
        return view("CompaniesDetail")->with('companies',$companies);
    }



}
