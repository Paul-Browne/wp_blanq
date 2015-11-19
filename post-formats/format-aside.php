<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
<header class="article-header entry-header">
<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
<p class="byline entry-meta vcard">
<?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
'<span class="by">'.__( 'by', 'bonestheme' ).'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
); ?>
</p>
</header>
<section class="entry-content" itemprop="articleBody">
<?php
the_content();
wp_link_pages( array(
'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
'after'       => '</div>',
'link_before' => '<span>',
'link_after'  => '</span>',
) ); ?>
</section>
<footer class="article-footer entry-footer">
<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
</footer>
</article>
