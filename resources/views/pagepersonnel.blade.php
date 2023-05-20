<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dịch vụ Bạch Dương</title>

    @vite(['resources/js/home.js','resources/css/home.css'])
    @vite(['resources/js/personnel.js','resources/css/personnel.css'])
</head>

<body>

    <!-- start navbar -->
    <nav class="navbar" id="navbar">
        <div class="navbar_container">
            <a href="{{ route('home') }}" class="navbar_logo">
                <img src="{{URL::asset('/images/logo-bd.png')}}" alt="">
            </a>
            <ul class="navbar_menu">
                <li class="menu-item menu-dichvu">
                    <a>Dịch vụ +</a>
                    <ul class="menu-child">
                        <li>
                            <a>PG +</a>
                            <ul class="menu-child-2">
                                <li><a href="{{ route('pg.index') }}">Tiệc cưới</a></li>
                                <li><a href="{{ route('pg.index') }}">Sự kiện</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('pagedanle.index') }}">Dẫn lễ</a></li>
                    </ul>
                </li>
                <li class="menu-item"><a href="{{ route('home') }}">Giới thiệu</a></li>
                <li class="menu-item"><a href="{{ route('personnel') }}">Nhân sự</a></li>
                <li class="menu-item"><a href="{{ route('feedback') }}">Feedback</a></li>
                <li class="menu-item"><a href="{{ route('home') }}">Liên hệ</a></li>
                <li>
                    <!-- <a href="{{ route('login') }}" class="btn btn-login">Log in</a>
                    <a href="{{ route('register') }}" class="btn btn-logout">Register</a> -->
                    <div class="menu-avatar">
                        <div class="avatar"><img src="{{URL::asset('/images/avatar-login.png')}}" alt=""></div>
                        <a href="{{ route('login') }}" class="menu-logout">
                            Log out
                        </a>
                    </div>
                </li>
            </ul>
            <div class="navbar-toggle">
                <div class="toggle-item"></div>
                <div class="toggle-item"></div>
                <div class="toggle-item"></div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- start banner -->
    <div class="banner">
        <div class="banner_container">
            <img src="{{URL::asset('/images/nhansu.jpg')}}" alt="" />
            <div class="banner-content">
                <div class="banner-title">Nhân sự</div>
            </div>
        </div>
    </div>
    <!-- end banner -->


    <div class="personnel">
        <div class="title">Nhân sự của chúng tôi</div>
        <div class="personnel-content">
            <img src="{{URL::asset('/images/nhansu/1.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/2.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/3.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/22.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/23.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/4.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/5.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/6.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/7.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/8.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/9.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/10.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/11.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/24.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/25.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/26.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/12.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/13.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/27.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/28.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/29.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/14.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/15.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/16.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/17.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/18.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/19.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/20.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/21.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/30.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/31.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/32.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/33.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/34.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/35.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/36.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/37.jpg')}}" alt="">
            <img src="{{URL::asset('/images/nhansu/38.jpg')}}" alt="">

        </div>
    </div>

    <!-- start footer -->
    <div id="footer" class="footer">
        <div class="footer-item">
            <img src="{{URL::asset('/images/logo-bd.png')}}" alt="">
        </div>

        <div class="footer-item">
            <a href="#service">Dịch vụ</a><br />
            <a href="#service">Giới thiệu</a><br />
            <a href="{{ route('personnel') }}">Nhân sự</a><br />
            <a href="{{ route('feedback') }}">Feedback</a>
        </div>
        <div class="footer-item">
            <p>Email: bachduong92@gmail.com</p>
            <p>Phone: 0332631117</p>
            <div class="icon">
                <a href="https://www.facebook.com/bongvintage1"><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- enđ footer -->
</body>

</html>