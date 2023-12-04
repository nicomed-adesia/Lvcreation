<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{route('bienvenu')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="primary-color"><i class="fa fa-user-edit me-2"></i>LV Creation</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('indexLvcreaction')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Ajout</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('ajoutTeam')}}" class="dropdown-item">Ajouter des equipes</a>
                    <a href="{{route('ajoutFonction')}}" class="dropdown-item">Ajouter des fonction</a>
                    <a href="{{route('CategorieService')}}" class="dropdown-item">Ajouter categorie service</a>
                    <a href="{{route('Service')}}" class="dropdown-item">Ajout service</a>

                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Affichage</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="" class="dropdown-item">Team</a>
                    <a href="" class="dropdown-item">Produit</a>
                    <a href="" class="dropdown-item">Service</a>
                    <a href="{{route('Commande')}}" class="dropdown-item">Facture</a>
                    <a href="" class="dropdown-item">Commande</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->



