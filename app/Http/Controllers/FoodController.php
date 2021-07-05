<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use Intervention\Image\Facades\Image;
use App\Food;
use DB;
class FoodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function createFood(){
       $hotels=Hotel::all();
       $foods=Food::all();

    	return view('hotels.createFood',compact('hotels','foods'));
    }
    public function foodCreate(Request $request){
        $data=request()->validate([
            'name'=>'',
            'type'=>'',
            'price'=>'',
            'description'=>'',
            'images'=>'',
            'hotel_id'=>'',
            
         ]);
         $path=request('images')->store('RoomImage','public');
         $image=Image::make("storage/{$path}");
         $food=Food::create([
             'name'=>$data['name'],
             'type'=>$data['type'],
             'price'=>$data['price'],
             'images'=>$path,
             'description'=>$data['description'],
             'hotel_id'=>$data['hotel_id'], 
             ]);
           
     $hotels=Hotel::all();
     $foods=Food::all();

     return view('hotels.createFood',compact('foods','hotels'));
     // return response(Room::create($request->all()));
        // $hotels=Hotel::all();
        //  return view('hotels.createFood',compact('hotels'));
     }


     public function manageFood(){
        $hotels=Hotel::all();
        $foods=Food::all();
 
         return view('hotels.manageFood',compact('hotels','foods'));
     }


     public function findFood(Request $request){
        $abc=$request->get('abc');
        $foods = DB::table('foods')
        ->where('hotel_id',$abc)->get()
        ;
                 $hotels=Hotel::all();

      return view('hotels.manageFood',compact('foods','hotels'));

     }

    
     public function editFood($id)
     {
             
         $foods = DB::table('foods')
         ->where('food_id',$id)->get();
     return view('hotels.editform.editFood',compact('foods'));
     }

//yei error aairathyo bro

     public function updateFood(Request $request)
     {
         $data=$request->all();
         if(request('images')){
            $path=request('images')->store('RoomImage','public');
            $image=Image::make("storage/{$path}");
            $food=array_merge($data,['images'=>$path]);    
         }
        $id=$request->food_id;
        $name = $request->name;
        $type = $request->type;
        $price = $request->price;
        $description = $request->description;
        $images=$path;
        $hotel_id=$request->hotel_id;

        
    $food = DB::update('UPDATE foods SET name = ?, type = ?, price = ?, description = ?, images = ?, hotel_id = ? where food_id = ?',[$name,$type,$price,$description,$images,$hotel_id,$id]);
    $hotels=Hotel::all();
    $foods=Food::all();

    return view('hotels.manageFood',compact('foods','hotels'));

          
     }




     public function deleteFood($id){

          $food=  DB::delete('DELETE FROM foods where food_id = ?',[$id]);




         $hotels=Hotel::all();
    $foods=Food::all();

    return view('hotels.manageFood',compact('foods','hotels'));

          
     }
}
