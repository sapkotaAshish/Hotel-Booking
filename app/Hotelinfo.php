<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotelinfo extends Model
{
    protected $table='hotelinfos';
    protected $fillable=['name','email','phone','mobile','description','imagea','imageb','imagec','hotel_id'];
    protected $primaryKey='hotelinfo_id';
    public $timestamps=false;
}
