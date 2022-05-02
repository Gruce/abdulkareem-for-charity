<?php

use Illuminate\Support\Facades\Route;


/***  Guest Routes  ***/
use App\Http\Livewire\Pages\{
    Home\Main as Home,
    About\Main as About,
    Cases\Guest\Main as CaseMain
};


/*****************************************************************/
/************************ Main Routes ****************************/
/*****************************************************************/


// Home
Route::get('/', Home::class)->name('home');


// About
Route::get('/about', About::class)->name('about');




// // Cases
Route::get('/cases', CaseMain::class)->name('cases');