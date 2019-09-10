<?php
/**
 * The blog article template file
 *
 * @package HeartsAndMinds
 * @since 1.0.0
 */

get_header();
?>
<!-- Main content start -->
<main class="t-full-width" id="main-section">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
        <div class="c-blog-hero">
            <h1 class="a-heading u-underline"><?php the_title() ?></h1>
            <div class="c-blog-hero__meta">
                <div class="c-blog-hero-date"></div>
                <div class="c-blog-hero-author"></div>
            </div>
            <div class="c-blog-hero__image">
            <?php 
                if (has_post_thumbnail()) {
                ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption(); ?>">
                <?php
                } 
                ?>
            </div>
        </div>
        <div class="t-blog-article">
            <div class="t-blog-article-content">
                <?php the_content() ?>
                <div class="m-team-member m-team-member--author">
                    <div class="a-image m-team-member__image">
                        <?php 
                            if ( has_post_thumbnail() ) {
                            ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?> profile picture">
                            <?php
                            } 
                        ?>
                    </div>
                    <div class="m-team-member__text">
                        <p class="m-team-member__name"><?php the_title(); ?></p>
                        <p class="m-team-member__title"><?php echo get_field( "description" ); ?></p>
                        <a class="m-team-member__email" href="mailto:<?php echo get_field( "email" ); ?>"><?php echo get_field( "email" ); ?></a>
                    </div>
                </div>
            </div>
            <div class="t-blog-article-latest">

            </div>
        </div>
    </article>
<?php endwhile; endif; ?>
</main>
<!-- Main content end -->
<?php
get_footer();
?>