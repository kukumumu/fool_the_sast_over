<?php
$prefix = basename(__FILE__,'.php');
include $prefix.DIRECTORY_SEPARATOR.'inc.inc';
echo('XSS: '.$xss);
?>