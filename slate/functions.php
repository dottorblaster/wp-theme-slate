<?php

//
//  Custom Child Theme Functions
//

// I've included a "commented out" sample function below that'll add a home link to your menu
// More ideas can be found on "A Guide To Customizing The Thematic Theme Framework" 
// http://themeshaper.com/thematic-for-wordpress/guide-customizing-thematic-theme-framework/

// Adds a home link to your menu
// http://codex.wordpress.org/Template_Tags/wp_page_menu
//function childtheme_menu_args($args) {
//    $args = array(
//        'show_home' => 'Home',
//        'sort_column' => 'menu_order',
//        'menu_class' => 'menu',
//        'echo' => true
//    );
//	return $args;
//}
//add_filter('wp_page_menu_args','childtheme_menu_args');

/*
This modifies the header just as I like :D
*/
function provahead(){

 echo "<link href='http://fonts.googleapis.com/css?family=Neuton' rel='stylesheet' type='text/css'/>";
 echo "<link href='http://fonts.googleapis.com/css?family=Asul:400,700' rel='stylesheet' type='text/css'/>";
 echo "<link href='http://fonts.googleapis.com/css?family=Neuton' rel='stylesheet' type='text/css'/>";}
add_action('wp_head', 'provahead');

function remove_old_access(){
	remove_action('thematic_header','thematic_access', 9);
}
add_action('init', 'remove_old_access');

/*This removes blog title and description: */

function remove_stuff() {
remove_action('thematic_header','thematic_blogtitle',3);
remove_action('thematic_header','thematic_blogdescription',5);
}
add_action('init','remove_stuff');

// Add Header Image // Add Header Image
function thematic_logo_image() {
 echo '<div id="header-image"><a href="'.get_bloginfo('url').'" title="'.get_bloginfo('name').'" ><div id="blogname"><img src="images/logo.png" /> '.get_bloginfo('name').'</div></a> <div id="blog-description">Un blog rolling release, di Alessio Biancalana</div></div>';

}
add_action('thematic_header','thematic_logo_image',6);


?>
