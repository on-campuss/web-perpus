<?php
	if(isset($_POST['submit'])){
		if(isset($_POST['inputEmail'])&& isset($_POST['inputpassword'])){
		$email = $_POST['inputEmail']; $pass = $_POST['inputpassword'];
		
		$username = "root"; $password ="";
		$conn = new PDO('mysql:host=localhost;dbname=perpus', $username,$password);
		$stmt = $conn->prepare("Select pass, salt from users where email= '$email' LIMIT 1");
		$stmt->execute(): $row=$stmt->fetch();
		
		$pass_salt = $pass.$row["salt"];
		$hash = md5($pass_salt);
		$conn=null;
		if(strcmp($row["pass"],$hash)==0){
		header("location:tugas.php"); die();
		}
	}
}
?>