$(document).ready(function () {
    const hashMap = ['#slider', '#about', '#advantages', '#news'];
    let preventScrollHandling = false;
    switchAdvantageByCode(0);

    window.addEventListener('mousewheel', function (e) {
        if (window.innerWidth < 769) {
            return;
        }

        e.preventDefault();
        if (window.preventScrollHandling) {
            return;
        }

        window.preventScrollHandling = true;

        const currHashIndex = hashMap.indexOf(window.location.hash);
        const newHashIndex = currHashIndex + (e.wheelDelta > 0 || e.detail < 0 ? -1 : 1);

        if (newHashIndex > hashMap.length - 1 || newHashIndex < 0) {
            window.preventScrollHandling = false;
            return;
        }

        const newHash = hashMap[newHashIndex];
        scrollToHash(newHash);
    }, {passive: false});


    $('.navigation a').click(function (e) {
        scrollToHash($(e.currentTarget).attr('href'));
    });

    $('#advantages .menu__item').click(function(e) {
        const target = $(e.target);
        if (target.hasClass('menu__item_active')) {
            return;
        }
        switchAdvantageByCode(target.data('advantage-code'));
    });

    $('#events .menu__item').click(function (e) {
        const target = $(e.target);
        if (target.hasClass('menu__item_active')) {
            return;
        }

        switchEventByCode(target.data('event-code'));
    });

    $('.controls__arrows').click(function (e) {
        const $active = $('.advantage__menu').find('.menu__item_active');
        const $requiredItem = $(e.target).data('role') === 'next' ? $active.next() : $active.prev();
        if (!$requiredItem.length) {
            return;
        }
        switchAdvantageByCode($requiredItem.data('advantage-code'));
    });

    function switchAdvantageByCode(code) {
        const classActive = 'menu__item_active';
        $('.advantage__menu').find('.' + classActive).removeClass(classActive);
        $('[data-advantage-code="' + code + '"]').addClass(classActive);

        const fadeTime = 500;
        const fadingElements = $("[data-is-fading]");
        fadingElements.fadeOut(fadeTime);
        setTimeout(function() {
            const dataContainer = $('[data-advantages] [data-advantage-code="' + code + '"]');
            if (!dataContainer.length) {
                return;
            }

            $('.advantage__header').text(dataContainer.find('h3').text());
            $('.advantage__text').text(dataContainer.find('p').text());
            $('.advantage__background').attr('src', dataContainer.find('span[data-background-src]').text());
            $('.advantage__button').attr('href', dataContainer.find('span[data-button-href]').text());
        }, fadeTime)
        fadingElements.fadeIn(fadeTime);
    }

    function switchEventByCode(code) {
        const classActive = 'menu__item_active';
        $('.advantage__menu').find('.' + classActive).removeClass(classActive);
        $('[data-event-code="' + code + '"]').addClass(classActive);

        const fadeTime = 500;
        const fadingElements = $("[data-is-fading]");
        fadingElements.fadeOut(fadeTime);
        setTimeout(function() {
            const dataContainer = $('[data-events] [data-event-code="' + code + '"]');
            if (!dataContainer.length) {
                return;
            }

            $('.advantage__header').text(dataContainer.find('h3').text());
            $('.advantage__text').text(dataContainer.find('p').text());
            $('.advantage__background').attr('src', dataContainer.find('span[data-background-src]').text());
            $('.advantage__button').attr('href', dataContainer.find('span[data-button-href]').text());
        }, fadeTime)
        fadingElements.fadeIn(fadeTime);
    }

    function scrollToHash(hash) {
        const element = $(`[data-hash="${hash.slice(1)}"]`)[0];
        if (!element) {
            window.preventScrollHandling = false;
            return;
        }
        const anchorTop = element.getBoundingClientRect().top;
        const isFirstSection = hashMap.indexOf(hash) === 0;
        const scrollPosition = window.pageYOffset + anchorTop - (isFirstSection ? $('header').outerHeight() : 0);

        $("html, body").stop().animate({scrollTop: scrollPosition}, 1000, 'swing', function () {
            window.location.hash = hash;
            window.preventScrollHandling = false;
        });
    }
});