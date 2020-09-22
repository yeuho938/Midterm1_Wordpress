<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CodeVibrant
 * @subpackage News Vibrant
 * @since 1.0.0
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
	/**
	 * wp_body_open
	 */
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} else {
		do_action( 'wp_body_open' );
	}

	/**
     * news_vibrant_before_page hook
     *
     * @since 1.0.0
     */
    do_action( 'news_vibrant_before_page' );
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'news-vibrant' ) ;?></a>
	
	<?php
		$news_vibrant_top_header_option = get_theme_mod( 'news_vibrant_top_header_option', 'show' );
		if( $news_vibrant_top_header_option == 'show' ) {
			
			/**
		     * news_vibrant_top_header hook
		     *
		     * @hooked - news_vibrant_top_header_start - 5
		     * @hooked - news_vibrant_top_left_section - 10
		     * @hooked - news_vibrant_top_right_section - 15
		     * @hooked - news_vibrant_featured_post_toggle - 20
		     * @hooked - news_vibrant_top_header_end - 25
		     *
		     * @since 1.0.0
		     */
		    do_action( 'news_vibrant_top_header' );

		    $news_vibrant_top_featured_option = get_theme_mod( 'news_vibrant_top_featured_option', 'show' );
		    $news_vibrant_top_posts_cat_slugs = get_theme_mod( 'news_vibrant_top_posts_cat_slugs', '' );
		    if( $news_vibrant_top_featured_option == 'show' && !empty( $news_vibrant_top_posts_cat_slugs ) ) {
		    	/**
			     * news_vibrant_top_featured_section hook
			     *
			     * @hooked - news_vibrant_top_featured_section_start - 5
			     * @hooked - news_vibrant_top_featured_content - 10
			     * @hooked - news_vibrant_top_featured_section_end - 15
			     *
			     * @since 1.0.0
			     */
			    do_action( 'news_vibrant_top_featured_section' );
		    }
		}

		/**
	     * news_vibrant_header_section hook
	     *
	     * @hooked - news_vibrant_header_section_start - 5
	     * @hooked - news_vibrant_header_logo_ads_section_start - 10
	     * @hooked - news_vibrant_site_branding_section - 15
	     * @hooked - news_vibrant_header_ads_section - 20
	     * @hooked - news_vibrant_header_logo_ads_section_end - 25
	     * @hooked - news_vibrant_primary_menu_section - 30
	     * @hooked - news_vibrant_header_section_end - 35
	     *
	     * @since 1.0.0
	     */
	    do_action( 'news_vibrant_header_section' );
	    
		$news_vibrant_ticker_option = get_theme_mod( 'news_vibrant_ticker_option', 'show' );
		if( $news_vibrant_ticker_option == 'show' && is_front_page() ) {

			/**
		     * news_vibrant_top_header hook
		     *
		     * @hooked - news_vibrant_ticker_section_start - 5
		     * @hooked - news_vibrant_ticker_content - 10
		     * @hooked - news_vibrant_ticker_section_end - 15
		     *
		     * @since 1.0.0
		     */
		    do_action( 'news_vibrant_ticker_section' );
		}
	?>

	<div id="content" class="site-content">
		<div class="cv-container">