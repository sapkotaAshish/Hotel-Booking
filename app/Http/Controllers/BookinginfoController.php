<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Room;

use Auth;
use Illuminate\Support\Facades\Redirect;


class BookinginfoController extends Controller
{

public function __construct()
    {
        $this->middleware('auth');
    }


public function bookingInfo($id){
$hotel = DB::table('hotels')
             ->join('hotelinfos', 'hotels.hotel_id', '=', 'hotelinfos.hotel_id')
                          ->join('addresses', 'hotels.hotel_id', '=', 'addresses.hotel_id')

            ->select('hotels.ratings','hotelinfos.*','addresses.*')
             ->where('hotels.hotel_id', '=', $id)
            ->get();
 $room=DB::table('rooms')->where('hotel_id',$id)->where('status','=','0')->get();

return view('userview.bookingform',compact('hotel','room'));
}


public function foodInfo($id){
$hotel = DB::table('hotels')
             ->join('hotelinfos', 'hotels.hotel_id', '=', 'hotelinfos.hotel_id')
                          ->join('addresses', 'hotels.hotel_id', '=', 'addresses.hotel_id')

            ->select('hotels.ratings','hotelinfos.*','addresses.*')
             ->where('hotels.hotel_id', '=', $id)
            ->get();
 $food=DB::table('foods')->where('hotel_id',$id)->get();

return view('userview.bookingfood',compact('hotel','food'));
}




public function finalBooking($id){
	 $sts=1;
	 $uid=Auth::id();
        $rooms = DB::update('UPDATE rooms SET status = ?, user_id=? where room_id = ?',[$sts,$uid,$id]);
       
        $room=DB::table('rooms')
  	->where('user_id',$uid)
  	->where('status',$sts)
  	->get();


 $bookings = DB::table('products')
             ->join('bookings', 'products.product_id', '=', 'bookings.product_id')
            ->select('products.*','bookings.*')
             ->where('bookings.user_id', '=', $uid)
            ->get();



    
return view('userview.mybooking',compact('room','bookings'));



}




public function myBooking(Request $request){
	$userid=Auth::id();
	$one=1;
  $room=DB::table('rooms')
  	->where('user_id',$userid)
  	  	->where('status',$one)

  	->get();

             $bookings = DB::table('products')
             ->join('bookings', 'products.product_id', '=', 'bookings.product_id')
            ->select('products.*','bookings.*')
             ->where('bookings.user_id', '=', $userid)
            ->get();


  	return view('userview.mybooking',compact('room','bookings'));
}

public function eventBooking($id){
  $hotel = DB::table('hotels')
             ->join('hotelinfos', 'hotels.hotel_id', '=', 'hotelinfos.hotel_id')
                          ->join('addresses', 'hotels.hotel_id', '=', 'addresses.hotel_id')

            ->select('hotels.ratings','hotelinfos.*','addresses.*')
             ->where('hotels.hotel_id', '=', $id)
            ->get();
          $event=DB::table('events')->where('hotel_id',$id)->get();



return view('userview.eventbooking',compact('event','hotel'));
}





public function bookProduct($id){
  
   $product=DB::table('products')
    ->where('product_id',$id)

    ->get();
  

    return view('userview.buyProduct',compact('product'));

}


public function confirmBooking($id){
  $uid=Auth::id();
  $total=1200;

  $booking=DB::table('bookings')->insert(
    ['total' => $total, 'user_id' => $uid,'product_id'=>$id]
);

  $one=1;
  $room=DB::table('rooms')
    ->where('user_id',$uid)
        ->where('status',$one)

    ->get();

   

             $bookings = DB::table('products')
             ->join('bookings', 'products.product_id', '=', 'bookings.product_id')
            ->select('products.*','bookings.*')
             ->where('bookings.user_id', '=', $uid)
            ->get();



    
return view('userview.mybooking',compact('room','bookings'));
}

public function viewsellerproduct(Request $request){
  $id=Auth::id();
  

}


}
