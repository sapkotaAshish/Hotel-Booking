<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use App\Product;
use App\User;
use DB;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function createProduct(){
        $user = User::all()->where('is_seller',1);
       $products=Product::all();

    	return view('hotels.createProducts  ',compact('products','user'));
    }
    public function productCreate(Request $request){
        $data=request()->validate([
            'name'=>'',
            'type'=>'',
            'price'=>'',
            'description'=>'',
            'images'=>'',
            'id'=>'',
            
         ]);
         $path=request('images')->store('RoomImage','public');
         $image=Image::make("storage/{$path}");
         $product=Product::create([
             'name'=>$data['name'],
             'type'=>$data['type'],
             'price'=>$data['price'],
             'images'=>$path,
             'description'=>$data['description'],
             'id'=>$data['id'], 
             ]);
             $user = User::all()->where('is_seller',1);
             $products=Product::all();
      
              return view('hotels.createProducts',compact('products','user'));
     }
     public function manageProduct(){
        $user = User::all()->where('is_seller',1);
        $products=Product::all();
 
         return view('hotels.manageProduct',compact('products','user'));

     }
     public function findProduct(Request $request){
        $abc=$request->get('abc');
        $products = DB::table('products')
        ->where('product_id',$abc)->get();
        ;
        $user = User::all()->where('is_seller',1);
 
         return view('hotels.manageProduct',compact('products','user'));

     }

}
