<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Hotel;
use App\Event_table;
use App\Food;
use App\Hotelinfo;
use App\Room;

use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }
    public function adminHome()
    {
        return view('adminHome');
    }
    public function sellerHome()
    {
        $abc= Auth::user()->id;
        $product = DB::table('products')
        ->where('id',$abc)->get();
     
        
        return view('sellerHome',compact('product'));
    }
    public function userHome()
    {
        $hotel=Hotel::all();
        $event=Event_table::all();
        $hotelinfo=Hotelinfo::all();
        $food=Food::all();
        $product= Product::all();
        $room=Room::all();
        return view('userHome',compact('product','room','food','hotelinfo','event','hotel'));
    }

}
