<?php

add_theme_support('title-tag');

add_theme_support('post-thumbnails');

function cambrianrailways_scripts()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.2.3');
    wp_enqueue_style('chr', get_template_directory_uri() . '/css/chr.css');
    wp_enqueue_style('tickets', get_template_directory_uri() . '/css/tickets.css', array());
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '5.2.3', true);


}

add_action('wp_enqueue_scripts', 'cambrianrailways_scripts');

add_filter('template_include', 'enqueue_pretix_widget_styles', 1000);
function enqueue_pretix_widget_styles($template)
{
    if (is_page_template('tickets.php') || is_page_template('driver-experiance.php') || is_page_template('single-events.php') || is_page_template('events.php') ) {
        wp_register_style('pretix-widget-style', get_template_directory_uri() . '/css/pretix-style.css');
        wp_register_script('pretix-widget-script', get_template_directory_uri() . '/js/pretix-widget-styler.js');

        wp_enqueue_style('pretix-widget-style');
        wp_enqueue_script('pretix-widget-script');
    }
    return $template;
}


/*
* Disable the Gutenberg editor
*/
add_filter('use_block_editor_for_post_type', 'disable_gutenberg', 10, 2);
function disable_gutenberg($current_status, $post_type)
{
    return false;
}

function custom_login()
{
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/custom_login.css" />';
}

add_action('login_head', 'custom_login');

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

/**
 * Remove related products output
 */
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);


/** Custom Post Type - Events */

function create_post_events()
{
    register_post_type('events',
        array(
            'labels' => array(
                'name' => __('Events'),
            ),
            'public' => true,
            'hierarchical' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'custom-fields',
            ),
            'taxonomies' => array(
                'category',
            )
        )
    );
    register_taxonomy_for_object_type('category', 'events');
}

add_action('init', 'create_post_events');


/**
 * Pagination
 */

function bootstrap_pagination(\WP_Query $wp_query = null, $echo = true, $params = [])
{
    if (null === $wp_query) {
        global $wp_query;
    }

    $add_args = [];

    //add query (GET) parameters to generated page URLs
    /*if (isset($_GET[ 'sort' ])) {
        $add_args[ 'sort' ] = (string)$_GET[ 'sort' ];
    }*/

    $pages = paginate_links(array_merge([
            'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
            'type' => 'array',
            'show_all' => false,
            'end_size' => 3,
            'mid_size' => 1,
            'prev_next' => true,
            'prev_text' => __('Previous Page'),
            'next_text' => __('Next Page'),
            'add_args' => $add_args,
            'add_fragment' => ''
        ], $params)
    );

    if (is_array($pages)) {
        //$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
        $pagination = '<nav class="mt-3" aria-label="navigation">';

        $pagination .= '<ul class="pagination justify-content-center"';

        foreach ($pages as $page) {
            $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
        }

        $pagination .= '</ul></nav>';

        if ($echo) {
            echo $pagination;
        } else {
            return $pagination;
        }
    }

    return null;
}

/**
 * Custom admin logo
 */

add_action('admin_menu', 'chr_admin_menu');

function chr_admin_menu()
{
    global $menu;
    $url = get_option('home');;
    $menu[0] = array(__('chr'), 'read', $url, 'chr-logo', 'chr-logo');
}

add_action('admin_head', 'chr_admin_style');

function chr_admin_style()
{
    echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/admin_style.css" type="text/css" media="all" />';
}

?>