<div class="col-md-8 global-content-cartes">
    @if (Session::has('erreur'))
        <div class="alert alert-danger">
            {{Session::get('erreur')}}
        </div>
    @endif
    <form  action="{{route('payer')}}" method="post"  id="validationForm" >
        @csrf
        <div class="col-md-12 container-inputs-payement">
            <div class="col-md-12 content-input-payement">
                <div class="col-md-6 input-payement">
                    <label for="">Nom</label> 
                    <br>
                    <input type="text" name="" id="firstname" >
                </div>
                <div class="col-md-6 input-payement">
                    <label for="">Prenom</label>
                    <br>
                    <input type="text" id="name" name="name">
                </div>
            </div>
            <!-- Nom et Prenom -->
            <div class="col-md-12 content-input-payement">
                <div class="col-md-6 input-payement">
                    <label for="">Adresse</label>
                    <br>
                    <input type="text" name="adresse" id="Adresse">
                </div>
                <div class="col-md-6 input-payement">
                    <label for="">Nom de la carte</label>
                    <br>
                    <input type="text" name="" id="">
                </div>
            </div>
            <!-- Adresse et telephone -->
            <div class="col-md-12 content-input-payement">
                {{-- <div class="col-md-6 input-payement">
                    <label for="">Telephone</label>
                    <br>
                    <input type="text" name="" id="">
                </div>
                <div class="col-md-6 input-payement">
                    <label for="">Email</label>
                    <br>
                    <input type="email" name="" id="">
                </div> --}}
               
            </div>
            <!-- email et nom de la carte -->
            <div class="col-md-12 content-input-payement">
               
                <div class="col-md-6 input-payement">
                    <label for="">Mois d'expiration</label>
                    <br>
                    <input  type="number" id="card-expiry-month">
                </div>
                <div class="col-md-6 input-payement">
                    <label for="">Année d'expiration</label>
                    <br>
                    <input type="number" id="card-expiry-year" >
                </div>
            </div>
            <!-- numero de la carte et mois d'expiration -->
            <div class="col-md-12 content-input-payement">
                <div class="col-md-6 input-payement">
                    <label for="">Numero de la carte</label>
                    <br>
                    <input type="text" name=""  id="card-number">
                </div>                          
                <div class="col-md-6 input-payement">
                    <label for="">CVC</label>
                    <br>
                    <input type="text" name="" id="card-cvc">
                </div>
            </div>
        </div>    
        <div class="col-md-12 text-center payment-submit">
            <input type="hidden" name="stripeToken">
            <input type="submit" class="btn btn-primary py-3 px-4" value="Payer" id="button">
        </div>
    </form>
</div>