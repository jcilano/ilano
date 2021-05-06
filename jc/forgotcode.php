<?php require_once "fpassword.php" ?>
<html>
<head>
	<title> User Login And Registration </title>
	<link rel="stylesheet" type="text/css" 
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>


?>

<body>

<div class="container">
		<h2 style="margin-top:30px; margin-bottom:20px;"> Verification Code List </h2>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th> Authenticator Code List </th>
					<th> Status </th>					
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
							</tbody>
						</table>			
		</table>
	</div>
</body>
</html>