<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use DB;
use App\Hotel;
use Intervention\Image\Facades\Image;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function manageRoom(){
        $hotels=Hotel::all();
        $rooms=Room::all();

    	return view('hotels.manageRoom',compact('hotels','rooms'));
    }
    public function roomCreate(Request $request){
         
       
           $data=request()->validate([
            'pic'=>'',
            'type'=>'',
            'price'=>'',
            'no_of_bed'=>'',
            'booking_open'=>'',
            'booking_close'=>'',
            // 'status'=>'',
            'television'=>'',
            'AC'=>'',
            'bathroom'=>'',
            'railing'=>'',
            'description'=>'',
            'hotel_id'=>'',
            
         ]);
            $path=request('pic')->store('RoomImage','public');
            $image=Image::make("storage/{$path}");
            $room=Room::create([
                'pic'=>$path,
                'type'=>$data['type'],
                'price'=>$data['price'],
                'no_of_bed'=>$data['no_of_bed'],
                'booking_open'=>$data['booking_open'],
                'booking_close'=>$data['booking_close'],
                // 'status'=>$data['status'],
                'television'=>$data['television'],
                'AC'=>$data['AC'],
                'bathroom'=>$data['bathroom'],
                'railing'=>$data['railing'],
                'description'=>$data['description'],
                'hotel_id'=>$data['hotel_id'], 
                ]);
              
        $hotels=Hotel::all();
        $rooms=Room::all();

        return view('hotels.manageRoom',compact('hotels','rooms'));
        // return response(Room::create($request->all()));
    }

    public function hotelRoom(){
        $hotels=Hotel::all();
        $rooms=Room::all();

    	return view('hotels.hotelrooms',compact('hotels','rooms'));
    }
    public function findRoom( Request $request){
        // $data=$request->all();
        // $name=$request->get('abc');
        // $id=$request->get('hotel_id');
        // $hotels=Hotel::all();

        // if($name ==$id){
        //     $rooms=Room::where('hotel_id','abc');
        //    return view('hotels.hotelrooms',compact('rooms','hotels'));}
        // else{
        // abort('403');
        // }
        $abc=$request->get('abc');
        $rooms = DB::table('rooms')
        ->where('hotel_id',$abc)->get()
        ;
                 $hotels=Hotel::all();

      return view('hotels.hotelrooms',compact('rooms','hotels'));


    }
    public function editRoom($id){

         $rooms = DB::table('rooms')
         ->where('room_id',$id)->get();
     return view('hotels.editform.editRoom',compact('rooms'));
    }
}

