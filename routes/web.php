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
    $imagesBannerIcons = config('images_banner_icons');
    $linksHeader = config('links_header');
    $imagesFooter = config('images_footer');
    $comicsList = config('comics');
    return view(
        'pages.comics',
        compact('linksHeader', 'comicsList', 'imagesBannerIcons', 'imagesFooter')
    );
})->name('comics');