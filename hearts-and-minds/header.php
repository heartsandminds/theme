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
<title>Hearts and Minds</title>
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/icons/favicon.png">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" type="text/css" media="all">
<?php do_action('wp_head'); ?>
</head>
<body>
<div class="m-skip-links">
	<a class="m-skip-links__link" href="#main-section">Skip to main content</a>
</div>
<header class="o-header" role="banner">
	<div class="o-header__content">
		<a href="<?php echo home_url(); ?>" class="m-logo-link">
			<img class="a-logo" src="<?php bloginfo('template_directory'); ?>/images/logo/logo.png" alt="hearts and minds logo">
		</a>
		<button class="m-global-navigation__menu-button">Menu</button>
		<nav class="m-global-navigation">
			<ul class="m-global-navigation__list">
				<li class="m-global-navigation__list-item"><a class="a-menu-link" href="who-we-help">Who we help</a> </li>
				<li class="m-global-navigation__list-item"><a class="a-menu-link" href="how-we-help">How we help</a> </li>
				<li class="m-global-navigation__list-item"><a class="a-menu-link" href="about-us">About us</a> </li>
				<li class="m-global-navigation__list-item"><a class="a-menu-link" href="news">News</a></li>
				<li class="m-global-navigation__list-item"><a class="a-menu-link" href="get-involved">Get invloved</a> </li>
				<li class="m-global-navigation__list-item">
					<button class="a-button">
						<span class="a-icon">
							<svg viewBox="0 0 512 512"><path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path></svg>
						</span>
						Donate now
					</button>
				</li>
			</ul>
		</nav>
	</div>
</header>
