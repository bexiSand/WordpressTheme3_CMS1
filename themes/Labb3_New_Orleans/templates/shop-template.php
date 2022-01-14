<?php /* Template Name: Shop-template */ ?>
<?php /* Martin Healu */ ?>
<?php get_header(); ?>

<main>
        <section class="standard">
            <div class="hero-image" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);">
                <div class="a">
                    The Big Easy Menu
                </div>
            </div>
            <p><b><a href="shop.html" target="_blank"><h4><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'menu' ) ) ); 
                                                        ?>"><?php esc_html_e( 'Click Here For Prices' ); ?></h4></a></b></p>
            <div class="responsive">
              <div class="gallery">
                  <img src="<?php the_field('slide_one'); ?>">
                <div class="desc"><?php the_field('sub_one'); ?></div>
              </div>
            </div>


            <div class="responsive">
              <div class="gallery">
                  <img src="<?php the_field('slide_two'); ?>">
                <div class="desc"><?php the_field('sub_two'); ?></div>
              </div>
            </div>

            <div class="responsive">
              <div class="gallery">
                  <img src="<?php the_field('slide_three'); ?>">
                <div class="desc"><?php the_field('sub_three'); ?></div>
              </div>
            </div>

            <div class="responsive">
              <div class="gallery">
                  <img src="<?php the_field('slide_four'); ?>">
                <div class="desc"><?php the_field('sub_four'); ?></div>
              </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <img src="<?php the_field('slide_five'); ?>">
                  <div class="desc"><?php the_field('sub_five'); ?></div>
                </div>
              </div>

            <div class="responsive">
                <div class="gallery">
                    <img src="<?php the_field('slide_six'); ?>">
                  <div class="desc"><?php the_field('sub_six'); ?></div>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <img src="<?php the_field('slide_seven'); ?>">
                  <div class="desc"><?php the_field('sub_seven'); ?></div>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <img src="<?php the_field('slide_eight'); ?>">
                  <div class="desc"><?php the_field('sub_eight'); ?></div>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <img src="<?php the_field('menu_one'); ?>">
                  <div class="desc"><?php the_field('sub_nine'); ?></div>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <img src="<?php the_field('menu_two'); ?>">
                  <div class="desc"><?php the_field('sub_ten'); ?></div>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <img src="<?php the_field('menu_three'); ?>">
                  <div class="desc"><?php the_field('sub_eleven'); ?></div>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <img src="<?php the_field('menu_four'); ?>">
                  <div class="desc"><?php the_field('sub_twelve'); ?></div>
                </div>
            </div>


            <div class="clearfix"></div>
                <div class="b">SHOW US HOW YOU ROCK YOU SEAFOOD.</div>

</main>

        
   <?php get_footer(); ?> 