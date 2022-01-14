<?php if (have_posts()) :
								while (have_posts()) : the_post(); ?>
							<article>
						<span class="a-background">
							<h2 class="title">
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
										<i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
									</li>
									<li>	
										<i class="fa fa-tag"></i> 
										<?php 
											$categories = get_the_category();
											$separator = " , ";
											$output = ''; 

											if ($categories) {

												foreach ($categories as $category) {

													$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
												
												}

											echo trim($output, $separator);

											}

											?>
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
					</span>
							</article>
							<?php endwhile; ?>
							
					<nav class="navigation pagination">
					<?php echo paginate_links(); ?>
					</nav>

							<?php
							else : 

								echo '<p>There are no recipes</p>';
							endif;
							?>