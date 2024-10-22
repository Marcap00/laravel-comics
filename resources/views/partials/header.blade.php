
    <header id="header" class="container">
        <img src="../../images/dc-logo.png" alt="Logo DC Comics">
        <nav>
            <ul>
                @foreach ($linksHeader as $link)
                <li>
                    <a href="#" class="">{{ $link }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </header>

