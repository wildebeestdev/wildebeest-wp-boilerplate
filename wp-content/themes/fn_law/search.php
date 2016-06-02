<?php get_header(); ?>

    <main role="main" class="main-wrapper">
        <!-- section -->
        <section class="wrapper">

            <div class="main-content col-2">

                <h1><?php echo sprintf( __( '%s Search Results for ', 'wildebeest_wp' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

                <?php get_template_part('loop'); ?>

                <?php get_template_part('pagination'); ?>

            </div>

            <?php get_sidebar(); ?>

        </section>
        <!-- /section -->
    </main>

<?php get_footer(); ?>
