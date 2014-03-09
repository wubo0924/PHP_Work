<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Shopping Cart</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/registration.css" type="text/css"/>
	<script type="text/javascript" src="js/main.js">
	 
	</script>
	<script>
	  function formSubmit(){
	    
	        form.action="checkout.php";
	        form.submit();
	        	    	
	  }
	  function resumeButton(){
	  	document.getElementById("delete").disabled="";
	  }
	  function changeTotal(){
	  	var total=0;
	  	if(document.getElementById("shoe1")){
	  		total+=Number(document.getElementById("shoe1").value)*136.84;
	  	}
	  	if(document.getElementById("shoe2")){
	  		total+=Number(document.getElementById("shoe2").value)*188;
	  	}
	  	if(document.getElementById("laptop1")){
	  		total+=Number(document.getElementById("laptop1").value)*820;
	  	}
	  	if(document.getElementById("laptop2")){
	  		total+=Number(document.getElementById("laptop2").value)*1200;
	  	}
	  	document.getElementById("t_show").innerHTML=total;
	  	document.getElementById("total").value=total;
	  }
	  </script>
	<?php if(isset($_POST['delete'])){
		session_start();
		$item=$_POST['item'];
		unset($_SESSION['shoppingcart'][$item]);
		
	}?>
	
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
		</table>
  		    
	</div>
       
       
    <div class="center_div">
       <div class="shoppingcart">
          <br/><br/>
          <?php 
            session_start();
            $shoppingcart=$_SESSION['shoppingcart'];
            if(count($shoppingcart)==0){?>
                
                <table>
                  <tr>
                    <td><p><img alt="shopping cart" src="images/shoppingcart.png"/></p></td>
                    <td><p>Your shopping cart is empty at the moment. Please move up shopping quickly!</p></td>
            	  </tr>
            	</table>
            	
            <?php }else{
            	echo '<form name="form" method="post" action="'.$_SERVER['PHP_SELF'].'">';
            	echo '<table width="100%" border="1">';
            	echo '<tr>';
            	echo '<td align="center" valign="middle">Select</td>';
            	echo '<td align="center" valign="middle">Photo</td>';
            	echo '<td align="center" valign="middle">Title</td>';
            	echo '<td align="center" valign="middle">Price</td>';
            	echo '<td align="center" valign="middle">Quantity</td>';
            	echo '<td align="center" valign="middle">Purchase Date</td>';
            	
            	echo '</tr>';
            	$total=0;
            	foreach($shoppingcart as $key=>$item){
            		echo '<tr>';
            		echo '<td align="center" valign="middle"><input type="radio" name="item" value="'.$key.'" onclick="resumeButton();"/></td>';
            		if(strpos($key,'shoe')===0){
            			echo '<td><img alt="'.$key.'" src="images/products/shoes/'.$key.'.jpg"/></td>';
            		}else if(strpos($key,'laptop')===0){
            			echo '<td><img alt="'.$key.'" src="images/products/laptop/'.$key.'.jpg"/></td>';
            		}else{
            			echo '<td>'.$key.'</td>';
            		}
            		echo '<td align="center" valign="middle">'.$item[0].'</td>';
            		echo '<td align="center" valign="middle" nowrap>&#36;&#32;'.$item[1].'</td>';
            		echo '<td align="center" valign="middle"><input type="text" id="'.$key.'" name="'.$key.'" value="'.$item[2].'" size="3" onchange="changeTotal()" onkeyup="return ValidateNumber(this,value)"/></td>';
            		
            		echo '<td align="center" valign="middle">'.$item[3].'</td>';
            		echo '</tr>';
            		$total=$total+floatval($item[1])*intval($item[2]);
            		
            	}
            	echo '<input type="hidden" id="total" name="total" value="'.$total.'">';
            	echo '<tr><td colspan="6" align="right" valign="middel"><p>Total Amount:&#32;&#36;<span id="t_show">'.$total.'</span>&#32;AUD</p><p><input onclick="formSubmit();" type="button" name="checkout" value="Check out" style="height:30px;width=50px"/>&#32;&#32;<input id="delete" type="submit" name="delete" value="Delete" style="height:30px;width=90px" disabled="disabled"/>&#32;&#32;</p></td></tr>';
            	
            	echo '</table>';
            	echo '</form>';
            	
            }?>
               
    
           <br/><br/>  
        </div>
	 </div>
	   
	
	
	<div id="footer">
    <hr/>
    <p>Copyright &#169; 2012 eBuy Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners. Use of this Web site constitutes acceptance of the eBuy<br/><a href="privacy.php" title="Privacy policy">Privacy Policy</a>.</p>
</div>

  </body>
 </html>

