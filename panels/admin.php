<?php

session_start();
if(isset($_SESSION['User'])) {
require_once "../configs/db.php";

$user = $_SESSION["User"];
$query = "SELECT*FROM wolf_admin_table WHERE id ='$user'";
$query1 = "SELECT*FROM wolf_table;";
$queryLL = "SELECT*FROM wolf_table WHERE id ='$user'";
$results = mysqli_query($conn, $query);
$resultsad = mysqli_query($conn, $query);
$results1 = mysqli_query($conn, $query1);
$results3 = mysqli_query($conn, $query1);


$page = "http://localhost/dgm/panels/admin.php";
$sec = "1";



}
else {
    header("location: ../index.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <!-- <meta http-equiv='refresh' content='0'> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Admin Account</title>
</head>
<body>

    <?php
while($row=mysqli_fetch_assoc($results)) { 
    
    ?>
    

<?php 
if(isset($_GET["success"])){
    $error1 = "NewUserAdded";
    $error1 = $_GET["success"]; ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hellow Wolf's Admin!,</strong> Your successfully added new user.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
    
}?>

<?php 
if(isset($_GET["sucsess"])){
    $error3 = "userDeactive";
    $error3 = $_GET["sucsess"]; ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hellow Wolf's Admin!,</strong> Your successfully Deactive the user.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
    
}?>

<?php 
if(isset($_GET["upPsucsess"])){
    $error4 = "updatePassword";
    $error4 = $_GET["upPsucsess"]; ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hellow Wolf's Admin!,</strong> Your successfully update user password.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
    
}?>

<?php 
if(isset($_GET["Charasucsess"])){
    $error4 = "updateCharacter";
    $error4 = $_GET["Charasucsess"]; ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hellow Wolf's Admin!,</strong> Your successfully update character.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
    
}?>

  
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hellow Wolf's Admin!</strong> If you want to change passwords, please change one by one :-)
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="container">


    <div class="d-flex justify-content-center w-100 p-3" style="background-color: #eee;">
      <h1 class="display-4">YOU ARE THE ADMIN OF THE GAME!</h1> 
    </div>
    <div class="d-flex justify-content-center w-100 p-3 mt-2" style="background-color: #eee;">Hello! &nbsp<strong><?php echo $row['username'] ?></strong>.  Your the Admin</div>
    <div class="d-flex justify-content-center w-100 p-1 mt-2" style="background-color: #fff;">
        <ul class="nav">
            <li class="nav-item">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Add New</button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-info ml-2" data-toggle="modal" data-target="#exampleModal2" data-whatever="@getbootstrap">Change character</button>
            </li>
            <li class="nav-item">
                <a class="nav-link text-success"  href="../configs/random.inc.php">Start Game</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="../configs/logout.inc.php">Log out</a>
            </li>
        </ul>
    </div>

<?php } ?>

<table class="table mt-5">
<!-- Active Mafia table -->
<thead class="thead-dark">
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Character</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
<?php
$query_active = "SELECT*FROM wolf_table WHERE active='1' AND name='Mafia';";
$results_active = mysqli_query($conn, $query_active);
while($row_active_M=mysqli_fetch_assoc($results_active)) { 
?>
  <tbody>
  <?php if($row_active_M['life'] == '0') {?>
      <tr style="background-color: #eee;">
    <?php }else{ ?>
      <tr style="background-color: red;">
      <?php }?>
      <th scope="row"><?php echo $row_active_M['username'] ?></th>
      <td><?php echo $row_active_M['name'] ?></td>
      <td>
        <?php 
         $act = $row_active_M['active'];
        if($act == 1){
          echo "<p><a class='text-success' href='../configs/deact.inc.php?user=".$row_active_M['username']."'>Active</a></p>";
        } else{
          echo "<p class='text-danger'>Offline</p>";
        }
        ?>
      </td>
    </tr>
 
<?php } ?>

<!-- Active Police table -->
<?php 
    $query_active_P = "SELECT*FROM wolf_table WHERE active='1' AND name='Police';";
    $results_active_P = mysqli_query($conn, $query_active_P);
    while($row_active_P=mysqli_fetch_assoc($results_active_P)) {
    ?>
     <?php if($row_active_P['life'] == '0') {?>
      <tr style="background-color: #eee;">
    <?php }else{ ?>
      <tr style="background-color: red;">
      <?php }?>
      <th scope="row"><?php echo $row_active_P['username'] ?></th>
      <td><?php echo $row_active_P['name'] ?></td>
      <td>
        <?php 
         $act = $row_active_P['active'];
        if($act == 1){
          echo "<p><a class='text-success' href='../configs/deact.inc.php?user=".$row_active_P['username']."'>Active</a></p>";
        } else{
          echo "<p class='text-danger'>Offline</p>";
        }
        ?>
      </td>
    </tr>
    <?php } ?>

    <!-- Active Doctor table -->
<?php 
    $query_active_D = "SELECT*FROM wolf_table WHERE active='1' AND name='Doctor';";
    $results_active_D = mysqli_query($conn, $query_active_D);
    while($row_active_D=mysqli_fetch_assoc($results_active_D)) {
    ?>
     <?php if($row_active_D['life'] == '0') {?>
      <tr style="background-color: #eee;">
    <?php }else{ ?>
      <tr style="background-color: red;">
      <?php }?>
      <th scope="row"><?php echo $row_active_D['username'] ?></th>
      <td><?php echo $row_active_D['name'] ?></td>
      <td>
        <?php 
         $act = $row_active_D['active'];
        if($act == 1){
          echo "<p><a class='text-success' href='../configs/deact.inc.php?user=".$row_active_D['username']."'>Active</a></p>";
        } else{
          echo "<p class='text-danger'>Offline</p>";
        }
        ?>
      </td>
    </tr>
    <?php } ?>

<!-- Active XXX table -->
<?php 
    $query_active_X = "SELECT*FROM wolf_table WHERE active='1' AND name='XXX';";
    $results_active_X = mysqli_query($conn, $query_active_X);
    while($row_active_X=mysqli_fetch_assoc($results_active_X)) {
    ?>
    <?php if($row_active_X['life'] == '0') {?>
      <tr style="background-color: #eee;">
    <?php }else{ ?>
      <tr style="background-color: red;">
      <?php }?>
      <th scope="row"><?php echo $row_active_X['username'] ?></th>
      <td><?php echo $row_active_X['name'] ?></td>
      <td>
        <?php 
         $act = $row_active_X['active'];
        if($act == 1){
          echo "<p><a class='text-success' href='../configs/deact.inc.php?user=".$row_active_X['username']."'>Active</a></p>";
        } else{
          echo "<p class='text-danger'>Offline</p>";
        }
        ?>
      </td>
    </tr>
    <?php } ?>


<!-- Active Villager table -->
<?php 
    $query_active_V = "SELECT*FROM wolf_table WHERE active='1' AND name='Farmer';";
    $results_active_V = mysqli_query($conn, $query_active_V);
    while($row_active_V=mysqli_fetch_assoc($results_active_V)) {
    ?>
     <?php if($row_active_V['life'] == '0') {?>
      <tr style="background-color: #eee;">
    <?php }else{ ?>
      <tr style="background-color: red;">
      <?php }?>
      <th scope="row"><?php echo $row_active_V['username'] ?></th>
      <td><?php echo $row_active_V['name'] ?></td>
      <td>
        <?php 
         $act = $row_active_V['active'];
        if($act == 1){
          echo "<p><a class='text-success' href='../configs/deact.inc.php?user=".$row_active_V['username']."'>Active</a></p>";
        } else{
          echo "<p class='text-danger'>Offline</p>";
        }
        ?>
      </td>
    </tr>
    <?php } ?>

    <!-- Deactive table -->
<?php 
    $query_Deactive = "SELECT*FROM wolf_table WHERE active='0';";
    $results_Deactive = mysqli_query($conn, $query_Deactive);
    while($row_Deactive =mysqli_fetch_assoc($results_Deactive)) {
    ?>
    <tr style="background-color: #eee;">
      <th scope="row"><?php echo $row_Deactive['username'] ?></th>
      <td><?php echo $row_Deactive['name'] ?></td>
      <td>
        <?php 
         $act = $row_Deactive['active'];
        if($act == 1){
          echo "<p><a class='text-success' href='../configs/deact.inc.php?user=".$row_Deactive['username']."'>Active</a></p>";
        } else{
          echo "<p class='text-danger'>Offline</p>";
        }
        ?>
      </td>
    </tr>
    <?php } ?>

    </tbody>
</table>

  
<?php 
while($row1=mysqli_fetch_assoc($results1)) { 
?>


<form class="mt-5 border border-primary p-4" action="../configs/admin_log.php" method="post">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label"><strong>User | Character</strong></label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" name="e-username" id="staticEmail" value="<?php echo $row1['username'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label"><strong>New Password</strong></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="newpass" id="inputPassword" placeholder="Current password is <?php echo $row1['pass'] ?>">
        <small id="passHelp" class="form-text text-muted">Type the new user password here. (The user current password is <?php echo $row1['pass'] ?>)</small>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="submit-new">Update Password</button>
    <button type="submit" class="btn btn-danger ml-2" name="del-user">Delete User</button>
</form>


<?php } ?>


<!-- // For Admin -->
<?php 
while($rowad=mysqli_fetch_assoc($resultsad)) { 
?>
<form class="mt-5 border border-primary p-4" action="../configs/admin_del.php" method="post">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Admin</strong></label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" name="e-username" id="staticEmail" value="<?php echo $rowad['username'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label"><strong>New Password</strong></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="newpass" id="inputPassword" placeholder="Current password is <?php echo $rowad['pass'] ?>">
        <small id="passHelp" class="form-text text-muted">Type the new user password here. (The user current password is <?php echo $rowad['pass'] ?>)</small>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="submit-new">Update Password</button>
    <button type="submit" class="btn btn-danger ml-2" name="del-user">Delete User</button>
</form>

<?php } ?>


<!-- popup Modal  for new wolf adding -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../configs/add_new.php" method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Username</label>
            <input type="text" class="form-control" id="name" name="username" required>
          </div>
          <select class="form-control" name="character">
                        <option>Mafia</option>
                        <option>Police</option>
                        <option>XXX</option>
                        <option>Farmer</option>
                        <option>Doctor</option>
                    </select>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-info" name="submit">Add</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>




<!-- popup Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change the character</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../configs/char-change.php" class="p-3"  method="post">
          <div class="form-group">
                <label for="exampleFormControlSelect1">Select character</label>
                    <select class="form-control" name="username">
                    <?php
                    $query_active_all_users = "SELECT*FROM wolf_table WHERE active='1';";
                    $results_active_all_users = mysqli_query($conn, $query_active_all_users);
                     while($row_active_all_users=mysqli_fetch_assoc($results_active_all_users)) {  ?>
                        <option><?php echo $row_active_all_users['username'] ?></option>
                        <?php  }?>
                    </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select character</label>
                    <select class="form-control" name="character">
                        <option>Mafia</option>
                        <option>Police</option>
                        <option>XXX</option>
                        <option>Farmer</option>
                        <option>Doctor</option>
                    </select>
            </div>
           
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-info" name="submit">Change Now</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>



<script>

$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipient = button.data('whatever') 
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

$('#exampleModal2').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipient = button.data('whatever') 
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>