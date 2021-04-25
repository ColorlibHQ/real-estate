<?php
    $social_opt = real_estate_opt('real_estate_social_profile_toggle');
    $social_items = real_estate_opt('real_estate_social_profiles');
    $slogan_txt = real_estate_opt( 'real_estate_header_top_slogan' );
    $top_email = real_estate_opt( 'real_estate_header_top_email' );
    $top_phone = real_estate_opt( 'real_estate_header_top_phone' );
    $btn_txt = real_estate_opt( 'real_estate_header_btn_text' );
    $btn_url = real_estate_opt( 'real_estate_header_btn_url' );
?>
<!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div class="header-top_area d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-md-5 ">
                        <div class="header_left">
                            <?php
                                if ( $slogan_txt ) {
                                    echo '<p>'.wp_kses_post(nl2br( $slogan_txt )).'</p>';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-xl-7 col-md-7">
                        <div class="header_right d-flex">
                            <div class="short_contact_list">
                                <?php
                                if ( $top_email || $top_phone ) {
                                    echo '<ul>';
                                        if ( $top_email ) {
                                            echo '<li><a href="mailto:'.esc_attr( $top_email ).'"> <i class="fa fa-envelope"></i> '.esc_html( $top_email ).'</a></li>';
                                        }
                                        if ( $top_phone ) {
                                            echo '<li><a href="tel:'.esc_attr( $top_phone ).'"> <i class="fa fa-phone"></i> '.esc_html( $top_phone ).'</a></li>';
                                        }
                                    echo '</ul>';
                                }
                                ?>
                            </div>

                            <?php
                            // Social profiles
                            if ( $social_opt == true ) {
                                if( is_array( $social_items ) && count( $social_items ) > 0 ){
                                    echo '<div class="social_media_links">';
                                        foreach ($social_items as $value) {
                                            echo '<a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a>';
                                        }
                                    echo '</div>';
                                }          
                            }  
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <?php echo real_estate_theme_logo();?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <?php
                                        if(has_nav_menu('primary-menu')) {
                                            wp_nav_menu(array(
                                                'menu'            => 'primary-menu',
                                                'theme_location'  => 'primary-menu',
                                                'menu_id'         => 'navigation',
                                                'container_class' => false,
                                                'container_id'    => false,
                                                'menu_class'      => false,
                                                'depth'           => 3,
                                                'walker'          => new real_estate_bootstrap_navwalker()
                                            ));
                                        }
                                    ?>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a  href="<?php echo home_url('wp-admin/post-new.php?post_type=property')?>"><?php _e('Add Property', 'real-estate')?></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->