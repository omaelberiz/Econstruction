@extends('admin.layout.app')
@section('content')
    <div class="container">
        <h2>LISTE DES COMMANDES</h2>
        <table id="table-appartement" class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Appartement</th>
                <th scope="col">status</th>
                <th scope="col">% achevement</th>
            </tr>
            </thead>
            <tbody>
            @foreach($commandes as $commande)
                <tr>
                    <th scope="row">{{ $commande->id }}</th>
                    <td>
                        @foreach($users as $user)
                        {{ $commande->IdClient == $user->id ?  $user->nom.' '.$user->prenom:''	 }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($appartements as $appartement)
                            {{ $commande->idAppartement == $appartement->id ?  $appartement->libelle:''	 }}
                        @endforeach
                    </td>
                    <td>
                        {!! $commande->etapes < 100? '<p class="alert-danger">En cours<p>':'<p class="alert-success">Terminé<p>'  !!}
                    </td>
                    <td>
                        {{ $commande->etapes }} %
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection