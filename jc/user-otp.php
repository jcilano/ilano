<?php
require_once "userdata.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Code Verify</title>
    <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
.login-box input{
  border: none;
    outline: none;
    height: 40px;
    background: transparent;
    color: #000000;
    font-size: 20px;
    font-weight: bold;
    border-radius: 10px;
    background-position: center;


}
.login-box h2{
        margin: 0;
    padding: 0;
    font-weight: :bold;
    font-size: 22px;
    color: #000000;
    text-align: center;
    margin-bottom: 8%;
    font-family:Courgette;
}
</style>
</head>
<body>
    <div class="login-box">   
                <form action="user-otp.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                        <input  type="number" name="otp" placeholder="Enter verification code" required>
           <br>
                        <input  type="submit" name="check" value="Submit">
        
</form>
<form action="code.php" method="POST">
                      
                        <input  type="submit" class="button" name="checkcode" value="check your code">
                    </div>
</form>
</body>
</html>