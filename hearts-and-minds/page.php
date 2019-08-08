<?php
/**
 * The main template file
 *
 * @package HeartsAndMinds
 * @since 1.0.0
 */

get_header();

if ( has_post_thumbnail() ) {
?>
<div class="m-hero">
	<div class="a-image">
		<img src="<?php the_post_thumbnail_url(); ?>" alt="">
	</div>
</div>
<?php
} 
?>

<!-- Main content start -->
<main class="t-full-width">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article>
			<h1 class="a-heading u-underline u-align-center"><?php the_title() ?></h1>
			<?php the_content() ?>
		</article>
	<?php endwhile; endif; ?>
</main>
<!-- Main content end -->
<?php
get_footer();
?>