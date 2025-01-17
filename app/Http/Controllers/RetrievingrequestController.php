<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RetrievingrequestController extends Controller
{
    public function index(Request $request) {
        // Usage of path method
        $path = $request->path();
        echo 'Path Method: '.$path;
        echo '<br>';

        // Usage of is method
        $pattern = $request->is('foo/*');
        echo 'is Method: '.($pattern ? 'true' : 'false');
        echo '<br>';

        // Usage of url method
        $url = $request->url();
        echo 'URL method: '.$url;
    }
}
