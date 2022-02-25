<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
   public function index(){
        $etudiant = \DB::select("SELECT * FROM etudiants order by id DESC");
        return view('etudiant',compact('etudiant'));
        }
    public function store(Request $request){
        $request->validate([
            'noms' => 'required',
            'age' => 'required'
        ]);
        \DB::table('etudiants')->insert([
            'noms' => $request->noms,
            'age' => $request->age,
        ]);
        //return back()->with('message','insertion avec succes');
        // return redirect()->route('aficher_etudiant')->with('message','insertion avec succes');
        return response()->json(['message' => 'inserted succes']);

    }
    public function edit($id){
        $data = \DB::select("SELECT * FROM etudiants WHERE id = ?",[$id]);
        $etudiant = $data[0];
        return view('edit',compact('etudiant'));
    }
    public function update(Request $request){
        \DB::update('UPDATE etudiants set noms = ?,age = ? where id = ?',[$request->noms,$request->age,$request->id]);
        return redirect()->route('aficher_etudiant');
    }
    public function destroy($id){
        \DB::delete('DELETE FROM etudiants where id = ?',[$id]);
        return redirect()->route('aficher_etudiant');
    }
}
