<?php

session_start();
if(isset($_SESSION['User'])) {
require_once "../configs/db.php";

$user = $_SESSION["User"];
$query = "SELECT*FROM wolf_table WHERE id ='$user'";
$results = mysqli_query($conn, $query);
$results1 = mysqli_query($conn, $query);


}
else {
    header("location: ../index.php");
    exit();
}


?>


<!DOCTYPE html>
<html lang='en'>
<head>
    <meta http-equiv='refresh' content='1'>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
    <title>Find your character</title>
</head>

<body>


<?php 
if(isset($_GET["confirm"])){
    $error3 = "done";
    $error3 = $_GET["confirm"]; 
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hellow Mafia!</strong> Kill confirmed. Waiting for result.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php

}?>


    <?php
while($row=mysqli_fetch_assoc($results)) { 
    ?>

<div class="container">


    <div class="d-flex justify-content-center w-100 p-3" style="background-color: #eee;">
      <h1 class="display-4"> YOUR THE MEMBER A THE GAME!</h1> 
    </div>
    <div class="d-flex justify-content-center w-100 p-3 mt-2" style="background-color: #eee;">Your character is &nbsp <strong><?php echo $row['name']; ?></strong></div>

<p><a href="../configs/logout.inc.php" class="btn btn-danger ">Logout</a></p>
  
<?php }?>



<?php 
while($row1=mysqli_fetch_assoc($results1)) {
    if($row1['name'] == 'Mafia') {

?>

<table class="table mt-5">
<!-- Active Mafia table -->
<thead class="thead-dark">
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Character</th>
    </tr>
  </thead>
<?php
$query_active = "SELECT*FROM wolf_table WHERE active='1' AND name='Mafia';";
$results_active = mysqli_query($conn, $query_active);
while($row_active_M=mysqli_fetch_assoc($results_active)) { 
?>
  <tbody>
    <tr style="background-color: #eee;">
      <th scope="row"><?php echo $row_active_M['username'] ?></th>
      <td><?php echo $row_active_M['name'] ?></td>
    </tr>
 
<?php } ?>

</tbody>
</table>


<div class="d-flex justify-content-center flex-wrap">
<?php
$query_not_mafia = "SELECT*FROM wolf_table WHERE active='1' AND name<>'Mafia' && life='1' ;";
$results_not_mafia = mysqli_query($conn, $query_not_mafia);
while($row_not_mafia=mysqli_fetch_assoc($results_not_mafia)) { 
?>
        <div class="card text-dark m-4" style="max-width: 18rem; background-color: #eee;">
            <div class="card-header"><strong><?php echo $row_not_mafia['username']; ?></strong></div>
                <div class="card-body">
                    <?php $attack_c = $row_not_mafia['m_status']; ?>
                    <?php $attack_c = $attack_c / 2; ?>
                <p> Click the attack button to attack <?php echo $row_not_mafia['username']; ?><strong> amount of attacks: <?php echo $attack_c; ?></strong></p>
                <?php 

                if($row1['sround'] == '0') {
                ?>
                <a href="../events/attack.php?attack=<?php echo $row_not_mafia['id']; ?>&user=<?php echo $row1['id']; ?>" class="btn btn-danger">Attack</a>
                <?php } else {

                }?>
                <?php 
                 $sql_AMC = "SELECT*FROM wolf_table WHERE name = 'Mafia' AN
                 D active = '1' AND life='1';";
                 $results_AMC = mysqli_query($conn, $sql_AMC);
                 $c_AMC = 0;
                 while($row_AMC=mysqli_fetch_assoc($results_AMC)) {
                    $c_AMC = $c_AMC + 1;
                 }

                 $enable = '';
                $disable = 'disabled';

                if($row_not_mafia['m_status'] == $c_AMC * 2) { ?>
                    <a href="../events/confirm.php?confirm=<?php echo $row_not_mafia['id']; ?>" class="btn btn-success" <?php echo $enable ?>>Confirm</a>
                <?php }else{ ?>
                    <a href="#"  class="btn btn-secondary" <?php echo $disable ?>>Confirm</a>
                <?php }?>
                <?php 
                if($row_not_mafia['mafia_done'] == 1){ 
                    ?>
                <?php 
            }else { ?>
            <a href="../events/reset.php?reset_m=<?php echo $row_not_mafia['id']; ?>&user=<?php echo $row1['id']; ?>"  class="btn btn-primary">Reset</a>
        <?php }
            ?>
                    
            </div>
        </div>
        <?php } ?>
        
</div>

<?php } else { ?>
    <div class="d-flex justify-content-center flex-wrap">

    <?php
$query_all = "SELECT*FROM wolf_table WHERE active='1' && life='1';";
$results_all = mysqli_query($conn, $query_all);
while($row_all=mysqli_fetch_assoc($results_all)) { 
?>
    
        <div class="card text-dark m-4" style="max-width: 18rem; background-color: #eee;">
            <div class="card-header"><strong><?php echo $row_all['username']; ?></strong></div>
                <div class="card-body">
                <p> Click the attack button to attack <?php echo $row_all['username']; ?></p>
                <!-- <a href="../configs/events/attack.php?attack=" class="btn btn-danger">Attack</a> -->
            </div>
        </div>
        
        <?php } ?>


<?php } } ?>
</div>

  



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="../js/chat.js"></script>
</body>
</html>