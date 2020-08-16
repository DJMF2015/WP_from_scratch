<?php get_header(); ?>

<div class="row">

	<div class="col-sm-12">

		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();

		get_template_part( 'content', get_post_format() );

	endwhile; endif;
	?>
	<!-- utilises custom post type from functions.php -->
	<?php
	$args = array(
		'post_type'=> 'my post',
	);
   $my_loop = new WP_Query($args);
	if ($my_loop->have_posts()); while(	$custom_loop->have_post()) :
		$my_loop->the_post();
		$meta = get_post_meta($post->ID, 'my_fields', true);

		// <--content of post here-->
		?>
	<?php endwhile;	endif; //issue here...
	wp_reset_postdata();  ?>
</div> <!-- /.col -->

</div> <!-- /.row -->

<?php get_footer(); ?>
