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

    public function __construct(){
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

        $this->wishListItems(); //call function to calculate no.cart item

        return view('wishlist')->with('wishlists',$wishlists);
    }

    public function wishListItems(){
        $wishListItems=0;
        $noItem=DB::table('wishlists')
        ->leftjoin('jobs','jobs.id','=','wishlists.jobID')
        ->select(DB::raw('COUNT(*) as count_item'))
        ->where('wishlists.userID','=',Auth::id()) 
        ->groupBy('wishlists.userID')
        ->first();
        if($noItem){
            $wishListItems=$noItem->count_item;
        }
        Session()->put('wishListItems',$wishListItems);
        
    }

    public function delete($id){
        
        $deleteWishlist=Wishlist::find($id); //binding record
        $deleteWishlist->delete(); //delete record
        Session::flash('success',"Wishlist was remove successfully!");
        Return redirect()->route('show.wishlist');
    }
}
