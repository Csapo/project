<?php

use App\Http\Controllers\panasz_controller_api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth::api');

Route::get('/',[panasz_controller_api::class,'index']);

Route::delete('/panasz/{id}',[panasz_controller_api::class,'destroy']);