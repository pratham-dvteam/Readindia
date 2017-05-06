
<?php
	
	include_once 'dbconnect.php';
	

				$tbl1Data = $_REQUEST['tbl1Info'];

				@$schoolCode=$tbl1Data['schoolCode'];	

				
	//Table 2			
		$table2_result=mysql_query("select * from table2 where schoolcode = '$schoolCode' ");
		$table2_response = array();
		while($data = mysql_fetch_row($table2_result))
		{      
		    array_push($table2_response, $data);

		}

		echo json_encode($table2_response);
		

	// For new school entry
		if ( is_null(table2_response)) {

			$table2_response=0;
			
		};
	