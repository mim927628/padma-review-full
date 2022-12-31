<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo');
add_theme_support( 'post-thumbnails' );

register_nav_menus([
    'PM'=>'primary'

]);

register_sidebar([
    'name' =>'BD Logo',
    'id' => 'bdlogo',
    'before_widget' => '',
    'after_widget' => '',
]);


register_sidebar([
    'name' =>'Hero Title',
    'id' => 'herotitle',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' =>'Hero Card-1',
    'id' => 'card1',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' =>' Photo Line Left',
    'id' => 'lineleft',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' =>' Photo Title',
    'id' => 'phototitle',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' =>' Photo Line Right',
    'id' => 'lineright',
    'before_widget' => '',
    'after_widget' => '',
]);

register_sidebar([
    'name' =>' Photo Card 1',
    'id' => 'photocard1',
    'before_widget' => '',
    'after_widget' => '',
]);
register_sidebar([
    'name' =>' Photo Card 2',
    'id' => 'photocard2',
    'before_widget' => '',
    'after_widget' => '',
]);
register_sidebar([
    'name' =>' Photo Card 3',
    'id' => 'photocard3',
    'before_widget' => '',
    'after_widget' => '',
]);
register_sidebar([
    'name' =>' Photo Card 4',
    'id' => 'photocard4',
    'before_widget' => '',
    'after_widget' => '',
]);
register_sidebar([
    'name' =>' News Title',
    'id' => 'newstitle',
    'before_widget' => '',
    'after_widget' => '',
]);
register_sidebar([
    'name' =>' Footer Top Left',
    'id' => 'ftleft',
    'before_widget' => '',
    'after_widget' => '',
]);
register_sidebar([
    'name' =>' Footer Top Right',
    'id' => 'ftright',
    'before_widget' => '',
    'after_widget' => '',
]);
register_sidebar([
    'name' =>' Footer Buttom Left',
    'id' => 'fbleft',
    'before_widget' => '',
    'after_widget' => '',
]);
register_sidebar([
    'name' =>' Footer Buttom Right',
    'id' => 'fbright',
    'before_widget' => '',
    'after_widget' => '',
]);
?>