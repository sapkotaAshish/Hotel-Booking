<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use App\Product;
use Auth;
use App\User;
use DB;
class SellerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function manageSeller(){

        $user = User::all()
        ->where('is_seller',1);
        return view('hotels.createSeller',compact('user'));
             }
     public function addSeller(Request $request){
        $data=request()->validate([
            'name'=>'',
            'email'=>'',
            'password'=>'',
            'is_seller'=>'',
            
         ]);
         $seller=User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'is_seller'=>$data['is_seller'],
            'password'=>Hash::make($data['password']),
           
            ]);
        $user = User::all()->where('is_seller',1);
        return view('hotels.createSeller',compact('user'));
        
    }
    public function editSeller($id)
    {
            
        $user = DB::table('users')
        ->where('id',$id)->get();
    return view('hotels.editform.editSeller',compact('user'));
    }

    public function updateSeller(Request $request)
    {
        $id= $request->id;
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;


        $users = DB::update('UPDATE users SET name = ?, email = ?, password = ? where id = ?',[$name,$email,$password,$id]);

        $user = User::all()->where('is_seller',1);
        return view('hotels.createSeller',compact('user'));
    }
    public function deleteSeller($id)
    {
        DB::delete('DELETE FROM users where id = ?',[$id]);
        // DB::delete('DELETE * FROM rooms')
        
      
        $user = User::all()->where('is_seller',1);
        return view('hotels.createSeller',compact('user')); 

    }
    public function sellerProduct(Request $request){
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
             $abc= Auth::user()->id;
             $product = DB::table('products')
             ->where('id',$abc)->get();
          
             
             return view('sellerHome',compact('product'));  
               }


}
