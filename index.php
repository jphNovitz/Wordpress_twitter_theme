<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage DecobootsTheme
 * @since Decoboots Theme 1.0.0
 */
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while (have_posts()) :
                the_post();
                ?>
                <div class="jumbotron">
                    <h1><?php echo get_the_title(); ?> est la page d'index</h1>
                    <p class="lead">
                        <?php
                        echo get_the_content();
                        ?>
                    </p>
                </div>
                <?php

            endwhile; ?>

        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_footer(); ?>