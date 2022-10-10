<?php 
require "db.php";
$query1 = "SELECT*FROM wolf_table WHERE active='1'";
$results3 = mysqli_query($conn, $query1);
$c = 0;
while($row3=mysqli_fetch_assoc($results3)) {
    $c = $c +1;
}
echo $c;

while(0 < $c){
    if($c > 6 && $c % 2 == 1) {
        $m= 'Farmer';
        $find_sql = "SELECT * FROM `wolf_table` WHERE active='1' AND arow = '0' ORDER BY RAND() LIMIT 0, 1;";
        $resultdd = mysqli_query($conn, $find_sql);
        $rowdd = mysqli_fetch_assoc($resultdd);
        $username = $rowdd['username'];
        $set_sql = "UPDATE wolf_table SET name = '$m', arow='1'  WHERE username='$username';";
        $done = mysqli_query($conn, $set_sql);
        $c = $c -1;
        echo $username;
    }

    if($c > 6 && $c % 2 == 0) {
        $m= 'Mafia';
        $find_sql = "SELECT * FROM `wolf_table` WHERE active='1' AND arow = '0' ORDER BY RAND() LIMIT 0, 1;";
        $resultdd = mysqli_query($conn, $find_sql);
        $rowdd = mysqli_fetch_assoc($resultdd);
        $username = $rowdd['username'];
        $set_sql = "UPDATE wolf_table SET name = '$m', arow='1'  WHERE username='$username';";
        $done = mysqli_query($conn, $set_sql);
        $c = $c -1;
        echo $username;
    }

    if($c == 6) {
        $m= 'Mafia';
        $find_sql = "SELECT * FROM `wolf_table` WHERE active='1' AND arow = '0' ORDER BY RAND() LIMIT 0, 1;";
        $resultdd = mysqli_query($conn, $find_sql);
        $rowdd = mysqli_fetch_assoc($resultdd);
        $username = $rowdd['username'];
        $set_sql = "UPDATE wolf_table SET name = '$m', arow='1'  WHERE username='$username';";
        $done = mysqli_query($conn, $set_sql);
        $c = $c -1;
        echo $username;
    }

    if($c == 5) {
        $m= 'Mafia';
        $find_sql = "SELECT * FROM `wolf_table` WHERE active='1' AND arow = '0' ORDER BY RAND() LIMIT 0, 1;";
        $resultdd = mysqli_query($conn, $find_sql);
        $rowdd = mysqli_fetch_assoc($resultdd);
        $username = $rowdd['username'];
        $set_sql = "UPDATE wolf_table SET name = '$m', arow='1'  WHERE username='$username';";
        $done = mysqli_query($conn, $set_sql);
        $c = $c -1;
        echo $username;
    }

    if($c == 4) {
        $m= 'Farmer';
        $find_sql = "SELECT * FROM `wolf_table` WHERE active='1' AND arow = '0' ORDER BY RAND() LIMIT 0, 1;";
        $resultdd = mysqli_query($conn, $find_sql);
        $rowdd = mysqli_fetch_assoc($resultdd);
        $username = $rowdd['username'];
        $set_sql = "UPDATE wolf_table SET name = '$m', arow='1'  WHERE username='$username';";
        $done = mysqli_query($conn, $set_sql);
        $c = $c -1;
        echo $username;
    }

    if($c == 3) {
        $m= 'XXX';
        $find_sql = "SELECT * FROM `wolf_table` WHERE active='1' AND arow = '0' ORDER BY RAND() LIMIT 0, 1;";
        $resultdd = mysqli_query($conn, $find_sql);
        $rowdd = mysqli_fetch_assoc($resultdd);
        $username = $rowdd['username'];
        $set_sql = "UPDATE wolf_table SET name = '$m', arow='1'  WHERE username='$username';";
        $done = mysqli_query($conn, $set_sql);
        $c = $c -1;
        echo $username;
    }

    if($c == 2) {
        $m= 'Police';
        $find_sql = "SELECT * FROM `wolf_table` WHERE active='1' AND arow = '0' ORDER BY RAND() LIMIT 0, 1;";
        $resultdd = mysqli_query($conn, $find_sql);
        $rowdd = mysqli_fetch_assoc($resultdd);
        $username = $rowdd['username'];
        $set_sql = "UPDATE wolf_table SET name = '$m', arow='1'  WHERE username='$username';";
        $done = mysqli_query($conn, $set_sql);
        $c = $c -1;
        echo $username;

    }
    
    if($c == 1) {
        $m= 'Doctor';
        $find_sql = "SELECT * FROM `wolf_table` WHERE active='1' AND arow = '0' ORDER BY RAND() LIMIT 0, 1;";
        $resultdd = mysqli_query($conn, $find_sql);
        $rowdd = mysqli_fetch_assoc($resultdd);
        $username = $rowdd['username'];
        $set_sql = "UPDATE wolf_table SET name = '$m', arow='1'  WHERE username='$username';";
        $done = mysqli_query($conn, $set_sql);
        $c = $c -1;
        echo $username;
    }

    
}

if($c == 0){
    echo $c;
    $url = "../panels/admin.php";
    $arow_sql = "SELECT * FROM `wolf_table` WHERE arow = '1';";
    $resultarow = mysqli_query($conn, $arow_sql);
    while($rowarow = mysqli_fetch_assoc($resultarow)) {
        $arow_user = $rowarow['username'];
        $set_sql = "UPDATE wolf_table SET arow='0' WHERE username='$arow_user';";
        $result_arow_up = mysqli_query($conn, $set_sql);

    }
    die('<script type="text/javascript">window.location=\''.$url.'\';</script>');
    exit();
    
}else{
    // echo "game fail";
}


// loop

