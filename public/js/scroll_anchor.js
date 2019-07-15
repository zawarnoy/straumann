$(document).ready(function () {

    return;

    let delay = false;

    window.addEventListener('mousewheel', function (e) {
        e.preventDefault();
        if (delay) return;

        delay = true;

        var wd = event.originalEvent.wheelDelta || -event.originalEvent.detail;

        let a = $('.scroll-anchor');

        if (wd < 0) {
            for (let i = 0; i < a.length; i++) {
                let t = a[i].getClientRects()[0].top;
                if (t >= 40) break;
            }
        } else {
            for (let i = a.length - 1; i >= 0; i--) {
                let t = a[i].getClientRects()[0].top;
                if (t < -20) break;
            }
        }

        if (i >= 0 && i < a.length) {
            $('html,body').animate({
                scrollTop: a[i].offsetTop
            }, 200, function () {
                delay = false;
            });
        } else {
            delay = false;
        }

    }, {})

});