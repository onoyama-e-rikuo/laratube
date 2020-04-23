<?php

Route::get('api/php','YoutubeController@getPHP');
Route::get('api/java','YoutubeController@getJava');
Route::get('api/ruby','YoutubeController@getRuby');
Route::get('api/python','YoutubeController@getPython');
Route::get('api/javascript','YoutubeController@getJavaScript');
Route::get('api/go','YoutubeController@getGo');

