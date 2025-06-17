<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alera
 */

?>

    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="columns is-variable is-8">
                <div class="column is-3">
                    <?php if ( is_active_sidebar( 'footer-1 ' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    <?php endif; ?>
                </div>
                <div class="column is-3">
                    <?php if ( is_active_sidebar( 'footer-2 ' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    <?php endif; ?>
                </div>
                <div class="column is-3">
                    <?php if ( is_active_sidebar( 'footer-3 ' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    <?php endif; ?>
                </div>
                <div class="column is-3">
		            <?php if ( is_active_sidebar( 'footer-4 ' ) ) : ?>
			            <?php dynamic_sidebar( 'footer-4' ); ?>
		            <?php endif; ?>
                </div>
            </div>
        </div>
        <?php $get_copyright_text = get_theme_mod('copyright_text', esc_html__('&copy; 2020 - All rights reserved. Theme by Mobeen Abdullah', 'alera')); ?>
        <?php if (!empty($get_copyright_text)) : ?>
        <div class="site-info has-text-align-center">
            <?php echo esc_html($get_copyright_text); ?>
        </div>
        <?php endif; ?>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
