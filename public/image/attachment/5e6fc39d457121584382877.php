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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::Apiresource('/categorys', 'Api\CategoryController');

Route::Apiresource('brands','Api\BrandController');

Route::Apiresource('items','Api\ItemController');

Route::Apiresource('/specifications','Api\SpecificationController');

Route::get('/getbrand','Api\SpecificationController@getBrand');

Route::get('/orderDate','Api\SpecificationController@orderDate');