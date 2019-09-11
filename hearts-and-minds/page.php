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
<div class="c-hero">
	<div class="a-image">
		<img src="<?php the_post_thumbnail_url(); ?>" alt="">
	</div>
</div>
<?php
} 
?>

<!-- Main content start -->
<main class="t-full-width" id="main-section">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article>
			<h1 class="a-heading u-underline u-align-center"><?php the_title() ?></h1>
			<?php the_content() ?>
		</article>
	<?php endwhile; endif; ?>

<?php

$args = array(
	'post_type'      => 'page',
	'post__not_in'   => array($post->ID),
    'posts_per_page' => -1,
    'post_parent'    => wp_get_post_parent_id($post),
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );

$who_we_help_query = new WP_Query( $args );

if ( $who_we_help_query->have_posts() ) : ?>
	<?php 
	if($post->post_parent) {
	  $parent_title = get_the_title($post->post_parent);
	?>
    <h2 class="a-heading u-underline u-align-center"><?php echo $parent_title; ?></h2>
	<?php
	} 
	?>
    <div class="c-cards">
    <?php while ( $who_we_help_query->have_posts() ) : $who_we_help_query->the_post(); ?>
        <div class="c-card">
            <div class="a-image ">
            <?php 
                if ( has_post_thumbnail() ) {
                ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                <?php
                } 
                ?>
            </div>
    
            <div class="c-card__text">
                <h3 class="a-heading c-card__heading"><?php the_title(); ?></h3>
            </div>

            <a class="c-card__link" href="<?php the_permalink(); ?>">
                Read more<span class="u-visually-hidden"> about <?php the_title(); ?></span>
            </a>  
        </div>
    <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
 
<?php endif; ?>
</main>
<!-- Main content end -->
<?php
get_footer('donate');
?>