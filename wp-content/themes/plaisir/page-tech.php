<?php
/**
 * Template Name: Nos Technologies
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

	<main class="page-tech">

		<?php get_template_part( 'template-parts/secondary_hero', 'post' ); ?>

		<div class="page-tech-wrap">
			<div class="container">
				<?php $tech = get_field('page-tech'); ?>
				<?php if (count($tech) > 0) : ?>
					<div>
						<?php foreach ($tech as $t) : ?>
							<div class="page-tech-bl"  data-aos="fade-up" data-aos-duration="1000">
								<div class="page-tech-bl-left">
									<div class="page-tech-bl-img" <?php echo (isset($t['img'])) ? 'style="background-image:url(\'' . $t['img']['sizes']['tech'] . '\');"' : ''; ?>></div>
								</div>
								<div class="page-tech-bl-right">
									<div class="page-tech-bl-ttl"><?php echo $t['ttl']; ?></div>
									<div class="page-tech-bl-txt"><?php echo $t['txt']; ?></div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

				<div class="back_button_wrap">
					<a href="<?php echo get_home_url(); ?>" class="btn">Retour</a>
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
