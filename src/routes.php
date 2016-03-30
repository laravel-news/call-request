<?php

// LaravelNews/CallRequest - общий неймспейс нашего пакета

Route::group(array('prefix'=>'call-request','namespace' => 'LaravelNews\CallRequest\Controllers','middleware' => ['web']), function() {

    Route::any('/form', ['as' => 'call_request_form','uses' => 'CallRequestController@form']);


});




