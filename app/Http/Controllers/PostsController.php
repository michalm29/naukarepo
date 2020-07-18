<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post){
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
    }
}
