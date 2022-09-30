<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('css/admin.css'); }}">
</head>
<body>
<div class="sidebar_menu">
            <div class="sidebar-title">
                <h1>PG</h1>
                <p>Dịch vụ số 1 Thái Bình</p>
            </div>
            <ul class="sidebar-menu">
                <li class="sidebar-item active">Quản lý tài khoản</li>
                <li class="sidebar-item">Quản lý đơn hàng</li>
                <li class="sidebar-item">Quản lý trang phục</li>
                <li class="sidebar-item">Quản lý nhân sự</li>
                <li class="sidebar-item">Quản lý feedback</li>
            </ul>
        </div>

        <div class="sidebar_content">
            <!-- form quản lý tài khoản -->
            <form action="" class="content active management-user">
                <div class="managament-title">
                    Danh sách tài khoản người dùng
                </div>
                <div class="list-info">
                    Số lượng tài khoản:
                    <span id="count-user"></span>
                </div>
                <div class="list-user">
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Tên người dùng</th>
                            <th>Gmail</th>
                            <th>Số điện thoại</th>
                            <th></th>
                        </tr>
                        <tbody id="users"></tbody>
                    </table>
                </div>
            </form>

            <!-- form quản lý đơn  -->
            <form action="" class="content management-user">
                <div class="managament-title">Danh sách đơn đặt</div>
                <div style="display: flex">
                    <div class="list-info">
                        Số lượng đơn hoàn thành:
                        <span id="count-user"></span>
                    </div>
                    <div class="list-info">
                        Số lượng đơn đang xử lý:
                        <span id="count-user"></span>
                    </div>
                    <div class="list-info">
                        Thu nhập:
                        <span id="count-user"></span>
                    </div>
                </div>
                <div class="list-user">
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Tên người đặt</th>
                            <th>Ngày đặt</th>
                            <th>Mẫu trang phục</th>
                            <th>Số lượng trang phục</th>
                            <th>Số lượng PG</th>
                            <th>Thành tiền</th>
                            <th></th>
                        </tr>
                        <tbody id="users"></tbody>
                    </table>
                </div>
            </form>

            <!-- form quản lý trang phục -->
            <form action="" class="content management-shirt">
                <div class="managament-title">Quản lý nội dung</div>
                <div class="managament-container">
                    <div class="managament-feedback"></div>
                    <div class="managament-posts">
                        <div class="title">* Quản lý trang phục</div>
                        <div>
                            <form action="">
                                Tên:
                                <input
                                    type="text"
                                    name="name"
                                    id="name-shirt"
                                />
                                HÌnh ảnh:
                                <input
                                    type="file"
                                    name="name"
                                    id="name-shirt"
                                />
                                Giá:
                                <input
                                    type="type"
                                    name="giá"
                                    id="price-shirt"
                                />
                                <div class="controls">
                                    <input type="button" value="Thêm" />
                                    <input type="button" value="Sửa" />
                                </div>
                            </form>
                            <table style="margin: 20px 0">
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Hình ảnh</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Tên áo dài</td>
                                    <td>Ảnh áo dài</td>
                                    <td>100k</td>
                                    <td>
                                        <input
                                            class="btn"
                                            type="button"
                                            value="Xóa"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Tên áo dài</td>
                                    <td>Ảnh áo dài</td>
                                    <td>100k</td>
                                    <td>
                                        <input
                                            class="btn"
                                            type="button"
                                            value="Xóa"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Tên áo dài</td>
                                    <td>Ảnh áo dài</td>
                                    <td>100k</td>
                                    <td>
                                        <input
                                            class="btn"
                                            type="button"
                                            value="Xóa"
                                        />
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </form>

            <!-- form quản lý nhân sự -->
            <form action="" class="content management-staff">
                <div class="managament-title">Quản lý nhân sự</div>
                <div>
                    <form action="">
                        Chiều cao:
                        <input type="text" name="name" id="name-shirt" />
                        HÌnh ảnh:
                        <input type="file" name="name" id="name-shirt" />
                        <div class="controls">
                            <input type="button" value="Thêm" />
                        </div>
                    </form>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Hình ảnh</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>1</td>

                            <td>Hình ảnh</td>
                            <td>
                                <input class="btn" type="button" value="Xóa" />
                            </td>
                        </tr>
                    </table>
                </div>
            </form>

            <!-- form quản lý feedback -->
            <form action="" class="content management-feedback">
                <div class="managament-title">Quản Feedback</div>
                <div>
                    <form action="">
                        HÌnh ảnh:
                        <input type="file" name="name" id="name-shirt" />
                        <div class="controls">
                            <input type="button" value="Thêm" />
                        </div>
                    </form>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Hình ảnh</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Hình feedback</td>
                            <td>
                                <input class="btn" type="button" value="Xóa" />
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    <script src="{{asset('js/admin.js');}}"></script>
</body>
</html>