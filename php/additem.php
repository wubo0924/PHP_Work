<?php
     session_start(); 
	 if(isset($_POST['add']) && $_SESSION['admin']){
	 	$shoppingcart = $_SESSION['shoppingcart'];
	 	$name= $_POST['name'];
	 	$item=null;
	 	
	 	if(count($shoppingcart)==0){
	 		$item= Array($_POST['title'],
	 	                 $_POST['price'],
	 	                 $_POST['quantity'],
	 	                 date("Y-m-d H:i:s"));
	 		$shoppingcart[$name]=$item;
	 		
	 	}else{
	 		if(array_key_exists($name,$shoppingcart)){
	 			$item=$shoppingcart[$name];
	 			$quantity=intval($item[2]);
	 				$quantity=$quantity+intval($_POST['quantity']);
	 				$item[2]=$quantity;
	 				$item[3]=date("Y-m-d H:i:s");
	 				$shoppingcart[$name]=$item;
	 		}else{
	 				$item= Array($_POST['title'],
	 	                         $_POST['price'],
	 	                         $_POST['quantity'],
	 	                         date("Y-m-d H:i:s"));
	 		        $shoppingcart[$name]=$item;
	 		     }	
	 			
	 	}
	 	$_SESSION['shoppingcart']= $shoppingcart;
	 	if(strpos($name,'laptop')!==false){
	 		header("Location: laptops.php");
	 	}else if(strpos($name,'shoe')!==false){
	 		header("Location: shoes.php");
	 	}else{
	 		header("Location: home.php");
	 	}
	 }else if(isset($_POST['add']) && !$_SESSION['admin']){
	 	echo '<script language="javascript">if(confirm("You have not been logon. Please register first!")){window.location="register.php";}</script>';
	 }
	  
	?>