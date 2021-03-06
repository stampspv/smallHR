<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">dippinno</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('index')}}#section-home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('index')}}#section-features">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('index')}}#section-reviews">Reviews</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('index')}}#section-pricing">Pricing</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('index')}}#section-faq">FAQ</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="{{ route('register') }}"><span class="pb_rounded-4 px-4">Try it Free</span></a></li>
            </ul>
        </div>
    </div>
</nav>