<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareconstructorController extends Controller
{
    public function __construct() {
        $this->middleware('middlewareconstructorsecond');
    }

    public function showPath(Request $request) {
        $uri = $request->path();
        echo '<br>URI: '.$uri;
        
        $url = $request->url();
        echo '<br>';
        
        echo 'URL: '.$url;
        $method = $request->method();
        echo '<br>';

        echo 'Method: '.$method;
    }
}
