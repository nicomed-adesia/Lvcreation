@extends('admin.layoutsAdmin.masterAdmin')
@section('titre')
    Afficher team
@endsection
@section('contenu')
    <section class="section-afficherTeam">
        <h1>Affichage team</h1>
        <table class="table-afficherTeam">
            <tr>
                <td>id</td>
                <td>Nom et prénom</td>
                <td>Fonction</td>
                <td>Contact</td>
                <td>email</td>
                <td>Facebook</td>
                <td>Image</td>
                <td>Action</td>
            </tr>
            @foreach ($team as $te)
                <tr>
                    <td>{{ $te->id }}</td>
                    <td>{{ $te->NomPrenom }}</td>
                    <td>{{ $te->fonction }} </td>
                    <td>{{ $te->contact }} </td>
                    <td>{{ $te->email }} </td>
                    <td>{{ $te->facebook }}</td>
                    <td><img src="{{asset('storage/my_images/'.$te->image)}}" alt="" width="50px" height="50px" style="border-radius: 50%; objet-fit:cover;"> </td>
                    <td>
                        <a href="{{url('modifierTeam/'.$te->id)}}" >Modifier</a>
                        <a href="{{url('supprimerTeam/'.$te->id)}}" onclick="return confirm('Confirmer la suppression?')">Supprimer</a>
                    </td>
                </tr>
            @endforeach
            
        </table>
    </section>
@endsection