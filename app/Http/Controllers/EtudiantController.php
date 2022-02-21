<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
   public function index(){
        $etudiant = \DB::select("SELECT * FROM etudiants");
        return view('etudiant',compact('etudiant'));
        }
    public function store(Request $request){
        \DB::table('etudiants')->insert([
            'noms' => $request->noms,
            'age' => $request->age,
        ]);
    }
}
