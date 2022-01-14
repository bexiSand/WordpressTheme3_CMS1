<?php

/************** enqueue - Anna *******************/
function get_my_scripts()
{
wp_enqueue_style(
 'my_style',
 get_stylesheet_directory_uri() . "/style.css"
);
 
 wp_enqueue_style(
 'my_bootstrap',
 get_stylesheet_directory_uri() . "/css/bootstrap.css"
 );
 
 
 wp_enqueue_script(
 'my_fontawesome',
 "https://kit.fontawesome.com/cf50086926.js",
 );
 
 wp_enqueue_script(
 'my_jquery',
 get_template_directory_uri() . "/js/jquery.js",
 array(),
 false, 'all'
 );
 wp_enqueue_script(
 'my_scripts',
 get_template_directory_uri() . "/js/script.js",
 array('my_owl'),
 true, 'all'
 
 );
 
 wp_enqueue_script(
 'my_owl',
 get_template_directory_uri() . "/js/owl.carousel.js",
 array(),false, "all"
 
 );
 
}
add_action('wp_enqueue_scripts', 'get_my_scripts');


function Labb3_theme_support()
{

    add_theme_support('post-thumbnails');
    add_post_type_support( 'recipes', 'thumbnail' );
    
}
add_action('after_setup_theme', 'Labb3_theme_support');

function register_all_my_menus()
{
    register_nav_menus([
        "primary-left" => "Desktop Primary Menu Left",
        "primary-right" => "Desktop Primary Menu Right",
        "primary-hamburger" => "Primary Hamburger Menu",
        "side-menu" => "Side Menu",
    ]);
}
add_action("init", "register_all_my_menus");


/************************* breadcrumbs Rebecka och Anna *********************************/


function breadcrumbs(){
    global $post;
    $seperator = "/";
    $home = "Home";
     
    echo "<ul class='breadcrumbs'>";
    echo "<li>You are here: </li>";
     
    if(is_front_page()){
    echo "<li>" . $home . "</li>";
    }else{
    echo "<li><a href=" . get_site_url() . ">" . $home . "</a></li>";
    }
     
    if(is_home() || is_single()){
    echo "<li>" . $seperator . "</li>";
    if(is_home()){
    echo "<li>Recipe</li>";
    }else {
    echo "<li><a href=" . get_post_type_archive_link('post') . ">Shop</a></li>";
    echo "<li>" . $seperator . "</li>";
    echo "<li>" . $post->post_title . "</li>";
    }
    }
     
    if(is_page() && !is_front_page()){
    echo "<li>" . $seperator . "</li>";
    if(!empty($post->post_parent)){
    echo "<li>";
    echo "<a href=" . get_permalink($post->post_parent). ">";
    echo get_the_title($post->post_parent);
    echo "</a></li>";
    echo "<li>" . $seperator . "</li>";
    }
    echo "<li>" . $post->post_title . "</li>";
    }
     
    echo "</ul>";
    }

/*************  registrerar sidebar1 widget - Rebecka ***********************/

function register_my_sidebar(){
    
    register_sidebar( array(
		"name" => "Sidebar widget",
        "id" => "sidebar1",   
    ));

}
add_action("widgets_init","register_my_sidebar");

    
/************************ OPTIONS AFC - Rebecka ************************ */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}


/************************ CUSTOM POST TYPE - Rebecka ************************ */
function create_post_type(){
    register_post_type('recipes', [ 
        'labels' => [
        'name' => 'Recipes', //Etikett i plural Etikett i singular
        'singular_name' => 'Recipe', //Vad som ska stå i ”Lägg till...” knappen
        'add_new' => 'New Recipe',  //Vad som ska stå i ”Lägg till ny...” knappen
        'add_new_item' => 'New Recipe', //Vad som ska stå i ”Ny...” länken
        'edit_item' => 'Edit Recipe',  //Vad som ska stå i ”Redigera...” länken
        'new_item' => 'New Recipe', //Vad som ska stå i ”Ny...” länken
        'search_items' => 'Search for Recipe', //Vad som ska stå i sökrutan i listningen
        'not_found' => 'No Recipe Found', 
        'all_items' => 'All Recipes', //Vad som ska stå i ”Alla...” länken
        ],
        'supports' => array( 'thumbnail' ),
        'description' => 'The Big Tasty!', //En kort beskrivning av posttypen
        'public' => true, //Om och hur posttypen ska visas för olika användare
        'exclude_from_search' => false, //Om posttypens poster ska exkluderas vid sökning
        'show_ui' => true, //Om posttypen ska kunna hanteras från admin
        'show_in_nav_menus' => true, //Om poster av posttypen ska kunna läggas till i menyer
        'show_in_menu' => true, //Vart posttypen ska listas i admin (vänster eller topp)
        'show_in_admin_bar' => true, //Om posttypen ska visas i toppbar’en
        'menu_position' => 10, //Vart i vänstermenyn posttypen ska visas
        'hierarchical' => false, //Om poster i posttypen ska kunna ha föräldrar, likt Sidor
        'menu_icon' => 'dashicons-food', //Ikon för posttypen
        'supports' => array('title' , 'editor'), //Vad som ska synas när man skapar/redigerar en post 
        'taxonomies' => array('category'), //Vilka taxonomier som ska tillhöra posttypen
        'has_archive' => true, //Om posttypen ska ha arkivsida
        'rewrite' => [  //Hur posttypens rewrites ska hanteras...
                        'slug' => 'recipe', //Permalänkstrukturen för posttypen
                        'with_front' => true //Om permalänkarna ska låta föregås av sluggen
                    ] 
    ]);

}
add_action( 'init' , 'create_post_type' );


	



