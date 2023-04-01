<html lang="en">
    <head>
        <title>SANGUINE</title>
        <meta charset="utf-8">
        <meta http-equiv="Content-type" value="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.ico')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="https://pbutcher.uk/flipdown/css/flipdown/flipdown.css">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    </head>



    <body>
        <header>
            <nav class="navbar d-flex justify-content-around navbar-expand-lg navbar-light bg-light bg-transparent">
                <div class="d-flex justify-content-between align-items-center p-3 m-4 w-100">
                    <img src="{{ asset('assets/images/SANGUINE_LOGO_WHITE.svg') }}" alt="" height="18">
                    <button style="z-index: 1000;" class="bg-white navbar-toggler navbar-toggler-white" type="button"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=" navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link nav-link-custom active" aria-current="page" href="#">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-custom" href="#">WORK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-custom" href="#">TEAM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-custom" href="#">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-custom" href="#">SERVICES</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="collapse ps-3" id="navbarToggleExternalContent">
                    <div class="p-4">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link nav-link-mobile active" aria-current="page" href="#">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-mobile" href="#">WORK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-mobile" href="#">TEAM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-mobile" href="#">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-mobile" href="#">SERVICES</a>
                            </li>
                        </ul>

                    </div>
                </div>
                
            </nav>
            
            <div class="container h-50 justify-content-center d-flex align-items-center text-center">
                <h1>TEST</h1>
            </div>

            <div class="video-background">
                <video autoplay loop muted>
                    <source src="{{ asset('assets/videos/Home.mov') }}" type="video/mp4">
                </video>
            </div>


            
    </header>
