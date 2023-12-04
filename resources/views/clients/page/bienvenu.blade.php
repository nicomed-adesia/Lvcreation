@extends('clients.layoutsClients.master')
@section('titre2')
    Page d'accueil
@endsection
@section('contenu')

         
                
               <!-- Reseau sociaux-->
                    <div class='reseau-sociaux'>
                        <div class='circle-menu'>
                            <a href='' class='links-circle'><i class='fab fa-facebook-f'></i></a>
                            <a href='' class='links-circle'><i class='fa fa-envelope'></i></a>
                            <a href='' class='links-circle'><i class='fas fa-phone'></i></a>
                        </div>
                        <div class='btn-circle'  id='btn-circle' title="reseaux sociaux">
                            
                            <img src="{{asset('client/image/logos.png')}}" alt="">
                        </div>
                        <p class="text-logo">LV Creation</p>
                    </div>
               <!-- Reseau sociaux-->

                <!-- *********** Acceuil ********* -->
                    <div class="page" id="p1">
                    <section  class="slider-un">
                        <div class="content-slider-un " id="">
                                <img src="{{asset('client/image/Sans-titre-2.png')}}" alt="" class="content-slider-img img1">
                                <img src="{{asset('client/image/Sans-titre-4.png')}}" alt="" class="content-slider-img img2">
                                <img src="{{asset('client/image/Shape3.png')}}" alt="" class="img3">
                                <img src="{{asset('client/image/Shape3.png')}}" alt="" class="img4">
                        
                            <div class="animated-blob"></div>
                            <div class="container text-center bienvenue">
                            <div class="col-md-6 col-sm-12 welcome">
                                <h1 >Welcome</h1>
                                <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem praesentium a magnam sapiente quam aperiam, voluptates nobis cumque enim, incidunt exercitationem, laboriosam inventore beatae? Libero, provident! Atque quam sunt dignissimos?</p>
                                <a href="#t5" class="a_propos" >
                                    <span>A propos</span>
                                </a>
                            </div> 
                            <div class="col-md-6 col-sm-12 welcome-image">
                                <img src="{{asset('client/image/home-img.svg')}}" alt="" class="image-welcome">
                            </div>
                        </div>
                        
                        </div>
                    </section> 
                    <!-- acceuil  -->
                    
                    </div>
                <!-- *********** Acceuil ********* -->

                <!-- *********** Team ********* -->
                    <div class="page" id="p2">
                        <section class="slider-trois text-center">
                                <img src="{{asset('client/image/Shape3.png')}}" alt="" class="team-animated-shape">
                                <img src="{{asset('client/image/Shape3.png')}}" alt="" class="team-animated-shape2">
                                <h1 class="team-h1">Team</h1>
                                <img src="{{asset('client/image/Shape-copie.png')}}" alt="" class='team-shape'>
                                <img src="{{asset('client/image/Shapeblog.png')}}" alt="" class='team-shape2'>
                                <img src="{{asset('client/image/.png')}}" alt="" class='team-shape2'>

                            <div class="blog-animate"></div>
                            
                            <div class="container Teams-container">
                                <div class="owl-carousel slider">
                                    @foreach ($team as $te)
                                        <div class="Teams" >
                                            <div class="content-team-span">
                                                <img src="{{asset('storage/team/my_images/'.$te->image)}}" alt="" class="img1-blog">
                                                <img src="{{asset('storage/team/my_images/'.$te->image)}}" alt="" class="img2-blog">
                                                <img src="{{asset('storage/team/my_images/'.$te->image)}}" class="img3-blog">
                                                <img src="{{asset('storage/team/my_images/'.$te->image)}}" alt="" class="img4-blog">
                                            </div> 
                                            <div class="content-blog-text text-center">
                                                <h1>Projet</h1>
                                                <a href="" class="project-link">Lien du projet</a>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                </div>
                        </section>
                    
                    </div>
                <!-- *********** Team ********* -->

                <!-- *********** Offres ********* -->
                    <div class="page" id="p3">
                        <section class="panier">
                            <div class="container content-panier">
                                <div class="title-panier text-center">
                                    <h3>Nos offres</h3>
                                    
                                </div>
                                <div class="container offres-global ">
                                    @foreach ($service as $ser)
                                        <div class="flip-card">
                                            <div class="card front-face">
                                                <img src="{{asset('storage/service/my_images/'.$ser->imageService)}}" alt="">
                                            </div>
                                            <div class="card back-face">
                                                <img src="{{asset('storage/service/my_images/'.$ser->imageService)}}" alt="" class="image-card">
                                                <div class="info">
                                                    <li>{{ $ser->nomService }}</li>
                                                    <li>{{ $ser->serviceCategorie }}</li>
                                                    <li>{{ $ser->Avantageoffre }}</li>
                                                    <li>{{ $ser->description }}</li>
                                                    <li>{{ $ser->tarifService }}</li>
                                                    <div class="choix-panier">
                                                        <a href="{{url('ajouterPanier/'.$ser->id)}}"><i class="ti-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div>
                <!-- *********** Offres ********* -->
            
                <!-- *************Payement ********* -->
                    {{-- <div class="page" id="p4">
                        <section class="payement">
                            <div class="container content-payement">
                                <div class="payement-front">
                                    <h1>Passez au payement</h1>
                                    
                                    <p>Choisissez un mode de payement <i class="fas fa-angle-down" id="angle-down"></i></p> 
                                    <div class="mode-payement">
                                        <a href="">Paypal</a>
                                        <a href="CB.html">Carte bancaire</a>
                                        <a href="#">Stripe</a>
                                        <a href="#">Orange Money</a>
                                        <a href="#">Mvola</a>
                                    </div>
                            
                                </div>
                            </div>
                            <!-- LvCreation123** -->
                            <img src="{{asset('client/image/Shape6.png')}}" alt="" class="payement-design">
                            <img src="{{asset('client/image/shape5.png')}}" alt="" class="payement-design2">
                            <div class="payement-design-div"></div>
                        </section>
                    </div>  --}}
                <!-- *********** Payement ********* -->

                <!-- *********** About us ********* -->
                    <div class="page" id="p5">
                    <section class="about">
                        <img src="{{asset('client/image/Shape-copie.png')}}" alt="" class="about-shape">
                        <img src="{{asset('client/image/Shapeblog.png')}}" alt="" class="about-shape2">
                        <img src="{{asset('client/image/Shape3.png')}}" alt="" class="animated-shape-about about-un">
                        <img src="{{asset('client/image/Shape3.png')}}" alt="" class="animated-shape-about about-deux">
                        <div class="blog-animate"></div>

                        <div class="container about-section">
                            <div class="about_image col-md-6">
                                <img src="{{asset('client/image/1.jpg')}}" alt="" >
                            </div>
                            <div class="about_description col-md-6 text-center">
                                <h1>Titre</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia molestiae fugiat vel possimus odio ullam cupiditate maxime explicabo laudantium esse nam temporibus, reiciendis iusto recusandae tempora soluta quidem optio voluptates.</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores ut id harum qui omnis distinctio, nam ab quia totam consequatur sint optio nisi dolor doloribus impedit facere, perspiciatis recusandae laborum!</p>
                            </div>
                        </div>
                        
                    </section>
                    </div> 
                <!-- *********** About us ********* -->

                <!-- *********** Blog ********* -->
                    <div class="page" id="p6">
                    <section class="section-blog-LV">
                        <div class="container-fluide blog-global-content">
                            <img src="{{asset('client/image/Sans-titre-4.png')}}" alt="" class="shape-blog">
                            <img src="{{asset('client/image/Sans-titre-2.png')}}" alt="" class="shape-blog2">
                            <div class="container container-global-blog">
                                <h1 class="text-center title-blog">Welcome to blog</h1>
                                <div class="col-md-12 ">
                                    <div class="col-md-12 container-blog">
                                        <div class="col-md-4 blog-content-image text-center">
                                            <img src="image/3.jpg" alt="" class="photo-blog">
                                        </div>
                                        <div class="col-md-8 blog-content-text ">
                                            <h3 class="">blog</h3>
                                            <h5>July 10</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, dolores voluptate natus fugit ab perspiciatis totam in. Fugiat laborum enim sint similique. Quisquam quis quod aperiam repudiandae porro blanditiis debitis.</p>
                                            <a href="" class="link-to-project">Suivre le lien</a>
                                        </div>
                                    </div>
                                    <hr class="ligne">
                                    <div class="col-md-12 container-blog" >
                                        <div class="col-md-4 blog-content-image ">
                                            <img src="image/3.jpg" alt="" class="photo-blog">
                                        </div>
                                        <div class="col-md-8 blog-content-text ">
                                            <h3 class="">blog</h3>
                                            <h5>July 10</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, dolores voluptate natus fugit ab perspiciatis totam in. Fugiat laborum enim sint similique. Quisquam quis quod aperiam repudiandae porro blanditiis debitis.</p>
                                            <a href="" class="link-to-project">Suivre le lien</a>
                                        </div>
                                    </div>
                                    <a href="" class="pagination-laravel">1</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    </div>
                <!-- *********** Blog ********* -->

                {{-- checkout --}}
                <section class="content-card">
                    <div class="container">
                        <h3 class="text-center" style="color: white;">Payement</h3>
            
                        <div class="col-md-12 content-carte">
                            <div class="col-md-8 global-content-cartes">
                                <form action="" >
                                    <div class="col-md-12 container-inputs-payement">
                                        <div class="col-md-12 content-input-payement">
                                            <div class="col-md-6 input-payement">
                                                <label for="">Nom</label> 
                                                <br>
                                                <input type="text" name="" id="">
                                            </div>
                                            <div class="col-md-6 input-payement">
                                                <label for="">Prenom</label>
                                                <br>
                                                <input type="text" name="" id="">
                                            </div>
                                        </div>
                                        <!-- Nom et Prenom -->
                                        <div class="col-md-12 content-input-payement">
                                            <div class="col-md-6 input-payement">
                                                <label for="">Adresse</label>
                                                <br>
                                                <input type="text" name="" id="">
                                            </div>
                                            <div class="col-md-6 input-payement">
                                                <label for="">Telephone</label>
                                                <br>
                                                <input type="text" name="" id="">
                                            </div>
                                        </div>
                                        <!-- Adresse et telephone -->
                                        <div class="col-md-12 content-input-payement">
                                            <div class="col-md-6 input-payement">
                                                <label for="">Email</label>
                                                <br>
                                                <input type="email" name="" id="">
                                            </div>
                                            <div class="col-md-6 input-payement">
                                                <label for="">Nom de la carte</label>
                                                <br>
                                                <input type="text" name="" id="">
                                            </div>
                                        </div>
                                        <!-- email et nom de la carte -->
                                        <div class="col-md-12 content-input-payement">
                                            <div class="col-md-6 input-payement">
                                                <label for="">Numero de la carte</label>
                                                <br>
                                                <input type="text" name="" id="">
                                            </div>
                                            <div class="col-md-6 input-payement">
                                                <label for="">Mois d'expiration</label>
                                                <br>
                                                <input type="text" name="" id="">
                                            </div>
                                        </div>
                                        <!-- numero de la carte et mois d'expiration -->
                                        <div class="col-md-12 content-input-payement">
                                            <div class="col-md-6 input-payement">
                                                <label for="">Année d'expiration</label>
                                                <br>
                                                <input type="text" name="" id="">
                                            </div>
                                            <div class="col-md-6 input-payement">
                                                <label for="">CVC</label>
                                                <br>
                                                <input type="text" name="" id="">
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="col-md-12 text-center payment-submit">
                                        <input type="submit" value="Payer">
                                    </div>
                                </form>
                            </div>
                            
            
                            <!-- resume et detail de la transaction -->
            
                            <div class="col-md-4 resume">
                                <div class="col-md-12 content-details">
                                    <h1 class="title-resume">
                                        Details des produits
                                    </h1>
                                    <div class="col-md-12 detail">
                                        <h1>
                                            Produit acheté
                                        </h1>
                                        <p>
                                            4000 ar
                                        </p>
                                    </div>
                                    <!-- produit  -->
                                    <div class="col-md-12 detail">
                                        <h1>
                                            Quantité 
                                        </h1>
                                        <p>
                                            1
                                        </p>
                                    </div>
                                    <div class="col-md-12 px-unity">
                                        <h1>
                                            Prix unitaire 
                                        </h1>
                                        <div class="col-md-12 px-unity-content">
                                            <p>Produit 1</p>
                                            <p>Prix 1</p>
                                        </div>
                                        <div class="col-md-12 px-unity-content">
                                            <p>Produit 2</p>
                                            <p>Prix 2</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 detail">
                                        <h1>
                                            Total 
                                        </h1>
                                        <p>
                                            1
                                        </p>
                                    </div>
                                    <div class="col-md-12 image-produit">
                                        <img src="image/cat.jpg" alt="">
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </section>
            
                <div class="btn-connexion">
                    <div class="panier-icon">
                        <a href="{{route('products')}}"><p><a href="{{route('panier')}}" class="nav-link"><i class="ti-shopping-cart-full shop"></i>[{{Session::has('panier')?Session::get('panier')->totalQty:0}}]</a></p></a> 
                    </div>
                    {{-- <div class="search">
                        <input type="search" class="searches" >
                        <button type="submit"><i class="ti-search"></i></button>
                    </div> --}}
            
                    @if(Session::has('membre'))
                        <div class="Tconcter">
                            <div class="icon clsme">                      
                                <img src="{{asset('storage/membre/my_images/'.session::get('membre')->imagemembre)}}" class="imglog">
                                <p class="soratra">{{session::get('membre')->nom}}</p>
                                <i class="fas fa-angle-down"></i>
                            </div> 
                            <div class="ampita">
                                <p class="soratra"><a href="{{ url('deconnexion')}}" class="sora">Déconnexion</a></p>
                            </div>
                        </div>
                    @else
                        <div class="Tconcter">
                            <div class="icon ">
                                <i class="fas fa-user img"></i>
                            </div> 
                            <div class="ampita">
                                <p class="soratra"><a  class="inscon" href="{{ route('connexion') }}" class="sora">Connexion</a>
                                </p>
                                <p class="soratra"><a  class="inscon" href="{{ route('inscrire') }}" class="sora">S'inscrire</a></p>
                            </div>
                        </div>
                    @endif
                </div>

@endsection
