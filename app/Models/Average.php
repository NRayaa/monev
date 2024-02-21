<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Average extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_average',
        'value_average',
        'monev_id'
    ];
}
