<?php
/*
Template Name: Teachers
*/
?>
<?php get_header('common'); ?>

<div class="content">
    <h2>Знай наших!</h2>
    <ul class="team">
        <?php query_posts('post_type=Teachers&order=ASC'); ?>
        <?php $counter = 0 ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li class="<?php if ($counter % 2 == 0){echo 'odd';} else {echo 'even';} ?>">
                <h3><?php the_title(); ?><span><?php the_field('rank'); ?></span></h3>
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                } ?>
                <?php the_content(); ?>
            </li>
            <?php $counter ++ ?>
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
    </ul>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>