
<?php
	
	include_once 'dbconnect.php';
	

				$tbl1Data = $_REQUEST['tbl1Info'];

				@$schoolCode=$tbl1Data['schoolCode'];	

				
	//Table 2			
		$table7_result=mysql_query("select * from table7 where schoolcode = '$schoolCode' ");


		$table7_response = array();
		while($data = mysql_fetch_row($table7_result))
		{      
		    array_push($table7_response, $data);

		}

		echo json_encode($table7_response);
		

	// For new school entry
		if ( is_null(table7_response)) {

			$table7_response=0;
			
		};
	