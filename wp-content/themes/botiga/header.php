<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Botiga
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Gerrys old compton, drinks online, buy spirits online, buy wine, buy wines, buy vodka, absinthe,   gin, tequila, whiskey, schnapps, aquavit, rum, liqueurs, brandy, spirits, cocktail esstentials, champagne, sparkling wines,   vermouths, apertitifs, fortifed wines, miniatures, wine, buy alcohol, buy alcohol online, buy spirits, wine white, buy wine online, buy whisky, cognac, alcoholic drinks" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "108292151857690");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php do_action( 'botiga_before_site' ); ?>

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'botiga' ); ?></a>

	<?php 
	/**
	 * Header
	 */
	if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
		do_action( 'botiga_header' );
	}

	/**
	 * Page Header
	 */
	do_action( 'botiga_before_page_header' );
	do_action( 'botiga_page_header' );
	do_action( 'botiga_after_page_header' );
	
	/**
	 * Main Wrapper
	 */
	do_action( 'botiga_before_main_wrapper' );
	do_action( 'botiga_main_wrapper_start' ); ?>			