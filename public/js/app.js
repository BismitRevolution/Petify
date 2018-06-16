$(document).ready(function () {
    $(document).foundation();

    // Parallax Effect
    Parallax = {
        parallaxEffect : function (item, basePosition) {
            var distance = (window.scrollY - basePosition)/3;
            // console.log(window.scrollY);
            TweenLite.to(item, 0.01, { backgroundPosition: '0px '+ distance + 'px' });
        }
    };

    Util = {
        isMobile : function () {
            return (window.innerWidth < 576);
        },

        isSmall : function () {
            return (window.innerWidth >= 576 && window.innerWidth < 768);
        },

        isMedium : function () {
            return (window.innerWidth >= 768 && window.innerWidth < 992);
        },

        isLarge : function () {
            return (window.innerWidth >= 992 && window.innerWidth < 1200);
        },

        isExtraLarge : function () {
            return (window.innerWidth >= 1200);
        },

        isShown : function (element) {
            var rect = element.getBoundingClientRect();
            var top = rect.top;
            var bottom = rect.bottom;
            return (top >= 0 && bottom <= window.innerHeight);
        }
    }

    var trailer = document.getElementsByClassName("panel-image");

    function zoomHover(item) {
        item.onmouseover = function () {
            TweenLite.to(item, 0.25, { backgroundSize: '+=25%' });
            // TweenLite.fromTo(item, 0.25, { backgroundSize: 'auto 100%' }, { backgroundSize: 'auto 120%' });
        }

        item.onmouseleave = function () {
            TweenLite.to(item, 0.25, { backgroundSize: '-=25%' });
            // TweenLite.fromTo(item, 0.25, { backgroundSize: 'auto 120%' }, { backgroundSize: 'auto 100%' });
        }
    }

    Array.from(trailer).forEach(zoomHover);

    var dropdownButton = document.getElementsByClassName("dropdown-button");

    function setDropdownWidth(item) {
        item.onclick = function (e) {
            item.nextElementSibling.style.width = item.offsetWidth + "px";
        }
    }

    Array.from(dropdownButton).forEach(setDropdownWidth);

    var dropdownItem = document.getElementsByClassName("dropdown-item");

    function setDropdownClick(item) {
        item.onclick = function (e) {
            item.parentNode.parentNode.previousElementSibling.innerHTML = item.innerHTML;
            item.parentNode.previousElementSibling.value = item.innerHTML;
            // document.getElementById(item.parentNode.parentNode.getAttribute("data-target")).value = item.innerHTML;
        }
    }

    Array.from(dropdownItem).forEach(setDropdownClick);

    console.log("app loaded");
});
