@extends('admin.layoutsAdmin.masterAdmin')
@section('titre2')
    Panier
@endsection
@section('contenu')
<div class="hero-wrap hero-bread" style="background-color: cyan');">
  <div class="container-fluid">
    <div class="row no-gutters slider-text align-items-center justify-content-center ">
      <div class="col-md-9 ftco-animate text-center pannierpro">
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('affichagedashbord')}}" class="menPanier">Accueil</a></span> <span>(Panier)</span></p>       
      </div>
      <div class="col-md-9 ftco-animate text-center">
         <h1 class="mb-0 bread">Mon Panier</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                          <tr class="text-center">
                            <th>Action</th>
                            <th>image</th>
                            <th>Nom du produit</th>
                            <th>Quantité</th>
                            <th>Prix du produit</th>
                            <th>Total</th>
                          </tr>
                        </thead>
                        @if (Session::has('cart'))
                        <tbody>
                          @foreach (Session('cart') as $id => $entana)
                          <tr class="text-center" rowId = "{{ $id }}">                        
                              <td class="trb">
                                <a href="#" class="btn btn-outline-danger btn-sm delete-product"><i class="fa fa-trash trash"></i></a>
                              </td>
                              <td class="image-prod">
                                <img src="{{asset('storage/service/my_images/')}}/{{ $entana['imageService']}}" alt="" class="imgser">
                              </td>                              
                              <td class="product-name">
                                  <h3>{{$entana['nomService']}}</h3>
                              </td>                                    
                                {{-- <form action="{{url('modifier_qty/'.$entana['id'])}}" method="POST"> --}}
                                  <form action="#" method="POST"> 
                                      @csrf
                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                                <input type="number" name="quantity" class="quantity form-control input-number" value="{{ $entana['quantity']}}" min="1" max="100">
                                                  <input type="submit" value="Modifier" class="btn btn-outline-success rounded ml-1">

                                            </div>
                                        </td>
                                    </form>
                                    <td class="price">${{$entana['tarifService']}}</td>
                                
                                <td class="total">{{$entana['tarifService'] * $entana['quantity']}}</td>
                                  </tr><!-- END TR-->  
                                @endforeach
                                            
                        </tbody>
                        @else
                        @if (Session::has('tafiditra'))
                            <h6 class="success"> &#128525; &#128525; {{Session::get('tafiditra')}} &#128525; &#128525; </h6>
                        @endif
                        <tbody>
                          <tr>
                            <td colspan="5">
                              <h1 class="text-center"> &#128532; &#128531; Panier vide </h1>
                            </td>
                          </tr>
                        </tbody>
                        @endif
                        
                      </table>
                  </div>
            </div>
        </div>
        <div class="row justify-content-end">           
             @if(Session::has('panier'))
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Panier Total</h3>
                    <p class="d-flex">
                        <span>Sous total</span>
                        <span>${{$entana['tarifService']*$entana['qty']}}</span>
                    </p>
                    <p class="d-flex">
                        <span>Quantité</span>
                        {{-- <span>${{$entana['qty']}}</span> --}}
                        <span>${{Session::get('panier')->totalQty}}</span>
                    </p>
                    <p class="d-flex">
                        <span>Prix/Unité</span>
                        <span>${{$entana['tarifService']}}</span> 
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        {{-- <span>${{$entana['prixProduit']*$entana['qty']}}</span> --}}
                        <span>${{Session::get('panier')->totalPrice}}</span>
                       
                    </p>
                </div>
                {{-- <p><a href="{{route('Pconnexion')}}" class="btn btn-primary py-3 px-4">Procedure de paiement</a></p> --}}
            </div>
            @else
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
              <div class="cart-total mb-3">
                  <h3>Panier Total</h3>
                  <p class="d-flex">
                      <span>Sous total</span>
                      <span>$</span>
                  </p>
                  <p class="d-flex">
                      <span>Quantité</span>
                      <span>$</span>
                  </p>
                  <p class="d-flex">
                      <span>Prix/Unité</span>
                      <span>$</span>
                  </p>
                  <hr>
                  <p class="d-flex total-price">
                      <span>Total</span>
                      <span>$</span>
                  </p>
              </div>
              {{-- <p><a href="{{route('paiement')}}" class="btn btn-primary py-3 px-4">Procedure de paiement</a></p> --}}
          </div>
          @endif
        </div>
        </div>
    </section>

 
@section('contenu') 
