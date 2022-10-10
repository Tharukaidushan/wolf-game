<?php 
require_once "db.php";
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
            header("Location: ../panels/admin.php?error=notFoundUser");
        }        


?>