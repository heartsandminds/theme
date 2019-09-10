<?php
/**
 * The meet-the-team template file
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
    'post_type'        => 'people',
    'tax_query'        => array(
        array (
            'taxonomy' => 'role',
            'field'    => 'slug',
            'terms'    => 'team',
        )
    ),
    'posts_per_page'   => -1,
    'order'            => 'ASC'
 );

$who_we_help_query = new WP_Query( $args );

if ( $who_we_help_query->have_posts() ) : ?>
</div>
    <div class="o-team-members">
    <?php while ( $who_we_help_query->have_posts() ) : $who_we_help_query->the_post(); ?>
        <div class="m-team-member">
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
                <p class="m-team-member__title"><?php echo get_field( "title" ); ?></p>
                <a class="m-team-member__email" href="mailto:<?php echo get_field( "email" ); ?>"><?php echo get_field( "email" ); ?></a>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
 
<?php endif;

$args = array(
    'post_type'        => 'people',
    'tax_query'        => array(
        array (
            'taxonomy' => 'role',
            'field'    => 'slug',
            'terms'    => 'practitioner',
        )
    ),
    'posts_per_page'   => -1,
    'order'            => 'ASC'
 );

$who_we_help_query = new WP_Query( $args );

if ( $who_we_help_query->have_posts() ) : ?>
    <h2 class="a-heading u-underline u-align-center">Our practitioners</h2>
    <div class="o-team-members">
    <?php while ( $who_we_help_query->have_posts() ) : $who_we_help_query->the_post(); ?>
        <div class="m-team-member m-team-member--practitioner">
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
                <p class="m-team-member__description"><?php echo get_field( "description" ); ?></p>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
 
<?php endif;

$args = array(
    'post_type'        => 'people',
    'tax_query'        => array(
        array (
            'taxonomy' => 'role',
            'field'    => 'slug',
            'terms'    => 'trustee',
        )
    ),
    'posts_per_page'   => -1,
    'order'            => 'ASC'
 );

$who_we_help_query = new WP_Query( $args );

if ( $who_we_help_query->have_posts() ) : ?>
    <h2 class="a-heading u-underline u-align-center">Board of tustees</h2>
    <div class="o-team-members">
    <?php while ( $who_we_help_query->have_posts() ) : $who_we_help_query->the_post(); ?>
        <div class="m-team-member m-team-member--trustee">
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
                <p class="m-team-member__description"><?php echo get_field( "description" ); ?></p>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
 
<?php endif; ?>

</main>

<!-- Main content end -->
<?php
get_footer();
?>
