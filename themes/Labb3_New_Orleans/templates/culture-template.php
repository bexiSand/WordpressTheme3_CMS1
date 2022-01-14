<?php /* Template Name: culture-template */ ?>
<?php /* Anna Stenholm */ ?>
<?php get_header(); ?>

<main>

    <!----------SECTION BIG-HERO--------------->
    <?php if (have_rows("sections")) : ?>
        <?php while (have_rows("sections")) : the_row(); ?>
            <?php if (get_row_layout() == "hero_big") : ?>
                <section class="hero-big" style="background-image: url('<?php the_sub_field("big_hero"); ?>')">
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

        <!----Section-culture-------->
        <?php if (have_rows("sections")) : ?>
            <?php while (have_rows("sections")) : the_row(); ?>
                <?php if (get_row_layout() == "section-culture") : ?>

                    <div class="columns text-center">
                        <div class="container">
                            <div class="opacity-box">
                                <div class="row top">
                                    <div class="col-xs-12">
                                        <h2 class="culture-color"> <?php the_sub_field('culture-title'); ?></h2>
                                    </div>
                                </div>
                                <div class="row align-items-start pt-3 center-culture">
                                    <div class="col-xs-12">

                                        <p class="culture-color"><?php the_sub_field('culture-text'); ?> </p>

                                    </div>
                                </div>
                                <div class="column-space">

                                </div>

                                <div class="row bottom">

                                    <div class="col-xs-12">

                                        <h2 class="culture-color"><?php the_sub_field('music-title'); ?></h2>
                                    </div>
                                </div>
                                <div class="row align-items-start">
                                    <div class="col-xs-12 center-culture">

                                        <p class="culture-color"><?php the_sub_field('music-text'); ?></p>
                                    </div>
                                </div>
                                <?php
                                $link = get_sub_field('mardi-link');
                                if ($link) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                                    <div class="link-box">
                                        <div class="link-content">
                                        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                    </div>
                                    </div>
                                <?php endif ?>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                        </div>
                    </div>
                </section>
</main>
<?php get_footer(); ?>