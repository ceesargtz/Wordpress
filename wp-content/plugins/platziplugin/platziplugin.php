<?php
/*
 * Plugin Name: Platzi Plugin
 * Plugin URI: https://developer.wordpress.org/plugina/the-basics/
 * Description:Plugin para el CPT viaje
 * Version: 1.0
 * Author:Ceesar_gtz
 * Author URI: https://developer.wordpress.org/
 * License: GPL2
 * Text Domain: platziPlugin
 * Domain Path: /languages/
 */
 function wporg_options_page_html()
{
    // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
    <div class="wrap">
        <h1><?= esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post">
            <?php
            // output security fields for the registered setting "wporg_options"
            settings_fields('wporg_options');
            // output setting sections and their fields
            // (sections are registered for "wporg", each field is registered to a specific section)
            do_settings_sections('wporg');
            // output save settings button
            submit_button('Save Settings');
            ?>
        </form>
    </div>
    <?php
}

function wporg_options_page()
{
    add_menu_page(
        'WPOrg',
        'WPOrg Options',
        'manage_options',
        'wporg',
        'wporg_options_page_html',
        plugin_dir_url(__FILE__) . 'images/icon_wporg.png',
        20
    );
}
add_action('admin_menu', 'wporg_options_page');

 // function add_role_viajero()
 // {
 //  remove_role('viajero');
 //   add_role(
 //     'viajero',
 //     'Viajero',
 //     [
 //       'read'            => true,
 //       'edit_posts'      => true,
 //       'upload_files'    => true,
 //       'publish_posts'   => true,
 //     //  'delete_posts' => true,
 //     //  'edit_posts'  =>true,
 //        'edit_published_posts' => true,
 //     ]
 //   );
 // }
?>
