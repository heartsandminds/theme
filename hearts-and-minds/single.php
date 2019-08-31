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
        <h1 class="a-heading u-underline"><?php the_title() ?></h1>
        <?php the_content() ?>
    </article>
<?php endwhile; endif; ?>
</main>
<!-- Main content end -->
<?php
get_footer();
?>