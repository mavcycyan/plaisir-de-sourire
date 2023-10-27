<?php
    function plaisir_breadcrumbs($id, $is_tax = false) {
        if ($id !== null) :
    ?>

        <div class="breadcrumbs">
            <a href="<?php echo get_home_url(); ?>" class="crumb home">
                <svg width="53" height="12" viewBox="0 0 53 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M51.5 6.75C51.9142 6.75 52.25 6.41421 52.25 6C52.25 5.58579 51.9142 5.25 51.5 5.25L51.5 6.75ZM0.969669 5.46967C0.676777 5.76257 0.676777 6.23744 0.969669 6.53033L5.74264 11.3033C6.03553 11.5962 6.51041 11.5962 6.8033 11.3033C7.0962 11.0104 7.0962 10.5355 6.8033 10.2426L2.56066 6L6.8033 1.75736C7.09619 1.46447 7.09619 0.989596 6.8033 0.696703C6.51041 0.40381 6.03553 0.40381 5.74264 0.696703L0.969669 5.46967ZM51.5 5.25L1.5 5.25L1.5 6.75L51.5 6.75L51.5 5.25Z" fill="white"/>
                </svg>
                Accueil
            </a>
            <?php if (!$is_tax) : ?>
                <?php $terms = wp_get_post_terms( $id, array( 'traitement', 'clinique' ) ); ?>
                <?php if (count($terms) > 0) : ?>
                    <a href="<?php echo get_term_link($terms[0]); ?>" class="crumb"><?php echo $terms[0]->name; ?></a>
                <?php endif; ?>
            <?php endif; ?>
            <span class="crumb last_crumb"><?php echo ($is_tax) ? get_term($id)->name : get_the_title($id); ?></span>
        </div>

    <?php
        endif;
    }