<!DOCTYPE html>
<html>
<head>
<?php
include('connection.php');
require_once('connection.php');
if (isset($_POST['signup']))
{
	
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];
	
     $sql_query = "INSERT INTO user_details (user_email,user_password) 
	 VALUES 
	 ('$email','$pswd')";
	 

	if (mysqli_query($conn, $sql_query)) 
	{	
		echo "alert('Registered Successful !');
				window.location='../new_login.php'";
	}			
 
	else 
	{
		echo "Error Inserted record: " . mysqli_error($conn);
	}
 mysqli_close($conn);
 }
?>

	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	
</head>
<body>
	<div class="main">  
 <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
	<div class="shape"></div>
        <div class="shape"></div>
    </div>	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form>
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Sign up</button>
					
				 </div>	
				</form>
					 			 
			<div class="login">
				<form>
					<label for="chk" aria-hidden="true">Log in</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Log in</button>
					<a href="#" class="more">Forgot password?</a>
				</form>

			</div>
	</div>

</body>
</html>