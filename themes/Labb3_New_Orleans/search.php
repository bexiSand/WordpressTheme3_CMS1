<?php get_header()?>

<main>
	<section class="standard">
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
					<h1>You searched for: <?php the_search_query(); ?></h1>
							<div class="searchform-wrap">
                                <?php get_search_form(); ?>
							</div>
                            <?php get_template_part("./partials/post-loop"); ?>

						</div>
					</div>
				</div>
			</section>
		</main>


<?php get_footer()?>
