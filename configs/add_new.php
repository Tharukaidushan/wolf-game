<?php

require_once "db.php";
if(isset($_POST['submit'])) {
	$user = ($_POST["username"]);
	$character = ($_POST["character"]);
	$pass = ($_POST["password"]);


		$sql = "INSERT INTO wolf_table (username, name, pass, active, chara_status, arow) VALUES('$user', '$character', '$pass', '0', 'No', '0');";

		$result = mysqli_query($conn, $sql);
        header("Location: ../panels/admin.php?success=NewUserAdded");

		
} else {
    header("Location: ../panels/admin.php?error=canNotAdd");
}

?>