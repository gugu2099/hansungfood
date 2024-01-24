// first
var swiper = new Swiper(".first", {
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 60,
    loop: true,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },
    speed: 3000,
    pagination: {
        el: ".first .swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".first .swiper-button-next",
        prevEl: ".first .swiper-button-prev",
    },
});

// var swiper = new Swiper(".first", {
//     pagination: {
//     el: ".first .swiper-pagination",
//     },
// });

// first-mobile
var swiper = new Swiper(".first-mobile", {
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 0,
    loop: true,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },
    speed: 3000,
    pagination: {
        el: ".first-mobile .swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".first-mobile .swiper-button-next",
        prevEl: ".first-mobile .swiper-button-prev",
    },
});

// var swiper = new Swiper(".first-mobile", {
//     pagination: {
//     el: ".first-mobile .swiper-pagination",
//     },
// });

window.addEventListener('load', function() {
    var allElements = document.getElementsByTagName('*');
    Array.prototype.forEach.call(allElements, function(el) {
        var includePath = el.dataset.includePath;
        if (includePath) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    el.outerHTML = this.responseText;
                }
            };
            xhttp.open('GET', includePath, true);
            xhttp.send();
        }
    });
});  