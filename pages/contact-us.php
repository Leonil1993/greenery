<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/contact-us.css">
    <?php include_once'../pages/head.php'; ?>
    <title>Greenery | About-us</title>
</head>
<body>
    <header>
        <nav>
        	<div class="menu-icon">
	        	<div class="bars">
	        		<i class="i fa-bars"></i>
		        </div>
			    <div class="times d-none">
			    	<i class="i fa-times"></i>
			    </div>
	        </div>
        	<div class="div-nav d-flex">
        		<div class="logo">
        			<a href="home.php"><img class="img" src="../images/logo.png" alt="lg"></a> 
	        	</div>
	            <div class="menu">
	            	<ul>
		                <li><a href="home.php">Home</a></li>
		                <li><a href="about-us.php">About us</a></li>
		                <li class="active"><a href="contact-us.php">Contact us</a></li>
		                <li><a href="admin-login.php">Admin</a></li>
		            </ul>
	            </div>
        	</div>
        </nav>
    </header>
    <main>
    	<div class="header-contactus margin">
    		<div class="full-width">
    			<div class="header-title">
	    			<h1>Contact-us</h1>
	    		</div>
    		</div>
    		<div class="main-container">
	    		<div class="div-content margin-top">
			    	<div class="content form">
			    		<form action="#" method="POST">
			    			<h3 class="form-title">Subscribe</h3>
			    			<div class="form-item">
			    				<div data-border="email" class="l-i border-white">
			    					<label for="email">Email:</label>
			    					<input data-input="email" class="input" type="text" name="email">
			    				</div>
			    				<div class="div-message">
			    					<span data-span="email" class="span"></span>
			    				</div>
			    			</div>
			    			<div class="form-item">
			    				<div data-border="firstname" class="l-i border-white">
			    					<label for="firstname">Firstname:</label>
			    					<input data-input="firstname" class="input" type="text" name="firstname">
			    				</div>
			    				<div class="div-message">
			    					<span data-span="firstname" class="span"></span>
			    				</div>
			    			</div>
			 				<div class="form-item">
			    				<div data-border="lastname" class="l-i border-white">
			    					<label for="lastname">Lastname:</label>
			    					<input data-input="lastname" class="input" type="text" name="lastname">
			    				</div>
			    				<div class="div-message">
			    					<span data-span="lastname" class="span"></span>
			    				</div>
			    			</div>
			    			<!--<div class="form-item">
			    				<div data-border="password" class="l-i border-white">
			    					<label for="password">Password</label>
			    					<input data-input="password" class="input" type="password" name="password" value="12345678">
			    				</div>
			    				<div class="div-message">
			    					<span data-span="password" class="span"></span>
			    				</div>
			    			</div>
			    			<div class="form-item">
			    				<div data-border="confirm-password" class="l-i border-white">
			    					<label for="confirm-password">Confirm Password</label>
			    					<input data-input="confirm-password" class="input" type="password" name="confirm-password" value="12345678">
			    				</div>
			    				<div class="div-message">
			    					<span data-span="confirm-password" class="span"></span>
			    				</div>
			    			</div>-->
			    			
			    			<div class="get-started"> 
			        			<button id="subscribe-button" type="submit" class="submit" name="submit" onclick="//errorValidator.subscribe();">Subscribe</button>
			        		</div>
			    		</form>
			    	</div>
			    	<div class="content address">
			    		<h3 class="form-title">Contact Details</h3>
			    		<div class="details">
				    		<p>Email: <span><a href="mailto://the.greeny@gmail.com">the.greneery@gmail.com</a></span></p>
				    		<p>Phone number: <span><a href="tel://09056523658">09056523658</a></span></p>
				    		<p>Address: <span><a href="https://googlemap.com/Ecoland Davao City">Ecoland Davao City</a></span></p>
			    		</div>
			    		<div class="social-icons">
			    			<ul>
			    				<li><a href="facebook.com/greneery"><spn class="facebook"></span></a></li>
			    				<li><a href="twitter.com/greneery"><span class="twitter"></span></a></li>
			    				<li><a href="instagram.com/greneery"><span class="instagram"></span></a></li>
			    			</ul>
			    		</div>
			    		<div>
			    			<h4 class="map-title">Map</h4>
			    			<div class="map">
			    				
			    			</div>
			    		</div>
			    	</div>
		        </div>
	    	</div>
    	</div>
    </main>
    <?php include_once'footer.php' ?>
    <script type="text/javascript">responsive.start("contact-us");errorValidator.subscribeProcess();errorValidator.subscribe();</script>
</body>
</html>
