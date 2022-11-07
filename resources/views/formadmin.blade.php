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

        <!-- form quản lý đơn  -->
        <div class="list-receipt content">
            <div class="managament-title">
                Danh sách Hóa đơn
            </div>
            <table id="manager-receipt">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên người dùng</th>
                        <th>Loại trang phục</th>
                        <th>Số lượng trang phục</th>
                        <th>Số lượng nhân sự nam</th>
                        <th>Số lượng nhân sự nữ</th>
                        <th>Thời gian</th>
                        <th>Địa chỉ</th>
                        <th>Ghi chú</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>


        <!-- form quản lý trang phục -->
        <div class="list-skin content">
        <div class="managament-title">
                Danh sách Trang phục
            </div>
            <!-- add skin -->

            <div class="add">
                <button type="button" class="add btn btn-primary" data-toggle="modal" data-target="#skinaddmodal">Thêm Trang Phục</button>
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
        <!-- form quản lý nhân sự -->
        <div class="list-personnel content">
            <div class="managament-title">
                Danh sách Nhân sự
            </div>
            <!--  thêm nhân sự -->
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
        </div>

        <!-- form quản lý feedback -->
        <div class="list-feedback content">
            <div class="managament-title">
                Danh sách Feedback
            </div>
            <!-- add feedback -->
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
        </div>

    </div>
    <div class="modal fade" id="skinaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm Mẫu Trang Phục</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               
               
                   
                <form action="{{route('product.store')}}"  method="POST"enctype="multipart/form-data">
                <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên Trang phục</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập tên trang phục">
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input type="file" class="form-control"  required name="image" >
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
    <div class="modal fade" id="skineditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm Mẫu Trang Phục</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{route('product.update',1)}}"  id="editFormID" method="POST"enctype="multipart/form-data">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        
                     
                        
                            <div class="form-group">
                            <label>Tên Trang phục</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập tên trang phục">
                             </div>
                             <div class="form-group">
                            <label>Hình ảnh</label>
                            <input type="file" class="form-control"  required name="img" >
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
                        <button type="submit" class="btn btn-primary">Updated</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

</body>

</html>

<script>
    jQuery(document).ready(function() {
    jQuery('.btn-edit').on('click', function(e) {
        e.preventDefault();
        jQuery('#skineditmodal').modal('show');
    });
    jQuery('#editFormID').on('submit', function(e) {
       
    })
});
    </script>
    
             
       <script>
       
//table skins
 
var table= jQuery("#manager-skin").DataTable({
    ajax: "/product",
    serverSide: true,
    autoWidth: false,
    processing: true,
    
    aaSorting: [[0, "asc"]],
    columns: [
        { data: "id"},
        { data: "name"  },
        { data: "photo", 

        render: function ( data) {

         
        
            var img = `<img src="{{URL::asset('public/image/${data}')}}"/>`
    return img;
            


          
      
        }
    },
        { data: "amount", name: "amount" },
        { data: "price", name: "price" },
        
        { data: "action", name: "action" },
    ]
});
</script>

      
