<?php 

require_once "db.php";
if(isset($_GET['user'])) {
    $user = ($_GET["user"]);
            $sql2 = "UPDATE wolf_table SET active = '0'  WHERE username='$user';";
            $result1 = mysqli_query($conn, $sql2);
            header("Location: ../panels/admin.php?sucsess=userDeactive");
    } else {
        header("Location: ../panels/admin.php?error=wrongWay");
    }



?>