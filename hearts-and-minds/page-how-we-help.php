<?php
/**
 * The how-we-help template file
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
		<h1 class="a-heading u-underline u-align-center"><?php the_title() ?></h1>
        <?php the_content() ?>
	<?php endwhile; endif; ?>
<?php 

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );

$who_we_help_query = new WP_Query( $args );

if ( $who_we_help_query->have_posts() ) : ?>
    <div class="o-cards">
    <?php while ( $who_we_help_query->have_posts() ) : $who_we_help_query->the_post(); ?>
        <div class="m-card">
            <div class="a-image ">
            <?php 
                if ( has_post_thumbnail() ) {
                ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                <?php
                } 
                ?>
            </div>
    
            <div class="m-card__text">
                <h3 class="a-heading m-card__heading">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
            </div>
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