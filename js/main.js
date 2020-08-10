var controller = new ScrollMagic.Controller();

$('.contest-photo').each(function() {
    console.log(this);
    var dougScene = new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.7
    })
    .setClassToggle(this, 'fade-in')
    .addTo(controller)

});