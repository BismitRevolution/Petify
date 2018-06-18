$(document).ready(function () {
    var pet = document.getElementsByClassName("pet");

    for (var i = 0, item; item = pet[i]; i++) {
        if (!item.classList.contains("animated")) {
            item.style.visibility = "visible";
            item.className += " animated fadeIn";
        }
    }

});
