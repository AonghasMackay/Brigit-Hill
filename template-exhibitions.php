<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Exhibitions template
*/
include("header.php");
?>

        <main>
            <section class="justify-content-center d-flex">
                <div class="box">
                    <h1 class="border-top">Forthcoming Exhibitions</h1>
                    <div>
                    <?php the_field('upcoming_textbox'); ?>
                    </div>
                    <br />
                    <h1 class="border-top">Past Exhibitions</h1>
                    <div>
                    <?php the_field('past_textbox'); ?>
                    </div>
                </div>
            </section>
            <section class="justify-content-center d-flex">
                <div class="box notice map">
                    <h1 class="border-top">The Old Fire Station Gallery</h1>
                    <div class='embed-container'>
                        <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1754.8215046869334!2d-0.9081339450982011!3d51.53720198351715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48768fa3f071366b%3A0x3d208d7f2783d206!2sMarket+Pl%2C+Henley-on-Thames+RG9+2AG!5e0!3m2!1sen!2suk!4v1528289772028' width='800' height='600' frameborder='0' style='border:0' allowfullscreen></iframe>
                    </div>
                </div>
            </section>
        </main>

   
<?php get_footer(); ?>