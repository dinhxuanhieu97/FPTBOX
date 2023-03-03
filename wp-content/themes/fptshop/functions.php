<?php
 /*
 *  GLOBAL VARIABLES
 */
define('THEME_DIR', get_stylesheet_directory());
define('THEME_URL', get_stylesheet_directory_uri());
 
/*
 *  INCLUDED FILES
 */

$file_includes = [ 
    'includes/theme-assets.php',                // Style and JS   
    'includes/theme-setup.php',                // General theme setting	
    'includes/acf-options.php',               // ACF Option page
];

foreach ($file_includes as $file) {
    if (!$filePath = locate_template($file)) {
        trigger_error(sprintf(__('Missing included file'), $file), E_USER_ERROR);
    }

    require_once $filePath;
}

unset($file, $filePath);
 
 // Import feauture images
 function theme_features() {  
  register_nav_menu('headerMenuLocation','Header Menu Location');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_features');
 
 function custom_taxonomies_terms_links() {
    global $post, $post_id;
    // get post by post id
    $post = &get_post($post->ID);
    // get post type by post
    $post_type = $post->post_type;
    // get post type taxonomies
    $taxonomies = get_object_taxonomies($post_type);
    $out = "<div>";
    foreach ($taxonomies as $taxonomy) {        
        //$out .= '<p style="font-size:15px"> <b style="color:#4c8a39">Chuyên mục:</b> ';
        // get the terms related to post
        $terms = get_the_terms( $post->ID, $taxonomy );
        if ( !empty( $terms ) ) {
            foreach ( $terms as $term )
                $out .= '<span>'.$term->name.';</span>&nbsp;';
        }
        $out .= "</p>";
    }
    $out .= "</div>";
    return $out;
}
 // Register Widget
 function arphabet_widgets_init(){
    // Post
            register_sidebar(array(
                'name'          => 'Post Widget',
                'id'            => 'post-widget',
                'before_widget' => '<div class="my-10">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="title--section title--background text--upcase">',
                'after_title'   => '</h2>',
            ));
            // Sidebar
            register_sidebar(array(
                'name'          => 'Sidebar',
                'id'            => 'sidebar',
                'before_widget' => '<div id="post__recent" class="post__recent">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="title--section">',
                'after_title'   => '</h3>',
            ));
            // Footer center
            register_sidebar(array(
                'name'          => 'Footer giữa',
                'id'            => 'footer-center',
                'before_widget' => '<div>',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="title--section text--upcase">',
                'after_title'   => '</h2>',
            ));
            //Footer left
            register_sidebar(array(
                'name'          => 'Footer trái',
                'id'            => 'footer-right',
                'before_widget' => '<div>',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="title--section text--upcase">',
                'after_title'   => '</h2>',
            ));
        }
            add_action( 'widgets_init', 'arphabet_widgets_init' );
?>