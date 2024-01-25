<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Profiles;
use App\Http\Controllers;
use App\Http\Controllers\Devis\ModuleItems;
use App\Http\Controllers\Devis\SectionDev;
use App\Http\Controllers\GererClient;
use App\Http\Controllers\ressource\GererProjet as RessourceGererProjet;
use App\Http\Livewire\AnalyseCadrage;
use App\Http\Livewire\GererClient as LivewireGererClient;
use App\Http\Livewire\GererProjet;

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

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/devis', [App\Http\Controllers\devis\Devis::class, 'index'])->middleware('auth');
Route::post('/devis/update', [App\Http\Livewire\Devis\Devis::class, 'updateDevis'])->middleware('auth');



Route::get('/projet', [App\Http\Controllers\projet\Projet::class, 'index'])->middleware('auth');
Route::get('/gererProjet', [App\Http\Controllers\gestion\GererProjet::class, 'index'])->middleware('auth');
Route::post('/gererProjet/update', [App\Http\Livewire\Gestion\GererProjet::class, 'update'])->middleware('auth');


Route::get('/parametre/section', [App\Http\Controllers\section\Section::class, 'index'])->middleware('auth');
Route::post('/section/update', [App\Http\Livewire\Section\Section::class, 'update'])->middleware('auth');

Route::get('/items', [App\Http\Controllers\section\Dev::class, 'index'])->middleware('auth');
Route::get('/chiffrage', [App\Http\Controllers\section\Test::class, 'index'])->middleware('auth');
Route::get('/sectionTest/{id}', [App\Http\Livewire\Section\Test::class, 'removeitem'])->middleware('auth');
Route::post('/sectionTest/modifier/', [App\Http\Livewire\Section\Test::class, 'updateitems'])->middleware('auth');
 


Route::get('/parametrage/gererDevis', [App\Http\Controllers\parametrage\GererDevis::class, 'index'])->middleware('auth');




Route::get('/facture', [App\Http\Controllers\facturation\Facture::class, 'index'])->middleware('auth');
Route::get('/facturedevis', [App\Http\Controllers\facturation\Facture::class, 'facture'])->middleware('auth');



Route::get('/profile', [App\Http\Controllers\parametrage\profile::class, 'index'])->middleware('auth');
Route::post('/profile/update', [App\Http\Livewire\Parametrage\Profile::class, 'update'])->middleware('auth');
Route::get('/employer', [App\Http\Controllers\parametrage\employer::class, 'index'])->middleware('auth');
Route::post('/employer/update', [App\Http\Livewire\Employer::class, 'update'])->middleware('auth');

Route::get('/planification', [App\Http\Controllers\planning\plannification::class, 'index'])->middleware('auth');
Route::get('/planification/gerer', [App\Http\Controllers\planning\GererPlanning::class, 'index'])->middleware('auth');

Route::post('planning/update', [App\Http\Livewire\Planning\Plannification::class, 'planning'])->middleware('auth');



Route::get('/client', [App\Http\Controllers\client\Client::class, 'index'])->middleware('auth');
Route::post('client/update', [App\Http\Livewire\Client\client::class, 'update'])->middleware('auth');

// gerer facture pour le route

Route::get('/gestion/facture', [App\Http\Controllers\gestion\GererFacture::class, 'index'])->middleware('auth')->name("facture");
