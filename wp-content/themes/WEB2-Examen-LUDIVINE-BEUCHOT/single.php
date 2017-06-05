<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="main-wrap" role="main">
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<div class="row">
			<div class="large-12 columns">
				<?php get_template_part( 'template-parts/featured-image' ); ?>
			</div>
		</div>
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>

		</header>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		<footer>
			<div class="row liste-categorie">
				<?php the_category( ' ' ); ?>
			</div>

			<div class="row">
				<nav class="large-12 columns" id="post-nav">
				 <?php previous_post_link('%link', '<i class="post-previous fa fa-arrow-circle-left" aria-hidden="true"></i>', TRUE); ?>
				 <?php next_post_link('%link', '<i class="post-next fa fa-arrow-circle-right" aria-hidden="true"></i>', TRUE); ?>
			 </nav>
			</div>

			<p>
		</footer>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_sidebar(); ?>
</div>
<?php get_footer();
