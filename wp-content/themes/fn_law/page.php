<?php get_header(); ?>

    <main role="main" class="main-wrapper">
        <!-- section -->
        <section class="wrapper">

            <div class="main-content col-2">

                <h1><?php the_title(); ?></h1>

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php the_content(); ?>

                    <?php comments_template( '', true ); // Remove if you don't want comments ?>

                    <?php edit_post_link(); ?>

                </article>
                <!-- /article -->

            <?php endwhile; ?>

            <?php else: ?>

                <!-- article -->
                <article>

                    <h2><?php _e( 'Sorry, nothing to display.', 'wildebeest_wp' ); ?></h2>

                </article>
                <!-- /article -->

            <?php endif; ?>

            </div>

            <?php get_sidebar(); ?>

        </section>
        <!-- /section -->
    </main>

<?php get_footer(); ?>
