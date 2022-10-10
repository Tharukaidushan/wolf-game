<?php

ob_start(); 
require_once "db.php";
if(isset($_POST['submit'])) {
	$user = ($_POST["username"]);
	$pass = ($_POST["password"]);


		$sql = "SELECT * FROM wolf_table WHERE username='$user' AND pass='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $user && $row['pass'] === $pass) {
				$sql1 = "UPDATE wolf_table SET active = '1'  WHERE username='$user';";
				$result1 = mysqli_query($conn, $sql1);
            	session_start();
                $_SESSION["User"] = $row["id"];
            	header("Location: ../panels/account.php");
		        exit();
            }
			}else{
				header("Location: ../index.php?error=usernameOrPassword");
		        exit();
		}
} else {
	header("Location: ../index.php?error==wrongWay");
}

















?>