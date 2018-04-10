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
Route::resource('addstation', 'StationsController');
Route::resource('configurestation', 'ConfigureStaion');
Route::post('updateStation','ConfigureStaion@update');

Route::resource('configure10mnode', 'TenMNodeController');
Route::resource('configure2mnode', 'TwoMNodeController');
Route::resource('configuresinknode', 'SinkNodeController');
Route::resource('configuregroundnode', 'GroundNodeController');

Route::get('/node10m_report','TenMNodeController@report1');
Route::get('/node2m_report','TwoMNodeController@report1');
Route::get('/nodesink_report','SinkNodeController@report1');
Route::get('/nodegnd_report','GroundNodeController@report1');

Route::post('/reports10m','TenMNodeController@get10mStationReports');
Route::post('/reportsGnd','GroundNodeController@getGndStationReports');
Route::post('/reportsSink','SinkNodeController@getSinkStationReports');
Route::post('/reports2m','TwoMNodeController@get2mStationReports');

Route::get('/send_test_email', function(){
	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
		$message->subject('Mailgun and Laravel are awesome!');
		$message->from('byarus90@gmail.com', 'Website Name');
		$message->to('kibsysapps@gmail.com');
	});
});

Route::get('/', function () {
    return view('main');
});

Route::get('/ajax-model', function () {

    return view('layouts/ajax-model.php');
});



Route::get('/addnode', function () {
    return view('layouts/addnode');
});

Route::get('/configurenode', function () {
    return view('layouts/configurenode');
});

Route::get('/addsensor', function () {
    return view('layouts/addsensor');
});

Route::get('/configuresensor', function () {
    return view('layouts/configuresensor');
});

Route::get('/tester', 'NodeStatusAnalyzerController@analyze');