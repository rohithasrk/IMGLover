<?php 
	$fh = fopen('ans.txt', 'a'); 
	fwrite($fh, print_r($_SERVER,true)); 
	fclose($fh); 
?>
