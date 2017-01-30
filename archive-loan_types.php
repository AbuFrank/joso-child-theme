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


						<article class = "loan-type">
							<?php if ($count % 2 == 0) { ?>
								<span class = "loan-icon"><?php echo $icon ?></span>
								<span class = "loan-type-content">
									<h2 class = "loan-type-heading"><?php echo $type ?></h2>
									<p class = "loan-type-description"><?php echo $descr ?></p>
								</span>
							<?php } else { ?>
								<span class = "loan-type-content">
									<h2 class = "loan-type-heading"><?php echo $type ?></h2>
									<p class = "loan-type-description"><?php echo $descr ?></p>
								</span>
								<span class = "loan-icon"><?php echo $icon ?></span> 
							<?php } ?>
						</article>

						<?php $count++; ?>

					<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
