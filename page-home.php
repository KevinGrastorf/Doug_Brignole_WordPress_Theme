<?php
/* Template Name: New Home */
get_header(); ?>

<style>
    #masthead,
    .navdoug2 {
        display: none;
    }
</style>

<div class="parallax">
    <img class="logo" src="https://dougbrignole.com/wp-content/uploads/2019/10/logo.png" alt="">
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light navdoug">
    <a class="navbar-brand" href="#"><img class="logo-nav" src="https://dougbrignole.com/wp-content/uploads/2019/10/logo.png" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Story</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Brig-Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Brig-Manix</a>
                    <a class="dropdown-item" href="#">Brig-Nutrix</a>
                    <a class="dropdown-item" href="#">Brig-Sportex</a>
                    <a class="dropdown-item" href="#">Brig-Education</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Certification</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Checkout</a>
            </li>

        </ul>

    </div>
</nav>
<div class="main">
    <div class="front-page-top">
        <p class="default-text title pad"><strong>Doug Brignole</strong> is a veteran competitive bodybuilder,
            fitness (“biomechanics”) expert, author and public speaker.</p>
    </div>
</div>
<div class="parallax1">

</div>
<div class="main">
    <div class="front-page-top">
        <p class="default-text title pad">Throughout his competitive career—which spans over 40 years—he has won numerous bodybuilding titles, including <strong>1982 AAU Mr. America</strong> (medium tall division) and <strong>1986 AAU Mr. Universe</strong> (light heavy weight division).</p>
    </div>
</div>
<div class="parallax2"></div>
<div class="main">
    <div class="front-page-top">
        <p class="default-text title pad">He has authored numerous magazine articles and co-authored a university sociology book <strong><a class="link" href="https://www.amazon.com/Million-Dollar-Muscle-Sociological-Perspective/dp/160927850X/ref=sr_1_1?keywords=million+dollar+muscle&qid=1570682259&sr=8-1" target="_blank">“Million Dollar Muscle”</a></strong>. His most recent book—<strong><a class="link" href="https://www.goodreads.com/book/show/36433447-the-physics-of-fitness" target="_blank">“The&nbsp;Physics&nbsp;of&nbsp;Fitness”</a></strong>—is endorsed by nine PhD professors (i.e., exercise science, physics, neurobiology, biomedical engineering and paleoanthropology), plus three orthopedic surgeons.</p>
    </div>
</div>
<div class="parallax3"></div>
<div class="main">
    <p class="default-text title pad2">He has conducted seminars throughout the US, as well as abroad, including Japan, Mexico, Chile, Brazil and Norway.</p>
</div>

<script>
    jQuery(window).on('load resize', function() {
        jQuery('.fullscreen').height(jQuery(window).height()).width(jQuery(window).width());
    });

    jQuery(window).on('scroll', function() {
        if (jQuery(window).scrollTop() >= jQuery(window).height()) {
            jQuery('.navdoug').addClass('fixed');
        } else {
            jQuery('.navdoug').removeClass('fixed');
        }
    });
</script>

<?php get_footer(); ?>