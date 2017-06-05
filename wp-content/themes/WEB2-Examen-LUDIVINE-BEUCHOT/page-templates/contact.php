<?php
/*
Template Name: Contact
*/

get_header(); ?>

 <div class="main-wrap" role="main">

	<article>

    <div class="row page-contact">

      <div class="large-12 columns">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.878539238785!2d7.787289615664319!3d48.57387507926071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c92714ce0199%3A0x6c9ef56f2525d737!2sRue+de+la+Coop%C3%A9rative%2C+67000+Strasbourg!5e0!3m2!1sfr!2sfr!4v1496687434459" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="large-12 columns end adresse-contact">
        <div><i class="fa fa-map-marker" aria-hidden="true"></i>   Rue de la Coopérative - 67000 STRASBOURG</div>
        <div><i class="fa fa-phone" aria-hidden="true"></i> 03.88.25.99.99</div>
        <div><i class="fa fa-envelope" aria-hidden="true"></i> la.cooperative@lacoop.fr</div>
      </div>

        <div class="row encart-bas-contact">

          <div class="large-6 medium-12 columns">
            <h2>Vous souhaitez plus de précisions ? Contactez-nous !</h2>
            <p>Une précision sur un projet, une proposition de partenariat ou tout simplement répondre à un appel à projet, n’hésitez pas à nous contacter !</p>
          </div>

          <div class="large-6 medium-12 columns">

            <form class="formulaire">
              <input type="text" placeholder="Nom & Prénom">
              <input type="email" placeholder="E-mail">
              <textarea name="message" id="" rows="12" placeholder="Écrivez votre message ici"></textarea>
              <div class="bouton-contact">
                <a href="#" class="button">ENVOYER</a>
              </div>
            </form>

          </div>

        </div>

    </div>

	</article>

</div>

<?php get_footer();
