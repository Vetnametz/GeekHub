<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Shram-->
<!-- * Date: 18.03.14-->
<!-- * Time: 22:00-->
<!-- */ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HomeWork_11</title>
    <?php wp_head(); ?>
</head>
<body>
<div class="header-wrapper">
    <div class="header">

        <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
            <h1>
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>'
                   title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'
                   rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>'
                   alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                </a>
                GeekHub
            </h1>
        <?php endif; ?>

        <?php wp_nav_menu(array(
            'theme_location'  => 'main_nav',
            'menu_id'         => 'menu',
            'menu_class'      => false,
            'container'       => false
        )); ?>
        <ul id="social-net-links">
            <li class="vimeo"><a href="#">Vimeo</a></li>
            <li class="facebook"><a href="#">Facebook</a></li>
            <li class="vk"><a href="#">Vkontakte</a></li>
            <li class="twitter"><a href="#">Twitter</a></li>
            <li class="youtube"><a href="#">YouTube</a></li>
        </ul>
        <h3>Реєстрація на другий сезон відкрита!</h3>
        <p class="reg-button"><a href="#">Зареєструватися</a></p><!-- параграф? можно на а навесить-->
    </div>
</div>

<div class="content">
    <p class="main-aim">
        <?php echo get_theme_mod( 'textarea_setting', 'default_value' );?>
    </p>
    <p class="our-courses">Наші курси</p><!-- параграф? это же заголовок -->
    <ul class="courses-description">
<!--        post_type=Courses  cat=7-->
        <?php query_posts('post_type=Courses&order=ASC'); ?>
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


<ul class="sidebar">
    <?php if ( dynamic_sidebar('Home bottom sidebar') ) : else : endif; ?>
    <h3>Наші спонсори</h3><!-- это должно помещаться в одну строку -->
    <ul class="sponsors">
        <li class="de"><a href="#"></a></li><!-- если уже спрайтами делаешь, то соедени обычные и ховер изображения в один -->
        <li class="master_of_code"><a href="#"></a></li>
        <li class="gs"><a href="#"></a></li>
        <li class="unknown_partner_1"><a href="#"></a></li>
        <li class="unknown_partner_2"><a href="#"></a></li>
    </ul>
</ul>


<div class="footer">
    <?php wp_nav_menu(array(
        'theme_location'  => 'main_nav',
        'menu_id'         => 'footer-menu',
        'menu_class'      => false,
        'container'       => false
    )); ?>
    <p>&reg; Copyright <?php echo date('Y'); ?></p>
</div>
</body>
</html>
