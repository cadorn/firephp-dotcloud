<?php

/**
 * Load FirePHP
 */

define('INSIGHT_IPS', '*');         // UPDATE THIS FOR PRODUCTION USE
define('INSIGHT_AUTHKEYS', '*');    // UPDATE THIS FOR PRODUCTION USE
define('INSIGHT_PATHS', dirname(__DIR__));
define('INSIGHT_SERVER_PATH', '/');

require_once('phar://' . __DIR__ . '/firephp.phar/FirePHP/Init.php');

/**
 * Application Code
 */

echo 'Hello World!';

// @see http://reference.developercompanion.com/#/Tools/FirePHPCompanion/API/
FirePHP::to('request')->console('Dev')->log('Hello World');
