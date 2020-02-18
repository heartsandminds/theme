<?php
/**
 * The about-us template file
 *
 * @package HeartsAndMinds
 * @since 1.0.0
 */

get_header();

if ( has_post_thumbnail() ) {
?>
<div class="c-hero">
	<div class="c-hero__image">
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
    'post_type'        => 'content',
    'posts_per_page'   => -1,
    'category__in'    => get_cat_ID('about-us'),
    'include_children' => false,
    'order'            => 'ASC',
    'orderby'          => 'menu_order'
);

$about_us_query = new WP_Query( $args );

if ( $about_us_query->have_posts() ) : ?> 
     <?php $counter = 0; ?>
    <?php while ( $about_us_query->have_posts() ) : $about_us_query->the_post(); ?>
    <?php $counter++; ?>
    <div class="t-content">
        <?php if($counter&1) { ?>
        <div class="t-content-left">
            <?php the_content(); ?>
        </div>
        <div class="t-content-right">
            <?php
            if ( has_post_thumbnail() ) {
            ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <?php
            } 
            ?>
        </div>
        <?php } else { ?>
        <div class="t-content-left">
            <?php
            if ( has_post_thumbnail() ) {
            ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <?php
            } 
            ?>
        </div>
        <div class="t-content-right">
            <?php the_content(); ?>
        </div>
        <?php } ?>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php
$args = array(
    'post_type'        => 'post',
    'posts_per_page'   => -1,
    'category__in'    => get_cat_ID('Our Impact'),
    'include_children' => false,
    'order'            => 'ASC',
    'orderby'          => 'menu_order'
);

$about_us_query = new WP_Query( $args );

if ( $about_us_query->have_posts() ) : ?> 
    <h2 class="a-heading u-underline u-align-center">Our Values</h2>
    <div class="c-cards c-cards--our-values">
    <?php while ( $about_us_query->have_posts() ) : $about_us_query->the_post(); ?>
        <a class="c-card" href="<?php the_permalink(); ?>">
            <div class="c-card__image c-card__image--values">
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
                <?php the_content(); ?>
            </div>
        </a>
    <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

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
    <h2 class="a-heading u-underline u-align-center">More about Hearts & Minds</h2>  
    <div class="c-cards">
    <?php while ( $who_we_help_query->have_posts() ) : $who_we_help_query->the_post(); ?>
        <a class="c-card" href="<?php the_permalink(); ?>">
            <div class="c-card__image c-card__image--narrow">
            <?php 
                if ( has_post_thumbnail() ) {
                ?>
                    <img src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="">
                <?php
                } 
                ?>
            </div>
    
            <div class="c-card__text">
                <h3 class="a-heading c-card__heading"><?php the_title(); ?></h3>
            </div>
        </a>
    <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
 
<?php endif; ?>
</main>

<!-- Main content end -->
<?php
get_footer();
?>