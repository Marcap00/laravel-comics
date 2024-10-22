@extends('layouts.app')
@section('head-title', 'DC COMICS')

@section('main-content')
<main id="main">

    <div class="bg-main">
        <div class="container">
            <div class="list-cards">
                <h3>CURRENT SERIES</h3>
                <div class="row row-cols">
                    @foreach ($comicsList as $comic)

                    <div class="col">
                        <div class="card">

                            <div class="card-img">
                                <img class="card-img" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $comic['title'] }}
                                </h5>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
                <button type="button">LOAD MORE</button>
            </div>
        </div>
    </div>
</main>
@endsection

