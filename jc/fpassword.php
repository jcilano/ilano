<?php require_once "userdata.php"; ?>
<?php 
$username = $_SESSION['username'];
if($username == false){
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css">
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
h2 {
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
.login-box a{

        border: none;
    outline: none;
    height: 40px;
    background: transparent;
    color: black;
    font-size: 14px;
    font-weight: bold;
    border-radius: 10px;
}
  </style>
    <title>Code Verification</title>  


      
</head>
<body>
    <div  class="login-box">
 
     
                <form action="fpassword.php" method="POST" autocomplete="off">
                    <h2>Code Verification</h2>
                 
                  
                        <input  type="number" name="otp" placeholder="Enter your code" >
                
            <br>
                        <input  type="submit" name="check-otp" value="Submit">
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                <a href="checkotp.php"> checking code </a>
</form>

</body>
</html>