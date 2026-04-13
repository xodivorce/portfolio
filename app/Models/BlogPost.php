<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    //
    protected $fillable = [
        'post_link',
        'post_image',
        'post_image_alt',
        'post_category',
        'post_date',
        'post_title',
        'post_text',
        'platform',
        'post_iframe'
    ];
}
