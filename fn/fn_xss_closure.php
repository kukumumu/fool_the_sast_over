<?php
$func = function($msg) {echo($msg);};
$func($_GET['xss']);
?>