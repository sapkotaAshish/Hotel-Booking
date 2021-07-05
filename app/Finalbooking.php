<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finalbooking extends Model
{
    protected $table='bookings';
    protected $fillable=['total','user_id','product_id'];
    protected $primaryKey='booking_id';
    public $timestamps=false;}
