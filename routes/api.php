<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('russik', function (){
    dd('drugak say');
});

Route::post('register', 'Auth\RegisterController@create')       -> name('login');
Route::post('login',    'Auth\LoginController@login')           -> name('auth');


Route::group(['prefix' => 'role'], function () {

    Route::post('set', 'Api\RoleController@setUserRole')        ->name('api.role.set');
});

Route::group(['prefix' => 'school'], function () {

    Route::get('all',  'Api\SchoolController@getAllSchool')           -> name('api.school.all');
    Route::get('info/{id}', 'Api\SchoolController@getSchool')         -> name('api.school.info');
    Route::post('add', 'Api\SchoolController@addSchool')              -> name('api.school.add');
    Route::post('update', 'Api\SchoolController@updateSchool')           -> name('api.school.update');

});
