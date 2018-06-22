<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Exhibition template
*/
include("header.php");
?>

        <main id="exhibition">
            <section class="ex-flex">
                <a class="box art-box" href="<?php the_field('watercolour_link'); ?>" style="background-image: url('<?php the_field('watercolour_image'); ?>');">
                    <h2 class="title-block">Watercolours</h2>
                </a>
                <a class="box art-box" href="<?php the_field('prints_link'); ?>" style="background-image: url('<?php the_field('prints_image'); ?>');">
                    <h2 class="title-block">Prints</h2>
                </a>
                <a class="box art-box" href="<?php the_field('oil_link'); ?>" style="background-image: url('<?php the_field('oil_image'); ?>');">
                    <h2 class="title-block">Oils</h2>
                </a>
            </section>
        </main>

   
<?php get_footer(); ?>