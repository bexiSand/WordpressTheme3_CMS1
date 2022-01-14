<?php
get_header();
?>


    <main>
    <div class="rot bottom-left">

        <!----------SECTION HERO-RECIPE(ANNA)--------------->
        <?php if (have_rows("sections")) : ?>
            <?php while (have_rows("sections")) : the_row(); ?>
                <?php if (get_row_layout() == "hero_recipe") : ?>
                    <?php get_template_part("Sections/section-hero-recipe"); ?>

                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>


    </div>
    </main>

<?php
get_footer();
?>