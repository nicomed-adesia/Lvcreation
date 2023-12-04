
@extends('membre.layoutsmembre.master')
@section('title')
    inscription
@endsection
@section('contenu3')
<section class="section-connexion">
    <div class="containerf" id="main">
        <div class="sign-up">
            <form action="{{ route('Econnexion')}}" method="post" class="form-connexion">
                @csrf
                <h1 class="titreConnexion">Connexion</h1>
                <div class="social-container">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-google"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p>Utiliser votre compte pour se connecter</p>
                <input type="email" name="email" id="" placeholder="Email" required class="input-connexion">
                <input type="password" name="password" id="" placeholder="Mdp" required class="input-connexion">
                <button class="btnConnexion">Connexion</button>
            </form>
        </div>
        <div class="sign-in">
            <form action="{{ route('inscriptionE') }}" " method="post" class="form-connexion" enctype="multipart/form-data">
                @csrf
                <h1 class="titreConnexion">Inscription</h1>
                <div class="social-container">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-google"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p>Utiliser votre email pour s'inscrire</p>
                <input type="text" name="nom" placeholder="Nom" required class="input-connexion">
                <input type="email" name="email" id="" placeholder="Email" required class="input-connexion">
                <input type="password" name="password" id="" placeholder="Mdp" required class="input-connexion">
                <div>
                    <label for="">Entrer image:</label>
                    <input type="file" class="hidden" name="imagemembre" id="" >
                </div>
                <button class="btnConnexion">Inscription</button>
            </form>
           
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h1 class="bien">Bienvenue!</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, debitis!</p>
                    <button id="signIn" class="btnConnexion">Inscrire</button>
                </div>
                <div class="overlay-rigth">
                    <h1 class="bien">Bonjour amis!</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, debitis!</p>
                    <button id="signUp" class="btnConnexion">Connecter</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const overlayContainer = document.querySelector('.overlay-container')
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const main = document.getElementById('main');
    signUpButton.addEventListener('click', ()=>{
        main.classList.add('rigth-panel-active');
    });
    signInButton.addEventListener('click', ()=>{
        main.classList.remove('rigth-panel-active');
    });
</script>
@endsection()

