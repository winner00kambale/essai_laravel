
@extends('layouts.master')
@section('contenu')
<div class="container">
<p>hello from etudiant</p>
@if(\Session::has('message'))
<div class="alert alert-primary">{{ \Session::get('message') }}</div>
@endif
<a href="{{ route('etudiant') }}" class="btn btn-info">New Etudiant</a>
<table class="table table-striped table-bordered table-hover mt-2">
<thead>
    <tr>
        <th>id</th>
        <th>noms</th>
        <th>age</th>
        <th>actions</th>
    </tr>    
</thead>
<tbody>
    @foreach($etudiant as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->noms }}</td>
        <td>{{ $item->age }}</td>
        <td>
            <a href="{{ '/edit-etudiant/'.$item->id }}">edit</a> | 
            <a href="{{ '/delete-etudiant/'.$item->id }}">delete</a>
        </td>
    </tr>
    @endforeach

</tbody>
</table>
</div>
@endsection