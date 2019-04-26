@extends('admin.layout.app')
@section('content')
    <?php
            $nbUser = App\User::count();
            $nbCmd = App\AppartClient::count();
            $nbAppart = App\Appartement::count();
    ?>
    <div class="row">
        <a href="{{ route('client') }}">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <i class="fas fa-user" style="font-size: 100px;margin-top: 10px;color: #1f59ff;"></i>
                <div class="card-body">
                    <h3 class="card-title">{{ $nbUser }} {{  $nbUser > 1? 'Clients':'Client' }}</h3>
                </div>
            </div>
        </div>
        </a>
        <a href="{{ route('commandes') }}">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <i class="fas fa-shopping-cart" style="font-size: 100px;margin-top: 10px;color: #ff6f47;"></i>
                <div class="card-body">
                    <h3 class="card-title">{{ $nbCmd }} {{  $nbCmd >1 ? 'Commandes':'Commande' }}</h3>
                </div>
            </div>
        </div>
        </a>
        <a href="{{ route('appartemente') }}">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <i class="fas fa-building" style="font-size: 100px;margin-top: 10px;color: #8b1cff;"></i>
                <div class="card-body">
                    <h3 class="card-title">{{ $nbAppart }} {{  $nbAppart > 1? 'Appartements' : 'Appartement' }} </h3>
                </div>
            </div>
        </div>
        </a>
    </div>
    <br>
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
                        {!! $commande->etapes < 100? '<p class="alert-danger">En cours<p>':'<p class="alert-success">Terminé<p>' !!}
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