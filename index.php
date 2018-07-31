<?php


// FILE SYSTEM LOCATION
define ('HPAPI_DIR_HPAPI', '../..' );


// INVOKE HPAPI
if (php_sapi_name()=='cli') {
    die ("CLI is not allowed\n");
}
if (version_compare(PHP_VERSION,'7.0.0','<')) {
    die ('Application error [1]: PHP minimum requirement is 7.0.0');
}
try {
    error_reporting (-1);
    require_once HPAPI_DIR_HPAPI.'/whitelamp/hpapi-hpapi/Hpapi.dfn.php';
    require_once HPAPI_DIR_HPAPI.'/whitelamp/hpapi-hpapi/Hpapi/Hpapi.class.php';
    require_once HPAPI_DIR_HPAPI.'/whitelamp/hpapi-hpapi/Hpapi/Db.class.php';
    require_once '/etc/hpapi/Hpapi.headers.php';
    new \Hpapi\Hpapi ();
}
catch (\Exception $e) {
    die ('001 Application failure\n');
}

?>
