<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Art template
*/
include("header.php");
?>

        <main>
            <section class="even-flex">
                <div class="box desc-box no-border">
                    <h2 class="border-top"><?php the_field('title'); ?></h2>
                    <div class="text-box">
                        <?php the_field('description_text'); ?>
                    </div>
                </div>
                <div class="box slide-box no-border">
                    <p><strong>Click on the image to see the full image</strong></p>
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                        <?php 
                        if( have_rows('images') ):
                        $images = 0;
                            while ( have_rows('images') ) : the_row();
                            $images++;
                        ?>

                            <?php if($images == 1) : ?>
                            <div class="carousel-item active">
                            <?php else : ?>
                            <div class="carousel-item">
                            <?php endif; ?>
                                <a data-target="#modal-<?php echo $images ?>" data-toggle="modal"><img class="d-block w-100" src="<?php the_sub_field('image'); ?>" alt=""></a>
                                <div class="carousel-caption d-md-block">
                                    <h4><?php the_sub_field('artwork_name'); ?></h4>
                                    <p><strong>Price: <?php the_sub_field('price'); ?></strong> </p>
                                    <p><strong>Dimensions: <?php the_sub_field('dimensions'); ?></strong></p>
                                </div>
                            </div>
                        <?php
                            endwhile;
                        else :
                        endif;
                        ?>

                            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php 
        if( have_rows('images') ):
        $images = 0;
            while ( have_rows('images') ) : the_row();
            $images++;
        ?>

        <div class="modal fade" id="modal-<?php echo $images ?>" tabindex="-1" role="dialog" aria-labelledby="#modal-<?php echo $images ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php the_sub_field('artwork_name'); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="<?php the_sub_field('image'); ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <?php
            endwhile;
        else :
        endif;
        ?>
   
<?php get_footer(); ?>