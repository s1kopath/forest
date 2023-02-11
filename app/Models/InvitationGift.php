<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvitationGift extends Model
{
    use HasFactory;

    protected $table = 'invitation_gifts';

    protected $guarded = ['id'];
}
