<header class="bg-white">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <img class="img-fluid" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
        </div>
        <nav>
            <ul class="d-flex justify-content-between align-items-sm-center" style="list-style: none">
                <li class="nav-item">
                     <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                        HOME
                    </a>
                </li>
                <li class="m-1 nav-item">
                    <a class="nav-link" href="#">CHARACTERS</a>
                </li>
                <li class="m-1 nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}" href="{{ route('comics.index') }}">
                        COMICS
                    </a>
                </li>
                <li class="m-1 nav-item">
                    <a class="nav-link" href="#">MOVIES</a>
                </li>
                <li class="m-1 nav-item">
                    <a class="nav-link" href="#">TV</a>
                </li>
                <li class="m-1 nav-item">
                    <a class="nav-link" href="#">GAMES</a>
                </li>
                <li class="m-1 nav-item">
                    <a class="nav-link" href="#">COLLECTIBLES</a>
                </li>
                <li class="m-1 nav-item">
                    <a class="nav-link" href="#">VIDEOS</a>
                </li>
                <li class="m-1 nav-item">
                    <a class="nav-link" href="#">FANS</a>
                </li>
                <li class="m-1 nav-item">
                    <a class="nav-link" href="#">NEWS</a>
                </li>
                <li class="m-1 nav-item">
                    <a class="nav-link" href="#">SHOP</a>
                </li>
            </ul>

        </nav>
    </div>
</header>
