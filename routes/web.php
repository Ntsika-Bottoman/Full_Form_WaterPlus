<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// - - - The Route to get the view "page" that is the actutal form - - - //
Route::get('/create', function() {
    return view('create');
});
// - - - The end of this piece of code that pulls the form - - - //

// - - - This is the route for the POST method, we pass values through this route - - - //
Route::post('/create', function(){
    $article = new Article();
    $article->title = request('title');
    $article->title1 = request('title1');
    $article->title2 = request('title2');
    $article->title3 = request('title3');
    $article->title4 = request('title4');
    $article->body = request('body');
    $article->save();
    return redirect('/dashboard');
});
// - - - The end of the POST method routes that pass values to the DB - - - //
