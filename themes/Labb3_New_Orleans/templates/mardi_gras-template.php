<?php /* Template Name: mardi_gras-template */ ?>

<?php get_header(); ?>
<main>
    <section class="mardi-gras">


        <div class="container pink">

            <?php if (have_rows("sections")) : ?>
                <?php while (have_rows("sections")) : the_row(); ?>
                    <?php if (get_row_layout() == "mardi_gras_page") : ?>
                        <div class="row">

                            <div class="col text-center box-text">

                                <h2><?php the_sub_field("mardi_gras_title"); ?></h2>
                            </div>
                            <div class="col text-center box-text">
                                <p class="mardi-text"><?php the_sub_field("mardi_gras_text1"); ?>
                                </p>
                                <?php the_sub_field("mardi_gras_icon"); ?><?php the_sub_field("mardi_gras_icon"); ?>
                            </div>
                            <div class="col text-center box-text1">
                                <p class="mardi-text"> <?php the_sub_field("mardi_gras_text2"); ?></p>
                                <?php the_sub_field("mardi_gras_icon"); ?><?php the_sub_field("mardi_gras_icon"); ?>
                            </div>

                            <div class="col text-center box-text">
                                <p class="mardi-text"><?php the_sub_field("mardi_gras_text3"); ?></p>
                                <?php the_sub_field("mardi_gras_icon"); ?><?php the_sub_field("mardi_gras_icon"); ?>
                            </div>

                            <div class="col text-center box-text2">
                                <p class="mardi-text"><?php the_sub_field("mardi_gras_text4"); ?> </p>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                        </div>
        </div>
    </section>
    <?php $image_slider = get_field("image_slider"); ?>
    <div class="container">
    <section class="slideshow" data-autoplay="2000" data-singleitem="false" data-items="4">
    
        
        <?php foreach ($image_slider as $sub_field) : ?>
            
            <div class="slide-wrapper-outer">
            <div class="slide-wrapper">
                    <div class="slide-img">
                        <img src ="<?php echo $sub_field['image1']; ?>" style="height:100%;">
                    </div>
            </div>
            </div>
            
    <?php endforeach; ?>
    
    </section>
    </div>


</main>
<?php get_footer(); ?>