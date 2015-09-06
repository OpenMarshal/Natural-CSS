<?php
	ob_start();
	
	include 'style/style.php';
	
	$style = ob_get_contents();
	ob_end_clean();
	
	$style = str_replace('\r\n', '\n', $style);
	$style = str_replace('\n', '', $style);
	$style = str_replace('  ', ' ', $style);
	
	echo $style;
?>