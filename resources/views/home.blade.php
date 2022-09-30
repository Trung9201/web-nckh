<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dịch vụ PG</title>
        <link rel="stylesheet" href="{{asset('css/home.css'); }} " />

        <link
        rel="stylesheet"
        href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
        />
    </head>
    <body>
        <!-- start navbar -->
        <nav class="navbar">
            <div class="navbar_container">
                <div class="navbar_logo">
                    <h1>PG</h1>
                </div>
                <ul class="navbar_menu">
                    <li class="menu-item">
                        <a href="#">Dịch vụ +</a>
                        <ul>
                            <li>
                                <a href="">PG +</a>
                                <ul>
                                    <li><a href="">Tiệc cưới</a></li>
                                    <li><a href="">Sự kiện</a></li>
                                </ul>
                            </li>
                            <li><a href="">Dẫn lễ</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="#">Giới thiệu</a></li>
                    <li class="menu-item"><a href="#">Nhân sự</a></li>
                    <li class="menu-item"><a href="#">Feedback</a></li>
                    <li class="menu-item"><a href="#">Liên hệ</a></li>
                    <li><a href="{{ route('login') }}" class="btn-login">Log in</a>
                    <a href="{{ route('register') }}" class="ml-4 btn-login">Register</a></li>
                </ul>
            </div> 
        </nav>
        <!-- end navbar -->

        <!-- banner -->
        <div id="banner" class="banner">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{URL::asset('/images/banner-1.png')}}" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="{{URL::asset('/images/banner-2.png')}}" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="{{URL::asset('/images/banner-3.png')}}" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="{{URL::asset('/images/banner-4.png')}}" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="{{URL::asset('/images/banner-5.jpg')}}" alt="" />
                </div>
            </div>
            <!-- btn-controls -->
            <div class="swiper-pagination"></div>
            <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->
        </div>
    </div>
    <!-- end banner -->

    


    <script src="{{asset('js/home.js');}}"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
      const swiper = new Swiper(".swiper", {
        autoplay: {
          delayL: 3000,
          disableOnInteraction: false,
        },
        loop: true,
        pagination: {
          el: ".swiper-pagination",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    </body>
</html>
