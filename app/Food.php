<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    // protected guarded=[];
    // this equals 
    protected $table='foods';
    protected $fillable=['name','type','price','description','images','hotel_id'];
    protected $primaryKey='food_id';
    public $timestamps=false;
}
