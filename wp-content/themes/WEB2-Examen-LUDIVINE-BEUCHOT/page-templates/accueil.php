<?php
/*
Template Name: Accueil
*/
get_header(); ?>

<div class="main-wrap full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
    <div class="row premiere-partie-accueil">
			<div class="large-7 medium-12 columns image-une">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-image.png" alt="Image d'accueil">
			</div>
      <div class="large-5 columns texte-accueil-image">
          <h1 class="titre-accueil">RÉHABILITATION<br> DE LA COOP.</h1>
          <div class="contour-titre-accueil">
            <p>La ville de Strasbourg a présenté son projet de réhabilitation du quartier de l’ancienne Coopérative lors d’une conférence de presse le 10/04/2017. Au programme, des projets séduisants comme un FabLab, un café théâtre, des ateliers...</p>
            <a href="#">En savoir plus ></a>
          </div>
      </div>
		</div>

    <div class="row background-projets">

      <div class="large-3 medium-12 columns texte-projets">
        <h2>LES PROJETS</h2>
        <p>La ville de Strasbourg a présenté son projet de réhabilitation du quartier de l’ancienne Coopérative lors d’une conférence de presse le 10/04/2017. Au programme, des projets séduisants comme un FabLab, un café théâtre, des ateliers...</p>
      </div>
      <div class="items-projets">

        <a href="#"><div class="large-2 medium-3 small-6 columns ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fablab.png" alt="Fablab">
            <p>FabLab</p>
        </div></a>
        <a href="#"><div class="large-2 medium-3 small-6 columns ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/atelier.png" alt="Atelier d'artistes">
            <p>Atelier d'artistes</p>
        </div></a>
        <a href="#"><div class="large-2 medium-3 small-6 columns ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/expositions.png" alt="Expositions">
            <p>Expositions</p>
        </div></a>
        <a href="#"><div class="large-2 medium-3 small-6 columns ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cafemusique.png" alt="Café musique">
            <p>Café musique</p>
        </div></a>

      </div>

    </div>

    <div class="row conteneur-articles-recents">
      <?php
        $args = array( 'numberposts' => 3, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
        $postslist = get_posts( $args );
        echo '<ul id="latest_posts">';
         foreach ($postslist as $post) :  setup_postdata($post); ?>
         <div class="row">
           <div class="large-7 columns">
             <?php the_post_thumbnail(); ?>
           </div>
           <div class="large-5 columns">
             <a class="titre-home-taille" href="<?php the_permalink(); ?>" title="<?php the_title();?>"> <?php the_title(); ?></a><br>
            <div class="extrait-article"><?php the_excerpt(); ?></div>
           </div>
         </div>
        <?php endforeach; ?>
 </ul>
    </div>

    <div class="row background-map">

      <div class="large-7 small-12 columns map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.878539238785!2d7.787289615664319!3d48.57387507926071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c92714ce0199%3A0x6c9ef56f2525d737!2sRue+de+la+Coop%C3%A9rative%2C+67000+Strasbourg!5e0!3m2!1sfr!2sfr!4v1496589694076" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="large-5 medium-12 columns">
        <h2>BESOIN DE NOUS TROUVER?</h2>
        <br>
        <p><i class="fa fa-map-marker" aria-hidden="true"></i>
 Rue de la Coopérative 67000 Strasbourg</p>
        <p><i class="fa fa-phone" aria-hidden="true"></i> 03.88.25.99.99</p>
        <p><i class="fa fa-envelope" aria-hidden="true"></i> la.cooperative@lacoop.fr</p>
				<div class="bouton-contact">
					<a href="#" class="button">NOUS CONTACTER</a>
				</div>
      </div>

    </div>

  </div>

	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
