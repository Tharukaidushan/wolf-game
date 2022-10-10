<?php

session_start();
if(isset($_SESSION['User'])) {
    require_once "db.php";
    $user = $_SESSION["User"];
    $sql1 = "UPDATE wolf_table SET active = '0'  WHERE id='$user';";
    $result1 = mysqli_query($conn, $sql1);
    session_unset();
    session_destroy();
    header("location: ../index.php");
    exit();

}
else {
    header("location: ../index.php?didnotlogout");
    exit();
}





?>