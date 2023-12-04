@extends('admin.layoutsAdmin.masterAdmin')
@section('titre')
    admin
@endsection
@section('contenu')
<div class="contenuBe-ajoutTeam">
    <h1 class="titre">Modifier team</h1>
    <form action="{{route('updateTeam')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if (Session::has('modifier'))
            <div style="text-align: center;">
                {{ Session::get('modifier') }}
            </div>
        @endif
        <div class="contenu-ajoutTeam">
            <div>
                <input type="text" style="display: none;" name="id" value="{{$team->id}}">
            </div>
            {!! $errors->first('NomPrenom', '<span class="diso">:message</span>') !!}
            <input type="text" name="NomPrenom" id="" placeholder="nom et prenom" class="input-ajoutTeam" value="{{$team->NomPrenom}}">
            <select name="fonction" id="" class="input-ajoutTeam" >
                <option value="{{$team->fonction}}"  selected>Fonction</option>
                <option value="Dev web" >Dev web</option>
                <option value="graphique" >graphique</option>
            </select>
            {!! $errors->first('contact', '<span class="diso">:message</span>') !!}
            <input type="text" name="contact" id="" placeholder="contact" class="input-ajoutTeam" value="{{$team->contact}}">
            {!! $errors->first('email', '<span class="diso">:message</span>') !!}
            <input type="email" name="email" placeholder="email" class="input-ajoutTeam" value="{{$team->email}}">
            {!! $errors->first('facebook', '<span class="diso">:message</span>') !!}
            <input type="text" name="facebook" id="" placeholder="facebook" class="input-ajoutTeam" value="{{$team->facebook}}">

            <input type="hidden" name="imageTaloha" value="{{$team->image}}">
            <div>
                <label for="">Entrer image:</label>
                <input type="file" name="image" id="" value="{{$team->image}}">
            </div>
            <input type="submit" value="Modifier team" class="btn-ajoutTeam">
        </div>
    </form>
</div>      
@endsection
