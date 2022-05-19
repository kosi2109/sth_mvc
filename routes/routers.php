<?php

use controllers\HomeController;

Route::get('/',[HomeController::class,'index']);
Route::get('/users',[HomeController::class,'index']);
Route::post('/',[HomeController::class,'post']);