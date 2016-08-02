<?php get_header(); ?>

<section class="two-column row no-max pad">
    <div class="small-12 columns">
        <div class="row">
            <!-- Primary Column -->
            <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
                <div class="primary">

                    <div class="leader">
                        <h1><?php wp_title(''); ?> Blog Posts</h1>
                    </div>

                    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                    <article class="post">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <h2><?php echo strip_tags( get_the_excerpt() ); ?></h2>
                        <ul class="post-meta no-bullet">
                            <li class="author">
                                <span class="avatar small">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
                                </span>
                                by <?php the_author_posts_link(); ?>
                            </li>
                            <li class="cat">in <?php the_category( ', ' ); ?></li>
                            <li class="date">in <?php the_time( get_option( 'date_format' ) ); ?></li>
                        </ul>

                        <?php if( get_the_post_thumbnail ): ?>
                        <div class="img-container">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </div>
                        <?php endif; ?>

                    </article>

                    <?php endwhile; else: ?>

                    <p><?php _e( 'Sorry, no pages were found...' ); ?></p>

                    <?php endif; ?>
                </div>
            </div>


            <!-- Secondary Column -->
            <div class="small-12 medium-4 medium-pull-8 columns">
                <div class="secondary">
                    <h2 class="module-heading">SIDEBAR</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
