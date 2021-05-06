
<html>
<head>
	<title> check otp </title>
	
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
.login-box tr{
	background: rgba(211, 211, 211, 0.5);
	padding: 10px;
}
.login-box th{
	border:none;
	outline: none;
	background: #fff;
	padding: 10px;
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
</head>
<body>
	<div class="login-box">
		<h2 style="text-align: center;"> Verification Code List </h2>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>  Code </th>
					<th> Status User </th>				
				</tr>
			</thead>
			<tbody>
		<?php		
	$con = mysqli_connect('localhost','root','','userregistration');
$sql = "SELECT id, code, status FROM usertable";
$result = $con->query($sql);
				if ($result->num_rows > 0){
					while($row = $result-> fetch_assoc()) {
							echo "<tr row_id='" . $row['id'] . "'><td>" . $row['code'] . "</td><td>" . $row['status'] . "</td>"; }
		}
	?>
</tbody>

<a href="fpassword.php">  Back to code verification </a>
</div>
			</tbody>
						</table>
	
</body>
</html>