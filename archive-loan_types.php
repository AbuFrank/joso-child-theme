<?php
/**
 * The template for displaying Loan Types.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OnePress
 */

get_header();

$layout = get_theme_mod( 'onepress_layout', 'right-sidebar' );
?>

	<div id="content" class="site-content">
 
<!-- 		<div class="page-header">
			<div class="container">
				<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>
 -->
		<?php echo onepress_breadcrumb(); ?>

		<div id="content-inside" class="container">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php $count = 0; ?>
					<?php while ( have_posts() ) : the_post(); 
						// Add variables for ACF 'Loan Types'
						$type = get_field('type');
						$descr = get_field('description');
						$icon = get_field('icon');
					  ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>


						<article>
								<div class = "loan-type wow slideInUp" style = "visibility: visible; animation-name: slideInUp;">
									<?php if ($count % 2 == 0) { ?>
										<div class = "loan-type-media icon-left">
									<?php } else { ?>
										<div class = "loan-type-media icon-right">
									<?php } ?>
										<span class = "fa-stack fa-5x">
											<i class="fa fa-circle fa-stack-2x loan-type-icon-background"></i>
											<?php  echo $icon ?>
										</span>
									</div>
									<div class = "loan-type-content">
										<h2><?php echo $type ?></h2>
										<p class = "text-stuff"><?php echo $descr ?></p>
									</div>
								</div>
						</article>

						<?php $count++; ?>

					<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
