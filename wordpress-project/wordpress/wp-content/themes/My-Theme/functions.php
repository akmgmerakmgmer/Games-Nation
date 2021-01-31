<?php 
add_theme_support( 'post-thumbnails' ); // Add Featured Image Support 
function styles(){
    wp_enqueue_style('bootstrap-css','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style( 'main', get_template_directory_uri().'/css/sass/style.css');
}


function scripts(){
    wp_deregister_script( 'jquery' ); // Remove Registeration for the old jquery
    wp_register_script( 'jquery', includes_url('/js/jquery/jquery.js'), false, '', true );// Add the new jquery to be in the footer
    wp_enqueue_script( 'jquery');// Enqueue the new jquery
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' , array('jquery'), false, true);
    wp_enqueue_script( 'popper-js' , 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), false, true);
    wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/f4e7411ff2.js');
    wp_enqueue_script('script-js',get_template_directory_uri().'/js/script.js', array(), false, true);
    wp_enqueue_script( 'jquery.js', "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" );
}


function register_menu(){
    register_nav_menu( 'main_menu',__('Navigation Bar') );
}
function menus(){
    wp_nav_menu( );
}
function excerpt($length){
    return 20;
}
add_filter( 'excerpt_length', 'excerpt' ); // bt5leh ea5od mn el paragraph 15 kelma bs
function excerpt_dots($more){
    return '...';
}
// Numbering Pagination
function numbering_pagination(){
    // Access WP_Query
    global $wp_query; 
    // Get All Pages
    $all_pages=$wp_query->max_num_pages;
    // Get the page number
    $current_page=max(1,get_query_var( 'paged' ));

    if($all_pages>1){
        return paginate_links( array(
            'base'      => get_pagenum_link( ) . '%_%',
            'format'    => 'page/%#%',
            'current'   => $current_page,
            'mid_size'  => 1,
            'prev_next' => false,
            'total'     => $all_pages,
        ) );
    }   
}
//Pervent Searches of Pages
function search_filter($query) {
    if ( ! is_admin() && $query->is_main_query() ) {
        if ( $query->is_search ) {
            $query->set( 'post_type', 'post' );
        }
    }
}
add_action( 'pre_get_posts', 'search_filter' );
add_filter( 'excerpt_more', 'excerpt_dots' );
add_action( 'init', 'register_menu');
add_action( 'wp_enqueue_scripts', 'styles' );
add_action( 'wp_enqueue_scripts', 'scripts' );

?>