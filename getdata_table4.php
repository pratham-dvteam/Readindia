
<?php
	
	include_once 'dbconnect.php';
	

				$tbl1Data = $_REQUEST['tbl1Info'];

				@$schoolCode=$tbl1Data['schoolCode'];	

				
	//Table 2			
		$table4_result=mysql_query("select * from table4 where schoolcode = '$schoolCode' ");


		$table4_response = array();
		while($data = mysql_fetch_row($table4_result))
		{      
		    array_push($table4_response, $data);

		}

		echo json_encode($table4_response);
		

	// For new school entry
		if ( is_null(table4_response)) {

			$table4_response=0;
			
		};
	