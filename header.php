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
			<div class="logo-unearte"><a href="<?php print bloginfo('home'); ?>"><img src="<?php print get_template_directory_uri(); ?>/images/logo-unearte.png" alt="img1"></a></div>
			<div class="logo-ciat"><img src="<?php print get_template_directory_uri(); ?>/images/logo-ciat.png" alt="img2"></div>
			<div class="search-form">
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
					<div class="inner-form">
						<input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
						<input type="submit" id="searchsubmit" value="Buscar" class="btn" />
					</div>
				</form>
			</div>
		</div>
	</header>

	<section id="content">
		<div class="inner-content">
