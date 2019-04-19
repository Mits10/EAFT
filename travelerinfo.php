<?php
    $user = 'root';
    $pass = '';
    $db = 'hospital';
    $db = new mysqli('localhost', $user, $pass, $db) or die('unable to connect');
    echo ('connection successfull');
    include('manualComit.php');
    if(isset($_POST['submit'])){
            $docid = array();
            $degree = array();
            $board = array();
            $year = array();
            $cgpa = array();

            for ($i = 0; $i < 10; $i++)
            {
                if (isset($_POST["degree" . $i]))
                {
                    $docid[$i] = $_POST["doctor-id" . $i];
                    $degree[$i] = $_POST["degree" . $i];
                    $board[$i] = $_POST["board" . $i];
                    $year[$i] = $_POST["year" . $i];
                    $cgpa[$i] = $_POST["cgpa" . $i];
                }
            }

            if (!empty($degree[0]))
            {
                $educationQuery = "INSERT INTO doctor_qualification()  VALUES ('" . $pID['LastPlayerID'] . "', '$degree[0]', '$institution[0]', '$department[0]', '$result[0]', '$year[0]')";


                for ($i = 1; $i < 10; $i++)
                {
                    if (!empty($degree[$i]))
                        $educationQuery .= ", ('" . $pID['LastPlayerID'] . "', '$degree[$i]', '$institution[$i]', '$department[$i]', '$result[$i]', '$year[$i]')";
                    else
                        break;
                }

                commitTable($conn, $educationQuery);
            }
}

?>
