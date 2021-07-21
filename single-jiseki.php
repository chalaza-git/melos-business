<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ThinkUpThemes
 */

get_header(); ?>

			<?php while ( have_posts() ) { the_post(); ?>


        <!-- カスタムフィールドの表示 -->
    <h1 class="post-title"></h1>
    <?php //タグの表示
    $tags = get_tags();
        foreach( $tags as $tag) { 
        echo '<span>',$tag->name ,'</span>';
        }
    ?>

    <?php $large= get_field('photo') ?>
    <p><img src="<?=$large['sizes']['medium_large'] ?>" alt="駒沢"></p>
    <p><?php echo get_field('hachusha') ?></p>
    <p><?php echo get_field('sekobasho') ?></p>
    <p><?php echo get_field('kansei') ?></p>
    <p><?php echo get_field('gaiyo') ?></p>
    <p><?php echo get_field('gijutsu') ?></p>

			<?php }; wp_reset_postdata(); ?>



<?php get_footer(); ?>