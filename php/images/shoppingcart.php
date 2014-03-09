<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Shopping Cart</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/registration.css" type="text/css"/>
	<script type="text/javascript" src="js/main.js">
	
	</script>
	
	
	
  </head>
  
  <body onload="rPage_load();">
  
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
  		<p class="userinfo">Welcome <?php echo $name;?></p>
  		<p><a href="logaction.php?logaction=out">logout</a>  &#124; shoppingcart</p>	
  		<?php }else{?>
  		<p class="userinfo"> Welcome </p>
  		<p><a href="login.php">sign in</a>  &#124; <a href="register.php">register</a></p>
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
       
       
    <div class="center_div" style="border: 1px solid">
       <div class="registration" id="m_div" style="border: 1px solid">
          <br/><br/><br/><br/>
          <?php 
            $shoppingcart=$_SESSION['shoppingcart'];
            //echo 'shoping cart:'.gettype($shoppingcart);
            if(count($shoppingcart)==0){?>
                
                <table>
                  <tr>
                    <td><p><img alt="shopping cart" src="images/shoppingcart.png"/></p></td>
                    <td><p>Your shopping cart is empty at the moment. Please move up shopping quickly!</p></td>
            	  </tr>
            	</table>
            	
            <?php }else{
            	echo '<table width="100%" border="1" nowrap>';
            	foreach($shoppingcart as $key=>$item){
            		echo '<tr>';
            		  echo '<td><imag alt="fkaf" src="fa.jpg"/></td>';
            		  echo '<td>'.$item[0].'</td>';
            		  echo '<td>'.$item[1].'</td>';
            		  echo '<td>'.$item[2].'</td>';
            		  echo '<td>'.$item[3].'</td>';
            		echo '</tr>';
            	}
            	echo '</table>';
            }?>
               
           <br/><br/><br/><br/>   
        </div>
	 </div>
	   
	
	
	<div id="footer">
    <hr/>
    <p>Copyright &#169; 2012 eBuy Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners. Use of this Web site constitutes acceptance of the eBuy<br/><a href="privacy.php" title="Privacy policy">Privacy Policy</a>.</p>
    <div>
         <table>
         <tr>
          <td> <p>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
  </p></td>
     <td>
     <p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</p>
      </td>
    </tr>
    </table>
    </div>

    
    </div>

  </body>
  
</html>

