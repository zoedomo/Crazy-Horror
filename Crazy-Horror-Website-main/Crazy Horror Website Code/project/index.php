<?php
$year = date('Y');
session_start();
require_once('dbconnection.php');
 
if(isset($_POST['submit']))
{
	if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) // I used (admin@gmail.com, admin) since I used email instead of username
	{
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
 
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$sql = "select * from registration where email = :email ";
			$handle = $pdo->prepare($sql);
			$params = ['email'=>$email];
			$handle->execute($params);
			if($handle->rowCount() > 0)
			{
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				if(password_verify($password, $getRow['password']))
				{
					unset($getRow['password']);
					$_SESSION = $getRow;
					header('location:Welcome.php');
					exit();
				}
				else
				{
					$errors[] = "Wrong Email or Password";
				}
			}
			else
			{
				$errors[] = "Wrong Email or Password";
			}
			
		}
		else
		{
			$errors[] = "Email address is not valid";	
		}
 
	}
	else
	{
		$errors[] = "Email and Password are required";	
	}
 
}
?>
 
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background-color:black;">
 
<div class="w3-center w3-white w3-container">
			<h1>Log In</h1>
			<?php 
				if(isset($errors) && count($errors) > 0)
				{
					foreach($errors as $error_msg)
					{
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
				}
			?>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
				
					<label for="email">Email:</label>
					<input type="text" name="email" placeholder="Enter Email" required >
				
				<label for="email">Password:</label>
					<input type="password" name="password" placeholder="Enter Password" required>
				
 <p>
				<button type="submit" name="submit" class="btn btn-primary">Login</button>
				<p>
				<a href="register.php" class="btn btn-primary">Register Here</a>
			</form>
		</div>
	</div>
</div>
<footer class="w3-center w3-light-grey w3-padding-32">
  <p> &copy;<?php echo $year; ?> Zoe Domagalski</p>
</footer>
</body>
</html>