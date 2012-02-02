<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	wp_head();
?>
</head>
<body>
<center>
		<table style="width: 763px; min-height: 525px; height: 525px;"
			border="0" cellpadding="0" cellspacing="0">

			<tr>
				<td style="background-image: url(/wp-content/themes/sctheme/images/index_01.png)" width="19"
					height="17"></td>
				<td style="background-image: url(/wp-content/themes/sctheme/images/index_02.png)" width="719"
					height="17"></td>
				<td style="background-image: url(/wp-content/themes/sctheme/images/index_03.png)" width="25"
					height="17"></td>
			</tr>
			<tr>
				<td style="background-image: url(/wp-content/themes/sctheme/images/index_04.png)" width="19"></td>
				<td style="background-color: #FFFFFF" valign="top" align="left"><img
					src="/wp-content/themes/sctheme/images/header_new3.jpg">

					<div style="padding: 10px;">

						<ul id="nav">
							
							</li>
							<?php /*<li><a href="index.php?cat=instituut">instituut</a>
							</li>
							<li><a href="index.php?cat=producten">producten</a>
							</li>
							<li><a href="index.php?cat=behandeling">behandelingen</a>
							</li>
							<li><a href="index.php">home</a>
							</li>*/?>
<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
<li><a href="index.php">Home</a>
						</ul>
						
						<div id="content">