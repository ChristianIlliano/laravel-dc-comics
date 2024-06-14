@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista Fumetti</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Serie</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaComics as $item)
                <tr>
                    <th scope="row">{{ $item->series }}</th>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->price }}</td>
                </tr>
                @endforeach
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
