<?php

include_once 'dbtest.php';

	$brginfo = $_REQUEST['brgList'];

	@$blockName = $brginfo['blockName'];

	@$brgName = $brginfo['brgName'];
	@$higherEducation = $brginfo['higherEducation'];
	@$dateOfBirth = $brginfo['dateOfBirth'];
	@$dateOfJoiningPratham = $brginfo['dateOfJoiningPratham'];
	@$contectNo = $brginfo['contectNo'];
	@$email = $brginfo['email'];
	@$programName = $brginfo['programName'];

	mysql_query("INSERT INTO brgList(blockName,brgName, higherEducation, dateOfBirth, dateOfJoiningPratham, contectNo, email, programName) 
		VALUES('$blockName', '$brgName','$higherEducation','$dateOfBirth','$dateOfJoiningPratham','$contectNo','$email','$programName')");


  ?>