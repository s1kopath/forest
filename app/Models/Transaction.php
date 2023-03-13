<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = [];

    // only possible values on "purpose" column are :: 'Deposit','Withdraw','Invitation Gift','Staking ROI','IB Royalty','Rewards','Contest'.

    public function bonusFrom()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }
}
