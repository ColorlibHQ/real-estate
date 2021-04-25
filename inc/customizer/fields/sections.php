<?php 
/**
 * @Packge     : Real_Estate
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'real_estate_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'real_estate' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'real_estate_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'real_estate' ),
            'panel'    => 'real_estate_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'real_estate_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'real_estate' ),
            'panel'    => 'real_estate_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'real_estate_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'real_estate' ),
            'panel'    => 'real_estate_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'real_estate_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'real_estate' ),
            'panel'    => 'real_estate_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'real_estate_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'real_estate' ),
            'panel'    => 'real_estate_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'real_estate_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'real_estate' ),
            'panel'    => 'real_estate_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'real_estate_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'real_estate' ),
            'panel'    => 'real_estate_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'real_estate_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'real_estate' ),
            'panel'    => 'real_estate_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>