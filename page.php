<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>

    <main>
        <section class="justify-content-center d-flex">
            <div class="box 
                <?php if(get_field('remove_box_border')) : ?> no-border <?php endif;?>
                <?php if(get_field('text_mid_align')) : ?> notice <?php endif; ?>">

                <?php the_field('page_content'); ?>
                
            </div>
        </section>
    </main>

<?php get_footer(); ?>
