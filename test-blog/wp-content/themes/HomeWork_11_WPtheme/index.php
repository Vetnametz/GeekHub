<?php get_header(); ?>

<div class="content">
    <p class="main-aim">
        <?php echo get_theme_mod( 'textarea_setting', 'default_value' );?>
    </p>
    <p class="our-courses">Наші курси</p><!-- параграф? это же заголовок -->
    <ul class="courses-description">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li class="<?php body_class(); ?>" >
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php the_content(); ?>
            </li>
        <?php endwhile; endif; ?>
    </ul>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
