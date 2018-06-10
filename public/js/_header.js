$(document).ready(function () {
    // $("#home-nav").removeClass("active");
    // $("#dashboard-nav").addClass("active");
    var threshold = 50;
    var isShown = false;
    var navItem = document.getElementsByClassName("menu-item");
    var navLogo = document.getElementsByClassName("menu-logo");
    // var navLayer = document.getElementById("menu-layer");

    if (window.scrollY > threshold) {
        isShown = true;
        TweenLite.to(navLogo, 0.5, { top: -10 })

        TweenLite.to(navItem, 0.5, { padding: 20 })
        TweenLite.to(navItem, 0.5, { paddingBottom: 15 })
        $("#menu-layer").removeClass("hidden");
    } else {
        isShown = false;
        TweenLite.to(navLogo, 0.5, { top: 10 })

        TweenLite.to(navItem, 0.5, { padding: 35 })
        $("#menu-layer").addClass("hidden");
    }

    window.addEventListener('scroll', function(e) {
        if (window.scrollY > threshold) {
            if (!isShown) {
                TweenLite.to(navLogo, 0.5, { top: -10 })

                TweenLite.to(navItem, 0.5, { padding: 20 })
                TweenLite.to(navItem, 0.5, { paddingBottom: 15 })
                isShown = !isShown;
                $("#menu-layer").removeClass("hidden");
            }
        } else {
            if (isShown) {
                TweenLite.to(navLogo, 0.5, { top: 10 })

                TweenLite.to(navItem, 0.5, { padding: 35 })
                isShown = !isShown;
                $("#menu-layer").addClass("hidden");
            }
        }
    });
});
