<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//Route::auth();


Auth::routes();

//Route::get('/home', 'HomeController@index')
Route::get('/', function (){
    return view('auth.login');
});


//Route::get('/login', 'Mgr\LoginController@index');
Route::get('/captcha/{config?}',function (Mews\Captcha\Captcha $captcha, $config ='default'){
return $captcha->create($config);});



Route::get('/uploaditem/{itemid}','Mgr\ItemController@uploaditem');
Route::post('/item/uploadpic/','Mgr\ItemController@uploadpic');

Route::match(['get','post'],'/item/search', 'Mgr\ItemController@search');
Route::any('/item/form/{ib_xmbh}', 'Mgr\ItemController@form');
Route::resource('/item','Mgr\ItemController');
//Route::any('/produce/create','Mgr\ProduceController@create');
//Route::any('/produce/{ib_xmbh}','Mgr\ProduceController@index');

//Route::any('/produce/info/{im_cpbh}','Mgr\ProduceController@info');
Route::get('/uploadproduce/{itemid}','Mgr\ProduceController@uploadproduce');
Route::post('/produce/uploadpic/','Mgr\ProduceController@uploadpic');
Route::get('/produce/list/{produce}','Mgr\ProduceController@displayindex');
Route::get('/produce/add/{xmbh}','Mgr\ProduceController@produceadd');
Route::resource('/produce','mgr\ProduceController');
//Route::any('/item/uploadpic','Mgr\CommonContraller@uploadpic');
Route::get('/changepassword','mgr\UserInfoController@changePassword');
Route::post('/changepassword','mgr\UserInfoController@update');
Route::get('/search','mgr\SearchController@search');
Route::match(['get','post'],'/searchresult','mgr\SearchController@searchresult');



