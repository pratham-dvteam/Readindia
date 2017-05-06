
<?php
	
	include_once 'dbconnect.php';
	

				$tbl1Data = $_REQUEST['tbl1Info'];

				@$schoolCode=$tbl1Data['schoolCode'];	

				
	//Table 2			
		$table3_result=mysql_query("select * from table3 where schoolcode = '$schoolCode' ");


		$table3_response = array();
		while($data = mysql_fetch_row($table3_result))
		{      
		    array_push($table3_response, $data);

		}

		echo json_encode($table3_response);
		

	// For new school entry
		if ( is_null(table3_response)) {

			$table3_response=0;
			
		};
		
	