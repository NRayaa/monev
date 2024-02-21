<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihpres extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_pelatihpres',
        'value_pelatihpres',
        'keterangan_pelatihpres',
        'monev_id'
    ];
}
