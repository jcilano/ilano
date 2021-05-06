<?php require_once "userdata.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>

	<link rel="stylesheet" type="text/css"
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
<style>

body{
	background:linear-gradient(rgba(0, 0, 50, 0.5), rgba(0, 0, 50, 0.5)),url(beach.jpg);
	background-size: cover;
	background-blend-mode: auto;
	

}
.login-box{
	max-width: 700px;
	float: none;
	margin: 150px auto;
}
.login-left{
	background: rgba(211, 211, 211, 0.5);
	padding: 30px;
}
.login-right{
	background: #fff;
	padding: 30px;
}
.form-control{
	background-color: transparent !important;

}
.login-box button{
	
	
	background: #000000;
	color: #fff;
	font-size: 18px;
	border-radius: 10px;
}

</style>
</head>
<body>

		<div class="login-box">
		<div class="row">
			
				<center><h2> Forgot Password </h2></center>
			<form action="forgotPassword.php" method="post" autocomplete="off">
				
						<center><label> Please Type your </label>
						<label> Username </label></center>
						<input type="text" name="username" class="form-control"  style="text-align: center;" placeholder="Enter Your Username "required>
						    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">	
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
					</div>
					<button type="submit" class="btn btn-primary" name="next"  > Next</button>

</body>
</html>