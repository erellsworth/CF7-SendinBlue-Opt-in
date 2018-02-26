# CF7-SendinBlue-Opt-in

WordPress plugin to add a SendinBlue Opt-in checkbox for Contact Form 7

In your wp-config file define your SendinBlue API (V2) key:

	define('SEND_IN_BLUE_KEY', 'yourV2keyhere');

Just use Contact Form 7's normal shortcodes like so:

	[email* your-email]
    [checkbox sendinblue-opt-in default:1 "Subscribe" ]
    [hidden sendinblue-list-id "13"]

That's all there is to it.