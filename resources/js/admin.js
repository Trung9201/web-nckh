//select menu
const sidebarItems = document.querySelectorAll(".sidebar-item");
const contents = document.querySelectorAll(".content");

sidebarItems.forEach((item, index) => {
    const content = contents[index];
    item.onclick = function () {
        document
            .querySelector(".sidebar-item.active")
            .classList.remove("active");
        document.querySelector(".content.active").classList.remove("active");
        this.classList.add("active");
        content.classList.add("active");
    };
});

// View data
jQuery.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
    },
});
jQuery.noConflict();

//table user
var table = jQuery("#manager").DataTable({
    ajax: "/user",
    serverSide: true,
    processing: true,
    aaSorting: [[0, "asc"]],
    columns: [
        { data: "id", name: "id" },
        { data: "name", name: "name" },
        { data: "email", name: "email" },
        { data: "action", name: "action" },
    ],
});

//table receipt
var tableReceipt = jQuery("#manager-receipt").DataTable({
    ajax: "/invoice",
    serverSide: true,
    processing: true,
    aaSorting: [[0, "asc"]],
    columns: [
        { data: "id", name: "id" },
        { data: "name", name: "Tên sản phẩm" },
        { data: "names", name: "Tên khách hàng" },
        { data: "qtyskin", name: "Số lượng" },
        { data: "amountmale", name: "Số lượng nam" },
        { data: "amountfemale", name: "Số lượng nữ" },
        { data: "priceskin", name: "Đơn giá" },
        { data: "total", name: "Tổng tiền" },

        { data: "action", name: "action" },
    ],
});

// table skins
var table = jQuery("#manager-skin").DataTable({
    ajax: "/product",
    serverSide: true,
    autoWidth: false,
    processing: true,
    aaSorting: [[0, "asc"]],
    columns: [
        { data: "id" },
        { data: "name" },
        {
            data: "photo",
            render: function (data) {
                var img = `<img src="{{URL::asset('public/image/${data}')}}"/>`;
                return img;
            },
        },
        { data: "amount", name: "amount" },
        { data: "price", name: "price" },

        { data: "action", name: "action" },
    ],
});

//table personnel
// var tablePersonnel = jQuery("#manager-personnel").DataTable({
//     ajax: "",
//     serverSide: true,
//     processing: true,
//     aaSorting: [[0, "asc"]],
//     columns: [
//         { data: "id", name: "id" },
//         { data: "image", name: "image" },
//         { data: "action", name: "action" },
//     ],
// });

//table feedback
// var tableFeedback = jQuery("#manager-feedback").DataTable({
//     ajax: "/user",
//     serverSide: true,
//     processing: true,
//     aaSorting: [[0, "asc"]],
//     columns: [
//         { data: "id", name: "id" },
//         { data: "image", name: "image" },
//         { data: "action", name: "action" },
//     ],
// });

jQuery(document).on("click", ".btn-delete", function () {
    if (!confirm("Are you sure?")) return;

    var rowid = jQuery(this).data("rowid");
    var el = jQuery(this);
    if (!rowid) return;

    jQuery.ajax({
        type: "POST",
        dataType: "JSON",
        url: "user/" + rowid,
        data: { _method: "delete" },
        success: function (data) {
            if (data.success) {
                table.row(el.parents("tr")).remove().draw();
            }
        },
    }); //end ajax
});
jQuery(document).on("click", ".btn-deletepr", function () {
    if (!confirm("Bạn chắc chắn muốn xóa?")) return;

    var rowid = jQuery(this).data("rowid");
    var el = jQuery(this);
    if (!rowid) return;

    jQuery.ajax({
        type: "POST",
        dataType: "JSON",
        url: "product/" + rowid,
        data: { _method: "delete" },
        success: function (data) {
            if (data.success) {
                table.row(el.parents("tr")).remove().draw();
            }
        },
    });
});
jQuery(document).on("click", ".btn-deletein", function () {
    if (!confirm("Bạn chắc chắn muốn xóa?")) return;

    var rowid = jQuery(this).data("rowid");
    var el = jQuery(this);
    if (!rowid) return;

    jQuery.ajax({
        type: "POST",
        dataType: "JSON",
        url: "PG/" + rowid,
        data: { _method: "delete" },
        success: function (data) {
            if (data.success) {
                table.row(el.parents("tr")).remove().draw();
            }
        },
    });
});

