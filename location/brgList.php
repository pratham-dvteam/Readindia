<?php
include_once 'dbconfig.php';

?>

<html>
<head><script type="text/javascript" src="jquery-1.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$("#loding1").hide();
			$("#loding2").hide();
			$(".state").change(function()
			{
				$("#loding1").show();
				var id=$(this).val();
				var dataString = 'id='+ id;
				$(".district").find('option').remove();
				$(".block").find('option').remove();
				$.ajax
				({
				type: "POST",
				url: "get_district.php",
				data: dataString,
				cache: false,
				success: function(html)
				{
					$("#loding1").hide();
					$(".district").html(html);
				} 
			});
		});
		
				
				$(".district").change(function()
				{
					$("#loding2").show();
					var id=$(this).val();
					var dataString = 'id='+ id;
				
				$.ajax
				({
					type: "POST",
					url: "get_block.php",
					data: dataString,
					cache: false,
					success: function(html)
					{
						$("#loding2").hide();
						$(".block").html(html);
					} 
				});
				});
				
		});
	</script>
		<style>
			label
			{
			font-weight:bold;
			padding:10px;
			}
			div
			{
				margin-top:100px;
			}
			select
			{
				width:200px;
				height:35px;
				border:2px solid #456879;
				border-radius:10px;
			}

			.color {
				color:green;
			}

			.link {
				color:red;
			}
		</style>
</head>

	<!--Datepicker -->
				<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
				<script src="//code.jquery.com/jquery-1.10.2.js"></script>
				<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
				 
	<!--Datepicker -->
				<link rel="stylesheet" href="style.css" type="text/css"/>

				<font color="green" face="calibri" size="6"><center><b>BRG / CRL / PCC Page</b></center></font>
				<input type="hidden" name="" value="" />
				<hr color="#008000" width="100%"></hr>
		<br>			
		<table align="center" border="1" bordercolor="#9999C0" cellpadding="0" cellspacing="0" height="10%" width="40%">
			<tr align="center">
				<td id="ft">State</td>
				<td id="ft">District</td>
				<td id="ft">Block</td>
			</tr>
			<tr align="center">
				<td id="ft1" width="40%">
					<select name="state" class="state">
					<option selected="selected">--Select state--</option>
					<?php
						$stmt = $DB_con->prepare("SELECT * FROM state ORDER BY `state_name` ASC");
						$stmt->execute();
						while($row=$stmt->fetch(PDO::FETCH_ASSOC))
						{
							?>
					        <option value="<?php echo $row['state_id']; ?>"><?php echo $row['state_name']; ?></option>
					        <?php
						} 
					?>
						</select>
				</td>
				<td id="ft1" width="30%">
						<select name="district" class="district">
						<option selected="selected">--Select district--</option>
						</select>
						<img src="ajax-loader.gif" id="loding1"></img>
				</td>
				<td id="ft1" width="30%">
						<select name="block" class="block">
						<option selected="selected">--Select block--</option>
						</select>
						<img src="ajax-loader.gif" id="loding2"></img>
				</td>
			</tr>  
		</table>
	
		<center><button name="savebutton" id ="id_save" class="Save">Save</button></center>
				<hr>
	<table class="list appTbl" id="" style="width:100%;border-color:gold;" align="center" border="0" cellpadding="0" cellspacing="0">
				
			<tr class="headerRow">
				<th><font color="#008000" face="calibri" size="3">
					<center>&nbsp;&nbsp;BRG Code &nbsp;&nbsp;</center>
					</font>
				</th>
				<th><font color="#008000" face="calibri" size="3">
					<center>&nbsp;&nbsp; Name &nbsp;&nbsp;</center>
					</font>
				</th>
			
				<th>
					<font color="#008000" face="calibri" size="3">
					<center>&nbsp;&nbsp; Higher Education &nbsp;&nbsp;</center>
					</font>
				</th>

				<th><font color="#008000" face="calibri" size="3">
					<center>&nbsp;&nbsp; Date of Birth &nbsp;&nbsp;</center>
					</font>
				</th>

				<th><font color="#008000" face="calibri" size="3">
					<center>&nbsp;&nbsp; Date of Joining Pratham &nbsp;&nbsp;</center>
					</font>
				</th>

				<th><font color="#008000" face="calibri" size="3">
					<center>&nbsp;&nbsp; Contact Number &nbsp;&nbsp;</center>
					</font>
				</th>

				<th><font color="#008000" face="calibri" size="3">
					<center>Email</center>
				    </font>
				</th>

				<th>
					<font color="#008000" face="calibri" size="3">
					<center>&nbsp;&nbsp; Programme Name &nbsp;&nbsp;</center>
					</font>
				</th>
			</tr>
		<tr class="tablerow" onmouseover="" onmouseout="" onBlur="" onFocus="">
				<td><label></label></td>
				<td><input type = "Text" size ="14" id= "brgName" name="brgName" value="<?php if(isset($_POST['brgName'])) echo $_POST['brgName']; ?>"></td>
				<td><input type = "Text" size ="14" id = "higherEducation" name="higherEducation" value="<?php if(isset($_POST['higherEducation'])) echo $_POST['higherEducation']; ?>"></td>
				<td><input type = "Text" size ="14" id = "DateOfBirth" name="dateOfBirth" value="<?php if(isset($_POST['dateOfBirth'])) echo $_POST['dateOfBirth']; ?>"></td>
				<td><input type = "Text" size ="14" id = "DateOfJoiningPratham" name="dateOfJoiningPratham" value="<?php if(isset($_POST['dateOfJoiningPratham'])) echo $_POST['dateOfJoiningPratham']; ?>"></td>
				<td><input type = "Text" size ="14" id = "contectNo" name="contectNo" value="<?php if(isset($_POST['contectNo'])) echo $_POST['contectNo']; ?>"></td>
				<td><input type = "Text" size ="14" id = "email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"></td>
				<td><input type = "Text" size ="14" id = "programName" name="programName" value="<?php if(isset($_POST['programName'])) echo $_POST['programName']; ?>"></td>

		</tr>
	</table>
