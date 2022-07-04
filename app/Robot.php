<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Robot extends Model
{
    protected $fillable= [
        'name',
        'production_date',
        'description',
        'image',
        'robot_id',
        'nuke_Available'
    ];
}
