<?php
/**
*
* Boilerplate Plugin - Add introduction of Plugin here
*
* @package      Deftly\BoilerplatePlugin
* @since        0.0.1
* @author       Jeff Cleverley
* @link         https://jeffcleverley.com
* @copyright    Jeff Cleverley
* @license      GNU General Public License 2.0+
*
* @wordpress-plugin
* Plugin Name:  Boilerplate Development Plugin
* Plugin URI:   https://jeffcleverley.com
* Description:  A Boilerplate Plugin as a foundation to develop from
* Version:      0.0.1
* Author:       Jeff Cleverley
* Author URI:   https://jeffcleverley.com
* License:      GPL-2.0+
* License URI:  http://www.gnu.org/licenses/gpl-2.0.txt
* Text Domain:  Boilerplate_Plugin
* Requires WP:  4.7.5
*
*/
namespace Deftly\BoilerplatePlugin;

if ( ! defined( 'ABSPATH' ) ) {
    exit( 'What exactly do you think you\'re doing?' );
}

define( 'PlUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once( __DIR__ . '/assets/vendor/autoload.php' );
