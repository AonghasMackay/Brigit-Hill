<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

    <footer>
        <p>&copy; Copyright <?php echo date("Y"); ?> brigit-hill.co.uk</p>
        <p>Website by <a target="_blank" href="<?php the_field('website_author_link', 'option'); ?>">Aonghas MacKay</a></p>

        <!-- Social Media Links -->

        <!-- Stylesheets & scripts enqueued in the functions.php -->
    </footer>
	<?php wp_footer(); ?>
</body>
</html>