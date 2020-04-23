<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JavaResult extends Model
{
    //
    protected $table = 'java_results';

    protected $fillable = [
        'videoId',
        'title',
        'thumbnail'
    ];
}
