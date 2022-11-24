$(".sliders").slick({
    slidesToShow: 4,
    slidesToScroll: 2,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
});

// const closeCart = document.querySelector(".close");
// const cart = document.querySelector(".cart");

// closeCart.addEventListener("click", () => {
//     cart.style.display = "none";
// });

// // show hoa don
// const btnOrders = document.querySelectorAll("#btn-order");

// btnOrders.forEach((btn, index) => {
//     btn.onclick = (e) => {
//         e.preventDefault();
//         cart.style.display = "block";
//         const card = e.target.closest(".product-card");
//         const srcImg = card.querySelector("img").src;
//         const cartImg = document.querySelector(".cart-img");
//         const nameProduct = card.querySelector(".product-name").innerHTML;
//         cart.querySelector(".skin-name").innerHTML = nameProduct;
//         cartImg.src = srcImg;
//     };
// });

// // thay đổi giá trị hóa đơn khi thay đổi giá trị các thẻ input

// // số lượng trang phục
// const skinSL = document.querySelector("#skin-sl");

// skinSL.addEventListener("change", () => {
//     document.querySelector(".skin-amount").innerHTML = skinSL.value;
//     Sum();
// });

// // số lượng nhân sự

// const personnelMale = document.querySelector("#personnel-sl-male");
// const personnelFemale = document.querySelector("#personnel-sl-female");

// personnelMale.addEventListener("change", () => {
//     document.querySelector(".personnel-amount-male").innerHTML =
//         personnelMale.value;
//     Sum();
// });

// personnelFemale.addEventListener("change", () => {
//     document.querySelector(".personnel-amount-female").innerHTML =
//         personnelFemale.value;
//     Sum();
// });

// // thời gian
// const timeInput = document.querySelector("#time-input");

// timeInput.addEventListener("change", () => {
//     document.querySelector(".time-detail").innerHTML = timeInput.value;
// });

// // địa chỉ
// const addressInput = document.querySelector("#address-input");

// addressInput.addEventListener("change", () => {
//     document.querySelector(".address-detail").innerHTML = addressInput.value;
// });

// // ghi chú
// const noteInput = document.querySelector("#note-input");

// noteInput.addEventListener("change", () => {
//     document.querySelector(".note-detail").innerHTML = noteInput.value;
// });

// // Tính tổng hóa đơn
// const total = document.querySelector("#total");
// const selectAddress = document.querySelector("#select-dddress");
// console.log(selectAddress);

// function Sum() {
//     const personnelMaleValue = personnelMale.value;
//     const personnelFemaleValue = personnelFemale.value;
//     const skinValue = skinSL.value;
//     const thanhtien =
//         personnelMaleValue * 100000 +
//         personnelFemaleValue * 100000 +
//         skinValue * 50000 +
//         (personnelMaleValue * 100000 +
//             personnelFemaleValue * 100000 +
//             skinValue * 50000) *
//             0.2;
//     total.innerHTML = thanhtien;
// }

// // show success

// const btnOrderReceipt = document.querySelector(".btn-order-receipt");
// const formSuccess = document.querySelector(".form_success");
// const btnCloseSuccess = document.querySelector(".fa-times");
// btnOrderReceipt.onclick = (e) => {
//     e.preventDefault();
//     formSuccess.classList.add("active");
// };

// btnCloseSuccess.onclick = () => {
//     formSuccess.classList.remove("active");
//     cart.style.display = "none";
// };
const closeCart = document.querySelector(".close");
const cart = document.querySelector(".cart");

closeCart.addEventListener("click", () => {
    cart.style.display = "none";
});

// show hoa don
// const btnOrders = document.querySelectorAll("#btn-order");

// btnOrders.forEach((btn, index) => {
//     btn.onclick = (e) => {
//         e.preventDefault();
//         cart.style.display = "block";
//         const card = e.target.closest(".product-card");
//         const srcImg = card.querySelector("img").src;
//         const cartImg = document.querySelector(".cart-img");
//         const nameProduct = card.querySelector(".product-name").innerHTML;
//         cart.querySelector(".skin-name").innerHTML = nameProduct;
//         cartImg.src = srcImg;
//     };
// });

// thay đổi giá trị hóa đơn khi thay đổi giá trị các thẻ input

// số lượng trang phục
const skinSL = document.querySelector("#skin-sl");

skinSL.addEventListener("change", () => {
    document.querySelector(".skin-amount").value = skinSL.value;
    Sum();
});

// số lượng nhân sự

const personnelMale = document.querySelector("#personnel-sl-male");
const personnelFemale = document.querySelector("#personnel-sl-female");

personnelMale.addEventListener("change", () => {
    document.querySelector(".personnel-amount-male").value =
        personnelMale.value;

    Sum();
});

personnelFemale.addEventListener("change", () => {
    document.querySelector(".personnel-amount-female").value =
        personnelFemale.value;

    Sum();
});

// thời gian
const timeInput = document.querySelector("#time-input");

timeInput.addEventListener("change", () => {
    document.querySelector(".time-detail").innerHTML = timeInput.value;
});

// địa chỉ
const addressInput = document.querySelector("#address-input");

addressInput.addEventListener("change", () => {
    document.querySelector(".address-detail").innerHTML = addressInput.value;
});

// ghi chú
const noteInput = document.querySelector("#note-input");

noteInput.addEventListener("change", () => {
    document.querySelector(".note-detail").innerHTML = noteInput.value;
});

// Tính tổng hóa đơn
const total = document.querySelector("#total");
const selectAddress = document.querySelector("#select-dddress");

function Sum() {
    const personnelMaleValue = personnelMale.value;
    const personnelFemaleValue = personnelFemale.value;
    const skinValue = skinSL.value;
    const thanhtien =
        personnelMaleValue * 100000 +
        personnelFemaleValue * 100000 +
        skinValue * 50000 +
        (personnelMaleValue * 100000 +
            personnelFemaleValue * 100000 +
            skinValue * 50000) *
            0.2;
    total.innerHTML = thanhtien;
}

// show success

const btnOrderReceipt = document.querySelector(".btn-order-receipt");
const formSuccess = document.querySelector(".form_success");
const btnCloseSuccess = document.querySelector(".fa-times");
btnOrderReceipt.onclick = (e) => {
    formSuccess.classList.add("active");
};

btnCloseSuccess.onclick = () => {
    formSuccess.classList.remove("active");
    cart.style.display = "none";
    document.querySelector(".personnel-amount-female").value = 0;
    document.querySelector(".personnel-amount-male").value = 0;
    document.querySelector(".skin-amount").value = 0;
    skinSL.value = 0;
    personnelMale.value = 0;
    personnelFemale.value = 0;
};
