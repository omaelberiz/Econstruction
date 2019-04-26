@extends('client.layout.app')
@section('container')
    <section id="details">
        <div class="container">
            <div class="header-double-line-home list-view-heading">
            <h2>Des Maisons de rêve</h2>
                <br>
        </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images/'.$appart->image) }}" alt="DevAndClick" width="470" height="310">
                </div>
                <div class="col-md-6">
                    <h3>{{ $appart->libelle }}</h3>
                    <h4><i class="fa fa-map-marker"></i> situation géographique: {{ $details->libellePro }}, {{ $details->ville }} </h4>
                    <p>superficie : {{ $details->superficie }} m²</p>
                    <p>Nombre de pièce : {{ $details->piece }} </p>
                    <strong><span class="price" style="font-size: 50px;">{{ $appart->prix }} fcfa</span></strong>
                        <div>
                            <a href="{{ route('ajouter',['id'=> $appart->id]) }}" class="btn btn-primary">ACHETER <i class="fa fa-cart-plus"></i> </a>
                        </div>

                </div>
            </div>
        </div>
    </section>
@endsection