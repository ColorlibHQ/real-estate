<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 *
 * Template Name: Search Property Template
 */
 
 get_header();
 ?>
 
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider single_slider2  d-flex align-items-center property_bg overlay2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="property_wrap">
                            <div class="slider_text text-center justify-content-center">
                                <h3>Search property</h3>
                            </div>
                            <div class="property_form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form_wrap d-flex">
                                                <div class="single-field max_width ">
                                                    <label for="#">Location</label>
                                                    <select class="wide" >
                                                        <option data-display="NewYork">NewYork</option>
                                                        <option value="1">Bangladesh</option>
                                                        <option value="2">India</option>
                                                    </select>
                                                </div>
                                                <div class="single-field max_width ">
                                                    <label for="#">Property type</label>
                                                    <select class="wide" >
                                                        <option data-display="Apartment">Apartment</option>
                                                        <option value="1">Apartment</option>
                                                        <option value="2">Apartment</option>
                                                    </select>
                                                </div>
                                                <div class="single_field range_slider">
                                                    <label for="#">Price ($)</label>
                                                    <div id="slider"></div>
                                                </div>
                                                <div class="single-field min_width ">
                                                    <label for="#">Bed Room</label>
                                                    <select class="wide" >
                                                        <option data-display="01">01</option>
                                                        <option value="1">02</option>
                                                        <option value="2">03</option>
                                                    </select>
                                                </div>
                                                <div class="single-field min_width ">
                                                    <label for="#">Bath Room</label>
                                                    <select class="wide" >
                                                        <option data-display="01">01</option>
                                                        <option value="1">02</option>
                                                        <option value="2">03</option>
                                                    </select>
                                                </div>
                                                <div class="serach_icon">
                                                    <a href="#">
                                                        <i class="ti-search"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

 <?php

	if( have_posts() ){
		while( have_posts() ){
			the_post();
			
			the_content();
		}
	}
 
 get_footer();
?>