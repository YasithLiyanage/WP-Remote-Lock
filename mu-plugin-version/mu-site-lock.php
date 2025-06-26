<?php
// Must-Use plugin version of WP Remote Lock

/*
Plugin Name: WP Remote Lock
Description: Remotely disables a WordPress site based on license status.
Version: 1.0
Author: Yasith Liyanage
Author URI: https://YasithLiyanage.com
*/

add_action('init', function () {
    $check = wp_remote_get('https://YasithLiyange.me/check.php?site=' . $_SERVER['HTTP_HOST']);

    if (!is_wp_error($check)) {
        $status = trim(wp_remote_retrieve_body($check));

        if ($status !== 'active') {
            wp_die('<h1>Site Disabled</h1><p>This site has been temporarily disabled due to non-payment. Please contact your developer.</p>');
        }
    }
});
