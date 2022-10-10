<?php 
require_once "../configs/db.php";
    if(isset($_GET["reset_m"], $_GET["user"])){
        $id = $_GET["reset_m"]; 
        $id2 = $_GET["user"]; 
    
        $sql1 = "SELECT*FROM wolf_table WHERE id='$id';";
        $result2 = mysqli_query($conn, $sql1);
        while($row_2=mysqli_fetch_assoc($result2)) { 
            if( 2 <= $row_2['m_status']) {
                $sql_r = "UPDATE wolf_table SET m_status = m_status - 2 WHERE id='$id';";
                $result_r = mysqli_query($conn, $sql_r);
            }else{
                $sql_r = "UPDATE wolf_table SET m_status = 0 WHERE id='$id';";
                $result_r = mysqli_query($conn, $sql_r);
            }
        }


        $sql2 = "UPDATE wolf_table SET sround = 0  WHERE id='$id2';";
        $result1 = mysqli_query($conn, $sql2);
        
        header("Location: ../panels/account.php?succsesReset=done");
    }else {
        header("Location: ../panels/account.php?error=wrongWay");
    }
    
?>