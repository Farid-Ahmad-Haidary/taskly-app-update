<?php

use App\Models\Todo;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;  // برای دریافت داده‌های فرم

// صفحه اصلی (خانه)
Route::get('/', function () {
    return view('home');
})->name('home');

// صفحه فرم ایجاد تسک جدید
Route::get('create', function () {
    return view('create');
})->name('create');



// روت ذخیره تسک (STORE) - درست شده
Route::post('create/store', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'long_description' => 'nullable' 
    ]);
    
    // مرحله ۲: ذخیره در دیتابیس
    $task = new Todo();
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'] ?? '';
    $task->save();
    
    // مرحله ۳: هدایت به صفحه اصلی با پیغام موفقیت
    return redirect()->route('home')->with('success', 'تسک جدید با موفقیت ساخته شد!');
    
})->name('store');




Route::fallback(function () {
    return view('404');
})->name('404');
