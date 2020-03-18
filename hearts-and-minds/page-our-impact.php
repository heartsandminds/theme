<?php
/**
 * The our-impact template file
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
<main class="t-full-width" id="main-section">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1 class="a-heading u-underline u-align-center"><?php the_title() ?></h1>
        <div class="a-sub-heading u-align-center">
            <?php the_content() ?>
        </div>
	<?php endwhile; endif; ?>
<?php 

$args = array(
    'post_type'        => 'content',
    'posts_per_page'   => -1,
    'order'            => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'type',
            'field' => 'slug',
            'terms' => array ('our-impact')
        )
    )
);

$about_us_query = new WP_Query( $args );

if ( $about_us_query->have_posts() ) : ?>
    <div class="a-sub-heading u-align-center">
        <h2>In 2018/19</h2>
    </div>
    <div class="c-cards c-cards--our-impact">
    <?php while ( $about_us_query->have_posts() ) : $about_us_query->the_post(); ?>
        <div class="c-card">
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
                <p class="a-heading c-card__heading"><?php the_title(); ?></p>
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
<?php endif;

$args = array(
    'posts_per_page'   => 3,
    'order'            => 'DESC',
    'category_name'    => 'case-studies'
);

$news_query = new WP_Query($args);

if ( $news_query->have_posts() ) : ?>
    <h2 class="a-heading u-underline u-align-center">Case studies</h2>
    <div class="c-cards">
    <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
        <a class="c-card" href="<?php the_permalink(); ?>">
            <div class="c-card__image">
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
                <p class="a-text "><?php echo get_the_excerpt(); ?></p>
            </div>
        </a>
    <?php endwhile; ?>
    </div>

<?php endif;

$args = array(
    'post_type'        => 'content',
    'posts_per_page'   => -1,
    'order'            => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'type',
            'field' => 'slug',
            'terms' => array ('survey-results')
        )
    )
);

$about_us_query = new WP_Query( $args );

if ( $about_us_query->have_posts() ) : ?>
    <div class="a-sub-heading u-align-center">
        <h2>Staff working alongside Hearts & Minds agree that:</h2>
    </div>
    <div class="c-cards c-cards--survey-results">
    <?php while ( $about_us_query->have_posts() ) : $about_us_query->the_post(); ?>
        <div class="c-card">
            <div class="c-card__image c-card__image--narrow">
            <?php 
                if ( has_post_thumbnail() ) {
                ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                <?php
                } 
                ?>
            </div>

            <div class="c-card__text">
                <p class="a-heading c-card__heading"><?php the_title(); ?></p>
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif;?>
</main>

<!-- Main content end -->
<?php
get_footer();
?>