//handleBtnEdit
jQuery(document).ready(function () {
    jQuery(".btn-edit").on("click", function (e) {
        e.preventDefault();
        jQuery("#skineditmodal").modal("show");

        var tr = jQuery(this).closest("tr");

        var data = tr
            .children("td")
            .map(function () {
                return jQuery(this).text();
            })
            .get();

        jQuery("input[name='name']").val(data[1]);
        jQuery("input[name='photo']").val(data[2]);
        jQuery("input[name='amount']").val(data[3]);
        jQuery("input[name='price']").val(data[4]);

        document.querySelector(
            "#editFormID"
        ).action = `http://127.0.0.1:8000/product/${data[0]}`;
    });
    jQuery("#editFormID").on("submit", function (e) {});
});
jQuery(document).ready(function () {
    jQuery(".btn-edit-pg").on("click", function (e) {
        e.preventDefault();
        jQuery("#skineditmodal-in").modal("show");

        var tr = jQuery(this).closest("tr");

        var data = tr
            .children("td")
            .map(function () {
                return jQuery(this).text();
            })
            .get();

        jQuery("input[name='name-pg-in']").val(data[1]);
        jQuery("input[name='photo-pg-in']").val(data[2]);
        jQuery("input[name='amount-pg-in']").val(data[3]);
        jQuery("input[name='price-pg-in']").val(data[4]);

        document.querySelector(
            "#editFormID-in"
        ).action = `http://127.0.0.1:8000/PG/${data[0]}`;
    });
    jQuery("#editFormID-in").on("submit", function (e) {});
});
jQuery(document).on("click", ".btn-deletein", function () {
    if (!confirm("Bạn chắc chắn muốn xóa?")) return;

    var rowid = jQuery(this).data("rowid");
    var el = jQuery(this);
    if (!rowid) return;

    jQuery.ajax({
        type: "POST",
        dataType: "JSON",
        url: "invoice/" + rowid,
        data: { _method: "delete" },
        success: function (data) {
            if (data.success) {
                table.row(el.parents("tr")).remove().draw();
            }
        },
    });
});
jQuery(document).on("click", ".btn-deleteinpg", function () {
    if (!confirm("Bạn chắc chắn muốn xóa?")) return;

    var rowid = jQuery(this).data("rowid");
    var el = jQuery(this);
    if (!rowid) return;

    jQuery.ajax({
        type: "POST",
        dataType: "JSON",
        url: "PGinvoince/" + rowid,
        data: { _method: "delete" },
        success: function (data) {
            if (data.success) {
                table.row(el.parents("tr")).remove().draw();
            }
        },
    });
});
var tableReceipt = jQuery("#manager-receipt-pg").DataTable({
    ajax: "/PGinvoice",
    serverSide: true,
    processing: true,
    aaSorting: [[0, "asc"]],
    columns: [
        { data: "id", name: "id" },
        { data: "name", name: "Tên sản phẩm" },
        { data: "names", name: "Tên khách hàng" },
        { data: "qtyskin", name: "Số lượng" },
        { data: "amountmale", name: "Số lượng nam" },
        { data: "amountfemale", name: "Số lượng nữ" },
        { data: "priceskin", name: "Đơn giá" },
        { data: "total", name: "Tổng tiền" },

        { data: "action", name: "action" },
    ],
});
var table = jQuery("#manager-skin-pg").DataTable({
    ajax: "/PG",
    serverSide: true,
    autoWidth: false,
    processing: true,
    aaSorting: [[0, "asc"]],
    columns: [
        { data: "id" },
        { data: "name" },
        {
            data: "photo",
            render: function (data) {
                var img = `<img src="{{URL::asset('public/image/${data}')}}"/>`;
                return img;
            },
        },
        { data: "amount", name: "amount" },
        { data: "price", name: "price" },

        { data: "action", name: "action" },
    ],
});
