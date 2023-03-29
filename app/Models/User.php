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

    protected $appends = ['direct_team', 'total_team', 'total_investment', 'total_deposit', 'total_withdraw'];

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

    public function userToUserDetails()
    {
        return $this->hasOne(UserDetail::class, 'user_id');
    }

    public function getTotalInvestmentAttribute()
    {
        return $this->hasMany(UserStake::class, 'user_id')->sum('amount');
    }

    public function getTotalDepositAttribute()
    {
        return $this->hasMany(Deposit::class, 'user_id')->whereIn('status', [0, 1])->sum('amount');
    }

    public function getTotalWithdrawAttribute()
    {
        return $this->hasMany(Withdraw::class, 'user_id')->whereIn('status', [0, 1])->sum('amount');
    }

    public function visaData()
    {
        return $this->hasOne(VisaDetails::class, 'user_id');
    }

    public function bankData()
    {
        return $this->hasOne(BankDetails::class, 'user_id');
    }
    public function cryptoData()
    {
        return $this->hasOne(CryptoDetails::class, 'user_id');
    }
}
