$(document).ready(function () {
    // $("#home-nav").removeClass("active");
    // $("#dashboard-nav").addClass("active");
    var threshold = 50;
    var isShown = false;
    var navItem = document.getElementsByClassName("menu-item");
    var navLogo = document.getElementsByClassName("menu-logo");
    // var navLayer = document.getElementById("menu-layer");

    var isAnimationActive = !window.Util.isMobile();

    function showNavbar() {
        TweenLite.to(navLogo, 0.25, { top: -10 })
        TweenLite.to(navItem, 0.25, { padding: 20 })
        TweenLite.to(navItem, 0.25, { paddingBottom: 15 })
        $("#menu-layer").removeClass("hidden");
        isShown = true;
    }

    function hideNavbar() {
        TweenLite.to(navLogo, 0.25, { top: 10 })
        TweenLite.to(navItem, 0.25, { padding: 35 })
        $("#menu-layer").addClass("hidden");
        isShown = false;
    }

    if (isAnimationActive) {
        if (window.scrollY > threshold) {
            showNavbar();
        } else {
            hideNavbar();
        }

        window.addEventListener('scroll', function(e) {
            if (window.scrollY > threshold) {
                if (!isShown) {
                    showNavbar();
                }
            } else {
                if (isShown) {
                    hideNavbar();
                }
            }
        });
    } else {
        showNavbar();
    }

});
