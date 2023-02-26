<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function rankToRankReward()
    {
        return $this->belongsTo(RankAndReward::class, 'rank_id');
    }
}
