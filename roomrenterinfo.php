<?php
	//include('connect.php');
	$user = 'root';
	$pass = '';
	$db = 'accomodation';
	$con = new mysqli('localhost', $user, $pass, $db) or die('unable to connect');

	$patid = $_POST['patient-id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$m1 = $_POST['mobile1'];
	$m2 = $_POST['mobile2'];
	$p_street = $_POST['streetorvillage'];
	$p_stname = $_POST['streetname'];
	$p_area = $_POST['area'];
	$p_thana = $_POST['thana'];
	$p_dist = $_POST['district'];
	/*$pr_street = $_POST['p_streetorvillage'];
	$pr_stname = $_POST['p_streetname'];
	$pr_area = $_POST['p_area'];
	$pr_thana = $_POST['p_thana'];
	$pr_dist = $_POST['p_district'];*/
	$note = $_POST['note'];
	$b_date = $_POST['birthdate'];
	$ad_date = $_POST['admissiondate'];
	$prof = $_POST['Profession'];
	$deposite = $_POST['deposit'];
	//$choice = $_POST['choice'];

	$sql = "insert into patient() values('$patid', '$fname','$mname','$lname','$p_street','$p_stname','$p_area','$p_thana','$p_dist','$note','$b_date','$ad_date','$prof','$deposite')";
	$sql2 = "insert into patient_contact() values('$patid','$m1', '$m2')";


   if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

  if ($con->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();


?>
