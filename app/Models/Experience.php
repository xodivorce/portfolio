<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //
    protected $fillable = [
        'title',
        'start_year',
        'end_year',
        'description'
    ];
}
