<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage chro
 * @since chro 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :
			?>
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that
				 * will be used instead.
				 */
				get_template_part( 'template-parts/post/content', get_post_format() );

			endwhile;

			the_posts_pagination(
				array(
					/* translators: Hidden accessibility text. */
					'prev_text'          => chro_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'chro' ) . '</span>',
					/* translators: Hidden accessibility text. */
					'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'chro' ) . '</span>' . chro_get_svg( array( 'icon' => 'arrow-right' ) ),
					/* translators: Hidden accessibility text. */
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'chro' ) . ' </span>',
				)
			);

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
