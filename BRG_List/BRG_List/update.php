<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$state = $_POST['state'];
		$brgName = $_POST['brgName'];
		$higherEducation = $_POST['higherEducation'];
		$dateOfBirth = $_POST['dateOfBirth'];
		$dateOfJoiningPratham = $_POST['dateOfJoiningPratham'];
		$contectNumber = $_POST['contectNumber'];
		$email = $_POST['email'];
		$programName = $_POST['programName'];
		
		$stmt = $db_con->prepare("UPDATE brgList SET state=:es, brgName=:eb, higherEducation=:eh, dateOfBirth=:ed, dateOfJoiningPratham=:edj, contectNumber=:ec, email=:ee, programName=:ep WHERE id=:id");
		$stmt->bindParam(":es", $state);
		$stmt->bindParam(":eb", $brgName);
		$stmt->bindParam(":eh", $higherEducation);
		$stmt->bindParam(":ed", $dateOfBirth);
		$stmt->bindParam(":edj", $dateOfJoiningPratham);
		$stmt->bindParam(":ec", $contectNumber);
		$stmt->bindParam(":ee", $email);
		$stmt->bindParam(":ep", $programName);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}

?>