<?php

use Illuminate\Support\Facades\Route;


/***  Guest Routes  ***/
use App\Http\Livewire\Guest\{
    Home\Main as GuestHome
};

/***  User Routes  ***/
use App\Http\Livewire\User\{
    Home as UserHome
};

/***  Admin Routes  ***/
use App\Http\Livewire\Admin\{
    Home as AdminHome
};

/*** Cases Routes */
use App\Http\Livewire\Cases\{
    Main as CaseMain
};



/*****************************************************************/
/************************ Main Routes ****************************/
/*****************************************************************/

// Guest Group
Route::middleware(['guest'])->group(function () {
    Route::get('/', GuestHome::class)->name('guest.home');
});


// User Group
Route::prefix('user')->middleware(['auth:sanctum'])->group(function () {
    Route::get('/', UserHome::class)->name('user.home');
});



// Admin Group
Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/', AdminHome::class)->name('admin.home');
});



// Cases 
Route::get('/cases', CaseMain::class)->name('cases');