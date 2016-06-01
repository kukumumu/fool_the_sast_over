<?php
$xss = $_GET['xss'];
$func1 = function($msg) {echo($msg);};
$func2 = function() use ($func1, $xss) {$func1($xss);};
$func2();
?>