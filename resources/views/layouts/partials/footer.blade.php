<section class="footer">

    <p class="mt-3 footer-credits">GGGamerHouse &copy <span id="year"></span> todos os direitos reservados </p>

    <div class="whats">
        <a href="https://wa.link/xw56kn" target="_blank" rel="noopener noreferrer">
            <p class="w">whatsapp:</p>
            <p class="whatsApp-number">(11) 94992-4074</p>
        </a>
    </div>

    <ul class="nav">
        <!-- <li class="nav-item">      
            <a class="nav-link active" target="_blank" href="https://www.instagram.com/gggamerhouse/">
                <img class="w-100 h-100" src="{{ asset('images/icons/whats-logo.png')}}" alt="">
            </a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link active" target="_blank" href="https://www.instagram.com/gggamerhouse/">
                <img class="w-100 h-100" src="{{ asset('images/icons/instagram-logo.png')}}" alt="">
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://twitter.com/GGGamerHouse">
                <img class="w-100 h-100" src="{{ asset('images/icons/twitter-logo.png')}}" alt="">
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://discord.gg/j6wqDr7">
                <img class="w-100 h-100" src="{{ asset('images/icons/logo-discord.png')}}" alt="">
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.facebook.com/GGGamerHouse">
                <img class="w-100 h-100" src="{{ asset('images/icons/facebook-logo.png')}}" alt="">
            </a>
        </li>
    </ul>
    </div>
    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
</section>