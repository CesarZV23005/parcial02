<?php
use lib\Route;
use app\controllers\HomeController;
Route::get("/", [HomeController::class, "index"]);
Route::dispatch();