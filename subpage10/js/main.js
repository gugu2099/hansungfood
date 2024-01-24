
var swiper = new Swiper(".first", {
    slidesPerView: 5,
    // spaceBetween: 10,
    // slidesPerGroup : 2,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".first .swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".first .swiper-button-next",
        prevEl: ".first .swiper-button-prev",
    },
});

var swiper = new Swiper(".second", {
    slidesPerView: 1,
    // spaceBetween: 10,
    // slidesPerGroup : 2,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".second .swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".second .swiper-button-next",
        prevEl: ".second .swiper-button-prev",
    },
});

var swiper = new Swiper(".third", {
    slidesPerView: 1,
    // spaceBetween: 10,
    // slidesPerGroup : 2,
    centeredSlides: true,
    loop: true,
    // autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false,
    // }
});




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
