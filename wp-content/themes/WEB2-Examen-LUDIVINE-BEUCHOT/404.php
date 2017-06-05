<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

 <div class="main-wrap" role="main">
	<article>
    <div class="row page-404">
      <div class="large-12 columns 404-page">
        <h1>PAGE 404</h1>
        <h3>Désolé, cette page est introuvable ou a été supprimée...</h3>
        <p>Pour revenir à la page principale, cliquez sur le bouton ci-dessous !</p>
      </div>
      <a href="javascript:history.go(-1)" class="button">RETOUR</a>
    </div>
	</article>

</div>

<?php get_footer();
