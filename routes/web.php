<?php

use Illuminate\Support\Facades\Route;


/***  Guest Routes  ***/

use App\Http\Livewire\Pages\{
    Home\Main as Home,
    About\Main as About,
    Cases\Main as CaseMain,
    Profile\Main as Profile,
    Donate\Main as Donate,
    Donors\Main as Donors,
};

use App\Http\Livewire\Pages\Cases\{
    Admin\Add as CaseAdd,
    Admin\Edit as CaseEdit,
    CasePage as CasePage,
};

use App\Http\Livewire\Pages\Admins\{
    Main as Admins
};


/*****************************************************************/
/************************ Main Routes ****************************/
/*****************************************************************/


// Home
Route::get('/', Home::class)->name('home');


// About
Route::get('/about', About::class)->name('about');

// donors
Route::get('/donors', Donors::class)->name('donors');




// Cases
Route::get('/cases', CaseMain::class)->name('cases');
Route::get('/case-page/{case_id}', CasePage::class)->name('case-page');


Route::middleware(['auth:sanctum'])->group(function () {
    Route::middleware(['admin'])->group(function () {

        // cases
        Route::middleware(['superAdmin'])->group(function () {
            Route::get('/add-case', CaseAdd::class)->name('add-case');
            Route::get('/edit-case/{case_id}', CaseEdit::class)->name('edit-case');
        });
        // end cases

        // admins
        Route::get('/admins', Admins::class)->name('admins');
        // end admins


    });
    //Profile

    Route::get('/profile', Profile::class)->name('profile');

    // donate
    Route::get('/donate', Donate::class)->name('donate');
});
