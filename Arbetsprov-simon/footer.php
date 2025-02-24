<footer>

    <div class="container">
        <?php
        wp_nav_menu(
                array(
                    'theme_location' => 'footer-meny',
                    'menu_class' => 'footermeny'
                )
        );
        ?>
    </div>
    </footer>


<?php wp_footer();?>

</body>
</html>