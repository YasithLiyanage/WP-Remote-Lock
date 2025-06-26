# WP Remote Lock

A WordPress plugin that disables access to a site based on license status from a remote server.

## 🔐 Features

- Remote license check via HTTP
- Must-Use plugin version included
- Site automatically locks (displays message) if license is inactive or not found
- Ideal for freelancers and agencies working with clients

## 🚀 How to Use

### Option 1: As a Standard Plugin

1. Upload `plugin.php` to:
wp-content/plugins/wp-remote-lock/

vbnet
Copy
Edit
2. Activate the plugin from WordPress Admin

### Option 2: As a Must-Use Plugin (Hidden & Auto-Active)

1. Upload `mu-site-lock.php` to:
wp-content/mu-plugins/

pgsql
Copy
Edit
2. No activation is required — it runs automatically
3. Cannot be deactivated from WordPress admin

> ℹ️ Must-Use Plugins must be placed directly inside `mu-plugins/`, not in a subfolder (unless you're using a loader)

---

## 🌐 License Server

On your own server (e.g., `https://your-license-server.com/check.php`), host a script like:

```php
<?php
$licenses = [
 'clientsite.com' => 'active',
 'anotherclient.com' => 'inactive',
];
$site = $_GET['site'] ?? '';
echo $licenses[$site] ?? 'inactive';
?>
Your plugin will make a call like:

pgsql
Copy
Edit
https://your-license-server.com/check.php?site=clientsite.com
If it returns active, the site loads. Otherwise, it locks down.

🛡 Disclaimer
This plugin is provided for educational and professional use only. You are responsible for ensuring it is used ethically and legally.

✅ Use only in legitimate production scenarios with proper client consent or contractual agreement

❌ Do not use this plugin to sabotage, extort, harm, or unlawfully access websites

✅ Remove the plugin before handing over full control of the website to the client, unless agreed otherwise

🔐 This tool is meant to help freelancers and developers protect their work — not to cause damage

The author is not liable for any misuse of this plugin. Misuse may lead to legal or ethical consequences.

📄 License
This project is open-source and distributed under the MIT License.

vbnet
Copy
Edit

Let me know if you want a version with emoji badges, WP.org formatting, or to automatically generate a GitHub release ZIP.