

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
        {data:'name',name:'Tên sản phẩm'},
        {data:"names",name:"Tên khách hàng"},
        { data: "qtyskin", name: "Số lượng" },
        { data: "amountmale", name: "Số lượng nam" },
        { data: "amountfemale", name: "Số lượng nữ" },
        { data: "priceskin", name: "Đơn giá" },
        { data: "timeadress", name: "Thoi gian dia" },
        {data:'total',name:"Tổng tiền"},
        
        { data: "action", name: "action" },
    ],
});

// table skins

   

//table personnel
var tablePersonnel = jQuery("#manager-personnel").DataTable({
    ajax: "",
    serverSide: true,
    processing: true,
    aaSorting: [[0, "asc"]],
    columns: [
        { data: "id", name: "id" },
        { data: "image", name: "image" },
        { data: "action", name: "action" },
    ],
});

//table feedback
var tableFeedback = jQuery("#manager-feedback").DataTable({
    ajax: "/user",
    serverSide: true,
    processing: true,
    aaSorting: [[0, "asc"]],
    columns: [
        { data: "id", name: "id" },
        { data: "image", name: "image" },
        { data: "action", name: "action" },
    ],
});

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
                location.reload(true);
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
                location.reload(true);
            }
        },
    });
});
jQuery(document).on("click", ".btn-deletepg", function () {
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
                location.reload(true);
            }
        },
    });
});

//handleBtnEdit

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
                location.reload(true);
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
        {data:'name',name:'Tên sản phẩm'},
        {data:"names",name:"Tên khách hàng"},
        { data: "qtyskin", name: "Số lượng" },
        { data: "amountmale", name: "Số lượng nam" },
        { data: "amountfemale", name: "Số lượng nữ" },
        { data: "priceskin", name: "Đơn giá" },
        {data:"timeadress",},
        {data:'total',name:"Tổng tiền"},
        
        { data: "action", name: "action" },
    ],
});
