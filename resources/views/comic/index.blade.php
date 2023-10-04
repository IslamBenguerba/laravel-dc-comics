@extends('layouts.public')

@section('title', 'Home-Page')

@section('content')
    <div class="cards-container">
        <div class="container position-relative d-flex justify-content-center align-items-center flex-column">
            <div class="badge text-bg-primary current-siries d-flex"><h4>Current Series</h4></div>
            <div class="d-flex flex-wrap justify-content-center mt-5 mb-5 gap-4">
                @foreach ($comics as $el)
                    <div class="card-box">
                        <a href="/comic/{{ $el->id }}">
                            @include('partials.card')
                        </a>
                    </div>
                @endforeach
            </div>
            <a class="add-fumetto" href="{{ route('comic.create') }}"> <button class="btn btn-primary">Aggiungi fumetto</button> </a>
        </div>
    </div>
    @include('partials.blue-stripe')
@endsection
