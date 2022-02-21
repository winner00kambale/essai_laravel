
@extends('master')
@section('contenu')
<p>hello from etudiant</p>
<li><a href="{{ route('etudiant') }}">New Etudiant</a></li>
{{-- <button><a href="{{ route('etudiant') }}">new etudiant</a></button> --}}
<ul>
    @foreach($etudiant as $item)
    <li>{{ $item->noms }}</li>
    <li>{{ $item->age }}</li>
    @endforeach
</ul>
@endsection