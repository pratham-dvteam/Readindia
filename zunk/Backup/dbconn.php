<?php

$st_id =  $_GET['stid'];
$state_name =  $_GET['stname'];
$district_id =  $_GET['dstid'];
$district_name =  $_GET['dstname']; 
$block_id =  $_GET['blkid'];
$block_name =  $_GET['blkname'];
@$school_code =  $_GET['sccode'];
@$school_name =  $_GET['scname'];
$village_id =  $_GET['vlid'];
$village_name =  $_GET['vlname'];

echo "User submitted data is:<br/><br/>";
echo "State_ID: ".$st_id. "<br/>";
echo "State_Name: ".$state_name. "<br/>";
echo "District_ID: ".$district_id. "<br/>";
echo "District_Name: ".$district_name. "<br/>";
echo "Block_ID: ".$block_id. "<br/>";
echo "Block_Name: ".$block_name. "<br/>";
echo "School_ID: ".$school_code. "<br/>";
echo "School_Name: ".$school_name. "<br/>";
echo "Village_ID: ".$village_id. "<br/>";
echo "Village_Name: ".$village_name. "<br/>";


//DB Config

 $host="localhost";
 $user="root";
 $pass="";
 $dbn="readindia";
 
 //Create Connection
 $conn=mysql_connect($host,$user,$pass);
 if($conn){
	
		echo "Connected..! ";
	
		//Select DB
	
		mysql_select_db($dbn, $conn);
		//Create Query
		
		 $sql="INSERT into schoollist (Index, State_ID, State_Name, Dist_ID, District_Name, Block_ID, Block_Name, School_ID, School_Name, Village_ID, Village_Name) values('','$st_id','$state_name','$district_id','$district_name','$block_id','$block_name','$school_code','$school_name','$village_id','$village_name');";
		
		
	
	//Execute Query
		$result=mysql_query($sql);
		if($result){
			echo "Data is saved";
			
		} 
		else{
	
			echo "Not Saved";
		}
	
	}
	else{
		echo "Connection Failed!";die;
	}


?>