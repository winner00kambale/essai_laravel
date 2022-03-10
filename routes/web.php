<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Animal;

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\UsersController;
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
Route::get('/',function(){
    return view('welcome');
});
Route::get('/animal', function () {
    $data = Animal::all();
    dd($data);
});

Route::post('/animals', function(Request $request){
    Animal::create([
        'name'=>$request->name,
        'espece'=>$request->espece,
    ]);
})->name('store');




// Route::get('/', function () {
//     return view('animal');
// });
Route::get('/toto', function(){
return view('toto');
});
Route::get('/master', function(){
    return view('master');
    });

//Insertion avec controller
    Route::post('/store-etudiant',[EtudiantController::class,'store'])->name('store-etudiant');
//Affichage avec controller
    Route::get('/etudiant',[EtudiantController::class,'index'])->name('aficher_etudiant');

//modification avec controller
    Route::get('/edit-etudiant/{id}',[EtudiantController::class,'edit'])->name('edit-etudiant');
    Route::post('/update-etudiant',[EtudiantController::class,'update'])->name('update-etudiant');
//Suppression avec controller
    Route::get('/delete-etudiant/{id}',[EtudiantController::class,'destroy'])->name('delete-etudiant');
    

    Route::get('/payement', function(){
        return view('payement');})->name('payement');
    // Route::get('/new-etudiant', function(){
    //     return view('new_etudiants');
    // })->name('etudiant');

    Route::get('/login',[UsersController::class,'index'])->name('login.index');
    Route::post('/user',[UsersController::class,'authenticate'])->name('login.authenticate');

    
