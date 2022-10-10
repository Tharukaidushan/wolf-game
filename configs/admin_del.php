<?php 
require_once "db.php";
if(isset($_POST['submit-new'])) {
    $user = ($_POST["e-username"]);
    $pass = ($_POST["newpass"]);


        $sql = "SELECT*FROM wolf_admin_table WHERE username='$user';";
        
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $sql2 = "UPDATE wolf_admin_table SET pass = '$pass'  WHERE username='$user';";
            $result1 = mysqli_query($conn, $sql2);
            header("Location: ../panels/admin.php?sucsess=updatePasswordAdmin");
        } else {
            header("Location: ../panels/admin.php?error=notHiiFoundUser");
        }

        
} else {
    if(isset($_POST['del-user'])) {
        $user = ($_POST["e-username"]);
        $pass = ($_POST["newpass"]);
    

            $sql = "SELECT*FROM wolf_admin_table WHERE username='$user';";
            
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                $sql3 = "DELETE FROM wolf_table WHERE username='$user';";
                $result3 = mysqli_query($conn, $sql3);
                header("Location: ../panels/admin.php?sucsess=deleteAdmin");
            } else {
                echo $user;
                echo $pass;
                // header("Location: ../panels/admin.php?error=HiinotFoundUser");
            }

            
    } else {
        header("Location: ../panels/admin.php?error=wrongWay");
    }
}



?>