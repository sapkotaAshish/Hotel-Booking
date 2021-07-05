<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Hotel;
use DB;

class HotelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function manageHotel(){
       $hotel=Hotel::all();
    	return view('hotels.manageHotel',compact('hotel'));
    }
    public function createHotel(Request $request){
        Hotel::create($request->all());
        $hotel=Hotel::all();
        return view('hotels.manageHotel',compact('hotel'));
        
    }
    public function editHotel($id)
    {
            
        $hotels = DB::table('hotels')
        ->where('hotel_id',$id)->get();
    return view('hotels.editform.edithotel',compact('hotels'));
    }

    public function updateHotel(Request $request)
    {
        $id= $request->hotel_id;
        $name = $request->name;
        $ratings = $request->ratings;

        $hotels = DB::update('UPDATE hotels SET name = ?, ratings = ? where hotel_id = ?',[$name,$ratings,$id]);

        $hotel=Hotel::all();
        return view('hotels.manageHotel',compact('hotel'));
    }

    public function deleteHotel($id)
    {
        DB::delete('DELETE FROM hotels where hotel_id = ?',[$id]);
        // DB::delete('DELETE * FROM rooms')
        
        $hotel=Hotel::all();
        return view('hotels.manageHotel',compact('hotel'));

    }


}
