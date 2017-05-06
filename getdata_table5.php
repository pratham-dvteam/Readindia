
<?php
	
	include_once 'dbconnect.php';
	

				$tbl1Data = $_REQUEST['tbl1Info'];

				@$schoolCode=$tbl1Data['schoolCode'];	

				
	//Table 2			
		$table5_result=mysql_query("select * from table5 where schoolcode = '$schoolCode' ");


		$table5_response = array();
		while($data = mysql_fetch_row($table5_result))
		{      
		    array_push($table5_response, $data);

		}

		echo json_encode($table5_response);
		

	// For new school entry
		if ( is_null(table5_response)) {

			$table5_response=0;
			
		};
	