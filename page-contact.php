<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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

		

<?php get_footer(); ?>
