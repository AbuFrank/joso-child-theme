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
					<!--count to distinguish left and right-->
					<?php $count==0; ?>
					<?php while ( have_posts() ) : the_post(); 
						// Add variables for ACF 'Loan Types'
						$image = get_field('image');
						$loan_type = get_field('loan_type');
						$loan_rate = get_field('loan_rate');
						$location = get_field('location');
						$excerpt = get_field('excerpt');
						$subtitle = get_field('subtitle');
					  ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>

						<!--Closing Tile left and right with php-->
						<article class = "closing-tile <?php if ($count % 2 == 0) {echo "left";} else {echo "right";}?>-tile wow slideInUp" style = "visibility: visible; animation-name: slideInUp;">
							<?php echo wp_get_attachment_image($image, "medium") ?>
							<div class = "close-info">
								<?php the_title('<h3 class = "close-name">', '</h3>'); ?>
								<h5><?php echo $subtitle ?></h5>
								<p>
									<?php echo $excerpt ?>
								</p>
								<p class="close-bullets">
									<?php echo $loan_type ?> at 
									<?php echo $loan_rate ?></br>
									<?php echo $location ?>
									 
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
