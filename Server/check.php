<?php

/*
Plugin Name: WP Remote Lock
Description: Remotely disables a WordPress site based on license status.
Version: 1.0
Author: Yasith Liyanage
Author URI: https://YasithLiyanage.com
*/

$licenses = [
    'clientsite.com' => 'active',
    'anotherclient.com' => 'inactive',
];

$site = $_GET['site'] ?? '';

echo $licenses[$site] ?? 'inactive';
