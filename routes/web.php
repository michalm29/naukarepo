<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    $name = request('name');
    return $name;

  /*  return view('welcome', [
       'name' => $name
  ]

  );
});


Route::get('/portki', function () {
    
    $name = request('name');
    return view('ppportki', [
        'name' => $name
    ]);
});

Route::get('/posts/{post}', function($post) {
   $posts = [
        'pierblog' => 'SIEMA TO JA RAFON',
        'drugblog' => 'SPRAWDZWAM SIE NA TYM POZYTYWNYM BICIE WARIACIE'
   ];

   if (! array_key_exists($post, $posts)){
       abort(404, 'Sorry there is no portki here');
   }

   return view('post', [
       'post' => $posts[$post]
   ]);
});

*/

Route::get('/posts/{post}', 'PostsController@show');