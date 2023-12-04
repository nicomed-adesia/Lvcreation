@extends('admin.layoutsAdmin.masterAdmin')
@section('titre')
    Ajouter fonction
@endsection
@section('contenu')
<div class="contenuBe-ajoutTeam">
    <h1 class="titre text-center">Ajout fonction team</h1>
    {{-- <form action="{{route('addFonction')}}" method="post">
        @csrf
        <div class="contenu-ajoutTeam">
            {!! $errors->first('nomFonction', '<span class="diso">:message</span>') !!}
            <input type="text" name="nomFonction" id="" placeholder="nom fonction" class="input-ajoutTeam">
            <input type="submit" value="Ajouter fonction" class="btn-ajoutTeam">
        </div>
    </form> --}}
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-8 m-auto">
                <form action="{{route('addFonction')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (Session::has('tafiditra'))
                     <div style="text-align: center;">
                        {{ Session::get('tafiditra') }}
                     </div>
                    @endif
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Ajout team</h6>
                        {!! $errors->first('nomFonction', '<span class="diso">:message</span>') !!}
                        <div class="form-floating mb-3">
                            <input type="text" name="nomFonction" class="form-control" id="floatingInput"
                                placeholder="Nom fonction">
                            <label for="floatingInput">Nom fonction</label>
                        </div>
                        
                        <button type="submit" class="btn btn-light">Ajouter fonction</button>
                        
                    </div>
                </form>
            </div>            
        </div>
    </div>
</div>      
@endsection
