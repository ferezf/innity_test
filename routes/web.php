<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThesaurusController;

Route::get('/thesaurus', [ThesaurusController::class, 'showForm'])->name('thesaurus.form');
Route::post('/thesaurus/synonyms', [ThesaurusController::class, 'getSynonyms'])->name('thesaurus.synonyms');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
