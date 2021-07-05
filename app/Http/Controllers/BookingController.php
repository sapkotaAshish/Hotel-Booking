<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Room;
use DB;
class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function manageBooking(){
        $rooms = Room::all();
        return view('hotels.manageBooking',compact('rooms'));
    }
    public function cancelBooking($id){
        $status=0;
        $room = DB::update('UPDATE rooms SET status = ? where room_id = ?',[$status,$id]);
        $rooms = Room::all();
        return Redirect::back();
        // return view('hotels.manageBooking',compact('rooms'));
    }
    public function updateBooking($id){
        $sts=1;
        $room = DB::update('UPDATE rooms SET status = ? where room_id = ?',[$sts,$id]);
        $rooms = Room::all();

        return Redirect::back();
    }


}
// $products = DB::table('products')
// ->where('product_id',$abc)->get();
// ;