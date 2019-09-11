<?php
/**
 * The front page template file
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
		<h1 class="a-heading u-underline u-align-center"><?php the_title() ?></h1>
	<?php endwhile; endif; ?>
<?php 
$news_query = new WP_Query( array( 'category_name' => 'front-page' ) );

if ( $news_query->have_posts() ) : ?>
    <div class="c-cards">
    <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
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
                <p class="a-text "><?php the_excerpt(); ?></p>
            </div>

            <a class="c-card__link" href="<?php the_permalink(); ?>">
                Read more<span class="u-visually-hidden"> about <?php the_title(); ?></span>
            </a>  
        </div>
    <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>

<?php endif; ?>

<?php

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => 7,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
);

$who_we_help_query = new WP_Query($args);

if ( $who_we_help_query->have_posts() ) : ?>
    <h2 class="a-heading u-underline u-align-center">Who we help</h2>
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