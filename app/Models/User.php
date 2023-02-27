<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ['id'];

    protected $appends = ['direct_team', 'total_team'];

    public function userToReferer()
    {
        return $this->belongsTo($this::class, 'referer_id', 'id');
    }

    public function userToRank()
    {
        return $this->hasOne(Rank::class, 'user_id');
    }

    public function children()
    {
        return $this->hasMany($this::class, 'referer_id');
    }

    function getDirectTeamAttribute()
    {
        return User::where('referer_id', $this->id)->pluck('id')->toArray();
    }

    function getTotalTeamAttribute()
    {
        $topParent = $this->id;

        $childNodes = DB::select(
            "WITH RECURSIVE cte (id, referer_id, depth) AS (
                SELECT id, referer_id, 1 FROM users WHERE referer_id = :parentId
                UNION ALL
                SELECT n.id, n.referer_id, cte.depth + 1 FROM users n
                INNER JOIN cte ON n.referer_id = cte.id
            )
            SELECT id FROM cte",
            ['parentId' => $topParent]
        );

        $query = array_values(array_column($childNodes, 'id'));

        return $query;
    }
}
