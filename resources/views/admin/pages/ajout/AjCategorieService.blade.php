@extends('admin.layoutsAdmin.masterAdmin')
@section('titre2')
    Categorie
@endsection
@section('contenu')
<div class="contenuBe-ajoutTeam">

    <h1 class="titre">Ajout categorie service</h1>
   
    <form action="{{route('AjCategorieService')}}" method="post" enctype="multipart/form-data">
        @csrf 
        
        @if (Session::has('acategoriesrvc'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('acategoriesrvc')}} &#128525; &#128525; </h6>
        @endif
        @if (Session::has('disoservice'))
        <h6 class="diso"> {{Session::get('disoservice')}} ; </h6>
        @endif

            
        <div class="contenu-ajoutTeam">
           
            {!! $errors->first('service', '<span class="disoservice">:message</span>') !!}
            <input type="text" name="service" id="" placeholder="Votre Service categorie" class="input-ajoutTeam">

           
            <input type="submit" value="Enregistrer" class="btn-ajoutTeam">
        </div>
    </form>
   </div> 

{{-- <div class="container-fluid contser">
    <div class="row frmeser">       
        <div class="col-lg-12 col-md-12 col-sm-12 form">
            @if (Session::has('acategorieblog'))
            <h6 class="success"> &#128525; &#128525; {{Session::get('acategorieBlog')}} &#128525; &#128525; </h6>
            @endif
            @if (Session::has('disoblog'))
            <h6 class="diso"> {{Session::get('disoblog')}} ; </h6>
            @endif
            <form method="post" action="{{route('AjCategorieBlog')}}"  class="frmse" enctype="multipart/form-data"> 
                @csrf
                <h1>Realiser un commande</h1>       
                {!!$errors->first('nomblog','<span class= "disoserv">:message</span>') !!}                 
                <input type="text" class="form-control prod" name="nomblog" placeholder="Nom de vos blog SVP !!!"></br>
               
               
             
                <button class="btn btn-outline-success submit" type="submit"name="submit"><h3>Envoyer !<h1></button>
                   
            </form>
        </div>
    </div>
</div> --}}
@endsection()