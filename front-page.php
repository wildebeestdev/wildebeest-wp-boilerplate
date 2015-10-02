<?php get_header(); ?>

    <main role="main" class="main-wrapper">

        <section class="wrapper">

            <div class="main-content">

            <h1><?php the_title(); ?></h1>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php the_content(); ?>

                <?php comments_template( '', true ); ?>

                <?php edit_post_link(); ?>

            </article>

        <?php endwhile; ?>

        <?php else: ?>

            <article>

                <h2><?php _e( 'Sorry, nothing to display.', 'wildebeest_wp' ); ?></h2>

            </article>

        <?php endif; ?>

            </div>

        </section>

    </main>

<?php get_footer(); ?>
