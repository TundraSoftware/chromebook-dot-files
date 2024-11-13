
        <footer id="footer-widget-area" class="footer-widget-area">
            <?php if ( is_active_sidebar( 'footer-widget' ) ) : ?>
                <?php dynamic_sidebar( 'footer-widget' ); ?>
            <?php endif; ?>                
        </footer>

        <?php wp_footer();?>
	</body>
</html>
