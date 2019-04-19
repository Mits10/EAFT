<!DOCTYPE html>
<html>
<head>
	<title>My WEbsight</title>
	<meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="fonts/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
	<link href="ad.css" rel="stylesheet" type="text/css">
	<link href="normalize.css" rel="stylesheet" type="text/css">

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
        <form class="" method="post" action="adinfo.php">
            <h3 class="main-head">Room Renter Form</h3><br>
            <h3>General Information</h3><br>
            Room Renter Id(automatic by the system):
            <input type="text" name="r-id">

            First name:
             <input type="text" name="firstname">
             Middle name:
              <input type="text" name="middlename">
              Last name:
             <input type="text" name="lastname"><br>
             Mobile Number(1):
             <input type:="text" name="mobile1">
             Mobile Number(2):
            <input type="text" name="mobile2"><br>
            <h3>Present Address</h3><br>
            Sreet / Village:
            <input type="text" name="streetorvillage">
            Sreet Name:
            <input type="text" name="streetname">
            Area:
            <input type="text" name="area"><br>
            Thana:
            <input type="text" name="thana">
            District:
            <input type="text" name="district"><br>
            <h3>Parmanent Address</h3><br>
            Sreet / Village:
            <input type="text" name="p_streetorvillage">
            Sreet Name:
            <input type="text" name="p_streetname">
            Area:
            <input type="text" name="p_area"><br>
            Thana:
            <input type="text" name="p_thana">
            District:
            <input type="text" name="p_district"><br>
            Note:
            <input type="text" name="note"><br>
            Date Of Birth:
             <input type="date" name="birthdate">
            Date Of Admission:
            <input type="date" name="admissiondate"><br>
            Amount Deposited:
            <input type="text" name="deposit">
             button type="submit" name="submit">Submit</button>
        </form>
  </div>




    <!-- javascripts -->
    <script type="text/javascript" src="javascripts/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="javascripts/popper.min.js"></script>
    <script type="text/javascript" src="javascripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="selector.js"></script>
</body>

</html>
