<?php

add_action('after_setup_theme', 'nl_spraachen_theme_setup');

function nl_spraachen_theme_setup() {
    // Add Translation Option
    load_theme_textdomain('spraachen-org', get_stylesheet_directory() . '/languages');

    $locale = get_locale();
    $locale_file = get_stylesheet_directory_uri() . "/languages/$locale.php";
    //init styles
    add_action('wp_enqueue_styles', 'my_styles');

    if (!function_exists("my_styles")) {
        if (!is_admin()) {
            wp_register_style('custom-bootstrap', get_stylesheet_directory_uri() . '/library/css/bootstrap.min.css', 'style', '1.0', 'screen');
            wp_register_style('bootstrap-theme', get_stylesheet_directory_uri() . '/library/css/bootstrap-theme.min.css', 'style', '1.0', 'screen');
            wp_register_style('qtip', 'http://cdn.jsdelivr.net/qtip2/2.2.1/jquery.qtip.min.css', null, false, false);
            wp_register_style('myStyle', get_stylesheet_directory_uri() . '/library/css/myStyle.css', 'style', '1.0', 'screen');
            wp_register_style('googlefonts', 'http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic|Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic', 'style', '1.0', 'screen');
            wp_register_style('fontawseome', 'http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css', 'style', '4.0.3', 'all');
            //wp_enqueue_style('support');
            wp_enqueue_style('custom-bootstrap');
            wp_enqueue_style('bootstrap-theme');
            wp_enqueue_style('qtip');

            wp_enqueue_style('myStyle');
            wp_enqueue_style('googlefonts');
            wp_enqueue_style('fontawseome');
        }
    }
    add_action('wp_enqueue_scripts', 'my_scripts');
    //init scripts
    if (!function_exists("my_scripts")) {
        if (!is_admin()) {

            function my_scripts() {
                // tooltips
                wp_enqueue_script('qtip', 'http://cdn.jsdelivr.net/qtip2/2.2.1/jquery.qtip.min.js', array('jquery'), false, true);
                wp_enqueue_script('qtip');

                wp_register_script('custom', get_stylesheet_directory_uri() . '/library/js/custom.js', array('jquery'), '1.2');
                wp_enqueue_script('custom');
            }

        }
    }
    // delete parent bootstrap styles
    if (!function_exists("old_wpbs_styles")) {
        if (!is_admin()) {

            function old_wpbs_styles() {
                wp_dequeue_style('bootstrap');
                wp_dequeue_style('wpbs-style');
            }

        }
    }
    add_action('wp_enqueue_scripts', 'old_wpbs_styles');

    if (!function_exists('add_new_sidebars')) {

        function add_new_sidebars() {
            register_sidebar(array(
                'name' => __('Language Switch'),
                'id' => 'languages',
                'description' => _("... contains the Language Switch"),
                'before_widget' => '<div id="languages-menu">',
                'after_widget' => '</div>'
            ));
            register_sidebar(array(
                'name' => __('Sidebar Contact'),
                'id' => 'contact-sidebar',
                'description' => _('... shows the contact data in the header'),
                'before_widget' => '<div id="contact-sidebar">',
                'after_widget' => '</div>',
            ));
        }

    }
    add_action('init', 'add_new_sidebars');
    
    add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
    $moreLink = __('continue reading', 'spraachen-org');
return '<a class="more-link" href="' . get_permalink() . '">'. $moreLink .'</a>';
}
}

?>