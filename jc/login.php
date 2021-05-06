
<?php require_once "userdata.php"; ?>
<?php

$errors = array();
	$con = mysqli_connect('localhost','root','','userregistration');
	

if(isset($_POST['register'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
    $cpassword = $_POST['cpassword'];
    if($password !== $cpassword){
         echo "<script> alert('Your Password not Match') </script>";
        echo "<script> location.replace('login.php')</script>";
    } 
    
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
    echo "<script> alert('mail that you have entered is already exist!') </script>"; 
     echo "<script> location.replace('login.php')</script>";
    }
    else 

	if (count($errors) == 0) {
        $code = rand(999999, 111111);
        $status = "notverified";

		$reg = "INSERT INTO usertable (username , password , email,  status) VALUES ('$username' , '$password' , '$email' , '$status')";

			mysqli_query($con, $reg);
		
			echo "<script> alert('Registration Succesful') </script>";
	echo "<script> location.replace('login.php')</script>";

		
	}
}


?>
<!DOCTYPE html>
<html>


<head>
	<title> User Login And Registration </title>
	<link rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css"
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
<style> 
body{
	background:linear-gradient(rgba(0, 0, 50, 0.5), rgba(0, 0, 50, 0.5));
margin:0;
padding: 0;
background-image: url(beach.jpg);
-webkit-background-size:cover;
background-size: cover;
font-family: poppins;	


}
.login-box {
	width: 400px;
	height: 420px;
	color: #000;
	top:50%;
	left: 50%;
	padding: 10px 30px;
	position: absolute;
	transform: translate(-50% , -50%);
	
}
h2{
	margin: 0;
	padding: 0;
	font-weight: :bold;
	font-size: 22px;
	color: #000000;
	text-align: center;
	margin-bottom: 8%;
	font-family:Courgette;

}
.login-box input{
	border: none;
	border-bottom: 1px solid #ddd;
	background: transparent;
	outline: none;
	height: 30px;
	font-size: 16px;
	opacity: 1;
	color: black;

}
.login-box button{
	border: none;
	outline: none;
	height: 40px;
	background: #000000;
	color: #fff;
	font-size: 14px;
	font-weight: bold;
	border-radius: 10px;
}
</style>
</head>
<body>
		<div class="login-box">
				<h2> Login Here </h2>
				<form action="login.php" method="post">
					<div class="form-group">
						<label> Username </label>
						<input type="text" name="username"  placeholder="Enter Your Username "required>
					</div>
						<div class="form-group">
						<label> Password </label>
						<input type="password" name="password"   placeholder="Enter Your Password"required>
					</div>	
					<button type="submit" id="login"  name="login"  > Login </button>
					   <a href="forgotPassword.php">Forgot password?</a>
</form>
				<br><h2> Register Here </h2>
				<form action="registration.php" method="post">	
						<label> Username </label>
						<input type="text" name="username"  placeholder="Enter Your Username " required><br>
						<label> Password </label>
						<input type="password" name="password"   placeholder="Enter Your Password "required>
						<label> Confirm Password </label>
						<input type="password" name="cpassword"   placeholder="Enter Your Confirm Password "required>
						<label> Email </label>
						<input type="text" name="email"   placeholder="Enter Your Email "required>
					<br><button type="submit"   name="register"> Register </button></br>
</br>
</div>
</form>
	


</body>


</html>
