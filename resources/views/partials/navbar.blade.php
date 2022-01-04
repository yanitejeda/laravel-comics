@php
$nav_links = [
    [
        'tittle' => 'CHARACTERS',
        'route_name' => '#',
    ],
    [
        'tittle' => 'COMICS',
        'route_name' => '#',
    ],
    [
        'tittle' => 'MOVIES',
        'route_name' => '#',
    ],
    [
        'tittle' => 'TV',
        'route_name' => '#',
    ],
    [
        'tittle' => 'GAMES',
        'route_name' => '#',
    ],
    [
        'tittle' => 'COLLECTIBLES',
        'route_name' => '#',
    ],
    [
        'tittle' => 'VIDEOS',
        'route_name' => '#',
    ],
    [
        'tittle' => 'FANS',
        'route_name' => '#',
    ],
    [
        'tittle' => 'NEWS',
        'route_name' => '#',
    ],
    [
        'tittle' => 'SHOP',
        'route_name' => '#',
    ],
];

//recupero la rotta
//dump(Request::route()->getName());
$routeName = Request::route()->getName()

@endphp

<nav class="navbar  navbar-expand-lg navbar-light bg-light">
    <div class="container container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ asset('img/dc-logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                @foreach ($nav_links as $value)

                    <li class="nav-item ">
                        <a class="nav-link {{$routeName === $value['route_name'] ? 'active' : ''}} " aria-current="page" href="{{ $value['route_name'] }}">{{ $value['tittle'] }}</a>
                    </li>
                @endforeach

            </ul>

        </div>
    </div>
</nav>
