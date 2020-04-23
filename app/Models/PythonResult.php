<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PythonResult extends Model
{
    //
    protected $table = 'python_results';

    protected $fillable = [
        'videoId',
        'title',
        'thumbnail'
    ];
}
