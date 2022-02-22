<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\EtudiantController;
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
    return view('welcome');
});
Route::get('/toto', function(){
return view('toto');
});
Route::get('/master', function(){
    return view('master');
    });

//Insertion avec controller
    Route::post('/store-etudiant',[EtudiantController::class,'store'])->name('store-etudiant');
//Affichage avec controller
    Route::get('/etudiant',[EtudiantController::class,'index']);

//modification avec controller
    Route::get('/edit-etudiant/{id}',[EtudiantController::class,'edit'])->name('edit-etudiant');
    Route::post('/update-etudiant',[EtudiantController::class,'update'])->name('update-etudiant');


        Route::get('/payement', function(){
            return view('payement');
            })->name('payement');
            Route::get('/new-etudiant', function(){
                return view('new_etudiants');
                })->name('etudiant');
