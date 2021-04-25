<?php 
/**
 * @Packge     : Real_Estate
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
    // Block direct access
    if( !defined( 'ABSPATH' ) ){
        exit( 'Direct script access denied.' );
    }

        /**
         * Footer Area
         *
         * @Footer
         * @Back To Top Button
         *
         * @Hook real_estate_footer
         *
         * @Hooked  real_estate_footer_area 
         *
         */

		do_action( 'real_estate_footer' );

	wp_footer(); 
 ?>
</body>
</html>