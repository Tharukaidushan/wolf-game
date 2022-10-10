<?php 
require_once "../configs/db.php";
    if(isset($_GET["confirm"])){
        $id = $_GET["confirm"]; 
        // $id2 = $_GET["user"]; 

        $sql_all = "SELECT*FROM wolf_table WHERE active='1' AND name<>'Mafia';";
        $results_all = mysqli_query($conn, $sql_all);
        while($row_all=mysqli_fetch_assoc($results_all)) {
            $sql1 = "UPDATE wolf_table SET mafia_done = 1 ";
            $result1 = mysqli_query($conn, $sql1);
         }
    
        
        // $sql2 = "UPDATE wolf_table SET sround = sround - 1  WHERE id='$id2';";
        // $sql3 = "UPDATE wolf_table SET life = 0  WHERE id='$id';";
        // $result2 = mysqli_query($conn, $sql2);
        // $result3 = mysqli_query($conn, $sql3);
        // header("Refresh:0; url=../panels/admin.php");
        header("Location: ../panels/account.php?confirm=done");
    }else {
        header("Location: ../panels/account.php?error=wrongWay");
    }
    
?>