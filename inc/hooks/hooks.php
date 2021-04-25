<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'real_estate_preloader', 'real_estate_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'real_estate_header', 'real_estate_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'real_estate_footer', 'real_estate_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'real_estate_wrp_start', 'real_estate_wrp_start_cb', 10 );
	add_action( 'real_estate_wrp_end', 'real_estate_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'real_estate_blog_col_start', 'real_estate_blog_col_start_cb', 10 );
	add_action( 'real_estate_blog_col_end', 'real_estate_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'real_estate_blog_posts_thumb', 'real_estate_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'real_estate_blog_details_wrap_start', 'real_estate_blog_details_wrap_start_cb', 10 );
	add_action( 'real_estate_blog_details_wrap_end', 'real_estate_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'real_estate_blog_posts_title', 'real_estate_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'real_estate_blog_posts_meta', 'real_estate_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'real_estate_blog_posts_excerpt', 'real_estate_blog_posts_excerpt_cb', 10 );
	// add_action( 'real_estate_blog_posts_excerpt', 'real_estate_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'real_estate_blog_posts_info_link', 'real_estate_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'real_estate_blog_posts_content', 'real_estate_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'real_estate_blog_posts_share', 'real_estate_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'real_estate_blog_sidebar', 'real_estate_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'real_estate_blog_single_meta', 'real_estate_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'real_estate_page_content', 'real_estate_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'real_estate_fof', 'real_estate_fof_cb', 10 );

	

?>