<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table='addresses';
    protected $fillable=['country','state','district','city','locality','description','hotel_id'];
    protected $primaryKey='address_id';
    public $timestamps=false;
}
