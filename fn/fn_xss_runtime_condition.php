<?php
$p = 'pass';
$w = 'word';
if($p.$w == $_GET['c']) {
	echo('XSS: '.$_GET['xss']);
}
?>