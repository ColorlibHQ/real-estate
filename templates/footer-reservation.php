<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Real_Estate
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$real_estate_reservation_title     = !empty( real_estate_opt( 'real_estate_reservation_title' ) ) ? real_estate_opt( 'real_estate_reservation_title' ) : '';
	$real_estate_reservation_sub_title = !empty( real_estate_opt( 'real_estate_reservation_sub_title' ) ) ? real_estate_opt( 'real_estate_reservation_sub_title' ) : '';
	$real_estate_reservation_btn_text  = !empty( real_estate_opt( 'real_estate_reservation_btn_text' ) ) ? real_estate_opt( 'real_estate_reservation_btn_text' ) : '';
	$real_estate_reservation_btn_url	  = !empty( real_estate_opt( 'real_estate_reservation_btn_url' ) ) ? real_estate_opt( 'real_estate_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $real_estate_reservation_title )?></h3>
			<p><?php echo esc_html( $real_estate_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $real_estate_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $real_estate_reservation_btn_text )?></a>
		</div>
	</div>