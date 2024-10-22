<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta-additional')
    <title>@yield('head-title', '')</title>
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,regular,500,600,700,800,300italic,italic,500italic,600italic,700italic,800italic" rel="stylesheet" />
    @yield('cdn-additional')
</head>
<body>
    {{-- Include header --}}
    @include('partials.header')
    <main>
        @yield('main-content')
    </main>
    {{-- Include footer --}}
    @include('partials.footer')
    @yield('additional-scripts')
    @vite("resources/js/app.js")
</body>
</html>
