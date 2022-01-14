<?php get_header();?>

<main>
    <section class="standard blog" style="background-image: url(<?php the_field('lobster_pattern', 33); ?>);">
		
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">
					
							<?php get_template_part("./partials/post-loop"); ?>
                </div>

				<?php get_sidebar(); ?>
            </div>
		</div>
	</section>
</main>
							
<?php get_footer();?>    
 
  
