
<footer id="footer">

<!-------------------------------det gråa fältet------------------------------------------------>  
<div class="container">
    
				<div class="row top ">
					<div class="col-xs-12 col-sm-4 col-md-4">

        
            <h4><?php the_field('title_footer_left', 'options');?></h4>
			<p><?php the_field('text_footer_left', 'options');?></p>
        </div>

 
        <div class="col-xs-12 col-sm-4 col-md-4">

                    <?php
                        $white_logo = get_field('footer_center_image', 'options');
                        if( !empty($white_logo) ):
                    ?>
                            <a class="footer-center-image" href="<?php echo site_url(); ?>"><img src="<?php echo $white_logo['url']; ?>"></a>

                    <?php endif; ?>	
        

       

            <div class="footer-center-fafa">
                <ul class="social">
                    <?php $links = get_field('footer_center_fafa', 'options'); 
                        if( !empty($links) ):
                    ?>
                    <?php foreach($links as $sub_field): ?>
                        <li>                         
                             <a href="<?php echo $sub_field["fafa_link"]; ?>">
                                <?php echo $sub_field["fafa_icon"]; ?>
							</a>
                         </li>
                    <?php endforeach; ?>
                    <?php
                    endif;
                    ?>
                </ul>             
            </div>
        </div>
        
       
        <div class="col-xs-12 col-sm-4 col-md-4">
            <h4><?php the_field('title_footer_right', 'options');?></h4>
			<p><?php the_field('text_footer_right', 'options');?></p>
        </div>
    </div> 
</div>
<!-------------------------------det gula fältet------------------------------------------------>    
    <div class="row bottom">
		<div class="col-xs-12">
    <!--<div class="yellow-bar"> -->       
            <p><?php the_field('row_bottom', 'options');?></p>         
        </div>
    </div>

			
</footer>

<?php wp_footer(); ?>
</body>
</html>