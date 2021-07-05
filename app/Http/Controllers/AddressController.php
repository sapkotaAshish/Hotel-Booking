<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Address;
use DB;
class AddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function createAddress(){
       $hotels=Hotel::all();
       $address=Address::all();
    	return view('hotels.createAddress',compact('hotels','address'));
    }
    public function addressCreate(Request $request){
        $hotels=Hotel::all();

        Address::create($request->all());

        $address=Address::all();

         return view('hotels.createAddress',compact('hotels','address'));
     }
     public function manageAddress(){
        $hotels=Hotel::all();


        $address=Address::all();

         return view('hotels.manageAddress',compact('hotels','address'));
     }
     public function findAddress( Request $request){
      
        $abc=$request->get('abc');
        $address = DB::table('addresses')
        ->where('hotel_id',$abc)->get()
        ;
                 $hotels=Hotel::all();

      return view('hotels.manageAddress',compact('address','hotels'));

        }

        public function editAddress($id)
        {
                
            $address = DB::table('addresses')
            ->where('address_id',$id)->get();
        return view('hotels.editform.editAddress',compact('address'));
        }
        public function updateAddress(Request $request)
        {
            $id= $request->input('address_id');
            $country = $request->country;
            $state = $request->state;
            $district = $request->district;
            $city = $request->city;
            $locality = $request->locality;
            $description = $request->description;
            $hotel_id=$request->hotel_id;

            $addresses = DB::update('UPDATE addresses SET country = ?, state = ?, district = ?, city = ?, locality = ?, description = ?, hotel_id = ? where address_id = ?',[$country,$state,$district,$city,$locality,$description,$hotel_id,$id]);
    
            $address=Address::all();
            $hotels=Hotel::all();

            return view('hotels.manageAddress',compact('address','hotels'));
        }
        public function deleteAddress($id)
        {
            DB::delete('DELETE FROM addresses where address_id = ?',[$id]);
            // DB::delete('DELETE * FROM rooms')
            $address=Address::all();
            $hotels=Hotel::all();

            return view('hotels.manageAddress',compact('address','hotels'));
    
        }
    

}
