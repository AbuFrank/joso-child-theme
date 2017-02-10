<?php
/**
 * The template for displaying question and answers.
 *
 * This is the template that displays questions and answers by default.
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
						// Add variables from q/a ACF
							$question = get_field('question');
							$answer = get_field('answer');			
					?>

					<div class="page-header">
						<div class="container">
							<?php the_title( '<h1 class="mod-header">', '</h1>' ); ?>
						</div>
					</div>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<article class="question_answer">
					
						<!-- Question -->
						<h2 class="question">
						<?php echo $question ?>
						</h2>

						<!-- Answer -->
						<h3 class="answer">
						<?php echo $answer ?>
						</h3>

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
