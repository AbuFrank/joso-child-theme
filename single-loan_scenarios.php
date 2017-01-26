<?php
/**
 * The template for displaying loan scenarios.
 *
 * This is the template that displays loan scenarios by default.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OnePress
 */

get_header();

$layout = get_theme_mod( 'onepress_layout', 'right-sidebar' );
?>

	<div id="content" class="site-content">

		<div class="page-header">
			<div class="container">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>

		<?php echo onepress_breadcrumb(); ?>

		<div id="content-inside" class="container <?php echo esc_attr( $layout ); ?>">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post();
						// Add variables from ACF
							$featured_image = get_field('featured_image');
							$business_type = get_field('business_type');
							$loan_type = get_field('loan_type');
							$loan_rate = get_field('loan_rate');
							$business_story = get_field('business_story');
							$closing_highlights = get_field('closing_highlights');
							$loan_program_details = get_field('loan_program_details');
							$loan_program_icon = get_field('loan_program_icon');
							$size = "large";
						?>


						<?php get_template_part( 'template-parts/content', 'page' ); ?>
					<article class="loan-scenario">
						<h2><?php echo $business_type; ?> <?php echo $loan_type; ?> <?php echo $loan_rate ?></h2>
						<div><?php echo wp_get_attachment_image($featured_image, $size) ?></div>
						<p><?php echo $business_story ?></p>
						<div><?php echo $closing_highlights ?></div>
						<div><?php echo wp_get_attachment_image($loan_program_icon, $size) ?><?php echo $loan_program_details ?></div>
					</article>
					<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->

            <?php if ( $layout != 'no-sidebar' ) { ?>
                <?php get_sidebar(); ?>
            <?php } ?>

		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
