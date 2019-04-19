<?php
    if(isset($_POST['submit'])){
        $user = 'root';
        $pass = '';
        $db = 'accomodation';
        $conn = new mysqli('localhost', $user, $pass, $db) or die('unable to connect');
        echo ('connection successfull');
        require("manualComit.php");
            $tid = $_POST['t_id'];
            $first_name = $_POST['firstname'];
            $middle_name = $_POST['middlename'];
            $last_name = $_POST['lastname'];
            $date_of_birth = $_POST['birthdate'];
            $mobile_no = $_POST['mobileno'];



        $sql2 = "insert into doctor(t_id,first_name,middle_name,last_name,date_of_birth) VALUES ('$tid', '$first_name','$middle_name','$last_name','$date_of_birth')";

        commitTable($conn, $sql2);


	    $sql3 = "insert into doctor_contact() VALUES('$tid','$mobile_no')";
        commitTable($conn, $sql3);

}
?>
<html>
<head>
	<title>My WEbsight</title>
	<meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="fonts/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
	<link href="ad.css" rel="stylesheet" type="text/css">
	<link href="normalize.css" rel="stylesheet" type="text/css">
   <script type="text/javascript">
   </script>
	</head>

<body id="main_body">
    <nav class="nav">
        <ul class="links">

            <li><a href="index.php">Home</a></li>
            <li><a href="Services.php">Services</a></li>
            <li><a href="roomtype.php">Consultants</a></li>
            <li><a href="forms.php">Forms&print</a></li>
            <li><a href="Contact.php">Contact Us</a></li>
        </ul>
    </nav>
    <div class="container">
        <form class="form" method="post" action="traveler.php">
            <h3 class="main-head">Traveler Information Form</h3><br>
            Doctor Id(automatic by the system):
            <input type="text" name="doctor-id">
            First name:
             <input type="text" name="firstname">
             Middle name:
              <input type="text" name="middlename">
              Last name:
             <input type="text" name="lastname"><br>
            Date Of Birth:
             <input type="date" name="birthdate">
            Mobile No:
            <input type="text" name="mobileno"><br>
        </div>




    <!-- javascripts -->
    <script type="text/javascript" src="javascripts/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="javascripts/popper.min.js"></script>
    <script type="text/javascript" src="javascripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="selector.js"></script>
</body>

</html>
