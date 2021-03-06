<?php
/* Template Name: Blog */
get_header(); ?>
<p>Blog</p>

<ul>
<!-- Define our WP Query Parameters -->
<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
 
<!-- Start our WP Query-->
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
 
<!-- Display the Post Title with Hyperlink-->
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
 
<!-- Display the Post Excerpt-->
<li><?php the_excerpt(__('(more…)')); ?></li>
 
<!-- Repeat the process and reset once it hits the limit-->
<?php 
endwhile;
wp_reset_postdata();
?>
</ul>

<?php get_footer(); ?>