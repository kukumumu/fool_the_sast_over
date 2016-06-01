<?php
$prefix = 'fp_xss_false_condition_in_include';
include $prefix.DIRECTORY_SEPARATOR.'inc.inc';
echo('XSS: '.$xss);
?>