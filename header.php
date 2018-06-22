<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

	<head>
		<?php wp_head(); ?>
		
		<title><?php wp_title(''); ?></title>

		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">

		<!-- Stylesheets & scripts enqueued in the functions.php -->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

    <?php if(get_field('tile_background') || is_404()) : ?>

    <body class="tiles">

    <?php else : ?>

    <body style="background-image: url('<?php the_field('page_background'); ?>')">

    <?php endif; ?>

        <header>
            <div class="menu-bar">
                <a data-toggle="collapse" href="#menu" aria-expanded="false" aria-controls="#menu" class="collapse-control">
                    <div class="hamburger">
                        <img src="<?php bloginfo('template_directory'); ?>/images/hamburger.png">
                    </div>
                </a>

                <div class="collapse" id="menu">
                    <nav>
                        <?php wp_nav_menu( array( 'container' => false, 'sort_column' => 'menu_order', 'menu_class' => 'ul_menu', 'menu'  => 'Main Menu', 'walker' => new WP_Bootstrap_Navwalker() ) ); ?>
                    </nav>
                </div>
            </div>

            <div class="header-text">
                <h2><?php the_field('site_title', 'option'); ?></h2>
                <h2><?php the_field('site_tagline', 'option'); ?></h2>
            </div>
        </header>