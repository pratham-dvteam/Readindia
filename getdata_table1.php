
<?php
	
	include_once 'dbconnect.php';
	

				$tbl1Data = $_REQUEST['tbl1Info'];

				@$schoolCode=$tbl1Data['schoolCode'];	

				
	//Table 2			
		$table1_result=mysql_query("select * from table1 where schoolcode = '$schoolCode' ");


		$table1_response = array();
		while($data = mysql_fetch_row($table1_result))
		{      
		    array_push($table1_response, $data);

		}

		echo json_encode($table1_response);
		

	// For new school entry
		if ( is_null(table1_response)) {

			$table1_response=0;
			
		};
		
	