<?php
/*
Plugin Name:        Allow Automatic Update
Plugin URI:         https://github.com/Wordpress-Development/bye-bye-pingback/
Description:        Allow automatic updates when the site is under version control.
Version:            0.0.1
Author:             ThatBlairGuy
Author URI:         https://github.com/ThatBlairGuy/
*/

add_filter( 'automatic_updates_is_vcs_checkout', '__return_false', 1 );
