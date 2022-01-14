<?php get_header();?>

<main>

			<section class="standard" style="background-image: url(<?php the_field('lobster_pattern', 33); ?>);">
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1><?php the_category(''); ?></h1>
							<?php get_template_part("./partials/post-loop"); ?>

						</div>

<?php get_sidebar();?>

					</div>
				</div>
			</section>

</main>
							
<?php get_footer();?>   
