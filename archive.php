<?php get_header(); ?>            
<?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <?php the_post_thumbnail( 'bones-thumb-300' ); ?>
    <?php the_excerpt(); ?>
    </article>
<?php endwhile; ?>
<?php bones_page_navi(); ?>
<?php get_footer(); ?>