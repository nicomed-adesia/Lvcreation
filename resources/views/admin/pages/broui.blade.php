<div class="containerl">
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true" >

        <div class="login">
            <form action="" class="form">
                <label for="chk" aria-hidden="true">Connexion</label>
                <input type="email" class="inputlog" name="email" placeholder="Email" required>
                <input type="password" name="password" class="inputlog" placeholder="password" required>
                <button>Connexion</button>

            </form>
        </div>
        <div class="register">
            <form action="" class="form">
                <label for="chk" aria-hidden="true">Inscription</label>
                <input type="text" class="inputlog" name="nom" placeholder="Nom" required>
                <input type="email" class="inputlog" name="email" placeholder="Email" required>
                {{-- <input type="file" class="inputlog" name="imagemembre" placeholder="Image" required>
                <input type="password" name="password" class="inputlog" placeholder="password" required>
                <input type="password" name="password" class="inputlog" placeholder="password" required> --}}
                <button>Inscription</button>
            </form>
        </div>
    </div>
</div>