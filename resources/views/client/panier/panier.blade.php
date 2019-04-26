@extends('client.layout.app')
@section('container')
    <section class="jumbotron text-center">
        <div class="container">
            <h2 class="jumbotron-heading">Panier <i class="fa fa-shopping-cart"></i></h2>
        </div>
    </section>
    <?php
            $cart = session()->has('Cart')? session()->get('Cart') : null;
            //dump($cart);
    ?>
    <div id="panier" class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Appartement</th>
                            <th scope="col" class="text-center">Quantité</th>
                            <th scope="col" class="text-right">Prix unitaire</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart->items as $item)
                        <tr>
                            <td><img src="{{ asset('images/'.$item['item']->image) }}" width="100" /> </td>
                            <td>{{ $item['item']->libelle .', superficie : '.$item['item']->superficie.' m², pièce : '.$item['item']->piece }}</td>
                            <td><input class="form-control" type="text" value="{{ $item['quantite'] }}" /></td>
                            <td class="text-right">{{ $item['prix'] }} FCFA</td>
                            <td class="text-right"><a href="{{ route('delete',['id'=> $item['item']->id]) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">{{ $cart->totalPrix }} FCFA</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>{{ $cart->totalPrix }} FCFA</strong></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="{{ route('accueil') }}" class="btn btn-block btn-default">Continue Shopping</a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <a href="{{ route('acheter') }}" class="btn btn-lg btn-block btn-primary text-uppercase">Checkout</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection