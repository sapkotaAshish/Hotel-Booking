<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Hotelinfo;
use DB;
use Intervention\Image\Facades\Image;

class HotelinfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function createHotelinfo(){
       $hotels=Hotel::all();
       $hotelinfo=Hotelinfo::all();

    	return view('hotels.createHotelinfo',compact('hotelinfo','hotels'));
    }
    public function hotelinfoCreate(Request $request){

        $data=request()->validate([
            'name'=>'',
            'email'=>'',
            'phone'=>'',
            'mobile'=>'',
            'description'=>'',
            'imagea'=>'',
            'imageb'=>'',
            'imagec'=>'',
            'hotel_id'=>'',
        

            
         ]);
         $path=request('imagea')->store('RoomImage','public');
         $image=Image::make("storage/{$path}");
         $path1=request('imageb')->store('RoomImage','public');
         $image1=Image::make("storage/{$path1}");
         $path2=request('imagec')->store('RoomImage','public');
         $image2=Image::make("storage/{$path2}");
         $hotelinfo=Hotelinfo::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'phone'=>$data['phone'],
            'mobile'=>$data['mobile'],
            'description'=>$data['description'],
            'imagea'=>$path,
            'imageb'=>$path1,
            'imagec'=>$path2,
            'hotel_id'=>$data['hotel_id'], 
            ]);

            $hotels=Hotel::all();
            $hotelinfo=Hotelinfo::all();
       
            return view('hotels.createHotelinfo',compact('hotelinfo','hotels'));
     }



     public function manageHotelinfo(){
        $hotels=Hotel::all();
        $hotelinfo=Hotelinfo::all();
 
         return view('hotels.manageHotelinfo',compact('hotelinfo','hotels'));
     }
     public function findHotelinfo(Request $request){
        $abc=$request->get('abc');
        $hotelinfo = DB::table('hotelinfos')
        ->where('hotel_id',$abc)->get()
        ;
                 $hotels=Hotel::all();

      return view('hotels.manageHotelinfo',compact('hotelinfo','hotels'));


     }


     public function hotelinfoEdit($id){
         $hotelinfo = DB::table('hotelinfos')
                        ->where('hotel_id',$id)->get();
                 $hotels=Hotel::all();

              return view('hotels.editform.edithotelinfo',compact('hotelinfo','hotels'));


              
     }
     public function hotelinfoDelete($id){
          $hotelinfo=  DB::delete('DELETE FROM hotelinfos where hotelinfo_id = ?',[$id]);
              $hotels=Hotel::all();

              return view('hotels.manageHotelinfo',compact('hotelinfo','hotels'));


              
     }
}

