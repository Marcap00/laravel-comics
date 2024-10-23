
    <header id="header" class="container">
        <a href="{{route('comics')}}">
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo DC Comics">
        </a>
        <nav>
            <ul>
                @foreach ($linksHeader as $link)

                <li>
                    <a href="{{ route($link["href"])}}" class="{{ $link['active'] ? 'active' : ''}}">{{ strtoupper($link['name']) }}</a>
                </li>

                @endforeach
            </ul>
        </nav>
    </header>

