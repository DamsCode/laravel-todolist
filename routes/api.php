<?php


use Illuminate\Http\Request;
use App\Http\Resources\Users as UserResource;
use App\Users;
use App\Lists;
use App\Tasks;
use Illuminate\Support\Facades\Route;

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


Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');


Route::get('users', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Users::all();
});

Route::get('users/{id}', function($id) {

    return Users::find($id)->load('lists');
});

Route::post('users', function(Request $request) {
    return Users::create($request->all());
});

Route::put('users/{id}', function(Request $request, $id) {
    $Users = Users::findOrFail($id);
    $Users->update($request->all());

    return $Users;
});

Route::delete('users/{id}', function($id) {
    Users::find($id)->delete();

    return 204;
});
Route::post('logout', 'Auth\LoginController@logout');


// Lists

Route::get('lists', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Lists::all();
});

Route::get('lists/{id}', function($id) {

    return Lists::find($id)->load('tasks');
});

Route::post('lists', function(Request $request) {
    return Lists::create($request->all());
});

Route::put('lists/{id}', function(Request $request, $id) {
    $Lists = Lists::findOrFail($id);
    $Lists->update($request->all());
    return $Lists;
});

Route::delete('lists/{id}', function($id) {
    Lists::find($id)->delete();
    return 204;
});

// Tasks

Route::get('tasks/{id}', function($id) {

    return Tasks::find($id);
});

Route::post('tasks', function(Request $request) {
    return Tasks::create($request->all());
});

Route::put('tasks/{id}', function(Request $request, $id) {
    $Tasks = Tasks::findOrFail($id);
    $Tasks->update($request->all());

    return $Tasks;
});

Route::delete('tasks/{id}', function($id) {
    Tasks::find($id)->delete();

    return 204;
});
