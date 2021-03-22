<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function index() {
        echo 'Users';
    }

    function user( $user_name ) {
        return array(
            'id' => 23,
            'username' => $user_name,
            'fullname' => 'Subrata Sarkar',
            'age' => 50,
            'gender' => 'Male',
            'location' => 'Kolkata',
            'country' => 'India'
        );
        //echo "Welcome back $user_name";
    }
}
