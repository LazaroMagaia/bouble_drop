<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artists extends Model
{
    use HasFactory;
    protected $table = 'artist';
    protected $fillable = [
        'name',
        'image',
        'gender',
        'description',
        'status'
    ];
}
