<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preview extends Model
{
    use HasFactory;

    protected $table = 'preview';

    protected $fillable = [
        'judul',
        'slug',
        'bidang',
        'tim',
        'path',

    ];
}
