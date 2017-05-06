
<?php
	
	include_once 'dbconnect.php';
	

				$tbl1Data = $_REQUEST['tbl1Info'];

				@$schoolCode=$tbl1Data['schoolCode'];	

				
	//Table 2			
		$table6_result=mysql_query("select * from table6 where schoolcode = '$schoolCode' ");


		$table6_response = array();
		while($data = mysql_fetch_row($table6_result))
		{      
		    array_push($table6_response, $data);

		}

		echo json_encode($table6_response);
		

	// For new school entry
		if ( is_null(table6_response)) {

			$table6_response=0;
			
		};
	