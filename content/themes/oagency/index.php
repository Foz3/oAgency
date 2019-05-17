<?php get_header(); ?>

<?php
if ( have_posts() ) :
?>
<main>
<?php while (have_posts()) : the_post(); ?>
    <div class=<?php post_class( 'masonry' ); ?>>
        <div class="item">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <button type="button" class="btn btn-outline-secondary">Lire la suite</button>
        </div>
    </div>
<?php endwhile; ?>
</main>

<?php
endif;
?>

<?php get_footer(); ?>
