<?php

use Illuminate\Support\Facades\Route;

/**
 * Use the required controllers
 */
use App\Http\Controllers\Users;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get( '/contact', function() {
    return view( 'contact' );
});

// Short syntax
Route::view( 'about', 'about' );

// URL deep navigation
Route::view( 'blog/', 'blog.list' );

// Dynamic route for single page template
Route::get( 'blog/{slug}', function( $slug ) {
    return view( 'blog.single', array( 'slug' => $slug ) );
});

Route::get( "user/{user}", [Users::class, 'user'] );