<hr color="#008000" width="100%" ></hr>
<script type="text/javascript"> 
		$(document).ready(function() 
		{
	   		$('.save').click(function(e) 
		        	{

		  	        	var requestData = getRequestData();
			        	console.log(requestData);

			        	$.ajax({
							url: 'brgListDbConnection.php',
							method:'POST',
							data:requestData,
							dataType:'json',
							success:function(data)
								{
									//alert(data);
									console.log('server response', data);                           
							
								},
								error: function (xhr, ajaxOptions, thrownError) 
								{
									console.log('server error.', thrownError);
								}
					});

				});
			});

			function getRequestData(){

		        var requestData = { }; 
		      
			    requestData['brginfo'] = { };

		        requestData['brginfo']['brgName'] = $('#brgName').val();
		        requestData['brginfo']['higherEducation'] = $('#higherEducation').val();
		        requestData['brginfo']['DateOfBirth'] = $('#DateOfBirth').val();
		        requestData['brginfo']['DateOfJoiningPratham'] = $('#DateOfJoiningPratham').val();
		        requestData['brginfo']['contectNo'] = $('#contectNo').val();
		        requestData['brginfo']['email'] = $('#email').val();
		        requestData['brginfo']['programName'] = $('#programName').val();

		

				return requestData;
		}

	</script>        
	<script>
			$(function() {
			$("#DateOfBirth").datepicker();
			});
			$(function() {
			$("#DateOfJoiningPratham").datepicker();
			});
	</script>
</html>
	<br>
<html>
	<head>
		<style>
			table, th, td,tr {
		    border: 1px solid black;
		    border-collapse: collapse;
		    width: 100%;
		    padding: 8px;
		    border-bottom: 1px solid #ddd;
		    font-family: calibri;
			font-size: 14px;
			table-layout: fixed;
			text-align: center;

			}
			/*tr:nth-child(even){background-color: #f2f2f2}*/
			tr:hover{background-color:#f2f2f2}

		</style>
	</head>
		<body>

			<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "location";

				// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
					     die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "SELECT brgCode, brgName, higherEducation, dateOfBirth, dateOfJoiningPratham, contectNo,email, programName FROM brgList";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					     /*echo "<table><tr><th>Brg Code</th>
										  <th>brgName</th>
										  <th>higherEducation</th>
										  <th>dateOfBirth</th>
										  <th>dateOfJoiningPratham</th>
										  <th>contectNo</th>
										  <th>email</th>
										  <th>programName</th>
										  </tr>"; */
						 
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
					         echo "<table><tr><td>" . $row["brgCode"]. "</td>
					         			<td>" . $row["brgName"]. "</td>
										<td>" . $row["higherEducation"]. "</td>
										<td>" . $row["dateOfBirth"]. "</td>
										<td>" . $row["dateOfJoiningPratham"]. "</td>
										<td>" . $row["contectNo"]. "</td>
										<td>" . $row["email"]. "</td>
										<td>" . $row["programName"]. "</td>
										</tr>";
						}
							echo "</table>";
							} 
							else {
								     echo "0 results";
								}
								$conn->close();
			?>  

		</body>
</html>