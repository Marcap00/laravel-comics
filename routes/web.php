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
    $linksHeader = config('links_header');
    $comicsList = config('comics');
    $imagesBannerIcons = config('images_banner_icons');
    $imagesFooter = config('images_footer');
    return view(
        'pages.comics',
        compact('linksHeader', 'comicsList', 'imagesBannerIcons', 'imagesFooter')
    );
})->name('comics');

Route::get('/comics/{index}', function (int $index) {
    $linksHeader = config('links_header');
    $comicsList = config('comics');
    $imagesBannerIcons = config('images_banner_icons');
    $imagesFooter = config('images_footer');
    if (isset($comicsList[$index])) {
        $comic = $comicsList[$index];
    } else {
        abort(404);
    }
    return view(
        'pages.show',
        compact('linksHeader', 'comicsList', 'comic', 'imagesBannerIcons', 'imagesFooter')
    );
})->name('comics.show');
