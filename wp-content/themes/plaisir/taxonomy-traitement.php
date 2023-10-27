<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plaisir
 */

get_header();
?>

    <main class="categ_traitement">

        <?php get_template_part( 'template-parts/secondary_hero', 'taxonomy' ); ?>

        <div class="categ_traitement-wrap">
            <div class="container">
                <?php $term_img = get_field('ctrait-img', get_queried_object()); ?>
                <?php if ($term_img) : ?>
                    <div class="categ_traitement-img">
                        <span><img src="<?php echo $term_img['url']; ?>" alt="<?php echo get_queried_object()->name; ?>"></span>
                    </div>
                <?php endif; ?>
                <div class="content-block categ_traitement-descr">
                    <?php the_archive_description( '', '' ); ?>
                </div>
                <div class="categ_traitement-posts">
                    <?php if ( have_posts() ) : ?>
                        <div class="categ_traitement-posts-wrap">
                            <div class="categ_traitement-posts-img js-mainDevicesImg">
                                <span>
                                    <img src="<?php echo get_the_post_thumbnail_url($wp_query->posts[0]->ID, 'traitements'); ?>" alt="<?php echo $wp_query->posts[0]->post_title; ?>">
                                </span>
                            </div>
                            <div class="categ_traitement-posts-col">
                                <?php
                                $index = 1;
                                while ( have_posts() ) :
                                    the_post();
                                ?>
                                    <div class="categ_traitement-posts-bl js-mainDevicesImgChange" data-img="<?php the_post_thumbnail_url('traitements'); ?>">
                                        <a href="<?php the_permalink(); ?>" class="categ_traitement-posts-bl-ttl"><?php the_title(); ?></a>
                                        <div class="categ_traitement-posts-bl-btn">
                                            <a href="<?php the_permalink(); ?>" class="btn">Découvrir</a>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                                ?>
                            </div>
                        </div>
                    <?php
                    endif;
                    ?>
                </div>
                <?php $term_descr2 = get_field('ctrait-descr2', get_queried_object()); ?>
                <?php if ($term_descr2 && $term_descr2 != '') : ?>
                    <div class="content-block categ_traitement-descr2">
                        <?php echo $term_descr2; ?>
                    </div>
                <?php endif; ?>

                <div class="back_button_wrap">
                    <a href="<?php echo get_home_url(); ?>" class="btn">Retour</a>
                </div>
            </div>
        </div>
    </main>

<?php
get_footer();
