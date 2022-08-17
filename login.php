<html>
<head>
<title>LOGIN PAGE</title>

<link rel="stylesheet" href="login.css">
</head>

<body>

<form action="login.php" method="post">
  <h2>Login</h2>
  <div class="imgcontainer">
    <img src="img_avatar.png" alt="Avatar" class="avatar">
  </div>

<div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name="Login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  <div class="container" style="background-color:#f1f1f1;height:50px;">
    <button type="button" class="cancelbtn" onclick="window.location.href='price comparison.php'">Cancel</button>
    <span class="psw"><a href="#">Forgot password?</a></span>
  </div>
  <div class="rsg">Don't have an account ? <a href="Register_page.php">Register now</a></div>

</form>

<?php
    session_start();
    $server = "localhost";
    $username = "root";
    $password = '';
    $dbname = "price comparison";
    if(isset($_POST["Login"])){
    $conn = mysqli_connect($server,$username,$password,$dbname);
        $query = "select * from registration where username = '$_POST[username]'";
        $query_run = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($query_run)){
          if($row['username'] == $_POST['username']){
            if($row['password'] == $_POST['password']){
              
              $_SESSION['username'] = $row['username'];
              header("Location: price comparison2.php");
            }
            else{
              echo"Incorrect Password";
            }
          }
          else{
            echo "Incorrect Username";
          }
        }
    }
?>
		
</body>
</html>