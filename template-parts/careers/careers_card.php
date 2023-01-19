<?php
/**
 * Template part for displaying a locations's neighbors
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;

?>

<?php 
    $icon = get_sub_field('icon');
    $title = get_sub_field('title');
    $content = get_sub_field('content');
    ?>

    <article class="career card">
        <header>
            <div class="card-image">
                <img src="<?php echo esc_url( $icon['url']);?>" alt="">
            </div>
            <h4 class="title"><?php echo esc_html( $title ); ?></h4>
        </header>
        <div class="entry-content">
            <?php the_sub_field('content'); ?>
        </div>
    </article>

