<div class="footer">
    <?php wp_nav_menu(array(
        'theme_location'  => 'main_nav',
        'menu_id'         => 'footer-menu',
        'menu_class'      => false,
        'container'       => false
    )); ?>
    <p>&reg; Copyright <?php echo date('Y'); ?></p>
</div>
<?php wp_footer(); ?>
</body>
</html>
