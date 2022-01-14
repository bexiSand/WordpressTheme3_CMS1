<?php /* Template Name: contact-template */ ?>
<?php get_header(); ?>

<main>
    <section class="white">
    <div class="container">
        
        <div class="contact_heading">
                <h1><?php the_title(); ?></h1>
</div>
        
    </div>
    </section>
    <section class="columns yellow text-center">
        <div class="container">
            <div class="row top">
                <?php if (have_rows("sections")) : ?>
                    <?php while (have_rows("sections")) : the_row(); ?>
                        <?php if (get_row_layout() == "our_team") : ?>
                            <div class="col-xs-12">
                                <h2><?php the_sub_field("heading_contact"); ?></h2>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                            </div>
            </div>
            <?php if (have_rows('contact')) : ?>
                <div class="row bottom1">

                    <?php while (have_rows('contact')) : the_row(); ?>
                        <?php $name = get_sub_field('contact_name');
                        $image = get_sub_field('contact_image');
                        $picture = $image['sizes']['large'];
                        $phone_text = get_sub_field('contact_phone_text');
                        $phone = get_sub_field('contact_phone');
                        $email = get_sub_field('contact_email'); ?>


                        

                            <div class="vit_ruta">
                                
                                    <h3><?php the_sub_field('contact_name'); ?> </h3>
                                    <div class="img_contact">
                                        <img src="<?php echo $picture ?>" />
                                    </div>
                                    <div class="contact-content">
                                    <p class="contact-text"><?php the_sub_field('contact_phone_text'); ?></p>
                                    <p class="contact-text"><?php the_sub_field('contact_phone'); ?></p>
                                    <p class="contact-text-email"><?php the_sub_field('contact_email'); ?></p>
                                
                                </div>
                            </div>
                            <?php endwhile ?>
                        </div>
                    <?php endif; ?>
                </div>
        
    </section>

    <section class="white">
        <div class="container">
        <?php if (have_rows("sections")) : ?>
                    <?php while (have_rows("sections")) : the_row(); ?>
                        <?php if (get_row_layout() == "contact_adress") : ?>
            <div class="contact_heading">
                <h2 class="contact-info"><?php the_sub_field('contact_title') ?><h2>
            </div>
       
            <div class="map-box">
<?php the_content();?>
            </div>
            <div class="adress-box">
<p class="contact-info"><?php the_sub_field('contact_adress1');?></p>
<p class="contact-info"><?php the_sub_field('contact_adress2');?></p>
<p class="contact-info"><?php the_sub_field('contact_phone1');?></p>
<p class="contact-info"><?php the_sub_field('contact_phone2');?></p> 
<p class="contact-info"><?php the_sub_field('contact_email1');?></p> 
<p class="contact-info"><?php the_sub_field('contact_email2');?></p> 
 </div>
        </div>
        <?php endif ?>
        <?php endwhile ?>
        <?php endif?>
    </section>

</main>
<?php get_footer(); ?>