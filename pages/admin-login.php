<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/admin-login.css">
    <?php include_once'../pages/head.php'; ?>
    <title>Greenery | Admin</title>
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
		                <li><a href="contact-us.php">Contact us</a></li>
		                <li class="active"><a href="admin-login.php">Admin</a></li>
		            </ul>
	            </div>
        	</div>
        </nav>
    </header>
    <main>
    	<div class="header-admin-login margin">
    		<div class="full-width">
    			<div class="header-title">
	    			<h1>Admin Login</h1>
	    		</div>
    		</div>
    		<div class="main-container">
	    		<div class="div-content margin-top">
			    	<div class="content form">
			    		<form action="#" method="POST">
			    			<h3 class="form-title">Log-in</h3>
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
			    				<div data-border="password" class="l-i border-white">
			    					<label for="password">Password:</label>
			    					<input data-input="password" class="input" type="password" name="password">
			    				</div>
			    				<div class="div-message">
			    					<span data-span="password" class="span"></span>
			    				</div>
			    			</div>
			    			<div class="get-started"> 
			        			<button id="login-button" type="submit" class="submit" name="submit">Login</button>
			        		</div>
			    		</form>
			    	</div>
		        </div>
	    	</div>
    	</div>
    </main>
    <?php include_once'footer.php' ?>
    <script type="text/javascript">responsive.start("contact-us");errorValidator.login();</script>
</body>
</html>
