-- <div class="container itemdash">
    <div class="row">
        <div class="col-lg-12 saryD">
            <div class="sec03">
                <div class="nosprod">
                    <h1 class="prod">
                        <ul class="titre2">
                            <li>N</li>
                            <li>O</li>
                            <li>S</li>
                            <li class="space"></li>
                            <li>P</li>
                            <li>R</li>
                            <li>O</li>
                            <li>D</li>
                            <li>U</li>
                            <li>I</li>
                            <li>T</li>
                            <li>S</li>
                            <li class="space"></li>
                            {{-- <p><a href="{{route('panier')}}" class="nav-link"><i class="ti-shopping-cart-full shop"></i>[{{Session::has('panier')?Session::get('panier')->totalQty:0}}]</a></p> --}}
                        </ul>
                    </h1>
                
                </div>
                <div class="row justify-content-center menuprode">
                    <div class="col-md-10 mb-5 text-center">
                        <ul class="product-category">
                            {{-- <li><a href="{{route('accueil')}}" class="active">Tous</a></li>
                            @foreach ($categorie as $cate)
                            <li><a href="{{url('choix_categorie/'.$cate->categorie)}}" class="catsize">{{$cate->categorie}}</a></li>                          
                            @endforeach --}}
        
                        </ul>
                    </div>
                </div> 
                <div class="noprod">
                    {{-- @foreach ($produit as $prod ) --}}
                    <div class="container prdo">
                        {{-- <div class="icopro">
                            <p class="icprod2"><i class="ti-facebook proico"></i></p>
                            <p class="icprod2"><i class="ti-facebook proico"></i></p>
                        </div> --}}
                        <div class="cardpro">
                            <div class="imgbxpro">
                                {{-- <img src="{{ asset('storage/produit/my_images/' .$prod->saryProduit) }}" alt="img" draggable="false">
        
                                    <h2>{{$prod->nomProduit}}</h2> --}}
                            </div>
                            <div class="content info">
                                <div class="prix">
                                    {{-- <h3>{{$prod->prixProduit}}</h3> --}}
                                </div>
                                <div class="plus">
                                    {{-- <h3>{{$prod->categorieProduit}}</h3> --}}
                                    
                                </div>
                                {{-- <a href="{{url('ajouterPanier/'.$prod->id)}}">Acheter</a> --}}
                            </div> 
                        </div>
                    </div>        
                    {{-- @endforeach  --}}
{{--                                
                </div>   
                <div class="paginate mt-1 d-flex  justify-content-center  mb-1">
                    {{-- <p>{{$produit->links()}}</p> --}}
                {{-- </div> 
            </div>
        </div>
    </div> --}}
{{-- </div> --}} --}} --}}


@extends('admin.layoutsAdmin.masterAdmin')
@section('titre')
    admin
@endsection
@section('contenu')
<div class="sc02 apropo">
    {{-- <div class="container ">
        <div class="row">
            <div class="col-lg-12 cercle">
                <div class="cer">
                    <div class="mencercle">             
                        <div class="content_apro">
                            <img src="{{ asset('images/about.jpg')}}" alt="" srcset="" class="imgapro">
                            <h3>
                                {{ $nbrTeam }} 
                            </h3>                
                        </div>
                    </div>
                    <div>
                        <p>tet</p>
                    </div>
                </div>
                <div class="cer">
                    <div class="mencercle">
                        <div class="content_apro">
                            <img src="{{ asset('images/about.jpg')}}" alt="" srcset="" class="imgapro">
                            <p>
                                {{$nbrBlog}}
                            </p>                    
                        </div>
                    </div>
                    <div>
                        <p>tet</p>
                    </div>               
                </div>
                <div class="cer">
                    <div class="mencercle  mn3">
                        <div class="content_apro">
                            <img src="{{ asset('images/about.jpg')}}" alt="" srcset="" class="imgapro">
                            <p>
                                {{$nbrCommande}}
                            </p>                    
                        </div>                    
                    </div>
                    <div>
                        <p>tet</p>
                    </div>
                </div>
            </div>
        </div>
    </div>    --}}
    <div class="conatainer-fluid prod">
        <div class="row">
            <div class="col-lg-12">
                <div class="menuProd">
                    <ul class="product-category">
                        <li><a href="{{route('affichagedashbord')}}" class="active">Tous</a></li>
                        @foreach ($serviceCa as $cate)
                            <li><a href="{{url('choix_service/'.$cate->service)}}" class="catsize">{{$cate->service}}</a></li> 
                       
                        @endforeach
                        <li><a href="{{route('panier')}}" class="nav-link"><i class="ti-shopping-cart-full shop"></i>[{{Session::has('panier')?Session::get('panier')->totalQty:0}}]</a></>
                            {{-- <li><a href="{{route('panier')}}" class="nav-link"><i class="ti-shopping-cart-full shop"></i>{{ count((array) Session('cart')) }}</a></> --}}

                    </ul>
                </div>
                <div class="container mt-4">
                    <h2>cart </h2> 
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}

                        </div>
                    @endif
                </div>
                <div>
                </div>
                <div class="prodser prod">
                    @foreach ($service as $prod )
                    <div class="col-lg-4 service">
                        <div class="imageser">
                            <img src="{{ asset('storage/service//my_images/' .$prod->imageService) }}" alt="img" draggable="false" class="imageservice" >
    
                        </div>
                        <div class="appservice">
                            <h2>{{$prod->nomService}}</h2>
                            <h3>{{$prod->serviceCategorie}}</h3>
                        </div>
                        <div>
                             {{-- <a href="{{url('ajouterPanier/'.$prod->id)}}" class="fa fa-shopping-cart"></a> --}}
                             <a href="{{url('ajouterPanier/'.$prod->id)}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                <span><i  class="fa fa-shopping-cart"></i></span>
                            </a>
                        </div>
                    </div>
                @endforeach
                </div>
                </div>
        </div>
    </div>            
