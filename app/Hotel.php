<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table='hotels';
    protected $fillable=['name','ratings'];
    protected $primaryKey='hotel_id';
    public $timestamps=false;
 
}
