<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IbRoyality extends Model
{
    use HasFactory;

    protected $table = "ib_royalities";

    protected $guarded = ['id'];
}
