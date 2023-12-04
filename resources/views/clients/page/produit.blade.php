@extends('clients.layoutsClients.master2')
@section('titre2')
    Produits
@endsection
@section('contenu')
<section class="products">
    <div class="container products-container text-center">
        <div class="titre-achat">
            <a href="{{route('bienvenu')}}" class="btn-precedent"><i class="fa fa-home"></i></a>
            <h1>Vos achats</h1>
        </div>
       
        <!-- ===== les titres===== -->

        <div class="col-md-12 products-titles">
            <div class="col-xs-6 col-md-6 content-products-titles ">
                <h1>Products</h1>
            </div>
            <div class="col-xs-2 col-md-2 content-products-titles">
                <h1>Qte</h1>
            </div>
            <div class="col-xs-2 col-md-2 content-products-titles">
                <h1>Prix</h1>
            </div>
            <div class=" col-xs-2 col-md-2 content-products-titles">
                <h1>Modifier</h1>
            </div>
        </div>

        <!-- ===== les titres===== -->
        <!-- ===== les produit===== -->
        @if (Session::has('panier'))
            @foreach ($products as $entana)
                <div class="col-md-12 products-content">
                    <div class="col-xs-3 col-md-3 content-products-contenu">
                        <img src="{{asset('storage/service/my_images/')}}/{{ $entana['imageService']}}" alt="" width="70px" height="70Px">
                    </div>
                    <div class="col-xs-3 col-md-3 content-products-contenu">
                        <p>{{$entana['nomService']}}</p>
                    </div>
                    <div class="col-xs-2 col-md-2 content-products-contenu">
                        <form action="{{url('modifier_qty/'.$entana['service_id'])}}" method="POST">
                            {{-- <form action=""> --}}
                          @csrf
                            <td class="quantity">
                                <div class="input-group mb-3">
                                    <input type="number" name="quantity" class="quantity form-control input-number" value="{{$entana['qty']}}" min="1" max="100">
                                      <input type="submit" value="Modifier" class="ti-pencil rounded ml-1">

                                </div>
                            </td>
                        </form>
                    </div>
                    <div class="col-xs-2 col-md-2 content-products-contenu">
                    <p>${{$entana['tarifService']}} </p>
                    </div>
                    <div class="col-xs-2 col-md-2 content-products-contenu modification">
                        <a href="{{url('retirer_produit/'.$entana['service_id'])}}"><i class="ti-close"></i></a>
                        
                    </div>
                </div>
               

            @endforeach
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
        {{-- <div class="col-md-12 products-content">
            <div class="col-md-3 content-products-contenu">
                <img src="image/2.jpg" alt="" width="70px" height="70Px">
            </div>
            <div class="col-md-3 content-products-contenu">
                <p>name products</p>
            </div>
            <div class="col-md-2 content-products-contenu">
                <input type="number" class="input-products">
            </div>
            <div class="col-md-2 content-products-contenu">
               <p>1000ar </p>
            </div>
            <div class="col-md-2 content-products-contenu modification">
                <i class="ti-close"></i>
                <i class="ti-pencil"></i>
            </div>
        </div> --}}
        <!-- ===== les produit===== -->
        <div class="col-md-12 products-content-pagination">
        {{-- @foreach (service as ) --}}
             <p> {{ $service->links()}}</p>
        {{-- @endforeach --}}
          
        </div>

        <div class="payement-front">
            
            <p>Choisissez un mode de payement <i class="fas fa-angle-down" id="angle-down"></i></p> 
            <div class="mode-payement">
                <a href="">Paypal</a>
                <a href="{{route('checkout')}}">Carte bancaire</a>
                <a href="{{route('paiement')}}">Stripe</a>
                <a href="#">Orange Money</a>
                <a href="#">Mvola</a>
            </div>
    
        </div>
    </div>
</section>
<script>const down=document.getElementById('angle-down');
    const modePayement=document.querySelector('.mode-payement');
    
    down.addEventListener('click',()=>{
        modePayement.classList.toggle('midina');
    });</script>
@endsection