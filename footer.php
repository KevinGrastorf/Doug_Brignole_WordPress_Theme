<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DougBrignole
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<p class="footer-text" ><u>Contact</u> <a href="mailto:admin@dougbrignole.com">admin@dougbrignole.com</a></p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/jquery.js"><\/script>')
</script>
<script src="<?php bloginfo('template_directory'); ?>/js/app.js" async defer></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenLite.min.js" integrity="sha256-VV47uJSoHZUeiBcCs3FcBOQLMn++yeG/zqZvaUkvGZM=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/animation.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/lightbox-plus-jquery.min.js"></script>
</body>
</html>
