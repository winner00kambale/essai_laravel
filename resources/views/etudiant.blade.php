
@extends('layouts.master')
@section('contenu')
<div class="container">
<p>hello from etudiant</p>
@if(\Session::has('message'))
<div class="alert alert-primary">{{ \Session::get('message') }}</div>
@endif
{{-- <a href="{{ route('etudiant') }}" class="btn btn-info">New Etudiant</a> --}}
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ajouter client</button>
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

{{-- <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#vertically-centered">
    Vertically centered
  </button>

  {{-- <x-modal id="vertically-centered" title="Vertically centered" :centered="true">
    <x-slot name="body">
      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    </x-slot>
    <x-slot name="footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </x-slot>
  </x-modal> --}}

        modal d'insertion --}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Ajouter etudiant</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>     
            </div>
            <div class="modal-body">
                <form id="monformulaire">
                    @csrf
                    <div class="form-group">
                    <label for="noms">noms</label>
                    <input type="text" name="noms" id="noms" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="age">age</label>
                    <input type="number" name="age" id="age" class="form-control" min="0" step="1">
                    </div>
                    <input type="submit" class="btn btn-primary" value="enregistrer">       
                </form>
            </div>
        </div>
    </div>
</div>
{{--end modal d'insertion --}}
@endsection
@section('monscript')
    <script>
        $('#monformulaire').submit(function(event){
            event.preventDefault();
            $.ajax({
                url : '{{ route("store-etudiant") }}',
                method : 'POST',
                data : new FormData(this),
                processData : false,
                contentType : false,
                cache : false,
                headers : {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
                
                success : function(data){
                    alert('Inserted succes');
                    $('#monformulaire')[0].reset();
                }
            });
        });
    </script>
@endsection