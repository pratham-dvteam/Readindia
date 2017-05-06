
<?php
	
	include_once 'dbconnect.php';
	

				$tbl1Data = $_REQUEST['tbl1Info'];

				@$schoolCode=$tbl1Data['schoolCode'];	

			//echo json_encode($_REQUEST);

//	$result=mysql_query("select * from table2 where schoolcode = 'RJ001' ");
	$table2_result=mysql_query("select * from table2 where schoolcode = '$schoolCode' ");



	$table2_response = array();
	while($data = mysql_fetch_row($table2_result))
	{   
	    
	    array_push($table2_response, $data);			

	}
	echo json_encode($table2_response);



exit();
	// $table1_result=mysql_query("select * from table2 where schoolcode = '$schoolCode' ");


	// $table1_response = array();
	// while($data = mysql_fetch_row($table1_result))
	// {   
	    
	//     array_push($table1_response, $data);
		
		

	// }
	// echo json_encode($table1_response);


?>