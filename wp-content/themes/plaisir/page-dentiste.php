<?php
/**
 * Template Name: Dentiste
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plaisir
 */

get_header();
?>

	<main class="page-dent">

		<?php get_template_part( 'template-parts/secondary_hero', 'post' ); ?>

		<div class="page-dent-wrap">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="page-dent-img">
							<span>
								<?php the_post_thumbnail('page-doctor'); ?>
							</span>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="content-block page-dent-txt">
							<?php echo apply_filters('the_content',$post->post_content); ?>
						</div>
					</div>
				</div>

				<div class="back_button_wrap">
					<a href="<?php echo get_home_url(); ?>" class="btn">Retour</a>
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
