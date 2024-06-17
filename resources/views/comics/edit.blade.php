@extends('layouts.app')

@section("content")
    <div class="container">
        <h1>Aggiungi un nuovo fumetto</h1>

        <form action="{{ route('comics.update', ["comic" => $comic->id]) }}" method="POST">
            {{-- Cookie per far riconoscere il form al server --}}
            @csrf
            @method("PUT")

            <div class="mb-3">
                <label for="title" class="form-label">{{ $comic->title }}</label>
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
                <select class="form-select" id="series" name="series">
                    <option selected>Seleziona</option>
                    <option @selected($comic->series === "Action Comics") value="Action Comics">Action Comics</option>
                    <option @selected($comic->series === "American Vampire 1976") value="American Vampire 1976">American Vampire 1976</option>
                    <option @selected($comic->series === "Aquaman") value="Aquaman">Aquaman</option>
                    <option @selected($comic->series === "Batgirl") value="Batgirl">Batgirl</option>
                    <option @selected($comic->series === "Batman") value="Batman">Batman</option>
                    <option @selected($comic->series === "Batman Beyond") value="Batman Beyond">Batman Beyond</option>
                    <option @selected($comic->series === "Batman/Superman Annual") value="Batman/Superman Annual">Batman/Superman Annual</option>
                    <option @selected($comic->series === "Batman: The Joker War Zone") value="Batman: The Joker War Zone">Batman: The Joker War Zone</option>
                    <option @selected($comic->series === "Batman: Three Jokers") value="Batman: Three Jokers">Batman: Three Jokers</option>
                    <option @selected($comic->series === "Batman: White Knight Presents: Harley Quinn") value="Batman: White Knight Presents: Harley Quinn">Batman: White Knight Presents: Harley Quinn</option>
                    <option @selected($comic->series === "Catwoman") value="Catwoman">Catwoman</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $comic->description }}
                </textarea>
            </div>

            <button class="btn btn-success" type="submit">Salva</button>
        </form>
    </div>
@endsection
