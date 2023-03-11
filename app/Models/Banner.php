<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $appends = ['image'];

    function getImageAttribute()
    {
        if ($this->image_path) {
            if (!\Illuminate\Support\Facades\Storage::disk('public')->exists($this->image_path)) {
                return asset('back-end/img/demo-banner.png');
            }
        } else {
            return asset('back-end/img/demo-banner.png');
        }

        $storage_link = \Illuminate\Support\Facades\Storage::url($this->image_path);

        return asset($storage_link);
    }
}
