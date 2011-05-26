<?php

/**
 * Load FirePHP
 */

define('INSIGHT_IPS', '*');         // UPDATE THIS FOR PRODUCTION USE
define('INSIGHT_AUTHKEYS', '*');    // UPDATE THIS FOR PRODUCTION USE
define('INSIGHT_PATHS', dirname(__DIR__));
define('INSIGHT_SERVER_PATH', '/');

require_once(__DIR__ . '/FirePHP/Init.php');

/**
 * Application Code
 */

echo 'Hello World!';

// @see http://reference.developercompanion.com/#/Tools/FirePHPCompanion/API/
FirePHP::to('request')->console('Dev')->log('Hello World');
