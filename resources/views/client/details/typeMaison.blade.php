@extends('client.layout.app')
@section('container')
    <section id="site">
        <div class="header-double-line-home list-view-heading">
            <h2>Des Maisons de rêve</h2>
        </div>
        <div class="container">
            <div class="row">
                @foreach($appartements as $appartement)
                    <div class="col-sm-4">
                        <div class="card card-in">
                            <div class="bImg">
                                <img class="img-fluid" src="{{ asset('images/'.$appartement->image) }}" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><i class="glyphicon glyphicon-map-marker"></i>
                                    @foreach($programmes as $programme)
                                        {{ $appartement->idPrograme == $programme->id? $programme->libellePro : ''  }}
                                    @endforeach
                                </h4>
                                <p class="card-text"> {{ $appartement->libelle }}</p>
                                <div class="bottom">
                                    <span class="price">{{ $appartement->prix }} fcfa</span><a href="{{ route('details',['id'=>$appartement->id]) }}"  class="btn btn-primary btnLeft">Details <i class="fa fa-eye"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection