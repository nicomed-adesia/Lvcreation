{{-- <a href="{{route('affichagedashbord')}}">Dashbord</a> --}}
<div class=" membre">
    @if(Session::has('membre'))
    {{-- <div class="concter">
        <div class="icon clsme">                      
            <img src="{{asset('storage/membre/my_images/'.session::get('membre')->imagemembre)}}" class="imglog">
        </div> 
        <div class="ampita">
            <p class="soratra">{{session::get('membre')->nom}}</p>
            <p class="soratra"><a href="{{ url('deconnexion')}}" class="sora">Déconnexion</a></p>
        </div>
           
    </div> --}}
    @else
    {{-- <div class="Tconcter">
        <div class="icon clsme">
            <i class="ti-user img"></i>
        </div> 
        <div class="ampita">
            <p class="soratra"><a  class="inscon" href="{{ route('connexion') }}" class="sora">Connexion</a>
            </p>
            <p class="soratra"><a  class="inscon" href="{{ route('inscrire') }}" class="sora">S'inscrire</a></p>
        </div>
    </div> --}}
    @endif 
</div>

        {{-- <img src="{{asset('image/logo.png')}}" alt=""  class="logo_lv"> --}}
      <!-- Header sans responsive -->
      <header class="head" id="headerClient">
        <div class="nvbr" >
            <ul class="ulnav">
                <li class="linav">
                    <a href="#t1" class="anav">
                        <i class="fa fa-home-alt"></i>
                        <span class="fa fa-home iconnav"></span>
                        <span class="ttnav">Accueil</span>
                    </a>
                </li>
                <li class="linav">
                    <a href="#t2" class="anav">
                        <span class="fas fa-users iconnav"></span>
                        <span class="ttnav">Team</span>
                    </a>
                </li>            
                
                <li class="linav">
                    <a href="#t3" class="anav">
                        <span class="fa fa-shopping-cart iconnav"></span>
                        <span class="ttnav">Shop</span>
                    </a>
                </li>
                {{-- <li class="linav">
                    <a href="#t4" class="anav">
                        <span class="fa fa-euro-sign iconnav"></span>
                        <span class="ttnav">Payement</span>
                    </a>
                </li> --}}
                <li class="linav">
                    <a href="#t6" class="anav">
                        <span class="fa fa-blog iconnav"></span>
                        <span class="ttnav">Blog</span>
                    </a>
                </li>
                
            </ul>
            <div class="togglenav"></div>
        </div>
    </header>
<!-- Header sans responsive -->

<!-- Header avec responsive -->
    <div class="header-responsive">
        <nav>
            <ul>
            <li><a href="#t1"><i class="ti-home"></i></a></li>
            <li><a href="#t2"><i class="fab fa-teamspeak"></i></a></li>
            <li><a href="#t3"><i class="ti-shopping-cart"></i></a></li>
            <li><a href="#t4"><i class="fa fa-blog"></i></a></li>
            
            </ul>
        </nav>
    </div>
<!-- Header avec responsive -->

