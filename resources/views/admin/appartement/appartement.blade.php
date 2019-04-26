@extends('admin.layout.app')
@section('content')
    <h2>APPARTEMENT</h2>
    <div  class="row">
        <div class="col-md-8 localisation-form">
            <form id="appartement" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="Libelle">Libelle</label>:
                    <input type="text" name="libelle" class="form-control" id="Libelle" placeholder="saisir le libelle">
                    <p class="comments"></p>
                </div>
                <div class="form-group">
                    <label for="Ville">superficie</label>:
                    <input type="text" name="superficie" class="form-control" id="superficie" placeholder="saisir la superficie">
                    <p class="comments"></p>
                </div>
                <div class="form-group">
                    <label for="Region">piece</label>:
                    <input type="text" name="piece" class="form-control" id="piece" placeholder="Saisir le nombre de piece">
                    <p class="comments"></p>
                </div>
                <div class="form-group">
                    <label for="Region">Programme</label>:
                    <select name="idPrograme" id="idPrograme"   class="form-control">
                        <option disabled selected>Default select</option>
                        @foreach($programmes as $programme)
                            <option value="{{ $programme->id }}">{{ $programme->libellePro }}</option>
                        @endforeach
                    </select>
                    <p class="comments"></p>
                </div>
                <div class="form-group">
                    <label for="Region">Type d'appartement</label>:
                    <select name="idAppartement" id="idAppartement"   class="form-control">
                        <option disabled selected>Default select</option>
                        @foreach($typeAppart as $value)
                            <option value="{{ $value->id }}">{{ $value->libelle }}</option>
                        @endforeach
                    </select>
                    <p class="comments"></p>
                </div>
                <div class="form-group">
                    <label for="Region">image</label>:
                    <input type="file" name="image" class="form-control" id="image" >
                    <p class="comments"></p>
                </div>
                <div class="form-group">
                    <label for="Region">Prix</label>:
                    <input type="text" name="prix" class="form-control" id="prix" placeholder="Saisir le prix">
                    <p class="comments"></p>
                </div>
                <div class="form-group">
                    <button type="reset" class="btn btn-danger"><i class="fa fa-trash"></i> Effacer</button> <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in"></i> Créer</button>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="container">
        <h2>LISTE DES APPARTEMENTS</h2>
        <table id="table-appartement" class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Libelle</th>
                <th scope="col">superficie</th>
                <th scope="col">piece</th>
                <th scope="col">programme</th>
                <th scope="col">type d'appart</th>
                <th scope="col">l'image</th>
                <th scope="col">Prix</th>
                <th scope="col">Opération</th>
            </tr>
            </thead>
            <tbody>
            @foreach($appartements as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->libelle }}</td>
                    <td>{{ $item->superficie }}</td>
                    <td>{{ $item->piece }}</td>
                    <td>
                        @foreach($programmes as $pro)
                        {{ $item->idPrograme == $pro->id ? $pro->libellePro:'' }}
                        @endforeach
                    </td>
                    <td>@foreach($typeAppart as $type)
                        {{ $item->idAppartement == $type->id ? $type->libelle:'' }}
                        @endforeach
                    </td>
                    <td> <img src="{{ asset('images/'.$item->image) }}" width="100"></td>
                    <td>{{ $item->prix.' FCFA' }}</td>
                    <td><button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> Modifier</button><button type="reset" class="btn btn-danger"><i class="fa fa-trash"></i> Effacer</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection