<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Registration Page</title>
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
			<td align="center"><a href="#">Join Us</a></td>
			<td align="center"><a href="products.php">Products</a></td>
			<td align="center"><a href="sitemap.php">Site Map</a></td>
			<td align="center"><a href="#">About Us</a></td>
		  </tr>
		</table>
  		    
	</div>
    
    
    
      <div class="center_div">
       <div class="registration" id="m_div">
     
          <form id="register" method="post" action="register.php">

         <?php if(isset($_POST['submit'])){
          $email_regexp = "/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/";
          $passwd_regexp = "/([\w\W]*[a-zA-Z]+[\w\W]*[0-9]+[\w\W]*)|([\w\W]*[0-9]+[\w\W]*[a-zA-Z]+[\w\W]*)/";
          $age_regexp = "/^([1][6-9]|[2-8][0-9]|[9][0])$/";
          $name_regexp = "/^[a-zA-Z]+$/";
          $flag=0;
          
         	?>
         
         
         <table>
                 
         <tr>	
         <td><p>Email:</p></td>
         <td><input type="text" name="email" id="email" value="<?php echo $_POST['email']?>"/><span class="warntext">&nbsp;*</span></td>      
         <?php if(!preg_match($email_regexp,$_POST['email'])){?>
         <td class="warntext"><p>Invalid Email</p></td>
         <?php }else{
         	   $filename = "users.txt";
         	   if(file_exists($filename)){
         	   	   $orders = file($filename);
         		   $number_of_orders = count($orders);
         		   
         		   for ($i=0; $i<$number_of_orders; $i++){
         		   	   $line = explode("\t",$orders[$i]);
         			   if($line[0]==$_POST['email']){
         			       $exist = true;
         			   	   break;
         			   	}
         		   }
         		   if($exist){?>
         		   <td class="warntext"><p>Email already exist</p></td>
         		   <?php	   
         		   }else{
         		   	   $flag++;
         		   }
         	   }
         }
         ?>
         
         </tr>
         
           <tr>
            <td><p>Password:</p></td>
            <td><input type="password" name="password" id="password" value="<?php echo $_POST['password']?>"/><span class="warntext">&nbsp;*</span></td>
            
            <?php 
            if(strlen($_POST['password'])<6){?>
            <td class="warntext"><p>Must be at least 6 characters long</p></td> 
            	<?php }else{
            		if(!preg_match($passwd_regexp,$_POST['password'])){
            	
            	?> 
            <td class="warntext"><p>Must contain at least 1 number &#38; 1 alphabet</p></td> 
            <?php }else{
            	   $flag++;
            	}
            }?>   
            
          </tr>
           <tr><td colspan="2"><hr/></td></tr>
          <tr>
            <td><p>First Name:</p></td>
            <td><input type="text" name="firstName" id="firstName" value="<?php echo $_POST['firstName']?>"/><span class="warntext">&nbsp;*</span></td>
            
            <?php if(!preg_match($name_regexp,$_POST['firstName'])){?>
            <td class="warntext"><p>Must be alphabet</p></td>
            <?php }else{$flag++;}?>   
            
          </tr>
          <tr>
            <td><p>Last Name:</p></td>
            <td><input type="text" name="lastName" id="lastName" value="<?php echo $_POST['lastName']?>"/><span class="warntext">&nbsp;*</span></td>
            
            <?php if(!preg_match($name_regexp,$_POST['lastName'])){?>
            <td class="warntext"><p>Must be alphabet</p></td>
            <?php }else{$flag++;}?>
            
          </tr>
          <tr>
           <td><p>Address:</p></td>
           <td><textarea name="address" rows="5" cols="20" id="address"> </textarea></td>
           
     
         </tr>
         
         <tr>
           <td><p>City:</p></td>
           <td>
           <select name="city" id="city">
               <option value="Melbourne">Melbourne</option>
               <option value="Sydney">Sydney</option>
               <option value="Brisbane">Brisbane</option>
               <option value="Perth">Perth</option>
               <option value="Adelaide">Adelaide</option>
           </select> 
         </td>
         </tr>
         
         <tr>
           <td><p>Age:</p></td>
           <td><input type="text" name="age" id="age" value="<?php echo $_POST['age']?>"/><span class="warntext">&nbsp;*</span></td>
           
           <?php if(!preg_match($age_regexp,$_POST['age'])){?>
           <td class="warntext"><p>Must be a number between 16 &#38; 90, and must not be empty</p></td>
           <?php }else{$flag++;}?>
           
         </tr>
         
         <tr>
           <td><input type="submit" value="Submit" name="submit" class="r_button"/></td>
           <td><input type="button" value="Clear " name="clear" class="r_button" onclick="cleartext();"/></td>
           <td class="warntext"><p>* Means mandatory item</p></td>
         </tr>
         
         
         </table>
         
         <?php }else{?>
         
           <table>
                 
         <tr>	
         <td><p>Email:</p></td>
         <td><input type="text" name="email" id="email" value="<?php echo $_POST['email']?>"/><span class="warntext">&nbsp;*</span></td>      
         </tr>
         
           <tr>
            <td><p>Password:</p></td>
            <td><input type="password" name="password" id="password" value="<?php echo $_POST['password']?>"/><span class="warntext">&nbsp;*</span></td> 
               
          </tr>
           <tr><td colspan="2"><hr/></td></tr>
          <tr>
            <td><p>First Name:</p></td>
            <td><input type="text" name="firstName" id="firstName" value="<?php echo $_POST['firstName']?>"/><span class="warntext">&nbsp;*</span></td> 
               
          </tr>
          <tr>
            <td><p>Last Name:</p></td>
            <td><input type="text" name="lastName" id="lastName" value="<?php echo $_POST['lastName']?>"/><span class="warntext">&nbsp;*</span></td>
            
          </tr>
          <tr>
           <td><p>Address:</p></td>
           <td><textarea name="address" rows="5" cols="20" id="address"> </textarea></td>
           
     
         </tr>
         
         <tr>
           <td><p>City:</p></td>
           <td>
           <select name="city" id="city">
               <option value="Melbounre">Melbounre</option>
               <option value="Sydney">Sydney</option>
               <option value="Brisbane">Brisbane</option>
               <option value="Perth">Perth</option>
               <option value="Adelaide">Adelaide</option>
           </select> 
         </td>
         </tr>
         
         <tr>
           <td><p>Age:</p></td>
           <td><input type="text" name="age" id="age" value="<?php echo $_POST['age']?>"/><span class="warntext">&nbsp;*</span></td>
           
         </tr>
         
         <tr>
           <td><input type="submit" value="Submit" name="submit" class="r_button"/></td>
           <td><input type="button" value="Clear " name="clear" class="r_button" onclick="cleartext();"/></td>
           <td class="warntext"><p>* Means mandatory item</p></td>
         </tr>
         
         
         </table>

         <?php }?>
         
         </form>
       </div>


        
     </div>
	<?php if($flag==5){
		$filename = "users.txt";
		if(file_exists($filename)){
			$outputstring = $_POST['email']."\t"
			.$_POST['password']."\t".$_POST['firstName']."\t"
			.$_POST['lastName']."\t".$_POST['address']."\t"
			.$_POST['city']."\t".$_POST['age']."\n";
			$fp = fopen($filename, "a");
			fwrite($fp,$outputstring); 
			fclose($fp);
			
			session_start();
			$_SESSION['admin']=true;           
			$_SESSION['username']=$_POST['email'];
			$_SESSION['password']=$_POST['password'];
			$_SESSION['name']=$_POST['firstName'];
			
			if(!isset($_SESSION['shoppingcart'])){
			  $_SESSION['shoppingcart']=Array();
			}
			header("Location: redirect.php?direct=1");
		}
	}
	?>
	
	
	<div id="footer">
    <hr/>
    <p>Copyright &#169; 2012 eBuy Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners. Use of this Web site constitutes acceptance of the eBuy<br/><a href="privacy.php" title="Privacy policy">Privacy Policy</a>.</p>
    
    
    </div>

  </body>
  
</html>

