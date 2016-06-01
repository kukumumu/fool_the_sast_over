<?php
$prefix = 'fn_xss_static_include';
include $prefix.DIRECTORY_SEPARATOR.'inc.inc';
echo('XSS: '.$xss);
?>