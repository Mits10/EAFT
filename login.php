<!DOCTYPE html>
<html>
<head>
	<title>Easy Accommodation</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>

	<header>

    <div class="logo_menu">
  <div class="logo">

          <img src="logo.jpg">
    </div>


      <div class="my_menu">

      <ul>
        <li class="active"> <a href="index.php">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.php">Contact Us</a></li>
          </ul>

      </div>

</div>


     <div class="loginbox">

     	<img src="loginlogo.png" class="loginlogo">
     	<h1>Login Here</h1>
     	<form action="login.php" method="post">

              <p>User Name</p>
              <input type="text" name="name" placeholder="Enter Username">
              <p>Password</p>
              <input type="password" name="password" placeholder="Enter Password">
              <input type="submit" value="Login">
              <a href="#">Lost Your Password?</a><br>
              <a href="#">Don't Have An Account?</a>
    </form>
     </div>
<?php
$user = 'root';
$pass = '';
$db = 'accomodation';
$con = new mysqli('localhost', $user, $pass, $db) or die('unable to connect');

    $sql = "SELECT first_name ,password FROM travelerinterface WHERE first_name =$_POST[name] AND password=$_POST[password] ; ";
    $result = mysqli_query($con,$sql);
    $resultCheck = mysqli_num_rows($result);
?>
</header>
</body>
</html>
