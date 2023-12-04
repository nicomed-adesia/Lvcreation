<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titre2')</title>
    <!-- Favicon -->
    <link href="{{asset('admin/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('admin/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/tiny-slider.css')}}">
    <script src="{{asset('JS/tiny-slider.js')}}"></script>

</head>
<body>
    <div class="container-fluid position-relative d-flex p-0">
    @include('admin.layoutsAdmin.headerAdmin')
        <div class="content">
            @yield('contenu')

        </div>

    </div>


    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    {{-- <script src="{{asset('jquery/jquery-1.11.3.min.js')}}"></script> --}}
    <script>
        $(document).ready(function(){
                $('.menu-bar').click(function(){
                    $('.side-bar').addClass('active');
                    $('.menu-bar').css("visibility", "hidden");
                })

                $('.close-btn').click(function(){
                    $('.side-bar').removeClass('active');
                    $('.menu-bar').css("visibility","hidden");
                })

                $('.sub-btn').click(function(){
                    $(this).next('.sub-menu').slideToggle();
                    $(this).find('.dropdown').toggleClass('rotate');
                });
            })
        </script>

     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('admin/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('admin/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('admin/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('admin/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('admin/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('admin/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script>
        // style slider partenaire
        let slider = tns({
            container : ".my-slider",
            "slideBy" : "1",
            "speed":400,
            "nav":false,
            autoplay:true,
            controls:false,
            autoplayButtonOutput:false,
            responsive:{
                1600:{
                    items:4,
                    gutten:20
                },
                1024:{
                    items:3,
                    gutten:20
                },
                768:{
                    items:2,
                    gutten:20
                },
                480:{
                    items:1
                }
            }
        });
    </script>
    
    <script src="js/main.js"></script>
   
  
</body>
</html>