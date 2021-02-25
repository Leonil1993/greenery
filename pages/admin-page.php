<?php session_start(); if (isset($_SESSION['admin'])){?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/admin-page.css">
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
		                <li class="active"><a href="admin-page.php">Admin</a></li>
		            </ul>
	            </div>
        	</div>
        </nav>
    </header>
    <main id="dashboard">
    	<div class="header-admin-page margin">
    		<div class="full-width">
    			<div class="header-title">
	    			<h1>Admin</h1>
	    		</div>
    		</div>
    		<div class="main-container">
	    		<div class="div-content margin-top">
			    	<div class="dashboard content">
			    		<div class="dashboard-cover">
			    			<h3 class="dashboard-title">Dashboard</h3>
				    		<div class="dashboard-item">
				    			<ul>
				    				<li id="profile" class="menu active">Accounts</li>
				    				<li id="logout" class="menu">Logout</li>
				    			</ul>
				    		</div>
			    		</div>
			    	</div>
			    	<div class="dashboard-details content">
			    		<div data-item="profile" class="profile item">
			    			<h3 class="dashboard-title">Accounts</h3>
				    		<div class="details-item">
				    			<form action="#" method="POST">
					    			<div class="form-item">
						    			<table>
						    				<tbody>
						    					<tr>
						    						<th>Id</th>
						    						<th>Firstname</th>
						    						<th>Lastname</th>
						    						<th>Email</th>
						    						<th>Actions</th>
						    					</tr> 
						    				</tbody>
						    			</table>
						    		</div>
					    		</form>	
				    		</div>
			    		</div>
				    	<div data-item="update-details" class="update-details item d-none">
			    			<h3>Edit Details</h3>
				    		<div class="details-item">
				    			<form action="#" method="POST">
				    				<div class="form-item update">
					    				<h4>Info</h4>
					    				<div data-border="id" class="l-i border-white">
					    					<label for="id">Id:</label>
					    					<input data-input="id" class="input" type="text" name="id" disabled="disabled">
					    				</div>
					    				<div class="div-message">
					    					<span data-span="id" class="span"></span>
					    				</div>
					    				<div data-border="firstname" class="l-i border-white">
					    					<label for="firstname">Firstname:</label>
					    					<input data-input="firstname" class="input" type="text" name="firstname">
					    				</div>
					    				<div class="div-message">
					    					<span data-span="firstname" class="span"></span>
					    				</div>
					    				<div data-border="lastname" class="l-i border-white">
					    					<label for="lastname">Lastname:</label>
					    					<input data-input="lastname" class="input" type="text" name="lastname">
					    				</div>
					    				<div class="div-message">
					    					<span data-span="lastname" class="span"></span>
					    				</div>
					    				<div class="update-button">
					    					<button name="update-info" class="edit-button">Update Info</button>
					    				</div>

					    				<!--<h4>Password</h4>
					    				<div data-border="old-password" class="l-i border-white">
					    					<label for="old-password">Old Password:</label>
					    					<input disabled="disabled" data-input="old-password" class="input" type="text" name="old-password">
					    				</div>
					    				<div class="div-message">
					    					<span data-span="old-password" class="span"></span>
					    				</div>
					    				<div data-border="password" class="l-i border-white">
					    					<label for="password">New Password:</label>
					    					<input data-input="password" class="input" type="password" name="password">
					    				</div>
					    				<div class="div-message">
					    					<span data-span="password" class="span"></span>
					    				</div>
					    				<div data-border="confirm-password" class="l-i border-white">
					    					<label for="confirm-password">Confirm Password:</label>
					    					<input data-input="confirm-password" class="input" type="password" name="confirm-password">
					    				</div>
					    				<div class="div-message">
					    					<span data-span="confirm-password" class="span"></span>
					    				</div>
					    				<div class="update-button">
					    					<button type="submit" name="update-password">Update Password</button>
					    				</div>-->

					    				<h4>Email</h4>
					    				<div data-border="email" class="l-i border-white">
					    					<label for="email">Email:</label>
					    					<input data-input="email" class="input" type="text" name="email">
					    				</div>
					    				<div class="div-message">
					    					<span data-span="email" class="span"></span>
					    				</div>
					    				<div class="update-button">
					    					<button name="update-email" class="edit-button">Update Email</button>
					    				</div>
					    			</div>
					    		</div>
				    		</form>		
			    		</div>
			    		<!-- <div data-item="delete-account" class="delete-account item d-none">
			    			<h3 class="dashboard-title">Delete Account</h3>
				    		<div class="details-item delete">
				    			<form action="#" method="POST">
				    				<div class="form-item">
						    			<div class="delete-button">
						    				<button type="submit" name="update-info">Delete Account</button>
						    			</div>
					    			</div>
				    			</form>	
				    		</div>
				    	</div> -->
			    	</div>
		        </div>
	    	</div>
    	</div>
    </main>
    <?php include_once'footer.php' ?>
    <script type="text/javascript">responsive.start("contact-us");errorValidator.start();const adminPage = new AdminPage(); adminPage.start();</script>
</body>
</html>
<?php }else{header('location:home.php');} ?>
