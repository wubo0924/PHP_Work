<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- this page takes the reference from http://www.aliexpress.com-->
<!-- this page takes the reference from http://www.sellshoe.net-->
  <head>
    <title>Shoe1 Page</title>
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
			<td align="center"><a href="products.php">Products</a></td>
			<td align="center"><a href="sitemap.php">Site Map</a></td>
			<td align="center"><a href="#">About Us</a></td>
		  </tr>
		</table>
  		    
	</div>
	
	<?php include 'additem.php'; ?>
	
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
        <p><a href="#" title="payment method"><img alt="payment methods" src="images/paymentmethods.gif"/></a></p>
      </div>   
    </div>
    
    
    <div class="product_center">
     <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <table width="100%">
        <tr>
          <td><img src="images/products/shoes/shoe1_d.png" alt="index"/></td>
          <td><p>2011-2012 high heel shoes fashion women<br/> shoes round toe platform high heels pumps<br/> step-in design on stiletto heel<hr/></p>
          <p>Price:<span style="color:#f61200">&#32;AUD &#36;136.84</span> &#47;piece</p>
          <p>Bulk Price:&#32;5&#37; off</p>
          <p>Color:&#32;Silver</p>
          <p>Shoe US Size:&#32;6.5</p>
          <p>Quantity:&#32;<input type="text" name="quantity" value="1" size="2" onkeyup="return ValidateNumber(this,value)"/></p>
          <p>Shipping Cost:<span style="color:#009700">&#32;Free Shipping</span></p>
          
          <input type="hidden" name="name" value="shoe1"/>
          <input type="hidden" name="title" value="2011-2012 high heel shoes fashion women"/>
          <input type="hidden" name="price" value="136.8"/>
          <p><input type="submit" value="Add to cart" name="add"/></p>
          </td>
        </tr>
        <tr>
          <td colspan="2">
          <hr/>
          <p>
<span style="color:#cc6600">Item specifics</span></p>
<ul>
<li>Gender:&#32;Women</li>
<li>Item Type:&#32;Pumps</li>
<li>Place of Origin:&#32;China (Mainland)</li>
<li>Toe Style:&#32;Closed Toe</li>
<li>Toe Shape:&#32;Round Toe</li>
<li>Heel Hight:&#32;High (3" and up)</li>
<li>Decorations:&#32;Rhinestone</li>
<li>Occasion:&#32;Party</li>
<li>Pump Type:&#32;Basic</li>
<li>Heel Type:&#32;Platforms</li>
<li>Outsole Material:&#32;Rubber</li>
</ul>
          </td>
        </tr>
        <tr>
          <td colspan="2">
           <p>
           <span style="color:#cc6600">Product Description</span><br/>
             <span style="font-size:30px;color:#ab5494">&#32;&#32;&#32;&#32;&#32;&#32;Welcome To our Store!!</span>
           </p>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
           <img src="images/products/shoes/shoe1_1.jpg" alt="1"/><br/>
           <img src="images/products/shoes/shoe1_2.jpg" alt="2"/><br/>
           <img src="images/products/shoes/shoe1_3.jpg" alt="3"/><br/>
          </td>
        </tr>
      </table>
      </form>
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
