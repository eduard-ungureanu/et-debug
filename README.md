# ET debug
Add-on for the WP Debugging WordPress plugin that adds the `ET_DEBUG` constant

## How it works
For the plugin to be activated, it requires the WP Debugging WordPress plugin to be activated first. Without it is not possible to activate it.

If the WP Debugging plugin is activated, we can activate the ET Debug as well.

Once both plugins are activate, it uses WordPress CLI to write define the `ET_DEBUG` constant in the `wp-config.php` file. 

The `wp-config.php` file should have standard WordPress file permission.

In WP Debugging > Settings, we can see a new Rule being added: `define( 'ET_DEBUG', true );`

This will alow the WordPress to log more information for subscription errors that might happen for Email Opt-in module and/or Bloom optin

The debug information can be found in the `debug.log` file or directly in Divi > Support Center > Debug section.

Example of such information: 