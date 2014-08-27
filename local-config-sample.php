<?php
/*
This is a sample local-config.php file
In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local development checkouts
*/

define( 'DB_NAME', 'meticulous' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', '192.168.1.106' ); // Probably 'localhost'

define( 'WP_HOME','http://local.designworks.dev/SITE' );
define( 'WP_SITEURL','http://local.designworks.dev/SITE/wp' ); 

define( 'SAVEQUERIES', true );
define( 'WP_DEBUG', true );
