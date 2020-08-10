var controller = new ScrollMagic.Controller();

$(function () { // wait for document ready
    // build tween
    var tween = new TimelineMax ()
        .add([
            TweenMax.to(".font-page-top-2 .doug-then", 1, {backgroundPosition: "-40% 0", ease: Linear.easeNone}),
            TweenMax.to(".font-page-top-2 .doug-now", 1, {backgroundPosition: "-500% 0", ease: Linear.easeNone}),
        ]);

    // build scene
    var scene = new ScrollMagic.Scene({triggerElement: ".font-page-top-2", duration: 2000, offset: 450})
                    .setTween(tween)
                    .setPin(".font-page-top-2")
                    .addIndicators() // add indicators (requires plugin)
                    .addTo(controller);
});


// window.onload=function() {
// var about = document.getElementsByClassName('about');

// document.getElementById('champion').addEventListener('mouseover', function() {
//     changeColor(about, "blue");
// });

// document.getElementById('champion').addEventListener('mouseout', function() {
//     changeColor(about, "red");
// });

// }

// function changeColor(coll, color){

//     for(var i=0, len=coll.length; i<len; i++)
//     {
//         coll[i].style["background-color"] = color;
//     }
// }