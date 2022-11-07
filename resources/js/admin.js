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
    ajax: "",
    serverSide: true,
    processing: true,
    aaSorting: [[0, "asc"]],
    columns: [
        { data: "id", name: "id" },
        { data: "name", name: "name" },
        { data: "nameskin", name: "nameskin" },
        { data: "amountskin", name: "amountskin" },
        { data: "amountpersonnel", name: "amountpersonnel" },
        { data: "time", name: "time" },
        { data: "address", name: "address" },
        { data: "note", name: "note" },
        { data: "action", name: "action" },
    ],
});
/*var url='202210180230747124386bb8aae6f3a9.jpg'
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
            return' <img src="'+url+'" width="" height="" alt=""/>';

          
      
        }
    },
        { data: "amount", name: "amount" },
        { data: "price", name: "price" },
        
        { data: "action", name: "action" },
    ]
});
*/
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
            }
        },
    }); //end ajax
});
jQuery(document).on("click", ".btn-deletepr", function () {
    if (!confirm("Are you sure?")) return;

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
