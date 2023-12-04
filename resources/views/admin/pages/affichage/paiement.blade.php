@extends('admin.layoutsAdmin.masterAdmin')
@section('titre2')
    Paiment
@endsection
@section('contenu')
<div class="hero-wrap hero-bread " style="background-image: url('{{asset('client/images/bg_1.jpg')}}');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('affichagedashbord')}}">Accueil</a></span> <span>Verification</span></p>
          <h1 class="mb-0 bread">Paiement</h1>
        </div>
      </div>
    </div>
  </div>
  @if (Session::has('erreur'))
  <div class="alert alert-danger">
      {{Session::get('erreur')}}
  </div>
@endif
  <section class="ftco-section bacpayem">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 ftco-animate">
            <form action="{{route('payer')}}" class="billing-form" method="POST" id="validationForm">
                @csrf
                <h3 class="mb-4 billing-heading textpayment">Details de facturation</h3>
          
                <div class="row align-items-end">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="firstname textpayment">Prénom</label>
                    <input type="text" class="form-control" id="firstname" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="lastname textpayment">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                  </div>
                </div>
                <div class="w-100"></div>
                  
                  <div class="w-100"></div>
                  <div class="col-md-6">
                      <div class="form-group">
                      <label for="streetaddress textpayment">Adresse</label>
                    <input type="text" class="form-control" name="adresse" id="Adresse" placeholder="">
                  </div>
                  </div>
                
                  <div class="w-100"></div>
                  <div class="col-md-6">
                      <div class="form-group">
                      <label for="towncity textpayment">Mois d' expiration</label>
                    <input type="number" id="card-expiry-month" class="form-control" placeholder="">
                  </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="postcodezip">Année d' expiration</label>
                          <input type="number" id="card-expiry-year" class="form-control" placeholder="">
                      </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone textpayment">Nom de carte</label>
                        <input type="text" class="form-control" id="card-name" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone textpayment">Numero de carte</label>
                        <input type="text" class="form-control" id="card-number" placeholder="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="emailaddress">CVC</label>
                        <input type="text" id="card-cvc" class="form-control" placeholder="">
                    </div>
                  </div>
              <div class="w-100"></div>
                <div class="col-md-12">
                    <div class="form-group mt-4">
                        <div class="radio">
                            <input type="hidden" name="stripeToken">
                            <input type="submit" class="btn btn-primary py-3 px-4" value="Payer" id="button">
                        </div>
                    </div>
                </div>
            </div>
            </form><!-- END -->
        </div>
        <div class="col-xl-5">
            <div class="row mt-5 pt-3">
                <div class="col-md-12 d-flex mb-5">
                    <div class="cart-detail cart-total p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Total du panier</h3>
                        <p class="d-flex">
                            <span >Sous total</span>
                            <span>${{Session::get('panier')->totalPrice}}</span>
                        </p>
                        <p class="d-flex">
                            <span>Remise</span>
                            <span>$0.00</span>
                        </p>
                        {{-- <p class="d-flex">
                            <span>Discount</span>
                            <span>$0.00</span>
                        </p> --}}
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span>${{Session::get('panier')->totalPrice}}</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="cart-detail p-3 p-md-4">
                        <h3 class="billing-heading mb-4 textpayment">Payment Method</h3>
                          <div class="form-group">
                              <div class="col-md-12">
                                  <div class="radio">
                                      <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-md-12">
                                  <div class="radio">
                                      <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-md-12">
                                  <div class="radio">
                                      <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-md-12">
                                  <div class="checkbox">
                                      <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
                                  </div>
                              </div>
                          </div>
                          <p><a href="#"class="btn btn-primary py-3 px-4">Place an order</a></p>
                    </div>
                </div>
            </div>
        </div> <!-- .col-md-8 -->
      </div>
    </div>
  </section> <!-- .section -->

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6">
                    <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                    <span>Get e-mail updates about our latest shops and special offers</span>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Enter email address">
                    <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    <script src="https://js.stripe.com/v2/"></script>
    <script src="{{asset('js/src/js/paiement.js')}}"></script>

    @endsection