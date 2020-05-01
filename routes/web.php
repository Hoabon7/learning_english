<?php

use Illuminate\Support\Facades\Route;
use App\model\users;
use App\model\level;
use App\model\test;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('hoabon',function(){
	echo "nguyen van hoa";
});
Route::get('/control','NameController@getid');
Route::get('kiemtra',function(){
	$a=users::all();
	foreach ($a as  $value) {
		echo $value->id."<br>";
		echo $value->firstname."<br>";
		echo $value->lastname."<br>";
		echo $value->email."<br>";
		echo $value->password;
	}
});
Route::get('kiemtralienthong_test_level',function(){
	$a=level::all();
	foreach ($a as  $value) {
		echo $value->namelevel."<br>";
		echo $value->id."<br>";
		foreach ($value->level as $v) {
			echo $v->content;
		}
	}
});
Route::get('test',function(){
	$a=level::all();
	var_dump($a);
});


//--------------------------------------------------------------------------------//
Route::get('level','NameController@getLevel');
