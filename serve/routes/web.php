<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Artisan;

Route::get('file',function(){
    Artisan::call("system:init");
});

Route::get('/', function(){


    $data = [
        "vue"=>[
            "type"=>"single"
        ],
        "path"=>"BasicTheme::index"
    ];

    return view('front.front',$data);
});

Route::get('/test', function(){
    $data = [
        "vue"=>[
            "type"=>"multi"
        ],
        "path"=>"front.pages.user.home"
    ];

    return view('front.front',$data);
});
