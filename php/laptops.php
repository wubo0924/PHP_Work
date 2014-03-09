<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Laptops Page</title>
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
         <table cellpadding="0" cellspacing="0">
           <tr><td colspan="3" class="td1">&nbsp;Laptops</td></tr>
           <tr>
             <td class="td1_11"><img src="images/products/laptop/laptop1.jpg" alt="laptop1"/></td>
             <td class="td1_12">The ThinkPad T420s 14" Notebook Computer (Black) from Lenovo takes the no-nonsense, business-oriented side of Lenovo ThinkPad notebooks and adds a touch of personality for customer-facing roles in small- to medium-sized businesses. The result is a slimmed down 14-inch notebook computer that weighs just under 4 pounds. This Lenovo notebook is also wrapped in a refined, soft matte coating with a sleek black finish.</td>
             <td class="td1_11" align="center">

$820AUD<br/>
Brand New<br/>
In Stock<br/>
Free Shipping<br/>
<a href="laptop1.php" class="detail_link">Details</a><br/>
</td>
           </tr>
           <tr>
             <td class="td1_11"><img src="images/products/laptop/laptop2.jpg" alt="laptop"/></td>
             <td class="td1_12">
The 13.3" MacBook Air Notebook Computer from Apple is an extremely portable, stunningly designed laptop computer. Apple's engineers have leveraged the lessons they learned in designing the miniaturized iPad and applied them to the design of this 3-pound computer.<br/>
To say that the Air is svelte is all at once stating the obvious and understating the truth. The system is defined by its sleek lines and stunning aluminum enclosure. At its thickest point the computer is only 0.68" -- it tapers down to 0.11" at its thinnest.</td>
             <td class="td1_11" align="center">$1200AUD<br/>
Brand New<br/>
In Stock<br/>
Free Shipping<br/>
<a href="laptop2.php" class="detail_link">Details</a><br/>
</td>
           </tr>
           <tr>
             <td class="td1_11"><img src="images/products/laptop/laptop3.jpg" alt="laptop3"/></td>
             <td class="td1_12">The Laptop has been completely disassembled and inspected. The CPU Cooling Fan and Heat Sink were thoroughly cleaned  and reinstalled using new Thermal Grease. The interior and exterior of the Laptop was throughly cleaned as well. The LCD hinges have been checked for tightness. The CPU and Motherboard part numbers have been checked to make sure they match the original factory specifications that came with the Model Number of the Laptop. The Laptop was then carefully reassembled making sure that all screws were of the proper length and installed in their proper locations. </td>
             <td class="td1_11" align="center">$820AUD<br/>
Brand New<br/>
In Stock<br/>
Free Shipping<br/>
Details<br/></td>
           </tr>
           <tr>
             <td class="td1_11"><img src="images/products/laptop/laptop4.jpg" alt="laptop4"/></td>
             <td class="td1_12"> This auction is for a used Hewlett Packard NC8430 Laptop. These units are in very good condition and come with 4GB Ram, 80GB Hard Drive and DVD/CDRW drive. This powerhouse holds its own meeting deadlines and tackling complex projects! The HP NC8430 has a tough magnesium-alloy chassis and display enclosure, and the kind of features that matter: a sizeable display, a comfortable keyboard, and corporate-level security features. The nc8430 boasts almost every port and connection a mobile professional will need, starting with four-pin FireWire; S-Video; VGA; three USB 2.0 ports; PC card slot; SD card, and Smart Card reader; plus headphone and microphone jacks.</td>
             <td class="td1_11" align="center">$820AUD<br/>
Brand New<br/>
In Stock<br/>
Free Shipping<br/>
Details<br/></td>
           </tr>
         </table>
    </div>
    
    
    
    </div>
    

    <div id="footer">
    <hr/>
    <p>Copyright &#169; 2012 eBuy Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners. Use of this Web site constitutes acceptance of the eBuy<br/><a href="privacy.html" title="Privacy policy">Privacy Policy</a>.</p>
    
    
         <div>
         <table>
         <tr>
          <td> <p>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
  </p>
</td>
     <td>
      <p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</p></td>
    </tr>
    </table>
    </div>

    
    </div>
     
  </body>
</html>
