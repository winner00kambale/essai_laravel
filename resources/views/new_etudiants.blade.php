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
    <form method="POST" action="{{ route('new_etudiants') }}">
        @csrf
        <input type="text" name="noms" id="noms" placeholder="saisir votre  nom">
        <input type="number" name="age" id="age" min="0" step="1" placeholder="saisir l'age">
        <input type="submit" value="enregistrer">
    </form>
</div>
@endsection

@section('monscript')
    <script>
        $('#monformulaire').submit(function(event){
            event.preventDefault();

            $.ajax({
                url : '{{ route("new_etudiants") }}',
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