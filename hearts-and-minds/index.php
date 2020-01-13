<?php
/**
 * The main template file
 *
 * @package HeartsAndMinds
 * @since 1.0.0
 */

get_header();

$the_slug = 'news';
$args = array(
  'name'        => $the_slug,
  'post_type'   => 'page',
  'post_status' => 'publish',
  'numberposts' => 1
);
$news_post = get_posts($args);
if( $news_post ) {
?>
<div class="c-hero">
    <div class="c-hero__image">
        <img src="<?php echo get_the_post_thumbnail_url($news_post[0]->ID, 'full') ?>" alt="">
    </div>
</div>
<?php
};
?>

<!-- Main content start -->
<main class="t-full-width" id="main-section">
<h1 class="a-heading u-underline">News</h1>
<?php 
$news_query = new WP_Query( array( 'category_name' => 'news' ) );

if ( $news_query->have_posts() ) : ?>
    <div class="c-cards c-cards--blog">
    <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
        <a class="c-card" href="<?php the_permalink(); ?>">
            <div class="c-card__image c-card__image--blog">
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
                <div class="c-card__meta">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg>
                    <span><?php echo get_the_date(); ?></span>
                </div>
                <p class="a-text"><?php the_excerpt(); ?></p>
            </div>
        </a>
    <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'No news articles are currently available.' ); ?></p>
<?php endif; ?>

</main>
<!-- Main content end -->
<?php
get_footer();
?>