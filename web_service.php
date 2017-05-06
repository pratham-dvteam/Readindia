<?php
include_once('include/config.php');

if($_REQUEST['getData']=='getprogramWise')
{
	getprogramWise();
}
if($_REQUEST['getData']=='gettypeOfCampWise')
{
	gettypeOfCampWise();
}

if($_REQUEST['getData']=='getStateWise')
{
	getStateWise();
}

if($_REQUEST['getData']=='getBlockWise')
{
	getBlockWise();
}




function getprogramWise()
{
	$obj = new functions();
	$sql="SELECT `program` FROM `schoollist` GROUP BY `program`";
	$result = $obj->data_select($sql);
	echo json_encode($result);
	
}

	
function gettypeOfCampWise()
{
	$obj = new functions();
	$sql="SELECT `typeOfCamp` FROM `schoollist` WHERE `program`='".$_REQUEST['camp']."' GROUP BY `typeOfCamp`";
	$result = $obj->data_select($sql);
	echo json_encode($result);
	
}



function getStateWise()
{
	$obj = new functions();
	$sql="SELECT `state` FROM `schoollist` WHERE `typeOfCamp`='".$_REQUEST['state']."' GROUP BY `state`";
	$result = $obj->data_select($sql);
	echo json_encode($result);
	
}

function getBlockWise()

{
	$obj = new functions();
	$sql="SELECT `block` FROM `schoollist` WHERE `state`='".$_REQUEST['block']."' GROUP BY `block`";
	$result = $obj->data_select($sql);
	echo json_encode($result);
	
}

function getSchoolList()

{
	$obj = new functions();
//	$sql = "SELECT villageName, schoolName, schoolCode, program FROM schoolList WHERE state= 'Uttar Pradesh' ORDER BY `schoollist`.`schoolCode` ASC ";
	$sql="SELECT villageName, schoolName, schoolCode, program FROM `schoollist` WHERE `state`='".$_REQUEST['block']."' GROUP BY `block`";
	$result = $obj->data_select($sql);
	echo json_encode($result);
	
}

?>