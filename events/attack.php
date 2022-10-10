<?php 
require_once "../configs/db.php";
    if(isset($_GET["attack"], $_GET["user"])){
        $id = $_GET["attack"]; 
        $id2 = $_GET["user"]; 
    
        $sql1 = "UPDATE wolf_table SET m_status = m_status + 2  WHERE id='$id';";
        $sql2 = "UPDATE wolf_table SET sround = sround +1  WHERE id='$id2';";
        $result1 = mysqli_query($conn, $sql1);
        $result2 = mysqli_query($conn, $sql2);
        header("Location: ../panels/account.php?succsesAttack=done");
    }else {
        header("Location: ../panels/account.php?error=wrongWay");
    }
    
?>
    