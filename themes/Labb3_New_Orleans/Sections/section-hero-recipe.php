<section class="hero" style="background-image: url('<?php the_sub_field("hero_image"); ?>')">
    
    <div class="labelrecipe">
    <?php
							$link = get_sub_field('badge_link1');
							if ($link) :
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self'; ?>
            <div class="badge-recipe">
                
                <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            
                            <?php endif; ?>
                            <?php
							$link = get_sub_field('badge_link2');
							if ($link) :
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self'; ?>
                            <div class="br"> <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                    </div>
            <div class="label-details">
                <div class="top-label">
                    <?php
                $link = get_sub_field('recipe_title');
							if ($link) :
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self'; ?>
                    <h3 class="name"> <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                            </a>
                            <?php endif; ?>
                        
                    </h3>
                    <?php
                $link = get_sub_field('recipe_text');
							if ($link) :
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self'; ?>
                    <div class=topnote-sentence> <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                            </a>
                            <?php endif; ?>
                    </div>

                         </div> 
                         <?php
                $link = get_sub_field('recipe_author');
							if ($link) :
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self'; ?>
                    <div class="bottom-label"><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
                            </a>
                            <?php endif; ?>
                            
                        
                    </div>
                </div>
            
        
    
    </div>
</section>