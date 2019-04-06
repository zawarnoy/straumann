$('body').swipe({
    swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
        //console.log(event.target.className);
        var cl = event.target.className;


        if (cl == 'title title_promo' || cl == 'inn inn_promo' || cl == 'text_promo' || cl == 'btn btn-green btn-promo' || cl == 'ov') {

        } else {
            if ($(window).width() < 1180) {
                if (direction == 'left' || direction == 'right') {
                    $("nav ul").toggle("slide", {direction: "right"}, 400);
                    if ($('body').hasClass('mo')) $('body').removeClass('mo'); else $('body').addClass('mo');
                }
            }
        }
    }
});

$(document).ready(function () {

    //$(window).on( "swipeleft", function( event ) { alert('asd'); } )

    $('.slider__promo').slick({arrows: false, dots: true});

    $('.open__modal').fancybox();

    $('.i_phone').mask('+7 (999) 999-99-99');


    $("nav .menu-bar").on('click', function (e) {
        e.preventDefault();
        if ($(this).hasClass('act')) {
            $(this).removeClass('act');
            $('body,html').removeClass('hs');
        } else {
            $(this).addClass('act');
            $('body,html').addClass('hs');
        }
        $("nav ul").toggle("slide", {direction: "right"}, 400);
    });

    // $("nav .pull_m").on('click', function (e) {
    //     e.preventDefault();
    //     $(this).hide();
    //     $('body').removeClass('mo');
    //     if ($(this).hasClass('act')) {
    //         $(this).removeClass('act');
    //         $('body,html').removeClass('hs');
    //     } else {
    //         $(this).addClass('act');
    //         $('body,html').addClass('hs');
    //     }
    //     $("nav ul").toggle("slide", {direction: "right"}, 400);
    // });


    $("#contacts .tab").first().show();

    var switchTab = function (tab) {
        $(".tab").hide();
        $("." + $(tab).attr('data-tab')).show();
    };

    switchTab($('.filters li.active'));

    $("#contacts .filters li").on('click', function (e) {
        e.preventDefault();
        $(this).siblings('li').removeClass('active');
        $(this).addClass('active');
        switchTab(this);
    });

    var nav = $('header');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            nav.addClass("f-nav");
        } else {
            nav.removeClass("f-nav");
        }
    });

    var wow = new WOW({
        mobile: false
    });
    wow.init();

    $(".fancybox-close-small").on('click', function (e) {
        e.preventDefault();
        $.fancybox.close(true);
    });

});



// GOOGLE MAPS
//
// var locations = [['<p>Адрес</p>', 55.769121, 37.470368, 'img/map.png'],];
//
//
// var map = new google.maps.Map(document.getElementById('map'), {
//     zoom: 15,
//     center: new google.maps.LatLng(55.769121, 37.470368),
//     mapTypeId: google.maps.MapTypeId.ROADMAP
// });
//
// var infowindow = new google.maps.InfoWindow();
// var marker, i;
//
// for (i = 0; i < locations.length; i++) {
//     marker = new google.maps.Marker({
//         position: new google.maps.LatLng(locations[i][1], locations[i][2]),
//         map: map,
//         icon: {
//             url: locations[i][3],
//             scaledSize: new google.maps.Size(32, 32)
//         }
//     });
//     google.maps.event.addListener(marker, 'click', (function (marker, i) {
//         return function () {
//             infowindow.setContent(locations[i][0]);
//             infowindow.open(map, marker);
//         }
//     })(marker, i));
// }


function closeModal() {
    $.fancybox.close(true);
}


function sendForm(form_id, res_div) {
    var msg = $('#' + form_id).serialize();


    $.ajax({
        type: 'POST',
        url: 'send.php',
        data: msg,
        success: function (data) {

            $.fancybox.close(true);
            $('#thanks').fancybox().trigger('click');
            setTimeout(closeModal, 5000);

            $(".fancybox-close-small").on('click', function (e) {
                e.preventDefault();
                $.fancybox.close(true);
            });

            jQuery("#" + form_id).trigger("reset");
        },
        error: function (xhr, str) {

            $.fancybox.close(true);
            $('#thanks').fancybox().trigger('click');
            setTimeout(closeModal, 5000);

            $(".fancybox-close-small").on('click', function (e) {
                e.preventDefault();
                $.fancybox.close(true);
            });

            jQuery("#" + form_id).trigger("reset");
        }
    });
}

$(document).ready(function() {

    var x, i, j, selElmnt, a, b, c;
    /* Look for any elements with the class "custom-select": */
    x = document.getElementsByClassName("custom-select");
    for (i = 0; i < x.length; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        /* For each element, create a new DIV that will act as the selected item: */
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /* For each element, create a new DIV that will contain the option list: */
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < selElmnt.length; j++) {
            /* For each option in the original select element,
            create a new DIV that will act as an option item: */
            c = document.createElement("DIV");
            c.setAttribute('data-id', selElmnt.options[j].getAttribute('value'));
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /* When an item is clicked, update the original select box,
                and the selected item: */
                var y, i, k, s, h;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                h = this.parentNode.previousSibling;
                for (i = 0; i < s.length; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        for (k = 0; k < y.length; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /* When the select box is clicked, close any other select boxes,
            and open/close the current select box: */
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(elmnt) {
        /* A function that will close all select boxes in the document,
        except the current select box: */
        var x, y, i, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        for (i = 0; i < y.length; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < x.length; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }

    /* If the user clicks anywhere outside the select box,
    then close all select boxes: */
    document.addEventListener("click", closeAllSelect);


    $('.select-city .select-items div').on('click', function (e) {

        e.preventDefault();

        let $listClinics = $('.list__clinics'),
            $stub = $('.stub');

        $stub.fadeIn(400);

        $.get('/cities/clinics', { 'id' : $(this).attr('data-id')} ,function (data) {
            $listClinics.html(data);
            $stub.fadeOut(400);
        });

    });
});