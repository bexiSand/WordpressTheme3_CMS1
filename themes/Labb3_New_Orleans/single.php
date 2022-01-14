<?php

get_header(); ?>

<main>
<div class="site-content clearfix">
	<section class="standard single" style="background-image: url(<?php the_field('lobster_pattern', 33); ?>);">
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9 single-wrap">
                
							
								
			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				if (get_post_format() == false) {
					get_template_part('content', 'single');
				} else {
					get_template_part('content', get_post_format());
                }
                ?>
                
                <article>
                    

                    
                    <h2 >
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    

						<img
                            src="<?php echo get_the_post_thumbnail_url(); ?>"
                            alt=""
                        >    
									
									<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i><?php the_time ('j F, Y'); ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="author.php"><?php the_author(); ?></a>
									</li>
									<li>	
										<i class="fa fa-tag"></i><?php the_category( ', ' ); ?> 
									</li>
                                    </ul>

                            <div class="col-xs-12 col-md-8 instructions">
					            <h3><?php the_field("instructions_title") ?></h3>
                                <p><?php the_field("instructions_text") ?></P>
                            </div>

                            <div class="col-xs-12 col-md-4 ingredients">
                                <h3><?php the_field("ingredients_title") ?></h3>
                                <p><?php the_field("ingredients_text") ?></p>
                            </div>
                            <div class="col-xs-12 col-md-12 facts">
                                <div class="fact-box">
                                    <h3><?php the_field("fun_fact_title") ?></h3>
                                    <p><?php the_field("fun_fact_text") ?></p>
                                </div>
                            </div>

                <?php
				endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
			
			    ?>
			
            
                </article>
               
            </div>    
            
                                        
			<?php get_sidebar(); ?>
                        
					</div>
				</div>
			</section>
        </main>

<?php get_footer(); ?>