<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "price comparison";

$conn = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST["submit"]))
{
  if((!empty($_POST['fullname'])) && (!empty($_POST['username'])) && (!empty($_POST['email'])) && (!empty($_POST['contact'])) && (!empty($_POST['password'])))
  {
     $fullname = $_POST['fullname'];
     $username = $_POST['username'];
     $email = $_POST['email'];
     $contact = $_POST['contact'];
	 $pwd = $_POST['password'];
     $uppercase = preg_match('@[A-Z]@', $pwd);
	 $lowercase = preg_match('@[a-z]@', $pwd);
     $number    = preg_match('@[0-9]@', $pwd);
     $specialChars = preg_match('@[^\_#w]@', $pwd);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pwd) < 8) {
        echo "<script>
		alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.')
		window.location.href='Register_page.php'
		</script>";
	}
	else{
     $query = "INSERT INTO registration(fullname,username,email,contact,password) VALUES('$fullname','$username','$email','$contact','$pwd')";
       $run = mysqli_query($conn,$query) or die(mysqli_error($conn));

       if($run){
        echo "Registered succesfully.";
		header("Location: price comparison2.php");

       }
       else{

        echo "Registration Failed!!!"; 
       }

	}
	}
    else{
      echo "all fields required.";
    }

}