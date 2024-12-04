<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


route::get('/',[HomeController::class,'index'])->name('home');
route::get('/hero',[HomeController::class,'hero'])->name('hero');
route::get('/about',[HomeController::class,'about'])->name('about');
route::get('/resume',[HomeController::class,'resume'])->name('resume');
route::get('/portfolio',[HomeController::class,'portfolio'])->name('portfolio');
route::get('/testimonial',[HomeController::class,'testimonial'])->name('testimonial');
route::get('/contact',[HomeController::class,'contact'])->name('contact');
