<?php
/*
Template Name: Page
*/
?>

<?php get_header(); ?>
<h1>
рубрика
</h1>
<div>
<?php
 $args = array( 'post_type' => '');
 $loop = new WP_Query( $args );
 while ( $loop->have_posts() ) : $loop->the_post();
    the_title();
    echo ' type ' . get_post_type() . '</br>';
 endwhile;
?>
</div>
<?php get_footer(); ?>