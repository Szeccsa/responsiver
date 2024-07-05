<?php
function isMobileDevice() {
    return preg_match('/(android|iphone|ipad|ipod|blackberry|windows phone)/i', $_SERVER['HTTP_USER_AGENT']);
}

$documentRoot = $_SERVER['DOCUMENT_ROOT'];

if(isMobileDevice()) {
    include_once($documentRoot . "/index_mobile.php");
} else {
    include_once($documentRoot . "/index_desktop.php");
}
?>