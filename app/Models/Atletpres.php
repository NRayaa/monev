<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atletpres extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_atletpres',
        'value_atletpres',
        'keterangan_atletpres',
        'monev_id'
    ];
}
