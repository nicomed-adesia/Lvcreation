@extends('clients.layoutsClients.master')
@section('titre2')
Passez au payement
@endsection
@section('contenu')
<section class="content-card">
    <div class="container">
        <h3 class="text-center" style="color: white;">Payement</h3>

        <div class="col-md-12 content-carte">
            <div class="col-xl-7 ftco-animate">
                @if (Session::has('erreur'))
                    <div class="alert alert-danger">
                        {{Session::get('erreur')}}
                    </div>
                @endif
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
            

            <!-- resume et detail de la transaction -->

            <div class="col-md-4 resume">  
                <div class="col-md-12 content-details">
                    <h1 class="title-resume">
                        Details des produits
                    </h1>
                    @foreach ($products as $entana)
                    @endforeach
                    @if(Session::has('panier'))
                     
                        <div class="col-md-12 detail">
                            <h1>
                                Produit acheté
                            </h1>
                            <p>
                               Ar: ${{Session::get('panier')->totalPrice}}
                            </p>
                        </div>
                        <!-- produit  -->
                        <div class="col-md-12 detail">
                            <h1>
                                Quantité 
                            </h1>
                            <p>
                                ${{Session::get('panier')->totalQty}}
                            </p>
                        </div>
                        <div class="col-md-12 px-unity">
                            <h1>
                                Prix unitaire 
                            </h1>
                            <div class="col-md-12 px-unity-content">
                                <p>{{$entana['qty']}}</p>
                                <p>${{$entana['tarifService']}}</p>
                            </div>
                            {{-- <div class="col-md-12 px-unity-content">
                                <p>Produit 2</p>
                                <p>Prix 2</p>
                            </div> --}}
                        </div>
                        <div class="col-md-12 detail">
                            <h1>
                                Total 
                            </h1>
                            <p>
                                ${{Session::get('panier')->totalPrice}}
                            </p>
                        </div>
                        {{-- <div class="col-md-12 image-produit">
                            <img src="{{asset('storage/service/my_images/')}}/{{ $entana['imageService']}}" alt="">
                        </div> --}}
                        {{-- @endforeach --}}
                    @endif
                </div>
                
            </div>
            
        </div>
    </div>
</section>




@endsection