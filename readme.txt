=== Contact Form 7 SendInBlue Opt-in Checkbox ===
Contributors: erellsworth
Tags: sendinblue, contact form 7, opt-in, marketing automation, email marketing, email campaign, newsletter, subscription form, phpmailer, SMTP, wp_mail, massive email, sendmail, wp-phpmailer, newsletters, email plugin, signup form
Requires at least: 4.4
Tested up to: 4.9.4
Stable tag: 1.0.2
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

WordPress plugin to add a <a href="https://www.sendinblue.com/">SendinBlue</a> Opt-in checkbox for Contact Form 7

== Description ==

Just use Contact Form 7's normal shortcodes like so:

'[email* your-email]'
'[checkbox sendinblue-opt-in default:1 "Subscribe" ]'
'[hidden sendinblue-list-id "13"]'

That's all there is to it.

== Installation ==
In your wp-config file define your SendinBlue API (V2) key:

define('SEND_IN_BLUE_KEY', 'yourV2keyhere');