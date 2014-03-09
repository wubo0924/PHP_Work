<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Products Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/product.css" type="text/css"/>
	
	<script type="text/javascript" src="js/main.js">
	</script>
		
	
	
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
		    <td align="center"><a href="home.php">Home</a></td>
			<td align="center"><a href="register.php">Join Us</a></td>
			<td align="center"><a href="#">Products</a></td>
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
    
    
    <div class="product_center">
         <table cellpadding="0" cellspacing="0">
           <tr>
             <td colspan="3" class="td1">&nbsp;&nbsp;Fashion</td>
           </tr>
           <tr>
             <td><img src="images/products/shoes.jpg" alt="shoes"/></td>
             <td><img src="images/products/laptops.jpg" alt="laptops"/></td>
             <td><img src="images/products/accessories.jpg" alt="accessories"/></td>
           </tr>
           <tr>
             <td align="center" class="td2"><p><a href="shoes.php">Shoes</a></p></td>
             <td align="center" class="td2"><p><a href="laptops.php">Laptops</a></p></td>
             <td align="center" class="td2"><p>Accessories</p></td>
           </tr>
           
           <tr>
             <td colspan="3" class="td1">&nbsp;&nbsp;Electronics</td>
           </tr>
           <tr>
             <td><img src="images/products/clothes.jpg" alt="clothes"/></td>
             <td><img src="images/products/phones.jpg" alt="phones"/></td>
            <td><img src="images/products/accessories2.jpg" alt="accessories2"/></td>
           </tr>
           <tr>
             <td align="center" class="td2"><p>Clothes</p></td>
             <td align="center" class="td2"><p>Phones</p></td>
             <td align="center" class="td2"><p>Accessories</p></td>
           </tr>
        </table>
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
