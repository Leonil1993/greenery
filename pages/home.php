<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once'../pages/head.php'; ?>
    <title>Greenery | Home</title>
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
		                <li class="active"><a href="home.php">Home</a></li>
		                <li><a href="about-us.php">About us</a></li>
		                <li><a href="contact-us.php">Contact us</a></li>
		                <li><a href="admin-login.php">Admin</a></li>
		            </ul>
	            </div>
        	</div>
        </nav>
    </header>
    <main>
    	<div class="main-container">
    		<div class="div-content">
		    	<article class="article-a">
		    		<h1>The Greenery Station</h1>
			        <h2>From our greenhouse to your house</h2>
			        <p>We are dedicated in making plants accesible to you by caring for<br> and establishing home ready plants that would complement your space</p>
			         <div class="get-started"> 
			            <a href="contact-us.php">Get Started</a>
			        </div>
		    	</article>
		    	<article class="article-b">
		    		<img src="../images/plant10.png">
		    	</article>
	        </div>
    	</div>
    </main>
    <?php include_once'footer.php' ?>
    <script type="text/javascript">
    	responsive.start("home");
    </script>
</body>
</html>
