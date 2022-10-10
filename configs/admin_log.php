<?php

ob_start(); 
require_once "db.php";
if(isset($_POST['submit'])) {
	$user = ($_POST["username"]);
	$pass = ($_POST["password"]);


		$sql = "SELECT * FROM wolf_admin_table WHERE username='$user' AND pass='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $user && $row['pass'] === $pass) {
            	session_start();
                $_SESSION["User"] = $row["id"];
            	header("Location: ../panels/admin.php");
		        exit();
            }else{
				header("Location: ../index.php?error=usernameOrPassword");
		        exit();
			}
		}
} else {
	if(isset($_POST['submit-new'])) {
		$user = ($_POST["e-username"]);
		$pass = ($_POST["newpass"]);
	

			$sql = "SELECT*FROM wolf_table WHERE username='$user';";
			
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) === 1) {
				$row = mysqli_fetch_assoc($result);
			    $sql2 = "UPDATE wolf_table SET pass = '$pass'  WHERE username='$user';";
				$result1 = mysqli_query($conn, $sql2);
				header("Location: ../panels/admin.php?upPsucsess=updatePassword");
			} else {
				header("Location: ../panels/admin.php?error=notFoundUser");
			}

			
	} else {
		if(isset($_POST['del-user'])) {
			$user = ($_POST["e-username"]);
			$pass = ($_POST["newpass"]);
		
	
				$sql = "SELECT*FROM wolf_table WHERE username='$user';";
				
				$result = mysqli_query($conn, $sql);
	
				if (mysqli_num_rows($result) === 1) {
					$row = mysqli_fetch_assoc($result);
					$sql3 = "DELETE FROM wolf_table WHERE username='$user';";
					$result3 = mysqli_query($conn, $sql3);
					header("Location: ../panels/admin.php?sucsess=deleteuser");
				} else {
					header("Location: ../panels/admin.php?error=HiinotFoundUser");
				}
	
				
		}
	}
	
}

?>