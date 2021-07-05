<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event_table extends Model
{
    protected $table='events';
    protected $fillable=['name','type','start_date','end_date','description','imagea','imageb','hotel_id'];
    protected $primaryKey='event_id';
    public $timestamps=false;
}
