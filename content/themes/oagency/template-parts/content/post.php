<?php

$blog_posts_count = get_theme_mod(
    'oagency_blogposts_count',
    6
);

$last_posts_query = new WP_Query([
    'post_type'      => 'post',
    'order'          => 'DESC',
    'posts_per_page' => $blog_posts_count
]);

if ( $last_posts_query->have_posts() ) :
?>
<main>
    <?php while ($last_posts_query->have_posts()) : $last_posts_query->the_post(); ?>
        <div class=<?php post_class( 'masonry' ); ?>>
            <div class="item">
                <img src="<?php the_post_thumbnail_url(); ?>">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
                <a class="btn btn-outline-secondary" href="<?php the_permalink(); ?>">Lire la suite</a>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</main>
<?php
endif;

