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
/*
--------------------------------------------------------------------------
|Route::get('/', function () 
|return view('admin.rtm_app.home_menu');
|Route::get('/test', function () {
|return view('pages.index');

---------------------------------------------------------------------------


-----------------------------------------------------------
*/
Route::group([
    'prefix'=>'',
    'as'=>'browse::'
],function(){
    Route::any('/', ['as' => 'home', 'uses' => 'HomePageController@homepage']);
    Route::any('/info',['as'=>'info','uses'=>'ReportController@info']);
    Route::any('/search',['as'=>'detail','uses'=>'HomePageController@individualReport']);
});

//Route::any('/', function(){
//
//    return view('admin.rtm_app.rtmhome');
//});
//Route::any('/test', function(){
//
//    return view('admin.rtm_app.rtmhome');
//});
