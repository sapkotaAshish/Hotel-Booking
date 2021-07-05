<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Event_table;
use DB;
use Intervention\Image\Facades\Image;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createEvent(){
        $hotels=Hotel::all();
        $events=Event_table::all();

    	return view('hotels.createEvent',compact('hotels','events'));
    }
    
    public function eventCreate(Request $request){
        $data=request()->validate([
            'name'=>'',
            'type'=>'',
            'start_date'=>'',
            'end_date'=>'',
            'description'=>'',
            'imagea'=>'',
            'imageb'=>'',
            'hotel_id'=>'',
        

            
         ]);
         $path=request('imagea')->store('RoomImage','public');
         $image=Image::make("storage/{$path}");
         $path1=request('imageb')->store('RoomImage','public');
         $image1=Image::make("storage/{$path1}");
       
         $event=Event_table::create([
            'name'=>$data['name'],
            'type'=>$data['type'],
            'start_date'=>$data['start_date'],
            'end_date'=>$data['end_date'],
            'description'=>$data['description'],
            'imagea'=>$path,
            'imageb'=>$path1,
            'hotel_id'=>$data['hotel_id'], 
            ]);

            $hotels=Hotel::all();
            $events=Event_table::all();
            
       
            return view('hotels.createEvent',compact('hotels','events'));
     }
     public function manageEvent(){
        $hotels=Hotel::all();
        $events=Event_table::all();
 
         return view('hotels.manageEvent',compact('events','hotels'));
     }
     public function findEvent(Request $request){
        $abc=$request->get('abc');
        $events = DB::table('events')
        ->where('hotel_id',$abc)->get()
        ;
                 $hotels=Hotel::all();

      return view('hotels.manageEvent',compact('events','hotels'));

     }
     public function eventEdit($id){

 $event = DB::table('events')
        ->where('hotel_id',$id)->get()
        ;
                 $hotels=Hotel::all();

      return view('hotels.editform.editevent',compact('event','hotels'));


     }
      public function eventDelete($id){

 $event =  DB::delete('DELETE FROM events where event_id = ?',[$id]);

  $hotels=Hotel::all();
        $events=Event_table::all();
      return view('hotels.manageEvent',compact('events','hotels'));


     }
}
