<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Home Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	
	
	<script type="text/javascript" src="js/main.js"></script>
	
  </head>
  
  <body onload="setSize();">
  
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
		    <td align="center"><a href="#">Home</a></td>
			<td align="center"><a href="register.php">Join Us</a></td>
			<td align="center"><a href="products.php">Products</a></td>
			<td align="center"><a href="sitemap.php">Site Map</a></td>
			<td align="center"><a href="#">About Us</a></td>
		  </tr>
		</table>
  		    
	</div>
	
    <div id="m_div">
	
	<div id="middle_left">
	  <div class="catalogue_bar"><p>&nbsp;Categories</p></div>
         <div class="catalouge_list"><img src="images/category_arrow1.gif" alt="arrow"/>&nbsp;&nbsp;<a href="#" onclick="spread_fashion();">Fashion</a></div>
           <div id="child_fashion" class="c_underlist"><p>
             <img src="images/category_arrow.gif" alt="arrow"/><a href="shoes.php">Shoes</a></p>
           </div>
         <div class="catalouge_list"><img src="images/category_arrow1.gif" alt="arrow"/>&nbsp;&nbsp;<a href="#" onclick="spread_electronics();">Electronics</a></div>
           <div id="child_electronics" class="c_underlist"><p>
             <img src="images/category_arrow.gif" alt="arrow"/><a href="laptops.php">Laptops</a></p>
           </div>
         <div class="catalouge_list"><img src="images/category_arrow1.gif" alt="arrow"/>&nbsp;&nbsp;<span class="fake_link">Sport</span></div>
         <div class="catalouge_list"><img src="images/category_arrow1.gif" alt="arrow"/>&nbsp;&nbsp;<span class="fake_link">Entertainment</span></div>
         <div class="catalouge_list"><img src="images/category_arrow1.gif" alt="arrow"/>&nbsp;&nbsp;<span class="fake_link">Health &amp; Beauty</span></div>
         <div class="catalouge_list"><img src="images/category_arrow1.gif" alt="arrow"/>&nbsp;&nbsp;<span class="fake_link">Home &amp; Garden</span></div>
     
         <div class="catalogue_bar"><p>&nbsp;FAQs</p></div>
         <div class="left_faq"> 
          <p>Q1:&nbsp;What&nbsp;does&nbsp;this&nbsp;<br/>website&nbsp;provide?<br/>
           A1:&nbsp;This&nbsp;is&nbsp;online<br/>&nbsp;shopping&nbsp;website&nbsp;<a href="#" title="show details">&hellip;&hellip;</a><br/>
           Q2:&nbsp;How much the shipping charge?<br/>
           A2:&nbsp;Standard&nbsp;shipping<br/>&nbsp;charge&nbsp;is&nbsp;$5&nbsp;every&nbsp;        500g.&nbsp;If&nbsp;you&nbsp;purchase<br/>&nbsp;more&nbsp;than&nbsp;one&nbsp;<a href="#" title="show details">&hellip;&hellip;</a><br/>
           <br/>
          </p>
          <p style="text-align:right"><a href="#" title="more question">More&nbsp;Info</a></p>
         </div>       
      <div class="left_faq">
        <p><a href="#" title="payment method"><img alt="payment methods" src="images/paymentmethods.gif"/></a></p><!--reference from http://www.uggstore.com.au/images/paymentopts.gif -->
      </div>   
    </div>
    
    
    <div id="middle_center">
      <div><img alt="sale" src="images/greeting.gif"/></div><!-- reference from http://www.uggstore.com.au/images/greeting.gif -->
      <div class="mainarea_bar"><p>&nbsp;&nbsp;Products</p></div>
      <div class="mainarea">
        <table style="text-align:center">
          <tr>
            <td><img alt="red" src="images/products/w_shoe1.jpg"/></td> 
            <td><img alt="red" src="images/products/w_shoe2.jpg"/></td>
            <td><img alt="red" src="images/products/m_shoe1.jpg"/></td>
            <td><img alt="red" src="images/products/m_shoe2.jpg"/></td>
            <td><img alt="red" src="images/products/w_shoe3.jpg"/></td>
          </tr>
          <tr>
            <td>Beautiful red color women shoes<br/><span style="color:red">$19AUD</span></td>
            <td>Beautiful white color cloth shoes<br/><span style="color:red">$10AUD</span></td>
            <td>Beautiful outdoor shoes<br/><span style="color:red">$10AUD</span></td>
            <td>Beautiful white color cloth shoes<br/><span style="color:red">$10AUD</span></td>
            <td>Beautiful women casual shoes<br/><span style="color:red">$10AUD</span></td>
          </tr>
         </table>
       </div>
     
      <div class="mainarea">
        <table style="text-align:center">
          <tr>
            <td><img alt="red" src="images/products/iphone4s.jpg"/></td> 
            <td><img alt="red" src="images/products/ipad2.jpg"/></td>
            <td><img alt="red" src="images/products/macair.jpg"/></td>
            <td><img alt="red" src="images/products/galax.jpg"/></td>
            <td><img alt="red" src="images/products/boss.jpg"/></td>
          </tr>
          <tr>
            <td>Brand new iphone4s<br/><span style="color:red">$19AUD</span></td>
            <td>Brand new ipad2<br/><span style="color:red">$10AUD</span></td>
            <td>Brand new Mar Air<br/><span style="color:red">$10AUD</span></td>
            <td>Brand new Galax<br/><span style="color:red">$10AUD</span></td>
            <td>Brand new B earphone<br/><span style="color:red">$10AUD</span></td>

          </tr>
        </table>
      </div>
    </div>
    
    
    <div id="middle_right">
       <?php 
       if($admin){?>
         <div class="right_bar"><p>&nbsp;Shopping Center</p></div>
       <div class="right_textarea">
       <br/>
         <p>&nbsp;Hi, <?php echo $name;?>.</p>
         <p>&nbsp;Welcome shopping here.</p>
         <p>&nbsp;check your <a href="shoppingcart.php" style="color:#1c3062;text-decoration:underline;">shoppingcart.</a></p>
        <br/> 
      </div>

       <?php }else{?>
       <div class="right_bar"><p>&nbsp;Login Here</p></div>
       <div class="right_textarea">
         <form action="logaction.php?logaction=in" method="post">
           <br/>
           <p>&nbsp;User Name</p>
           <p>&nbsp;<input type="text" name="username"/></p>
           <p>&nbsp;Password</p>
           <p>&nbsp;<input type="password" name="password"/></p>
           <p>
           &nbsp;<input type="submit" value="Submit" name="submit" />
           <input type="reset" value="Reset" name="reset"/><br/><br/>
           </p>
           <?php $error=$_GET['error'];
           if($error=="1"){
              echo '<p style="font-size:10px;color:red">&nbsp;Invalid username or password</p>';
           }
           ?>
         </form>
      </div>

       <?php }?>
             
      <div class="right_bar">
        <p>&nbsp;Customer Service</p>
      </div>
      <div class="right_textarea">
        
        <p><br/>&nbsp;<a href="#">Shipping</a><br/></p>
        <p>&nbsp;<a href="#">Size Guide</a><br/></p>
        <p>&nbsp;<a href="#">Return Policy</a><br/></p>
      </div>
       <div class="right_bar">
        <p>&nbsp;Community</p>
      </div>
      <div class="right_textarea">
       
       <p style="margin-top:0"><br/>&nbsp;<img alt="facebook" src="images/facebook.jpg"/>&nbsp;<a href="#">Facebook</a></p>
       <p style="margin-top:0">&nbsp;<img alt="twitter" src="images/twitter.jpg"/>&nbsp;<a href="#">Twitter</a></p>
       <p style="margin-top:0">&nbsp;<img alt="blog" src="images/blog.jpg"/>&nbsp;<a href="#">Blog</a></p>
      </div>
      
         </div>
    </div>
    

    <div id="footer">
    <hr/>
    <p>Copyright &#169; 2012 eBuy Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners. Use of this Web site constitutes acceptance of the eBuy<br/><a href="privacy.php" title="Privacy policy">Privacy Policy</a>.<br/>
    Current Date:<script>document.write(currentDate());</script> | Last Modification:<script>document.write(lastModifiedDate());</script>
    </p>        
          
    </div>
   
     
  </body>
  
</html>
