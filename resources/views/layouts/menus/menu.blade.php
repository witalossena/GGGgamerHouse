<ul class="nav main-menu" id="demo-menu">
    <li class="nav-item border-effect">
        <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item border-effect">
        <a class="nav-link" href="{{route('organização')}}">organização</a>
    </li>
    <li class="nav-item border-effect">
        <a class="nav-link" href="{{route('quemSomos')}}">Quem Somos</a>
    </li>
    <li class="nav-item logo" id="logo">
        <img src="{{ asset('images/logo.png')}}" alt="GGgamerHouse - logo">
    </li>
    <div class="dropdown mb-10">
        <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Divisões
        </a>
        <div class="dropdown-menu mt-0" id="drop-menu" aria-labelledby="dropdownMenuLink">
            <a class="nav-link" href="{{ route('serie_a')}}">série a</a>
            <a class="nav-link" href="{{ route('serie_b')}}">série b</a>
            <a class="nav-link" href="{{ route('serie_c')}}">série c</a>
        </div>
    </div>
    <li class="nav-item border-effect">
        <a class="nav-link" href="/blog">notícias</a>
    </li>
    <li class="nav-item border-effect">
        <a class="nav-link" target="_blank" href="https://docs.google.com/forms/d/1kPhGp6hflflkw8FzzJHL0Q8YndHo8Wr5gK6idOk1f30/viewform?edit_requested=true">inscrições</a>
    </li>
    @auth
    <li class="nav-item mb-10 border-effect">
        <a class="nav-link" href="{{ route('admin')}}">Login</a>
    </li>
    @endauth
</ul>