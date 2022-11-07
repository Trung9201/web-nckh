<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dịch vụ Bạch Dương</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/js/home.js','resources/css/home.css'])
    @vite(['resources/js/pg.js','resources/css/pg.css'])
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
                                <li><a href="{{ route('pg') }}">Tiệc cưới</a></li>
                                <li><a href="{{ route('pg') }}">Sự kiện</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('danle') }}">Dẫn lễ</a></li>
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
            <img src="{{URL::asset('/images/bannerpg.jpg')}}" alt="" />
            <div class="banner-content">
                <div class="banner-title">Dịch vụ Tiệc cưới, Sự kiện</div>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <!-- start automatic slide -->
    <div class="auto_slide">
        <div class="title">Những sự kiện chúng tôi đã tham gia!</div>
        <div class="sliders">
            <div class="slider">
                <img src="{{URL::asset('/images/pg/15.jpg')}}" alt="" />
            </div>
            <div class="slider">
                <img src="{{URL::asset('/images/pg/16.jpg')}}" alt="" />
            </div>
            <div class="slider">
                <img src="{{URL::asset('/images/pg/17.jpg')}}" alt="" />
            </div>
            <div class="slider">
                <img src="{{URL::asset('/images/pg/18.jpg')}}" alt="" />
            </div>
            <div class="slider">
                <img src="{{URL::asset('/images/pg/19.jpg')}}" alt="" />
            </div>
            <div class="slider">
                <img src="{{URL::asset('/images/pg/20.jpg')}}" alt="" />
            </div>
            <div class="slider">
                <img src="{{URL::asset('/images/pg/21.jpg')}}" alt="" />
            </div>
            <div class="slider">
                <img src="{{URL::asset('/images/pg/22.jpg')}}" alt="" />
            </div>
            <div class="slider">
                <img src="{{URL::asset('/images/pg/5.jpg')}}" alt="" />
            </div>
        </div>
    </div>
    <!-- end automatic slide -->

    <!-- start product -->
    <!-- start product -->
    <div class="products">
        <div class="product-card">
            <img src="{{URL::asset('/images/pg/1.jpg')}}" alt="" />
            <div class="product-name">Váy cúp đỏ dạ hội </div>
            <button class="btn" id="btn-order">Đặt lịch</button>
        </div>

        <div class="product-card">
            <img src="{{URL::asset('/images/pg/2.jpg')}}" alt="" />
            <div class="product-name">Áo dài đỏ họa tiết</div>
            <button class="btn" id="btn-order">Đặt lịch</button>
        </div>

        <div class="product-card">
            <img src="{{URL::asset('/images/pg/5.jpg')}}" alt="" />
            <div class="product-name">Áo dài trắng họa tiết hoa xanh</div>
            <button class="btn" id="btn-order">Đặt lịch</button>
        </div>

        <div class="product-card">
            <img src="{{URL::asset('/images/pg/3.jpg')}}" alt="" />
            <div class="product-name">váy cup tắng dạ hội</div>
            <button class="btn" id="btn-order">Đặt lịch</button>
        </div>
        <div class="product-card">
            <img src="{{URL::asset('/images/pg/4.jpg')}}" alt="" />
            <div class="product-name">Váy cup vàng dạ hội</div>
            <button class="btn" id="btn-order">Đặt lịch</button>
        </div>

        <div class="product-card">
            <img src="{{URL::asset('/images/pg/7.jpg')}}" alt="" />
            <div class="product-name">Áo dài đỏ họa tiết uyên ương</div>
            <button class="btn" id="btn-order">Đặt lịch</button>
        </div>
        <div class="product-card">
            <img src="{{URL::asset('/images/pg/8.jpg')}}" alt="" />
            <div class="product-name">Váy trắng dạ hội</div>
            <button class="btn" id="btn-order">Đặt lịch</button>
        </div>

        <div class="product-card">
            <img src="{{URL::asset('/images/pg/9.jpg')}}" alt="" />
            <div class="product-name">Áo dài xanh dương trơn</div>
            <button class="btn" id="btn-order">Đặt lịch</button>
        </div>

        <div class="product-card">
            <img src="{{URL::asset('/images/pg/13.jpg')}}" alt="" />
            <div class="product-name">áo dài đỏ trơn tiệc cưới</div>
            <button class="btn" id="btn-order">Đặt lịch</button>
        </div>
        <div class="product-card">
            <img src="{{URL::asset('/images/pg/14.jpg')}}" alt="" />
            <div class="product-name">Áo dài xanh trơn</div>
            <button class="btn" id="btn-order">Đặt lịch</button>
        </div>

    </div>
    <!-- end product -->

    <!-- start cart -->
    <form action="" id="cart" class="cart">
        <div class="close">&#x2715</div>
        <div class="cart_container">
            <div class="cart-left">
                <div class="cart-skin ">
                    <div class="cart-title">Trang phục</div>
                    <div class="cart-skin-info">
                        <img class="cart-img" src="" alt="">
                        <div>Nhập số lượng: <input id="skin-sl" type="text" value="0"></div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="cart-personnel ">
                    <div class="cart-title">Số lượng nhân sự</div>
                    <div class="cart-personnel-info">
                        <span>Nam: <input id="personnel-sl-male" type="text" value="0"></span>
                        <span>Nữ: <input id="personnel-sl-female" type="text" value="0"></span>
                    </div>
                </div>
                <div class="line"></div>
                <div class="cart-time ">
                    <div class="cart-title">Thời gian</div>
                    <div class="cart-time-info">
                        <textarea id="time-input" name="" cols="30" rows="5" placeholder="ví dụ: 9h30 ngày 10/10/2022"></textarea>
                    </div>
                </div>
                <div class="line"></div>
                <div class="cart-address ">
                    <div class="cart-title">Địa chỉ</div>
                    <div class="cart-address-info">
                        <select name="selectAddress" id="select-address">
                            <option value="ttp">Trong Thành Phố</option>
                            <option value="ntp">Ngoài Thành Phố</option>
                        </select>
                        <textarea name="" id="address-input" cols="30" rows="5" placeholder=" Hãy nhập địa chỉ cụ thể"></textarea>
                    </div>
                </div>
                <div class="line"></div>
                <div class="cart-note ">
                    <div class="cart-title">Ghi chú</div>
                    <div class="cart-note-info">
                        <textarea name="" id="note-input" cols="30" rows="5" placeholder="Hãy ghi ra những yêu cần bạn cần lưu ý chúng tôi!"></textarea>
                    </div>
                </div>
                <div class="line"></div>

            </div>

            <div class="cart-right">
                <div class="cart-right-title">HÓA ĐƠN</div>
                <div class="cart-information">
                    <div class="cart-information-skin">
                        <div class="skin-name">Tên trang phục</div>
                        <div>x <span class="skin-amount"></span></div>
                    </div>
                    <div class="cart-information-personnel">
                        <div class="personnel-male">
                            <p>Số nhân sự nam</p>
                            <div>x <span class="personnel-amount-male"></span></div>
                        </div>
                        <div class="personnel-female">
                            <p>Số nhân sự nữ</p>
                            <div>x <span class="personnel-amount-female"></span></div>
                        </div>
                    </div>
                    <div class="cart-information-time">
                        Thời gian:
                        <div class="time-detail"></div>
                    </div>
                    <div class="cart-information-address">
                        Địa chỉ:
                        <div class="address-detail"></div>
                    </div>
                    <div class="cart-information-note">
                        Ghi chú:
                        <div class="note-detail">
                            Không có ghi chú
                        </div>
                    </div>
                    <div class="cart-information-fee">
                        <p>Phí dịch vụ:</p>
                        <div class="fee">20%</div>
                    </div>
                    <div class="line"></div>
                    <div class="cart-total">
                        <p>Tổng thanh toán</p>
                        <div><span id="total"></span> vnđ</div>
                    </div>
                    <button class="btn btn-order-receipt">Đặt dịch vụ</button>
                </div>
            </div>
        </div>
    </form>
    <!-- start cart -->


    <div class="form_success">
        <div class="form_success_container">
            <i class="fa fa-times" aria-hidden="true"></i>
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <br>
            <h2>Bạn đã đặt lịch thành công!</h2>
            <p>Chúng tôi sẽ liên hệ lại với bạn để trao đổi chi tiết hơn</p>
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

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>

</html>