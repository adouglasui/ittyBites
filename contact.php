<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Itty Bites</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans|Dancing+Script|Homemade+Apple' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/ico" href="images/favicon.ico"/>
    <style type="text/css">
    	h2, h3, p#formSub {
			font-family: 'Droid Sans', sans-serif;
			font-weight: 400;
			color: #f43f80;
			margin-left: 60px;
			margin-bottom: 20px;
		}

			
    </style>
</head>

<body>
  <div id="wrapper">
    <header>
        <div id="topBanner">
            <!-- This is for the top teal banner, above the logo-->
        </div>
        
        <div id="logo">
            <!--logo--><img src="images/logo.png" alt="Itty Bites Logo" /><!--/logo-->
        </div>
        <nav>
			<div class="ribbon">
			<div class="ribbon-stitches-top"></div>
			<div class="ribbon-content">
				  <ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="products.html">Products</a>
						<ul id="products">
							<li><a href="products.html">Cake Pops</a></li>
							<li><a href="#og-grid2">Cupcakes</a></li>
							<li><a href="#og-grid3">Chocolate Treats</a></li>
						</ul>
					</li>
					<li><a href="#">Order</a>
							<ul id="order">
							<li><a href="order-cakepop.html">Cake Pops</a></li>
							<li><a href="order-cupcake.html">Cupcakes</a></li>
                            <li><a href="contact.htm">Chocolate Treats</a></li>
						</ul> 
					</li>
					<li><a href="testimonials.html">Testimonials</a></li>
					<li><a href="about.html">About</a></li>
					<li class="currentPage"><a href="contact.htm">Contact</a></li>
				</ul>
				 </div>
			<div class="ribbon-stitches-bottom"></div>
			</div>
		 </nav>
     </header>
     
     <section id="mainContent">
     	<!--Main page content-->
        <!-- php variables, name, phone, email, subject, message -->
     		<h1>Contact Me</h1>
			<?php
				$name = $_POST['name'];
				$phone = $_POST['phone'];
				$email = $_POST['contactMeEmail'];
				$subject = $_POST['subject'];
				$msg = $_POST['message'];
				
				$to = 'ittybiteswindsor@gmail.com';
				
				//Time to check our variables to see if they have invalid information or left it empty.
				if (is_numeric($name)||(empty($name))){
					echo "<h3>There is an error in the name field. Please go back and re-submit.</h3>";
				} else if (empty($phone)) {
					echo "<h3>There is an error in the phone field. Please go back and re-submit.</h3>";
				} else if (empty($email)) {
					echo "<h3>Please go back and enter your email address.</h3>";
				} else if (empty($subject)) {
					echo "<h3>Please go back and include a subject.</h3>";
				} else if (empty($msg)) {
					echo "<h3>Please go back and write your message.</h3>";
				} else { //email the form if there is no errors
					
					mail($to, $subject, $msg, 'From: ' . $email);
					
					echo '<h2>Thanks for submitting the form.</h2><br />';
					echo '<p id="formSub">Name:     ' . $name . '<br />';
					echo 'Email:    ' . $email . '<br />';
					echo 'Subject:  ' . $subject . '<br />';
					echo 'Message:  ' . $msg . '</p>';
				}
			?>
     </section>
     
     <aside>
     	<!--right column. used for promos, contact info, anything we might need-->
       
     </aside>
      <footer>
			<p id="emailAddy">&copy; Copyright 2013 - Itty Bites. Maintained by: <a href="http://aislingdouglas.com">ADouglas - Web Developer</a></p><a href="http://www.facebook.com/ittybiteswindsor" target="_blank"><img id="facebook" src="images/facebook.png" alt="Facebook" /></a><a href="http://www.instagram.com/itty_bites" target="_blank"><img id="instagram" src="images/instagram.png" alt="instagram" /></a>
		 </footer>
		 
	   </div>
	</body>
</html>
