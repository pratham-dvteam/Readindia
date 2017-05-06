
<?php
	
	include_once 'dbconnect.php';
	

				$tbl1Data = $_REQUEST['tbl1Info'];

				@$schoolCode=$tbl1Data['schoolCode'];	

				
	//Table 2			
		$table8_result=mysql_query("select * from table8 where schoolcode = '$schoolCode' ");


		$table8_response = array();
		while($data = mysql_fetch_row($table8_result))
		{      
		    array_push($table8_response, $data);

		}

		echo json_encode($table8_response);
		

	// For new school entry
		if ( is_null(table8_response)) {

			$table8_response=0;
			
		};
	