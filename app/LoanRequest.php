<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanRequest extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'loantype_id', 'amount', 'purpose', 'business_name', 'business_age', 'state', 'city', 'email', 'phone', 'status'
    ];
}
