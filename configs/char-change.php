<?php 

require_once "db.php";
if(isset($_POST['submit'])) {
    $user = ($_POST["username"]);
    $char = ($_POST["character"]);


        $sql = "SELECT*FROM wolf_table WHERE username='$user';";
        
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $sql2 = "UPDATE wolf_table SET name = '$char'  WHERE username='$user';";
            $result1 = mysqli_query($conn, $sql2);
            header("Location: ../panels/admin.php?Charasucsess=updateCharacter");
        } else {
            header("Location: ../panels/admin.php?error=notFoundUser1");
        }
    } else {
        header("Location: ../panels/admin.php?error=wrongWay");
    }



?>