<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'description'
    ];

    protected $hidden = [
        'created_at',
        'update_at'
    ];
}
