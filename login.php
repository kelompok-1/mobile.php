<?php
 $db = mysqli_connect('localhost','root','root','skoolen');
 $username = $_POST['username'];
 $password = $_POST['password'];
 $sql = "SELECT * FROM pengguna WHERE username = '".$username."' AND password = '".$password."'";
 $result = mysqli_query($db,$sql);
 $count = mysqli_num_rows($result);
 if($count >= 1){
 	echo json_encode("Success");
 } 
 else{
 	echo json_encode("Error");
 }
?>