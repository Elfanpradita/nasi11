<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;
    protected $table = 'medias';
    protected $fillable = [
        'twitter',
        'facebook',
        'youtube',
        'linkedin',
    ];
}
