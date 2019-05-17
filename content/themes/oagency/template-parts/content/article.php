<?php
get_header();

if ( have_posts() ) :
?>
<main>
<?php while (have_posts()) : the_post(); ?>
    <div class=<?php post_class( 'masonry' ); ?>>
        <div class="item">
            <img src="<?php the_post_thumbnail_url(); ?>">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            
        </div>
    </div>
<?php endwhile; ?>
</main>

<?php
endif; ?>

<section>
      <div class="widget">
        <div class="widget__title">
          <h3>oAgency</h3>
          <p>158 Allée de la  Garde<br>
            75001 Paris<br>
            01 23 45 45 45
          </p>
        </div>
        <div class="widget__pages">
          <h4>Pages</h4>
          <ul>
            <a href=""><li>Blog</li></a>
            <a href=""><li>Contactez-nous</li></a>
            <a href=""><li>Equipe</li></a>
            <a href=""><li>Homepage</li></a>
            <a href=""><li>Page de redirection</li></a>
            <a href=""><li>Partenaires</li></a>
            <a href=""><li>Projets</li></a>
            <a href=""><li>Sample Page</li></a>
            <a href=""><li>truc</li></a>
          </ul>
        </div>
        <div class="widget__team">
          <h4>Equipe</h4>
          <ul>
            <a href=""><li href="#">Equipe</li></a>
            <a href=""><li href="#">Partenaires</li></a>
          </ul>
        </div>
        <div class="widget__archive">
          <h4>Archive</h4>
          <ul>
            <a href=""><li href="#">avril 2017</li></a>
          </ul>
        </div>
      </div>
</section>
<?php
get_footer();