<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HomeWork_11</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
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
            <?php if ( get_theme_mod( 'vimeo_social_links_href' ) ) : ?>
                <li class="vimeo">
                    <a href="<?php echo esc_url( get_theme_mod( 'vimeo_social_links_href' ) ); ?>">Vimeo</a>
                </li>
            <? else: ?>
                <li class="vimeo" style="display: none"><a href="#">Vimeo</a></li>
            <?php endif; ?>

            <?php if ( get_theme_mod( 'fb_social_links_href' ) ) : ?>
                <li class="facebook">
                    <a href="<?php echo esc_url( get_theme_mod( 'fb_social_links_href' ) ); ?>">Facebook</a>
                </li>
            <? else: ?>
                <li class="facebook" style="display: none"><a href="#">Facebook</a></li>
            <?php endif; ?>

            <?php if ( get_theme_mod( 'vk_social_links_href' ) ) : ?>
                <li class="vk">
                    <a href="<?php echo esc_url( get_theme_mod( 'vk_social_links_href' ) ); ?>">Vkontakte</a>
                </li>
            <? else: ?>
                <li class="vk" style="display: none"><a href="#">Vkontakte</a></li>
            <?php endif; ?>

            <?php if ( get_theme_mod( 'twitter_social_links_href' ) ) : ?>
                <li class="twitter">
                    <a href="<?php echo esc_url( get_theme_mod( 'twitter_social_links_href' ) ); ?>">Twitter</a>
                </li>
            <? else: ?>
                <li class="twitter" style="display: none"><a href="#">Twitter</a></li>
            <?php endif; ?>

            <?php if ( get_theme_mod( 'youtube_social_links_href' ) ) : ?>
                <li class="youtube">
                    <a href="<?php echo esc_url( get_theme_mod( 'youtube_social_links_href' ) ); ?>">YouTube</a>
                </li>
            <? else: ?>
                <li class="youtube" style="display: none"><a href="#">YouTube</a></li>
            <?php endif; ?>
        </ul>

        <h3>Реєстрація на другий сезон відкрита!</h3>
        <p class="reg-button"><a href="#">Зареєструватися</a></p><!-- параграф? можно на а навесить-->
    </div>
</div>