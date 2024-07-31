<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Methodinjection;

class MethodinjectionController extends Controller
{
    public function index(Methodinjection $myclass) {
        dd($myclass);
    }
}
