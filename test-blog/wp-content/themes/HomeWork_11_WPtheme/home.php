<?php get_header(); ?>

<div class="content">
    <p class="main-aim">
        <?php echo get_theme_mod( 'textarea_setting', 'default_value' );?>
    </p>
    <p class="our-courses">
        <?php $obj = get_post_type_object( 'course' );?>
        <?php echo $obj->labels->name;?>
    </p><!-- параграф? это же заголовок -->
    <ul class="courses-description">
        <?php query_posts('post_type=course&order=ASC'); ?>
        <?php $counter = 0 ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li id="post-<?php the_ID(); ?>" class="<?php if ($counter % 2 == 0){echo 'left-col';} else {echo 'right-col';} ?>">
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                } ?>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php the_content(); ?>
            </li>
            <?php $counter ++ ?>
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
    </ul>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>