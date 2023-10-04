@php
    $navbar = [['titolo' => 'Characters'], ['titolo' => 'Comics'], ['titolo' => 'Movies'], ['titolo' => 'Tv'], ['titolo' => 'Games'], ['titolo' => 'Collectibles'], ['titolo' => 'Videos'], ['titolo' => 'Fans'], ['titolo' => 'News'], ['titolo' => 'Shop']];
@endphp

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/images/dc-logo.png" alt="logo" style="width: 80px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end h-100" id="navbarNavAltMarkup">
                <div class="navbar-nav text-uppercase">
                    @foreach ($navbar as $link)
                        <a class="nav-link" href="#">
                            {{ $link['titolo'] }}
                            <div class="current-page" tabindex="0"></div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </nav>

    <div class="jumbotron"></div>
</header>