</div>
@endsection



























@foreach ($service as $prod )
<div class="container prdo">
    <div class="icopro">
        <p class="icprod2"><i class="ti-facebook proico"></i></p>
        <p class="icprod2"><i class="ti-facebook proico"></i></p>
    </div>
    <div class="cardpro">
        <div class="imgbxpro">
            <img src="{{ asset('storage/service//my_images/' .$prod->imageService) }}" alt="img" draggable="false">

                <h2>{{$prod->nomService}}</h2>
        </div>
        <div class="content info">
            <div class="prix">
                <h3>{{$prod->tarifService}}</h3>
            </div>
            <div class="plus">
                <h3>{{$prod->serviceCategorie}}</h3>
                
            </div>
            <a href="{{url('ajouterPanier/'.$prod->id)}}">Acheter</a>
        </div> 
    </div>
</div>        
@endforeach 
{{--                                
</div>   
<div class="paginate mt-1 d-flex  justify-content-center  mb-1">
{{-- <p>{{$produit->links()}}</p> --}}
{{-- </div> 
</div>
</div>
</div> --}}
{{-- </div> --}} --}} --}}




{{-- header  --}}
<input type="checkbox" id="check">
<label for="check">
    <i class="fas fa-bars thmy"></i>
    <tmy class="fas fa-times tmy"></i>
</label>       
<div class="sidebar">
    <div class="logima"> <img src="{{asset('image/logo.png')}}" class="logima" alt=""></div>
    
    <div class="menu">
      <div class="item">
          <a  class="sub-btn" href="{{route('affichagedashbord')}}"><i class="fas fa-home-user "></i>Tableau des bord
             
          </a>
         
      </div>
      <div class="item">
          <a  class="sub-btn"><i class="fas fa-plus"></i>Ajout élément
              <i class="fas fa-angle-right dropdown"></i>
          </a>
          <div class="sub-menu">
              <a href="{{route('ajoutTeam')}}" class="sub-item">Team</a>
              <a href="{{route('ajoutFonction')}}" class="sub-item">Fonction</a>
              <a href="{{route('CategorieService')}}" class="sub-item">Categorie service</a>
              <a href="{{route('Service')}}" class="sub-item">service</a>

          </div>
      </div>
      <div class="item">
          <a  class="sub-btn"><i class="fas fa-desktop"></i>Affiche élément
              <i class="fas fa-angle-right dropdown"></i>
          </a>
          <div class="sub-menu">
              <a href="{{route('afficherTeam')}}" class="sub-item">Team</a>
              <a href="{{route('afficherFonction')}}" class="sub-item">Fonction</a>
              <a href="{{ route('affcatService')}}" class="sub-item">Categorie serice </a>
              <a href="{{route('affService')}}" class="sub-item">Service</a>
              <a href="{{route('Commande')}}" class="sub-item">Commande</a>             
              <a href="" class="sub-item">Connexion </a>
          </div>
      </div>
  </div>
</div>

