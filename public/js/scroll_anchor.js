var anchors = [];
var currentAnchor = -1;
var isAnimating = false;

$(document).ready(function () {

    function updateAnchors() {
        anchors = [];
        $('.scroll-anchor').each(function (i, element) {
            anchors.push($(element).offset().top);
        });
    }

    document.addEventListener("mousewheel", this.mousewheel.bind(this), { passive: false });

    $('body').on('mousewheel', function (e) {
        e.preventDefault();
        e.stopPropagation();
        if (isAnimating) {
            return false;
        }
        isAnimating = true;
        // Increase or reset current anchor
        if (e.originalEvent.wheelDelta >= 0) {
            currentAnchor--;
        } else {
            currentAnchor++;
        }
        if (currentAnchor > (anchors.length - 1)
            || currentAnchor < 0) {
            currentAnchor = 0;
        }
        isAnimating = true;
        $('html, body').animate({
            scrollTop: parseInt(anchors[currentAnchor])
        }, 500, 'swing', function () {
            isAnimating = false;
        });
    });

    updateAnchors();

});