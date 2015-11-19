<?php get_header(); ?>        
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'post-formats/format', get_post_format() ); ?>
<?php endwhile; ?>
<?php get_footer(); ?>