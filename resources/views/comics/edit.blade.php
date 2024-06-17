@extends('layouts.app')

@section("content")
    <div class="container">
        <h1>Aggiungi un nuovo fumetto</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            {{-- Cookie per far riconoscere il form al server --}}
            @csrf
            @method("PUT")

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <select class="form-select" id="type" name="type">
                    <option selected>Seleziona</option>
                    <option @selected($comic->type === "Graphic novel") value="Graphic novel">Graphic novel</option>
                    <option @selected($comic->type === "Comic Book") value="Comic Book">Comic Book</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="weight" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <button class="btn btn-success" type="submit">Salva</button>
        </form>
    </div>
@endsection
