<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>
    </article>
<?php endwhile; ?>
<?php bones_page_navi(); ?>
<?php get_footer(); ?>