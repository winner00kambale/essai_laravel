<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

    Route::post('/store-etudiant', function(Request $request){
        
        \DB::table('etudiants')->insert([
            'noms' => $request->noms,
            'age' => $request->age,
        ]);
        })->name('store-etudiant');

    Route::get('/etudiant', function(){
        $etudiant = ['toto','titi','popo','dodo'];
        return view('etudiant',compact('etudiant'));
        });

        Route::get('/payement', function(){
            return view('payement');
            })->name('payement');
            Route::get('/new-etudiant', function(){
                return view('new_etudiants');
                })->name('etudiant');
