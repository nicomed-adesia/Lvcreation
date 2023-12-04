@extends('admin.layoutsAdmin.masterAdmin')
@section('titre2')
    Ajout Blog
@endsection
@section('contenu')
   <div class="contenuBe-ajoutTeam">
    <h1 class="titre text-center">Ajout Service</h1>
    {{-- <form action="{{route('AjService')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if (Session::has('tafiditrasrev'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafaBlog')}} &#128525; &#128525; </h6>
        @endif
        @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
        @endif

        <div class="contenu-ajoutTeam">
            {!! $errors->first('nomService', '<span class="diso">:message</span>') !!}
            <input type="text" name="nomService" id="" placeholder="Nom de votre blog" class="input-ajoutTeam">


            {!! $errors->first('serviceCategorie', '<span class="diso">:message</span>') !!}           
            <select name="serviceCategorie" id="" class="input-ajoutTeam">
                <option value="">categorie Service</option>
                    @foreach ($categorieService as $cat)
                        <option value="{{$cat->service}}">{{$cat->service}}</option>
                    @endforeach
            </select>

            {!! $errors->first('AvantageOffre', '<span class="diso">:message</span>') !!}
            <input type="text" name="AvantageOffre" id="" placeholder="Avantage pour les offres" class="input-ajoutTeam">
           
            {!! $errors->first('description', '<span class="diso">:message</span>') !!}
            <input type="text" name="description" id="" placeholder="DescriptionBlog" class="input-ajoutTeam">

            
            {!! $errors->first('tarifService', '<span class="diso">:message</span>') !!}
            <input type="number" name="tarifService" id="" placeholder="prixBlog" class="input-ajoutTeam">

            {!! $errors->first('statueService', '<span class="diso">:message</span>') !!}
            <input type="number" name="statueService" id="" placeholder="statueBlog" class="input-ajoutTeam">


            {!! $errors->first('imageService', '<span class="diso">:message</span>') !!}
            <div>
                <label for="">Entrer image:</label>
                <input type="file" name="imageService" id="">
            </div>
            <input type="submit" value="ajouter Blog" class="btn-ajoutTeam">
        </div>
    </form> --}}
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-8 m-auto">
                @if (Session::has('tafiditrasrev'))
                    <h6 class="success"> &#128525; &#128525; {{Session::get('tafaBlog')}} &#128525; &#128525; </h6>
                     @endif
                    @if (Session::has('diso'))
                   <h6 class="diso"> {{Session::get('diso')}} ; </h6>
                @endif
                <form action="{{route('addFonction')}}" method="POST" enctype="multipart/form-data">
                    @csrf  
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Ajout team</h6>
                        {!! $errors->first('nomFonction', '<span class="diso">:message</span>') !!}
                        <div class="form-floating mb-3">
                            <input type="text" name="nomFonction" class="form-control" id="floatingInput"
                                placeholder="Nom fonction">
                            <label for="floatingInput">Nom fonction</label>
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

                        {{-- submit --}}
                        <button type="submit" class="btn btn-light">Ajouter fonction</button>

                    </div>
                    
                </form>
            </div>            
        </div>
    </div>
   </div> 
@endsection
