<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Alera
 */

get_header();
?>

    <section class="content-area" id="main-content">

        <div class="container is-widescreen">

            <div class="columns is-variable is-8">

                <div class="column is-9">

                    <main class="site-content">

                    <?php
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', get_post_type() );

                            the_post_navigation();

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile;
                    ?>

                    </main>

                </div>

                <div class="column is-3">
                    <?php get_sidebar(); ?>
                </div>

            </div>

        </div>

    </section>

<?php get_footer(); ?>
