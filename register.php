<?php
$db = mysqli_connect('localhost','root','root','skoolen');
if(!$db)
{
	echo "Database connection failed";
}
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM pengguna WHERE username = '".$username."'";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);
if($count == 1){
	echo json_encode("Error");
}else{
	$insert = "INSERT INTO pengguna(username,email,password) VALUES ('".$username."','".$email."','".$password."')";
		$query = mysqli_query($db,$insert);
		if($query){
			echo json_encode("Success");
		}
}
?>