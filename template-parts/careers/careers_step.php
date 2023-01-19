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
    ?>

    <article class="column size-1 process-icon">
        <div class="icon-wrap">
            <img src="<?php echo esc_url($icon['url']);?>" alt="">
        </div>
        <h4><?php echo esc_html( $title );?></h4>
    </article>

