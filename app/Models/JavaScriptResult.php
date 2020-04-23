<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JavaScriptResult extends Model
{
    //
    protected $table = 'java_script_results';

    protected $fillable = [
        'videoId',
        'title',
        'thumbnail'
    ];
}
