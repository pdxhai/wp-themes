<?php get_header(); ?>


<div class="container">

  <div class="row">
    <div class="col-xs-12 col-md-8">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'odg' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'odg' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'odg' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'odg' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

		// End the loop.
		endwhile;
		?>

  </div>
  <div class="col-xs-12 col-md-4">
    <?php get_sidebar(); ?>
  </div>
</div>

</div><!-- /.container -->

<?php get_footer(); ?>
