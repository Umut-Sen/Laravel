<?php

use Illuminate\Support\Facades\routes;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Planeten;
Route::get('/', function () {
 
});

Route::get("/Planeten",[Planeten::class, "Planeten"]);
