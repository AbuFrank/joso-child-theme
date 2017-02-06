<?php
/**
 * The template for displaying Closings.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OnePress
 */

get_header();

?>

	<!--<div id="content" class="site-content">-->
 
<!-- 		<div class="page-header">
			<div class="container">
				<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>
 -->
		<?php echo onepress_breadcrumb(); ?>

		<div id="content-inside" class="container">
			
				<main id="main" class="site-main" role="main">
					<?php $count==0; ?>
					<?php while ( have_posts() ) : the_post(); 
						// Add variables for ACF 'Loan Types'
						$image = get_field('image');
						$loan_type = get_field('loan_type');
						$loan_rate = get_field('loan_rate');
						$location = get_field('location')
					  ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>

						<?php if ($count % 2 == 0) { ?>
						<article class = "closing-tile left-tile wow slideInUp" style = "visibility: visible; animation-name: slideInUp;">
						<?php } else { ?>
						<article class = "closing-tile right-tile wow slideInUp" style = "visibility: visible; animation-name: slideInUp;">
						<?php } ?>
							<?php the_title('<h2 class = "close-name">', '</h1>'); ?>
							<div class = "close-image">
								<?php echo wp_get_attachment_image($image, "medium") ?>
							</div>
							<div class = "close-info">
								<p>
									<?php echo $loan_rate ?> |
									<?php echo $location ?> |
									<?php echo $loan_type ?>
								</p>
							</div>
						</article>
					<?php $count++; ?>
					<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		<!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
