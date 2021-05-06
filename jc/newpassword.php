<?php require_once "userdata.php"; ?>
<?php 
$username = $_SESSION['username'];
if($username == false){
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create a New Password</title>

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
.login-box{

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
    border-bottom: 1px solid #ddd;
    background: transparent;
    outline: none;
    height: 30px;
    font-size: 16px;
    opacity: 1;
    color: black;
}

</style>    
</head>
<body>
    <div class="login-box">
        <div class="row">
 
                <form action="newpassword.php" method="POST" autocomplete="off">
                    <h4 class="text-center">New Password</h4>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
             
                        <input  type="password" name="password" placeholder="Create new password" required>
               <br>
                        <input  type="password" name="cpassword" placeholder="Confirm your password" required>
                    <br>
                    <br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    <input  type="submit" name="change-password" value="Change">
                    </div>
                </form>
    
    
</body>
</html>