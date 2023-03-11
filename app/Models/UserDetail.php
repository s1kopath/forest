<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $appends = ['pic', 'kyc_pic_1', 'kyc_pic_2'];

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

    function getKycPic1Attribute()
    {
        if ($this->kyc_image_1) {
            if (!\Illuminate\Support\Facades\Storage::disk('public')->exists($this->kyc_image_1)) {
                return asset('back-end/img/user.png');
            }
        } else {
            return asset('back-end/img/user.png');
        }

        $storage_link = \Illuminate\Support\Facades\Storage::url($this->kyc_image_1);

        return asset($storage_link);
    }

    function getKycPic2Attribute()
    {
        if ($this->kyc_image_2) {
            if (!\Illuminate\Support\Facades\Storage::disk('public')->exists($this->kyc_image_2)) {
                return asset('back-end/img/user.png');
            }
        } else {
            return asset('back-end/img/user.png');
        }

        $storage_link = \Illuminate\Support\Facades\Storage::url($this->kyc_image_2);

        return asset($storage_link);
    }
}
