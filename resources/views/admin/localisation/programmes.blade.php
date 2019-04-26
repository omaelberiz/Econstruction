@extends('admin.layout.app')
@section('content')
    <h2>Programmes</h2>
    <div  class="row">
        <div class="col-md-8 localisation-form">
            <form id="programmes">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="Libelle">Libelle</label>:
                    <input type="text" name="libellePro" class="form-control" id="libellePro" placeholder="saisir le libelle">
                    <p class="comments"></p>
                </div>
                <div class="form-group">
                        <label for="Ville">Ville</label>:
                    <select class="custom-select" name="idLocalisation" id="idLocalisation">
                        <option selected disabled>...</option>
                        @foreach($localisation as $loc)
                        <option value="{{ $loc->id }}">{{ $loc->libelle }}</option>
                        @endforeach
                    </select>
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
        <h2>LISTE DES PROGRAMMES D'APPARTEMENT</h2>
        <table id="table-programmes" class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Libelle</th>
                <th scope="col">la Ville</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($programmes as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->libellePro }}</td>
                    <td>
                    @foreach($localisation as $value)
                        {{ $value->id == $item->idLocalisation? $value->libelle :'' }}
                    @endforeach
                    </td>
                    <td><button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> Effacer</button><button type="reset" class="btn btn-danger"><i class="fa fa-trash"></i> Effacer</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
