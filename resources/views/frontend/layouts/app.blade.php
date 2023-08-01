<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>

<div class="site-wrap">
    <header class="site-navbar" role="banner">
        <div class="site-navbar-top">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                        <form action="" class="site-block-top-search">
                            <span class="icon icon-search2"></span>
                            <input type="text" class="form-control border-0" placeholder="Search">
                        </form>
                    </div>

                    <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                        <a href="index.html" class="js-logo-clone"><img src="{{asset('images/logo.png') }}" width="150" height="150"></a>
                    </div>

                    <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                        <div class="site-top-icons">
                            <ul>
                                <li><a href="#"><span class="icon icon-person"></span></a></li>
                                <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                                <li>
                                    <a href="cart.html" class="site-cart">
                                        <span class="icon icon-shopping_cart"></span>
                                        <span class="count">2</span>
                                    </a>
                                </li>
                                <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <nav class="site-navigation text-right text-md-center" role="navigation">
            <div class="container">
                <ul class="site-menu js-clone-nav d-none d-md-block">
                    <li class="active"><a href="{{route('anasayfa')}}">ANA SAYFA</a></li>
                    <li class="has-children ">
                        <a href="#">KATEGORİ</a>
                        <ul class="dropdown">
                            @if(!empty($categories) && $categories->count()>0)
                                @foreach($categories->where('cat_ust',null) as $category)
                                        <li class="has-children">
                                            <a href="{{route($category->slug.'urunler')}}">{{$category->name}}</a>
                                            <ul class="dropdown">
                                                @foreach($category->subcategory as $subCategory)
                                                        <li><a href="{{route($category->slug.'urunler',$subCategory->slug)}}">{{$subCategory->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                @endforeach
                            @endif
                        </ul>
                    </li>
                    <li><a href="{{route('urunler')}}">ÜRÜNLER</a></li>
                    <li>
                        <a href="{{route('about')}}">HAKKIMIZDA</a>
                    </li>
                    <li><a href="{{route('contact')}}">İLETİŞİM</a></li>
                </ul>
            </div>
        </nav>
    </header>

   @yield('content')
    <footer class="site-footer border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="footer-heading mb-4">Menü</h3>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <ul class="list-unstyled">
                                <li class="active"><a href="{{route('anasayfa')}}">ANA SAYFA</a></li>
                                <li><a href="{{route('urunler')}}">ÜRÜNLER</a></li>
                                <li><a href="{{route('about')}}">HAKKIMIZDA</a></li>
                                <li><a href="{{route('contact')}}">İLETİŞİM</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="block-5 mb-5">
                        <h3 class="footer-heading mb-4">İletişim</h3>
                        @foreach($settings as $setting)

                        <ul class="list-unstyled">
                            <li class="address">{{$setting->data}}</li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script data-cfasync="false" src="{{asset('/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </div>
    </footer>
</div>
@yield('js')
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
