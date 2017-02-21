<?php
/**
 * The template for displaying definitions.
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

					<div id="qa-title">
						<h1>Definitions</h1>
					</div>

					<?php $count = 0; ?>
					<div class = "definitions-container">
					<?php while ( have_posts() ) : the_post();
						// Add variables from q/a ACF
							$term = get_field('term');			
					?>
						<article class="definition-row<?php echo($count % 2) ?>">
					
							<!-- Term -->
							<div class="fancy-term">
								<p class="term-text">
									<strong><?php the_title() ?></strong>
								</p>
							</div>

							<!-- Definition -->
							<div class="define-content">
								<p class="content-text">
								<?php the_content() ?>
								</p>
							</div>
						
						</article>
					<?php $count++; ?>
					<?php endwhile; // End of the loop. ?>
					</div>
				</main><!-- #main -->
			</div><!-- #primary -->

            <?php if ( $layout != 'no-sidebar' ) { ?>
                <?php get_sidebar(); ?>
            <?php } ?>

		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
