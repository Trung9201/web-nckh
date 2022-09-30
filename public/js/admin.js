const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);
const listUser = [
    { name: "Trung", gmail: "trung@gmail.com", sdt: "0123456785" },
    { name: "Long", gmail: "long@gmail.com", sdt: "0123456785" },
    { name: "Thao", gmail: "thao@gmail.com", sdt: "0123456785" },
    {
        name: "Ngoc Anh",
        gmail: "ngocanh@gmail.com",
        sdt: "0123456785",
    },
];

//count user
var countUser = $("#count-user");
countUser.innerText = listUser.length;

//render view table user
var table = $("#users");
buildTable(listUser);
function buildTable(data) {
    for (var i = 0; i < data.length; i++) {
        var row = `<tr>
                            <td></td>
							<td>${data[i].name}</td>
							<td>${data[i].gmail}</td>
							<td>${data[i].sdt}</td>
                            <td><input type="button" class="btn" value="Xóa" onClick="deleteUser()"/></td>
					  </tr>`;
        table.innerHTML += row;
    }
}

// function delete user
function deleteUser(e) {
    table.deleteRow(e);
}

//select menu
const sidebarItems = $$(".sidebar-item");
const contents = $$(".content");

sidebarItems.forEach((item, index) => {
    const content = contents[index];
    item.onclick = function () {
        $(".sidebar-item.active").classList.remove("active");
        $(".content.active").classList.remove("active");
        this.classList.add("active");
        content.classList.add("active");
    };
});
