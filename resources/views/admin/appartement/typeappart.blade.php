@extends('admin.layout.app')
@section('content')
    <h2>Type d'appartement</h2>
    <div  class="row">
        <div class="col-md-8 localisation-form">
            <form id="typeAppart" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="Libelle">Libelle</label>:
                    <input type="text" name="libelle" class="form-control" id="libelle" placeholder="saisir le libelle">
                    <p class="comments"></p>
                </div>
                <div class="form-group">
                    <label for="Ville">Image</label>:
                    <input type="file" name="representation" class="form-control" id="representation" placeholder="saisir la ville">
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
        <table id="table-typeAppart" class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Libelle</th>
                <th scope="col">modèle</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($typeAppart as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->libelle }}</td>
                    <td><img width="100" src="{{ asset('images/'.$item->representation) }}"></td>
                    <td><button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> Effacer</button><button type="reset" class="btn btn-danger"><i class="fa fa-trash"></i> Effacer</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection