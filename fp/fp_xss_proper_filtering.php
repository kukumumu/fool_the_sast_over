<?php
$xss = htmlentities($_GET['xss']); 
echo('XSS: '.$xss);
?>