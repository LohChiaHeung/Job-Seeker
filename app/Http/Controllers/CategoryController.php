<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function store(){
        $r=request();   //received the data by GET or POST method  $_POST['name']
        $storeCategory = Category::create([ 
            'id' => $r->id,  
            'name'=> $r->categoryName, 
        ]);

        Session::flash('success',"Category create succesful!");
        Return redirect()->route('viewCategory');
    }

    public function view(){
        $viewCategory=Category::all(); //generate SQL select * from categories
        Return view('showCategory')->with('categories',$viewCategory);
    }

    public function delete($id){
        
        $deleteCategory=Category::find($id);
        $deleteCategory->delete();
        Session::flash('success',"Category was delete successfully!");
        Return redirect()->route('viewCategory');
    }
}
 