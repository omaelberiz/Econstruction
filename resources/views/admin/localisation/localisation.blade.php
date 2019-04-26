@extends('admin.layout.app')
@section('content')
    <h2>LOCALISATION</h2>
    <div  class="row">
        <div class="col-md-8 localisation-form">
            <form id="localisation">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="Libelle">Libelle</label>:
                    <input type="text" name="libelle" class="form-control" id="Libelle" placeholder="saisir le libelle">
                    <p class="comments"></p>
                </div>
                <div class="form-group">
                    <label for="Ville">Ville</label>:
                    <input type="text" name="ville" class="form-control" id="Ville" placeholder="saisir la ville">
                    <p class="comments"></p>
                </div>
                <div class="form-group">
                    <label for="Region">Region</label>:
                    <input type="text" name="region" class="form-control" id="Region" placeholder="Saisir la region">
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
        <h2>LISTE DES LOCALISATION</h2>
        <table id="table-localisation" class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Libelle</th>
                <th scope="col">la Vile</th>
                <th scope="col">La region</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($localisation as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->libelle }}</td>
                <td>{{ $item->ville }}</td>
                <td>{{ $item->region }}</td>
                <td><button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> Modifier</button><button type="reset" class="btn btn-danger"><i class="fa fa-trash"></i> Effacer</button></td>
            </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection