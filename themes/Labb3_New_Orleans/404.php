<?php 
/** 
 * The template site for displaying 404 pages. (Not found)
 */

get_header();
?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">


                <h2 class="heading_404"><?php _e('Woops, the content you are looking for cannot be found here. Try a search!');?></h2>
                <?php get_search_form();?>

                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();
?>