<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use App\Hotelinfo;
use App\Hotel;
use App\Room;
use App\Event_table;
use App\Product;
use DB;
class UserController extends Controller
{
    
public function __construct()
    {
        $this->middleware('auth');
    }

    public function userFood(){
    	$food=Food::all();
    	return view('userview.userfood',compact('food'));
    }
    public function userHotel(){
    	$hotel=DB::table('hotels')

				->select('hotels.hotel_id','hotels.name','hotels.ratings','hotelinfos.email','hotelinfos.phone','hotelinfos.mobile','hotelinfos.description','hotelinfos.imagea','hotelinfos.imageb','hotelinfos.imagec')

			->join('hotelinfos','hotels.hotel_id','=','hotelinfos.hotel_id')


			->get();



    	$room=Room::all()->where('status','=','0');
    	return view('userview.userhotel',compact('hotel','room'));
    }
    public function userEvent(){
    	$event=Event_table::all();
    	return view('userview.userevent',compact('event'));
    }

public function userProduct(){
	$product=Product::all();
	return view('userview.userproduct',compact('product'));
}

    }
