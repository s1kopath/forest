<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IbRoyality extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function royaltiesToRank()
    {
        return $this->belongsTo(RankAndReward::class, 'rank_id');
    }
}
