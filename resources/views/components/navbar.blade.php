<div class="container">
    <header class="py-3 border-bottom lh-1">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 ">
                <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">
                    <img height="48px" src="/template/assets/aulab-logo.svg">
                </a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                @guest
                    <a class="mx-2 btn btn-sm btn-outline-secondary" href="{{ route('register') }}">Registrati</a>
                    <a class="mx-2 btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Entra</a>
                @endguest

                @auth
                    <span>Benvenuto, {{ Auth::user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="mx-2 btn btn-sm btn-outline-secondary">Logout</button>
                    </form>
                @endauth

            </div>
        </div>
    </header>

    <div class="py-1 mb-3 nav-scroller border-bottom">
        <nav class="nav nav-underline justify-content-between">
            <a class="nav-item nav-link link-body-emphasis active" href="#">World</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">U.S.</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Technology</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Design</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Culture</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Business</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Politics</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Opinion</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Science</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Health</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Style</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Travel</a>
        </nav>
    </div>
</div>
