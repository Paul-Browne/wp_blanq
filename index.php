<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">                
        <?php the_content(); ?>
    </article>
<?php endwhile; ?>
<?php bones_page_navi(); ?>
<?php get_footer(); ?>