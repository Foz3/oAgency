<?php get_header(); ?>
<?php 
  $carousel_active = get_theme_mod(
    'oagency_carousel_active',
    true
  );

if ( $carousel_active) : ?>

  <section>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php the_post_thumbnail_url(); ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="carousel__title">Partenaires</h5>
              <button type="button" class="carousel__button btn btn-primary">Découvrir</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php the_post_thumbnail_url(); ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="carousel__title">Partenaires</h5>
                <button type="button" class="carousel__button btn btn-primary">Découvrir</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php the_post_thumbnail_url(); ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="carousel__title">Partenaires</h5>
                <button type="button" class="carousel__button btn btn-primary">Découvrir</button>
            </div>
          </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
  </section>
<?php endif; ?>  
<?php 
require get_theme_file_path( 'template-parts/content/post.php' );
?>

<?php
$calltoaction_active = get_theme_mod(
  'oagency_calltoaction_active',
  true
);

if ( $calltoaction_active ): ?>

  <section>
    <div class="banner" style="background-image:url(visuels/montagne.jpg);">
      <h2 class="banner__title">Hello</h2>
        <p class="banner__content">Call to action - Lorem blablbalba c'est génial j'adore</p>
      <div class="banner__button">
          <button type="button" class="banner__button_item btn btn-warning">Button Click</button>
          <button type="button" class="banner__button_item btn btn-success">Another Button</button>
      </div>  
    </div>  
  </section>
<?php endif; ?>

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
<?php get_footer(); ?>
