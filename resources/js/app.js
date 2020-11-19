window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("demo-menu").classList.add("overlay-mobile-effect");
        document.getElementById("logo").style.width = "85px";
        document.getElementById("logo").style.height = "85px";
        document.getElementById("demo-menu").classList.add("shadow-lg");
        document.getElementById("drop-menu").style.backgroundColor = "#010E14";
    } else {
        document.getElementById("demo-menu").classList.remove("overlay-mobile-effect");
        document.getElementById("demo-menu").classList.remove("shadow-lg");
        document.getElementById("drop-menu").style.backgroundColor = "transparent";
        document.getElementById("logo").style.width = "175px";
        document.getElementById("logo").style.height = "175px";
    }
}

var btn = document.getElementById("open");
var closebtn = document.getElementById("closebtn");

btn.addEventListener("click", function() {
    document.getElementById("myNav").style.width = "100%";
});

closebtn.addEventListener("click", function() {
    document.getElementById("myNav").style.width = "0";
});