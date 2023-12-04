@extends('admin.layoutsAdmin.masterAdmin')
@section('titre')
    admin
@endsection
@section('contenu')
<div class="contenuBe-ajoutTeam">
    <h1 class="titre text-center">Ajout team</h1>
    {{-- <form action="{{route('addTeam')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if (Session::has('tafiditra'))
            <div style="text-align: center;">
                {{ Session::get('tafiditra') }}
            </div>
        @endif
        <div class="contenu-ajoutTeam">
            {!! $errors->first('NomPrenom', '<span class="diso">:message</span>') !!}
            <input type="text" name="NomPrenom" id="" placeholder="nom et prenom" class="input-ajoutTeam">
            <select name="fonction" id="" class="input-ajoutTeam">
                <option value=""  selected>Fonction</option>
                <option value="Dev web" >Dev web</option>
                <option value="graphique" >graphique</option>
            </select>
            {!! $errors->first('contact', '<span class="diso">:message</span>') !!}
            <input type="text" name="contact" id="" placeholder="contact" class="input-ajoutTeam">
            {!! $errors->first('email', '<span class="diso">:message</span>') !!}
            <input type="email" name="email" placeholder="email" class="input-ajoutTeam">
            {!! $errors->first('facebook', '<span class="diso">:message</span>') !!}
            <input type="text" name="facebook" id="" placeholder="facebook" class="input-ajoutTeam">
            <div>
                <label for="">Entrer image:</label>
                <input type="file" name="image" id="">
            </div>
            <input type="submit" value="ajouter team" class="btn-ajoutTeam">
        </div>
    </form> --}}
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-8 m-auto">
                <form action="{{route('addTeam')}}" method="POST" enctype="multipart/form-data">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Ajout team</h6>
                        {!! $errors->first('NomPrenom', '<span class="diso">:message</span>') !!}
                        <div class="form-floating mb-3">
                            <input type="text" name="NomPrenom" class="form-control" id="floatingInput"
                                placeholder="Nom et prénom">
                            <label for="floatingInput">Nom et prénom</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" name="fonction" aria-label="Floating label select example">
                                {{-- <option selected>Selectionner fonction</option> --}}
                                <option value="1">Dev web</option>
                                <option value="2">Graphique</option>
                                <option value="3">Call center</option>
                            </select>
                            <label for="floatingSelect">Selectionner fonction</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="" class="form-control" id="floatingInput"
                                placeholder="adresse email">
                            <label for="floatingInput">Adresse email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingPassword"
                                placeholder="Contact">
                            <label for="floatingPassword">Contact</label>
                        </div>
                        <div class="mb-3">
                            <label for="">Entrer image:</label>
                            <input type="file" name="image" id="">
                        </div>
                        <button type="submit" class="btn btn-light">Ajouter team</button>
                        {{-- <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here"
                                id="floatingTextarea" style="height: 150px;"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div> --}}
                    </div>
                </form>
            </div>            
        </div>
    </div>
    </div>
</div>      
@endsection
