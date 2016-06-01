<?php
$i = 1;
if($i < 0) { // Never happends
	echo('XSS: '.$_GET['xss']);
}
?>