<?php
// implement your routes here
use app\Route;
use controllers\HomeController;

Route::get('/',[HomeController::class,'index']);
