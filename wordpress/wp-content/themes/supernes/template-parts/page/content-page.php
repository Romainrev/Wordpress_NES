<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">

    </header><!-- .entry-header -->
    <div class="entry-content">
        <div class="header-page">
            <div class="container">
                <div class="row title-page">
                    <?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
                </div>
            </div>
        </div>
        <?php
        the_post_thumbnail();

        the_content();
        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
                'after'  => '</div>',
            )
        );
        ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
