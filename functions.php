<?php

add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style('global_css', get_stylesheet_directory_uri() . '/assets/plugins/bootstrap/css/bootstrap.min.css', array(), time());

    wp_enqueue_style('plugins_css', get_stylesheet_directory_uri() . '/assets/plugins/font-awesome/css/font-awesome.css', array(), time());

    wp_enqueue_style('theme_css', get_stylesheet_directory_uri() . '/assets/css/styles.css', array(), time());

    wp_enqueue_script('jquery-1.12.3', get_stylesheet_directory_uri() . '/assets/plugins/jquery-1.12.3.min.js', array(), null, true);

    //wp_enqueue_script('jquery');

    wp_enqueue_script('jquery-scrollTo', get_stylesheet_directory_uri() . '/assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js', array('jquery'), null, true);

    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);

    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);

    wp_enqueue_script('shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', array(), null, false);

    wp_enqueue_script('main', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), null, false);

});
add_action('after_setup_theme', function () {

    add_theme_support('title-tag');



});
function sections( $name, $args = [] ) {
    try {
        if ( $name == "" ) {
            throw new Exception( "View name empty." );
        }


        $file_name = "/includes/sections/{$name}";

        get_template_part( $file_name, '', $args );
    } catch ( Exception $e ) {
        echo "Error: " . $e->getMessage();
    }
}
function b($a)
{
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}

function logo($str){
    $str = strtoupper ($str);
    $str = explode(" ", $str);
    return $str;

}


