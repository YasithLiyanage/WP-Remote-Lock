# WP Remote Lock

A WordPress plugin that disables access to a site based on license status from a remote server.

## Features
- Remote license check
- Must-Use plugin version
- Site auto-locks if status is inactive

## How to Use

1. Upload `plugin.php` to `wp-content/plugins/wp-remote-lock/`
2. Activate from WordPress admin
3. OR upload `mu-site-lock.php` to `wp-content/mu-plugins/` (no activation needed)

## License Server

On your own server, host `check.php` like:

```php
<?php
$licenses = [
    'clientsite.com' => 'active',
    'anotherclient.com' => 'inactive',
];
$site = $_GET['site'] ?? '';
echo $licenses[$site] ?? 'inactive';
?>
