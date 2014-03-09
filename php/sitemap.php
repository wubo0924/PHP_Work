<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Sitemap page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/privacy.css" type="text/css"/>
	
	<script type="text/javascript" src="js/main.js"></script>
	
  </head>
  
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
			<td align="center"><a href="#">Site Map</a></td>
			<td align="center"><a href="#">About Us</a></td>
		  </tr>
		</table>
  		    
	</div>
	
   
   <div id="m_div" class="center_div">
      <table width="80%">
   <?php
     //$path=$_SERVER['PHP_SELF'];
     //$path=realpath('.');
     //echo "current path:".$path.'<br/>'; 
     $list=scandir('.');
     //echo "list count:".count($list).'<br/>';
     $i=1;
     foreach($list as $item){
     	if(preg_match('/(\.php|\.html|\.HTML|\.PHP)$/',$item)){
     		if(preg_match('/^(home|login|register|privacy|products|shoe1|shoe2|laptop1|laptop2|shoes|laptops|sitemap)/',$item)){
     			echo '<tr>';
     	        echo '<td align="center" valign="middle"><a href="'.$item.'">'.$item.'</a></td>';
     		    echo '</tr>';
     		}
     	}
     }
   ?> 
        </table>


     </div>
   <div id="footer">
    <hr/>
    <p>Copyright &#169; 2012 eBuy Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners. Use of this Web site constitutes acceptance of the eBuy<br/><a href="#" title="Privacy policy">Privacy Policy</a>.</p>
    
    
    </div>
    
         
     
  </body>     
    
</html>
