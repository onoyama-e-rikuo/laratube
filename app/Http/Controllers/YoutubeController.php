<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GoResult;
use App\Models\JavaResult;
use App\Models\JavaScriptResult;
use App\Models\PhpResult;
use App\Models\PythonResult;
use App\Models\RubyResult;
use App\Services\SearchPHP;
use App\Services\SearchJava;
use App\Services\SearchRuby;
use App\Services\SearchPython;
use App\Services\SearchJavaScript;
use App\Services\SearchGo;

class YoutubeController extends Controller
{
    public function getPHP()
    {
        SearchPHP::Search();
        $results = PhpResult::all();
        return $results;
    }
    public function getJava()
    {
        SearchJava::Search();
        $results = JavaResult::all();
        return $results;
    }
    public function getRuby()
    {
        SearchRuby::Search();
        $results = RubyResult::all();
        return $results;
    }
    public function getPython()
    {
        SearchPython::Search();
        $results = PythonResult::all();
        return $results;
    }
    public function getJavaScript()
    {
        SearchJavaScript::Search();
        $results = JavaScriptResult::all();
        return $results;
    }
    public function getGo()
    {
        SearchGo::Search();
        $results = GoResult::all();
        return $results;
    }
}
