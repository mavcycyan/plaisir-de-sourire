<?php
/**
 * The template for displaying cliniques archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plaisir
 */

get_header();
?>

	<main class="categ_clinique">

		<?php get_template_part( 'template-parts/secondary_hero', 'archive' ); ?>

		<div class="categ_clinique-wrap">
			<div class="container">
				<div class="js-catClinTermsScroll">
					<div class="categ_clinique-terms">
						<div class="categ_clinique-term js-catClinTerms active" data-categ="all">Tous</div>
						<?php
						$args = array(
							'number' => 10,
							'hide_empty' => false,
							'taxonomy' => 'clinique',
							'orderby' => 'term_id',
							'order' => 'DESC'
						);
						$terms = get_terms($args);

						if ( count($terms) > 0 ) :
							foreach ( $terms as $term ) :
							?>
							<div class="categ_clinique-term js-catClinTerms" data-categ="<?php echo $term->slug; ?>"><?php echo $term->name; ?></div>
						<?php
							endforeach;
						endif;

						?>
					</div>
				</div>
				<div class="categ_clinique-posts">
					<?php if ( have_posts() ) : ?>
						<div class="row">
							<?php
							$index = 1;
							while ( have_posts() ) :
								the_post();
								?>
								<?php $terms = wp_get_post_terms( $post->ID, array( 'clinique' ) ); ?>
								<div class="col-12 col-md-6 categ_clinique-posts-bl-wrap js-catClinPosts active" data-categ="<?php echo $terms[0]->slug; ?>">
									<div class="categ_clinique-posts-bl">
										<?php $clin = get_field('page-clinique-gal'); ?>
										<?php if (count($clin) > 0) : ?>
											<div class="categ_clinique-posts-bl-slider-wrap">
												<div class="categ_clinique-posts-bl-slider js-catClinSlider">
													<?php foreach ($clin as $c) : ?>
														<div class="categ_clinique-slide">
															<?php if (isset($c['img'])) : ?>
																<img src="<?php echo $c['img']['sizes']['clinique-gal'] ?>" alt="<?php the_title(); ?>">
															<?php endif; ?>
														</div>
													<?php endforeach; ?>
												</div>
												<div class="categ_clinique-posts-bl-slider-counter js-catClinSliderCount">1 / <?php echo count($clin); ?></div>
											</div>
										<?php endif; ?>
										<div class="categ_clinique-posts-bl-ttl"><?php the_title(); ?></div>
									</div>
								</div>
							<?php
							endwhile;
							?>
						</div>
					<?php
					endif;
					?>
				</div>

				<div class="back_button_wrap">
					<a href="<?php echo get_home_url(); ?>" class="btn">Retour</a>
				</div>
			</div>
		</div>
	</main>

<?php
get_footer();
