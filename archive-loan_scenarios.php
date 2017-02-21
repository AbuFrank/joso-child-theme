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
						?>

					<div class="page-header">
						<div class="container">
							<a href="<?php the_permalink() ?>">
								<?php the_title( '<h2 class="mod-header ls-title-header">', '</h2>' ); ?>
							</a>
						</div>
					</div>

					<article id="loan-scenario-archive" class="loan-scenario">
					
						<!-- Title and image section -->
						<h3 class="mod-header">Family owned <?php echo $business_type; ?> gets a <?php echo $loan_type; ?> at <?php echo $loan_rate ?> rate</h3>
						<div>
							<div id="photo-archive"><?php echo wp_get_attachment_image($featured_image, "medium") ?></div>
							<div id="story-archive"><?php the_excerpt() ?></div>
						</div>
						<h3 id="closing-title-archive" class="mod-header"><?php echo $loan_type ?></h3>
						

						
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
