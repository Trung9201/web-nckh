<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://code.jquery.com/jquery-3.1.1.js">


    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    @vite(['resources/js/admin.js','resources/css/admin.css'])
</head>

<body>

    <div class="sidebar_menu">
        <div class="sidebar-title">
            <a href="{{ route('home') }}" class="navbar_logo">
                <img src="{{URL::asset('/images/logo-bd.png')}}" alt="">
            </a>
            <p>Dịch vụ Bạch Dương</p>
        </div>
        <ul class="sidebar-menu">
            <li class="sidebar-item active">Quản lý tài khoản</li>
            <li class="sidebar-item">Quản lý trang phục DL</li>
            <li class="sidebar-item">Quản lý trang phục PG</li>
            <li class="sidebar-item">Quản lý đơn hàng DL</li>
            <li class="sidebar-item">Quản lý đơn hàng PG</li>
        </ul>
    </div>

    <div class="sidebar_content">

        <!-- form quản lý tài khoản -->
        <div class="list-user content active">
            <div class="managament-title">
                Danh sách tài khoản người dùng
            </div>
            <table id="manager">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên người dùng</th>
                        <th>Gmail</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
        <!-- form quản lý trang phục dl -->
        <div class="list-skin content">
            <div class="managament-title">
                Danh sách Trang phục
            </div>
            <!-- add skin -->

            <div class="add">
                <button type="button" class="add btn btn-primary" data-toggle="modal" data-target="#skinaddmodal">Thêm
                    Trang Phục</button>
            </div>
            <table id="manager-skin">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh </th>
                        <th> Số lượng</th>
                        <th> Đơn giá</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
        <!-- form quản lý trang phục pg -->
        <div class="list-skin content">
            <div class="managament-title">
                Danh sách Trang phục
            </div>
            <!-- add skin -->

            <div class="add">
                <button type="button" class="add btn btn-primary" data-toggle="modal" data-target="#skinaddmodal-pg">Thêm
                    Trang Phục</button>
            </div>
            <table id="manager-skin-pg">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh </th>
                        <th> Số lượng</th>
                        <th> Đơn giá</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
        <!-- form quản lý đơn dl  -->
        <div class="list-receipt content">
            <div class="managament-title">
                Danh sách Hóa đơn
            </div>
            <table id="manager-receipt" style="width: 100%;">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Loại trang phục</th>
                        <th>Tên người dùng</th>
                        <th>Số lượng trang phục</th>
                        <th>Số lượng nhân sự nam</th>
                        <th>Số lượng nhân sự nữ</th>
                        <th> Đơn giá sản phẩm</th>
                        <th> Tổng tiền</th>
                        <th>Action</th>


                    </tr>
                </thead>
            </table>
        </div>
        <!-- form quản lý đơn pg  -->
        <div class="list-receipt-pg content">
            <div class="managament-title">
                Danh sách Hóa đơn
            </div>
            <table id="manager-receipt-pg" style="width: 100%;">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Loại trang phục</th>
                        <th>Tên người dùng</th>
                        <th>Số lượng trang phục</th>
                        <th>Số lượng nhân sự nam</th>
                        <th>Số lượng nhân sự nữ</th>
                        <th> Đơn giá sản phẩm</th>
                        <th> Tổng tiền</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>

        <!-- form quản lý nhân sự -->
        <!-- <div class="list-personnel content">
            <div class="managament-title">
                Danh sách Nhân sự
            </div>
        <div class="form-group">
            <input type="file" name="photo" id="photo" accept="image/*" class="form-control-file-img" />
            <button class="btn">Thêm</button>
        </div>
        <table id="manager-personnel">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Hình ảnh</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div> -->

        <!-- form quản lý feedback -->
        <!-- <div class="list-feedback content">
            <div class="managament-title">
                Danh sách Feedback
            </div>
        <div class="form-group">
            <input type="file" name="photo" id="photo" accept="image/*" class="form-control-file-img" />
            <button class="btn">Thêm</button>
        </div>
        <table id="manager-feedback">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Hình ảnh</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div> -->

    </div>
    <!-- add skin dl -->
    <div class="modal fade" id="skinaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm Mẫu Trang Phục</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên Trang phục</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập tên trang phục">
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input type="file" class="form-control" required name="image">
                        </div>
                        <div class="form-group">
                            <label>Số lượng</label>
                            <input type="text" class="form-control" name="amount" placeholder="Nhập thông tin trang phục">
                        </div>
                        <div class="form-group">
                            <label>Đơn giá</label>
                            <input type="text" class="form-control" name="price" placeholder="Nhập thông tin trang phục">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn-save btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- edit skin dl -->
    <div class="modal fade" id="skineditmodal-in" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thay đổi Trang Phục</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{route('PG.update',6)}}" id="editFormID-in" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Tên Trang phục</label>
                            <input type="text" class="form-control" name="name-pg-in" placeholder="Nhập tên trang phục">
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input type="file" class="form-control" required name="img-pg-in">
                        </div>
                        <div class="form-group">
                            <label>Số lượng</label>
                            <input type="text" class="form-control" name="amount-pg-in" placeholder="Nhập thông tin trang phục">
                        </div>
                        <div class="form-group">
                            <label>Đơn giá</label>
                            <input type="text" class="form-control" name="price-pg-in" placeholder="Nhập thông tin trang phục">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Updated</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- add skin pg -->
    <div class="modal fade" id="skinaddmodal-pg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm Mẫu Trang Phục</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('PG.store')}}" id="add-pg" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên Trang phục</label>
                            <input type="text" class="form-control" name="name-pg" placeholder="Nhập tên trang phục">
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input type="file" class="form-control" required name="image-pg">
                        </div>
                        <div class="form-group">
                            <label>Số lượng</label>
                            <input type="text" class="form-control" name="amount-pg" placeholder="Nhập thông tin trang phục">
                        </div>
                        <div class="form-group">
                            <label>Đơn giá</label>
                            <input type="text" class="form-control" name="price-pg" placeholder="Nhập thông tin trang phục">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn-save btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script>
        //table skins
        var table = jQuery("#manager-skin").DataTable({
            ajax: "/product",
            serverSide: true,
            autoWidth: false,
            processing: true,
            aaSorting: [
                [0, "asc"]
            ],
            columns: [{
                    data: "id",
                },
                {
                    data: "name",
                },
                {
                    data: "photo",
                    render: function(data) {
                        var img = `<img src="{{URL::asset('public/image/${data}')}}"/>`;
                        return img;
                    },
                },
                {
                    data: "amount",
                    name: "amount",
                },
                {
                    data: "price",
                    name: "price",
                },

                {
                    data: "action",
                    name: "action",
                },
            ],
        });
        var table = jQuery("#manager-skin-pg").DataTable({
            ajax: "/PG",
            serverSide: true,
            autoWidth: false,
            processing: true,
            aaSorting: [
                [0, "asc"]
            ],
            columns: [{
                    data: "id",
                },
                {
                    data: "name",
                },
                {
                    data: "photo",
                    render: function(data) {
                        var img = `<img src="{{URL::asset('public/image/${data}')}}"/>`;
                        return img;
                    },
                },
                {
                    data: "amount",
                    name: "amount",
                },
                {
                    data: "price",
                    name: "price",
                },

                {
                    data: "action",
                    name: "action",
                },
            ],
        });
    </script>
</body>

</html>