<?php /* Template Name: Menu-template */ ?>
<?php /* Martin Healu */ ?>
<?php get_header(); ?>

<!----------SECTION (MARTIN)--------------->

<main>
       <section class="standard">
            <div id="fishing1"style="background-image: url(<?php the_field('back_image'); ?>);">
             <div class="container">
               <div class="row">
                   <div class="col-xs-6">
                       <h1><?php the_field('menu_one'); ?></h1>
                       <p><?php the_field('des_one'); ?></p>
                       <button type="button" class="btn btn-primary btn-lg"><?php the_field('price_one'); ?></button>
                   </div>
                   <div class="col-xs-6">
                       <img src="<?php the_field('food_one'); ?>" />
                   </div>
                   <div class="col-xs-6">
                       <h1><?php the_field('menu_two'); ?></h1>
                       <p><?php the_field('des_two'); ?></p>
                       <button type="button" class="btn btn-primary btn-lg"><?php the_field('price_two'); ?></button>
                    </div>
                    <div class="col-xs-6">
                        <img src="<?php the_field('food_two'); ?>" />
                    </div>
                        <div class="col-xs-6">
                            <h1><?php the_field('menu_three'); ?></h1>
                            <p><?php the_field('des_three'); ?></p>
                            <button type="buuton" class="btn btn-primary btn-lg"><?php the_field('price_three'); ?></button>
                        </div>
                        <div class="col-xs-6">
                            <img src="<?php the_field('food_three'); ?>">
                        </div>
                        <div class="col-xs-6">
                            <h1><?php the_field('menu_four'); ?></h1>
                            <p><?php the_field('des_four'); ?></p>
                            <button type="buuton" class="btn btn-primary btn-lg"><?php the_field('price_four'); ?></button>
                        </div>
                        <div class="col-xs-6">
                            <img src="<?php the_field('food_four'); ?>">
                        </div>
                        <div class="col-xs-6">
                            <h1><?php the_field('menu_five'); ?></h1>
                            <p><?php the_field('des_five'); ?></p>
                            <button type="buuton" class="btn btn-primary btn-lg"><?php the_field('price_five'); ?></button>
                        </div>
                        <div class="col-xs-6">
                            <img src="<?php the_field('food_five'); ?>">
                        </div>
                        <div class="col-xs-6">
                            <h1><?php the_field('menu_six'); ?></h1>
                            <p><?php the_field('des_six'); ?></p>
                            <button type="buuton" class="btn btn-primary btn-lg"><?php the_field('price_six'); ?></button>
                        </div>
                        <div class="col-xs-6">
                            <img src="<?php the_field('food_six'); ?>">
                        </div>
                        <div class="col-xs-6">
                            <h1><?php the_field('menu_seven'); ?></h1>
                            <p><?php the_field('des_seven'); ?></p>
                            <button type="buuton" class="btn btn-primary btn-lg"><?php the_field('price_seven'); ?></button>
                        </div>
                        <div class="col-xs-6">
                            <img src="<?php the_field('food_seven'); ?>">
                        </div>
                        <div class="col-xs-6">
                            <h1><?php the_field('menu_eight'); ?></h1>
                            <p><?php the_field('des_eight'); ?></p>
                            <button type="buuton" class="btn btn-primary btn-lg"><?php the_field('price_eight'); ?></button>
                        </div>
                        <div class="col-xs-6">
                            <img src="<?php the_field('food_eight'); ?>">
                        </div>
                        <div class="col-xs-6">
                            <h1><?php the_field('menu_nine'); ?></h1>
                            <p><?php the_field('des_nine'); ?></p>
                            <button type="buuton" class="btn btn-primary btn-lg"><?php the_field('price_nine'); ?></button>
                        </div>
                        <div class="col-xs-6">
                            <img src="<?php the_field('food_nine'); ?>">
                        </div>
                        <div class="col-xs-6">
                            <h1><?php the_field('menu_ten'); ?></h1>
                            <p><?php the_field('des_ten'); ?></p>
                            <button type="buuton" class="btn btn-primary btn-lg"><?php the_field('price_ten'); ?>9</button>
                        </div>
                        <div class="col-xs-6">
                            <img src="<?php the_field('food_ten'); ?>">
                        </div>
                        <div class="col-xs-6">
                            <h1><?php the_field('menu_eleven'); ?></h1>
                            <p><?php the_field('des_eleven'); ?></p>
                            <button type="buuton" class="btn btn-primary btn-lg"><?php the_field('price_eleven'); ?></button>
                        </div>
                        <div class="col-xs-6">
                            <img src="<?php the_field('food_eleven'); ?>">
                        </div>
                        <div class="col-xs-6">
                            <h1><?php the_field('menu_twelve'); ?></h1>
                            <p><?php the_field('des_twelve'); ?></p>
                            <button type="buuton" class="btn btn-primary btn-lg"><?php the_field('price_twelve'); ?></button>
                        </div>
                        <div class="col-xs-6">
                            <img src="<?php the_field('food_tweleve'); ?>">
                        </div>
                    </div>
               </div>
           </div>
       </section>
   </main>
   
  <?php get_footer(); ?>