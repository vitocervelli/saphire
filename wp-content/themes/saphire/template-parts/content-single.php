<?php
/**
 * The template part for displaying single posts
 *
 */
?>

<article id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' );
		the_post_thumbnail('custom-size');

		 ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
