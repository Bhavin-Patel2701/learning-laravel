<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Constructorinjection;

class ConstructorinjectionController extends Controller
{
    private $myclass;

    public function __construct(Constructorinjection $myclass) {
        $this->myclass = $myclass;
    }

    public function index() {
        dd($this->myclass);
    }
}
