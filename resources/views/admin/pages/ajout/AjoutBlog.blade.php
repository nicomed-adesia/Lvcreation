@extends('admin.layoutsAdmin.masterAdmin')
@section('titre2')
    Ajout Blog
@endsection
@section('contenu')
   <div class="contenuBe-ajoutTeam">
    <h1 class="titre">Ajout team</h1>
    <form action="{{route('AjBlog')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if (Session::has('tafaBlog'))
        <h6 class="success"> &#128525; &#128525; {{Session::get('tafaBlog')}} &#128525; &#128525; </h6>
        @endif
        @if (Session::has('diso'))
        <h6 class="diso"> {{Session::get('diso')}} ; </h6>
        @endif

        <div class="contenu-ajoutTeam">
            {!! $errors->first('nomBlog', '<span class="diso">:message</span>') !!}
            <input type="text" name="nomBlog" id="" placeholder="Nom de votre blog" class="input-ajoutTeam">


            {!! $errors->first('categorieblog', '<span class="diso">:message</span>') !!}           
            <select name="categorieblog" id="" class="input-ajoutTeam">
                <option value="">categorie blog</option>
                    @foreach ($categorie as $cat)
                        <option value="{{$cat->categorieblog}}">{{$cat->categorieblog}}</option>
                    @endforeach
            </select>

            {!! $errors->first('descriptionBlog', '<span class="diso">:message</span>') !!}
            <input type="text" name="descriptionBlog" id="" placeholder="DescriptionBlog" class="input-ajoutTeam">

            {!! $errors->first('prixBlog', '<span class="diso">:message</span>') !!}
            <input type="number" name="prixBlog" id="" placeholder="prixBlog" class="input-ajoutTeam">

            {!! $errors->first('statueBlog', '<span class="diso">:message</span>') !!}
            <input type="number" name="statueBlog" id="" placeholder="statueBlog" class="input-ajoutTeam">


            {!! $errors->first('imageBlog', '<span class="diso">:message</span>') !!}
            <div>
                <label for="">Entrer image:</label>
                <input type="file" name="imageBlog" id="">
            </div>
            <input type="submit" value="ajouter Blog" class="btn-ajoutTeam">
        </div>
    </form>
   </div> 
@endsection
