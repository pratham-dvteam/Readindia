<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$state = $_POST['state'];
		$brgName = $_POST['brgName'];
		$higherEducation = $_POST['higherEducation'];
		$dateOfBirth = $_POST['dateOfBirth'];
		$dateOfJoiningPratham = $_POST['dateOfJoiningPratham'];
		$contectNumber = $_POST['contectNumber'];
		$email = $_POST['email'];
		$programName = $_POST['programName'];
		try{
			
			$stmt = $db_con->prepare("INSERT INTO brgList(state,brgName,higherEducation,dateOfBirth,dateOfJoiningPratham,contectNumber,email,programName)
			 VALUES(:estate, :ebrgName, :ehigherEducation,:edateOfBirth,:edateOfJoiningPratham,:econtectNumber,:eemail,:eprogramName)");
			$stmt->bindParam(":estate", $state);
			$stmt->bindParam(":ebrgName", $brgName);
			$stmt->bindParam(":ehigherEducation", $higherEducation);
			$stmt->bindParam(":edateOfBirth", $dateOfBirth);
			$stmt->bindParam(":edateOfJoiningPratham", $dateOfJoiningPratham);
			$stmt->bindParam(":econtectNumber", $contectNumber);
			$stmt->bindParam(":eemail", $email);
			$stmt->bindParam(":eprogramName", $programName);
			if($stmt->execute())
			{
				echo "Successfully Added";
			}
			else{
				echo "Query Problem";
			}	
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>