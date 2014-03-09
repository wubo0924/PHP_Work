<?php
include 'verify.php';
$action = $_GET['logaction'];
if($action=="in"){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$filename = "users.txt";
    if(file_exists($filename)){
    	$orders = file($filename);
        $number_of_orders = count($orders);
        for ($i=0; $i<$number_of_orders; $i++){
        	$line = explode("\t",$orders[$i]);
            if($line[0]==$username && $line[1]==$password){
            	$exist = true;
            	session_start();
            	$_SESSION['name'] = $line[2];
            	break;
            }
        }
        if($exist){
        	session_start();
        	$_SESSION['username']=$username;
			$_SESSION['password']=$password;
        	$_SESSION['admin'] = true;
        	
        	if(!isset($_SESSION['shoppingcart'])){
        		$_SESSION['shoppingcart']=Array();
			}
        	header("Location: home.php");
        }else{
        	session_start();
        	$_SESSION['admin'] = false;
        	header("Location: home.php?error=1");
        }
    }
}else if($action=="out"){
	session_start();
	session_unset();
	session_destroy();
	header("Location: home.php");
}
?>