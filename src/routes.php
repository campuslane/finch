<?php

// initial finch route
Route::get('finch', function(){
    return view('finch::welcome');
});

// page route
Route::get('{slug}', function($slug=""){

    $slug = $slug ?: 'home';

    $view = "finch::pages.$slug";

    if (view()->exists($view)) {
        return view($view);
    }
});

// default the root to home
Route::get('/', function(){
   
    $view = "finch::pages.home";
    if (view()->exists($view)) {
        return view($view);
    }

});