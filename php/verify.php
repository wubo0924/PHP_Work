<?php 
session_start();
if($_SESSION['admin']){
	header("Location: home.php");
}else{
	echo '<script language="javascript">if(confirm("You have not been logon. Please register first!")){window.location="register.php";}else{window.location="home.php"}</script>';
}
?>