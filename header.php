<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
	<?php bloginfo('name'); ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>

<!--<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php// bloginfo( 'pingback_url' ); ?>" />-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<header id="header">
		<div class="inner-header">
			<div class="logo-unearte"><img src="<?php print get_template_directory_uri(); ?>/images/logo-unearte.png" alt="img1"></div>
			<div class="logo-ciat"><img src="<?php print get_template_directory_uri(); ?>/images/logo-ciat.png" alt="img2"></div>
		</div>
	</header>

	<section id="content">
		<div class="inner-content">
