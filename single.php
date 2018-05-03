<?php get_header();?>
<main>
	<div class="content">
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			the_content();

			// End of the loop.
		endwhile;
		?>
	</div>
</main>
<?php get_footer();?>