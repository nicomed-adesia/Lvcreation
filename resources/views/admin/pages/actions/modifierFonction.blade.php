@extends('admin.layoutsAdmin.masterAdmin')
@section('titre')
    Modifier fonction
@endsection
@section('contenu')
<div class="contenuBe-ajoutTeam">
    <h1 class="titre">Modifier focntion</h1>
    <form action="{{route('updateFonction')}}" method="post">
        @csrf
        @if (Session::has('modifierFonction'))
            <div style="text-align: center;">
                {{ Session::get('modifierFonction') }}
            </div>
        @endif
        <div class="contenu-ajoutTeam">
            <div>
                <input type="text" style="display: none;" name="id" value="{{$fon->id}}">
            </div>
            {!! $errors->first('nomFonction', '<span class="diso">:message</span>') !!}
            <input type="text" name="nomFonction" id="" placeholder="nom et prenom" class="input-ajoutTeam" value="{{$fon->nomFonction}}">
            <input type="submit" value="Modifier fonction" class="btn-ajoutTeam">
        </div>
    </form>
</div>      
@endsection
