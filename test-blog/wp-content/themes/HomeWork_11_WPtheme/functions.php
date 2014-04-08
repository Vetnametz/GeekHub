<?php
/**
 * Register CSS styles here.
 **/
load_theme_textdomain ('geekhub', get_template_directory() . '/languages');
/**
 * Register CSS styles here.
 **/
function theme_styles() {
    wp_enqueue_style( 'geekhub-style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'theme_styles');
/**
 * Register menu areas here.
 **/
register_nav_menus (
    array(
        'main_nav' => 'Main Nav'
    )
);

add_theme_support( 'post-thumbnails' );
/**
 * Register sidebars and widgetized areas here.
 **/
function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'Home bottom sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<li>',
        'after_widget' => '</li>',
        'before_title' => '',
        'after_title' => '',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
///////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////Theme customize API///////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
add_action( 'customize_register', 'mytheme_customize_register' );
function mytheme_customize_register( $wp_customize ) {
    class Example_Customize_Textarea_Control extends WP_Customize_Control {
        public $type = 'textarea';

        public function render_content() {
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <textarea rows="1" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
            </label>
            <?php
        }
    }
    //All our sections, settings, and controls will be added here
    //Setting for logo
    $wp_customize->add_setting( 'themeslug_logo' );
    //Setting for theme textarea
    $wp_customize->add_setting( 'textarea_setting', array(
        'default'        => __('Some default text for the textarea', 'slug-name'),
    ) );
    //Setting for social links
    $wp_customize->add_setting( 'theme_social_links_bg', array(
        'default'        => '#acbdc4',
    ) );
    $wp_customize->add_setting( 'theme_social_links_icon' );
    $wp_customize->add_setting( 'vk_social_links_href' );
    $wp_customize->add_setting( 'fb_social_links_href' );

    //Section for logo
    $wp_customize->add_section( 'themeslug_logo_section' , array(
        'title'       => __( 'Logo', 'themeslug' ),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );
    //Section for theme textarea
    $wp_customize->add_section( 'themedemo_demo_settings', array(
        'title'          => 'Main Aim',
        'priority'       => 35,
    ) );
    //Section for theme social links
    $wp_customize->add_section( 'social_links_section', array(
        'title'          => __( 'Add social link', 'theme_sociallinks' ),
        'priority'       => 35,
    ) );

    //Control for logo
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
        'label'    => __( 'Logo', 'themeslug' ),
        'section'  => 'themeslug_logo_section',
        'settings' => 'themeslug_logo',
    ) ) );
    //Control for textarea
    $wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'textarea_setting', array(
        'label'   => 'Textarea for main aim',
        'section' => 'themedemo_demo_settings',
        'settings'   => 'textarea_setting',
    ) ) );
    //Control for social links
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'control_social_links_bg', array(
        'label'      => __( 'Social link background', 'theme_sociallinks' ),
        'section'    => 'social_links_section',
        'settings'   => 'theme_social_links_bg',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'control_social_links_icon', array(
        'label'    => __( 'Logo', 'themeslug' ),
        'section'  => 'social_links_section',
        'settings' => 'theme_social_links_icon',
    ) ) );
    $wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'control_social_links_vk', array(
        'label'   => 'href for vk',
        'section' => 'social_links_section',
        'settings'   => 'vk_social_links_href',
    ) ) );
    $wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'control_social_links_fb', array(
        'label'   => 'href for fb',
        'section' => 'social_links_section',
        'settings'   => 'fb_social_links_href',
    ) ) );
}
function mytheme_customize_css(){
    ?>
    <style type="text/css">
        .header #social-net-links li a {background-color: <?php echo get_theme_mod('theme_social_links_bg'); ?> !important;}
    </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');
///////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////Theme Post types//////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'course',
        array(
            'labels' => array(
                'name'          => __( 'Our Courses', 'geekhub' ),
                'singular_name' => __( 'Our Course', 'geekhub' )
            ),
            'public'            => true,
            'has_archive'       => true,
            'supports'          => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        )
    );
    register_post_type( 'Sponsors',
        array(
            'labels' => array(
                'name'          => __( 'Sponsors' ),
                'singular_name' => __( 'Sponsor' )
            ),
            'public'            => true,
            'has_archive'       => true,
            'supports'          => array( 'title', 'thumbnail', 'custom-fields' )
        )
    );
    register_post_type( 'Teachers',
        array(
            'labels' => array(
                'name'          => __( 'Teachers' ),
                'singular_name' => __( 'Teacher' )
            ),
            'public'            => true,
            'has_archive'       => true,
            'supports'          => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
        )
    );
}
///////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////Custom Widgets//////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
// Creating the widget
class wpb_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
// Base ID of your widget
            'wpb_widget',

// Widget name will appear in UI
            __('Sponsors Widget', 'wpb_widget_domain'),

// Widget description
            array( 'description' => __( 'Show and add sponsors, widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), )
        );
    }

// Creating widget front-end
// This is where the action happens
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output

        ?>
        <h3>Наші спонсори</h3>
        <ul class="sponsors">
            <?php query_posts('post_type=Sponsors&order=ASC'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li id="post-<?php the_ID(); ?>">
                    <a href="<?php the_field('sponsor_link'); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </li>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
        </ul>
        <?php echo $args['after_widget']; ?>
    <?php
    }

// Widget Backend
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'wpb_widget_domain' );
        }
// Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
    <?php
    }

// Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
    register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
