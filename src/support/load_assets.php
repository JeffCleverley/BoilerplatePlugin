<?php
/**
 * Load and unload the assets, .js files, .css files etc
 *
 *
 * @package Deftly\BoilerplatePlugin
 * @since   0.0.1
 * @author  Jeff Cleverley
 * @link    https://Jeffcleverley.com
 * @License GNU General Public License 2.0+
 */
namespace Deftly\BoilerplatePlugin;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\load_and_unload_assets' );

/**
* Load or unload assets.
* @since 1.0.0
* @return void
*
*/
function load_and_unload_assets() {
    //... enqueue and unset assets here ....//
}
