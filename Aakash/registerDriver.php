<?php
	//Include supporting files
	include ('db_config.php');
	
	// include send sms class
	include 'sendsms.php'; 
	// create object of class
	$sendsms=new sendsms("http://alerts.sinfini.com/api", "A76eceb829506d587163d41b4dbd6311e", "MOVTNX");

	//Get JSON data from android phone
	$json = json_encode($_POST);
	$recvd_data = json_decode($json);

	//Define Variables
	$uid = $recvd_data->{"uid"};
	$region = $recvd_data->{"region"};
	$firstname = $recvd_data->{"firstname"};
	$lastname = $recvd_data->{"lastname"};
	$email = $recvd_data->{"email"};
	$username = $recvd_data->{"username"};
	$tmake = $recvd_data->{"tmake"};
	$tmodel = $recvd_data->{"tmodel"};
	$tcat = strtolower($recvd_data->{"tcat"});
	$treg = $recvd_data->{"treg"};
	$tvin = $recvd_data->{"tvin"};
	$dutyStatus = "OFFDUTY";
	$IMEI = $recvd_data->{"IMEI"};
	$MSISDN = $recvd_data->{"MSISDN"};
	$address = $recvd_data->{"address"};
	$basestation = $recvd_data->{"basestation"};
	$appVersion = $recvd_data->{"appVersion"};
	$pmodel = $recvd_data->{"pmodel"};
	$avgRating = '5';
	$unsettledRun = '0';
	$authority = $recvd_data->{"authority"};
	$owner_id = $recvd_data->{"owner_id"};
	$joinDate = $recvd_data->{"joinDate"};
	$plan = $recvd_data->{"plan"};
	$workStatus = $recvd_data->{"workStatus"};
	$vehicle_branded = $recvd_data->{"vehicle_branded"};
	$sourced_by = $recvd_data->{"sourced_by"};
	$imgproof = $recvd_data->{"imgproof"};
	$table_name = $IMEI.'_track';
	$latitude = '18.99652166666667';
	$longitude = '73.12136833333334';
	$accuracy = '0';
	$speed = '0';
	$bearing = '0';
	$altitude = '0';
	$wallet_balance = '10000';

	// Get link to driver's image uploaded on server from Totem
	if($imgproof!=""):
		$imgproof = strstr($imgproof, 'path', false);
		$imgproof = str_replace("path","",$imgproof);
		$image_link="http://www.move10x.com/assets/drivers/".$uid.".jpg";
	else:
		$image_link="";
	endif;

	$sourced_array = explode(' ', $sourced_by);

	//Create DB connection
	$con = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
	
	//----Get source details
	$get_source_details = "select * from employees where firstname= '".$sourced_array[0]."' and lastname='".$sourced_array[1]."';";
	$get_source_details=$con->query($get_source_details);
	$get_source_details = $get_source_details->fetch_assoc();
	$sourceName = $get_source_details['firstname'];
	$sourcePhone = $get_source_details['phone'];

	// Get applicable plan ID
	$get_plan_id = "select id from driver_plans where name = '$plan' and region = '$region' and is_active = '1'";
	$get_plan_id = $con->query($get_plan_id);
	$get_plan_id = $get_plan_id->fetch_assoc();
	$planId = $get_plan_id['id'];

	// Check connection
	if ($con->connect_error) {
		trigger_error('Database connection failed - '. $con->connect_error, E_USER_ERROR);
	}

	// New Driver's Personal phone number should not match with an existing driver except for a driver 
	// who is not terminated and is an outside driver
	$chk_username = "select id FROM drivers where username='".$username."' and workStatus<>'TERMINATED' and workStatus<>'OUTSIDE'";
	$chk_username=$con->query($chk_username);
	if($chk_username->num_rows==0)
	{
		// New Driver's IMEI should not be allotted to an existing driver except for a driver
		// who is not terminated and is a pending driver
		$chk_IMEI = "select id FROM drivers where IMEI='".$IMEI."' and workStatus<>'TERMINATED' and workStatus<>'PENDING_VERIFY' and workStatus<>'PENDING_DEVICE'";
		$chk_IMEI=$con->query($chk_IMEI);
		if($chk_IMEI->num_rows>0)
		{
			$result[] = array('result' => 'fail', 'error_msg' => 'IMEI already exist.');
			echo json_encode($result);
			exit();
		}
	}
	else
	{
		$result[] = array('result' => 'fail', 'error_msg' => 'Driver Phone already exist.');
		echo json_encode($result);
		exit();
	}
	
	// Values should be properly received from POST fields and IMEI should not be a dummy IMEI
	if($firstname && $IMEI != '999999999999999') {
		
		date_default_timezone_set("UTC");
        $now = date("Y-m-d H:i:s");
		
		//Create Booking entry in New Booking table	
		$sql_register="INSERT INTO drivers (firstname, lastname, email, username, uid, image_link, tmake, tmodel, tcat, treg, tvin, dutyStatus, workStatus, IMEI, MSISDN, address, region, basestation, appVersion, pmodel, avgRating, unsettledRun, authority, owner_id, joinDate, updatedAt, plan, planId, vehicle_branded, sourced_by) VALUES ('$firstname', '$lastname', '$email', '$username', '$uid', '$image_link', '$tmake', '$tmodel', '$tcat', '$treg', '$tvin', '$dutyStatus', '$workStatus', '$IMEI', '$MSISDN', '$address', '$region', '$basestation', '$appVersion', '$pmodel', '$avgRating', '$unsettledRun', '$authority', '$owner_id', '$joinDate', '$now', '$plan', '$planId', '$vehicle_branded', '$sourced_by')";
		$result_register=$con->query($sql_register);
		
		if($result_register == false) {
			$result[] = array('result' => 'fail', 'error_msg' => 'Unknown Error DB1290. Please contact admin.');
		}
		else {
		
			// Driver track index is used for keeping track of table_name used for storing location pings of every IMEI being used.
			$sql2="INSERT INTO driver_track_index (IMEI, table_name) VALUES ('$IMEI', '$table_name')";
			$result2=$con->query($sql2);
			if($result2 == false) {
				$result[] = array('result' => 'fail', 'error_msg' => 'Could not update driver track index table.');
			}
			else {
				
				date_default_timezone_set("UTC");
            	$now = date("Y-m-d H:i:s");
				
				// Insert entry into driver_finance table
				$sql3="INSERT INTO driver_finance (driver_uid, driver_parent, total_trips, total_distance_km, wallet_balance, wallet_usable, point_value, total_driver_owes, total_driver_gets, last_settlement_at, total_earned, unsettled_trips, unsettled_amount, updated_at) VALUES ('$uid', '$owner_id', '0', '0', '$wallet_balance', '0', '1', '5000', '0', '$now', '0', '0', '0', '$now')";
				$result3=$con->query($sql3);
				
				// Create a new table for this IMEI
				$sql4="CREATE TABLE $table_name (id INT AUTO_INCREMENT PRIMARY KEY, IMEI VARCHAR(20), latitude VARCHAR(50), longitude VARCHAR(50), accuracy DOUBLE, speed DOUBLE, bearing DOUBLE, altitude DOUBLE, recorded_at TEXT, booking_ref varchar(50), address_drop_list_id varchar(50))";
				$result4=$con->query($sql4);
				
				if($result3 != false && $result4 != false) {
					
					// Start with putting a location ping of 10X HQ in newly created track table of this IMEI
					$sql5="INSERT INTO $table_name (IMEI, latitude, longitude, accuracy, speed, bearing, altitude, recorded_at) VALUES ('$IMEI', '$latitude', '$longitude', '$accuracy', '$speed', '$bearing', '$altitude', '$recorded_at')";
					$result5=$con->query($sql5);
					$result[] = array('result' => 'success');
					
					$smsBody = "Welcome $firstname. Your partner account with MOVE10X has been created. Thank you for choosing to drive and earn with us. Please call at 7666715222 to schedule your Training Program.";

					// If driver is being registered on TRAINING stage. 
					if($workStatus == "TRAINING"){
						
						$driverSMS = "Hello $firstname, welcome to MOVE10X family. Your application has been approved and you will soon be receiving a call from your relationship manager inviting you for our formal training and induction session. We are excited to be working with you. www.move10x.com";						
						$sourceSms = "Hi $sourceName, your driver partner $firstname ".$lastname."’s application has been approved. Please invite him for the next scheduled training and induction session.";
						
						// Send SMS to Driver
						$SMSresponse = $sendsms->send_sms("$username", "$driverSMS");
						// Send SMS to VRM
						$SMSresponseSource = $sendsms->send_sms("$sourcePhone", "$sourceSms");
					
					// If driver is being registered on ACTIVE stage.
					}else if($workStatus == "ACTIVE"){
						
						$driverSMS = "Hello $firstname, congratulations on your first day at MOVE10X. We wish you all the best and will always be available to solve your issues at 8888193333. Drive safe, drive 10X.";
						$sourceSms = "Hi $sourceName, today is your driver partner $firstname ".$lastname."’s first day at work. Please speak to them and wish them all the best.";
						
						// Send SMS to VRM
						$SMSresponseSource = $sendsms->send_sms("$sourcePhone", "$sourceSms");
						// Send SMS to Driver
						$SMSresponse = $sendsms->send_sms("$username", "$driverSMS");
					}
					
					header("Content-type: application/json");
					//Send result data back as JSON
					echo json_encode($result);
				}
				else {
					$result[] = array('result' => 'fail', 'error_msg' => 'Could not create finance and tracking tables');
				}
			}
		}
	}
	else if($firstname && $IMEI == '999999999999999') {

		// When there is no IMEI, skip adding entry to driver_track_index table and also 
		// do not create Track table
		
		date_default_timezone_set("UTC");
        $now = date("Y-m-d H:i:s");
		
		$sql_register="INSERT INTO drivers (firstname, lastname, email, username, uid, image_link, tmake, tmodel, tcat, treg, tvin, dutyStatus, workStatus, IMEI, MSISDN, address, region, basestation, appVersion, pmodel, avgRating, unsettledRun, authority, owner_id, joinDate, updatedAt, plan, planId, vehicle_branded, sourced_by) VALUES ('$firstname', '$lastname', '$email', '$username', '$uid', '$image_link', '$tmake', '$tmodel', '$tcat', '$treg', '$tvin', '$dutyStatus', '$workStatus', '$IMEI', '$MSISDN', '$address', '$region', '$basestation', '$appVersion', '$pmodel', '$avgRating', '$unsettledRun', '$authority', '$owner_id', '$joinDate', '$now', '$plan', '$planId', '$vehicle_branded', '$sourced_by')";
		$result_register=$con->query($sql_register);
		
		if($result_register == false) {
			$result[] = array('result' => 'fail', 'error_msg' => 'Unknown Error DB1290. Please contact admin.');
		}
		
		date_default_timezone_set("UTC");
        $now = date("Y-m-d H:i:s");
		
		$sql3="INSERT INTO driver_finance (driver_uid, driver_parent, total_trips, total_distance_km, wallet_balance, wallet_usable, point_value, total_driver_owes, total_driver_gets, last_settlement_at, total_earned, unsettled_trips, unsettled_amount, updated_at) VALUES ('$uid', '$owner_id', '0', '0', '$wallet_balance', '0', '1', '5000', '0', '$now', '0', '0', '0', '$now')";
		$result3=$con->query($sql3);
		
		if($result3 != false) {
			$result[] = array('result' => 'success');
			$smsBody = "Welcome $firstname. Your partner account with MOVE10X has been created. Thank you for choosing to drive and earn with us. Please call at 7666715222 to schedule your Training Program.";

			
			if($workStatus == "PENDING_VERIFY"){
				
				$driverSMS = "Hi $firstname, thanks for choosing to drive with MOVE10X. Everyday several of our Driver Partners are making more money and spending more time with their families. Your application has been received and will soon be vetted by our team. We will notify you once it is approved. Your Relationship Manager (RM) is Mr. $sourceName ($sourcePhone).";
				$sourceSms = "Hi $sourceName, your driver partner $firstname ".$lastname."’s application has been submitted. You will be notified once it is approved verified. You can track its status live on your TOTEM App.";
				
				$SMSresponseSource = $sendsms->send_sms("$sourcePhone", "$sourceSms");
				$SMSresponse = $sendsms->send_sms("$username", "$driverSMS");

				// Send email to Admin notifying about new driver added from TOTEM App
				$subject = "New Partner Account [$tcat]: Pending Approval";
				$emailBody = "Hi Admin,\n\n A new 10X Partner account request has been received. Please go to GOD panel to approve or reject this request. \n\n PARTNER DETAILS: \n\n Name: $firstname $lastname\n Phone: $username\n Plan: $plan\n Vehicle Category: $tcat\n Vehicle Build: $tmake $tmodel\n Base Station: $basestation\n VRM: $sourceName";
				$from = "partner@move10x.com";
				$headers = "From:" . $from;
				mail('aakash@move10x.com, sikandar@move10x.com',$subject,$emailBody,$headers);
			
			}
			else if($workStatus == "TRAINING"){
				
				$driverSMS = "Hello $firstname, welcome to MOVE10X family. Your application has been approved and you will soon be receiving a call from your relationship manager inviting you for our formal training and induction session. We are excited to be working with you. www.move10x.com";						
				$sourceSms = "Hi $sourceName, your driver partner $firstname ".$lastname."’s application has been approved. Please invite him for the next scheduled training and induction session.";
				
				$SMSresponse = $sendsms->send_sms("$username", "$driverSMS");
				$SMSresponseSource = $sendsms->send_sms("$sourcePhone", "$sourceSms");
			
			}
			else if($workStatus == "ACTIVE"){
				
				$driverSMS = "Hello $firstname, congratulations on your first day at MOVE10X. We wish you all the best and will always be available to solve your issues at 8888193333. Drive safe, drive 10X.";
				$sourceSms = "Hi $sourceName, today is your driver partner $firstname ".$lastname."’s first day at work. Please speak to them and wish them all the best.";
				
				$SMSresponseSource = $sendsms->send_sms("$sourcePhone", "$sourceSms");
				$SMSresponse = $sendsms->send_sms("$username", "$driverSMS");
			
			}
			else {

			}
			
			header("Content-type: application/json");
			//Send result data back as JSON
			echo json_encode($result);
		}
		else {
			$result[] = array('result' => 'fail', 'error_msg' => 'Could not create finance and tracking tables');
		}
	}
	else {
		$result[] = array('result' => 'fail', 'error_msg' => 'No Driver details received.');
	}
?>