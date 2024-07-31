<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function namedroute() {
        $word = "named route";
        echo $word;
    }
}
