<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmllinkRouteController extends Controller
{
    public function index($id)
    {
        echo $id;
    }
    public function withparameters($name)
    {
        echo $name;
    }
}
