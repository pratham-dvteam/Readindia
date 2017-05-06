<?php
include_once 'dbconnect.php';

if(isset($_POST['brg_element'])){
	
	$brgCode = $_POST['brgCode'];
	$brgName = $_POST['brgName'];
	$state = $_POST['state'];
	$higherEducation = $_POST['higherEducation'];
	$dateOfBirth = $_POST['date_of_birth'];
	$dateOfJoiningPratham = $_POST['dateOfJoiningPratham'];
	$contectNo = $_POST['contectNo'];
	$email = $_POST['email'];
	$programName = $_POST['programName'];

	$sql = mysql_query("INSERT INTO brg_element(brgCode,brgName,state,higherEducation,dateOfBirth,dateOfJoiningPratham,contectNo,email,programName) VALUES('$brgCode2','$brgName2','$state2','$higherEducation2','$dateOfBirth2','$dateOfJoiningPratham2','$contectNo2','$email2','$programName2')");
	if(!mysql_query($sql)){
				die('Error:'.mysql_error());
		}
				mysql_close();
			 
			exit(); 
}
    ?>