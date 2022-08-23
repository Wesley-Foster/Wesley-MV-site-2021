<?php
	session_start();
?>
<!doctype html>
<html>
	
<style>
	.orderInfo{
		padding-left: 5%;
		padding-right: 5%;
	}

</style>
<head>
<meta charset="utf-8">
<title>Order Details</title>
	<link href="styles.css" rel="stylesheet" type="text/css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind&display=swap" rel="stylesheet">
	
</head>
<body>
	<header>
			
			<div class="container">
				
				<img src="logo.png" alt="logo" class="logo" style="width: 25vw; height: 20vh">
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="aboutus.php">About Us</a></li>	
						<li><a href="ordernow.php">Order Now</a></li>
					
				
					</ul>
					
				</nav>
			
			
			</div>
		</header>
	
	
	
<div class="page">
	<div style="margin: auto; text-align: center; padding-top: 1%">
		<h2>Thank You for Placing an Order!</h2>
		<hr>
	</div>
	<div class="orderInfo">
		<h4>Order name:</h4>
		<br>
		<?php echo $_SESSION['fName']?>
		<br>
		<br>
		
		<h4>Shipping Information:</h4>
		<br>
		<?php echo $_SESSION['adress'] . ", " . $_SESSION['cAndS']?>
		<br>
		<br>
		
		<h4>Robot Model:</h4>
		<br>
		<?php echo $_SESSION['robot']?>
		<br>
		<br>
		
		<h4>Aditional Notes:</h4>
		<br>
		<?php echo $_SESSION['notes']?>
		<br>
		<br>
		<h4>Price:</h4>
		<?php echo("75,000$ - 5% = 71,250$") ?>
		<br>
		<br>
			
		
	</div>
	
	
	
</div>
	
	
</body>
</html>