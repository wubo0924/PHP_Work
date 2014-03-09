<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Privacy page</title>
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
			<td align="center"><a href="sitemap.php">Site Map</a></td>
			<td align="center"><a href="#">About Us</a></td>
		  </tr>
		</table>
  		    
	</div>
	
   
   <div id="m_div" class="center_div">
      <p><span  class="title">Privacy Policy</span><br/>

<!--reference from http://1shoppingcart.com/legal/privacy-policy -->

<span>eBuy&#169; respects the privacy of its customers and the visitors and users of its websites.</span><br/>

This Privacy Policy ("Privacy Policy") is intended to inform you of our policies and practices regarding the collection, use and disclosure of any personal information we obtain about you based upon your use of our website, products or services. "Personal Information" is information about you that is personally identifiable to you such as your name, address, e-mail address, phone number, any transactions you conduct on our websites or offline with us, as well as other non-public information that is associated with the foregoing.

We pay close attention to how Personal Information is used and shared, and we use Personal Information sensibly.

We act as a service provider to our customers and may process and store on behalf of our customers Personal Information that our customers collect about third parties. We do not own that Personal Information.<br/>
<span>User Consent</span><br/>

By visiting our websites, using our products or services or otherwise submitting Personal Information through our websites, you agree to the terms of this Privacy Policy.

You expressly consent to the processing of your Personal Information according to this Privacy Policy. Personal Information may be processed by Web.com or Web.com's trusted vendors or other third parties in the country where it was collected as well as other countries (including the United States) where laws regarding processing of Personal Information may be less stringent.<br/>
<span>Collection of Personal Information</span><br/>

The Personal Information we gather from you helps us learn about our customers and potential customers. We use this information to better tailor the features, performance and support of our solutions, products and services, and to contact you from time to time about with information and offers about our products and services.<br/>
<span>Personal Information You Provide to Us</span><br/>

We collect Personal Information that you submit to us voluntarily. The Personal Information we collect includes, but is not limited to, the following: name, mailing address, Web address, telephone number, e-mail address, and information contained in any e-mail or other communication you send to us or information you give to us in any other way.<br/>
<span>Personal Information Collected via Technology</span><br/>

As you navigate our website, certain passive information may also be collected, including your Internet Protocol address, browser type, and operating system. We also use cookies, a small file stored by your web browser on your computer, and navigational data like Uniform Resource Locators (URLs) to gather information regarding the date and time of your visit and the solutions and information for which you searched and viewed. This type of information is collected to make our solutions and services more useful to you by understanding what pages you click on during your visit to our websites. Such information will allow us to improve and personalize your experience.

Accepting cookies through your web browser is your personal choice. You can set your browser to disable cookies. However, if you choose not to accept cookies, we may not be able to provide you with as good of an experience as one that is specifically tailored to your needs by utilizing the cookie.<br/>
<span>Personal Information We Receive from Other Sources</span><br/>

We may receive Personal Information about you from other sources like telephone or telefax. We may add this information to the information we have already collected in order to improve the solutions and services we provide.<br/>
<span>Use of Information</span><br/>

In general, Personal Information you submit to us is used either to set up solutions or purchase website marketing services, respond to requests that you make, to process transactions, to facilitate your request for a quote from a third party service provider or to aid us in serving you better. We may share your Personal Information with other businesses to offer you products, services, and promotions. In addition, we may share your Personal Information with other businesses that may contact you regarding requests for service. We may also use your Personal Information to provide you with electronic newsletters or promotional e-mails as well as information and offers about our products and services.

We may use third-party advertising partners and its service providers in order to deliver to you banner advertisements and other advertising tailored to your interests when you visit certain websites. They will collect anonymous information about your visits to our site, and your interaction with our products and services. They may also use information about your visits to this and other Websites to target advertisements for goods and services and may be used to keep track of user response to each advertisement. These targeted advertisements may appear on our site or on other sites that you visit. The anonymous information may be collected through the use of a pixel tag or cookies, which are industry standard technologies used by most major websites. No personally identifiable information is collected in this process.

If you do not want such companies to collect this information you may opt-out. Opting-out will not in any way affect your use of our site. To learn more about the use of this information or choose not to have this information used by certain third-party advertising partners by opting out please click here or visit the Network Advertising Initiative by clicking here . Please note that if you delete your cookies, use a different browser, or buy a new computer, you will need to renew your opt-out choice.<br/>
<span>Disclosure of Personal Information</span><br/>

Except as otherwise stated in this Privacy Policy, we do not generally sell your Personal Information to third parties. In order to build the solutions for you, we may engage third parties to assist us, and, in connection with such assistance, we may provide them with Personal Information that you have provided and that is necessary for them to assist us. We may also share your Personal Information with trusted vendors or other third parties in order for them to provide you with offers that we think you will find valuable.

To drive traffic to your website and to make your website easier to find, we will disclose keywords about your business, your business name, general and specific description about your business, information about your location, and information about your products and services to third-party services and to the general public.

We also use third parties to maintain and store your Personal Information and to process any payment you make to us. Generally, these third parties are required not to use your Personal Information other than to provide the services requested by eBuy.

We currently have subsidiaries and other companies under a common control (collectively, "affiliates"). We may share some or all of your Personal Information with these affiliates, in which case we will require our affiliates to honor this Privacy Policy.

If our company or our assets are acquired by another company, that company will possess the Personal Information collected by us and it will assume the rights and obligations regarding your Personal Information as described in this Privacy Policy.

We may disclose your Personal Information if we believe in good faith that such disclosure is necessary to (a) comply with relevant laws or to respond to subpoenas or warrants served on eBuy; or (b) to protect and defend the rights or property of eBuy or users of our websites or our customers' websites.<br/>
<span>Your Choices Regarding Your Personal Information</span><br/>

Should you decide to stop receiving further communications or newsletters from us, you will have the opportunity to "opt-out" by following the unsubscribe instructions provided in the e-mail. If at any time you wish to subscribe to any communications from us, you may do so by contacting us at support at eBuy.com. Despite your indicated e-mail preferences, we may send you e-mail regarding updates to legal notices applicable to the account you created with us. From time to time, we may also contact you by telephone to offer you products or services which we believe may be valuable to you. Should you prefer not to receive such calls, please advise the representative who contacts you or contact customer service.<br/>
<span>Regarding Minors</span><br/>

Our websites are not designed for minors under the age of 18. We do not intentionally gather Personal Information about visitors who are under the age of 18.<br/>
<span>Links to Other Sites</span><br/>

Our provision of a link to any other website or location is for your convenience and does not signify our endorsement of such other website or location or its contents. We have no control over, do not review, and cannot be responsible for these outside websites or their content. Please be aware that the terms of our Privacy Policy do not apply to these outside websites.<br/>
<span>Security</span><br/>

We use reasonable measures to maintain the security of your Personal Information. Even so, technical mistakes are possible. No company, including eBuy, can fully eliminate security risks associated with Personal Information.
     </p>
     </div>
   <div id="footer">
    <hr/>
    <p>Copyright &#169; 2012 eBuy Inc. All Rights Reserved. Designated trademarks and brands are the property of their respective owners. Use of this Web site constitutes acceptance of the eBuy<br/><a href="#" title="Privacy policy">Privacy Policy</a>.</p>
    
    
    </div>
    
         
     
  </body>     
    
</html>
