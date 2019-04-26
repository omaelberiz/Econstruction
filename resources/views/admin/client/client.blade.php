@extends('admin.layout.app')
@section('content')
    <div class="container">
    <h2>LISTE DES CLIENTS</h2>
    <table id="table-appartement" class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Contact</th>
            <th scope="col">adresse</th>
            <th scope="col">email</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->nom }}</td>
            <td>{{ $user->prenom }}</td>
            <td>{{ $user->contact }}</td>
            <td>{{ $user->adresse }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection