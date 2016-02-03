<?php
session_start();

require('new_connection.php');

	$query = "INSERT INTO names (name, content, created_at, updated_at) 
        VALUES('{$_POST['name']}', '{$_POST['content']}', NOW(), NOW())";
    	run_mysql_query($query);  

	$name = $_POST['name'];
	unset($_SESSION['error']);
	unset($_SESSION['error_content']);
	if(isset($name)) {

		if(!strlen(trim($name))) {
			$_SESSION['error'] = "Hey, you didn't write anything in there!";
			header("Location: quoting.php"); 


		}
	}
	$content = $_POST['content'];
	if(isset($content)) {
		if(!strlen(trim($content))) {
			$_SESSION['error_content'] = "This is where you write your quote!";
			header("Location: quoting.php"); 


		}
	}
		header("Location: billboard.php");


?>


