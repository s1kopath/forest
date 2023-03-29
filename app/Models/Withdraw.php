<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $appends = ['visa_details', 'crypto_details', 'bank_details'];


    function getVisaDetailsAttribute()
    {
        if ($this->payment_method == "Visa") {
            return auth()->user()->visaData;
        }
    }

    function getCryptoDetailsAttribute()
    {
        if ($this->payment_method == "Crypto") {
            return auth()->user()->cryptoData;
        }
    }

    function getBankDetailsAttribute()
    {
        if ($this->payment_method == "Bank") {
            return auth()->user()->bankData;
        }
    }
}
