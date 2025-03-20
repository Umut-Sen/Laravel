<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Planeten extends Controller
{
    public function Planeten() {
        $planet1 = DB::table("planets")->get();  
        DB::table("planets")->insert(["name" => "zencigot",
        "sizeinkm" => "8km"
    ]);
        $planet2 = DB::table("planets")->insert([
            "name" => "Orion",
            "sizeinkm" => "12km"
        ]);
    }
 
}
