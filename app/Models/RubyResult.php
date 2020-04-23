<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RubyResult extends Model
{
    //
    protected $table = 'ruby_results';

    protected $fillable = [
        'videoId',
        'title',
        'thumbnail'
    ];
}
