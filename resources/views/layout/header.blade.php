<html lang="en">
    <head>
        <title>SANGUINE</title>
        <meta charset="utf-8">
        <meta http-equiv="Content-type" value="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.ico')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-Wmr9QSQeLlIjmW1R8S1AzpKZD7q3OCftWBUV8bb+OgY/NO56qOdq/NLOdwt8rN+Iwe2NJIaajTTH+sD8xymWWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="https://pbutcher.uk/flipdown/css/flipdown/flipdown.css">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    </head>



    <body>
        <header>
            <nav class="navbar d-flex justify-content-around navbar-expand-lg navbar-light bg-light bg-transparent">
                <div class="d-flex justify-content-between align-items-center p-3 pb-0 m-4 mb-0 w-100">
                    <img src="{{ asset('assets/images/SANGUINE_LOGO_WHITE.svg') }}" alt="" height="18">
                    <button style="z-index: 1000;" class="bg-white navbar-toggler navbar-toggler-white" type="button"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=" navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link nav-link-custom {{ request()->is('/') ? ' active' : '' }}" aria-current="page" href="{{ route('homepage') }}">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-custom {{ request()->is('work') ? ' active' : '' }}" href="{{ route('work.index') }}">WORK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-custom {{ request()->is('team') ? ' active' : '' }}" href="{{ route('team.index') }}">TEAM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-custom {{ request()->is('about') ? ' active' : '' }}" href="{{ route('about') }}">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-custom {{ request()->is('services') ? ' active' : '' }}" href="{{ route('services') }}">SERVICES</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="collapse ps-3" id="navbarToggleExternalContent">
                    <div class="p-4">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link nav-link-mobile {{ request()->is('/') ? ' active' : '' }}" aria-current="page" href="{{ route('homepage') }}">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-mobile {{ request()->is('work') ? ' active' : '' }}" href="{{ route('work.index') }}">WORK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-mobile {{ request()->is('team') ? ' active' : '' }}" href="{{ route('team.index') }}">TEAM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-mobile {{ request()->is('about') ? ' active' : '' }}" href="{{ route('about') }}">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-mobile {{ request()->is('services') ? ' active' : '' }}" href="{{ route('services') }}">SERVICES</a>
                            </li>
                        </ul>

                    </div>
                </div>
                
            </nav>


            
    </header>
