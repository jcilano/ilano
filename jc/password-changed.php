<?php require_once "userdata.php"; ?>
<?php
if($_SESSION['info'] == false){
    header('Location: login.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

</style>
</head>
<body>
    <div class="login-box">
       
            <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
                <form action="password-changed.php" method="POST">
                   
                        <input class="form-control button" type="submit" name="login-now" value="Login Now">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>