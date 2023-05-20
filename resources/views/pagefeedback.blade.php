<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dịch vụ Bạch Dương</title>
    @vite(['resources/js/home.js','resources/css/home.css'])
    @vite(['resources/js/feedback.js','resources/css/feedback.css'])

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
            <img src="{{URL::asset('/images/feedback.jpg')}}" alt="" />
            <div class="banner-content">
                <div class="banner-title">Feedback</div>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <div class="feedback">
        <div class="title">Những ý kiến đánh giá của khách hàng!</div>
        <div class="feedback-content">
            <img src="{{URL::asset('/images/fb/fb1.jpg')}}" alt="">
            <img src="{{URL::asset('/images/fb/fb2.jpg')}}" alt="">
            <img src="{{URL::asset('/images/fb/fb3.jpg')}}" alt="">
            <img src="{{URL::asset('/images/fb/fb4.jpg')}}" alt="">
            <img src="{{URL::asset('/images/fb/fb5.jpg')}}" alt="">
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