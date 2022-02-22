@extends('layouts.master')
@section('contenu')
<div class="container">
    <form action=" {{ route('update-etudiant') }}" method="POST">
        @csrf
        <div class="form-group">
        <input type="hidden" name="id" value="{{ $etudiant->id }} ">
        <label for="noms">nom</label>
        <input type="text" name="noms" value="{{ $etudiant->noms }}" class="form-control" placeholder="saisir votre  nom">
        <label for="noms">age</label>
        <input type="number" name="age" value="{{ $etudiant->age }}" class="form-control" min="0" step="1" placeholder="saisir l'age">
        <br>
        <input type="submit" value="Modifier" class="btn btn-info">
        </div>
    </form>
</div>
@endsection