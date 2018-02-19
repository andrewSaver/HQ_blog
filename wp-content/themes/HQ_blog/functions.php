<?php
// Theme setup

function hqbw_theme_setup(){
    add_theme_support('post-thumbnails', array('post', 'custom-type'));
    add_theme_support('post-formats', array('aside', 'gallery'));
}


  add_action('after_setup_theme','hqbw_theme_setup');

function my_scripts_method(){
    
    wp_register_script(
        'jquery',
         get_template_directory_uri() . '/js/jquery-3.3.1.js'
        );
    wp_enqueue_script(
        'jquery',
        get_template_directory_uri() . '/js/jquery-3.3.1.js'
    );
    

    wp_register_script(
        'bootstrap',
         get_template_directory_uri() . '/js/bootstrap.bundle.js'
        );
    wp_enqueue_script(
        'bootstrap',
        get_template_directory_uri() . '/js/bootstrap.bundle.js'
    );

    wp_register_script(
        'jquery.waypoints.min',
         get_stylesheet_directory_uri() . '/js/jquery.waypoints.min.js'
        );
    wp_enqueue_script(
        'jquery.waypoints.min',
        get_stylesheet_directory_uri() . '/js/jquery.waypoints.min.js'
    );

    wp_register_script(
        'lightbox',
         get_stylesheet_directory_uri() . '/js/lightbox.js'
        );
    wp_enqueue_script(
        'lightbox',
        get_stylesheet_directory_uri() . '/js/lightbox.js'
    );

    wp_register_script(
        'scripts',
         get_stylesheet_directory_uri() . '/js/scripts.js'
        );
    wp_enqueue_script(
        'scripts',
        get_stylesheet_directory_uri() . '/js/scripts.js'
    );
    
}

function my_custom_styles(){
    wp_register_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style');

    wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('bootstrap-css');
}

add_action('wp_enqueue_scripts', 'my_scripts_method', 'my_custom_styles');




// Excerpt length control

function set_excerpt_length(){
    return 60;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Widget locations

function hqbw_init_widgets($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id'   => 'Sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

add_action('widgets_init', 'hqbw_init_widgets');

// Customizer File

require get_template_directory(). '/inc/customizer.php';

// Pagination

function fellowtuts_wpbs_pagination($pages = '', $range = 2) 
{  
	$showitems = ($range * 2) + 1;  
	global $paged;
	if(empty($paged)) $paged = 1;
	if($pages == '')
	{
		global $wp_query; 
		$pages = $wp_query->max_num_pages;
	
		if(!$pages)
			$pages = 1;		 
	}   
	
	if(1 != $pages)
	{
	    echo '<nav aria-label="Page navigation" role="navigation">';
        echo '<span class="sr-only">Page navigation</span>';
        echo '<ul class="pagination justify-content-center ft-wpbs">';
		
        echo '<li class="page-item disabled hidden-md-down d-none d-lg-block"><span class="page-link">Page '.$paged.' of '.$pages.'</span></li>';
	
	 	if($paged > 2 && $paged > $range+1 && $showitems < $pages) 
			echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link(1).'" aria-label="First Page">&laquo;<span class="hidden-sm-down d-none d-md-block"> First</span></a></li>';
	
	 	if($paged > 1 && $showitems < $pages) 
			echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($paged - 1).'" aria-label="Previous Page">&lsaquo;<span class="hidden-sm-down d-none d-md-block"> Previous</span></a></li>';
	
		for ($i=1; $i <= $pages; $i++)
		{
		    if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
				echo ($paged == $i)? '<li class="page-item active"><span class="page-link"><span class="sr-only">Current Page </span>'.$i.'</span></li>' : '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($i).'"><span class="sr-only">Page </span>'.$i.'</a></li>';
		}
		
		if ($paged < $pages && $showitems < $pages) 
			echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($paged + 1).'" aria-label="Next Page"><span class="hidden-sm-down d-none d-md-block">Next </span>&rsaquo;</a></li>';  
	
	 	if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) 
			echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($pages).'" aria-label="Last Page"><span class="hidden-sm-down d-none d-md-block">Last </span>&raquo;</a></li>';
	
	 	echo '</ul>';
        echo '</nav>';
        //echo '<div class="pagination-info mb-5 text-center">[ <span class="text-muted">Page</span> '.$paged.' <span class="text-muted">of</span> '.$pages.' ]</div>';	 	
	}
}