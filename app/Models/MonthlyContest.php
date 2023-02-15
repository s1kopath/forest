<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyContest extends Model
{
    use HasFactory;

    protected $table = 'monthly_contests';

    protected $guarded = ['id'];
}
