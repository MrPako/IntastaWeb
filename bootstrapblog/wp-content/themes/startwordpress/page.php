<?php get_header(); ?>

	<div class="row">
		<div class="col-sm-6">

			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile; endif;
			?>
      <img class="img-fluid" src="http://qnimate.com/wp-content/uploads/2014/03/images2.jpg">
		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>
