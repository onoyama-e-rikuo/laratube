<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhpResult extends Model
{
    //
    protected $table = 'php_results';

    protected $fillable = [
        'videoId',
        'title',
        'thumbnail'
    ];
}
