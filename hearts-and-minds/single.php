<?php
/**
 * The blog article template file
 *
 * @package HeartsAndMinds
 * @since 1.0.0
 */

get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="c-hero-blog-wrapper">
    <div class="c-hero-blog">
        <div class="c-hero-blog__content">
            <h1 class="c-hero-blog__title"><?php the_title() ?></h1>
            <div class="c-hero-blog__meta">
                <div class="c-hero-blog__date">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg>
                    <span><?php echo get_the_date(); ?></span>
                </div>
                <div class="c-hero-blog__author">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M248 104c-53 0-96 43-96 96s43 96 96 96 96-43 96-96-43-96-96-96zm0 144c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm0-240C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-49.7 0-95.1-18.3-130.1-48.4 14.9-23 40.4-38.6 69.6-39.5 20.8 6.4 40.6 9.6 60.5 9.6s39.7-3.1 60.5-9.6c29.2 1 54.7 16.5 69.6 39.5-35 30.1-80.4 48.4-130.1 48.4zm162.7-84.1c-24.4-31.4-62.1-51.9-105.1-51.9-10.2 0-26 9.6-57.6 9.6-31.5 0-47.4-9.6-57.6-9.6-42.9 0-80.6 20.5-105.1 51.9C61.9 339.2 48 299.2 48 256c0-110.3 89.7-200 200-200s200 89.7 200 200c0 43.2-13.9 83.2-37.3 115.9z"/></svg>
                    <span><?php the_author(); ?></span>
                </div>
            </div>
        </div>
        <div class="c-hero-blog__image">
            <?php 
                if (has_post_thumbnail()) {
                ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption(); ?>">
                <?php
                } 
            ?>
        </div>
    </div>
</div>

<!-- Main content start -->
<main class="t-full-width" id="main-section">
    <article>
        <div class="t-blog-article">
            <div class="t-blog-article-content">
                <?php the_content() ?>
                <?php
                    $post_object = get_field('team_member');

                    if ($post_object): 
                        $post = $post_object;
                        setup_postdata($post); 
                        ?>
                        <div class="c-team-member c-team-member--author">
                            <div class="a-image c-team-member__image">
                                <?php 
                                    if (has_post_thumbnail()) {
                                    ?>
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?> profile picture">
                                    <?php
                                    } 
                                ?>
                            </div>
                            <div class="c-team-member__text">
                                <p class="c-team-member__name"><?php the_title(); ?></p>
                                <p class="c-team-member__title"><?php echo get_field( "title" ); ?></p>
                                <a class="c-team-member__email" href="mailto:<?php echo get_field( "email" ); ?>"><?php echo get_field( "email" ); ?></a>
                            </div>
                        </div>
                        <?php wp_reset_postdata(); 
                    endif;
                ?>
            </div>
            <div class="t-blog-article-latest">
                <h2 class="u-color-primary u-h1-blog">Latest articles</h2>
                <ul class="c-latest-articles">
                <?php
                    $args = array(
                        'numberposts'   => '5',
                        'category__in'  => get_cat_ID('News'),
                    );
                    $recent_posts = wp_get_recent_posts($args);
                    foreach ($recent_posts as $recent) { ?>
                        <li class="c-latest-article">
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="c-latest-article__image" style="background-image: url(<?php echo get_the_post_thumbnail_url($recent["ID"]); ?>)"></div>
                            <?php } ?> 
                            <div class="c-latest-article__details">
                                <a href="<?php echo get_permalink($recent["ID"]) ?>"><?php echo $recent["post_title"] ?></a>
                                <div class="c-latest-article__meta">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg>
                                    <span><?php echo get_the_date(); ?></span>
                                </div>
                            </div>
                        </li>
                    <?php
                    }
                    wp_reset_query();
                ?>
                </ul>
            </div>
        </div>
    </article>
</main>
<!-- Main content end -->
<?php 
endwhile; endif;

get_footer();
?>