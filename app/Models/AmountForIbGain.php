<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmountForIbGain extends Model
{
    use HasFactory;

    protected $table = 'amount_for_ib_gains';

    protected $guarded = ['id'];
}
