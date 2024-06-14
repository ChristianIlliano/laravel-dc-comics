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
                    <td><a href="{{route("comics.show",["comic"=>$item->id])}}">Dettagli</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
