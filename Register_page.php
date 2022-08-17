<html>
<head>
<title>REGISTER PAGE</title>

<link rel="stylesheet" href="Register.css">
</head>

<body>
<style>
form {
	position : fixed;
	margin-top : 6%;
}
</style>
<form action="register.php" method="post">
  <h2>Register</h2>
  <div class="imgcontainer">
    <img src="img_avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
	<label><b>Full Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="fullname">
	
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" >

    <label><b>Email ID</b></label>
    <input type="text" placeholder="Enter Email ID" name="email" >
	
	<label><b>Contact No</b></label>
    <input type="text" placeholder="Enter Contact Number" name="contact" >
	
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >

    <button type="submit" name="submit">Create new account</button>
  
  <div class="rsg">Already have an account ? <a href="login.php">Login now</a></div>
  </div>

</form>

</body>
</html>