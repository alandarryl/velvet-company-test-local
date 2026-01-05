<?php
/**
 * The template for displaying the footer
 *
 * @package velvet-theme
 */
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="footer-widgets">
            <!-- Colonne 1 : Politique de confidentialité -->
            <div class="footer-column">
                <a href="<?php echo esc_url( home_url('/politique-de-confidentialite') ); ?>">Politique de confidentialité</a>
            </div>

            <!-- Colonne 2 : Copyright -->
            <div class="footer-column">
                &copy; <?php echo date('Y'); ?> velvetcompany
            </div>

            <!-- Colonne 3 : Instagram -->
            <div class="footer-column">
                <a href="https://instagram.com/COMPTE_CLIENT" target="_blank" rel="noopener">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-logo.png" alt="Instagram Velvet Company" class="instagram-logo">
                </a>
            </div>
        </div><!-- .footer-widgets -->
    </footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
