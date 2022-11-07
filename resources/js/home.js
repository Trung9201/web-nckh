// (function () {
//     function Slideshow(element) {
//         this.el = document.querySelector(element);
//         this.init();
//     }

//     Slideshow.prototype = {
//         init: function () {
//             this.wrapper = this.el.querySelector(".slider-wrapper");
//             this.slides = this.el.querySelectorAll(".slide");
//             this.previous = this.el.querySelector(".slider-previous");
//             this.next = this.el.querySelector(".slider-next");
//             this.index = 0;
//             this.total = this.slides.length;
//             this.timer = null;

//             this.action();
//             this.stopStart();
//         },
//         _slideTo: function (slide) {
//             var currentSlide = this.slides[slide];
//             currentSlide.style.opacity = 1;

//             for (var i = 0; i < this.slides.length; i++) {
//                 var slide = this.slides[i];
//                 if (slide !== currentSlide) {
//                     slide.style.opacity = 0;
//                 }
//             }
//         },
//         action: function () {
//             var self = this;
//             self.timer = setInterval(function () {
//                 self.index++;
//                 if (self.index == self.slides.length) {
//                     self.index = 0;
//                 }
//                 self._slideTo(self.index);
//             }, 3000);
//         },
//         stopStart: function () {
//             var self = this;
//             self.el.addEventListener(
//                 "mouseover",
//                 function () {
//                     clearInterval(self.timer);
//                     self.timer = null;
//                 },
//                 false
//             );
//             self.el.addEventListener(
//                 "mouseout",
//                 function () {
//                     self.action();
//                 },
//                 false
//             );
//         },
//     };

//     document.addEventListener("DOMContentLoaded", function () {
//         var slider = new Slideshow("#main-slider");
//     });
// })();

// scroll mousse

window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 30 ||
        document.documentElement.scrollTop > 30
    ) {
        document.getElementById("navbar").style.background = "#e0b1c0";
        // document.querySelector(".menu-child").style.background = "#e0b1c0";
        // document.querySelector(".menu-child-2").style.background = "#e0b1c0";
        document.getElementById("navbar").style.transition = "all .2s ease-in";
    } else {
        document.getElementById("navbar").style.background = "none";
        // document.querySelector(".menu-child").style.background = "#e0b1c0";
        // document.querySelector(".menu-child-2").style.background = "#e0b1c0";
    }
}

// toggle menu
const toggleItem1 = document.querySelector(".toggle-item:nth-child(1)");
const toggleItem2 = document.querySelector(".toggle-item:nth-child(2)");
const toggleItem3 = document.querySelector(".toggle-item:nth-child(3)");

const menu = document.querySelector(".navbar_menu");
const navbarToggle = document.querySelector(".navbar-toggle");

navbarToggle.onclick = () => {
    toggleItem1.classList.toggle("active");
    toggleItem3.classList.toggle("active");
    toggleItem2.classList.toggle("active");
    menu.classList.toggle("active");
};

const menuDichVu = document.querySelector(".menu-item:first-child a");
const menuChild = document.querySelector(".menu-item ul");
const menuPG = document.querySelector(".menu-item ul li");
const menuChild2 = document.querySelector(".menu-item ul li ul");

menuDichVu.onclick = () => {
    menuChild.classList.toggle("active");
    console.log(this);
};

menuPG.onclick = () => {
    menuChild2.classList.toggle("active");
    console.log(this);
};

const avatarMenu = document.querySelector(".menu-avatar");
const menuLogout = document.querySelector(".menu-logout");
avatarMenu.onclick = () => {
    menuLogout.classList.toggle("active");
};

//send email
const formContact = document.querySelector(".contact-form");

formContact.addEventListener("submit", (e) => {
    e.preventDefault();
    let name = document.getElementById("name").value,
        email = document.getElementById("email").value,
        phone = document.getElementById("phone").value,
        message = document.getElementById("message").value,
        body =
            "name " +
            name +
            "</br> email " +
            email +
            "</br> phone " +
            phone +
            "</br> message " +
            message;
    Email.send({
        // SecureToken: "1eab69ff-522c-4f93-ab21-72c312f67c40",
        // lxwfjpvbvffofoecs
        Host: "smtp.elasticemail.com",
        Username: "trunghips001@gmail.com",
        Password: "EC759474D6F914A1129911E710564421DC36",
        To: "trunghips001@gmail.com",
        From: email,
        Subject: "Contact Form",
        Body: body,
    })
        .then((success) => {
            alert("Message sent successfully");
        })
        .catch((error) => {
            alert("Error sending message");
        });
});
