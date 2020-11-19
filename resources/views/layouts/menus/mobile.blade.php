<div id="myNav" class="menu-mobile">
    <a id="closebtn" class="closebtn">&times;</a>
    <ul class="overlay-content nav flex-column">
        <li class="nav-item">
            <a href="/">Home</a>
        </li>
        <li class="nav-item">
            <a href="/organização">organização</a>
        </li>
        <li class="nav-item">
            <a href="{{route('quemSomos')}}">quem somos</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('serie_a')}}">série a</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('serie_b')}}">série b</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('serie_c')}}">série c</a>
        </li>
        <li class="nav-item">
            <a href="/blog">notícias</a>
        </li>
    </ul>
</div>
<button type="button" id="open" class="mobile-btn btn btn-outline-light">menu</button>
<a href="/"><img class="brand-menu" src="{{ asset('images/logo.png')}}" alt="GGgamerHouse-logo"></a>