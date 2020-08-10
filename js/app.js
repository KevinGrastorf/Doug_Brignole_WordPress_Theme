jQuery(window).on('load resize', function () {
    jQuery('.fullscreen').height(jQuery(window).height()).width(jQuery(window).width());
});

jQuery(window).on('scroll', function () {
    if (jQuery(window).scrollTop() >= jQuery(window).height()) {
        jQuery('.navdoug').addClass('fixed');
    } else {
        jQuery('.navdoug').removeClass('fixed');
    }
});

(function($) {

    var button = $("#cta-book");

    TweenLite.from(button, 1, {
        y: 50, 
        ease:Power3.easeOut
    })

    // function onStart() {
    //     console.log("animation started")
    // }

    // function onUpdate() {
    //     console.log("animation is in Progress")
    // }

    // function onComplete() {
    //     console.log("animation Completed")
    // }

})(jQuery)

function openBook() {
    window.location.href = "https://dougbrignole.com/product/the-physics-of-fitness/?preview_id=28&preview_nonce=64773abffe&_thumbnail_id=33&preview=true "
}

function changeColor(coll, color){

    for(var i=0, len=coll.length; i<len; i++)
    {
        coll[i].style["background-color"] = color;
    }
}

jQuery (".fm-cta").mouseenter(function() {
    $( this ).css( "color", "#E49224" );
});
jQuery (".fm-cta").mouseout(function() {
    $( this ).css( "color", "#202020" );
  });

 

jQuery(".fm-cta").click(function() {
    window.location.href = "#fm-tag";
});