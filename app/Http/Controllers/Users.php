<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function index() {
        echo 'Users';
    }

    function user( $user ) {
        /**
         * Returning a view with value and grab the same in the corresponding View file
         */
        //return view( 'user.basic', array( 'user_name' => $user, 'fullname' => 'Subrata Sarkar' ) );

        /**
         * We can return any complex object to make the method behave like an API call
         */
        $objUser = array(
            'id' => 23,
            'username' => $user,
            'basic' => array (
                'fullname' => 'Subrata Sarkar',
                'age' => 50,
                'gender' => 'Male',
            ),
            'location' => array(
                'city' => 'Kolkata',
                'province' => 'West Bengal',
                'country' => 'India',
            ),
            'contact' => array(
                'call' => '+919432750266',
                'whatsApp' => '+918697944988'
            ),
        );
        //dd($objUser);

        //echo json_encode( $objUser );
        return view( 'user.basic', $objUser );
    }
}
