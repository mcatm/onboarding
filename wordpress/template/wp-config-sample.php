<?php

define('DB_NAME', $_ENV['MYSQL_DATABASE']);
define('DB_USER', $_ENV['MYSQL_USER']);
define('DB_PASSWORD', $_ENV['MYSQL_PASSWORD']);
define('DB_HOST', $_ENV['WP_DB_HOST']);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         '+,&I1X19fSv6[c3|vpXpdF|LWaeP{z+}K>N-HZ>MSrbtu.lTP X.vl%2)^q>)Rl2');
define('SECURE_AUTH_KEY',  '9xc|VNky+7VqY}G%soVsV :Tbvf2-1(Pl2mv-gA=/C!VW}NOrVkgAyD:%Df{]H]y');
define('LOGGED_IN_KEY',    'I:*UJm<H=D/6>ixpmr]=YmJ-Z$$dRxx +bl|mdAFfGC6C-9|M+2>c/s9JRsm#{~)');
define('NONCE_KEY',        'AKrFyouPN?@ nsG0^|[DvPM+wYM%,S4nv]hip+>n2E_+.PuV{b76pm0-/z6cYCtL');
define('AUTH_SALT',        '[MrXXS^R`_Qrn8G`.N67*PXF2h-=[,XD|;flbTPf^H*UqpD)m}pWzk~BIhyq)zkB');
define('SECURE_AUTH_SALT', '~w48$B|c20$px*3^bppZ+9K~|g5)wj&wP=4jXPK0;$GOAN|{U!e3q9&z qmQj0.q');
define('LOGGED_IN_SALT',   'GKzlJfZD,$T.A(XxGr*^^ajp]wJg)EgYY.3j4_O|<yY1:Z/bLv8|Q6XEfE=(#){>');
define('NONCE_SALT',       'Ioyy5F|wX]-[T-p7o n!^PKQUrR=`6A4B|r1[Nd!A+8wP$%;rlu2YI{>`U|^Drc.');

$table_prefix  = 'wp_';

define('WP_DEBUG', false);

define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/assets');
define('WP_CONTENT_URL', 'http://'.$_SERVER["HTTP_HOST"].'/assets');

if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
