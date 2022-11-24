<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dịch vụ Bạch Dương</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://smtpjs.com/v3/smtp.js"></script>


    @vite(['resources/js/home.js','resources/css/home.css'])

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
                    <a href="{{ route('login') }}" class="btn btn-login">Log in</a>
                    <a href="{{ route('register') }}" class="btn btn-logout">Register</a>
                    <!-- <div class="menu-avatar">
                        <div class="avatar"><img src="{{URL::asset('/images/avatar-login.png')}}" alt=""></div>
                        <a href="{{ route('login') }}" class="menu-logout">
                            Log out
                        </a>
                    </div> -->
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
            <img src="{{URL::asset('/images/bannerhome.jpg')}}" alt="" />
            <div class="banner-content">
                <div class="banner-title" style="font-size: 86px">Dịch vụ sự kiện Bạch Dương</div>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <!-- start service -->
    <div class="service" id="service">
        <div class="service_title">CÁC DỊCH VỤ CỦA CHÚNG TÔI</div>
        <div class="service_container">
            <div class="service-item">
                <img src="{{URL::asset('/images/home-danle.jpg')}}" alt="" />
                <h1>DẪN LỄ</h1>
                <a class="btn" href="{{ route('pagedanle.index') }}">XEM THÊM</a>
            </div>
            <div class="service-item">
                <img src="{{URL::asset('/images/home-tieccuoi.jpg')}}" alt="" />
                <h1>TIỆC CƯỚI</h1>
                <a class="btn" href="{{ route('pg.index') }}">XEM THÊM</a>
            </div>
            <div class="service-item">
                <img src="{{URL::asset('/images/home-sukien.jpg')}}" alt="" />
                <h1>SỰ KIỆN</h1>
                <a class="btn" href="{{ route('pg.index') }}">XEM THÊM</a>
            </div>
        </div>

        <div class="vanvo">
            <p>
                Dịch vụ bê tráp, PG sự kiện Bạch Dương luôn đi đầu Thái Bình
                về chất lượng dịch vụ, với đội ngũ nhân sự trẻ tuổi, nhiệt
                huyết luôn tạo sự mới mẻ nhưng không kém phần chuyên nghiệp
                <br />
                Đem đến sự hài lòng tuyệt đối cho khách hàng khi sử dụng
                dịch vụ
            </p>
            <h2>--- Bạch Dương ---</h2>

        </div>

        <div class="service_danle">
            <img src="{{URL::asset('/images/betrap.jpg')}}" alt="" />
            <div class="info-danle">
                <div class="title">DỊCH VỤ DẪN LỄ</div>
                <div class="content-danle">
                    Không chỉ về mặt ngoại hình, các nhân sự của chúng tôi
                    cũng luôn được chỉnh chu từng chút và hoàn toàn đồng bộ
                    để dâu rể có những tấm hình đẹp nhất và sang trọng nhất
                    trong ngày vui của mình!
                    <br />
                    <br />

                    Trang phục đội lễ với nhiều mẫu mã, kiểu dáng màu sắc đa
                    dạng cho dâu rể lựa chọn sao cho phù hợp với áo dài của
                    dâu rể.
                </div>
                <a href="{{ route('danle') }}" class="btn">XEM THÊM</a>
            </div>
        </div>

        <div class="service_event">
            <div class="info-event">
                <div class="title">DỊCH VỤ SỰ KIỆN</div>
                <div class="content-event">
                    Không chỉ về mặt ngoại hình, các nhân sự của chúng tôi
                    cũng luôn được chỉnh chu từng chút và hoàn toàn đồng bộ
                    để khách hàng có những khoảnh khắc và sang trọng nhất
                    trong sự kiện của mình!
                    <br />
                    <br />
                    Trang phục chúng tôi với nhiều mẫu mã, kiểu dáng màu sắc
                    đa dạng cho phù hợp với sự kiện của khách hàng.
                </div>
                <a href="{{ route('pg.index') }}" class="btn2">XEM THÊM</a>
            </div>
            <img src="{{URL::asset('/images/sukien.jpg')}}" alt="" />
        </div>

        <div class="service_about">
            <p>KHÔNG NGẠI KHOẢNG CÁCH</p>
            <p>
                Với mọi khung giờ, khoảng cách khác nhau thì chúng tôi vẫn
                luôn sắp xếp ổn <br> thoả nhất để ngày vui của khách hàng không
                chỉ trọn vẹn mà có giá phải chăng <br> nhất, chuyên nghiệp nhất.
            </p>
            <h2>--- Bạch Dương ---</h2>
        </div>
    </div>
    <!-- end service -->

    <div class="follow_us">
        <div class="title">THEO DÕI CHÚNG TÔI TRÊN FACEBOOK</div>
        <div class="follow_container">
            <img src="{{URL::asset('/images/flme1.jpg')}}" alt="" />
            <img src="{{URL::asset('/images/flme3.jpg')}}" alt="" />
            <img src="{{URL::asset('/images/flme2.jpg')}}" alt="" />
        </div>
        <a href="https://www.facebook.com/bongvintage1" class="btn">@Bach_Duong</a>
    </div>

    <!-- start contact -->
    <div id="contact" class="contact">
        <div class="contact_container">
            <div class="contact-content">
                <div class="title">LIÊN HỆ VỚI CHÚNG TÔI</div>
                <p>Để chúng tôi có thể phục vụ bạn 1 cách tốt nhất!</p>
            </div>

            <form class="contact-form">
                <input type="text" id="name" placeholder="Họ và Tên" required />
                <br />
                <input type="email" id="email" placeholder="Email..." required />
                <br />
                <input type="text" id="phone" placeholder="Số điện thoại" required />
                <br />
                <textarea name="" id="message" cols="20" rows="5" placeholder="Hãy để lại thông tin cho chúng tôi!"></textarea>
                <input class="btn" id="btn-send" value="Gửi đi" type="submit">
                </input>
            </form>
        </div>
    </div>
    <!-- end contact -->

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
    <!-- end footer -->

</body>

</html>