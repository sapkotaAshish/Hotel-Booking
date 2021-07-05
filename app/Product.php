<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $fillable=['name','type','price','description','images','id'];
    protected $primaryKey='product_id';
    public $timestamps=false;
}
