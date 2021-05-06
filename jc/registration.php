<?php

session_start();
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
    else {
	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number    = preg_match('@[0-9]@', $password);
	$specialChars = preg_match('@[^\w]@', $password);
}
if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8){
echo '<script> alert("password should be need at least 8 characters, and should include at least one upper case letter, one number, one special character.") </script>';
echo "<script> location.replace('login.php')</script>";

} else 
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

