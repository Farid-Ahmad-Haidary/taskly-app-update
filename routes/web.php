<?php

use Illuminate\Support\Facades\Route;
use App\Models\Todo;





Route::get('/', function () {
    return view('home' , [
        'tasks'=> Todo::all()
    ]);
})->name('home');


Route::get('/showTask/{id}', function ($id) {
  return view('showTask' , ['eachTask' => Todo::findOrFail($id)] );
})->name('showTasks');
