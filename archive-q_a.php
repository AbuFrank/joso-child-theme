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

					<div id="qa-title">
						<h1>Frequently Asked Questions</h1>
					</div>

					<?php $count = 0; ?>
					<?php while ( have_posts() ) : the_post();
						// Add variables from q/a ACF
							$question = get_field('question');
							$answer = get_field('answer');			
					?>

					<article class="question-answer">
						
						<input type="checkbox" value="selected" id="thisID<?php echo($count); ?>" class="question-input">

						<!-- Question -->
						<label for="thisID<?php echo($count); ?>" class="qa-question">
							<div class="drop-down">
								<i class="fa fa-chevron-right" aria-hidden="true"></i>
							</div>
							<h3 class = "noselect" id="question">
							<?php echo $question ?>
							</h3>
						</label>

						<!-- Answer -->
						<section class="answer-box">
							<div class="answer-under">
							</div>
							<div class="answer-over">
								<h4 role="question-answer" class="qa-answer">
								<?php the_content() ?>
								</h4>
							</div>
						</section>

					</article>
					<?php $count++; ?>
					<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->

            <?php if ( $layout != 'no-sidebar' ) { ?>
                <?php get_sidebar(); ?>
            <?php } ?>

		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
