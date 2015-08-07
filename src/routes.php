<?php

// initial finch route
Route::get('finch', function(){
    return view('finch::welcome');
});

// page route
Route::get('{slug}', function($slug){

    $view = "finch::pages.$slug";

    if (view()->exists($view)) {
        return view($view);
    }
});