<?php


// FILE SYSTEM LOCATION
define ('HPAPI_DIR_HPAPI', '../..' );
define ('HPAPI_DIR_CONFIG', '../../.hpapi' );


// INVOKE HPAPI
if (php_sapi_name()=='cli') {
    die ("002 CLI is not allowed\n");
}
if (version_compare(PHP_VERSION,'7.0.0','<')) {
    die ('003 Application error: PHP minimum requirement is 7.0.0');
}
try {
    error_reporting (-1);
    require_once HPAPI_DIR_HPAPI.'/whitelamp/hpapi-hpapi/hpapi-hpapi.dfn.php';
    new \Hpapi\Hpapi ();
}
catch (\Exception $e) {
    die ('004 Application failure\n');
}

?>
