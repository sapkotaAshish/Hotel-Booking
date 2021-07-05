<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Event_table;
use App\Room;
use App\Food;
class GuestController extends Controller
{
    public function index(){
        $product= Product::all();
        $event=Event_table::all();
        $room=Room::all();
        $food=Food::all();
    	return view('welcome', compact('product','event','room','food'));
    }
}
