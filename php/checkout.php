<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Checkout page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/privacy.css" type="text/css"/>
	<link rel="stylesheet" href="css/registration.css" type="text/css"/>
	<script type="text/javascript" src="js/main.js"></script>
	<script>
	  function checkItem(){
	  	if(document.getElementById("fname").value==null || document.getElementById("fname").value==""){
	  		document.getElementById("warn").innerHTML="*First Name cannot be empty";
	  		document.getElementById("warn").style.display="";
	  		return false;
	  	}else if(document.getElementById("sname").value==null || document.getElementById("sname").value==""){
	  		document.getElementById("warn").innerHTML="*Second Name cannot be empty";
	  		document.getElementById("warn").style.display="";
	  		return false;
	  	}else if(document.getElementById("address").value==null || document.getElementById("address").value==""){
	  		document.getElementById("warn").innerHTML="*Address cannot be empty";
	  		document.getElementById("warn").style.display="";
	  		return false;
	  	}else if(document.getElementById("city").value==null || document.getElementById("city").value==""){
	  		document.getElementById("warn").innerHTML="*City cannot be empty";
	  		document.getElementById("warn").style.display="";
	  		return false;
	  	}else{
	  		return true; 
	  	}
	    
	  }
	</script>
  </head>
  <?php 
   function checkCard($strDigits)
   {
   	if(strlen($strDigits)==0) return false;
   	$sum = 0;
    $alt = false;
    for($i = strlen($strDigits) - 1; $i >= 0; $i--) 
    {
        if($alt)
        {
           $temp = $strDigits[$i];
           $temp *= 2;
           $strDigits[$i] = ($temp > 9) ? $temp = $temp - 9 : $temp;
        }
        $sum += $strDigits[$i];
        $alt = !$alt;
    }
    return $sum % 10 == 0;
   }
   ?>
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
    <?php session_start();
    if(isset($_POST['submit'])){ 
    	$username=$_SESSION['username'];
    	$shoppingcart=$_SESSION['shoppingcart'];
    	$t=$_POST['total'];
    	$cardnumber=$_POST['cardnumber'];
    	$expireddate=$_POST['year']."-".$_POST['month'];
    	
    	$name=$_POST['fname']."#".$_POST['sname'];
    	$address=$_POST['address'].",".$_POST['city'].",".$_POST['state'];
    	
    	if(checkCard($cardnumber) && date("Y-m",strtotime($expireddate))>=date("Y-m")){
        	if(file_exists('orders.txt')){
        		$outputstring=$username."|";
    		    foreach($shoppingcart as $key=>$value){
    		    	$outputstring.=$key."+".$value[2]."#";
    		    }
    		    $outputstring.="|".$t."|".date("Y-m-d H:i")."|".$name."|".$address."\n";
    		    $fp = fopen('orders.txt', "a");
    		    fwrite($fp,$outputstring); 
			    fclose($fp);
			    unset($_SESSION['shoppingcart']);
			    header("Location: orders.php?s=1");
			}
			
        }else{
        	if(!checkCard($cardnumber)){
        		$flag1=1;
        	}
        	if(!(date("Y-m",strtotime($expireddate))>=date("Y-m"))){
        		$flag2=1;
        	}
        }
    	
    	
    	
    }?>
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
	
   <?php
	session_start();
	if(count($_POST)>0){
		foreach($_POST as $name=>$content){
			if($name=='total'){
				$total=$content;
			}else if($name=="shoe1" || $name=="shoe2" || $name=="laptop1" || $name=="laptop2"){
				$_SESSION['shoppingcart'][$name][2]=$content;
				$cart_count=count($_SESSION['shoppingcart']);
			}
		}
	} 
	?>
   
   <div id="m_div" class="center_div">
    <div class="checkout">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return checkItem()">
    <p style="color:#9a7958;font-size:32px">Check Out</p>
    <table width="100%">
    <tr>
    
     <td width="30%">
    <table class="c_tb1">
     <tr>
      <td colspan="2"><p style="color:#c4a994">Name and Address</p></td>
     </tr>
     <tr>
      <td>First Name*<br/><input id="fname" type="text" name="fname" value="<?php echo $_POST['fname'];?>"/></td>
      <td>Second Name*<br/><input id="sname" type="text" name="sname" value="<?php echo $_POST['sname'];?>"/></td>
     </tr>
     <tr>
      <td>Address*<br/><input id="address" type="text" name="address" value="<?php echo $_POST['address'];?>"/></td>
      <td rowspan="2"><div id="warn" style="text-align:center;color:red;display:none;font-size:12px">rowspan</div></td>
     </tr>
     <tr>
      <td>City*<br/><input id="city" type="text" name="city" value="<?php echo $_POST['city'];?>"/></td>
     </tr>
     <tr>
      <td colspan="2">State*<br/><select name="state" id="state">
               <option value="VIC">VIC</option>
               <option value="NSW">NSW</option>
               <option value="WA">WA</option>
               <option value="QLD">QLD</option>
               <option value="SA">SA</option>
               <option value="TAS">TAS</option>
           </select></td>
     </tr>
     <tr>
      <td>Zip Code<br/><input id="zcode" type="text" name="zcode" value="<?php echo $_POST['zcode'];?>"/></td>
      <td>Phone<br/><input type="text" name="phone" value="<?php echo $_POST['phone'];?>"/></td>
     </tr>
     <tr>
      <td colspan="2">Email<br/><input type="text" name="email" value="<?php echo $_POST['email'];?>"/></td>
     </tr>
    </table>
    </td>
    
    <td width="40%" align="center">
    <table class="c_tb2">
     <tr>
      <td><p style="color:#c4a994">Payment Method</p></td>
     </tr>
     <tr>
      <td>Credit card type*<br/><select name="cardtype">
               <option value="Visa">Visa</option>
               <option value="Master">Master</option>
              </select></td>
     </tr>
     <tr>
      <td><br/></td>
     </tr>
     <tr>
      <td>Cardholder's name*<br/><input type="text" name="cardholder" size="35" value="<?php echo $_POST['cardholder'];?>"/></td>
     </tr>
     <tr>
      <td><br/></td>
     </tr>
     <tr>
      <td nowrap>Card number(no spaces or dashes)*<br/><input type="text" name="cardnumber" size="35" value="<?php echo $_POST['cardnumber'];?>"/><?php if($flag1==1){echo '<span style="color:red;font-size:10px">Invalid number</span>';}?></td>
     </tr>
     <tr>
      <td><br/></td>
     </tr>
     <tr>
      <td nowrap>Expired date(month/year)*<br/><select name="month">
               <option value="01">01</option>
               <option value="02">02</option>
               <option value="03">03</option>
               <option value="04">04</option>
               <option value="05">05</option>
               <option value="06">06</option>
               <option value="07">07</option>
               <option value="08">08</option>
               <option value="09">09</option>
               <option value="10">10</option>
               <option value="11">11</option>
               <option value="12">12</option>
           </select>
           <select name="year">
               <option value="2012">2012</option>
               <option value="2013">2013</option>
               <option value="2114">2014</option>
               <option value="2015">2015</option>
               <option value="2016">2016</option>
               <option value="2017">2017</option>
               <option value="2018">2018</option>
               <option value="2019">2019</option>
               <option value="2020">2020</option>
               <option value="2021">2021</option>
               <option value="2022">2022</option>
               <option value="2023">2023</option>
           </select><?php if($flag2==1){echo '<span style="color:red;font-size:10px">Invalid date</span>';}?> 
           </td>
     </tr>
     
     
     
     <tr>
      <td><br/></td>
     </tr>
    </table>
    </td>
    
    <td width="30%">
    <table class="c_tb3" width="300px">
     <tr>
      <td colspan="2"><p style="color:#c4a994">Order Summary</p></td>
     </tr>
     <tr>
      <td><p>Subtotal:</p></td>
      <td><?php echo $cart_count;?></td>
     </tr>
     <tr>
      <td><p>Shipping cost:</p></td>
      <td>N&#47;A</td>
     </tr>
     <tr>
      <td><p>Total:</p></td>
      <td><?php echo "$$total";?></td>
     </tr>
     <tr>
      <td colspan="2"><br/></td>
     </tr>
     <tr>
      <td colspan="2"><br/></td>
     </tr>
     <tr>
      <td colspan="2"><br/></td>
     </tr>
     <input type="hidden" name="total" value="<?php echo $total;?>"/>
    
     <tr>
      <td colspan="2"><input type="submit" name="submit" value="Submit order" style="height:25px;width:125px">
      <input type="button" name="continue" value="Continue shopping" style="height:25px;width:125px" onclick="window.location='products.php'"></td>
     </tr>
     <tr>
      <td colspan="2"><br/></td>
     </tr>
    </table>
    </td>

    </tr>
   </table>

    </form>
    </div>
   </div>
   
   <div id="footer">
    <hr/>
    <p>Copyright &#169; 2012 eBuy Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners. Use of this Web site constitutes acceptance of the eBuy<br/><a href="privacy.php" title="Privacy policy">Privacy Policy</a>.</p>
    
    
    </div>
    
         
     
  </body>     
    
</html>
