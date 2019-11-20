<?php


use Illuminate\Http\Request;
use App\Http\Resources\Users as UserResource;
use App\Users;

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

Route::get('users', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Users::all();
});

Route::get('users/{id}', function($id) {
    return Users::find($id);
});

Route::post('users', function(Request $request) {
    return Users::create($request->all);
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

Route::post('register', 'Auth\RegisterController@register');
