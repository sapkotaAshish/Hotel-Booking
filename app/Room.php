<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table='rooms';
    protected $fillable=['type','price','no_of_bed','booking_open','booking_close','status','television','AC','bathroom','railing','description','pic','user_id','hotel_id'];
    protected $primaryKey='room_id';
    public $timestamps=false;
 
}