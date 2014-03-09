<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Orders page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/privacy.css" type="text/css"/>
	<link rel="stylesheet" href="css/registration.css" type="text/css"/>
	<script type="text/javascript" src="js/main.js"></script>
	
  </head>
  <?php session_start();
  if($_GET['s']=='1' && $_SESSION['admin']){?>
  	
  
  <body onload="pPage_load();">
  
  	<div id="head_bar">
  		<div id="div1"><img alt="logo" src="images/LogoMaker.jpg"/></div>
  		<div id="div2">
  		<?php
  		session_start();
  		$admin = $_SESSION['admin'];
  		$name=null;
        if($admin){
  			$name=$_SESSION['name'];
  			?>
  	    <table>
  	      <tr><td colspan="3" style="border-bottom:1px solid #e1e1e1;">Welcome <?php echo $name;?></td></tr>
  	      <tr>
  	       <td><a href="logaction.php?logaction=out">logout</a></td>
  	       <td>&#124;</td>
  	       <td><a href="shoppingcart.php">shoppingcart</a></td>
  	      </tr>
  		</table>
  		
  			
  		<?php }else{?>
  		<table>
  	      <tr><td colspan="3" style="border-bottom:1px solid #e1e1e1;">Welcome</td></tr>
  	      <tr>
  	       <td><a href="login.php">sign in</a></td>
  	       <td>&#124;</td>
  	       <td><a href="register.php">register</a></td>
  	      </tr>
  		</table>
  		
  		<?php }?>
       </div>       
  	</div>
   
  	<div id="navigator_bar">
	    <table width="100%">
		  <tr>
		    <td align="center"><a href="home.php">Home</a></td>
			<td align="center"><a href="register.php">Join Us</a></td>
			<td align="center"><a href="products.php">Products</a></td>
			<td align="center"><a href="sitemap.php">Site Map</a></td>
			<td align="center"><a href="#">About Us</a></td>
		  </tr>
		  <?php 
		  ?>
		</table>
  		    
	</div>
	
     <div id="m_div" class="center_div">
    <div class="checkout">
      <p style="color:#9a7958;font-size:32px">Order Details</p>
      <table width="100%" style="border:1px solid;background-color:#ddecff">
        <tr>
          <td style="background-color:#b0d1fc"></td>
          <td align="center" valign="middle" style="background-color:#b0d1fc">Item Name</td>
          <td align="center" valign="middle" style="background-color:#b0d1fc">Price</td>
          <td align="center" valign="middle" style="background-color:#b0d1fc">Quantity</td>
          <td align="center" valign="middle" style="background-color:#b0d1fc">Amount</td>
          <td align="center" valign="middle" style="background-color:#b0d1fc">Deal Date</td>
        </tr>
       <?php if(file_exists('orders.txt')){
       	 $fp = fopen('orders.txt',"r");
       	 $username=$_SESSION['username'];
       	 $i=0;
       	 while(!feof($fp)){
       	 	$contents=fgets($fp);
       	 	$items=explode("|",$contents);
       	 	if($items[0]==$username){
       	 		
       	 	    $c=explode("#",$items[1]);
       	 	    $c=array_filter($c);
       	 	    foreach($c as $value){
       	 	    	$i++;
       	 		    echo '<tr>';
       	 		    echo '<td align="center" valign="middle">'.$i.'</td>';
       	 	    	$cc=explode("+",$value);
       	 	    	if($cc[0]=="shoe1"){
       	 	    		echo '<td align="center" valign="middle">2011-2012 high heel shoes fashion women</td>';
       	 	    		echo '<td align="center" valign="middle">&#36;136.8</td>';
       	 	    		echo '<td align="center" valign="middle">'.$cc[1].'</td>';
       	 	    		echo '<td align="center" valign="middle">'.(intval($cc[1])*136.8).'</td>';
       	 	    		echo '<td align="center" valign="middle">'.$items[3].'</td>';
       	 	    	}else if($cc[0]=="shoe2"){
       	 	    		echo '<td align="center" valign="middle">Christian Louboutin Satin d&#39;Orsays PinkChristian Louboutin Bluen</td>';
       	 	    		echo '<td align="center" valign="middle">&#36;188</td>';
       	 	    		echo '<td align="center" valign="middle">'.$cc[1].'</td>';
       	 	    		echo '<td align="center" valign="middle">'.(intval($cc[1])*188).'</td>';
       	 	    		echo '<td align="center" valign="middle">'.$items[3].'</td>';
       	 	    	}else if($cc[0]=="laptop1"){
       	 	    		echo '<td align="center" valign="middle">Lenovo ThinkPad T420s 14&#34; Notebook Computer</td>';
       	 	    		echo '<td align="center" valign="middle">&#36;820</td>';
       	 	    		echo '<td align="center" valign="middle">'.$cc[1].'</td>';
       	 	    		echo '<td align="center" valign="middle">'.(intval($cc[1])*820).'</td>';
       	 	    		echo '<td align="center" valign="middle">'.$items[3].'</td>';
       	 	    	}else if($cc[0]=="laptop2"){
       	 	    		echo '<td align="center" valign="middle">Apple 13.3&#34; MacBook Pro Notebook Computer</td>';
       	 	    		echo '<td align="center" valign="middle">&#36;1200</td>';
       	 	    		echo '<td align="center" valign="middle">'.$cc[1].'</td>';
       	 	    		echo '<td align="center" valign="middle">'.(intval($cc[1])*1200).'</td>';
       	 	    		echo '<td align="center" valign="middle">'.$items[3].'</td>';
       	 	    	}
       	 	    	echo '</tr>';
       	 	    }
       	 		
       	 	}
       	 }
       }
       ?>
      </table>
      <table width="100%"><tr><td align="center" valign="middle"><p style="font-size:20px"><a href="home.php">Continued&#46;&#46;&#46;&#46;&#46;&#46;</a></p></td></tr></table>
    </div>
   </div>
   
   <div id="footer">
    <hr/>
    <p>Copyright &#169; 2012 eBuy Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners. Use of this Web site constitutes acceptance of the eBuy<br/><a href="privacy.php" title="Privacy policy">Privacy Policy</a>.</p>
    
    
    </div>
    
         
     
  </body>     
    <?php 
    }else{include 'verify.php';}?>
</html>
