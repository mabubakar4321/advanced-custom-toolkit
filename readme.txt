=== Advanced Custom Toolkit ===
Contributors: Abubakar
Tags: shortcode, admin panel, ajax, post views, plugin
Requires at least: 5.0
Tested up to: 6.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Advanced Custom Toolkit is a professional WordPress plugin that demonstrates modern plugin development practices including Object-Oriented Programming (OOP), AJAX-based functionality, and admin panel integration.

This plugin allows users to display custom messages via shortcode, manage settings through an admin panel, and track post views using secure AJAX requests with session-based protection.

== Features ==

- Custom shortcode support `[custom_message]`
- Admin settings panel for dynamic message control
- AJAX-based post view tracking
- Session-based view limiting (prevents fake refresh counts)
- Secure nonce validation
- Modular and clean OOP architecture
- Separate admin and frontend assets (CSS/JS)

== Installation ==

1. Download or clone the plugin
2. Upload the folder to `/wp-content/plugins/`
3. Activate the plugin from WordPress dashboard
4. Go to **ACT Toolkit** in admin panel
5. Use shortcode in posts:

[custom_message text="Hello World"]

== Usage ==

- Navigate to **ACT Toolkit** in the admin dashboard
- Enter your custom message and save settings
- Add shortcode in any post or page
- Open a post to see dynamic view tracking in action

== Screenshots ==

1. Admin Panel Settings
2. Shortcode Output on Frontend
3. Post View Tracking Display
4. Network Tab Showing AJAX Request
## 📸 Screenshots

### Admin Panel
![Admin Panel](screenshots/admin-panel.jpeg)

### Shortcode Output
![Shortcode](screenshots/shortcode-output.jpeg)

### View Tracking
![Views](screenshots/views-tracking.jpeg)

### Code Structure
![Structure](screenshots/code-structure.jpeg)

== Technical Details ==

- Uses `add_action` and `add_filter`
- AJAX handled via `admin-ajax.php`
- Data passed using `wp_localize_script`
- Secured with WordPress nonces
- Session-based logic implemented in JavaScript
- Clean folder structure (admin / public / includes)

== Frequently Asked Questions ==

= Why are views not increasing on refresh? =

The plugin uses session-based tracking to prevent fake view inflation. Each user view is counted once per session.

= How to reset views for testing? =

Use browser console:

sessionStorage.clear();

= Can I customize the message? =

Yes, from the admin panel under ACT Toolkit.

== Changelog ==

= 1.0.0 =
* Initial release
* Shortcode support
* Admin panel
* AJAX view tracking

== Author ==

Abubakar
