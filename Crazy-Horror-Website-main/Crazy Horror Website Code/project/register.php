<?php
$year = date('Y');
session_start();
require_once('dbconnection.php');
 
if(isset($_POST['submit'])){
    if(isset($_POST['username'],$_POST['email'],$_POST['password']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){
        $userName = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        
        $options = array("cost"=>4);
        $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
        $date = date('Y-m-d H:i:s');
 
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = 'select * from registration where email = :email';
            $stmt = $pdo->prepare($sql);
            $p = ['email'=>$email];
            $stmt->execute($p);
            
            if($stmt->rowCount() == 0){
                $sql = "insert into registration (username, email, `password`) values(:uname,:email,:pass)";
            
                try{
                    $handle = $pdo->prepare($sql);
                    $params = [
                        ':uname'=>$userName,
                        ':email'=>$email,
                        ':pass'=>$hashPassword,
                    ];
                    
                    $handle->execute($params);
                    
                    $success = 'Created successfully';
                    
                }
                catch(PDOException $e){
                    $errors[] = $e->getMessage();
                }
            }
            else{
                $valUserName = $userName;
                $valEmail = '';
                $valPassword = $password;
 
                $errors[] = 'Email address already in use';
            }
        }
        else{
            $errors[] = "Email is not valid";
        }
    }
    else{
        if(!isset($_POST['username']) || empty($_POST['username'])){
            $errors[] = 'Username is required';
        }
        else{
            $valUserName = $_POST['username'];
        }
 
        if(!isset($_POST['email']) || empty($_POST['email'])){
            $errors[] = 'Email is required';
        }
        else{
            $valEmail = $_POST['email'];
        }
 
        if(!isset($_POST['password']) || empty($_POST['password'])){
            $errors[] = 'Password is required';
        }
        else{
            $valPassword = $_POST['password'];
        }
        
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
			<h1 class="w3-center w3-white w3-container">Register</h1>
			<?php 
				if(isset($errors) && count($errors) > 0){
					foreach($errors as $error_msg){
						echo '<div class="alert alert-danger">'.$error_msg.'</div>';
					}
                }
                
                if(isset($success)){
                    echo '<div class="alert alert-success">'.$success.'</div>';
                }
			?>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="w3-left w3-white w3-container">
					<label for="email">Username:</label>
					<input type="text" name="username" placeholder="Enter Username" value="<?php echo ($valUserName??'')?>">
				</div>
                <div class="w3-left w3-white w3-container">
					<label for="email">Email:</label>
					<input type="text" name="email" placeholder="Enter Email" value="<?php echo ($valEmail??'')?>">
				</div>
				<div class="w3-left w3-white w3-container">
				<label for="email">Password:</label>
					<input type="password" name="password" placeholder="Enter Password" value="<?php echo ($valPassword??'')?>">
				</div>
 <p></p>
				<button type="submit" name="submit" class=" w3-left btn btn-primary">Register</button>
				<br>
                <p class="pt-2"> Back to <a href="index.php">Log In</a></p>
				
			</form>
		</div>
	</div>
</div>
<footer class="w3-center w3-light-grey w3-padding-32">
  <p> &copy;<?php echo $year; ?> Zoe Domagalski</p>
</footer>
</body>
</html>