{{-- <div class="menu-bar">
    <i class="fas fa-bars"></i>
</div>
<div class="side-bar">
    <header>
        <div class="close-btn">
            <i class="fas fa-times"></i>
        </div>
        <img src="{{asset('image/logo.png')}}" alt="">
    </header>
    <div class="menu">
        <div class="item">
            <a  class="sub-btn" href="{{route('indexLvcreaction')}}"><i class="fas fa-home-user "></i>Tableau des bord
               
            </a>
           
        </div>
        <div class="item">
            <a  class="sub-btn"><i class="fas fa-plus"></i>Ajout élément
                <i class="fas fa-angle-right dropdown"></i>
            </a>
            <div class="sub-menu">
                <a href="{{route('ajoutTeam')}}" class="sub-item">Ajouter team</a>
                <a href="{{route('ajoutFonction')}}" class="sub-item">Ajouter fonction</a>
                <a href="" class="sub-item">ajouter </a>
            </div>
        </div>
        <div class="item">
            <a  class="sub-btn"><i class="fas fa-desktop"></i>Affichage élément
                <i class="fas fa-angle-right dropdown"></i>
            </a>
            <div class="sub-menu">
                <a href="{{route('afficherTeam')}}" class="sub-item">Afficher team</a>
                <a href="{{route('afficherFonction')}}" class="sub-item">Afficher fonction</a>
                <a href="" class="sub-item">Afficher </a>
                <a href="" class="sub-item">Connexion </a>
            </div>
        </div>
    </div>
</div> --}}




{{-- <div class="main-panel"> --}}
    <div class="sc02 content-wrapper">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tableau de Bord</h4>
            <div class="row">
              <div class="col-12">
                @if (Session::has('modifier'))
                  <h6 class="success">&#128525; &#128525; {{Session::get('modifier')}} &#128525; &#128525;</h6>
                @endif
                @if (Session::has('diso'))
                  <h6 class="success">&#128525; &#128525; {{Session::get('diso')}} &#128525; &#128525;</h6>
                @endif
  
                @if (Session::has('supprimer'))
                  <h6 class="success">&#128525; &#128525; {{Session::get('supprimer')}} &#128525; &#128525;</h6>
                @endif
                @if (Session::has('desactiver'))
                  <h6 class="success">&#128525; &#128525; {{Session::get('desactiver')}} &#128525; &#128525;</h6>
                @endif
                <div class="table-responsive">
                  <table class="table table-dark table-striped" style="width: 90%; margin:0 5%;padding:0 5%">
                    <thead>
                      <tr>
                        <th>Numéro</th>
                        <th>Nom Client</th>
                        <th>Adresse Client</th>
                        <th>Panier</th>
                        <th>IdPayement</th>                       
                        <th>Action</th>
                    </tr>
                    </thead>
                    @foreach ($commandes as $komandy)
                    <tbody>                  
                        <tr>
                            <td>{{$komandy->id}}</td>
                            <td>{{$komandy->nomClient}}</td>
                            <td>{{$komandy->adressClient}}</td>
                            <td>
                                @foreach ($komandy ->panier->items as $item )
                                    {{ $item['nomService']. ',' }}
                                  
                                @endforeach
                            </td>
                            <td>{{ $komandy ->jeton }}</td>
                            {{-- <td><button class="btn btn-outline-warning" onclick="window.location="'{{url('voirPdf/'.$komandy->id)}}'" >Voir</button></td> --}}
                            <td><a class="btn btn-outline-warning" href="{{url('voirPdf/'.$komandy->id)}}" >Voir</a></td>
                        </tr>
                    </tbody>
                   
                    @endforeach
                  </table>
                  <p>
                    {{ $pagina->links()}}
                   </p>
                  {{-- <table id="order-listing" class="table " style="width: 90%; margin:0 5%;padding:0 5%">
                    <thead>
                      <tr>
                          <th>Numéro</th>
                          <th>Nom Client</th>
                          <th>Adresse Client</th>
                          <th>Panier</th>
                          <th>IdPayement</th>                       
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($commandes as $komandy)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$komandy->nomClient}}</td>
                            <td>{{$komandy->adressClient}}</td>
                            <td>
                                @foreach ($komandy ->panier->items as $item )
                                    {{ $item['nomService']. ',' }}
                                  
                                @endforeach
                            </td>
                            <td>{{ $komandy ->jeton }}</td>
                            <td><button class="btn btn-outline-warning" onclick="window.location="'{{url('voirPdf/'.$komandy->id)}}'" >Voir</a></td>
                            @endforeach
                    </tbody>
                   
                  </table> --}}
               
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      
    {{-- </div> --}}