<?php

//Enqueue essential style sheets
function enqueue_function(){
    wp_enqueue_style ('css',get_template_directory_uri().'./assets/css/style.css');
    wp_enqueue_style ('mycss',get_template_directory_uri().'./assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_function');

function register_resource(){
//Custom post types
    $args = array(
        'label' => 'Services',
        'public' => true,
    );
    register_post_type('service', $args);

    $args = array(
        'label' => 'Pricing',
        'public' => true,
    );
    register_post_type('price', $args);

    $args = array(
        'label' => 'Testimonials',
        'public' => true,
    );
    register_post_type('testimonial', $args);

    $args = array(
        'label' => 'Gallery',
        'public' => true,
    );
    register_post_type('gallery', $args);

    $args = array(
        'label' => 'Year of Shown Project',
        'public' => true,
        'hierarchical' => true,
        'show_in_nav_menus' => true,
    );
    register_taxonomy('year', 'gallery', $args);

    }
    add_action('init', 'register_resource');


//Customisation Settings
    function mytheme_customize_register($wp_customize){
    $wp_customize->add_section('settings' , array(
        'title'      => 'Settings',
        'priority'   => 30,
    ));

    //Update phone number setting
    $wp_customize->add_setting( 'phone' , array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'phone',array(
        'label'      => 'Change Header Phone Number',
        'section'    => 'settings',
        'settings'   => 'phone',
    )));

    //Heading Color
    $wp_customize->add_setting( 'heading_colour' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'link_color',array(
        'label'      => 'Heading Colour',
        'section'    => 'settings',
        'settings'   => 'heading_colour',
    )));

    //logo setting
    $wp_customize->add_setting( 'logo' , array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'logo',array(
        'label'      => 'Change logo',
        'section'    => 'settings',
        'settings'   => 'logo',
    )));
 }
 add_action( 'customize_register', 'mytheme_customize_register' );
?>