//   $count_main = 1;
// while ($count_main < 20){
//   if ($c > "4" && $c < "12"){

//     $var1 = rand(1,$c);
//     echo $var1;
//         if($var1 == 1) {
//             $m= 'Mafia';
//             $find_sql = "SELECT * FROM `wolf_table` AND arow = '0';";
//             $resultdd = mysqli_query($conn, $find_sql);
//             $rowdd = mysqli_fetch_assoc($resultdd);
//             $username = $rowdd['username'];
//             $set_sql = "UPDATE wolf_tabl arow='1'e SET name = '$m'  WHERE username='$username';";
//             $done = mysqli_query($conn, $set_sql);
        
//         } 

//         if($var1 == 2) {
//             $m= 'Doctor';
//             $find_sql = "SELECT * FROM `wolf_table` AND arow = '0';";
//             $resultdd = mysqli_query($conn, $find_sql);
//             $rowdd = mysqli_fetch_assoc($resultdd);
//             $username = $rowdd['username'];
//             $set_sql = "UPDATE wolf_tabl arow='1'e SET name = '$m'  WHERE username='$username';";
//             $done = mysqli_query($conn, $set_sql);
//         }

//         if($var1 == 3) {
//             $m= 'farmer';
//             $find_sql = "SELECT * FROM `wolf_table` AND arow = '0';";
//             $resultdd = mysqli_query($conn, $find_sql);
//             $rowdd = mysqli_fetch_assoc($resultdd);
//             $username = $rowdd['username'];
//             $set_sql = "UPDATE wolf_tabl arow='1'e SET name = '$m'  WHERE username='$username';";
//             $done = mysqli_query($conn, $set_sql);
//         }

//         if($var1 == 4) {
//             $m= 'Mafia';
//             $find_sql = "SELECT * FROM `wolf_table` AND arow = '0';";
//             $resultdd = mysqli_query($conn, $find_sql);
//             $rowdd = mysqli_fetch_assoc($resultdd);
//             $username = $rowdd['username'];
//             $set_sql = "UPDATE wolf_tabl arow='1'e SET name = '$m'  WHERE username='$username';";
//             $done = mysqli_query($conn, $set_sql);
//         }

//         if($var1 == 5) {
//             $m= 'XXX';
//             $find_sql = "SELECT * FROM `wolf_table` AND arow = '0';";
//             $resultdd = mysqli_query($conn, $find_sql);
//             $rowdd = mysqli_fetch_assoc($resultdd);
//             $username = $rowdd['username'];
//             $set_sql = "UPDATE wolf_tabl arow='1'e SET name = '$m'  WHERE username='$username';";
//             $done = mysqli_query($conn, $set_sql);
//         }

//         if($var1 == 6) {
//             $m= 'Police';
//             $find_sql = "SELECT * FROM `wolf_table` AND arow = '0';";
//             $resultdd = mysqli_query($conn, $find_sql);
//             $rowdd = mysqli_fetch_assoc($resultdd);
//             $username = $rowdd['username'];
//             $set_sql = "UPDATE wolf_tabl arow='1'e SET name = '$m'  WHERE username='$username';";
//             $done = mysqli_query($conn, $set_sql);
//         }

//         if($var1 == 7) {
//             $m= 'Mafia';
//             $find_sql = "SELECT * FROM `wolf_table` AND arow = '0';";
//             $resultdd = mysqli_query($conn, $find_sql);
//             $rowdd = mysqli_fetch_assoc($resultdd);
//             $username = $rowdd['username'];
//             $set_sql = "UPDATE wolf_tabl arow='1'e SET name = '$m'  WHERE username='$username';";
//             $done = mysqli_query($conn, $set_sql);
//         }

//         if($var1 == 8) {
//             $m= 'Famer';
//             $find_sql = "SELECT * FROM `wolf_table` AND arow = '0';";
//             $resultdd = mysqli_query($conn, $find_sql);
//             $rowdd = mysqli_fetch_assoc($resultdd);
//             $username = $rowdd['username'];
//             $set_sql = "UPDATE wolf_tabl arow='1'e SET name = '$m'  WHERE username='$username';";
//             $done = mysqli_query($conn, $set_sql);
//         }

//         if($var1 == 9) {
//             $find_sql = "SELECT * FROM `wolf_table` AND arow = '0';";
//             $resultdd = mysqli_query($conn, $find_sql);
//             $rowdd = mysqli_fetch_assoc($resultdd);
//             $username = $rowdd['username'];
//             $set_sql = "UPDATE wolf_tabl arow='1'e SET name = '$m'  WHERE username='$username';";
//             $done = mysqli_query($conn, $set_sql);
//         }

//         if($var1 == 10) {
//             $m= 'Police';
//             $find_sql = "SELECT * FROM `wolf_table` AND arow = '0';";
//             $resultdd = mysqli_query($conn, $find_sql);
//             $rowdd = mysqli_fetch_assoc($resultdd);
//             $username = $rowdd['username'];
//             $set_sql = "UPDATE wolf_tabl arow='1'e SET name = '$m'  WHERE username='$username';";
//             $done = mysqli_query($conn, $set_sql);
//         }

//         if($var1 == 11) {
//             $m= 'XXX';
//             $find_sql = "SELECT * FROM `wolf_table` AND arow = '0';";
//             $resultdd = mysqli_query($conn, $find_sql);
//             $rowdd = mysqli_fetch_assoc($resultdd);
//             $username = $rowdd['username'];
//             $set_sql = "UPDATE wolf_tabl arow='1'e SET name = '$m'  WHERE username='$username';";
//             $done = mysqli_query($conn, $set_sql);
//         }

//   }else {
//       alert("Your memebers are more than 4 and less than 12.");
//   }
//   $count_main = $count_main + 1;
// }


?>