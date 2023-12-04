@extends('membre.layoutsmembre.master')
@section('title')
    Login
@endsection
@section('contenu3')
<section class="contenuConnexion">
    <div class="background">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
     </div>
    <div class="form-box">
        <h1 id="title">Inscription</h1>
        <form action="{{route('inscriptionE')}}" method="post" enctype="multipart/form-data" class="formInscription">
            @csrf
            <div class="input-group">
                <div class="input-fieldNom" id="nameField">
                    <input type="text" name="nom" required>
                    <label for="" class="labelLogin">Votre_Nom</label>
                </div>
                <div class="input-fieldEmail">
                    <input type="email" name="email" required>
                    <label for="" class="labelEmail">Votre_Email</label>
                </div>
                <div class="input-fieldMdp">
                    <input type="password" name="password" required>
                    <label for="" class="labelMotdepasse">Votre_Mdp</label>

                </div>
                <div class="inputFile" id="imageInscrire">
                    <label for="" >Profil:</label>
                    <label for="fileInput"><i class="fas fa-image"></i></label>
                    <input type="file" name="imagemembre" id="fileInput">
                </div>
            </div>
            {{-- <p>Mot de passe oublié? <a href="#">click ici</a></p> --}}
            <div>
                <button type="submit" class="btnLogin">Login</button>
            </div>
        </form>
        <form action="{{route('connecte')}}" method="post" enctype="multipart/form-data" class="formConnexion">
            @csrf
            <div class="input-groupConnexion">
                <div class="input-fieldEmailConnexion">
                    <input type="email" name="email" required>
                    <label for="" class="labelEmailConnexion">Votre_Email</label>
                </div>
                <div class="input-fieldMdpConnexion">
                    <input type="password" id="pass" name="password" required>
                    <label for="" class="labelMdpConnexion">Votre_Mdp</label>
                    <i class="fas fa-eye" id="eye" onClick="changer()"></i>
                    <i class="fas fa-eye-slash" id="eyeBarre"  onClick="changer()"></i>
                </div>
            </div>
            <p>Mot de passe oublié? <a href="{{route('mdpOublie')}}">click ici</a></p>
            <div>
                <button type="submit" class="btnLogin">Login</button>
            </div>
        </form>
    </div>
    <div class="btn-field">
        <button  type="button" id="signupBtn">Inscrire</button>
        <button  type="button" id="signinBtn" class="disable">Connecter</button>
    </div>
</section>

<script>
    let signupBtn = document.getElementById("signupBtn");
    let signinBtn = document.getElementById("signinBtn");
    let nameField = document.getElementById("nameField");
    let imageInscrire = document.getElementById("imageInscrire");
    let title = document.getElementById("title");
    let formInscrire = document.querySelector('.formInscription');
    let formConnexion = document.querySelector('.formConnexion');

    signinBtn.onclick = function(){
        nameField.style.maxHeight = "0";
        title.innerHTML = "Connexion";
        signupBtn.classList.add('disable');
        signinBtn.classList.remove('disable');
        imageInscrire.style.display = "none";
        formConnexion.style.display = "block";
        formInscrire.style.display="none";
    }
    signupBtn.onclick = function(){
        nameField.style.maxHeight = "50px";
        title.innerHTML = "Inscription";
        signinBtn.classList.add('disable');
        signupBtn.classList.remove('disable');
        imageInscrire.style.display = "flex";
        formConnexion.style.display = "none";
        formInscrire.style.display="block";
    }


    let label = document.querySelector(".labelLogin");
    label.innerHTML = label.innerHTML.split('').map((letters, i) => `<span style="transition-delay: ${i*30}ms; filter:hue-rotate(${i*10}deg);">${letters}</span>`).join('');

    let labelEmail = document.querySelector(".labelEmail");
    labelEmail.innerHTML = labelEmail.innerHTML.split('').map((letters, i) => `<span style="transition-delay: ${i*30}ms; filter:hue-rotate(${i*10}deg);">${letters}</span>`).join('');

    let labelMdp = document.querySelector(".labelMotdepasse");
    labelMdp.innerHTML = labelMdp.innerHTML.split('').map((letters, i) => `<span style="transition-delay: ${i*30}ms; filter:hue-rotate(${i*10}deg);">${letters}</span>`).join('');

    let labelEmailConnexion = document.querySelector(".labelEmailConnexion");
    labelEmailConnexion.innerHTML = labelEmailConnexion.innerHTML.split('').map((letters, i) => `<span style="transition-delay: ${i*30}ms; filter:hue-rotate(${i*10}deg);">${letters}</span>`).join('');

    let labelMdpConnexion = document.querySelector(".labelMdpConnexion");
    labelMdpConnexion.innerHTML = labelMdpConnexion.innerHTML.split('').map((letters, i) => `<span style="transition-delay: ${i*30}ms; filter:hue-rotate(${i*10}deg);">${letters}</span>`).join('');

    let change = true;
    function changer(){
        if (change){
            document.getElementById("pass").setAttribute("type","text");
            document.getElementById("eye").style.display = "none";
            document.getElementById("eyeBarre").style.display = "block";
            change=false;
        }
        else{
            document.getElementById("pass").setAttribute("type","password");
            document.getElementById("eyeBarre").style.display = "none";
            document.getElementById("eye").style.display = "block";
            change=true;
        }
    }
</script>

@endsection()

