<?php

use Illuminate\Support\Facades\Route;


/***  Guest Routes  ***/
use App\Http\Livewire\Pages\{
    Home\Main as Home,
    About\Main as About,
    Cases\Main as CaseMain,
    Profile\Main as Profile,
    Donate\Main as Donate,
    
};

use App\Http\Livewire\Pages\Cases\{
    Admin\Add as CaseAdd,
};


/*****************************************************************/
/************************ Main Routes ****************************/
/*****************************************************************/


// Home
Route::get('/', Home::class)->name('home');


// About
Route::get('/about', About::class)->name('about');




// Cases
Route::get('/cases', CaseMain::class)->name('cases');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::middleware(['admin'])->group(function (){
        Route::get('/add-case', CaseAdd::class)->name('add-case');
    });
    //Profile

    Route::get('/profile' , Profile::class)->name('profile');

    // donate
    Route::get('/donate' , Donate::class)->name('donate');
   
});