@extends('layouts.app')
@section('head-title', 'Comic')

@section('main-content')
<main id="main" class="main-show">
    <div class="bg-main">
        <div class="container">
            <div class="card">
                <div class="row row-cols-2">
                    <div class="col">
                        <img src="{{ $comic['thumb']}}" class="img-show"  alt="{{$comic['title']}}">
                    </div>
                    <div class="col">
                        <div class="card-body-show">
                            <p class="card-text">{{$comic['series']}}</p>
                            <h2 class="card-title">{{strtoupper($comic['title'])}}</h2>
                            <p class="card-price">{{$comic['price']}}</p>
                            <p class="card-description">{{$comic['description']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
