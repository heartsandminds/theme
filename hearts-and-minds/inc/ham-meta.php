<?php

function ham_title() {
	$title = 'Hearts and Minds';

    if (is_front_page()) {
        $title = "Home";
    }
    else if (is_home()) {
        $title = 'News';
    }
    else {
        $title = get_the_title();
    }

    return esc_html($title . ' - ' . get_bloginfo('name')); 
}

function ham_description($post) {
    $description = 'Improving lives one smile at a time';

    setup_postdata( $post );
    $excerpt = get_the_excerpt();

    if ($excerpt != '') {
        $description = $excerpt;
    }
    return esc_html($description);
}

?>
