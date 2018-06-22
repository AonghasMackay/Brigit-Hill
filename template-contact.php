<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Contact template
*/
include("header.php");
?>

        <main id="contact">
            <section class="justify-content-center d-flex">
                <div class="box">
                    <h1 class="border-top"><?php the_field('contact_title'); ?></h1>
                    <div class="content-box">
                        <p class="semibold pale"><?php the_field('contact_text'); ?></p>
                        <div class="text-box"><strong>Email: </strong><a href="mailto:<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a></div>
                        <div class="text-box"><strong>Phone: </strong><span><?php the_field('mobile', 'option'); ?></span></div>
                    </div>
                </div>
            </section>
        </main>

   
<?php get_footer(); ?>