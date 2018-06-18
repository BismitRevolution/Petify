$(document).ready(function () {
    window.isAnimationActive = false;
    window.showNavbar();

    console.log("pet loaded");

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

    $("#pet-data > div:first").height($("#pet-pic").width());
    console.log($("#pet-pic").height());

});
