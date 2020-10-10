<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name', 'description', 'doc_req', 'faq', 'icon', 'status'
    ];

    public $timestamps = true;

    /**
     * loan has one slider
    */
    public function loan(){
        return $this->hasOne('App\Slider');
    }

    /**
     * loan has many user request
    */
    public function user_request(){
        return $this->hasMany('App\LoanRequest');
    }

}
