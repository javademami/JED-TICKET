<?php
	session_start();
	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	unset($_SESSION['userimage']);
	if(isset($_SESSION['userid']))
	header("location:index.php");
	else
	header("location:signin.php");
?>