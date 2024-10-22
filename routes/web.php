<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $linksHeader = [
        [
            "name" => "characters",
            "active" => true
        ],
        [
            "name" => "comics",
            "active" => false
        ],
        [
            "name" => "movies",
            "active" => false
        ],
        [
            "name" => "tv",
            "active" => false
        ],
        [
            "name" => "games",
            "active" => false
        ],
        [
            "name" => "collectibles",
            "active" => false
        ],
        [
            "name" => "videos",
            "active" => false
        ],
        [
            "name" => "news",
            "active" => false
        ],
        [
            "name" => "shop",
            "active" => false
        ]
    ];
    $imagesFooter = [
        [
            "imageUrl" => "facebook",
            "alt" => "facebook"
        ],
        [
            "imageUrl" => "twitter",
            "alt" => "twitter"
        ],
        [
            "imageUrl" => "youtube",
            "alt" => "youtube"
        ],
        [
            "imageUrl" => "pinterest",
            "alt" => "pinterest"
        ],
        [
            "imageUrl" => "periscope",
            "alt" => "periscope"
        ]
    ];



    $comicsList = config('db');
    return view(
        'pages.home',
        compact('linksHeader', 'comicsList', 'imagesFooter')
    );
})->name('home');
