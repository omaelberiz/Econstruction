<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Reçu de Commande:</title>
    <meta name="description" content="">
    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon  -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
<div class="container" style="background-color: #99ccff">
    <div class="card">
        <div class="card-header">
            <strong> DATE COMMANDE : {{ $commande->id }}</strong>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <div>
                        <strong>nom</strong> {{ $user->nom }} {{ $user->prenom }}
                    </div>
                    <!-- recuperer l'adresse de livraison du client -->
                    <div><strong>Email: </strong> {{ $user->email }}</div>
                    <div><strong>Contact</strong>: {{ $user->contact }}</div>
                </div>
            </div>
            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="center">#</th>
                        <th class="left">Description</th>
                        <th class="right">Prix unitaire</th>
                        <th class="center">Qty</th>
                        <th class="right">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $cart->items as $item)
                        <tr>
                            <td class="center"></td>
                            <td class="left strong"> {{ $item['item']->libelle .', superficie : '.$item['item']->superficie.' m², pièce : '.$item['item']->piece }}</td>
                            <td class="right"> {{ $item['prix'] }}  FCFA</td>
                            <td class="left">{{ $item['quantite'] }}</td>
                            <td class="right">{{ $item['prix'] * $item['quantite'] }} FCFA</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-5">
                </div>
                <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                        <tbody>
                        <tr>
                            <td class="left">
                                <strong>Sous-totale</strong>
                            </td>
                            <td class="right">{{ $cart->totalPrix }} FCFA</td>
                        </tr>
                        <tr>
                            <td class="left">
                                <strong>Total</strong>
                            </td>
                            <td class="right">
                                <strong> {{ $cart->totalPrix }} FCFA</strong>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
</body>
</html>