<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package plaisir
 */

get_header();
?>

	<main class="single">

		<?php get_template_part( 'template-parts/secondary_hero', 'post' ); ?>

		<div class="single-wrap">
			<div class="container">
				<div class="content-block">
					<?php echo apply_filters('the_content',$post->post_content); ?>
				</div>

				<div class="back_button_wrap">
					<a href="<?php echo get_home_url(); ?>" class="btn">Retour</a>
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
