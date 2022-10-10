<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Wolf Game</title>
</head>
<body>


<?php 
if(isset($_GET["error"])){
    $error3 = "usernameOrPassword";
    $error3 = $_GET["error"]; ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Hellow Wolf,</strong> Your username or password is wrong! Please try again.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
    
}?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hellow Wolfs!</strong> You can type your username & Password below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


<div class="container">


    <div class="d-flex justify-content-center w-100 p-3" style="background-color: #eee;">
      <h1 class="display-4"> WOLF GAMERS LOGINS</h1> 
    </div>


    <div class="d-flex flex-row justify-content-center flex-wrap main-row">

        <div class="d-flex flex-column justify-content-center w-50 p-3 flex-wrap">
            <div class="d-flex justify-content-center w-100 p-3" style="background-color: #eee;">Admin Log here</div>
            <div class="w-100 p-3">
                <form style="background-color: #fff;" action="configs/admin_log.php" method="post" name="form01">
                    <div class="form-group w-100">
                        <label for="exampleInput">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group w-100">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                        <small id="passHelp" class="form-text text-muted">Do not share with anyone</small>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column justify-content-center w-50 p-3 flex-wrap">
            <div class="d-flex justify-content-center w-100 p-3" style="background-color: #eee;">Others Log here</div>
            <div class="w-100 p-3">
            <form style="background-color: #fff;" action="configs/login.php" method="post" name="form01">
                    <div class="form-group w-100">
                        <label for="exampleInput">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group w-100">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                        <small id="passHelp" class="form-text text-muted">Do not share with anyone</small>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>