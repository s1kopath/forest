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
            return $this->user_details->visaData;
        }
    }

    function getCryptoDetailsAttribute()
    {
        if ($this->payment_method == "Crypto") {
            return $this->user_details->cryptoData;
        }
    }

    function getBankDetailsAttribute()
    {
        if ($this->payment_method == "Bank") {
            return $this->user_details->bankData;
        }
    }

    public function user_details()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function approved_by_user()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
