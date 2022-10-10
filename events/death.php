<?php 
require_once "../configs/db.php";
    if(isset($_GET["death"])){
        $id = $_GET["death"]; 
        $id2 = $_GET["user"]; 
    
        // $sql1 = "UPDATE wolf_table SET m_status = m_status - 2  WHERE id='$id';";
        // $sql2 = "UPDATE wolf_table SET sround = sround - 1  WHERE id='$id2';";
        // $sql3 = "UPDATE wolf_table SET life = 0  WHERE id='$id';";
        // $result1 = mysqli_query($conn, $sql1);
        // $result2 = mysqli_query($conn, $sql2);
        // $result3 = mysqli_query($conn, $sql3);
        // header("Refresh:0; url=../panels/admin.php");
        echo "<script>window.location.replace(window.location.pathname + window.location.search + window.location.hash);</script>";
        header("Location: ../panels/account.php?confirm=done");
    }else {
        header("Location: ../panels/account.php?error=wrongWay");
    }
    
?>
    