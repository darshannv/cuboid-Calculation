<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detail extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'cuboid_name',
        'length',
        'breadth',
        'height',
        'volume',
        'surface_area',
    ];
}
