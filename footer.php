        <footer>
            <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
        </footer>
    </div> <!-- Container closing tag -->
<?php wp_nav_menu(['theme_location' => 'secondary']); ?>
    <?php wp_footer(); ?>
    </body>
</html>