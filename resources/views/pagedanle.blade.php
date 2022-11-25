<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dịch vụ Bạch Dương</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>


    @vite(['resources/js/home.js','resources/css/home.css'])
    @vite(['resources/js/danle.js','resources/css/danle.css'])
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
            <img src="{{URL::asset('/images/danle.jpg')}}" alt="" />
            <div class="banner-content">
                <div class="banner-title">Dịch vụ Dẫn lễ</div>
            </div>
        </div>
    </div>
    <!-- end banner -->

    <!-- start automatic slide -->
    <div class="auto_slide">
        <div class="title">CÁC THỦ TỤC VÀ DỊCH VỤ</div>
        <div class="sliders">
            <div class="slider">
                <img src="{{URL::asset('/images/doinhatrai.jpg')}}" alt="" />
                <div class="slider-content">
                    <h1 class="title">1. Cùng cô dâu đợi nhà trai</h1>
                    <p>
                        Đội nữ chúng tôi sẽ cùng dâu đợi nhà nam đến cùng
                        các tráp lễ rồi sẽ cùng đoàn nhà nam hỗ trợ đội nam
                        đỡ lễ vô trong nhà
                    </p>
                </div>
            </div>
            <div class="slider">
                <img src="{{URL::asset('/images/doinamdanle.jpg')}}" alt="" />
                <div class="slider-content">
                    <h1 class="title">2. Đội nam dẫn lễ</h1>
                    <p>
                        Đội nam cùng đằng trai sẽ dẫn lễ vào nhà đằng gái và
                        trao lễ cho bên đội nữ
                    </p>
                </div>
            </div>
            <div class="slider">
                <img src="{{URL::asset('/images/traole.jpg')}}" alt="" />
                <div class="slider-content">
                    <h1 class="title">3. Trao lễ</h1>
                    <p>
                        Đội nam và đội nữ và trao lễ cho nhau và đội nam sẽ
                        hỗ trợ dâu rể đưa lễ vật vào trong nơi lễ đường của
                        gia đình
                    </p>
                </div>
            </div>
            <div class="slider">
                <img src="{{URL::asset('/images/tiepnuoc.jpg')}}" alt="" />
                <div class="slider-content">
                    <h1 class="title">4. Tiếp nước</h1>
                    <p>
                        Trong lúc chờ đợi dâu rể tiến hành thủ tục ăn hỏi
                        thì đội nữ sẽ tiếp nước 2 bên gia đình và mời nước
                        các quan khách
                    </p>
                </div>
            </div>
            <div class="slider">
                <img src="{{URL::asset('/images/traoduyen.jpg')}}" alt="" />
                <div class="slider-content">
                    <h1 class="title">5. Trao duyên</h1>
                    <p>
                        Đội nam và đội nữ sẽ trao nhau các lì xì đỏ để đem
                        lại may mắn hạnh phúc đến với dâu rể
                    </p>
                </div>
            </div>
            <div class="slider">
                <img src="{{URL::asset('/images/chupanh.jpg')}}" alt="" />
                <div class="slider-content">
                    <h1 class="title">6. Chụp ảnh cùng dâu rể</h1>
                    <p>
                        Sau các thủ tục trong ngày lễ ăn hỏi thì đội lễ sẽ
                        chụp ảnh cùng dâu rể để lưu lại những kỷ niệm vui
                        nhất cùng mình
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end automatic slide -->

    <!-- start product -->
    <div class="products">
        @foreach($products as $product)
        <div class="product-card">
            <img src="{{URL::asset('public/image/'.$product->photo)}}" />
            <div class="product-name">{{$product->name}} </div>
            <button class="btn" id="btn-order">Đặt lịch</button>
        </div>
        @endforeach
    </div>
    <!-- end product -->

    <!-- start cart -->
    <div id="cart" class="cart">
        <div class="close">&#x2715</div>
        <div class="cart_container">
            <div class="cart-left">
                <div class="cart-skin ">
                    <div class="cart-title">Trang phục(100k/bộ(cả nam và nữ))</div>
                    <div class="cart-skin-info">
                        <img class="cart-img" src="" alt="">
                        <div>Nhập số lượng: <input id="skin-sl" type="text" value="0" required></div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="cart-personnel ">
                    <div class="cart-title">Số lượng nhân sự(150k/1ns)</div>
                    <div class="cart-personnel-info">
                        <span>Nam: <input id="personnel-sl-male" type="text" value="0" required></span>
                        <span>Nữ: <input id="personnel-sl-female" type="text" value="0" required></span>
                    </div>
                </div>
                <div class="line"></div>
                <div class="cart-time ">
                    <div class="cart-title">Thời gian</div>
                    <div class="cart-time-info">
                        <textarea id="time-input" name="" cols="30" rows="5" placeholder="ví dụ: 9h30 ngày 10/10/2022" required></textarea>
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
                        <textarea name="" id="address-input" cols="30" rows="5" placeholder=" Hãy nhập địa chỉ cụ thể" required></textarea>
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
                <form method="POST" id="order-receipt" action="{{url('/mathpay/2')}}">
                    {{ csrf_field() }}
                    <div class="cart-right-title">HÓA ĐƠN</div>
                    <div class="cart-information">
                        <div class="cart-information-skin">
                            <div class="skin-name">Tên trang phục</div>
                            <div>x <input name="amountskin" type="text" class="skin-amount" value="0" required></div>

                            @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                            @endforeach

                        </div>
                        <div class="cart-information-personnel">
                            <div class="personnel-male">
                                <p>Số nhân sự nam</p>
                                <div>x <input name="amountmale" type="text" class="personnel-amount-male" value="0" required></div>
                            </div>


                            <div class="personnel-female">
                                <p>Số nhân sự nữ</p>
                                <div>x <input name="amountfemale" type="text" class="personnel-amount-female" value="0" required></div>
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
                </form>
            </div>
        </div>
    </div>
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
    <div id="footer" class="footer" style="margin-top: -90px;">
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

    <script>
        const btnOrders = document.querySelectorAll("#btn-order");
        btnOrders.forEach((btn, index) => {
            btn.onclick = (e) => {
                e.preventDefault();
                cart.style.display = "block";
                const card = e.target.closest(".product-card");
                const srcImg = card.querySelector("img").src;
                const cartImg = document.querySelector(".cart-img");
                const nameProduct = card.querySelector(".product-name").innerHTML;
                cart.querySelector(".skin-name").innerHTML = nameProduct;
                cartImg.src = srcImg;

                const idProduct = index + 2;
                document.querySelector(
                    "#order-receipt"
                ).action = `http://127.0.0.1:8000/mathpay/${idProduct}`;
            };
        });

        jQuery(document).ready(function() {
            jQuery('.btn-order-receipt').on('submit', function(e) {})
        })
    </script>

</body>

</html>