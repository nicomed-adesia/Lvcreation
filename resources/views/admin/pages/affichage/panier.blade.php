@extends('admin.layoutsAdmin.masterAdmin')
@section('titre2')
    Panier
@endsection
@section('contenu')
<div class="hero-wrap hero-bread" style="background-image: url('{{asset('client/images/bg_1.jpg')}}');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('affichagedashbord')}}">Accueil</a></span> <span>Panier</span></p>
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
                            <th>action</th>
                            <th>Image</th>
                            <th>Nom du produit</th>
                            <th>Prix du produit</th>
                            <th>Quantité</th>
                            <th>Total</th>
                          </tr>
                        </thead>
                        @if (Session::has('panier'))
                        <tbody>
                          @foreach ($products as $entana)
                          <tr class="text-center">
                      <td class="product-remove"><a href="{{url('retirer_produit/'.$entana['service_id'])}}"><span class="fa fa-trash"></span></a></td>
                      <td class="image-prod">
                        <img src="{{asset('storage/service/my_images/')}}/{{ $entana['imageService']}}" alt="" class="imgser">
                      </td> 
                                <td class="product-name">
                                    <h3>{{$entana['nomService']}}</h3>
                                    
                                </td>
                                <td class="price">${{$entana['tarifService']}}</td>
                                    <form action="{{url('modifier_qty/'.$entana['service_id'])}}" method="POST">
                                        {{-- <form action=""> --}}
                                      @csrf
                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                                <input type="number" name="quantity" class="quantity form-control input-number" value="{{$entana['qty']}}" min="1" max="100">
                                                  <input type="submit" value="Modifier" class="btn btn-outline-success rounded ml-1">

                                            </div>
                                        </td>
                                    </form>
                                </td>
                                <td class="total">${{$entana['tarifService']*$entana['qty']}}</td>
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
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Coupon Code</h3>
                    <p>Enter your coupon code if you have one</p>
                      <form action="#" class="info">
              <div class="form-group">
                  <label for="">Coupon code</label>
                <input type="text" class="form-control text-left px-3" placeholder="">
              </div>
            </form>
                </div>
                <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Coupon d'application</a></p>
            </div>
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Estimation tax</h3>
                    <p>Entrer votre destination pour avoir une estimation</p>
                      <form action="#" class="info">
              <div class="form-group">
                  <label for="">Pays</label>
                <input type="text" class="form-control text-left px-3" placeholder="">
              </div>
              <div class="form-group">
                  <label for="country">Etat/Province</label>
                <input type="text" class="form-control text-left px-3" placeholder="">
              </div>
              <div class="form-group">
                  <label for="country">Code Postal </label>
                <input type="text" class="form-control text-left px-3" placeholder="" value="101">
              </div>
            </form>
                </div>
                <p><a href="{{route('paiement')}}" class="btn btn-primary py-3 px-4">Estimation</a></p>
            </div>
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
                <p><a href="{{route('paiement')}}" class="btn btn-primary py-3 px-4">Procedure de paiement</a></p>
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
              <p><a href="{{route('paiement')}}" class="btn btn-primary py-3 px-4">Procedure de paiement</a></p>
          </div>
          @endif
        </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
          <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Envoyer votre message dans notre boite email</h2>
                <span>Get e-mail updates about our latest shops and special offers</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
              <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                  <input type="text" class="form-control" placeholder="Entrer votre adresse email...*">
                  <input type="submit" value="Souscrire" class="submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
</section> 
@section('contenu') 
