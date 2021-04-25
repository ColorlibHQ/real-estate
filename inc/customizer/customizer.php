<?php 
/**
 * @Packge     : Real_Estate
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

class real_estate_theme_customizer {


    function __construct(){
        add_action( 'customize_register', array( $this, 'real_estate_theme_customizer_options' ) );
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'real_estate_customizer_js' ) );
    }

    // Customize register hook

    public function real_estate_theme_customizer_options( $wp_customize ){

        $wp_customize->add_setting( 'footer_logo_img', 
            array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint'
            ) 
        ); // Add setting for image uploader
            
        // Add control for image uploader (actual uploader)
        $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'WP_Customize_Cropped_Image_Control', array(
            'label' => __( 'Footer Logo', 'real_estate' ),
            'priority'  => 1,
            'section' => 'real_estate_footer_section',
            'settings' => 'footer_logo_img',
            ) ) 
        );
        
        // Include files
        include( REAL_ESTATE_DIR_PATH_INC. 'customizer/fields/sections.php' );
        include( REAL_ESTATE_DIR_PATH_INC. 'customizer/fields/fields.php' );

        // Change panel to theme option
        $wp_customize->get_section( 'title_tagline' )->panel      = 'real_estate_theme_options_panel';
        // change priorities
        $wp_customize->get_section( 'title_tagline' )->priority     = 0;
        $wp_customize->remove_section( 'colors' );

        // Copyright text selective refresh
        $wp_customize->selective_refresh->add_partial( 'real_estate-copyright-text-settings', 
        array( 'selector' => '.copyright-text' ) );


    }


    // Customizer js enqueue

    public function real_estate_customizer_js(){

        wp_enqueue_script( 'real_estate-customizer', REAL_ESTATE_DIR_URI.'inc/customizer/js/customizer.js', array('customize-controls'), '1.0', true );

        wp_localize_script( 'real_estate-customizer', 'customizerdata', array(
            'site_url'      => site_url('/'),
            'blog_page'     => get_post_type_archive_link( 'post' ),

        ) );

    }

    // Get page name by page template
    public static function real_estate_get_page_name( $template ){

        $pages = get_pages(array(
            'meta_key' => '_wp_page_template',
            'meta_value' => esc_html( $template )
        ));

        return $pages;
    }

    // Image sanitization callback.

    public static function real_estate_sanitize_image( $image, $setting ) {

        /*
         * Array of valid image file types.
         *
         * The array includes image mime types that are included in wp_get_mime_types()
         */
        $mimes = array(
            'jpg|jpeg|jpe' => 'image/jpeg',
            'gif'          => 'image/gif',
            'png'          => 'image/png',
            'bmp'          => 'image/bmp',
            'tif|tiff'     => 'image/tiff',
            'ico'          => 'image/x-icon'
        );

        // Return an array with file extension and mime_type.
        $file = wp_check_filetype( $image, $mimes );

        // If $image has a valid mime_type, return it; otherwise, return the default.
        return ( $file['ext'] ? $image : $setting->default );
    }

}
?>