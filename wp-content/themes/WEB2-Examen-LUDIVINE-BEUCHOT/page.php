<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

 <div class="main-wrap" role="main">

   <div class="row">
     <div class="large-12 columns">
       <?php get_template_part( 'template-parts/featured-image' ); ?>
     </div>
   </div>

   <div class="row">
     <div class="large-12 columns">
       <?php do_action( 'foundationpress_before_content' ); ?>
       <?php while ( have_posts() ) : the_post(); ?>
       <article id="post-<?php the_ID(); ?>">
         <header>
           <h1 class="entry-title"><?php the_title(); ?></h1>
         </header>
         <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
         <div class="entry-content">
           <?php the_content(); ?>
         </div>
     </div>

     <div class="row">
       <nav class="large-12 columns" id="post-nav">
        <?php previous_post_link('%link', '<i class="post-previous fa fa-arrow-circle-left" aria-hidden="true"></i>', TRUE); ?>
        <?php next_post_link('%link', '<i class="post-next fa fa-arrow-circle-right" aria-hidden="true"></i>', TRUE); ?>
      </nav>
     </div>

   </div>


		<footer>
			<p>
		</footer>
	</article>
 <?php endwhile;?>

 </div>

 <?php get_footer();
