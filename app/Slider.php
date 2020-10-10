<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name', 'caption', 'slide', 'loan_id', 'status'
    ];
    
    public $timestamps = true;

    /**
     * slider belongs to loan
    */
    public function loan(){
        return $this->belongsTo('App\Loan');
    }

}
