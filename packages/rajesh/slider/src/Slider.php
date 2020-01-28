<?php

namespace Rajesh\Slider;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';

    protected $fillable =[
    	'name',
    	'caption',
    	'status',
    	'order',
    ];
}
