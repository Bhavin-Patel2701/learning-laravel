<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RetrievingcookieController extends Controller
{
    public function setcookie(Request $request) {
        $minutes = 0.5;
        $response = new Response('Hello World');
        $response->withCookie(cookie('name', 'any words', $minutes));
        return $response;
    }

    public function getcookie(Request $request) {
        $value = $request->cookie('name');
        echo $value;
    }
}
