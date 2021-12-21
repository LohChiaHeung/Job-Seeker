<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Wishlist;
use App\Models\Job;
use Session;
use Auth;

class WishlistController extends Controller
{
    //
    public function __contruct(){
        $this->middleware('auth');
    }

    public function add(){
        $r=request();
        $addWishlist=Wishlist::Create([
            'jobID'=>$r->jobID,
            'userID'=>Auth::id(),
        ]);

        return redirect()->route('show.wishlist');
    }

    public function showWishlist(){
        $wishlists=DB::table('wishlists')
        ->leftjoin('jobs','jobs.id','=','wishlists.jobID')
        ->select('wishlists.id as cid','jobs.*')
        ->where('wishlists.userID','=',Auth::id()) //item match with current login user
        ->get();

        return view('wishlist')->with('wishlists',$wishlists);
    }

    public function delete($id){
        
        $deleteWishlist=Wishlist::find($id); //binding record
        $deleteWishlist->delete(); //delete record
        Session::flash('success',"Wishlist was remove successfully!");
        Return redirect()->route('show.wishlist');
    }
}
