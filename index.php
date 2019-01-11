<?php
    session_start();
    if(isset($_SESSION["user"])){
        header("location: beranda.php");
    }
    include ("function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == "wrong"){
                echo '<h3>Username dan Password Salah</h3>';
            }
        }
        if(isset($_GET['notif'])){
            if($_GET['notif'] == "logout"){
                echo "<h3>Berhasil logout!</h3>";
            }
        }

        if(isset($_POST['submit'])){
            echo do_login($_POST['username'], $_POST['password']);
        }
    ?>
    <div class="loginBox">
      <img src="user.png" class="user">
      <h1>Log In</h1>
  <form class="form"action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <p>Username</p>
      <input required type="text" name="username" placeholder="username"/>
      <p>Password</p>
      <input required type="password" name="password" placeholder="password"/>
      <input type="submit" name="submit" value="SIGN IN">
      <p>Don't have an account?<a href="#" class="sign"> Sign Up</a></p>
      <a href="#">Forget Password</a><br>
    </form>


</body>
</html>
