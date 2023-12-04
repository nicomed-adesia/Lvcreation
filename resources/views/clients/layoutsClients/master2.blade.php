<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titre2')</title>
    <link rel="stylesheet" href="{{asset('client/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/view/reseauSociaux.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/view/main.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/view/offres.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/view/team.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/view/payement.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/view/blog.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/view/about.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/checkout.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/connexion.css')}}">
    <link rel="stylesheet" href="{{asset('css/products.css')}}">
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">

    <link rel="stylesheet" href="{{asset('client/css/view/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/fontawasome/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/owlcarousel/owl.carousel.min.css')}}">   
    <link rel="stylesheet" href="{{asset('client/owlcarousel/owl.theme.default.min.css')}}">
</head>
<body>
    <div class="ct" id="t1">
        <div class="ct" id="t2">
          <div class="ct" id="t3">
            <div class="ct" id="t4">
               <div class="ct" id="t5">
                    <div class="ct" id="t6">
                       

                        @yield('contenu')

                        @include('clients.layoutsClients.footer')
                        <script src="{{asset('jquery/jquery-1.11.3.min.js')}}"></script>
                        
                        <script src="{{asset('client/owlcarousel/jquery.min.js')}}"></script>
                        <script src="{{asset('client/owlcarousel/owl.carousel.min.js')}}"></script>
                        <script src="{{asset('client/swiper/js/swiper-bundle.min.js')}}"></script>
                        <script src="{{asset('client/js/script.js')}}"></script>
                        <script src="{{asset('client/js/main.js')}}"></script>
                        <script>
                            let headerCLient = document.getElementById('headerClient');
                            let panierIcons = document.getElementById('panier-icons');
                            panierIcons.addEventListener('click', ()=>{
                                headerCLient.style="display:none;"
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
   
</body>
</html>