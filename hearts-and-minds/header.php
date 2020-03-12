<?php
/**
 * The header template file
 *
 * @package HeartsAndMinds
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html lang="en-gb">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
<?php 
	$title = ham_title();
	$description = ham_description($post);
	$image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
?>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">
<meta property="og:locale" content="en_GB">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:url" content="<?php the_permalink(); ?>">
<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>">
<meta property="og:image" content="<?php the_post_thumbnail_url('medium'); ?>">
<meta property="og:image:alt" content="<?php echo $image_alt; ?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="<?php echo $description; ?>">
<meta name="twitter:title" content="<?php echo $title; ?>">
<meta name="twitter:site" content="@heartsmindsUK">
<meta name="twitter:creator" content="@heartsmindsUK">
<meta name="twitter:image" content="<?php the_post_thumbnail_url('medium'); ?>">
<meta name="twitter:image:alt" content="<?php echo $image_alt ?>">
<?php
	$options = get_option('ham_options');
	if (isset($options['google_verification']) && $options['google_verification'] != '') { ?>
	<meta name="google-site-verification" content="<?php echo $options['google_verification']; ?>">
	<?php
	}
	if (isset($options['yahoo_verification']) && $options['yahoo_verification'] != '') { ?>
	<meta name="y_key" content="<?php echo $options['yahoo_verification']; ?>">
	<?php
	}
	if (isset($options['bing_verification']) && $options['bing_verification'] != '') { ?>
	<meta name="msvalidate.01" content="<?php echo $options['bing_verification']; ?>">
	<?php
	}
?>
<meta name=”robots” content="index, follow">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/icons/favicon.png">
<link rel="preload" href="<?php bloginfo('template_directory'); ?>/assets/fonts/OpenSans-Regular.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="preload" href="<?php bloginfo('template_directory'); ?>/assets/fonts/OpenSans-Bold.woff2" as="font" type="font/woff2" crossorigin="">
<style>
<?php include 'assets/css/style.css'; ?>
</style>
<?php do_action('wp_head'); ?>
</head>
<body>
<div class="c-skip-links">
	<a class="c-skip-links__link" href="#main-section">Skip to main content</a>
</div>
<header class="c-header" role="banner">
	<div class="c-header__content">
		<a href="<?php echo home_url(); ?>" class="c-logo-link">
			<img class="a-logo" src="<?php bloginfo('template_directory'); ?>/assets/images/logo/logo.png" alt="hearts and minds logo">
		</a>
		<button class="c-global-navigation__menu-button">
			<div class="c-global-navigation__menu-icon">
				<div></div>
			</div>
			Menu
		</button>
		<nav class="c-global-navigation">
        <?php
			wp_nav_menu(
				array( 
					'theme_location' => 'header-menu',
					'menu_class' => 'c-global-navigation__list'
				)
			);
			?>
			<a href=" https://uk.virginmoneygiving.com/donation-web/charity?charityId=1009213&stop_mobi=yes" target="_blank" rel="noopener" class="a-button">
				<span class="a-icon">
					<svg viewBox="0 0 512 512"><path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path></svg>
				</span>
				Donate now
			</a>
		</nav>
	</div>
</header>
