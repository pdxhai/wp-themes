<?php get_header(); ?>


<div class="container">

  <div class="row">
    <div class="col-xs-12 col-md-8">

      <?php // Show the selected frontpage content.
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
          get_template_part( 'content', get_post_format() );
        endwhile;
      else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
        get_template_part( 'content', 'none' );
      endif; ?>

    </div>
    <div class="col-xs-12 col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>

</div><!-- /.container -->

<?php get_footer(); ?>
