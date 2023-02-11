<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StakingRoi extends Model
{
    use HasFactory;

    protected $table = 'staking_rois';

    protected $guarded = ['id'];
}
