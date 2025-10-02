<?php
use app\controllers\InfoController;
use lib\Route;
use app\controllers\HomeController;
Route::get("/", [HomeController::class, "index"]);
Route::get("/informacion", [InfoController::class, "index"]);
Route::dispatch();