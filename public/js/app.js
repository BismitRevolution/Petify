$(document).ready(function () {

    // Parallax Effect
    Parallax = {
        parallaxEffect : function (item, basePosition) {
            var distance = (window.scrollY - basePosition)/3;
            // console.log(window.scrollY);
            TweenLite.to(item, 0.01, { backgroundPosition: '0px '+ distance + 'px' });
        }
    };

    console.log("app loaded");
});
