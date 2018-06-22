<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Homepage template
*/
include("header.php");
?>

        <main>
            <section class="justify-content-center d-flex">
                <div class="box notice">
                    <h1 class="margin-bot"><?php the_field('homepage_title'); ?></h1>
                    <h2><?php the_field('exhibition_dates'); ?></h2>
                    <h2>at</h2>
                    <h2 class="margin-bot"><?php the_field('exhibition_location'); ?></h2>
                    <h3><?php the_field('homepage_subtext'); ?></h3>
                </div>
            </section>
        </main>

   
<?php get_footer(); ?>