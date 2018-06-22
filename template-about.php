<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: About template
*/
include("header.php");
?>

        <main id="about">
            <section class="justify-content-center d-flex">
                <div class="box">
                    <h1 class="border-top"><?php the_field('about_title'); ?></h1>
                    <div class="content-box">
                        <div class="text-box">
                            <?php the_field('about_text'); ?>
                        </div>
                        <div class="image-box">
                            <img src="<?php the_field('about_image'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </main>

   
<?php get_footer(); ?>