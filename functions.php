<?php 
//  agrega los recursos de js y css en wordpress
function recursos() {
    // Hay que poner wp_head(); en header.php para que esta funcion sirva
    wp_enqueue_style("style", get_stylesheet_uri());
    //wp_enqueue_script($manejador, fuente);
    // Hay que poner wp_footer(); en footer.php para que estas funciones sirvan
    wp_enqueue_script("dropotron", get_template_directory_uri().'/assets/js/jquery.dropotron.min.js', array('jquery')    ,'3.3.1'  , true );
    //wp_enqueue_script($manejador,$fuente                                                          , $array_dependencias, $version, $en_footer);
    wp_enqueue_script("browser", get_template_directory_uri().'/assets/js/browser.min.js', array('jquery'),'3.3.1',true );
    wp_enqueue_script("breakpoints", get_template_directory_uri().'/assets/js/breakpoints.min.js', array('jquery'),'3.3.1',true );
    wp_enqueue_script("util", get_template_directory_uri().'/assets/js/util.js', array('jquery'),'3.3.1',true );
    wp_enqueue_script("main", get_template_directory_uri().'/assets/js/main.js', array('jquery'),'3.3.1',true );    
}
// Hook que coloca los recursos cuando carga la pagina
add_action("wp_enqueue_scripts", "recursos");


register_nav_menus(array(
    'principal' => 'Menu principal'
));



if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true );
    // additional image sizes
    add_image_size( 'category-thumb'     , 340, 260, true );
    add_image_size( 'category-thumb-blog', 500, 350, true );

    add_image_size( 'category-full'      , 783, 290, true );}

   
// Activando el soporte para los sidebar
if (function_exists('register_sidebar')) {
       /**
        * Creates a sidebar
        * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
        */
        // $args = array(
        //     'name'          => __( 'Ultimas Entradas Footer'),
        //     'id'            => 'ultimas_entradas_footer',
        //     'description'   => '',
        //     'class'         => '',
        //     'before_widget' => '',
        
        //     'before_title'  => '',
        //     'after_title'   => ''
        // );
        // register_sidebar( $args );
       register_sidebar(array(
            'name'=>'footer ultimas entradas'
            ));
        register_sidebar(array(
            'name'=>'footer ultimas categorias'
            ));
}

?>