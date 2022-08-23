<!doctype html>
<?php

	session_start();

	


	$errors = ['fName' => '', 'adress' => '', 'cAndS' => ''];
	
if(isset($_GET['submit'])){
	if(empty($_GET['fName'])){
		$errors['fName'] = 'A name is required <br />';
	} else{
		echo htmlspecialchars($_GET['fName']);
		echo ' ';
		$_SESSION['fName']=$_GET['fName'];
	}
	if(empty($_GET['adress'])){
		$errors['adress'] = 'An address is required for shipping <br />';
	} else{
		echo htmlspecialchars($_GET['adress']);
		echo ' ';
		$_SESSION['adress']=$_GET['adress'];
	}
	if(empty($_GET['cAndS'])){
		$errors['cAndS'] = 'A city and state is required <br />';
	}else{
		echo htmlspecialchars($_GET['cAndS']);
		$_SESSION['cAndS']=$_GET['cAndS'];
	}
	$_SESSION['notes']=$_GET['notes'];
	$_SESSION['robot']=$_GET['robot'];
	
	
	if(array_filter($errors)){
		
	}else{
		header('Location: confOrder.php');
	}
}


?>
<style>
div.page
{
    display: block;
    text-align: center;
}
form
{
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
}


</style>
<html>
<head>
<meta charset="utf-8">
<title>MV ROBOTICS - ORDER NOW</title>
</head>
<body>
	<meta charset="utf-8">
		<meta name="description" content="Maumee Valley Robotics Team Website">
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
						<li><a href="#">About Us</a></li>	
						<li><a href="ordernow.php">Order Now</a></li>
					
				
					</ul>
					
				</nav>
			
			
			</div>
		</header>
	
	
	
	
	<!--OrderForm-->
<div class="page">
	<h3><u>ORDER TODAY FOR 5% off!</u></h3>
	<form action="ordernow.php" method="GET" style="padding-top: 1vh">
		<label>Full Name:</label>
		<input type="text" name="fName" style="margin-bottom: 3%">
		<div  style="color: #9C0002;"><?php echo $errors['fName']; ?></div>
		<br>
		<label>Address:</label>
		<input type="text" name="adress" style="margin-bottom: 3%">
		<div  style="color: #9C0002;"><?php echo $errors['adress']; ?></div>
		<br>
		<label> City and State:</label>
		<input type="text" name="cAndS" style="margin-bottom: 3%">
		<div  style="color: #9C0002;"><?php echo $errors['cAndS']; ?></div>
		<br>
		<label for="robot">Robot Type:</label>
		<select name="robot" id="robot" style="margin-bottom: 3%">	
			<option value="" style="color: grey">Select A Robot...</option>
			<option value="D.O.T.S">D.O.T.S</option>
		</select>
		<br>
		<label for="notes">Additional Requests:</label>
		<br>
		<textarea name="notes" id="notes" cols="100" rows="10"></textarea>
		<br>
		<button type="submit" name="submit" value="submit">Submit</button>
	
	</form>
</div>
	
</body>
</html>