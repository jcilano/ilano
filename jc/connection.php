<?php
function OpenCon()
{
$servername = "localhost";
$username = "root";
$password = "";
$db = "user-registration";


// Create connection
$conn = new mysqli($servername, $username, $password,$db) or die ("Connection failed: %s\n". $conn -> error);
 return $conn;

}

function CloseCon($conn)
{
	$conn -> close();
}