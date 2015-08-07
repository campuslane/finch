<?php

// initial finch route
Route::get('finch', function(){
    return view('finch::welcome');
});


// page route
Route::get('{slug}', function($slug=""){

    $slug = $slug ?: 'home';

    $view = "pages.$slug";

    if (view()->exists($view)) {
        return view($view);
    }
});

// default the root to home
Route::get('/', function(){
   
    $view = "pages.home";
    
    if (view()->exists($view)) {
        return view($view);
    }

});