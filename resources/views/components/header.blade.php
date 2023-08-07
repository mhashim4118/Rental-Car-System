@php
$setting = Helper::site_logo();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/3d62aec5b0.js" crossorigin="anonymous"></script>
    <style>
        img.align-top {
            height: 60px;
            width: 100px;
        }

        .fi {
            position: fixed;
            top: 0%;
        }

        .fi {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }

        .xx {
            padding-left: 91%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-dark" data-bs-theme="dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                @foreach ($setting as $item)
                <img src="{{ Storage::url($item->logo) ? Storage::url($item->logo) : asset('/images/logo.png') }}"
                    alt="" class="align-top">
                @endforeach

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                    <a class="nav-link" href="/vehicles">VEHICLES</a>
                    <a class="nav-link" href="/blogs">BLOGS</a>
                    <a class="nav-link " href="/contact">CONTACT</a>
                    @if (Route::is('welcome') || Route::is('language'))
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" id="languageDropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select Language
                        </button>
                        <div class="dropdown-menu" aria-labelledby="languageDropdown">
                            <a class="dropdown-item" href="/en/welcome">ENGLISH</a>
                            <a class="dropdown-item" href="/hi/welcome">HINDI</a>
                            <a class="dropdown-item" href="/ko/welcome">KOREAN</a>
                            <a class="dropdown-item" href="/sp/welcome">SPANISH</a>
                        </div>
                    </div>
                    @endif
                    <div class="d-flex xx">
                        
                        <a class="nav-link" href="https://www.facebook.com/" target="_blank"><i
                                class="fa-brands fa-facebook"></i></a>
                        <a class="nav-link" href="https://www.instagram.com/" target="_blank"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a class="nav-link" href="https://twitter.com/" target="_blank"><i
                                class="fa-brands fa-twitter"></i></a>
                        <a class="nav-link" href="https://web.whatsapp.com/" target="_blank"><i
                                class="fa-brands fa-whatsapp"></i></a>

                        <div class="d-flex mx-2" style="">
                            @if (Route::has('login'))
                            @auth
                            <a href="{{ url('/dashboard') }}"
                                class="nav-link btn btn-info text-dark active">Dashboard</a>
                            @else
                            <a href="{{ route('login') }}" class="nav-link btn btn-success active">Login</a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link btn btn-primary active">Register</a>
                            @endif
                            @endauth
                            @endif
                        </div>
                        {{-- <a class="nav-link" href="">&nbsp;|&nbsp;<span>ENG</span>&nbsp;|</a> --}}
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>