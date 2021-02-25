<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/about-us.css">
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
		                <li class="active"><a href="about-us.php">About us</a></li>
		                <li><a href="contact-us.php">Contact us</a></li>
		                <li><a href="admin-login.php">Admin</a></li>
		            </ul>
	            </div>
        	</div>
        </nav>
    </header>
    <main>
    	<div class="header-aboutus margin">
    		<div class="full-width">
    			<div class="header-title">
	    			<h1>About-us</h1>
	    		</div>
    		</div>
    		<div class="main-container">
	    		<div class="div-content margin-top">
			    	<article class="article-a item">
			    		<div class="img">
			    			<img src="../images/img1.jpg">
			    		</div>
			    		<div class="parag">
			    			<p><strong>Planting plants with over 35 years.</strong></p>
			    			<br>
			    			<p>The Greenery Station is grafted from our family’s more than 35 years of passion for planting plants</p>
			    		</div>
			    	</article>
			    	<article class="article-b item">
			    		<div class="parag">
			    			<p>Being passionate with our work helps us build more sustainable gardens as it goes beyond just the aesthetics of the gardens we create.</p>
			    			<br>
			    			<p>We will work with you from conceptualization to execution to make sure that your space will be a reflection of your personality and specific needs.</p>
			    		</div>
			    		<div class="img">
			    			<img src="../images/img2.jpg">
			    		</div>
			    	</article>
			    	<article class="article-c item">
			    		<div class="img">
			    			<img src="../images/img3.jpg">
			    		</div>
			    		<div class="parag">
			    			<p>Everyone Should Live with a Little More Green
							The Greenery Station is here to help strengthen your relationship with plants. We make buying plants easy by delivering healthy, ready-to-go plants to your door and setting you up with the tips and tricks you need to help your plants thrive. Plants make life better. We make plants easy.</p>
			    		</div>
			    	</article>
		        </div>
	    	</div>
    	</div>
    </main>
    <?php include_once'footer.php' ?>
    <script type="text/javascript">
    	responsive.start("about-us");
    </script>
</body>
</html>
