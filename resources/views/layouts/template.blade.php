<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- bootstrap Core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- font-awesom Core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- layout Core CSS -->
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    
    @yield('css')
</head>

<body>

    <!-- nav bar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/logo.svg')}}" width="106" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link" href="./checkout1.html">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <div class="nav-item dropdown d-flex flex-column justify-content-center align-items-center ml-3 ml-md-0">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./login.html">Login</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('main')
    </main>

    <!-- footer區 -->
    <footer>
        <div class="container">
            <div class="footer_block">
                <div class="row">
                    <div class="col-12 col-md-3 footer_block_1">
                        <h5 class="font-weight-bold">數位方塊</h5>
                        <p>Air plant banjo lyft occupy retro adaptogen indego</p>
                    </div>
                    <div class="col-12 col-md-9 footer_block_2">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3 mt-4 mt-md-0">
                                <ul class="footer-menu">
                                    <li class="footer-menu-title">CATEGORIES</li>
                                    <li class="footer-menu-item">First Link</li>
                                    <li class="footer-menu-item">Second Link</li>
                                    <li class="footer-menu-item">Third Link</li>
                                    <li class="footer-menu-item">Fourth Link</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mt-4 mt-md-0">
                                <ul class="footer-menu">
                                    <li class="footer-menu-title">CATEGORIES</li>
                                    <li class="footer-menu-item">First Link</li>
                                    <li class="footer-menu-item">Second Link</li>
                                    <li class="footer-menu-item">Third Link</li>
                                    <li class="footer-menu-item">Fourth Link</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mt-4 mt-md-0">
                                <ul class="footer-menu">
                                    <li class="footer-menu-title">CATEGORIES</li>
                                    <li class="footer-menu-item">First Link</li>
                                    <li class="footer-menu-item">Second Link</li>
                                    <li class="footer-menu-item">Third Link</li>
                                    <li class="footer-menu-item">Fourth Link</li>
                                </ul>
                            </div>
                            <div class="col col-lg-3 col-md-6 mt-4 mt-md-0">
                                <ul class="footer-menu">
                                    <li class="footer-menu-title">CATEGORIES</li>
                                    <li class="footer-menu-item">First Link</li>
                                    <li class="footer-menu-item">Second Link</li>
                                    <li class="footer-menu-item">Third Link</li>
                                    <li class="footer-menu-item">Fourth Link</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-between footer_other">
            <p>© 2020 Tailblocks — @knyttneve</p>
            <div class="media_group">
                <a href=""><i class="mx-1 fab fa-facebook-f"></i></a>
                <a href=""><i class="mx-1 fab fa-twitter "></i></a>
                <a href=""><i class="mx-1 fab fa-instagram"></i></a>
                <a href=""><i class="mx-1 fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>

    <!-- jQuery JS CDN -->
    <!-- 通常jQuery都會放在最上面 -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <!-- popper JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <!-- bootstrap Core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    
    @yield('js')
</body>
</html>