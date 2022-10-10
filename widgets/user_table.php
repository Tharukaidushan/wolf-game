
<!-- Active Mafia table -->
  <thead class="thead-dark">
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Character</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
<?php 
require_once "../configs/db.php";
$query_active = "SELECT*FROM wolf_table WHERE active='1' AND name='Mafia';";
$results_active = mysqli_query($conn, $query_active);
while($row_active_M=mysqli_fetch_assoc($results_active)) { 
?>
  <tbody>
    <tr style="background-color: #eee;">
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
    <tr style="background-color: #eee;">
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
    <tr style="background-color: #eee;">
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
    <tr style="background-color: #eee;">
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
    <tr style="background-color: #eee;">
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
