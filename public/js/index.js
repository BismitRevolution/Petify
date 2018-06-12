$(document).ready(function () {
    $("#topic-chooser").height($(".chooser").width());
    $(".chooser").each(function() {
        $(this).height($(this).width() - 10);
    });

    $("#parallax-top .title").first().addClass("animated fadeIn");
    $("#parallax-top .subtitle").first().addClass("animated zoomIn");

    var chooser = document.getElementsByClassName("chooser");

    function setHover(item, index) {
        var img = item.childNodes[1].childNodes[1];
        item.onmouseover = function () {
            if (window.innerWidth < 576) {
                TweenLite.to(item, 0.25, { padding: 30 });
            } else {
                TweenLite.to(item, 0.25, { padding: 60 });
            }
            // TweenLite.to(item, 0.25, { backgroundColor: 'rgba(var(--color-light-rgb), 0.1)' });
            // TweenLite.to(img, 0.25, { filter: 'invert(100%)' });
        };

        item.onmouseleave = function () {
            if (window.innerWidth < 576) {
                TweenLite.to(item, 0.25, { padding: 50 });
            } else {
                TweenLite.to(item, 0.25, { padding: 80 });
            }
            // TweenLite.to(item, 0.25, { backgroundColor: 'rgba(var(--color-light-rgb), 0' });
            // TweenLite.to(img, 0.25, { filter: 'none' });
        };
    }

    Array.from(chooser).forEach(setHover);

    var parallaxBg = document.getElementById("parallax-top");
    var base = 0;

    window.onscroll = function () {
        window.Parallax.parallaxEffect(parallaxBg, base);
    };
});
