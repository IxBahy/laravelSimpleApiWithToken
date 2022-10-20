<?php
use APP\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('register',"AuthController@register");
Route::post('login',"AuthController@login");



// auth :sunctum check the token in your api
Route::group(['middleware'=>["auth:sanctum"]],function(){
// resource allows you to do all the CRUD operations for your api, check documentation
    Route::resources([
        'products'=>'ProductController'
    ]);
    // must login to acces the logout 
    Route::post('logout',"AuthController@logout");
    
});