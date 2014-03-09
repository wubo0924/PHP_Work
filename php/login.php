<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Login Page</title>
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
			<td align="center"><a href="register.php">Join Us</a></td>
			<td align="center"><a href="products.php">Products</a></td>
			<td align="center"><a href="sitemap.php">Site Map</a></td>
			<td align="center"><a href="#">About Us</a></td>
		  </tr>
		</table>
  		    
	</div>
       <?php 
       if(isset($_POST['submit'])){ 
       	 $username=$_POST['username'];
         $password=$_POST['password'];
         $filename = "users.txt";
         $name="";
         $exist = false;
         if(file_exists($filename)){
       	   $orders = file($filename);
           $number_of_orders = count($orders);
           for ($i=0; $i<$number_of_orders; $i++){
           	 $line = explode("\t",$orders[$i]);
             if($line[0]==$username && $line[1]==$password){
            	$exist = true;
            	$name = $line[2];
         	    break;
         	 }
           }
          }
          if($exist){
          	session_start();           
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			$_SESSION['name']=$name;
			$_SESSION['admin']=true;
			
			if(!isset($_SESSION['shoppingcart'])){
			  $_SESSION['shoppingcart']=Array();
			}
			header("Location: redirect.php?direct=2");
          }else{?>
            <div class="center_div">
       <div class="registration" id="m_div">
        <br/><br/>
        
        <form method="post" action="login.php">
       <table class="logininfo1" width="80%">
       <tr>
         <td width="25"></td>
         <td><p>&#32;&#32;Log in</p></td>
       </tr>
       <tr>
         <td width="25"></td>
         <td><p>&#32;&#32;user name</p></td>
       </tr>
       <tr>
         <td width="25"></td>
         <td>&#32;&#32;<input type="text" name="username" id="username" value="<?php echo $username;?>"/></td>
       </tr>
       <tr>
         <td width="25"></td>
         <td><p>&#32;&#32;password</p></td>
       </tr>
       <tr>
         <td width="25"></td>
         <td>&#32;&#32;<input type="password" name="password" id="password" value="<?php echo $password;?>"/></td>
       </tr>
       <tr>
         <td width="25"></td>
         <td>
         <br/>
         &#32;&#32;<input type="submit" name="submit" value="Submit" class="r_button"/>
         &#32;&#32;&#32;<input type="reset" name="reset" value="Reset" class="r_button"/>
         <br/><br/>
         </td>
         
       </tr>
       <tr>
       
       <td colspan="2"><p class="warntext2">User name or Password is not correct. Please try again.</p></td>
       </tr>
       </table>
       </form>
       <br/><br/><br/>
              
     </div>
	 </div>

          <?php }
       }else{?>
       
       <div class="center_div">
       <div class="registration" id="m_div">
        <br/><br/>
        
        <form method="post" action="login.php">
       <table class="logininfo1" width="80%">
       <tr>
         <td width="25"></td>
         <td><p>&#32;&#32;Log in</p></td>
       </tr>
       <tr>
         <td width="25"></td>
         <td><p>&#32;&#32;user name</p></td>
       </tr>
       <tr>
         <td width="25"></td>
         <td>&#32;&#32;<input type="text" name="username" id="username"/></td>
       </tr>
       <tr>
         <td width="25"></td>
         <td><p>&#32;&#32;password</p></td>
       </tr>
       <tr>
         <td width="25"></td>
         <td>&#32;&#32;<input type="password" name="password" id="password"/></td>
       </tr>
       <tr>
         <td width="25"></td>
         <td>
         <br/>
         &#32;&#32;<input type="submit" name="submit" value="Submit" class="r_button"/>
         &#32;&#32;&#32;<input type="reset" name="reset" value="Reset" class="r_button"/>
         <br/><br/>
         </td>
         
       </tr>
       </table>
       </form>
       <br/><br/><br/>
              
     </div>
	 </div>
	
       
       <?php }?>
         
      
	
	
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

