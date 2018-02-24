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
    //$arr = json_decode($request->user(),true);
    //return $arr['name'];
    return $request->user();
    //return Auth::guard('api')->user();
});


Route::get('products', function () {
    return response()->json(['productId' => [1,2],'lol' =>1], 200);
});