<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RetrievinginputController extends Controller
{
    public function index(Request $request) {
        //Retrieve the name input field
        $name = $request->input('name');
        echo 'Name: '.$name;
        echo '<br>';

        //Retrieve the username input field
        $username = $request->username;
        echo 'Username: '.$username;
        echo '<br>';

        //Retrieve the password input field
        $password = $request->password;
        echo 'Password: '.$password;
    }
}
