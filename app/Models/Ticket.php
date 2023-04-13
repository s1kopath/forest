<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $appends = ['img'];

    public function replies()
    {
        return $this->hasMany(TicketReply::class);
    }
    
    function getImgAttribute()
    {
        if ($this->image) {
            if (!\Illuminate\Support\Facades\Storage::disk('public')->exists($this->image)) {
                return asset('back-end/img/user.png');
            }
        } else {
            return asset('back-end/img/user.png');
        }

        $storage_link = \Illuminate\Support\Facades\Storage::url($this->image);

        return asset($storage_link);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    public function support()
    {
        return $this->belongsTo(User::class, 'response_by');
    }
}
