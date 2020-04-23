<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoResult extends Model
{
    //
    protected $table = 'go_results';

    protected $fillable = [
        'videoId',
        'title',
        'thumbnail'
    ];
}
