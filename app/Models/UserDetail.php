<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $appends = ['pic'];

    function getPicAttribute()
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
}
