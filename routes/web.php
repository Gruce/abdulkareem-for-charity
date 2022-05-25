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

// use App\Http\Livewire\Pages\Donate\AddCommittee as AddComittee;
use App\Http\Livewire\Pages\Committee\{
    Main as Committee,
    Add as AddCommittee,
    Edit as EditCommittee,
};


/*****************************************************************/
/************************ Main Routes ****************************/
/*****************************************************************/


// Home
Route::get('/', Home::class)->name('home');


// About
Route::get('/about', About::class)->name('about');

// donors
Route::get('/donors' , Donors::class)->name('donors');




// Cases
Route::get('/cases', CaseMain::class)->name('cases');

Route::get('/case-page/{case_id}', CasePage::class)->name('case-page');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::middleware(['admin'])->group(function (){
        // cases
        Route::get('/add-case', CaseAdd::class)->name('add-case');
        Route::get('/edit-case/{case_id}', CaseEdit::class)->name('edit-case');
        // end cases

        // committee
        Route::get('/committee', Committee::class)->name('committee');
        Route::get('/add-committee', AddCommittee::class)->name('add-committee');
        Route::get('/edit-committee/{committee_id}', EditCommittee::class)->name('edit-committee');
        //end committee
    });
    //Profile

    Route::get('/profile' , Profile::class)->name('profile');

    // donate
    Route::get('/donate' , Donate::class)->name('donate');

    // add committee
    // Route::get('/add-committee', AddComittee::class)->name('add-committee');

});
