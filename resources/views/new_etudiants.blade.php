@extends('layouts.master')
@section('contenu')
<div class="container">
    {{-- message de confirmation d'insertion --}}
    @if($errors->any())  
        <div class="alert alert-danger">
        @foreach ($errors->all() as $item)
            <p>{{ $item }}</p>
        @endforeach
        </div>
    @endif
    <form method="post" action="{{ route('store-etudiant') }}">
        @csrf
        <input type="text" name="noms" placeholder="saisir votre  nom">
        <input type="number" name="age" min="0" step="1" placeholder="saisir l'age">
        <input type="submit" value="enregistrer">
    </form>
</div>
@endsection