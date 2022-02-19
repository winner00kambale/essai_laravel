@extends('master')
@section('contenu')
<form method="post" action="{{ route('store-etudiant') }}">
    @csrf
    <input type="text" name="noms" placeholder="saisir votre  nom">
    <input type="number" name="age" min="0" step="1" placeholder="saisir l'age">
    <input type="submit" value="enregistrer">
</form>
@endsection