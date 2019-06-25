<?php
/*
Plugin Name:    Carbon Fields Toggler Field Type
Description:    Carbon Fields extension that adds a select post field type.
Version:        0.0.0
Author:         interconnect/it
Author URI:     https://interconnectit.com/
*/

// Require Composer auto loader if installed on it's own
if (file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    require_once $composer;
}

use Carbon_Fields\Carbon_Fields;
use Carbon_Field_Toggler\Toggler_Field;

define( 'Carbon_Field_Toggler\\DIR', __DIR__ );

Carbon_Fields::extend( Toggler_Field::class, function( $container ) {
	return new Toggler_Field( $container['arguments']['type'], $container['arguments']['name'], $container['arguments']['label'] );
} );
