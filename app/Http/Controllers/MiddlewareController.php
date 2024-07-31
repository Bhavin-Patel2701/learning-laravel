<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareController extends Controller
{
    public function index() {
        echo "<br>Middleware Controller.";
    }
}
