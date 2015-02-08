function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 30,
            header = document.querySelector("header");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");
        } else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
            }
        }
    });
}
window.onload = init();


$(document).ready(function (){
    $("#top").click(function (){
        //$(this).animate(function(){
        $('html, body').animate({
            scrollTop: $("#scrolltotop").offset().top}, 500);
        //});
    });
});

$(document).ready(function (){
    $("#toptwo").click(function (){
        //$(this).animate(function(){
        $('html, body').animate({
            scrollTop: $("#scrolltotop").offset().top}, 500);
        //});
    });
});

$(document).ready(function (){
    $("#macros").click(function (){
        //$(this).animate(function(){
        $('html, body').animate({
            scrollTop: $("#scrolltomacros").offset().top-40}, 500);
        //});
    });
});

$(document).ready(function (){
    $("#plans").click(function (){
        //$(this).animate(function(){
        $('html, body').animate({
            scrollTop: $("#scrolltoplans").offset().top-70}, 500);
        //});
    });
});

$(document).ready(function (){
    $("#faq").click(function (){
        //$(this).animate(function(){
        $('html, body').animate({
            scrollTop: $("#scrolltofaq").offset().top-70}, 500);
        //});
    });
});

$(document).ready(function (){
    $("#topthree").click(function (){
        //$(this).animate(function(){
        $('html, body').animate({
            scrollTop: $("#scrolltotop").offset().top}, 500);
        //});
    });
});

$(document).ready(function (){
    $("#macrostwo").click(function (){
        //$(this).animate(function(){
        $('html, body').animate({
            scrollTop: $("#scrolltomacros").offset().top-40}, 500);
        //});
    });
});

$(document).ready(function (){
    $("#planstwo").click(function (){
        //$(this).animate(function(){
        $('html, body').animate({
            scrollTop: $("#scrolltoplans").offset().top-70}, 500);
        //});
    });
});

$(document).ready(function (){
    $("#signup").click(function (){
        //$(this).animate(function(){
        $('html, body').animate({
            scrollTop: $("#scrolltoplans").offset().top-70}, 500);
        //});
    });
});

$(document).ready(function (){
    $("#order").click(function (){
        //$(this).animate(function(){
        $('html, body').animate({
            scrollTop: $("#scrolltoplans").offset().top-70}, 500);
        //});
    });
});

$(document).ready(function (){
    $("#faqtwo").click(function (){
        //$(this).animate(function(){
        $('html, body').animate({
            scrollTop: $("#scrolltofaq").offset().top-70}, 500);
        //});
    });
});
