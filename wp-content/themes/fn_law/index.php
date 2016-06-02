<?php get_header(); ?>

    <main role="main" class="main-wrapper">
        <!-- section -->
        <section class="wrapper">

            <div class="main-content col-2">

                <h1><?php _e( 'Latest Posts', 'wildebeest_wp' ); ?></h1>

                <?php get_template_part('loop'); ?>

                <?php get_template_part('pagination'); ?>

            </div>

            <?php get_sidebar(); ?>

        </section>
        <!-- /section -->
    </main>

<?php get_footer(); ?>
