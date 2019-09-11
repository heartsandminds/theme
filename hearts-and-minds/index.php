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
    <div class="a-image">
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
 
<?php else : ?>
    <p><?php _e( 'No news articles are currently available.' ); ?></p>
<?php endif; ?>

</main>
<!-- Main content end -->
<?php
get_footer();
?>