<?php get_header(); ?>

    <main role="main" class="main-wrapper">
        <!-- section -->
        <section class="wrapper">

            <div class="main-content col-2">

                <!-- article -->
                <article id="post-404">

                    <h1><?php _e( 'Page not found', 'wildebeest_wp' ); ?></h1>
                    <h2>
                        <a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wildebeest_wp' ); ?></a>
                    </h2>

                </article>
                <!-- /article -->

            </div>

            <?php get_sidebar(); ?>

        </section>
        <!-- /section -->
    </main>

<?php get_footer(); ?>
