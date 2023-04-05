<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/globalbusinessconulting_2023_AB', [App\Http\Controllers\HomeController::class, 'admindashbord'])->name('globalbusinessconulting_2023_AB');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::get('/a-propos', function () {
    return view('a-propos');
})->name('a-propos');

Route::get('/oriantations', function () {
    return view('oriantations');
})->name('oriantations');

Route::get('/dispositif', function () {
    return view('dispositif');
})->name('dispositif');

Route::get('/leadership', function () {
    return view('leadership');
})->name('leadership');

Route::get('/offre', function () {
    return view('offre');
})->name('offre');

// policyhack section
Route::get('/policyhack/acceuil', function () {
    return view('policyhack.hackathon.acceuil');
})->name('policyhack.acceuil');

Route::get('/policyhack/apercu', function () {
    return view('policyhack.hackathon.apercu');
})->name('policyhack.apercu');

Route::get('/policyhack/acteur', function () {
    return view('policyhack.hackathon.acteur');
})->name('policyhack.acteur');

Route::get('/policyhack/partenaire', function () {
    return view('policyhack.hackathon.partenaire');
})->name('policyhack.partenaire');
 

Route::get('/policyhack/defi', function () {
    return view('policyhack.hackathon.defi');
})->name('policyhack.defi');


// policyAcademy section

Route::get('/policyaccademy/acceuil', function () {
    return view('policyAcademy.acceuil');
})->name('policyaccademy.acceuil');

Route::get('/policyaccademy/policyHackathon', function () {
    return view('policyAcademy.policyHackathon');
})->name('policyaccademy.policyHackathon');


Route::get('/policyaccademy/designthinking', function () {
    return view('policyAcademy.designthinking');
})->name('policyaccademy.designthinking');

Route::get('/policyaccademy/management', function () {
    return view('policyAcademy.management');
})->name('policyaccademy.management');


