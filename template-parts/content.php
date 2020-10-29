<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package London_and_Newcastle_2020
 */

?>

<div id="post-<?php the_ID(); ?>" class="post p2 p-responsive wrap" role="main">
    <div class="post-header mb2">
      <h3 class="h2 post-title">
		<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		?>
	  </h3>
	</div>
	
	<div class="measure">
      <article class="post-content">
        <div class="post-image">
			<?php londonandnewcastle2020_post_thumbnail(); ?>
        </div>
        <?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'londonandnewcastle2020' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'londonandnewcastle2020' ),
				'after'  => '</div>',
			)
		);
		?>
		</article>
	  
	  <div class="post-info">
	  		<?php if ( 'post' === get_post_type() ) : ?>
				<?php
				londonandnewcastle2020_posted_on();
				londonandnewcastle2020_posted_by();
				?>
			<?php endif; ?>

		</div>
		<?php londonandnewcastle2020_entry_footer(); ?>
	  </div>
  </div>
</div> <!-- #post-<?php the_ID(); ?> -->