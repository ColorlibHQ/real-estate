<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package real_estate
 */

get_header();

if( have_posts() ) {
    while( have_posts() ) : the_post();
    $top_phone      = real_estate_opt( 'real_estate_header_top_phone' );
    $property_type  = get_the_terms(get_the_ID(), 'property-type');
    // Meta values
    $prop_address   = ! empty( real_estate_meta( 'prop_address') ) ? real_estate_meta( 'prop_address') : '';
    $prop_price     = ! empty( real_estate_meta( 'prop_price') ) ? real_estate_meta( 'prop_price') : 'N/A';
    $phone_number   = ! empty( real_estate_meta( 'phone_number') ) ? real_estate_meta( 'phone_number') : '';
    $prop_area      = ! empty( real_estate_meta( 'prop_area') ) ? real_estate_meta( 'prop_area') : 'N/A';
    $prop_bed       = ! empty( real_estate_meta( 'prop_bed') ) ? real_estate_meta( 'prop_bed') : 'N/A';
    $prop_bath      = ! empty( real_estate_meta( 'prop_bath') ) ? real_estate_meta( 'prop_bath') : 'N/A';
    $prop_status    = ! empty( real_estate_meta( 'prop_status') ) ? real_estate_meta( 'prop_status') : 'N/A';
    $prop_imgs      = ! empty( real_estate_meta( 'prop_imgs') ) ? real_estate_meta( 'prop_imgs', false) : '';
    $loc_icon      = REAL_ESTATE_DIR_ICON_IMG_URI . 'location.svg';
    $color_box     = REAL_ESTATE_DIR_ICON_IMG_URI . 'color_box.svg';
    $color_bed     = REAL_ESTATE_DIR_ICON_IMG_URI . 'color_bed.svg';
    $color_bath    = REAL_ESTATE_DIR_ICON_IMG_URI . 'color_bath.svg';
    ?>

    <!-- bradcam_area  -->
    <div class="property_details_banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-8 col-lg-6">
                    <div class="comfortable_apartment">
                        <h4><?php the_title()?></h4>
                        <?php
                            if ( $prop_address != '' ) {
                                ?>
                                <p> 
                                    <img src="<?=esc_url( $loc_icon )?>" alt="location icon">
                                    <?=esc_html( $prop_address )?>
                                </p>
                                <?php
                            }
                        ?>
                        <div class="quality_quantity d-flex">
                            <div class="single_quantity">
                                <img src="<?=esc_url( $color_box )?>" alt="color box">
                                <span><?=esc_html( $prop_area )?> <?php _e('Sqft', 'real-estate')?></span>
                            </div>
                            <div class="single_quantity">
                                <img src="<?=esc_url( $color_bed )?>" alt="color bed">
                                <span><?=esc_html( $prop_bed )?> <?php _e('Bed', 'real-estate')?></span>
                            </div>
                            <div class="single_quantity">
                                <img src="<?=esc_url( $color_bath )?>" alt="color bath">
                                <span><?=esc_html( $prop_bath )?> <?php _e('Bath', 'real-estate')?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-4 col-lg-6">
                    <div class="prise_quantity">
                        <h4>$<?=esc_html( $prop_price )?></h4>
                        <?php
                            if ( $phone_number != '' ) {
                                ?>
                                    <a href="tel:<?=esc_attr( $phone_number )?>"><?=esc_html( $phone_number )?></a>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- details  -->
    <div class="property_details">
        <div class="container">
            <div class="row">
                <?php
                    if ( $prop_imgs != '' ) {
                    ?>
                    <div class="col-xl-12">
                        <div class="property_banner">
                            <div class="property_banner_active owl-carousel">
                                <?php
                                if ( $prop_imgs != '' ) {
                                    foreach ( $prop_imgs as $key => $prop_img ) {
                                        $single_img = wp_get_attachment_image( $prop_img, 'real_estate_property_details_thumb_1146x600', '', ['alt' => get_the_title() . ' '. $key] );
                                        echo '
                                        <div class="single_property">
                                            '.$single_img.'
                                        </div>
                                        ';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    } else {
                        echo '
                            <div class="mb-5 col-12"></div>
                            <div class="mb-5 col-12"></div>
                            <div class="mb-5 col-12"></div>
                            <div class="mb-5 col-12"></div>
                        ';
                    }
                ?>
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="details_info">
                        <h4><?php _e('Description', 'real-estate')?></h4>
                        <?php the_content()?>
                    </div>
                    <section class="contact-section">
                        <div class="d-none d-sm-block">
                            <?php
                            $args = array(
                                'width'        => '100%',
                                'height'       => '480px',
                                'zoom'         => 14,
                                'marker'       => true,
                                // 'marker_icon'  => 'https://url_to_icon.png',
                                'marker_title' => __('Click me for details', 'real-estate'),
                                'info_window'  => '
                                <h4>'.get_the_title().'</h4>'
                                .get_the_post_thumbnail('','',['class'=>'img-fluid']),
                            );
                            $prop_map = rwmb_meta( '_real_estate_prop_map', $args );
                            echo $prop_map;
                            ?>
                        </div>
                    </section>
                    <div class="contact_field">
                        <h3><?php _e('Contact Us', 'real-estate')?></h3>
                        <?php echo do_shortcode( '[contact-form-7 id="230" title="Contact for Property"]' )?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /details  -->

    <!-- contact_action_area  -->
    <div class="contact_action_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="action_heading">
                        <h3><?php _e('Add your property for sale', 'real-estate')?></h3>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="call_add_action">
                        <?php
                            if ( $top_phone ) {
                                echo '<span>'.esc_html( $top_phone ).'</span>';
                            }
                        ?>
                        <a href="<?php echo home_url('wp-admin/post-new.php?post_type=property')?>" class="boxed-btn3-line"><?php _e('Add Property', 'real-estate')?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /contact_action_area  -->

    <?php 
    endwhile;
}

// Footer============
get_footer();