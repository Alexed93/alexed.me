<?php

define('DB_NAME', 'wp_alexed');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('WPLANG', '');
define('WP_DEBUG', true);

$table_prefix  = 'wp_';

define('AUTH_KEY',         'jT~J/Fs+|%X^RUzbf_t=<]IRJD$F;RfTr7[3-bx<Cu{qyp> U#>}TE8Lt!rO /WD');
define('SECURE_AUTH_KEY',  ':0vy8D.<)[h2g|Q*+Z$W5*7#dZO6qsMmG=lA$}83vrxwLS1~|N?,7f-jLYD(*&sa');
define('LOGGED_IN_KEY',    'kg!DPvtJKZgqB]9b6/yFs`WyXObkvn0-Vz  RVP,W}|[]{qT`4@ +k &v rUK,`.');
define('NONCE_KEY',        'W>c;7},A|Lj-10[]<Sg6Y13nL|_L-<tSwyRl8rXWtt!vL$f-kvO eXDIIu e0m[#');
define('AUTH_SALT',        '=iKT]zcOIIw<f4LX1:/H2Y~>L3t!|PB5Q]/vB_`Vwd{,von<--Hn[Jdb?TqGQ^[1');
define('SECURE_AUTH_SALT', '5V6-4qi&Z><1NBid NGA;[fD!1We(0$6Tyshcm!o->XL/9k=8N]F#r^o9=C]+*|U');
define('LOGGED_IN_SALT',   'qWM2gfv|-[gi(m--k=`tb~2g^T|W&P^J/,wd(_-s0N^T ;PI+ZT,@^7m,-f^)-7>');
define('NONCE_SALT',       'av];z>GFiG+V-m@hy7QE@;}7ZxV6%+&W0Qe+:>#@FiE0K^w-cAgrfAK|!:P->:R!');

define('WP_HOME','http://alexed.local');
define('WP_SITEURL','http://alexed.local/wordpress');

define('WP_CONTENT_URL', 'http://alexed.local/content');

/**
 * Depending on your server configuration, you may find WordPress fails to find your content (themes and plugins).
 * This is due to how your server returns `$_SERVER['DOCUMENT_ROOT']`. If this issue affects you, try swapping
 * for the `dirname(__FILE__)` method below.
 */

// define('WP_CONTENT_DIR', realpath(dirname(__FILE__) . '/content'));
define('WP_CONTENT_DIR', realpath($_SERVER['DOCUMENT_ROOT'] . '/content'));

if ( !defined('ABSPATH') ){
 define('ABSPATH', dirname(__FILE__) . '/');
}

require_once(ABSPATH . 'wp-settings.php');
