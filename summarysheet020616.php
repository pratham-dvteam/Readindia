
<?php include_once 'header.php'; 

$schoolCode = $_REQUEST['schoolCode'];

?>

<Html>
	<head>
		<link rel="stylesheet" type = "text/css" href="summary_sheet.css">
		<title>Read India Report Card Data Entry </title>
	
		<!-- jQuery library -->
		<script src="js/jquery-1.11.3.min.js"></script>
		
	
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		//Latest compiled JavaScript 		-->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>		
		
	</head>
	<body>

		<!-- <form id = "id_summarysheet" name="summarysheet" method = "post" >-->
		
			<!-- Saave Button-->
			<center> 	<button type="Submit" name="savebutton" id ="id_save" class="Save">Save</button> 

			<button type="Submit" name="getbutton" id ="id_get" class="get">Get Data</button> </center><br />
		
			<center><b>
			<big>[</big>Once data entry is over for the respective Camp, tick the checkbox and click on Save to "Submit" the camp details.<big>]</big></font></b></center>

			<center>
				<div class = "er_checkbox">
				<table bgcolor="#F0F0F0" border="1" cellpadding="3" cellspacing="0">
					<tr>
						<td id="sub_ft" rowspan="2">Submission 1 rows</td>
						<td bgcolor="#00b0f0" height="20" width="70"></td>
						<td id="sub_ft" rowspan="2">Submission 2 rows</td>
						<td bgcolor="#ffff00" height="20" width="70"></td>
						<td id="sub_ft" rowspan="2">Submission 3 rows</td>
						<td bgcolor="#FF66FF" height="20" width="70"></td>
						<td id="sub_ft" rowspan="2">Submission 4 rows</td>
						<td bgcolor="#92d050" height="20" width="70"></td>
						<td id="sub_ft" rowspan="2">Submitted rows</td>
						<td bgcolor="#F0F0F0" height="20" width="70"></td>
					</tr>
				
					<tr>
						<td calss ="er_submission1"><center><input  class = "optionBox" id="id_submission1" value = "1"  name="id_submission1" type="checkbox"  value="1" /> </center></td>
						<td calss ="er_submission2" id = "checkbox2"><div id ="id_div1"><center><input class = "optionBox"  id="id_submission2" name="" value = "2" type="checkbox" value="2" /> </center></td>
						<td calss ="er_submission3"><center><input class = "optionBox"  id="id_submission3" name="" value = "3" type="checkbox" value="3" /> </center></td>
						<td calss ="er_submission4"><center><input  class = "optionBox" id="id_submission4" name="" value = "4" type="checkbox" value="4" /> </center></td>
						<td calss ="er_submission5"><center><input  class = "optionBox" id="id_submitted" name="" value = "" type="checkbox" value="5" /> </center></td>
					</tr>
				</table>     
			</center> 

			<!-- Table 1 Start from here -->
			<font color="#96763B" face="calibri"  size="4.5"><b>TABLE 1: Basic Information</b></font>
			<div class = "table1" id ="id_t1error"> </div>
			<table bgcolor="#F0F0F0" align="center" id ="id_table1" border="2px" bordercolor="#538467" cellpadding="2" cellspacing="0" id="" style="border-collapse:collapse;" width="98%">
				<tbody>
				<tr align="center">
					
					<td colspan="4" id=""> School Code <br /></td>
					<td colspan="2" style="">
						<label style="font-family:calibri;font-size:17px;font-weight:bold;">
							<input class="submission_1" id="id_schoolcode" maxlength="11" name="schoolCode" size="20" style="width:98px;" value = "<?php echo htmlentities($schoolCode); ?>" type="text"></label></td>
					
					<td class="submission_1" rowspan="2"> Camp Model  </td>
					<td class="c_submission1" rowspan="2">
						<select class="submission_1" id="id_campModel" name="campModel" style="width:80px;">
						<option value="">--None--</option>
						<option value="1">1 Camp</option>
						<option value="2">2 Camp</option>
					</td>
					
					<td  id="ft" rowspan="2"> Camp Phase number</td>
					<td class="c_submission1" rowspan="2" style="">
						<select class="submission_1" id="id_campPhase" name="campPhase" style="width:50px;">
							<option value="">--None--</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
					</td>
					
					<td colspan="2" id="" rowspan="2">Total number of common children <br>(Children assessed at baseline and all endlines)</td>
					<td class ="error_totalchildren c_submission4" colspan="2" rowspan="2"><input class="submission_4" id="id_commonchildren" maxlength="11" name="commonChildren" size="20" style="width:30px;" type="text">  </td>
					 
				</tr>
				
				<tr align="center">
					<td colspan="4" id="tb_hd"> DISE Code</td>
					<td colspan="2" style=""><input class="submission_1 c_submission1" id="id_disecode" maxlength="11" name="diseCode"  size="20" style="width:98px;" type="text"></td>
				</tr>
		
				<tr align="center">
					<td colspan="4" id="tb_hd"> Village Name</td>
					<td colspan="2"><input class="submission_1 c_submission1" id="id_villagename" maxlength="11" name="villageName" size="20" style="width:200px;" type="text"></td>
					<td id="" rowspan="2"> No. of Targeted Children </td>
					<td id="">Class 3</td>
					<td id="">Class 4</td>
					<td id="">Class 5</td>
					<td colspan="2" id="" rowspan="2">No. of teachers in school</td>
					
					<!--No. of teachers in school -->
					<td colspan="2" rowspan="2" style="">
						<select class="submission_1 c_submission1" id="id_totalTeacher" name="totalTeacher" style="width:50px;">
							<option value="">--None--</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="NA">NA</option>  
						</select> 
					</td>
				</tr>
				
				<tr align="center">    
					<td id="ft">Class  </td>
					<td colspan="3" id="ft">Std x to y</td>
					
					<!-- Class X -->
					<td style=""><font size="2">
						<select class="submission_12 c_submission1" id="id_classX" name="classX" style="width:50px;">
							<option value="">--None--</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="NA">NA</option>
						</select></font>
					</td>
					<!-- Class Y -->
					<td style=""><font size="2">
						<select class="submission_12 c_submission1" id="id_classY" name="classY" style="width:50px;">
							<option value="">--None--</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="NA">NA</option> 
						</select></font>
					</td>
					<!-- No. of Targeted Children - STD 3 -->
					<td class ="er_class c_submission1" style=""><font size="2"><input class="submission_12" id="id_std3" name="std3TragetChildren" size="20" style="width:35px;" type="text"> </font></td>	
					
					<!-- No. of Targeted Children - STD 4 -->
					<td class ="er_class c_submission1" style=""><font size="2"><input class="submission_12" id="id_std4" name="std4TragetChildren" size="20" style="width:35px;" type="text"> </font></td>
					
					<!-- No. of Targeted Children - STD 5 -->
					<td class ="er_class c_submission1" style=""><font size="2"><input class="submission_12" id="id_std5" name="std5TragetChildren" size="20" style="width:35px;" type="text"> </font></td>
				</tr>
				
				<tr align="center">    
					<td colspan="4" id="ft">Tot. targeted children *  </td>
					
					<!-- No. of Targeted Children -  MALE-->
					<td class ="er_gender c_submission1" style=""><font size="2"><b>M:</b><input class="submission_12" id="id_childrenMale" name="childrenMale" size="20" style="width:35px;" type="text"> </font></td>
					
					<!-- No. of Targeted Children - FEMALE -->
					<td class ="er_gender c_submission1" style=""><font size="2"><b>F:</b><input class="submission_12" id="id_childrenFemale" name="" size="20" style="width:35px;" type="text"> </font></td>
					
					<!-- Type of camp -->
					<td colspan="3" id="">Type of camp (1=Regular, 2=Follow-up)  </td> 
					
					<td> <label style="font-family:calibri;font-size:17px;font-weight:bold;"> 1=Regular</label></td>
					
					<!-- Attendance (No. of children -->				
					<td colspan="4" id="ft"><center>Attendance (No. of children)    </center></td>
				</tr>
				
				<!-- Headings for Camp Details -->
				<tr align="center">     
					<td colspan="2" id="">Camp No.  </td>
					<td colspan="2" id="">No. Of Teaching Days</td> 
					<td id="">Start Date</td>  
					<td id="">End Date</td>  
					<td colspan="4" id="">Name of the BRG</td>  
					<td id="">Range (%)</td>  					
					<td colspan="3" id="">No. of children</td>  
				</tr> 
					
				<tr align="center">     
					<td colspan="2" id="ft">Camp1 </td>
					
					<!-- Camp 1 Teaching Days -->
					<td colspan="2" style="" class="c_submission1"><input class="submission_1" id="id_teachingdays_camp1" name="id_teachingdays_camp1" size="20" style="width:50px;" type="text"></td> 
					
					<!--	 Camp 1 Start Date -->
					<td class="c_submission1"><input class="submission_1" type = "text" id = "id_teachingstart_date_camp1" name ="startDateCamp1" style="width:100px;"></td>  
					
					<!--	 Camp 1 End date  -->		
					<td class="c_submission1"><input class="submission_1" type = "text" id = "id_teachingend_date_camp1" name = "endDateCamp1" style="width:100px;"></td>  
					
					<!-- BRG Name will come form databse -->
					<td colspan="4" style="" class="c_submission1">
						<select name="" class="submission_1" id ="id_nameBRGCamp1" Name = "nameBRGCamp1" size="1" style="width:200px;">	
							<option value="">None</option>
							<option value="a0f9000000CCufvAAD"> ............. </option>
						</select>
					</td>
					
					<!--	 Attendance No. of children 0% - 20% -->	
					<td id="">0% - 20%</td>					
					<td class ="er_attend c_submission4" colspan="3"><input class="submission_4" id="id_totalchildren_0to20" name="attendance0to20" size="10" style="width:30px;" type="text"> </td>  
				</tr> 
			   
				<tr align="center">     
					<td colspan="2" id="ft">Camp2 </td>
					
					<!--Camp 2 Teaching days -->
					<td class="c_submission2" colspan="2"> <input class="submission_2" id="id_teachingdays_camp2" name="teachingDaysCamp2" size="20" style="width:50px;" type="text"> </td> 
					
					<!--Camp 2 Teaching Start daate -->			
					<td class="c_submission2"><input class="submission_2" type = "text" id = "id_teachingstart_date_camp2" name ="startDateCamp2" style="width:100px;"></td>  
					
					<!--Camp 2 teaching End date -->	
					<td class="c_submission2"><input class="submission_2" type = "text" id = "id_teachingend_date_camp2" name ="endDateCamp2" style="width:100px;"></td>  
					<td class="c_submission2" colspan="4">
						<select name="nameBRGCamp2" id ="id_nameBRGCamp2" class="submission_2" size="1" style="width:200px;">
							<option value="">None</option>
							<option value="a0f9000000CCufvAAD"> ............. </option>
						</select>
					</td>
					
					<!--Camp 2 Attendance -->
					<td id="">21% - 50%</td> 				
					<td class ="er_attend c_submission4" colspan="3"><input class="submission_4" id="id_totalchildren_21to50" name="attendance21to50" size="10" style="width:30px;" type="text"></td>				 
				</tr> 
				
				<tr align="center">     
					<td colspan="2" id="ft">Camp3 </td>
					
					<!--Camp 3 Teaching days -->
					<td colspan="2" class="c_submission3"><input class="submission_3" id="id_teachingdays_camp3" name="teachingDaysCamp3" size="20" style="width:50px;" type="text"></td>
					
					<!--Camp 3 Teaching Start Date -->				
					<td class="c_submission3"><input class="submission_3" type = "text" id = "id_teachingstart_date_camp3" name = "startDateCamp3" style="width:100px;"> </td>  
					
					<!--Camp 3 Teaching End Date -->				
					<td class="c_submission3"><input class="submission_3" type = "text" id = "id_teachingend_date_camp3" name "endDateCamp3" style="width:100px;"></td>  				
					<td colspan="4" class="c_submission3">
						<select name="nameBRGCamp3" id="id_nameBRGCamp3" class="submission_3" size="1" style="width:200px;">	
							<option value="">None</option>
							<option value="a0f9000000CCufvAAD"> ............. </option>
						</select>	
					</td> 	
					
					<!--Camp 3 Attendance -->
					<td id="">51% - 70%</td>  					 
					<td class ="er_attend c_submission4" colspan="3"><input class="submission_4" id="id_totalchildren_51to70" name="attendance51to70" size="10" style="width:30px;" type="text"></td>  					
				</tr> 
				
			   <tr align="center">     
					<!--Camp 4 Teaching days -->
					<td colspan="2" id="">Camp4 </td>
					<td colspan="2" class="c_submission4"> <input class="submission_4" id="id_teachingdays_camp4" name="teachingDaysCamp4" size="20" style="width:50px;" type="text"></td> 

					<!--Camp 4 Start Date -->
					<td class="c_submission4"><input class="submission_4" type = "text" id = "id_teachingstart_date_camp4" name ="startDateCamp4" style="width:100px;"></td> 
					
					<!--Camp 4 End Date-->
					<td class="c_submission4"><input class="submission_4" type = "text" id = "id_teachingend_date_camp4" name = "endDateCamp4" style="width:100px;"></td> 
					<td colspan="4" class="c_submission4"> <select name="nameBRGCamp4" id = "id_nameBRGCamp4" class="submission_4" size="1" style="width:200px;">
						<option value="">None</option>
						<option value="a0f9000000CCufvAAD"> ............. </option>
					</td>								    
					
					<!--Camp 4 Attendance -->
					<td id="">71% - 100%</td>  				
					<td class ="er_attend c_submission4" colspan="3"><input class="submission_4" id="id_totalchildren_71to100" name="attendance71to100" size="10" style="width:30px;" type="text"></td>
				</tr>
			</table>
			</div>		
				<br> <br>		
				<!-- Table 2 start from here -->		
				<table bgcolor="#F0F0F0" border="0" width="100%"> <tbody>
					<tr>
						<td valign="top" width="40%"><div class="apexp"><div class="individualPalette"><div class="Custom92Block"><div id="" class="bPageBlock brandSecondaryBrd apexDefaultPageBlock secondaryPalette"><div class="pbHeader"><font color="#96763B" face="calibri" size="4.5"><b>TABLE 2: MISC INFORMATION</b></font></div><div class="pbBody">           
							<table bgcolor="#F0F0F0" align="left" id ="id_table2" border="2px" bordercolor="#538467" cellpadding="2" cellspacing="0" id="table2" style="border-collapse:collapse;" width="90%">
								<tbody>
								<tr align="center">
									<td colspan="5" id="ft">Community Engagement Information (to be filled at the end of all camps from the Community Engagement sheet)</td>
								</tr>
								 
								<tr align="center">
									<!--Total no. of community meetings held in the village -->
									<td id="" width="51%">Total no. of community meetings held in the village</td>
									<td colspan="4" id="ft" width="10%" class="c_submission1"><input class="submission_4" id="id_communityMeetings" name="communityMeetings" size="20" style="width:50px;" type="text"></td>	
								</tr>
									
									<!--Camp Number -->
								<tr align="center">
									<td id="ft" width="49%">Camp number</td>
									<td width="10%">1</td>
									<td width="11%">2</td>
									<td width="13%">3</td>
									<td width="10%">4</td>
								</tr>
								
									<!-- Visits -->
								<tr align="center">
									<td align="center" id="ft" width="49%">Number of visits</td>
									<td width="10%" style="" class="c_submission1"><input class="submission_1" id="id_noofvisits_camp1" name="visitNumberCamp1" size="20" style="width:35px;" type="text"></td>
									<td width="11%" class="c_submission2"><input class="submission_2" id="id_noofvisits_camp2" name="visitNumberCamp2" size="20" style="width:35px;" type="text"></td>
									<td width="13%" class="c_submission3"><input class="submission_3" id="id_noofvisits_camp3" name="visitNumberCamp3" size="20" style="width:35px;" type="text"></td>
									<td width="10%" class="c_submission4"><input class="submission_4" id="id_noofvisits_camp4" name="visitNumberCamp4" size="20" style="width:35px;" type="text"></td>
								</tr>
								
								<!-- Family Member Aware of Program -->
								<tr align="center">
									<td id="" width="49%"> No. of family members who were aware of the learning level</td>
									<td width="10%" style="" class="c_submission1"><input class="submission_1" id="id_noofamilymember_camp1" name="familyAwarenessCamp1" size="20" style="width:35px;" type="text"></td>								
									<td width="11%" class="c_submission2"><input class="submission_2" id="id_noofamilymember_camp2" name="familyAwarenessCamp2" size="20" style="width:35px;" type="text"></td>								
									<td width="13%" class="c_submission3"><input class="submission_3" id="id_noofamilymember_camp3" name="familyAwarenessCamp3" size="20" style="width:35px;" type="text"></td>								
									<td width="10%" class="c_submission4"><input class="submission_4" id="id_noofamilymember_camp4" name="familyAwarenessCamp4" size="20" style="width:35px;" type="text"></td>								
								</tr> </tbody>
							</table>
						</td>
				 
					 <!-- Table 3 start from here -->
						<td valign="top" width="40%"><font color="#96763B" face="calibri" size="4.5"><b>TABLE 3: VOLUNTEER/TEACHER INFORMATION</b></font></div><div class="pbBody">
							<table bgcolor="#F0F0F0" class="" id="" align="right" border="2px" bordercolor="#538467" cellpadding="2" cellspacing="0" style="border-collapse:collapse;">
								<!-- Headings of table 3 -->
								<tr align="center">
									<td id="" rowspan="2" width="10%">Volunteer/<br>Teacher number</td>
									<td id="" rowspan="2" width="10%">Type<br> 1-Volunteer<br> 2-Teacher</td>
									<td id="" rowspan="2" width="21%">  Highest Education<br>
										1-Not 10th pass<br>
										2-10th pass<br>
										3-12th pass<br>
										4-Graduate<br>
										5-Post graduate</td>
									<td colspan="4" id="ft" width="26%">Attendance</td>
								</tr>
								
								<tr> 
									<td align="center" id="" width="6%">Camp<br>1</td>
									<td align="center" id="" width="6%">Camp<br>2</td>
									<td align="center" id="" width="6%">Camp<br>3</td>
									<td align="center" id="" width="6%">Camp<br>4</td>
								</tr>
										
								
								<tr>
									<!-- 1st Volunteer -->
									<td align="center" width="3%"><b>V/T 1</b></td>
									<!-- 1st Volunteer Type -->
									<td width="61%" align="center">
										<select id="id_volunteer1_type" name="volunteer1Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select></td>
									
									<!-- 1st Volunteer Highest edu -->									
									<td width="32%" align="center">
										<select id="id_volunteer1_edu" name="volunteer1Education" style="width:120px;">
											<option value="">--None--</option>
											<option value="Not 10th pass">Not 10th pass</option>
											<option value="10th pass">10th pass</option>
											<option value="12th pass">12th pass</option>
											<option value="Graduate">Graduate</option>
											<option value="Post graduate">Post graduate</option>
										</select>
									</td>
							
									<!-- 1st Volunteer Attendance for all 4 camps -->	
									<td width="32%" style="" class="c_submission1"><input class="submission_1" id="id_volunteer1_attendance_camp1" name="volunteer1AttendanceCamp1" size="20" style="width:35px;" type="text"> </td>									
									<td width="32%" class="c_submission2"><input class="submission_2" id="id_volunteer1_attendance_camp2" name="volunteer1AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									</td>
									<td width="32%" class="c_submission3"><input class="submission_3" id="id_volunteer1_attendance_camp3" name="volunteer1AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									</td>
									<td width="32%" class="c_submission4"><input class="submission_4" id="id_volunteer1_attendance_camp4" name="volunteer1AttendanceCamp4" size="20" style="width:35px;" type="text"></td>									</td>
								</tr>
								
								<tr>
									<!-- 2nd Volunteer -->
									<td align="center" width="3%"><b>V/T 2</b></td>
									
									<!-- 2nd Volunteer Type -->
									<td width="61%" align="center">
										<select id="id_volunteer2_type" name="volunteer2Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select>
									</td>
									
									<!-- 2nd Volunteer Highest edu -->
									<td width="32%" align="center">
										<select id="id_volunteer2_edu" name="volunteer2Education" style="width:120px;">
											<option value="">--None--</option>
											<option value="Not 10th pass">Not 10th pass</option>
											<option value="10th pass">10th pass</option>
											<option value="12th pass">12th pass</option>
											<option value="Graduate">Graduate</option>
											<option value="Post graduate">Post graduate</option>
										</select>
									</td>
									<!-- 2nd Volunteer Attendance for all 4 camps -->
									<td width="32%" style="" class="c_submission1"><input class="submission_1" id="id_volunteer2_attendance_camp1" name="volunteer2AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission2"><input class="submission_2" id="id_volunteer2_attendance_camp2" name="volunteer2AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission3"><input class="submission_3" id="id_volunteer2_attendance_camp3" name="volunteer2AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission4"><input class="submission_4" id="id_volunteer2_attendance_camp4" name="volunteer2AttendanceCamp4" size="20" style="width:35px;" type="text"></td>									
								</tr>
								
								<tr>
									<!-- 3rd Volunteer -->
									<td align="center" width="3%"><b>V/T 3</b></td>
									
									<!-- 3rd Volunteer Type -->
									<td width="61%" align="center">
										<select id="id_volunteer3_type" name="" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select>
									</td>
									
									<!-- 3rd Volunteer Highest edu -->
									<td width="32%" align="center">
										<select id="id_volunteer3_edu" name="volunteer3Type" style="width:120px;">
											<option value="">--None--</option>
											<option value="Not 10th pass">Not 10th pass</option>
											<option value="10th pass">10th pass</option>
											<option value="12th pass">12th pass</option>
											<option value="Graduate">Graduate</option>
											<option value="Post graduate">Post graduate</option>
										</select>
									</td>
									
									<!-- 3rd Volunteer Attendance for all 4 camps -->
									<td width="32%" style="" class="c_submission1"><input class="submission_1" id="id_volunteer3_attendance_camp1" name="volunteer3Education" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission2"><input class="submission_2" id="id_volunteer3_attendance_camp2" name="volunteer3AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									</td>
									<td width="32%" class="c_submission3"><input class="submission_3" id="id_volunteer3_attendance_camp3" name="volunteer3AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									</td>
									<td width="32%" class="c_submission4"><input class="submission_4" id="id_volunteer3_attendance_camp4" name="volunteer3AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									</td>
								</tr>
								
								<tr>
									<!-- 4th Volunteer -->
									<td align="center" width="3%"><b>V/T 4</b></td>
									
									<!-- 4th Volunteer Type -->
									<td width="61%" align="center">
										<select id="id_volunteer4_type" name="volunteer4Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select></td>
										
									<!-- 4th Volunteer Highest edu -->			
									<td width="32%" align="center">
										<select id="id_volunteer4_edu" name="volunteer4Education" style="width:120px;">
											<option value="">--None--</option>
											<option value="Not 10th pass">Not 10th pass</option>
											<option value="10th pass">10th pass</option>
											<option value="12th pass">12th pass</option>
											<option value="Graduate">Graduate</option>
											<option value="Post graduate">Post graduate</option>
										</select>
									</td>
									
									<!-- 4th Volunteer Attendance for all 4 camps -->
									<td width="32%" style="" class="c_submission1"><input class="submission_1" id="id_volunteer4_attendance_camp1" name="volunteer4AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission2"><input class="submission_2" id="id_volunteer4_attendance_camp2" name="volunteer4AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission3"><input class="submission_3" id="id_volunteer4_attendance_camp3" name="volunteer4AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission4"><input class="submission_4" id="id_volunteer4_attendance_camp4" name="volunteer4AttendanceCamp4" size="20" style="width:35px;" type="text"></td>									
								</tr>							

								<tr>
									<!-- 5th Volunteer -->
									<td align="center" width="3%"><b>V/T 5</b></td>
									
									<!-- 5th Volunteer Type -->
									<td width="61%" align="center">
										<select id="id_volunteer5_type" name="volunteer5Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select>
									</td>

									<!-- 5th Volunteer Highest edu -->
									<td width="32%" align="center">
										<select id="id_volunteer5_edu" name="volunteer5Education" style="width:120px;">
											<option value="">--None--</option>
											<option value="Not 10th pass">Not 10th pass</option>
											<option value="10th pass">10th pass</option>
											<option value="12th pass">12th pass</option>
											<option value="Graduate">Graduate</option>
											<option value="Post graduate">Post graduate</option>
										</select>
									</td>
									
									<!-- 5th Volunteer Attendance for all 4 camps -->
									<td width="32%" style="" class="c_submission1"><input class="submission_1" id="id_volunteer5_attendance_camp1" name="volunteer5AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission2"><input class="submission_2" id="id_volunteer5_attendance_camp2" name="volunteer5AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission3"><input class="submission_3" id="id_volunteer5_attendance_camp3" name="volunteer5AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission4"><input class="submission_4" id="id_volunteer5_attendance_camp4" name="volunteer5AttendanceCamp4" size="20" style="width:35px;" type="text"></td>									
								</tr>							

								<tr>
									<!-- 6th Volunteer -->
									<td align="center" width="3%"><b>V/T 6</b></td>
									
									<!-- 6th Volunteer Type -->
									<td width="61%" align="center">
										<select id="id_volunteer6_type" name="volunteer6Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select>
									</td>
									
									<!-- 6th Volunteer Highest edu -->			
									<td width="32%" align="center">
										<select id="id_volunteer6_edu" name="volunteer6Education" style="width:120px;">
											<option value="">--None--</option>
											<option value="Not 10th pass">Not 10th pass</option>
											<option value="10th pass">10th pass</option>
											<option value="12th pass">12th pass</option>
											<option value="Graduate">Graduate</option>
											<option value="Post graduate">Post graduate</option>
										</select>
									</td>
									
									<!-- 6th Volunteer Attendance for all 4 camps -->	
									<td width="32%" style="" class="c_submission1"><input class="submission_1" id="id_volunteer6_attendance_camp1" name="volunteer6AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission2"><input class="submission_2" id="id_volunteer6_attendance_camp2" name="volunteer6AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission3"><input class="submission_3" id="id_volunteer6_attendance_camp3" name="volunteer6AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission4"><input class="submission_4" id="id_volunteer6_attendance_camp4" name="volunteer6AttendanceCamp4" size="20" style="width:35px;" type="text"></td>									
								</tr>
								
								<tr>
									<!-- 7th Volunteer -->
									<td align="center" width="3%"><b>V/T 7</b></td>
									
									<!-- 7th Volunteer Type -->
									<td width="61%" align="center">
										<select id="id_volunteer7_type" name="volunteer7Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select>
									</td>
									
									<!-- 7th Volunteer Highest edu -->	
									<td width="32%" align="center">
										<select id="id_volunteer7_edu" name="volunteer7Education" style="width:120px;">
											<option value="">--None--</option>
											<option value="Not 10th pass">Not 10th pass</option>
											<option value="10th pass">10th pass</option>
											<option value="12th pass">12th pass</option>
											<option value="Graduate">Graduate</option>
											<option value="Post graduate">Post graduate</option>
										</select>
									</td>
									
									<!-- 7th Volunteer Attendance for all 4 camps -->	
									<td width="32%" style="" class="c_submission1"><input class="submission_1" id="id_volunteer7_attendance_camp1" name="volunteer7AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission2"><input class="submission_2" id="id_volunteer7_attendance_camp2" name="volunteer7AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission3"><input class="submission_3" id="id_volunteer7_attendance_camp3" name="volunteer7AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission4"><input class="submission_4" id="id_volunteer7_attendance_camp4" name="volunteer7AttendanceCamp4" size="20" style="width:35px;" type="text"></td>									
								</tr>
								
								<tr>
								
									<!-- 8th Volunteer -->
									<td align="center" width="3%"><b>V/T 8</b></td>
									
									<!-- 8th Volunteer Type -->
									<td width="61%" align="center">
										<select id="id_volunteer8_type" name="volunteer8Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select>
									</td>
									
									<!-- 8th Volunteer Highest edu -->	
									<td width="32%" align="center">
										<select id="id_volunteer8_edu" name="volunteer8Education" style="width:120px;">
											<option value="">--None--</option>
											<option value="Not 10th pass">Not 10th pass</option>
											<option value="10th pass">10th pass</option>
											<option value="12th pass">12th pass</option>
											<option value="Graduate">Graduate</option>
											<option value="Post graduate">Post graduate</option>
										</select>
									</td>
									
									<!-- 8th Volunteer Attendance for all 4 camps -->
									<td width="32%" style="" class="c_submission1"><input class="submission_1" id="id_volunteer8_attendance_camp1" name="volunteer8AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission2"><input class="submission_2" id="id_volunteer8_attendance_camp2" name="volunteer8AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission3"><input class="submission_3" id="id_volunteer8_attendance_camp3" name="volunteer8AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission4"><input class="submission_4" id="id_volunteer8_attendance_camp4" name="volunteer8AttendanceCamp4" size="20" style="width:35px;" type="text"></td>									
								</tr>
								
								<tr>
									<!-- 9th Volunteer -->
									<td align="center" width="3%"><b>V/T 9</b></td>
									
									<!-- 9th Volunteer Type -->
									<td width="61%" align="center">
										<select id="id_volunteer9_type" name="volunteer9Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select>
									</td>
									
									<!-- 9th Volunteer Highest edu -->
									<td width="32%" align="center">
										<select id="id_volunteer9_edu" name="volunteer9Education" style="width:120px;">
											<option value="">--None--</option>
											<option value="Not 10th pass">Not 10th pass</option>
											<option value="10th pass">10th pass</option>
											<option value="12th pass">12th pass</option>
											<option value="Graduate">Graduate</option>
											<option value="Post graduate">Post graduate</option>
										</select>
									</td>
									
									<!-- 9th Volunteer Attendance for all 4 camps -->	
									<td width="32%" style="" class="c_submission1"><input class="submission_1" id="id_volunteer9_attendance_camp1" name="volunteer9AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission2"><input class="submission_2" id="id_volunteer9_attendance_camp2" name="volunteer9AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission3"><input class="submission_3" id="id_volunteer9_attendance_camp3" name="volunteer9AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission4"><input class="submission_4" id="id_volunteer9_attendance_camp4" name="volunteer9AttendanceCamp4" size="20" style="width:35px;" type="text"></td>								
								</tr>
								
								<tr>
									<!-- 10th Volunteer -->
									<td align="center" width="3%"><b>V/T 10</b></td>
									
									<!-- 10th Volunteer Type -->
									<td width="61%" align="center">
										<select id="id_volunteer10_type" name="volunteer10Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select>
									</td>
									
									<!-- 10th Volunteer Highest edu -->			
									<td width="32%" align="center">
										<select id="id_volunteer10_edu" name="volunteer10Education" style="width:120px;">
											<option value="">--None--</option>
											<option value="Not 10th pass">Not 10th pass</option>
											<option value="10th pass">10th pass</option>
											<option value="12th pass">12th pass</option>
											<option value="Graduate">Graduate</option>
											<option value="Post graduate">Post graduate</option>
										</select>
									</td>
									
									<!-- 10th Volunteer Attendance for all 4 camps -->
									<td width="32%" style="" class="c_submission1"><input class="submission_1" id="id_volunteer10_attendance_camp1" name="volunteer10AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission2"><input class="submission_2" id="id_volunteer10_attendance_camp2" name="volunteer10AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission3"><input class="submission_3" id="id_volunteer10_attendance_camp3" name="volunteer10AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									
									<td width="32%" class="c_submission4"><input class="submission_4" id="id_volunteer10_attendance_camp4" name="volunteer10AttendanceCamp4" size="20" style="width:35px;" type="text"></td>									
								</tr>						 	
							</table>		
						</td>							  	
					</tr>	   
				</table>	 				

				<!--    Table 4 Start from here ---->
				<br><br>
				<font color="#96763B" face="calibri" size="4.5"><b>TABLE 4: BASELINE ASSESSMENT (To be filled from "UNIVERSAL CHILD LIST")</b></font>
				<table bgcolor="#F0F0F0" border="2px" id ="id_table4" bordercolor="#538467" cellpadding="2" cellspacing="0" style="border-collapse:collapse;" width="100%">   
					<tbody>
					<! -- Table 4 Headings -->
					<tr align="center">
						<td colspan="2" id="ft" rowspan="2" width="16%">Report Section1</td>
						<td id="ft" rowspan="2" width="9%">Enrolled</td>
						<td id="ft" rowspan="2" width="6%">Tested</td>
						<td colspan="5" id="ft" width="19%">Reading </td>
						<td colspan="4" id="ft" width="18%">Number Recognition</td>
						<td id="ft" rowspan="2" width="19%">Instructions</td>
					</tr>
					
					<tr align="center">
						<td id="ft" width="4%">Beginner</td>
						<td id="ft" width="4%">Letter</td>
						<td id="ft" width="4%">Word</td>
						<td id="ft" width="3%">Para</td>
						<td id="ft" width="3%">Story</td>
						<td id="ft" width="4%">Beginner</td>
						<td id="ft" width="4%">0-9</td>
						<td id="ft" width="5%">10-99</td>
						<td id="ft" width="5%">100-999</td>
					</tr>
					
					<! --  Table 4 - for STD 3  -->
					<tr align="center">
						<td colspan="2" height="26" id="ft" width="8%">Std. 3</td>
						<!--  Table 4 - for STD 3 - Enrollment -->
						<td class="c_submission1" height="26" width="9%" style=""><input class="submission_1 Enrolled" id="id_std3_enroll" name="std3Enrolled" size="10" style="width:20px;" type="text">  </td>
						
						<!--  Table 4 - for STD 3 - Tested -->
						<td class="c_submission1" height="26" width="6%" style=""><input class="submission_1 Tested" id="id_std3_tested" name="std3Tested" size="10" style="width:20px;" type="text"></td>
						
						<!--  Table 4 - for STD 3 - Reading - Beg  -->
						<td class="c_submission1" height="26" width="4%" style=""><input class="submission_1 ReadingBG" id="id_std3_reading_beg" name="std3ReadingBG" size="10" style="width:20px;" type="text"> </td>
						
						<!--  Table 4 - for STD 3 - Reading - Letter -->
						<td class="c_submission1" height="26" width="4%" style=""><input class="submission_1 ReadingLT" id="id_std3_reading_letter" name="std3ReadingLT" size="10" style="width:20px;" type="text"> </td>
						
						<!--  Table 4 - for STD 3 - Reading - Word -->
						<td class="c_submission1" height="26" width="4%" style=""><input class="submission_1 ReadingWD" id="id_std3_reading_word" name="std3ReadingWD" size="10" style="width:20px;" type="text"> </td>
						
						<!--  Table 4 - for STD 3 - Reading - Para -->
						<td class="c_submission1" height="26" width="3%" style=""><input class="submission_1 ReadingPR" id="id_std3_reading_para" name="std3ReadingPR" size="10" style="width:20px;" type="text"></td>					
						
						<!--  Table 4 - for STD 3 - Reading - Story -->
						<td class="c_submission1" height="26" width="3%" style=""><input class="submission_1 ReadingSY" id="id_std3_reading_story" name="std3ReadingSY" size="10" style="width:20px;" type="text"></td>
						
						<!--  Table 4 - for STD 3 - Number - Beg -->
						<td class="c_submission1" height="26" width="4%" style=""><input class="submission_1 NumberBG" id="id_std3_number_beg" name="std3NumberBG" size="10" style="width:20px;" type="text">  </td>
						
						<!--  Table 4 - for STD 3 - Number - 0to9 -->
						<td class="c_submission1" height="26" width="4%" style=""><input class="submission_1 Number1Digit" id="id_std3_number_09" name="std3Number1Digit" size="10" style="width:20px;" type="text"> </td>
						
						<!--  Table 4 - for STD 3 - Number - 10to99 -->
						<td class="c_submission1" height="26" width="5%" style=""><input class="submission_1 Number2Digits" id="id_std3_number_1099" name="std3Number2Digits" size="10" style="width:20px;" type="text"> </td>
						
						<!--  Table 4 - for STD 3 - Number - 100to999 -->
						<td class="c_submission1" height="26" width="5%" style=""><input class="submission_1 Number3Digits" id="id_std3_number_100999" name="std3Number3Digits" size="10" style="width:20px;" type="text"> </td>
						
						
						<td class="c_submission1" height="26" id="ft" width="19%">Update from Std 3 Universal Child List</td>
					</tr>
				
					<tr align="center">
					  <! --  Table 4 - for STD 4  -->
					  <td colspan="2" id="ft" width="16%"> Std. 4 </td>				  
					  <!--  Table 4 - for STD 4 - Enrollment -->
					  <td class="c_submission1" width="9%" style=""><input class="submission_1 Enrolled" id="id_std4_enrolled" name="std4Enrolled" size="10" style="width:20px;" type="text">  </td>
					  
					  <!--  Table 4 - for STD 4 - Tested -->
					  <td class="c_submission1" width="6%" style=""><input class="submission_1 Tested" id="id_std4_tested" name="std4Tested" size="10" style="width:20px;" type="text">  </td>
					  
					  <!--  Table 4 - for STD 4 - Reading - Beg  -->
					  <td class="c_submission1" style=""><input class="submission_1 ReadingBG" id="id_std4_reading_beg" name="std4ReadingBG" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  Table 4 - for STD 4 - Reading - Letter -->
					  <td class="c_submission1" width="4%" style=""><input class="submission_1 ReadingLT" id="id_std4_reading_letter" name="std4ReadingLT" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  Table 4 - for STD 4 - Reading - Word -->
					  <td class="c_submission1" width="4%" style=""><input class="submission_1 ReadingWD" id="id_std4_reading_word" name="std4ReadingWD" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  Table 4 - for STD 4 - Reading - Para -->
					  <td class="c_submission1" width="3%" style=""><input class="submission_1 ReadingPR" id="id_std4_reading_para" name="std4ReadingPR" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 4 - Reading - Story -->
					  <td class="c_submission1" width="3%" style=""><input class="submission_1 ReadingSY" id="id_std4_reading_story" name="std4ReadingSY" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 4 - Number - Beg -->
					  <td class="c_submission1" width="4%" style=""><input class="submission_1 NumberBG" id="id_std4_number_beg" name="std4NumberBG" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 4 - Number - 0to9 -->
					  <td class="c_submission1" width="4%" style=""><input class="submission_1 Number1Digit" id="id_std4_number_09" name="std4Number1Digit" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 4 - Number - 10to99 -->
					  <td class="c_submission1" width="5%" style=""><input class="submission_1 Number2Digits" id="id_std4_number_1099" name="std4Number2Digits" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 4 - Number - 100to999 -->
					  <td class="c_submission1" width="5%" style=""><input class="submission_1 Number3Digits" id="id_std4_number_100999" name="std4Number3Digits" size="10" style="width:20px;" type="text"></td>
					  
					  
					  <td class="c_submission1" id="ft" width="19%">Update from Std 4 Universal Child List  </td>
					 
					</tr>
					
					<tr align="center">
					
					  <! --  Table 4 - for STD 5  -->
					  <td class="c_submission1" colspan="2" id="ft" width="16%"> Std. 5 </td>				  
					 
					  <!--  Table 4 - for STD 5 - Enrollment -->
					  <td class="c_submission1" width="9%" style=""><input class="submission_1 Enrolled" id="id_std5_enrolled" name="std5Enrolled" size="10" style="width:20px;" type="text">  </td>
					  
					  <!--  Table 4 - for STD 5 - Tested -->
					  <td class="c_submission1" width="6%" style=""><input class="submission_1 Tested" id="id_std5_tested" name="std5Tested" size="10" style="width:20px;" type="text">  </td>
					  
					  <!--  Table 4 - for STD 5 - Reading - Beg  -->
					  <td class="c_submission1" style=""><input class="submission_1 ReadingBG" id="id_std5_reading_beg" name="std5ReadingBG" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  Table 4 - for STD 5 - Reading - Letter -->
					  <td class="c_submission1" width="4%" style=""><input class="submission_1 ReadingLT"  id="id_std5_reading_letter" name="std5ReadingLT" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  Table 4 - for STD 5 - Reading - Word -->
					  <td class="c_submission1" width="4%" style=""><input class="submission_1 ReadingWD" id="id_std5_reading_word" name="std5ReadingWD" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  Table 4 - for STD 5 - Reading - Para -->
					  <td class="c_submission1" width="3%" style=""><input class="submission_1 ReadingPR" id="id_std5_reading_para" name="std5ReadingPR" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 5 - Reading - Story -->
					  <td class="c_submission1" width="3%" style=""><input class="submission_1 ReadingSY" id="id_std5_reading_story" name="std5ReadingSY" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 5 - Number - Beg -->
					  <td class="c_submission1" width="4%" style=""><input class="submission_1 NumberBG" id="id_std5_number_beg" name="std5NumberBG" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 5 - Number - 0to9 -->
					  <td class="c_submission1" width="4%" style=""><input class="submission_1 Number1Digit" id="id_std5_number_09" name="std5Number1Digit" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 5 - Number - 10to99 -->
					  <td class="c_submission1" width="5%" style=""><input class="submission_1 Number2Digits" id="id_std5_number_1099" name="std5Number2Digits" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 5 - Number - 100to999 -->
					  <td class="c_submission1" width="5%" style=""><input class="submission_1 Number3Digits" id="id_std5_number_100999" name="std5Number3Digits" size="10" style="width:20px;" type="text"></td>
					  
					  <td id="ft" width="19%">Update from Std 4 Universal Child List  </td>
					 
					</tr>

					<tr align="center">
					  <!--  Table 4 - for FIRST BASELINE  -->
					  <td id="ft" rowspan="4">BaseLine <br>Totals</td>
					  <td id="ft" width="16%">First Baseline<br>Before Endline 1</td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Enrollment -->
					  <td id="ft1" width="9%"><label style="width:20px;" id ="id_first_baseline_endline1_enrolled" name = "firstBLBeforeEL1ReadingBG" >0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Tested -->
					  <td id="ft1" width="6%"><label style="width:20px;" id ="id_first_baseline_endline1_tested" >0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Reading - Beg  -->
					  <td id="ft1" width="4%"><label style="width:20px;" id = "id_first_baseline_endline1_reading_beg">0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Reading - Letter -->
					  <td id="ft1" width="4%"><label style="width:20px;" id = "id_first_baseline_endline1_reading_letter" >0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Reading - Word -->
					  <td id="ft1" width="4%"><label style="width:20px;" id = "id_first_baseline_endline1_reading_word" >0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Reading - Para -->
					  <td id="ft1" width="3%"><label style="width:20px;" id = "id_first_baseline_endline1_reading_para" >0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Reading - Story -->
					  <td id="ft1" width="3%"><label style="width:20px;" id = "id_first_baseline_endline1_reading_story">0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Number - Beg -->
					  <td id="ft1" width="4%"><label style="width:20px;" id = "id_first_baseline_endline1_number_beg" >0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Number - 0to9 -->
					  <td id="ft1" width="4%"><label style="width:20px;" id = "id_first_baseline_endline1_number_09" >0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Number - 10to99 -->
					  <td id="ft1" width="5%"><label style="width:20px;" id = "id_first_baseline_endline1_number_1099">0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Number - 100to999 -->
					  <td id="ft1" width="5%"><label style="width:20px;" id = "id_first_baseline_endline1_number_100999">0</label></td>
					  <td id="ft" width="22%">Add data for all the classes in this box</td>
					</tr>

					<tr align="center">
					  <! --  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2  -->
					  <td id="ft" width="8%">Additional children<br>Before Endline 2</td>
					  <td id="ft" width="9%">NA</td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Tested -->
					  <td class="c_submission2" width="6%"><input class="submission_1" id="id_additional_before_endline2_tested" name="additionalChildBeforeEL2Tested" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Reading - Beg  -->
					  <td class="c_submission2" class="c_submission2" width="4%"><input class="submission_1" id="id_additional_before_endline2_reading_beg" name="additionalChildBeforeEL2ReadingBG" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Reading - Letter -->
					  <td class="c_submission2" width="4%"><input class="submission_1" id="id_additional_before_endline2_reading_letter" name="additionalChildBeforeEL2ReadingLT" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Reading - Word -->
					  <td class="c_submission2" width="4%"><input class="submission_1" id="id_additional_before_endline2_reading_word" name="additionalChildBeforeEL2ReadingWD" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Reading - Para -->
					  <td class="c_submission2" width="3%"><input class="submission_1" id="id_additional_before_endline2_reading_para" name="additionalChildBeforeEL2ReadingPR" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Reading - Story -->
					  <td class="c_submission2" width="3%"><input class="submission_1" id="id_additional_before_endline2_reading_story" name="additionalChildBeforeEL2ReadingSY" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Number - Beg -->
					  <td class="c_submission2" width="4%"><input class="submission_1" id="id_additional_before_endline2_number_beg" name="additionalChildBeforeEL2NumberBG" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Number - 0to9 -->
					  <td class="c_submission2" width="4%"><input class="submission_1" id="id_additional_before_endline2_number_09" name="additionalChildBeforeEL2Number1Digit" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Number - 10to99 -->
					  <td class="c_submission2" width="5%"><input class="submission_1" id="id_additional_before_endline2_number_1099" name="additionalChildBeforeEL2Number2Digits" size="10" style="width:20px;" type="text"></td>					
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Number - 100to999 -->
					  <td class="c_submission2" width="5%"><input class="submission_1" id="id_additional_before_endline2_number_100999" name="additionalChildBeforeEL2Number3Digits" size="10" style="width:20px;" type="text"></td>					
					  <td id="ft" width="22%">Update from Universal Child Sheet for each class and add all three classes</td>
					</tr>

					<tr align="center">
					  <! --  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3  -->
					  <td id="ft" width="8%"> Additional children<br>Before Endline 3</td>
					  <td id="ft" width="9%">  NA</td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Tested -->
					  <td class="c_submission3" width="6%"><input class="submission_1" id="id_additional_before_endline3_tested" name="additionalChildBeforeEL3Tested" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Beg  -->
					  <td class="c_submission3" width="4%"><input class="submission_1" id="id_additional_before_endline3_reading_beg" name="additionalChildBeforeEL3ReadingBG" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Letter -->
					  <td class="c_submission3" width="4%"><input class="submission_1" id="id_additional_before_endline3_reading_letter" name="additionalChildBeforeEL3ReadingLT" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Word -->
					  <td class="c_submission3" width="4%"><input class="submission_1" id="id_additional_before_endline3_reading_word" name="additionalChildBeforeEL3ReadingWD" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Para -->
					  <td class="c_submission3" width="3%"><input class="submission_1" id="id_additional_before_endline3_reading_para" name="additionalChildBeforeEL3ReadingPR" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Story -->
					  <td class="c_submission3" width="3%"><input class="submission_1" id="id_additional_before_endline3_reading_story" name="additionalChildBeforeEL3ReadingSY" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Number - Beg -->
					  <td class="c_submission3" width="4%"><input class="submission_1" id="id_additional_before_endline3_number_beg" name="additionalChildBeforeEL3NumberBG" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Number - 0to9 -->
					  <td class="c_submission3" width="4%"><input class="submission_1" id="id_additional_before_endline3_number_09" name="additionalChildBeforeEL3Number1Digit" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Number - 10to99 -->
					  <td class="c_submission3" width="5%"><input class="submission_1" id="id_additional_before_endline3_number_1099" name="additionalChildBeforeEL3Number2Digits" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Number - 100to999 -->
					  <td class="c_submission3" width="5%"><input class="submission_1" id="id_additional_before_endline3_number_100999" name="additionalChildBeforeEL3Number3Digits" size="10" style="width:20px;" type="text"></td>
					  <td id="ft" width="22%">Update from Universal Child Sheet for each class and add all three classes</td>
					</tr>

					  
				   <tr align="center">
					   <! --  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3  -->
					   <td id="ft" width="8%">Additional children<br>Before Endline 4</td>
					   <td id="ft" width="9%">NA</td>
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Tested -->
					   <td class="c_submission4" width="6%"><input class="submission_1" id="id_additional_before_endline4_tested" name="additionalChildBeforeEL4Tested" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Beg  -->
					   <td class="c_submission4" width="4%"><input class="submission_1" id="id_additional_before_endline4_reading_beg" name="additionalChildBeforeEL4ReadingBG" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Letter -->
					   <td class="c_submission4" width="4%"><input class="submission_1" id="id_additional_before_endline4_reading_letter" name="additionalChildBeforeEL4ReadingLT" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Word -->
					   <td class="c_submission4" width="4%"><input class="submission_1" id="id_additional_before_endline4_reading_word" name="additionalChildBeforeEL4ReadingWD" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Para -->
					   <td class="c_submission4" width="3%"><input class="submission_1" id="id_additional_before_endline4_reading_para" name="additionalChildBeforeEL4ReadingPR" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Story -->
					   <td class="c_submission4" width="3%"><input class="submission_1" id="id_additional_before_endline4_reading_story" name="additionalChildBeforeEL4ReadingSY" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Number - Beg -->
					   <td class="c_submission4" width="4%"><input class="submission_1" id="id_additional_before_endline4_number_beg" name="additionalChildBeforeEL4NumberBG" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Number - 0to9 -->
					   <td class="c_submission4" width="4%"><input class="submission_1" id="id_additional_before_endline4_number_09" name="additionalChildBeforeEL4Number1Digit" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Number - 10to99 -->
					   <td class="c_submission4" width="5%"><input class="submission_1" id="id_additional_before_endline4_number_1099" name="additionalChildBeforeEL4Number2Digits" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Number - 100to999 -->
					   <td class="c_submission4" width="5%"><input class="submission_1" id="id_additional_before_endline4_number_100999" name="additionalChildBeforeEL4Number3Digits" size="10" style="width:20px;" type="text"></td>
					   <td id="ft" width="25%">Update from Universal Child Sheet for each class and add all three classes</td>
					</tr>

					<tr align="center">
					   <! --  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4  -->
					   <td colspan="2" height="41" id="ft" width="17%">CONSOLIDATED BASELINE</td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Enrolled -->
					   <td height="41" id="ft1" width="6%"><label id = "id_consolidate_baseline_enroll" style="width:20px;">0</label></td>				   
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Tested -->
					   <td height="41" id="ft1" width="6%"><label id = "id_consolidate_baseline_tested" style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Reading - Beg  -->
					   <td height="41" id="ft1" width="4%"><label id = "id_consolidate_baseline_reading_beg" style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Reading - Letter -->
					   <td height="41" id="ft1" width="4%"><label id = "id_consolidate_baseline_reading_letter" style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Reading - Word -->
					   <td height="41" id="ft1" width="4%"><label id = "id_consolidate_baseline_reading_word" style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Reading - Para -->
					   <td height="41" id="ft1" width="3%"><label id = "id_consolidate_baseline_reading_para" style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Reading - Story -->
					   <td height="41" id="ft1" width="3%"><label id = "id_consolidate_baseline_reading_story" style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Number - Beg -->
					   <td height="41" id="ft1" width="4%"><label id = "id_consolidate_baseline_number_beg" style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Number - 0to9 -->
					   <td height="41" id="ft1" width="4%"><label id = "id_consolidate_baseline_number_09" style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Number - 10to99 -->
					   <td height="41" id="ft1" width="5%"><label style="width:20px;" id = "id_consolidate_baseline_number_1099">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Number - 100to999 -->
					   <td height="41" id="ft1" width="5%"><label style="width:20px;" id = "id_consolidate_baseline_number_100999">0</label></td>
					   
					   

					   <td height="41" id="ft" width="30%">Add data for all the four baseline totals</td>
					</tr>
						
					<tr>
						<td colspan="16" id="ft_note">*Consolidated baseline will only be calculated after 4 Camps are over in this Schlool/village.</td>
					</tr>

					</tbody>
				</table>
				
				<br><br>
				
				<!-- Table 5 start from here -->			
				<font color="#96763B" face="calibri" size="4.5"><b>TABLE 5: ENDLINE ASSESSMENT ( To be filled form "LEARNING CAMP PROGRESS SHEETS")</b></font>
				<table bgcolor="#F0F0F0" border="2px" id ="id_table5" bordercolor="#538467" cellpadding="2" cellspacing="0" style="border-collapse:collapse;" width="100%">   
					<tbody>
					<! --  TABLE 5 - FOR SELECTED CHILDREN BASELINE  -->
					<tr align="center">
					  <td id="ft" rowspan="3" width="11%">Endline</td>
					  <td id="ft" rowspan="3" width="9%">Total Tested <br>(Std 3 + 4 + 5)</td>
					  <td colspan="5" id="ft" width="21%">Reading </td>
					  <td colspan="4" id="ft" width="20%">Number Recognition</td>
					  <td colspan="8" id="ft" width="36%">Operations</td>
				   </tr>
				   
				   <tr align="center">
					  <td id="ft" rowspan="2" width="5%">Beginner</td>
					  <td id="ft" rowspan="2" width="4%">Letter</td>
					  <td id="ft" rowspan="2" width="4%">Word</td>
					  <td id="ft" rowspan="2" width="3%">Para</td>
					  <td id="ft" rowspan="2" width="4%">Story</td>
					  <td id="ft" rowspan="2" width="6%">Beginner</td>
					  <td id="ft" rowspan="2" width="4%">0-9</td>
					  <td id="ft" rowspan="2" width="4%">10-99</td>
					  <td id="ft" rowspan="2" width="5%">100-999</td>
					  <td colspan="2" id="ft" width="10%">Add</td>
					  <td colspan="2" id="ft" width="9%">Sub</td>
					  <td colspan="2" id="ft" width="9%">Mul</td>
					  <td colspan="2" id="ft" width="8%">Div</td>
				   </tr>

					<tr align="center">
					  <td id="ft" width="5%">Can</td>
					  <td id="ft" width="5%">Cannot</td>
					  <td id="ft" width="4%">Can</td>
					  <td id="ft" width="4%">Cannot</td>
					  <td id="ft" width="4%">Can</td>
					  <td id="ft" width="4%">Cannot</td>
					  <td id="ft" width="4%">Can</td>
					  <td id="ft" width="3%">Cannot</td>
					</tr>
					
					
					<tr align="center">
					   <! --  TABLE 5 - FOR SELECTED CHILDREN BASELINE  -->
					   <td id="ft" width="11%">Selected Children Baseline<br>(before endline 1)</td>
					   
					   <!--  TABLE 5 - FOR SELECTED CHILDREN BASELINE – TOTAL TESTED -->
					   <td class="c_submission1" width="9%" style=""><input class="submission_1" id="id_totaltested_total_tested" name="ELAssTested" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- READING - BEG  -->
					   <td class="c_submission1" width="5%" style=""><input class="submission_1" id="id_totaltested_reading_beg" name="ELAssReadingBG" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- READING - LETTER -->
					   <td class="c_submission1" width="4%" style=""><input class="submission_1" id="id_totaltested_reading_letter" name="ELAssReadingLT" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- READING - WORD -->
					   <td class="c_submission1" width="4%" style=""><input class="submission_1" id="id_totaltested_reading_word" name="ELAssReadingWD" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- READING - PARA -->
					   <td class="c_submission1" width="3%" style=""><input class="submission_1" id="id_totaltested_reading_para" name="ELAssReadingPR" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- READING - STORY -->
					   <td class="c_submission1" width="4%" style=""><input class="submission_1" id="id_totaltested_reading_story" name="ELAssReadingSY" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- NUMBER - BEG -->
					   <td class="c_submission1" width="6%" style=""><input class="submission_1" id="id_totaltested_number_beg" name="ELAssNumberBG" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- NUMBER - 0TO9 -->
					   <td class="c_submission1" width="4%" style=""><input class="submission_1" id="id_totaltested_number_09" name="ELAssNumber1Digit" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- NUMBER - 10TO99 -->
					   <td class="c_submission1" width="4%" style=""><input class="submission_1" id="id_totaltested_number_1099" name="ELAssNumber2Digits" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- NUMBER - 100TO999 -->
					   <td class="c_submission1" width="5%" style=""><input class="submission_1" id="id_totaltested_number_100999" name="ELAssNumber3Digits" size="10" style="width:20px;" type="text"></td>
					   <td colspan="8" width="5%"></td>
				   </tr>
				   
					<tr align="center">
					   <! --  TABLE 5 - LC1  -->
					   <td id="ft" width="11%">LC 1 Endline</td>
					   <!--  TABLE 5 - LC1 – TOTAL TESTED -->
					   <td class="c_submission1" width="9%" style=""><input class="submission_1" id="id_lc1_endline_totaltested" name="ELAssLC1Tested" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - LC1- READING - BEG  -->
					   <td class="c_submission1" width="5%" style=""><input class="submission_1" id="id_lc1_endline_reading_beg" name="ELAssLC1ReadingBG" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - LC1- READING - LETTER -->
					   <td class="c_submission1" width="4%" style=""><input class="submission_1" id="id_lc1_endline_reading_letter" name="ELAssLC1ReadingLT" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- READING - WORD -->
					   <td class="c_submission1" width="4%" style=""><input class="submission_1" id="id_lc1_endline_reading_word" name="ELAssLC1ReadingWD" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- READING - PARA -->
					   <td class="c_submission1" width="3%" style=""><input class="submission_1" id="id_lc1_endline_reading_para" name="ELAssLC1ReadingPR" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- READING - STORY -->
					   <td class="c_submission1" width="4%" style=""><input class="submission_1" id="id_lc1_endline_reading_story" name="ELAssLC1ReadingSY" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- NUMBER - BEG -->
					   <td class="c_submission1" width="6%" style=""><input class="submission_1" id="id_lc1_endline_number_beg" name="ELAssLC1NumberBG" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- NUMBER - 0TO9 -->
					   <td class="c_submission1" width="4%" style=""><input class="submission_1" id="id_lc1_endline_number_09" name="ELAssLC1Number1Digit" size="10" style="width:20px;" type="text"> </td>
					   
					   <!--  TABLE 5 – LC1- NUMBER - 10TO99 -->
					   <td class="c_submission1" width="4%" style=""><input class="submission_1" id="id_lc1_endline_number_1099" name="ELAssLC1Number2Digits" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- NUMBER - 100TO999 -->
					   <td class="c_submission1" width="5%" style=""><input class="submission_1" id="id_lc1_endline_number_100999" name="ELAssLC1Number3Digits" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- ADD C -->
					   <td class="c_submission1" width="5%" style=""><input class="submission_1" id="id_lc1_endline_add_can" name="ELAssLC1OperationAC" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- ADD CN -->
					   <td class="c_submission1" width="5%" style=""><input class="submission_1" id="id_lc1_endline_add_cant" name="ELAssLC1OperationACN" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- SUB C -->
					   <td class="c_submission1" width="4%" style=""><input class="submission_1" id="id_lc1_endline_sub_can" name="ELAssLC1OperationSC" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- SUB CN -->
					   <td class="c_submission1" width="4%" style=""><input class="submission_1" id="id_lc1_endline_sub_cant" name="ELAssLC1OperationSCN" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- MUL C -->
					   <td class="c_submission1" width="4%" style=""><input class="submission_1" id="id_lc1_endline_mul_can" name="ELAssLC1OperationMC" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- MUL CN -->
					   <td class="c_submission1" width="4%" style=""><input class="submission_1" id="id_lc1_endline_mul_cant" name="ELAssLC1OperationMCN" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- DIV C -->
					   <td class="c_submission1" width="4%" style=""><input class="submission_1" id="id_lc1_endline_div_can" name="ELAssLC1OperationDC" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- DIV CN -->
					   <td class="c_submission1" width="3%" style=""><input class="submission_1" id="id_lc1_endline_div_cant" name="ELAssLC1OperationDCN" size="10" style="width:20px;" type="text"></td>
					</tr>
					
					<tr align="center">
					  <! --  TABLE 5 - LC2  -->
					  <td id="ft" width="11%">LC 2 Endline</td>
					  
					  <!--  TABLE 5 - LC2 – TOTAL TESTED -->
					  <td class="c_submission2" width="9%"><input class="submission_1" id="id_lc2_endline_totaltested" name="ELAssLC2Tested" size="10" style="width:20px;" type="text"> </td>					  
					  
					  <!--  TABLE 5 - LC2- READING - BEG  -->
					  <td class="c_submission2" width="5%"><input class="submission_1" id="id_lc2_endline_reading_beg" name="ELAssLC2ReadingBG" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 - LC2- READING - LETTER -->
					  <td class="c_submission2" width="4%"><input class="submission_1" id="id_lc2_endline_reading_letter" name="ELAssLC2ReadingLT" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- READING - WORD -->
					  <td class="c_submission2" width="4%"><input class="submission_1" id="id_lc2_endline_reading_word" name="ELAssLC2ReadingWD" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- READING - PARA -->
					  <td class="c_submission2" width="3%"><input class="submission_1" id="id_lc2_endline_reading_para" name="ELAssLC2ReadingPR" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- READING - STORY -->
					  <td class="c_submission2" width="4%"><input class="submission_1" id="id_lc2_endline_reading_story" name="ELAssLC2ReadingSY" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- NUMBER - BEG -->
					  <td class="c_submission2" width="6%"><input class="submission_1" id="id_lc2_endline_number_beg" name="ELAssLC2NumberBG" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- NUMBER - 0TO9 -->
					  <td class="c_submission2" width="4%"><input class="submission_1" id="id_lc2_endline_number_09" name="ELAssLC2Number1Digit" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- NUMBER - 10TO99 -->
					  <td class="c_submission2" width="4%"><input class="submission_1" id="id_lc2_endline_number_1099" name="ELAssLC2Number2Digits" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- NUMBER - 100TO999 -->
					  <td class="c_submission2" width="5%"><input class="submission_1" id="id_lc2_endline_number_100999" name="ELAssLC2Number3Digits" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- ADD C -->
					  <td class="c_submission2" width="5%"><input class="submission_1" id="id_lc2_endline_add_can" name="ELAssLC2OperationAC" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- ADD CN -->
					  <td class="c_submission2" width="5%"><input class="submission_1" id="id_lc2_endline_add_cant" name="ELAssLC2OperationACN" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- SUB C -->
					  <td class="c_submission2" width="4%"><input class="submission_1" id="id_lc2_endline_sub_can" name="ELAssLC2OperationSC" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- SUB CN -->
					  <td class="c_submission2" width="4%"><input class="submission_1" id="id_lc2_endline_sub_cant" name="ELAssLC2OperationSCN" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- MUL C -->
					  <td class="c_submission2" width="4%"><input class="submission_1" id="id_lc2_endline_mul_can" name="ELAssLC2OperationMC" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- MUL CN -->
					  <td class="c_submission2" width="4%"><input class="submission_1" id="id_lc2_endline_mul_cant" name="ELAssLC2OperationMCN" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- DIV C -->
					  <td class="c_submission2" width="4%"><input class="submission_1" id="id_lc2_endline_div_can" name="ELAssLC2OperationDC" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- DIV CN -->
					  <td class="c_submission2" width="3%"><input class="submission_1" id="id_lc2_endline_div_cant" name="ELAssLC2OperationDCN" size="10" style="width:20px;" type="text"> </td>
					</tr>
					
					<tr align="center">
					 <! --  TABLE 5 - LC3  -->
					 <td id="ft" width="11%">LC 3 Endline</td>
					 
					 <!--  TABLE 5 - LC3 – TOTAL TESTED -->
					 <td class="c_submission3" width="9%"><input class="submission_1" id="id_lc3_endline_totaltested" name="ELAssLC3Tested" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 - LC3- READING - BEG  -->
					 <td class="c_submission3" width="5%"><input class="submission_1" id="id_lc3_endline_reading_beg" name="ELAssLC3ReadingBG" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 - LC3- READING - LETTER -->
					 <td class="c_submission3" width="4%"><input class="submission_1" id="id_lc3_endline_reading_letter" name="ELAssLC3ReadingLT" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- READING - WORD -->
					 <td class="c_submission3" width="4%"><input class="submission_1" id="id_lc3_endline_reading_word" name="ELAssLC3ReadingWD" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- READING - PARA -->
					 <td class="c_submission3" width="3%"><input class="submission_1" id="id_lc3_endline_reading_para" name="ELAssLC3ReadingPR" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- READING - STORY -->
					 <td class="c_submission3" width="4%"><input class="submission_1" id="id_lc3_endline_reading_story" name="ELAssLC3ReadingSY" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- NUMBER - BEG -->
					 <td class="c_submission3" width="6%"><input class="submission_1" id="id_lc3_endline_number_beg" name="ELAssLC3NumberBG" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- NUMBER - 0TO9 -->
					 <td class="c_submission3" width="4%"><input class="submission_1" id="id_lc3_endline_number_09" name="ELAssLC3Number1Digit" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- NUMBER - 10TO99 -->
					 <td class="c_submission3" width="4%"><input class="submission_1" id="id_lc3_endline_number_1099" name="ELAssLC3Number2Digits" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- NUMBER - 100TO999 -->
					 <td class="c_submission3" width="5%"><input class="submission_1" id="id_lc3_endline_number_100999" name="ELAssLC3Number3Digits" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- ADD C -->
					 <td class="c_submission3" width="5%"><input class="submission_1" id="id_lc3_endline_add_can" name="ELAssLC3OperationAC" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- ADD CN -->
					 <td class="c_submission3" width="5%"><input class="submission_1" id="id_lc3_endline_add_cant" name="ELAssLC3OperationACN" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- SUB C -->
					 <td class="c_submission3" width="4%"><input class="submission_1" id="id_lc3_endline_sub_can" name="ELAssLC3OperationSC" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- SUB CN -->
					 <td class="c_submission3" width="4%"><input class="submission_1" id="id_lc3_endline_sub_cant" name="ELAssLC3OperationSCN" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- MUL C -->
					 <td class="c_submission3" width="4%"><input class="submission_1" id="id_lc3_endline_mul_can" name="ELAssLC3OperationMC" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- MUL CN -->
					 <td class="c_submission3" width="4%"><input class="submission_1" id="id_lc3_endline_mul_cant" name="ELAssLC3OperationMCN" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- DIV C -->
					 <td class="c_submission3" width="4%"><input class="submission_1" id="id_lc3_endline_div_can" name="ELAssLC3OperationDC" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- DIV CN -->
					 <td class="c_submission3" width="3%"><input class="submission_1" id="id_lc3_endline_div_cant" name="ELAssLC3OperationDCN" size="10" style="width:20px;" type="text"> </td>
				   </tr>
				   
				   <tr align="center">
					 <! --  TABLE 5 - LC4  -->
					 <td id="ft" width="11%">LC 4 Endline</td>
					 
					 <!--  TABLE 5 - LC4 – TOTAL TESTED -->
					 <td class="c_submission4" width="9%"><input class="submission_1" id="id_lc4_endline_totaltested" name="ELAssLC4Tested" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 - LC4- READING - BEG  -->
					 <td class="c_submission4" width="5%"><input class="submission_1" id="id_lc4_endline_reading_beg" name="ELAssLC4ReadingBG" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 - LC4- READING - LETTER -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_lc4_endline_reading_letter" name="ELAssLC4ReadingLT" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- READING - WORD -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_lc4_endline_reading_word" name="ELAssLC4ReadingWD" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- READING - PARA -->
					 <td class="c_submission4" width="3%"><input class="submission_1" id="id_lc4_endline_reading_para" name="ELAssLC4ReadingPR" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- READING - STORY -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_lc4_endline_reading_story" name="ELAssLC4ReadingSY" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- NUMBER - BEG -->
					 <td class="c_submission4" width="6%"><input class="submission_1" id="id_lc4_endline_number_beg" name="ELAssLC4NumberBG" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- NUMBER - 0TO9 -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_lc4_endline_number_09" name="ELAssLC4Number1Digit" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- NUMBER - 10TO99 -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_lc4_endline_number_1099" name="ELAssLC4Number2Digits" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- NUMBER - 100TO999 -->
					 <td class="c_submission4" width="5%"><input class="submission_1" id="id_lc4_endline_number_100999" name="ELAssLC4Number3Digits" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- ADD C -->
					 <td class="c_submission4" width="5%"><input class="submission_1" id="id_lc4_endline_add_can" name="ELAssLC4OperationAC" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- ADD CN -->
					 <td class="c_submission4" width="5%"><input class="submission_1" id="id_lc4_endline_add_cant" name="ELAssLC4OperationACN" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- SUB C -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_lc4_endline_sub_can" name="ELAssLC4OperationSC" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- SUB CN -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_lc4_endline_sub_cant" name="ELAssLC4OperationSCN" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- MUL C -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_lc4_endline_mul_can" name="ELAssLC4OperationMC" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- MUL CN -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_lc4_endline_mul_cant" name="ELAssLC4OperationMCN" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- DIV C -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_lc4_endline_div_can" name="ELAssLC4OperationDC" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- DIV CN -->
					 <td class="c_submission4" width="3%"><input class="submission_1" id="id_lc4_endline_div_cant" name="ELAssLC4OperationDCN" size="10" style="width:20px;" type="text"> </td>
					</tr>
					
					<tr align="center">
					  <! --  TABLE 5 - CONSOLIDATED ENDLINE  -->
					 <td id="ft" width="11%">Consolidated Endline Of Selected Children*</td>
					 
					 <!--  TABLE 5 - CONSOLIDATED ENDLINE – TOTAL TESTED -->
					 <td class="c_submission4" width="9%"><input class="submission_1" id="id_cons_endline_totaltested" name="ELAssConsELTested" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 - CONSOLIDATED ENDLINE- READING - BEG  -->
					 <td class="c_submission4" width="5%"><input class="submission_1" id="id_cons_endline_reading_beg" name="ELAssConsELReadingBG" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 - CONSOLIDATED ENDLINE- READING - LETTER -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_cons_endline_reading_letter" name="ELAssConsELReadingLT" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- READING - WORD -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_cons_endline_reading_word" name="ELAssConsELReadingWD" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- READING - PARA -->
					 <td class="c_submission4" width="3%"><input class="submission_1" id="id_cons_endline_reading_para" name="ELAssConsELReadingPR" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- READING - STORY -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_cons_endline_reading_story" name="ELAssConsELReadingSY" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- NUMBER - BEG -->
					 <td class="c_submission4" width="6%"><input class="submission_1" id="id_cons_endline_number_beg" name="ELAssConsELNumberBG" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- NUMBER - 0TO9 -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_cons_endline_number_09" name="ELAssConsELNumber1Digit" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- NUMBER - 10TO99 -->
					 <td class="c_submission4" width="6%"><input class="submission_1" id="id_cons_endline_number_1099" name="ELAssConsELNumber2Digits" size="10" style="width:20px;" type="text"></td>    
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- NUMBER - 100TO999 -->
					 <td class="c_submission4" width="6%"><input class="submission_1" id="id_cons_endline_number_100999" name="ELAssConsELNumber3Digits" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- ADD C -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_cons_endline_add_can" name="ELAssConsELOperationAC" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- ADD CN -->
					 <td class="c_submission4" width="5%"><input class="submission_1" id="id_cons_endline_add_cant" name="ELAssConsELOperationACN" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- SUB C -->
					 <td class="c_submission4" width="5%"><input class="submission_1" id="id_cons_endline_sub_can" name="ELAssConsELOperationSC" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- SUB CN -->
					 <td class="c_submission4" width="5%"><input class="submission_1" id="id_cons_endline_sub_cant" name="ELAssConsELOperationSCN" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- MUL CN -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_cons_endline_mul_can" name="ELAssConsELOperationMC" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- MUL CN -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_cons_endline_mul_cant" name="ELAssConsELOperationMCN" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- DIV C -->
					 <td class="c_submission4" width="4%"><input class="submission_1" id="id_cons_endline_div_can" name="ELAssConsELOperationDC" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- DIV CN -->
					 <td class="c_submission4" width="3%"><input class="submission_1" id="id_cons_endline_div_cant" name="ELAssConsELOperationDCN" size="10" style="width:20px;" type="text"></td>
					</tr>
					
					<tr>
					<td colspan="19" id="ft_note">* The last endline of all selected children will be considered while calculating consolidated endline</td>
					</tr></tbody>
				
				</table>		
				<br><br>

				<! --  Table 6 start from here -->
				<font color="#96763B" face="calibri" size="4"><b>TABLE 6: PROGRESS ACROSS READING LEVELS (Baseline vs Endline 4)*</b></font></div><div class="pbBody">           
				<table bgcolor="#F0F0F0" border="2px" bordercolor="#538467" id ="id_table6" cellpadding="2" cellspacing="0" style="border-collapse:collapse;" width="100%">   
				 <tbody>
					<tr align="center">
					   <td id="ft" width="29%">Learning levels</td>
					   <td id="ft" width="13%">Beginner</td>
					   <td id="ft" width="13%">Letter</td>
					   <td id="ft" width="12%">Word</td>
					   <td id="ft" width="11%">Para</td>
					   <td id="ft" width="9%">Story</td>
					   <td id="ft" width="10%">Total (Baseline)</td>
					</tr>
				  
					<tr align="center">
					   <td id="ft" width="29%">Beginner</td>
					   <td class="c_submission4" width="13%"><input class="submission_1" id="id_baseline_beg_beg" name="progressAcrossReadingBGBG" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="13%"><input class="submission_1" id="id_baseline_beg_letter" name="progressAcrossReadingBGLT" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="12%"><input class="submission_1" id="id_baseline_beg_word" name="progressAcrossReadingBGWD" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="11%"><input class="submission_1" id="id_baseline_beg_para" name="progressAcrossReadingBGPR" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="9%"><input class="submission_1" id="id_baseline_beg_story" name="progressAcrossReadingBGSY" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="10%"><input class="submission_1" id="id_baseline_beg_total" name="progressAcrossReadingBGTotal" size="10" style="width:50px;" type="text"></td>
					</tr>
					<tr align="center">
					   <td id="ft" width="29%">Letter</td>
					   <td class="c_submission4" width="13%"><input class="submission_1" id="id_baseline_letter_beg" name="progressAcrossReadingLTBG" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="13%"><input class="submission_1" id="id_baseline_letter_letter" name="progressAcrossReadingLTLT" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="12%"><input class="submission_1" id="id_baseline_letter_word" name="progressAcrossReadingLTWD" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="11%"><input class="submission_1" id="id_baseline_letter_para" name="progressAcrossReadingLTPR" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="9%"><input class="submission_1" id="id_baseline_letter_story" name="progressAcrossReadingLTSY" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="10%"><input class="submission_1" id="id_baseline_letter_total" name="progressAcrossReadingLTTotal" size="10" style="width:50px;" type="text"></td>
					</tr>
					<tr align="center">
					   <td id="ft" width="29%">Word</td>
					   <td class="c_submission4" width="13%"><input class="submission_1" id="id_baseline_word_beg" name="progressAcrossReadingWDBG" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="13%"><input class="submission_1" id="id_baseline_word_letter" name="progressAcrossReadingWDLT" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="12%"><input class="submission_1" id="id_baseline_word_word" name="progressAcrossReadingWDWD" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="11%"><input class="submission_1" id="id_baseline_word_para" name="progressAcrossReadingWDPR" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="9%"><input class="submission_1" id="id_baseline_word_story" name="progressAcrossReadingWDSY" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="10%"><input class="submission_1" id="id_baseline_word_total" name="progressAcrossReadingWDTotal" size="10" style="width:50px;" type="text"></td>
					</tr>
				   
				   <tr align="center">
					   <td id="ft" width="29%">Para</td>
					   <td class="c_submission4" width="13%"> <input class="submission_1" id="id_baseline_para_beg" name="progressAcrossReadingPRBG" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="13%"><input class="submission_1" id="id_baseline_para_letter" name="progressAcrossReadingPRWD" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="12%"><input class="submission_1" id="id_baseline_para_word" name="progressAcrossReadingPRLT" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="11%"><input class="submission_1" id="id_baseline_para_para" name="progressAcrossReadingPRPR" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="9%"><input class="submission_1" id="id_baseline_para_story" name="progressAcrossReadingPRSY" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="10%"><input class="submission_1" id="id_baseline_para_total" name="progressAcrossReadingPRTotal" size="10" style="width:50px;" type="text"></td>
					</tr>
					
					<tr align="center">
					   <td id="ft" width="29%">Story</td>
					   <td class="c_submission4" width="13%"><input class="submission_1" id="id_baseline_story_beg" name="progressAcrossReadingSYBG" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="13%"><input class="submission_1" id="id_baseline_story_letter" name="proogressAcrossReadingSYLT" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="12%"><input class="submission_1" id="id_baseline_story_word" name="proogressAcrossReadingSYWD" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="11%"><input class="submission_1" id="id_baseline_story_para" name="progressAcrossReadingSYPR" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="9%"><input class="submission_1" id="id_baseline_story_story" name="progressAcrossReadingSYSY" size="10" style="width:50px;" type="text"></td>
					   <td class="c_submission4" width="10%"><input class="submission_1" id="id_baseline_story_total" name="progressAcrossReadingSYTotal" size="10" style="width:50px;" type="text"></td>
					</tr>
					
					<tr align="center">
					   <td id="ft" width="29%">Total (Endline)</td>
					   <td id="ft1" width="13%"><label id = "id_endline_beg_total" style="width:20px;">0</label></td>
					   <td id="ft1" width="13%"><label id = "id_endline_letter_total" style="width:20px;">0</label></td>
					   <td id="ft1" width="12%"><label id = "id_endline_word_total" style="width:20px;">0</label></td>
					   <td id="ft1" width="11%"><label id = "id_endline_para_total" style="width:20px;">0</label></td>
					   <td id="ft1" width="9%"><label  id = "id_endline_story_total" style="width:20px;">0</label></td>
					   <td id="ft1" width="10%"><label id = "id_total" style="width:20px;">0</label></td>
					</tr>
	  
					<tr>
					   <td colspan="7" id="ft_note">* This table pertains to only those children for whom there is a baseline and endline 4</td>
					</tr> </tbody>
				</table>

				<!-- Table 7 start from here -->
				<br>
				<font color="#96763B" face="calibri" size="4.5"><b>TABLE 7: STD 1-2 INFORMATION</b></font>      
				<table bgcolor="#F0F0F0" border="2px" bordercolor="#538467" id ="id_table7" cellpadding="2" cellspacing="0" style="border-collapse:collapse;" width="100%"> 
					<tbody>
					<tr align="center">
						<td id="ft" rowspan="2" width="11%">Testing</td>
						<td id="ft" rowspan="2" width="11%">No of children</td>
						<td colspan="5" id="ft">Reading</td>
						<td colspan="3" id="ft">Number Recognition</td>
						<td colspan="2" id="ft" width="8%">Add</td>
						<td colspan="2" id="ft" width="9%">Sub</td>
					</tr>
					
					<tr align="center">
						<td id="ft" width="9%">Beginner</td>
						<td id="ft" width="8%">Letter</td>
						<td id="ft" width="7%">Word</td>
						<td id="ft" width="7%">Para</td>
						<td id="ft" width="7%">Story</td>
						<td id="ft" width="8%">Beginner</td>
						<td id="ft" width="5%">0-9</td>
						<td id="ft" width="4%">10-99</td>
						<td id="ft" width="3%">Can</td>
						<td id="ft" width="4%">Cannot</td>
						<td id="ft" width="4%">Can</td>
						<td id="ft" width="5%">Cannot</td>
					</tr>
					
					<tr align="center">
						<td id="ft" width="11%">BaseLine</td>
						<td class="c_submission1" width="11%" style=""><input class="submission_1" id="id_baseline_children" name="std1_2BLChildren" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission1" width="9%" style=""><input class="submission_1" id="id_baseline_reading_beg" name="std1_2BLReadingBG" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission1"  width="8%" style=""><input class="submission_1" id="id_baseline_reading_letter" name="std1_2BLReadingLT" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission1"  width="7%" style=""><input class="submission_1" id="id_baseline_reading_word" name="std1_2BLReadingWD" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission1"  width="7%" style=""><input class="submission_1" id="id_baseline_reading_para" name="std1_2BLReadingPR" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission1"  width="7%" style=""><input class="submission_1" id="id_baseline_reading_story" name="std1_2BLReadingSY" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission1"  width="8%" style=""><input class="submission_1" id="id_baseline_number_beg" name="std1_2BLNumberBG" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission1"  width="5%" style=""><input class="submission_1" id="id_baseline_number_0to9" name="std1_2BLNumber1Digit" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission1"  width="4%" style=""><input class="submission_1" id="id_baseline_number_10to99" name="std1_2BLNumber2Digits" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission1"  width="3%" style=""><input class="submission_1" id="id_baseline_add_c" name="std1_2BLOperationAC" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission1"  width="4%" style=""><input class="submission_1" id="id_baseline_add_cn" name="std1_2BLOperationACN" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission1"  width="4%" style=""><input class="submission_1" id="id_baseline_sub_c" name="std1_2BLOperationSC" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission1"  width="5%" style=""><input class="submission_1" id="id_baseline_sub_cn" name="std1_2BLOperationSCN" size="10" style="width:20px;" type="text"></td>
					</tr>
					
					<tr align="center">
						<td id="ft" width="11%">EndLine</td>
						<td class="c_submission4" width="11%" style=""><input class="submission_1" id="id_endline_children" name="std1_2ELChildren" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission4" width="9%" style=""><input class="submission_1" id="id_endline_reading_beg" name="std1_2ELReadingBG" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission4" width="8%" style=""><input class="submission_1" id="id_endline_reading_letter" name="std1_2ELReadingLT" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission4" width="7%" style=""><input class="submission_1" id="id_endline_reading_word" name="std1_2ELReadingWD" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission4" width="7%" style=""><input class="submission_1" id="id_endline_reading_para" name="std1_2ELReadingPR" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission4" width="7%" style=""><input class="submission_1" id="id_endline_reading_story" name="std1_2ELReadingSY" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission4" width="8%" style=""><input class="submission_1" id="id_endline_number_beg" name="std1_2ELNumberBG" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission4" width="5%" style=""><input class="submission_1" id="id_endline_number_0to9" name="std1_2ELNumber1Digit" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission4" width="4%" style=""><input class="submission_1" id="id_endline_number_10to99" name="std1_2ELNumber2Digits" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission4" width="3%" style=""><input class="submission_1" id="id_endline_add_c" name="std1_2ELOperationAC" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission4" width="4%" style=""><input class="submission_1" id="id_endline_add_cn" name="std1_2ELOperationACN" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission4" width="4%" style=""><input class="submission_1" id="id_endline_sub_c" name="std1_2ELOperationSC" size="10" style="width:20px;" type="text"></td>
						<td class="c_submission4" width="5%" style=""><input class="submission_1" id="id_endline_sub_cn" name="std1_2ELOperationSCN" size="10" style="width:20px;" type="text"></td>
					</tr>
					</tbody>
				</table>
				<!-- Table 8 design  -->
				<br><br>
				<font color="#96763B" face="calibri" size="4.5">
				<b>TABLE 8: PEOPLE VISITING THE CAMPS (Only number of visits)</b></font>         
				
				<table bgcolor="#F0F0F0" border="2px" bordercolor="#538467" id ="id_table8" cellpadding="1" cellspacing="0" style="border-collapse:collapse;" width="100%">
					<tbody>
					<tr align="center">
						<td id="ft" width="11%">Camp number</td>
						<td id="ft" width="13%">Govt Officials</td>
						<td id="ft" width="14%">State Head</td>
						<td id="ft" width="15%">Content SRGs</td>
						<td id="ft" width="16%">DRLs</td>
						<td id="ft" width="16%">MME Team</td>
						<td id="ft" width="16%">Community</td>
						<td id="ft" width="12%">Others</td>
					</tr>
					
					<tr align="center">
						<td id="ft" width="11%">Camp 1</td>
						<td width="13%" class= "c_submission1" style="background: ">
							<select class="submission_1 " id="id_camp1_govtofficials" name="camp1GovtOfficials" style="width:50px;">
								<option value="">--None--</option>   
								<option value="0">0</option>	
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission1" width="14%" style="background: ">
							<select class="submission_1" id="id_camp1_statehead" name="camp1StateHead" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission1" width="15%" style="background: ">
							<select class="submission_1" id="id_camp1_contentsrg" name="camp1ContentSRG" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission1" width="16%" style="background: ">
							<select class="submission_1" id="id_camp1_bc_drl" name="Camp1BCDRL" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission1" width="16%" style="background: ">
							<select class="submission_1" id="id_camp1_mmeteam" name="camp1MMETeam" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission1" width="16%" style="background: ">
							<select class="submission_1" id="id_camp1_community" name="camp1Community" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission1" width="12%" style="background: ">
							<select class="submission_1" id="id_camp1_others" name="camp1Others" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
					</tr>
					
					<tr align="center">
						<td id="ft" width="11%">Camp 2</td>
						<td class= "c_submission2" width="13%" style="background: ">
							<select class="submission_1 c_submission1" id="id_camp2_govtofficials" name="camp2GovtOfficials" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						<td class= "c_submission2" width="14%" style="background: ">
							<select class="submission_1" id="id_camp2_statehead" name="camp2StateHead" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission2" width="15%" style="background: ">
							<select class="submission_1" id="id_camp2_contentsrg" name="camp2ContentSRG" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission2" width="16%" style="background: ">
							<select class="submission_1" id="id_camp2_bc_drl" name="camp2BCDRL" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission2" width="16%" style="background: ">
							<select class="submission_1" id="id_camp2_mmeteam" name="camp2MMETeam" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission2" width="16%" style="background: ">
							<select class="submission_1" id="id_camp2_community" name="camp2Community" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission2" width="12%" style="background: ">
							<select class="submission_1" id="id_camp2_others" name="camp2Others" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
					</tr>
					
					<tr align="center">
						<td id="ft" width="11%">Camp 3</td>
						<td width="13%" class= "c_submission3" style="background: ">
							<select class="submission_1" id="id_camp3_govtofficials" name="camp3GovtOfficials" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td width="14%" class= "c_submission3" style="background: ">
							<select class="submission_1" id="id_camp3_statehead" name="camp3StateHead" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission3" width="15%" style="background: ">
							<select class="submission_1" id="id_camp3_contentsrg" name="camp3ContentSRG" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission3" width="16%" style="background: ">
							<select class="submission_1" id="id_camp3_bc_drl" name="camp3BCDRL" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td  class= "c_submission3" width="16%" style="background: ">
							<select class="submission_1" id="id_camp3_mmeteam" name="camp3MMETeam" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission3" width="16%" style="background: ">
							<select class="submission_1" id="id_camp3_community" name="camp3Community" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission3" width="12%" style="background: ">
							<select class="submission_1" id="id_camp3_others" name="camp3Others" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
					</tr>
					<tr align="center">
						<td id="ft" width="11%">Camp 4</td>
						<td class= "c_submission4" width="13%" style="background: ">
							<select class="submission_1" id="id_camp4_govtofficials" name="camp4GovtOfficials" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission4" width="14%" style="background: ">
							<select class="submission_1" id="id_camp4_statehead" name="camp4StateHead" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission4" width="15%" style="background: ">
							<select class="submission_1" id="id_camp4_contentsrg" name="camp4ContentSRG" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission4" width="16%" style="background: ">
							<select class="submission_1" id="id_camp4_bc_drl" name="camp4BCDRL" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission4" width="16%" style="background: ">
							<select class="submission_1" id="id_camp4_mmeteam" name="camp4MMETeam" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission4" width="16%" style="background: ">
							<select class="submission_1" id="id_camp4_community" name="camp4Community" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
						
						<td class= "c_submission4" width="12%" style="background: ">
							<select class="submission_1" id="id_camp4_others" name="camp4Others" style="width:50px;">
								<option value="">--None--</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</td>
					</tr> 
					</tbody>
				</table>

		<!-- </form>	 -->



	
	<script>
	// Table 4 - 
	//Autometic total of First Baseline - Tested
	    $(document).ready(function(){
	 
	        //iterate through each textboxes and add keyup
	        //handler to trigger sum event
	        $(".Tested").each(function() {
	            $(this).keyup(function(){
	                calculatetested();
	            });
	        });
	 
	    });
	 
	    function calculatetested() {
	 
	        var tested = 0;
	        //iterate through each textboxes and add the values
	        $(".Tested").each(function() {
	 
	            //add only if the value is number
	            if(!isNaN(this.value) && this.value.length!=0) {
	                tested += parseFloat(this.value);
	            }
	 
	        });
	 
	    $("#id_first_baseline_endline1_tested").html(tested.toFixed(0));
	    }    
	</script>

	<script>
	// Table 4 - 
	//Autometic total of First Baseline - Enrolled
	    $(document).ready(function(){
	 
	        //iterate through each textboxes and add keyup
	        //handler to trigger sum event
	        $(".Enrolled").each(function() {
	            $(this).keyup(function(){
	                calculateenrolled();
	            });
	        });
	 
	    });
	 
	    function calculateenrolled() {
	 
	        var Enrolled = 0;
	        //iterate through each textboxes and add the values
	        $(".Enrolled").each(function() {
	 
	            //add only if the value is number
	            if(!isNaN(this.value) && this.value.length!=0) {
	                Enrolled += parseFloat(this.value);
	            }
	 
	        });
	 
	    $("#id_first_baseline_endline1_enrolled").html(Enrolled.toFixed(0));
	    }    
	</script>
	

<script>
	// Table 4 - 
	//Autometic total of First Baseline - ReadingBG
	    $(document).ready(function(){
	 
	        //iterate through each textboxes and add keyup
	        //handler to trigger sum event
	        $(".ReadingBG").each(function() {
	            $(this).keyup(function(){
	                ReadingBG();
	            });
	        });
	 
	    });
	 
	    function ReadingBG() {
	 
	        var ReadingBG = 0;
	        //iterate through each textboxes and add the values
	        $(".ReadingBG").each(function() {
	 
	            //add only if the value is number
	            if(!isNaN(this.value) && this.value.length!=0) {
	                ReadingBG += parseFloat(this.value);
	            }
	 
	        });
	 
	    $("#id_first_baseline_endline1_reading_beg").html(ReadingBG.toFixed(0));
	    }    
	</script>

<script>
	// Table 4 - 
	//Autometic total of First Baseline - ReadingLT
	    $(document).ready(function(){
	 
	        //iterate through each textboxes and add keyup
	        //handler to trigger sum event
	        $(".ReadingLT").each(function() {
	            $(this).keyup(function(){
	                ReadingLT();
	            });
	        });
	 
	    });
	 
	    function ReadingLT() {
	 
	        var ReadingLT = 0;
	        //iterate through each textboxes and add the values
	        $(".ReadingLT").each(function() {
	 
	            //add only if the value is number
	            if(!isNaN(this.value) && this.value.length!=0) {
	                ReadingLT += parseFloat(this.value);
	            }
	 
	        });
	 
	    $("#id_first_baseline_endline1_reading_letter").html(ReadingLT.toFixed(0));
	    }    
	</script>


	<script>
		// Table 4 - 
		//Autometic total of First Baseline - ReadingWD
		    $(document).ready(function(){
		 
		        //iterate through each textboxes and add keyup
		        //handler to trigger sum event
		        $(".ReadingWD").each(function() {
		            $(this).keyup(function(){
		                ReadingWD();
		            });
		        });
		 
		    });
		 
		    function ReadingWD() {
		 
		        var ReadingWD = 0;
		        //iterate through each textboxes and add the values
		        $(".ReadingWD").each(function() {
		 
		            //add only if the value is number
		            if(!isNaN(this.value) && this.value.length!=0) {
		                ReadingWD += parseFloat(this.value);
		            }
		 
		        });
		 
		    $("#id_first_baseline_endline1_reading_word").html(ReadingWD.toFixed(0));
		    }    
	</script>


<script>
	// Table 4 - 
	//Autometic total of First Baseline - ReadingPR
	    $(document).ready(function(){
	 
	        //iterate through each textboxes and add keyup
	        //handler to trigger sum event
	        $(".ReadingPR").each(function() {
	            $(this).keyup(function(){
	                ReadingPR();
	            });
	        });
	 
	    });
	 
	    function ReadingPR() {
	 
	        var ReadingPR = 0;
	        //iterate through each textboxes and add the values
	        $(".ReadingPR").each(function() {
	 
	            //add only if the value is number
	            if(!isNaN(this.value) && this.value.length!=0) {
	                ReadingPR += parseFloat(this.value);
	            }
	 
	        });
	 
	    $("#id_first_baseline_endline1_reading_para").html(ReadingPR.toFixed(0));
	    }    
	</script>




	<script>
	// Table 4 - 
	//Autometic total of First Baseline - ReadingSY

	    $(document).ready(function(){
	 
	        //iterate through each textboxes and add keyup
	        //handler to trigger sum event
	        $(".ReadingSY").each(function() {
	            $(this).keyup(function(){
	                ReadingSY();
	            });
	        });
	 
	    });
	 
	    function ReadingSY() {
	 
	        var ReadingSY = 0;
	        //iterate through each textboxes and add the values
	        $(".ReadingSY").each(function() {
	 
	            //add only if the value is number
	            if(!isNaN(this.value) && this.value.length!=0) {
	                ReadingSY += parseFloat(this.value);
	            }
	 
	        });
	 
	    $("#id_first_baseline_endline1_reading_story").html(ReadingSY.toFixed(0));
	    }    
	</script>

<script>
	// Table 4 - 
	//Autometic total of First Baseline - NumberBG
	    $(document).ready(function(){
	 
	        //iterate through each textboxes and add keyup
	        //handler to trigger sum event
	        $(".NumberBG").each(function() {
	            $(this).keyup(function(){
	                NumberBG();
	            });
	        });
	 
	    });
	 
	    function NumberBG() {
	 
	        var NumberBG = 0;
	        //iterate through each textboxes and add the values
	        $(".NumberBG").each(function() {
	 
	            //add only if the value is number
	            if(!isNaN(this.value) && this.value.length!=0) {
	                NumberBG += parseFloat(this.value);
	            }
	 
	        });
	 
	    $("#id_first_baseline_endline1_number_beg").html(NumberBG.toFixed(0));
	    }    
	</script>


<script>
	// Table 4 - 
	//Autometic total of First Baseline - Number1Digit

	    $(document).ready(function(){
	 
	        //iterate through each textboxes and add keyup
	        //handler to trigger sum event
	        $(".Number1Digit").each(function() {
	            $(this).keyup(function(){
	                Number1Digit();
	            });
	        });
	 
	    });
	 
	    function Number1Digit() {
	 
	        var Number1Digit = 0;
	        //iterate through each textboxes and add the values
	        $(".Number1Digit").each(function() {
	 
	            //add only if the value is number
	            if(!isNaN(this.value) && this.value.length!=0) {
	                Number1Digit += parseFloat(this.value);
	            }
	 
	        });
	 
	    $("#id_first_baseline_endline1_number_09").html(Number1Digit.toFixed(0));
	    }    
	</script>


<script>




	// Table 4 - 
	//Autometic total of First Baseline - Number1Digit

	    $(document).ready(function(){
	 
	        //iterate through each textboxes and add keyup
	        //handler to trigger sum event
	        $(".Number1Digit").each(function() {
	            $(this).keyup(function(){
	                Number1Digit();
	            });
	        });
	 
	    });
	 
	    function Number1Digit() {
	 
	        var Number1Digit = 0;
	        //iterate through each textboxes and add the values
	        $(".Number1Digit").each(function() {
	 
	            //add only if the value is number
	            if(!isNaN(this.value) && this.value.length!=0) {
	                Number1Digit += parseFloat(this.value);
	            }
	 
	        });
	 
	    $("#id_first_baseline_endline1_number_09").html(Number1Digit.toFixed(0));
	    }    
	</script>



	<script>
	// Table 4 - 
	//Autometic total of First Baseline - Number2Digit

	    $(document).ready(function(){
	 
	   		// test($('#id_submission1'));
	        //iterate through each textboxes and add keyup
	        //handler to trigger sum event
	        $(".Number2Digits").each(function() {
	            $(this).keyup(function(){
	                Number2Digits();
	            });
	        });
	 
	    });
	 
	    function Number2Digits() {
	 
	        var Number2Digits = 0;
	        //iterate through each textboxes and add the values
	        $(".Number2Digits").each(function() {
	 
	            //add only if the value is number
	            if(!isNaN(this.value) && this.value.length!=0) {
	                Number2Digits += parseFloat(this.value);
	            }
	 
	        });
	 
	    $("#id_first_baseline_endline1_number_1099").html(Number2Digits.toFixed(0));
	    }    
	</script>


	<script>
	// Table 4 - 
	//Autometic total of First Baseline - Number2Digit

	    $(document).ready(function(){
	 
	        //iterate through each textboxes and add keyup
	        //handler to trigger sum event
	        $(".Number3Digits").each(function() {
	            $(this).keyup(function(){
	                Number3Digits();
	            });
	        });
	 
	    });
	 
	    function Number3Digits() {
	 
	        var Number3Digits = 0;
	        //iterate through each textboxes and add the values
	        $(".Number3Digits").each(function() {
	 
	            //add only if the value is number
	            if(!isNaN(this.value) && this.value.length!=0) {
	                Number3Digits += parseFloat(this.value);
	            }
	 
	        });
	 
	    $("#id_first_baseline_endline1_number_100999").html(Number3Digits.toFixed(0));
	    }    
	</script>



	<script type="text/javascript">
		$(document).ready(function() {
		// $(window).load(function() {

		   // $("#id_get").click(function() {                
			
			 // function loadentereddata(){
				//debugger
				var requestData1 = getRequestData1();
	        	console.log(requestData1);
   		        $.ajax({    //create an ajax request to load_page.php
		        type: "post",
				data:requestData1,
		        url: "getdata.php",             
		        dataType: "json",   //expect html to be returned 

		        success: function(table2_response){ 


		   debugger;
		  		   var entered_submissionno = 0 ;	   
		  		   var entered_submissionno = (table2_response[0][1]);
		  		   //Disabled the checkbox according the data existance
		        
		  		   //Making checkbox disabled and Checked depending on their data existance

		  		   if (entered_submissionno == 1 ){
		  		   	$(".c_submission2").css("background-color", "#00b0f0");
		  		   		$("#id_submission1").prop('checked', true);
		  		   		$("#id_submission1").prop('disabled', true);

		  		   		$("#id_submission2").prop('checked', false);
   	  		   		    $("#id_submission2").prop('disabled',false);		  		   		
		  		   		
		  		   		$("#id_submission3").prop('checked', false);
		  		   		$("#id_submission3").prop('disabled', true);
		  		   		
		  		   		$("#id_submission4").prop('checked', false);
		  		   		$("#id_submission4").prop('disabled', true);		  		   		

	  		   		//making inputbox disabled depending on entered submission
					//Table 1
						$('#id_campModel').prop('disabled',true);
						$('#id_campPhase').prop('disabled',true);
						$('#id_commonchildren').prop('disabled',true);
						$('#id_disecode').prop('disabled',true);
						$('#id_villagename').prop('disabled',true);
						$('#id_totalTeacher').prop('disabled',true);
						$('#id_classX').prop('disabled',true);
						$('#id_classY').prop('disabled',true);
						$('#id_std3').prop('disabled',true);
						$('#id_std4').prop('disabled',true);
						$('#id_std5').prop('disabled',true);
						$('#id_childrenMale').prop('disabled',true);
						$('#id_childrenFemale').prop('disabled',true);
						$('#id_teachingdays_camp1').prop('disabled',true);
						$('#id_teachingdays_camp2').prop('disabled',false);
						$('#id_teachingdays_camp3').prop('disabled',true);
						$('#id_teachingdays_camp4').prop('disabled',true);
						$('#id_teachingstart_date_camp1').prop('disabled',true);
						$('#id_teachingstart_date_camp2').prop('disabled',false);
						$('#id_teachingstart_date_camp3').prop('disabled',true);
						$('#id_teachingstart_date_camp4').prop('disabled',true);
						$('#id_teachingend_date_camp1').prop('disabled',true);
						$('#id_teachingend_date_camp2').prop('disabled',false);
						$('#id_teachingend_date_camp3').prop('disabled',true);
						$('#id_teachingend_date_camp4').prop('disabled',true);
						$('#id_nameBRGCamp1').prop('disabled',true);
						$('#id_nameBRGCamp2').prop('disabled',false);
						$('#id_nameBRGCamp3').prop('disabled',true);
						$('#id_nameBRGCamp4').prop('disabled',true);
						$('#id_totalchildren_0to20').prop('disabled',true);
						$('#id_totalchildren_21to50').prop('disabled',true);
						$('#id_totalchildren_51to70').prop('disabled',true);
						$('#id_totalchildren_71to100').prop('disabled',false);
						$('#id_communityMeetings').prop('disabled',true);
						$('#id_noofvisits_camp1').prop('disabled',true);
						$('#id_noofvisits_camp2').prop('disabled',false);
						$('#id_noofvisits_camp3').prop('disabled',true);
						$('#id_noofvisits_camp4').prop('disabled',true);
						$('#id_noofamilymember_camp1').prop('disabled',true);
						$('#id_noofamilymember_camp2').prop('disabled',false);
						$('#id_noofamilymember_camp3').prop('disabled',true);
						$('#id_noofamilymember_camp4').prop('disabled',true);
						$('#id_volunteer1_type').prop('disabled',false);
						$('#id_volunteer1_edu').prop('disabled',false);
						$('#id_volunteer1_attendance_camp1').prop('disabled',true);
						$('#id_volunteer1_attendance_camp2').prop('disabled',false);
						$('#id_volunteer1_attendance_camp3').prop('disabled',true);
						$('#id_volunteer1_attendance_camp4').prop('disabled',true);
						$('#id_volunteer2_type').prop('disabled',false);
						$('#id_volunteer2_edu').prop('disabled',false);
						$('#id_volunteer2_attendance_camp1').prop('disabled',true);
						$('#id_volunteer2_attendance_camp2').prop('disabled',false);
						$('#id_volunteer2_attendance_camp3').prop('disabled',true);
						$('#id_volunteer2_attendance_camp4').prop('disabled',true);
						$('#id_volunteer3_type').prop('disabled',false);
						$('#id_volunteer3_edu').prop('disabled',false);
						$('#id_volunteer3_attendance_camp1').prop('disabled',false);
						$('#id_volunteer3_attendance_camp2').prop('disabled',true);
						$('#id_volunteer3_attendance_camp3').prop('disabled',true);
						$('#id_volunteer3_attendance_camp4').prop('disabled',true);
						$('#id_volunteer4_type').prop('disabled',false);
						$('#id_volunteer4_edu').prop('disabled',false);
						$('#id_volunteer4_attendance_camp1').prop('disabled',true);
						$('#id_volunteer4_attendance_camp2').prop('disabled',false);
						$('#id_volunteer4_attendance_camp3').prop('disabled',true);
						$('#id_volunteer4_attendance_camp4').prop('disabled',true);
						$('#id_volunteer5_type').prop('disabled',false);
						$('#id_volunteer5_edu').prop('disabled',false);
						$('#id_volunteer5_attendance_camp1').prop('disabled',true);
						$('#id_volunteer5_attendance_camp2').prop('disabled',false);
						$('#id_volunteer5_attendance_camp3').prop('disabled',true);
						$('#id_volunteer5_attendance_camp4').prop('disabled',true);
						$('#id_volunteer6_type').prop('disabled',false);
						$('#id_volunteer6_edu').prop('disabled',false);
						$('#id_volunteer6_attendance_camp1').prop('disabled',true);
						$('#id_volunteer6_attendance_camp2').prop('disabled',false);
						$('#id_volunteer6_attendance_camp3').prop('disabled',true);
						$('#id_volunteer6_attendance_camp4').prop('disabled',true);
						$('#id_volunteer7_type').prop('disabled',false);
						$('#id_volunteer7_edu').prop('disabled',false);
						$('#id_volunteer7_attendance_camp1').prop('disabled',true);
						$('#id_volunteer7_attendance_camp2').prop('disabled',false);
						$('#id_volunteer7_attendance_camp3').prop('disabled',true);
						$('#id_volunteer7_attendance_camp4').prop('disabled',true);
						$('#id_volunteer8_type').prop('disabled',false);
						$('#id_volunteer8_edu').prop('disabled',false);
						$('#id_volunteer8_attendance_camp1').prop('disabled',true);
						$('#id_volunteer8_attendance_camp2').prop('disabled',false);
						$('#id_volunteer8_attendance_camp3').prop('disabled',true);
						$('#id_volunteer8_attendance_camp4').prop('disabled',true);
						$('#id_volunteer9_type').prop('disabled',false);
						$('#id_volunteer9_edu').prop('disabled',false);
						$('#id_volunteer9_attendance_camp1').prop('disabled',true);
						$('#id_volunteer9_attendance_camp2').prop('disabled',false);
						$('#id_volunteer9_attendance_camp3').prop('disabled',true);
						$('#id_volunteer9_attendance_camp4').prop('disabled',true);
						$('#id_volunteer10_type').prop('disabled',false);
						$('#id_volunteer10_edu').prop('disabled',false);
						$('#id_volunteer10_attendance_camp1').prop('disabled',true);
						$('#id_volunteer10_attendance_camp2').prop('disabled',false);
						$('#id_volunteer10_attendance_camp3').prop('disabled',true);
						$('#id_volunteer10_attendance_camp4').prop('disabled',true);
						$('#id_totaltested_total_tested').prop('disabled',true);
						$('#id_totaltested_reading_beg').prop('disabled',true);
						$('#id_totaltested_reading_letter').prop('disabled',true);
						$('#id_totaltested_reading_word').prop('disabled',true);
						$('#id_totaltested_reading_para').prop('disabled',true);
						$('#id_totaltested_reading_story').prop('disabled',true);
						$('#id_totaltested_number_beg').prop('disabled',true);
						$('#id_totaltested_number_09').prop('disabled',true);
						$('#id_totaltested_number_1099').prop('disabled',true);
						$('#id_totaltested_number_100999').prop('disabled',true);
						$('#id_lc1_endline_totaltested').prop('disabled',true);
						$('#id_lc1_endline_reading_beg').prop('disabled',true);
						$('#id_lc1_endline_reading_letter').prop('disabled',true);
						$('#id_lc1_endline_reading_word').prop('disabled',true);
						$('#id_lc1_endline_reading_para').prop('disabled',true);
						$('#id_lc1_endline_reading_story').prop('disabled',true);
						$('#id_lc1_endline_number_beg').prop('disabled',true);
						$('#id_lc1_endline_number_09').prop('disabled',true);
						$('#id_lc1_endline_number_1099').prop('disabled',true);
						$('#id_lc1_endline_number_100999').prop('disabled',true);
						$('#id_lc1_endline_add_can').prop('disabled',true);
						$('#id_lc1_endline_add_cant').prop('disabled',true);
						$('#id_lc1_endline_sub_can').prop('disabled',true);
						$('#id_lc1_endline_sub_cant').prop('disabled',true);
						$('#id_lc1_endline_mul_can').prop('disabled',true);
						$('#id_lc1_endline_mul_cant').prop('disabled',true);
						$('#id_lc1_endline_div_can').prop('disabled',true);
						$('#id_lc1_endline_div_cant').prop('disabled',true);
						$('#id_lc2_endline_totaltested').prop('disabled',false);
						$('#id_lc2_endline_reading_beg').prop('disabled',false);
						$('#id_lc2_endline_reading_letter').prop('disabled',false);
						$('#id_lc2_endline_reading_word').prop('disabled',false);
						$('#id_lc2_endline_reading_para').prop('disabled',false);
						$('#id_lc2_endline_reading_story').prop('disabled',false);
						$('#id_lc2_endline_number_beg').prop('disabled',false);
						$('#id_lc2_endline_number_09').prop('disabled',false);
						$('#id_lc2_endline_number_1099').prop('disabled',false);
						$('#id_lc2_endline_number_100999').prop('disabled',false);
						$('#id_lc2_endline_add_can').prop('disabled',false);
						$('#id_lc2_endline_add_cant').prop('disabled',false);
						$('#id_lc2_endline_sub_can').prop('disabled',false);
						$('#id_lc2_endline_sub_cant').prop('disabled',false);
						$('#id_lc2_endline_mul_can').prop('disabled',false);
						$('#id_lc2_endline_mul_cant').prop('disabled',false);
						$('#id_lc2_endline_div_can').prop('disabled',false);
						$('#id_lc2_endline_div_cant').prop('disabled',true);
						$('#id_lc3_endline_totaltested').prop('disabled',true);
						$('#id_lc3_endline_reading_beg').prop('disabled',true);
						$('#id_lc3_endline_reading_letter').prop('disabled',true);
						$('#id_lc3_endline_reading_word').prop('disabled',true);
						$('#id_lc3_endline_reading_para').prop('disabled',true);
						$('#id_lc3_endline_reading_story').prop('disabled',true);
						$('#id_lc3_endline_number_beg').prop('disabled',true);
						$('#id_lc3_endline_number_09').prop('disabled',true);
						$('#id_lc3_endline_number_1099').prop('disabled',true);
						$('#id_lc3_endline_number_100999').prop('disabled',true);
						$('#id_lc3_endline_add_can').prop('disabled',true);
						$('#id_lc3_endline_add_cant').prop('disabled',true);
						$('#id_lc3_endline_sub_can').prop('disabled',true);
						$('#id_lc3_endline_sub_cant').prop('disabled',true);
						$('#id_lc3_endline_mul_can').prop('disabled',true);
						$('#id_lc3_endline_mul_cant').prop('disabled',true);
						$('#id_lc3_endline_div_can').prop('disabled',true);
						$('#id_lc3_endline_div_cant').prop('disabled',true);
						$('#id_lc4_endline_totaltested').prop('disabled',true);
						$('#id_lc4_endline_reading_beg').prop('disabled',true);
						$('#id_lc4_endline_reading_letter').prop('disabled',true);
						$('#id_lc4_endline_reading_word').prop('disabled',true);
						$('#id_lc4_endline_reading_para').prop('disabled',true);
						$('#id_lc4_endline_reading_story').prop('disabled',true);
						$('#id_lc4_endline_number_beg').prop('disabled',true);
						$('#id_lc4_endline_number_09').prop('disabled',true);
						$('#id_lc4_endline_number_1099').prop('disabled',true);
						$('#id_lc4_endline_number_100999').prop('disabled',true);
						$('#id_lc4_endline_add_can').prop('disabled',true);
						$('#id_lc4_endline_add_cant').prop('disabled',true);
						$('#id_lc4_endline_sub_can').prop('disabled',true);
						$('#id_lc4_endline_sub_cant').prop('disabled',true);
						$('#id_lc4_endline_mul_can').prop('disabled',true);
						$('#id_lc4_endline_mul_cant').prop('disabled',true);
						$('#id_lc4_endline_div_can').prop('disabled',true);
						$('#id_lc4_endline_div_cant').prop('disabled',true);
						$('#id_cons_endline_totaltested').prop('disabled',true);
						$('#id_cons_endline_reading_beg').prop('disabled',true);
						$('#id_cons_endline_reading_letter').prop('disabled',true);
						$('#id_cons_endline_reading_word').prop('disabled',true);
						$('#id_cons_endline_reading_para').prop('disabled',true);
						$('#id_cons_endline_reading_story').prop('disabled',true);
						$('#id_cons_endline_number_beg').prop('disabled',true);
						$('#id_cons_endline_number_09').prop('disabled',true);
						$('#id_cons_endline_number_1099').prop('disabled',true);
						$('#id_cons_endline_number_100999').prop('disabled',true);
						$('#id_cons_endline_add_can').prop('disabled',true);
						$('#id_cons_endline_add_cant').prop('disabled',true);
						$('#id_cons_endline_sub_can').prop('disabled',true);
						$('#id_cons_endline_sub_cant').prop('disabled',true);
						$('#id_cons_endline_mul_can').prop('disabled',true);
						$('#id_cons_endline_mul_cant').prop('disabled',true);
						$('#id_cons_endline_div_can').prop('disabled',true);
						$('#id_cons_endline_div_cant').prop('disabled',true);
						$('#id_baseline_beg_beg').prop('disabled',true);
						$('#id_baseline_beg_letter').prop('disabled',true);
						$('#id_baseline_beg_word').prop('disabled',true);
						$('#id_baseline_beg_para').prop('disabled',true);
						$('#id_baseline_beg_story').prop('disabled',true);
						$('#id_baseline_beg_total').prop('disabled',true);
						$('#id_baseline_letter_beg').prop('disabled',true);
						$('#id_baseline_letter_letter').prop('disabled',true);
						$('#id_baseline_letter_word').prop('disabled',true);
						$('#id_baseline_letter_para').prop('disabled',true);
						$('#id_baseline_letter_story').prop('disabled',true);
						$('#id_baseline_letter_total').prop('disabled',true);
						$('#id_baseline_word_beg').prop('disabled',true);
						$('#id_baseline_word_letter').prop('disabled',true);
						$('#id_baseline_word_word').prop('disabled',true);
						$('#id_baseline_word_para').prop('disabled',true);
						$('#id_baseline_word_story').prop('disabled',true);
						$('#id_baseline_word_total').prop('disabled',true);
						$('#id_baseline_para_beg').prop('disabled',true);
						$('#id_baseline_para_letter').prop('disabled',true);
						$('#id_baseline_para_word').prop('disabled',true);
						$('#id_baseline_para_para').prop('disabled',true);
						$('#id_baseline_para_story').prop('disabled',true);
						$('#id_baseline_para_total').prop('disabled',true);
						$('#id_baseline_story_beg').prop('disabled',true);
						$('#id_baseline_story_letter').prop('disabled',true);
						$('#id_baseline_story_word').prop('disabled',true);
						$('#id_baseline_story_para').prop('disabled',true);
						$('#id_baseline_story_story').prop('disabled',true);
						$('#id_baseline_story_total').prop('disabled',true);
						$('#id_endline_beg_total').prop('disabled',true);
						$('#id_endline_letter_total').prop('disabled',true);
						$('#id_endline_word_total').prop('disabled',true);
						$('#id_endline_para_total').prop('disabled',true);
						$('#id_endline_story_total').prop('disabled',true);
						$('#id_total').prop('disabled',true);
						$('#id_baseline_children').prop('disabled',true);
						$('#id_baseline_reading_beg').prop('disabled',true);
						$('#id_baseline_reading_letter').prop('disabled',true);
						$('#id_baseline_reading_word').prop('disabled',true);
						$('#id_baseline_reading_para').prop('disabled',true);
						$('#id_baseline_reading_story').prop('disabled',true);
						$('#id_baseline_number_beg').prop('disabled',true);
						$('#id_baseline_number_0to9').prop('disabled',true);
						$('#id_baseline_number_10to99').prop('disabled',true);
						$('#id_baseline_add_c').prop('disabled',true);
						$('#id_baseline_add_cn').prop('disabled',true);
						$('#id_baseline_sub_c').prop('disabled',true);
						$('#id_baseline_sub_cn').prop('disabled',true);
						$('#id_endline_children').prop('disabled',true);
						$('#id_endline_reading_beg').prop('disabled',true);
						$('#id_endline_reading_letter').prop('disabled',true);
						$('#id_endline_reading_word').prop('disabled',true);
						$('#id_endline_reading_para').prop('disabled',true);
						$('#id_endline_reading_story').prop('disabled',true);
						$('#id_endline_number_beg').prop('disabled',true);
						$('#id_endline_number_0to9').prop('disabled',true);
						$('#id_endline_number_10to99').prop('disabled',true);
						$('#id_endline_add_c').prop('disabled',true);
						$('#id_endline_add_cn').prop('disabled',true);
						$('#id_endline_sub_c').prop('disabled',true);
						$('#id_endline_sub_cn').prop('disabled',true);
						$('#id_camp1_govtofficials').prop('disabled',true);
						$('#id_camp1_statehead').prop('disabled',true);
						$('#id_camp1_contentsrg').prop('disabled',true);
						$('#id_camp1_bc_drl').prop('disabled',true);
						$('#id_camp1_mmeteam').prop('disabled',true);
						$('#id_camp1_community').prop('disabled',true);
						$('#id_camp1_others').prop('disabled',true);
						$('#id_camp2_govtofficials').prop('disabled',false);
						$('#id_camp2_statehead').prop('disabled',false);
						$('#id_camp2_contentsrg').prop('disabled',false);
						$('#id_camp2_bc_drl').prop('disabled',false);
						$('#id_camp2_mmeteam').prop('disabled',false);
						$('#id_camp2_community').prop('disabled',false);
						$('#id_camp2_others').prop('disabled',false);
						$('#id_camp3_govtofficials').prop('disabled',true);
						$('#id_camp3_statehead').prop('disabled',true);
						$('#id_camp3_contentsrg').prop('disabled',true);
						$('#id_camp3_bc_drl').prop('disabled',true);
						$('#id_camp3_mmeteam').prop('disabled',true);
						$('#id_camp3_community').prop('disabled',true);
						$('#id_camp3_others').prop('disabled',true);
						$('#id_camp4_govtofficials').prop('disabled',true);
						$('#id_camp4_statehead').prop('disabled',true);
						$('#id_camp4_contentsrg').prop('disabled',true);
						$('#id_camp4_bc_drl').prop('disabled',true);
						$('#id_camp4_mmeteam').prop('disabled',true);
						$('#id_camp4_community').prop('disabled',true);
						$('#id_camp4_others').prop('disabled',true);
						$('#id_std3_enroll').prop('disabled',true);
						$('#id_std3_tested').prop('disabled',true);
						$('#id_std3_reading_beg').prop('disabled',true);
						$('#id_std3_reading_letter').prop('disabled',true);
						$('#id_std3_reading_word').prop('disabled',true);
						$('#id_std3_reading_para').prop('disabled',true);
						$('#id_std3_reading_story').prop('disabled',true);
						$('#id_std3_number_beg').prop('disabled',true);
						$('#id_std3_number_09').prop('disabled',true);
						$('#id_std3_number_1099').prop('disabled',true);
						$('#id_std3_number_100999').prop('disabled',true);
						$('#id_std4_enrolled').prop('disabled',true);
						$('#id_std4_tested').prop('disabled',true);
						$('#id_std4_reading_beg').prop('disabled',true);
						$('#id_std4_reading_letter').prop('disabled',true);
						$('#id_std4_reading_word').prop('disabled',true);
						$('#id_std4_reading_para').prop('disabled',true);
						$('#id_std4_reading_story').prop('disabled',true);
						$('#id_std4_number_beg').prop('disabled',true);
						$('#id_std4_number_09').prop('disabled',true);
						$('#id_std4_number_1099').prop('disabled',true);
						$('#id_std4_number_100999').prop('disabled',true);
						$('#id_std5_enrolled').prop('disabled',true);
						$('#id_std5_tested').prop('disabled',true);
						$('#id_std5_reading_beg').prop('disabled',true);
						$('#id_std5_reading_letter').prop('disabled',true);
						$('#id_std5_reading_word').prop('disabled',true);
						$('#id_std5_reading_para').prop('disabled',true);
						$('#id_std5_reading_story').prop('disabled',true);
						$('#id_std5_number_beg').prop('disabled',true);
						$('#id_std5_number_09').prop('disabled',true);
						$('#id_std5_number_1099').prop('disabled',true);
						$('#id_std5_number_100999').prop('disabled',true);
						$('#id_first_baseline_endline1_enrolled').prop('disabled',false);
						$('#id_first_baseline_endline1_tested').prop('disabled',false);
						$('#id_first_baseline_endline1_reading_beg').prop('disabled',false);
						$('#id_first_baseline_endline1_reading_letter').prop('disabled',false);
						$('#id_first_baseline_endline1_reading_word').prop('disabled',false);
						$('#id_first_baseline_endline1_reading_para').prop('disabled',false);
						$('#id_first_baseline_endline1_reading_story').prop('disabled',false);
						$('#id_first_baseline_endline1_number_beg').prop('disabled',false);
						$('#id_first_baseline_endline1_number_09').prop('disabled',false);
						$('#id_first_baseline_endline1_number_1099').prop('disabled',false);
						$('#id_first_baseline_endline1_number_100999').prop('disabled',false);
						$('#id_additional_before_endline2_tested').prop('disabled',false);
						$('#id_additional_before_endline2_reading_beg').prop('disabled',false);
						$('#id_additional_before_endline2_reading_letter').prop('disabled',false);
						$('#id_additional_before_endline2_reading_word').prop('disabled',false);
						$('#id_additional_before_endline2_reading_para').prop('disabled',false);
						$('#id_additional_before_endline2_reading_story').prop('disabled',false);
						$('#id_additional_before_endline2_number_beg').prop('disabled',false);
						$('#id_additional_before_endline2_number_09').prop('disabled',false);
						$('#id_additional_before_endline2_number_1099').prop('disabled',false);
						$('#id_additional_before_endline2_number_100999').prop('disabled',false);
						$('#id_additional_before_endline3_tested').prop('disabled',true);
						$('#id_additional_before_endline3_reading_beg').prop('disabled',true);
						$('#id_additional_before_endline3_reading_letter').prop('disabled',true);
						$('#id_additional_before_endline3_reading_word').prop('disabled',true);
						$('#id_additional_before_endline3_reading_para').prop('disabled',true);
						$('#id_additional_before_endline3_reading_story').prop('disabled',true);
						$('#id_additional_before_endline3_number_beg').prop('disabled',true);
						$('#id_additional_before_endline3_number_09').prop('disabled',true);
						$('#id_additional_before_endline3_number_1099').prop('disabled',true);
						$('#id_additional_before_endline3_number_100999').prop('disabled',true);
						$('#id_additional_before_endline4_tested').prop('disabled',true);
						$('#id_additional_before_endline4_reading_beg').prop('disabled',true);
						$('#id_additional_before_endline4_reading_letter').prop('disabled',true);
						$('#id_additional_before_endline4_reading_word').prop('disabled',true);
						$('#id_additional_before_endline4_reading_para').prop('disabled',true);
						$('#id_additional_before_endline4_reading_story').prop('disabled',true);
						$('#id_additional_before_endline4_number_beg').prop('disabled',true);
						$('#id_additional_before_endline4_number_09').prop('disabled',true);
						$('#id_additional_before_endline4_number_1099').prop('disabled',true);
						$('#id_additional_before_endline4_number_100999').prop('disabled',true);
						$('#id_consolidate_baseline_enroll').prop('disabled',true);
						$('#id_consolidate_baseline_tested').prop('disabled',true);
						$('#id_consolidate_baseline_reading_beg').prop('disabled',true);
						$('#id_consolidate_baseline_reading_letter').prop('disabled',true);
						$('#id_consolidate_baseline_reading_word').prop('disabled',true);
						$('#id_consolidate_baseline_reading_para').prop('disabled',true);
						$('#id_consolidate_baseline_reading_story').prop('disabled',true);
						$('#id_consolidate_baseline_number_beg').prop('disabled',true);
						$('#id_consolidate_baseline_number_09').prop('disabled',true);
						$('#id_consolidate_baseline_number_1099').prop('disabled',true);
						$('#id_consolidate_baseline_number_100999').prop('disabled',true);

		  		    
		  		    }


		  		   if (entered_submissionno == 2 ){
		  		   	$(".c_submission3").css("background-color", "#00b0f0");
		  		   		$("#id_submission1").prop('checked', true);
		  		   		$("#id_submission1").prop('disabled', true);

		  		   		$("#id_submission2").prop('checked', true);
		  		   		$("#id_submission2").prop('disabled', true);

		  		   		$("#id_submission3").prop('checked', false);
		  		   		$("#id_submission3").prop('disabled', false);

		  		   		$("#id_submission4").prop('checked', false);
		  		   		$("#id_submission4").prop('disabled', true);
		  		    	
		  		    //Table 1
						$('#id_campModel').prop('disabled',true);
						$('#id_campPhase').prop('disabled',true);
						$('#id_commonchildren').prop('disabled',true);
						$('#id_disecode').prop('disabled',true);
						$('#id_villagename').prop('disabled',true);
						$('#id_totalTeacher').prop('disabled',true);
						$('#id_classX').prop('disabled',true);
						$('#id_classY').prop('disabled',true);
						$('#id_std3').prop('disabled',true);
						$('#id_std4').prop('disabled',true);
						$('#id_std5').prop('disabled',true);
						$('#id_childrenMale').prop('disabled',true);
						$('#id_childrenFemale').prop('disabled',true);
						$('#id_teachingdays_camp1').prop('disabled',true);
						$('#id_teachingdays_camp2').prop('disabled',true);
						$('#id_teachingdays_camp3').prop('disabled',false);
						$('#id_teachingdays_camp4').prop('disabled',true);
						$('#id_teachingstart_date_camp1').prop('disabled',true);
						$('#id_teachingstart_date_camp2').prop('disabled',true);
						$('#id_teachingstart_date_camp3').prop('disabled',false);
						$('#id_teachingstart_date_camp4').prop('disabled',true);
						$('#id_teachingend_date_camp1').prop('disabled',true);
						$('#id_teachingend_date_camp2').prop('disabled',true);
						$('#id_teachingend_date_camp3').prop('disabled',false);
						$('#id_teachingend_date_camp4').prop('disabled',true);
						$('#id_nameBRGCamp1').prop('disabled',true);
						$('#id_nameBRGCamp2').prop('disabled',true);
						$('#id_nameBRGCamp3').prop('disabled',false);
						$('#id_nameBRGCamp4').prop('disabled',true);
						$('#id_totalchildren_0to20').prop('disabled',true);
						$('#id_totalchildren_21to50').prop('disabled',true);
						$('#id_totalchildren_51to70').prop('disabled',true);
						$('#id_totalchildren_71to100').prop('disabled',true);

					//Table 2
						$('#id_communityMeetings').prop('disabled',true);
						$('#id_noofvisits_camp1').prop('disabled',true);
						$('#id_noofvisits_camp2').prop('disabled',true);
						$('#id_noofvisits_camp3').prop('disabled',false);
						$('#id_noofvisits_camp4').prop('disabled',true);
						$('#id_noofamilymember_camp1').prop('disabled',true);
						$('#id_noofamilymember_camp2').prop('disabled',true);
						$('#id_noofamilymember_camp3').prop('disabled',false);
						$('#id_noofamilymember_camp4').prop('disabled',true);

					//TABLE 4
						$('#id_std3_enroll').prop('disabled',true);
						$('#id_std3_tested').prop('disabled',true);
						$('#id_std3_reading_beg').prop('disabled',true);
						$('#id_std3_reading_letter').prop('disabled',true);
						$('#id_std3_reading_word').prop('disabled',true);
						$('#id_std3_reading_para').prop('disabled',true);
						$('#id_std3_reading_story').prop('disabled',true);
						$('#id_std3_number_beg').prop('disabled',true);
						$('#id_std3_number_09').prop('disabled',true);
						$('#id_std3_number_1099').prop('disabled',true);
						$('#id_std3_number_100999').prop('disabled',true);
						$('#id_std4_enrolled').prop('disabled',true);
						$('#id_std4_tested').prop('disabled',true);
						$('#id_std4_reading_beg').prop('disabled',true);
						$('#id_std4_reading_letter').prop('disabled',true);
						$('#id_std4_reading_word').prop('disabled',true);
						$('#id_std4_reading_para').prop('disabled',true);
						$('#id_std4_reading_story').prop('disabled',true);
						$('#id_std4_number_beg').prop('disabled',true);
						$('#id_std4_number_09').prop('disabled',true);
						$('#id_std4_number_1099').prop('disabled',true);
						$('#id_std4_number_100999').prop('disabled',true);
						$('#id_std5_enrolled').prop('disabled',true);
						$('#id_std5_tested').prop('disabled',true);
						$('#id_std5_reading_beg').prop('disabled',true);
						$('#id_std5_reading_letter').prop('disabled',true);
						$('#id_std5_reading_word').prop('disabled',true);
						$('#id_std5_reading_para').prop('disabled',true);
						$('#id_std5_reading_story').prop('disabled',true);
						$('#id_std5_number_beg').prop('disabled',true);
						$('#id_std5_number_09').prop('disabled',true);
						$('#id_std5_number_1099').prop('disabled',true);
						$('#id_std5_number_100999').prop('disabled',true);
						$('#id_first_baseline_endline1_enrolled').prop('disabled',false);
						$('#id_first_baseline_endline1_tested').prop('disabled',false);
						$('#id_first_baseline_endline1_reading_beg').prop('disabled',false);
						$('#id_first_baseline_endline1_reading_letter').prop('disabled',false);
						$('#id_first_baseline_endline1_reading_word').prop('disabled',false);
						$('#id_first_baseline_endline1_reading_para').prop('disabled',false);
						$('#id_first_baseline_endline1_reading_story').prop('disabled',false);
						$('#id_first_baseline_endline1_number_beg').prop('disabled',false);
						$('#id_first_baseline_endline1_number_09').prop('disabled',false);
						$('#id_first_baseline_endline1_number_1099').prop('disabled',false);
						$('#id_first_baseline_endline1_number_100999').prop('disabled',false);
						$('#id_additional_before_endline2_tested').prop('disabled',true);
						$('#id_additional_before_endline2_reading_beg').prop('disabled',true);
						$('#id_additional_before_endline2_reading_letter').prop('disabled',true);
						$('#id_additional_before_endline2_reading_word').prop('disabled',true);
						$('#id_additional_before_endline2_reading_para').prop('disabled',true);
						$('#id_additional_before_endline2_reading_story').prop('disabled',true);
						$('#id_additional_before_endline2_number_beg').prop('disabled',true);
						$('#id_additional_before_endline2_number_09').prop('disabled',true);
						$('#id_additional_before_endline2_number_1099').prop('disabled',true);
						$('#id_additional_before_endline2_number_100999').prop('disabled',true);
						$('#id_additional_before_endline3_tested').prop('disabled',false);
						$('#id_additional_before_endline3_reading_beg').prop('disabled',false);
						$('#id_additional_before_endline3_reading_letter').prop('disabled',false);
						$('#id_additional_before_endline3_reading_word').prop('disabled',false);
						$('#id_additional_before_endline3_reading_para').prop('disabled',false);
						$('#id_additional_before_endline3_reading_story').prop('disabled',false);
						$('#id_additional_before_endline3_number_beg').prop('disabled',false);
						$('#id_additional_before_endline3_number_09').prop('disabled',false);
						$('#id_additional_before_endline3_number_1099').prop('disabled',false);
						$('#id_additional_before_endline3_number_100999').prop('disabled',false);
						$('#id_additional_before_endline4_tested').prop('disabled',true);
						$('#id_additional_before_endline4_reading_beg').prop('disabled',true);
						$('#id_additional_before_endline4_reading_letter').prop('disabled',true);
						$('#id_additional_before_endline4_reading_word').prop('disabled',true);
						$('#id_additional_before_endline4_reading_para').prop('disabled',true);
						$('#id_additional_before_endline4_reading_story').prop('disabled',true);
						$('#id_additional_before_endline4_number_beg').prop('disabled',true);
						$('#id_additional_before_endline4_number_09').prop('disabled',true);
						$('#id_additional_before_endline4_number_1099').prop('disabled',true);
						$('#id_additional_before_endline4_number_100999').prop('disabled',true);
						$('#id_consolidate_baseline_enroll').prop('disabled',true);
						$('#id_consolidate_baseline_tested').prop('disabled',true);
						$('#id_consolidate_baseline_reading_beg').prop('disabled',true);
						$('#id_consolidate_baseline_reading_letter').prop('disabled',true);
						$('#id_consolidate_baseline_reading_word').prop('disabled',true);
						$('#id_consolidate_baseline_reading_para').prop('disabled',true);
						$('#id_consolidate_baseline_reading_story').prop('disabled',true);
						$('#id_consolidate_baseline_number_beg').prop('disabled',true);
						$('#id_consolidate_baseline_number_09').prop('disabled',true);
						$('#id_consolidate_baseline_number_1099').prop('disabled',true);
						$('#id_consolidate_baseline_number_100999').prop('disabled',true);
					
					//TABLE 5
						$('#id_totaltested_total_tested').prop('disabled',true);
						$('#id_totaltested_reading_beg').prop('disabled',true);
						$('#id_totaltested_reading_letter').prop('disabled',true);
						$('#id_totaltested_reading_word').prop('disabled',true);
						$('#id_totaltested_reading_para').prop('disabled',true);
						$('#id_totaltested_reading_story').prop('disabled',true);
						$('#id_totaltested_number_beg').prop('disabled',true);
						$('#id_totaltested_number_09').prop('disabled',true);
						$('#id_totaltested_number_1099').prop('disabled',true);
						$('#id_totaltested_number_100999').prop('disabled',true);
						$('#id_lc1_endline_totaltested').prop('disabled',true);
						$('#id_lc1_endline_reading_beg').prop('disabled',true);
						$('#id_lc1_endline_reading_letter').prop('disabled',true);
						$('#id_lc1_endline_reading_word').prop('disabled',true);
						$('#id_lc1_endline_reading_para').prop('disabled',true);
						$('#id_lc1_endline_reading_story').prop('disabled',true);
						$('#id_lc1_endline_number_beg').prop('disabled',true);
						$('#id_lc1_endline_number_09').prop('disabled',true);
						$('#id_lc1_endline_number_1099').prop('disabled',true);
						$('#id_lc1_endline_number_100999').prop('disabled',true);
						$('#id_lc1_endline_add_can').prop('disabled',true);
						$('#id_lc1_endline_add_cant').prop('disabled',true);
						$('#id_lc1_endline_sub_can').prop('disabled',true);
						$('#id_lc1_endline_sub_cant').prop('disabled',true);
						$('#id_lc1_endline_mul_can').prop('disabled',true);
						$('#id_lc1_endline_mul_cant').prop('disabled',true);
						$('#id_lc1_endline_div_can').prop('disabled',true);
						$('#id_lc1_endline_div_cant').prop('disabled',true);
						$('#id_lc2_endline_totaltested').prop('disabled',true);
						$('#id_lc2_endline_reading_beg').prop('disabled',true);
						$('#id_lc2_endline_reading_letter').prop('disabled',true);
						$('#id_lc2_endline_reading_word').prop('disabled',true);
						$('#id_lc2_endline_reading_para').prop('disabled',true);
						$('#id_lc2_endline_reading_story').prop('disabled',true);
						$('#id_lc2_endline_number_beg').prop('disabled',true);
						$('#id_lc2_endline_number_09').prop('disabled',true);
						$('#id_lc2_endline_number_1099').prop('disabled',true);
						$('#id_lc2_endline_number_100999').prop('disabled',true);
						$('#id_lc2_endline_add_can').prop('disabled',true);
						$('#id_lc2_endline_add_cant').prop('disabled',true);
						$('#id_lc2_endline_sub_can').prop('disabled',true);
						$('#id_lc2_endline_sub_cant').prop('disabled',true);
						$('#id_lc2_endline_mul_can').prop('disabled',true);
						$('#id_lc2_endline_mul_cant').prop('disabled',true);
						$('#id_lc2_endline_div_can').prop('disabled',true);
						$('#id_lc2_endline_div_cant').prop('disabled',true);
						$('#id_lc3_endline_totaltested').prop('disabled',false);
						$('#id_lc3_endline_reading_beg').prop('disabled',false);
						$('#id_lc3_endline_reading_letter').prop('disabled',false);
						$('#id_lc3_endline_reading_word').prop('disabled',false);
						$('#id_lc3_endline_reading_para').prop('disabled',false);
						$('#id_lc3_endline_reading_story').prop('disabled',false);
						$('#id_lc3_endline_number_beg').prop('disabled',false);
						$('#id_lc3_endline_number_09').prop('disabled',false);
						$('#id_lc3_endline_number_1099').prop('disabled',false);
						$('#id_lc3_endline_number_100999').prop('disabled',false);
						$('#id_lc3_endline_add_can').prop('disabled',false);
						$('#id_lc3_endline_add_cant').prop('disabled',false);
						$('#id_lc3_endline_sub_can').prop('disabled',false);
						$('#id_lc3_endline_sub_cant').prop('disabled',false);
						$('#id_lc3_endline_mul_can').prop('disabled',false);
						$('#id_lc3_endline_mul_cant').prop('disabled',false);
						$('#id_lc3_endline_div_can').prop('disabled',false);
						$('#id_lc3_endline_div_cant').prop('disabled',false);
						$('#id_lc4_endline_totaltested').prop('disabled',true);
						$('#id_lc4_endline_reading_beg').prop('disabled',true);
						$('#id_lc4_endline_reading_letter').prop('disabled',true);
						$('#id_lc4_endline_reading_word').prop('disabled',true);
						$('#id_lc4_endline_reading_para').prop('disabled',true);
						$('#id_lc4_endline_reading_story').prop('disabled',true);
						$('#id_lc4_endline_number_beg').prop('disabled',true);
						$('#id_lc4_endline_number_09').prop('disabled',true);
						$('#id_lc4_endline_number_1099').prop('disabled',true);
						$('#id_lc4_endline_number_100999').prop('disabled',true);
						$('#id_lc4_endline_add_can').prop('disabled',true);
						$('#id_lc4_endline_add_cant').prop('disabled',true);
						$('#id_lc4_endline_sub_can').prop('disabled',true);
						$('#id_lc4_endline_sub_cant').prop('disabled',true);
						$('#id_lc4_endline_mul_can').prop('disabled',true);
						$('#id_lc4_endline_mul_cant').prop('disabled',true);
						$('#id_lc4_endline_div_can').prop('disabled',true);
						$('#id_lc4_endline_div_cant').prop('disabled',true);
						$('#id_cons_endline_totaltested').prop('disabled',true);
						$('#id_cons_endline_reading_beg').prop('disabled',true);
						$('#id_cons_endline_reading_letter').prop('disabled',true);
						$('#id_cons_endline_reading_word').prop('disabled',true);
						$('#id_cons_endline_reading_para').prop('disabled',true);
						$('#id_cons_endline_reading_story').prop('disabled',true);
						$('#id_cons_endline_number_beg').prop('disabled',true);
						$('#id_cons_endline_number_09').prop('disabled',true);
						$('#id_cons_endline_number_1099').prop('disabled',true);
						$('#id_cons_endline_number_100999').prop('disabled',true);
						$('#id_cons_endline_add_can').prop('disabled',true);
						$('#id_cons_endline_add_cant').prop('disabled',true);
						$('#id_cons_endline_sub_can').prop('disabled',true);
						$('#id_cons_endline_sub_cant').prop('disabled',true);
						$('#id_cons_endline_mul_can').prop('disabled',true);
						$('#id_cons_endline_mul_cant').prop('disabled',true);
						$('#id_cons_endline_div_can').prop('disabled',true);
						$('#id_cons_endline_div_cant').prop('disabled',true);

					//TABLE 6
						$('#id_baseline_beg_beg').prop('disabled',true);
						$('#id_baseline_beg_letter').prop('disabled',true);
						$('#id_baseline_beg_word').prop('disabled',true);
						$('#id_baseline_beg_para').prop('disabled',true);
						$('#id_baseline_beg_story').prop('disabled',true);
						$('#id_baseline_beg_total').prop('disabled',true);
						$('#id_baseline_letter_beg').prop('disabled',true);
						$('#id_baseline_letter_letter').prop('disabled',true);
						$('#id_baseline_letter_word').prop('disabled',true);
						$('#id_baseline_letter_para').prop('disabled',true);
						$('#id_baseline_letter_story').prop('disabled',true);
						$('#id_baseline_letter_total').prop('disabled',true);
						$('#id_baseline_word_beg').prop('disabled',true);
						$('#id_baseline_word_letter').prop('disabled',true);
						$('#id_baseline_word_word').prop('disabled',true);
						$('#id_baseline_word_para').prop('disabled',true);
						$('#id_baseline_word_story').prop('disabled',true);
						$('#id_baseline_word_total').prop('disabled',true);
						$('#id_baseline_para_beg').prop('disabled',true);
						$('#id_baseline_para_letter').prop('disabled',true);
						$('#id_baseline_para_word').prop('disabled',true);
						$('#id_baseline_para_para').prop('disabled',true);
						$('#id_baseline_para_story').prop('disabled',true);
						$('#id_baseline_para_total').prop('disabled',true);
						$('#id_baseline_story_beg').prop('disabled',true);
						$('#id_baseline_story_letter').prop('disabled',true);
						$('#id_baseline_story_word').prop('disabled',true);
						$('#id_baseline_story_para').prop('disabled',true);
						$('#id_baseline_story_story').prop('disabled',true);
						$('#id_baseline_story_total').prop('disabled',true);
						$('#id_endline_beg_total').prop('disabled',true);
						$('#id_endline_letter_total').prop('disabled',true);
						$('#id_endline_word_total').prop('disabled',true);
						$('#id_endline_para_total').prop('disabled',true);
						$('#id_endline_story_total').prop('disabled',true);
						$('#id_total').prop('disabled',true);

					//TABLE 7
						$('#id_baseline_children').prop('disabled',true);
						$('#id_baseline_reading_beg').prop('disabled',true);
						$('#id_baseline_reading_letter').prop('disabled',true);
						$('#id_baseline_reading_word').prop('disabled',true);
						$('#id_baseline_reading_para').prop('disabled',true);
						$('#id_baseline_reading_story').prop('disabled',true);
						$('#id_baseline_number_beg').prop('disabled',true);
						$('#id_baseline_number_0to9').prop('disabled',true);
						$('#id_baseline_number_10to99').prop('disabled',true);
						$('#id_baseline_add_c').prop('disabled',true);
						$('#id_baseline_add_cn').prop('disabled',true);
						$('#id_baseline_sub_c').prop('disabled',true);
						$('#id_baseline_sub_cn').prop('disabled',true);
						$('#id_endline_children').prop('disabled',true);
						$('#id_endline_reading_beg').prop('disabled',true);
						$('#id_endline_reading_letter').prop('disabled',true);
						$('#id_endline_reading_word').prop('disabled',true);
						$('#id_endline_reading_para').prop('disabled',true);
						$('#id_endline_reading_story').prop('disabled',true);
						$('#id_endline_number_beg').prop('disabled',true);
						$('#id_endline_number_0to9').prop('disabled',true);
						$('#id_endline_number_10to99').prop('disabled',true);
						$('#id_endline_add_c').prop('disabled',true);
						$('#id_endline_add_cn').prop('disabled',true);
						$('#id_endline_sub_c').prop('disabled',true);
						$('#id_endline_sub_cn').prop('disabled',true);
						
					//TABLE 8
						$('#id_camp1_govtofficials').prop('disabled',true);
						$('#id_camp1_statehead').prop('disabled',true);
						$('#id_camp1_contentsrg').prop('disabled',true);
						$('#id_camp1_bc_drl').prop('disabled',true);
						$('#id_camp1_mmeteam').prop('disabled',true);
						$('#id_camp1_community').prop('disabled',true);
						$('#id_camp1_others').prop('disabled',true);
						$('#id_camp2_govtofficials').prop('disabled',true);
						$('#id_camp2_statehead').prop('disabled',true);
						$('#id_camp2_contentsrg').prop('disabled',true);
						$('#id_camp2_bc_drl').prop('disabled',true);
						$('#id_camp2_mmeteam').prop('disabled',true);
						$('#id_camp2_community').prop('disabled',true);
						$('#id_camp2_others').prop('disabled',true);
						$('#id_camp3_govtofficials').prop('disabled',false);
						$('#id_camp3_statehead').prop('disabled',false);
						$('#id_camp3_contentsrg').prop('disabled',false);
						$('#id_camp3_bc_drl').prop('disabled',false);
						$('#id_camp3_mmeteam').prop('disabled',false);
						$('#id_camp3_community').prop('disabled',false);
						$('#id_camp3_others').prop('disabled',false);
						$('#id_camp4_govtofficials').prop('disabled',true);
						$('#id_camp4_statehead').prop('disabled',true);
						$('#id_camp4_contentsrg').prop('disabled',true);
						$('#id_camp4_bc_drl').prop('disabled',true);
						$('#id_camp4_mmeteam').prop('disabled',true);
						$('#id_camp4_community').prop('disabled',true);
						$('#id_camp4_others').prop('disabled',true);


		  		    }		  		    


		  		   if (entered_submissionno == 3 ){
		  		   	$(".c_submission4").css("background-color", "#00b0f0");
		  		   		$("#id_submission1").prop('checked', true);
		  		   		$("#id_submission1").prop('disabled', true);

		  		   		$("#id_submission2").prop('checked', true);
		  		   		$("#id_submission2").prop('disabled', true);

		  		   		$("#id_submission3").prop('checked', true);
		  		   		$("#id_submission3").prop('disabled', true);

		  		   		$("#id_submission4").prop('checked', false);
		  		   		$("#id_submission4").prop('disabled', false);
		  		   	
		  		   	//Disabled field for camp 3 entries
						$('#id_schoolcode').prop('disabled',false);
						$('#id_campModel').prop('disabled',true);
						$('#id_campPhase').prop('disabled',true);
						$('#id_commonchildren').prop('disabled',true);
						$('#id_disecode').prop('disabled',true);
						$('#id_villagename').prop('disabled',true);
						$('#id_totalTeacher').prop('disabled',true);
						$('#id_classX').prop('disabled',true);
						$('#id_classY').prop('disabled',true);
						$('#id_std3').prop('disabled',true);
						$('#id_std4').prop('disabled',true);
						$('#id_std5').prop('disabled',true);
						$('#id_childrenMale').prop('disabled',true);
						$('#id_childrenFemale').prop('disabled',true);
						$('#id_teachingdays_camp1').prop('disabled',true);
						$('#id_teachingdays_camp2').prop('disabled',true);
						$('#id_teachingdays_camp3').prop('disabled',true);
						$('#id_teachingdays_camp4').prop('disabled',false);
						$('#id_teachingstart_date_camp1').prop('disabled',true);
						$('#id_teachingstart_date_camp2').prop('disabled',true);
						$('#id_teachingstart_date_camp3').prop('disabled',true);
						$('#id_teachingstart_date_camp4').prop('disabled',false);
						$('#id_teachingend_date_camp1').prop('disabled',true);
						$('#id_teachingend_date_camp2').prop('disabled',true);
						$('#id_teachingend_date_camp3').prop('disabled',true);
						$('#id_teachingend_date_camp4').prop('disabled',false);
						$('#id_nameBRGCamp1').prop('disabled',true);
						$('#id_nameBRGCamp2').prop('disabled',true);
						$('#id_nameBRGCamp3').prop('disabled',true);
						$('#id_nameBRGCamp4').prop('disabled',false);
						$('#id_totalchildren_0to20').prop('disabled',true);
						$('#id_totalchildren_21to50').prop('disabled',true);
						$('#id_totalchildren_51to70').prop('disabled',true);
						$('#id_totalchildren_71to100').prop('disabled',true);
						$('#id_communityMeetings').prop('disabled',true);
						$('#id_noofvisits_camp1').prop('disabled',true);
						$('#id_noofvisits_camp2').prop('disabled',true);
						$('#id_noofvisits_camp3').prop('disabled',true);
						$('#id_noofvisits_camp4').prop('disabled',false);
						$('#id_noofamilymember_camp1').prop('disabled',true);
						$('#id_noofamilymember_camp2').prop('disabled',true);
						$('#id_noofamilymember_camp3').prop('disabled',true);
						$('#id_noofamilymember_camp4').prop('disabled',false);
						$('#id_volunteer1_type').prop('disabled',false);
						$('#id_volunteer1_edu').prop('disabled',false);
						$('#id_volunteer1_attendance_camp1').prop('disabled',false);
						$('#id_volunteer1_attendance_camp2').prop('disabled',false);
						$('#id_volunteer1_attendance_camp3').prop('disabled',false);
						$('#id_volunteer1_attendance_camp4').prop('disabled',false);
						$('#id_volunteer2_type').prop('disabled',false);
						$('#id_volunteer2_edu').prop('disabled',false);
						$('#id_volunteer2_attendance_camp1').prop('disabled',false);
						$('#id_volunteer2_attendance_camp2').prop('disabled',false);
						$('#id_volunteer2_attendance_camp3').prop('disabled',false);
						$('#id_volunteer2_attendance_camp4').prop('disabled',false);
						$('#id_volunteer3_type').prop('disabled',false);
						$('#id_volunteer3_edu').prop('disabled',false);
						$('#id_volunteer3_attendance_camp1').prop('disabled',false);
						$('#id_volunteer3_attendance_camp2').prop('disabled',false);
						$('#id_volunteer3_attendance_camp3').prop('disabled',false);
						$('#id_volunteer3_attendance_camp4').prop('disabled',false);
						$('#id_volunteer4_type').prop('disabled',false);
						$('#id_volunteer4_edu').prop('disabled',false);
						$('#id_volunteer4_attendance_camp1').prop('disabled',false);
						$('#id_volunteer4_attendance_camp2').prop('disabled',false);
						$('#id_volunteer4_attendance_camp3').prop('disabled',false);
						$('#id_volunteer4_attendance_camp4').prop('disabled',false);
						$('#id_volunteer5_type').prop('disabled',false);
						$('#id_volunteer5_edu').prop('disabled',false);
						$('#id_volunteer5_attendance_camp1').prop('disabled',false);
						$('#id_volunteer5_attendance_camp2').prop('disabled',false);
						$('#id_volunteer5_attendance_camp3').prop('disabled',false);
						$('#id_volunteer5_attendance_camp4').prop('disabled',false);
						$('#id_volunteer6_type').prop('disabled',false);
						$('#id_volunteer6_edu').prop('disabled',false);
						$('#id_volunteer6_attendance_camp1').prop('disabled',false);
						$('#id_volunteer6_attendance_camp2').prop('disabled',false);
						$('#id_volunteer6_attendance_camp3').prop('disabled',false);
						$('#id_volunteer6_attendance_camp4').prop('disabled',false);
						$('#id_volunteer7_type').prop('disabled',false);
						$('#id_volunteer7_edu').prop('disabled',false);
						$('#id_volunteer7_attendance_camp1').prop('disabled',false);
						$('#id_volunteer7_attendance_camp2').prop('disabled',false);
						$('#id_volunteer7_attendance_camp3').prop('disabled',false);
						$('#id_volunteer7_attendance_camp4').prop('disabled',false);
						$('#id_volunteer8_type').prop('disabled',false);
						$('#id_volunteer8_edu').prop('disabled',false);
						$('#id_volunteer8_attendance_camp1').prop('disabled',false);
						$('#id_volunteer8_attendance_camp2').prop('disabled',false);
						$('#id_volunteer8_attendance_camp3').prop('disabled',false);
						$('#id_volunteer8_attendance_camp4').prop('disabled',false);
						$('#id_volunteer9_type').prop('disabled',false);
						$('#id_volunteer9_edu').prop('disabled',false);
						$('#id_volunteer9_attendance_camp1').prop('disabled',false);
						$('#id_volunteer9_attendance_camp2').prop('disabled',false);
						$('#id_volunteer9_attendance_camp3').prop('disabled',false);
						$('#id_volunteer9_attendance_camp4').prop('disabled',false);
						$('#id_volunteer10_type').prop('disabled',false);
						$('#id_volunteer10_edu').prop('disabled',false);
						$('#id_volunteer10_attendance_camp1').prop('disabled',false);
						$('#id_volunteer10_attendance_camp2').prop('disabled',false);
						$('#id_volunteer10_attendance_camp3').prop('disabled',false);
						$('#id_volunteer10_attendance_camp4').prop('disabled',false);
						$('#id_totaltested_total_tested').prop('disabled',true);
						$('#id_totaltested_reading_beg').prop('disabled',true);
						$('#id_totaltested_reading_letter').prop('disabled',true);
						$('#id_totaltested_reading_word').prop('disabled',true);
						$('#id_totaltested_reading_para').prop('disabled',true);
						$('#id_totaltested_reading_story').prop('disabled',true);
						$('#id_totaltested_number_beg').prop('disabled',true);
						$('#id_totaltested_number_09').prop('disabled',true);
						$('#id_totaltested_number_1099').prop('disabled',true);
						$('#id_totaltested_number_100999').prop('disabled',true);
						$('#id_lc1_endline_totaltested').prop('disabled',true);
						$('#id_lc1_endline_reading_beg').prop('disabled',true);
						$('#id_lc1_endline_reading_letter').prop('disabled',true);
						$('#id_lc1_endline_reading_word').prop('disabled',true);
						$('#id_lc1_endline_reading_para').prop('disabled',true);
						$('#id_lc1_endline_reading_story').prop('disabled',true);
						$('#id_lc1_endline_number_beg').prop('disabled',true);
						$('#id_lc1_endline_number_09').prop('disabled',true);
						$('#id_lc1_endline_number_1099').prop('disabled',true);
						$('#id_lc1_endline_number_100999').prop('disabled',true);
						$('#id_lc1_endline_add_can').prop('disabled',true);
						$('#id_lc1_endline_add_cant').prop('disabled',true);
						$('#id_lc1_endline_sub_can').prop('disabled',true);
						$('#id_lc1_endline_sub_cant').prop('disabled',true);
						$('#id_lc1_endline_mul_can').prop('disabled',true);
						$('#id_lc1_endline_mul_cant').prop('disabled',true);
						$('#id_lc1_endline_div_can').prop('disabled',true);
						$('#id_lc1_endline_div_cant').prop('disabled',true);
						$('#id_lc2_endline_totaltested').prop('disabled',true);
						$('#id_lc2_endline_reading_beg').prop('disabled',true);
						$('#id_lc2_endline_reading_letter').prop('disabled',true);
						$('#id_lc2_endline_reading_word').prop('disabled',true);
						$('#id_lc2_endline_reading_para').prop('disabled',true);
						$('#id_lc2_endline_reading_story').prop('disabled',true);
						$('#id_lc2_endline_number_beg').prop('disabled',true);
						$('#id_lc2_endline_number_09').prop('disabled',true);
						$('#id_lc2_endline_number_1099').prop('disabled',true);
						$('#id_lc2_endline_number_100999').prop('disabled',true);
						$('#id_lc2_endline_add_can').prop('disabled',true);
						$('#id_lc2_endline_add_cant').prop('disabled',true);
						$('#id_lc2_endline_sub_can').prop('disabled',true);
						$('#id_lc2_endline_sub_cant').prop('disabled',true);
						$('#id_lc2_endline_mul_can').prop('disabled',true);
						$('#id_lc2_endline_mul_cant').prop('disabled',true);
						$('#id_lc2_endline_div_can').prop('disabled',true);
						$('#id_lc2_endline_div_cant').prop('disabled',true);
						$('#id_lc3_endline_totaltested').prop('disabled',true);
						$('#id_lc3_endline_reading_beg').prop('disabled',true);
						$('#id_lc3_endline_reading_letter').prop('disabled',true);
						$('#id_lc3_endline_reading_word').prop('disabled',true);
						$('#id_lc3_endline_reading_para').prop('disabled',true);
						$('#id_lc3_endline_reading_story').prop('disabled',true);
						$('#id_lc3_endline_number_beg').prop('disabled',true);
						$('#id_lc3_endline_number_09').prop('disabled',true);
						$('#id_lc3_endline_number_1099').prop('disabled',true);
						$('#id_lc3_endline_number_100999').prop('disabled',true);
						$('#id_lc3_endline_add_can').prop('disabled',true);
						$('#id_lc3_endline_add_cant').prop('disabled',true);
						$('#id_lc3_endline_sub_can').prop('disabled',true);
						$('#id_lc3_endline_sub_cant').prop('disabled',true);
						$('#id_lc3_endline_mul_can').prop('disabled',true);
						$('#id_lc3_endline_mul_cant').prop('disabled',true);
						$('#id_lc3_endline_div_can').prop('disabled',true);
						$('#id_lc3_endline_div_cant').prop('disabled',true);
						$('#id_lc4_endline_totaltested').prop('disabled',false);
						$('#id_lc4_endline_reading_beg').prop('disabled',false);
						$('#id_lc4_endline_reading_letter').prop('disabled',false);
						$('#id_lc4_endline_reading_word').prop('disabled',false);
						$('#id_lc4_endline_reading_para').prop('disabled',false);
						$('#id_lc4_endline_reading_story').prop('disabled',false);
						$('#id_lc4_endline_number_beg').prop('disabled',false);
						$('#id_lc4_endline_number_09').prop('disabled',false);
						$('#id_lc4_endline_number_1099').prop('disabled',false);
						$('#id_lc4_endline_number_100999').prop('disabled',false);
						$('#id_lc4_endline_add_can').prop('disabled',false);
						$('#id_lc4_endline_add_cant').prop('disabled',false);
						$('#id_lc4_endline_sub_can').prop('disabled',false);
						$('#id_lc4_endline_sub_cant').prop('disabled',false);
						$('#id_lc4_endline_mul_can').prop('disabled',false);
						$('#id_lc4_endline_mul_cant').prop('disabled',false);
						$('#id_lc4_endline_div_can').prop('disabled',false);
						$('#id_lc4_endline_div_cant').prop('disabled',false);
						$('#id_cons_endline_totaltested').prop('disabled',true);
						$('#id_cons_endline_reading_beg').prop('disabled',true);
						$('#id_cons_endline_reading_letter').prop('disabled',true);
						$('#id_cons_endline_reading_word').prop('disabled',true);
						$('#id_cons_endline_reading_para').prop('disabled',true);
						$('#id_cons_endline_reading_story').prop('disabled',true);
						$('#id_cons_endline_number_beg').prop('disabled',true);
						$('#id_cons_endline_number_09').prop('disabled',true);
						$('#id_cons_endline_number_1099').prop('disabled',true);
						$('#id_cons_endline_number_100999').prop('disabled',true);
						$('#id_cons_endline_add_can').prop('disabled',true);
						$('#id_cons_endline_add_cant').prop('disabled',true);
						$('#id_cons_endline_sub_can').prop('disabled',true);
						$('#id_cons_endline_sub_cant').prop('disabled',true);
						$('#id_cons_endline_mul_can').prop('disabled',true);
						$('#id_cons_endline_mul_cant').prop('disabled',true);
						$('#id_cons_endline_div_can').prop('disabled',true);
						$('#id_cons_endline_div_cant').prop('disabled',true);
						$('#id_baseline_beg_beg').prop('disabled',false);
						$('#id_baseline_beg_letter').prop('disabled',false);
						$('#id_baseline_beg_word').prop('disabled',false);
						$('#id_baseline_beg_para').prop('disabled',false);
						$('#id_baseline_beg_story').prop('disabled',false);
						$('#id_baseline_beg_total').prop('disabled',false);
						$('#id_baseline_letter_beg').prop('disabled',false);
						$('#id_baseline_letter_letter').prop('disabled',false);
						$('#id_baseline_letter_word').prop('disabled',false);
						$('#id_baseline_letter_para').prop('disabled',false);
						$('#id_baseline_letter_story').prop('disabled',false);
						$('#id_baseline_letter_total').prop('disabled',false);
						$('#id_baseline_word_beg').prop('disabled',false);
						$('#id_baseline_word_letter').prop('disabled',false);
						$('#id_baseline_word_word').prop('disabled',false);
						$('#id_baseline_word_para').prop('disabled',false);
						$('#id_baseline_word_story').prop('disabled',false);
						$('#id_baseline_word_total').prop('disabled',false);
						$('#id_baseline_para_beg').prop('disabled',false);
						$('#id_baseline_para_letter').prop('disabled',false);
						$('#id_baseline_para_word').prop('disabled',false);
						$('#id_baseline_para_para').prop('disabled',false);
						$('#id_baseline_para_story').prop('disabled',false);
						$('#id_baseline_para_total').prop('disabled',false);
						$('#id_baseline_story_beg').prop('disabled',false);
						$('#id_baseline_story_letter').prop('disabled',false);
						$('#id_baseline_story_word').prop('disabled',false);
						$('#id_baseline_story_para').prop('disabled',false);
						$('#id_baseline_story_story').prop('disabled',false);
						$('#id_baseline_story_total').prop('disabled',false);
						$('#id_endline_beg_total').prop('disabled',false);
						$('#id_endline_letter_total').prop('disabled',false);
						$('#id_endline_word_total').prop('disabled',false);
						$('#id_endline_para_total').prop('disabled',false);
						$('#id_endline_story_total').prop('disabled',false);
						$('#id_total').prop('disabled',false);
						$('#id_baseline_children').prop('disabled',false);
						$('#id_baseline_reading_beg').prop('disabled',false);
						$('#id_baseline_reading_letter').prop('disabled',false);
						$('#id_baseline_reading_word').prop('disabled',false);
						$('#id_baseline_reading_para').prop('disabled',false);
						$('#id_baseline_reading_story').prop('disabled',false);
						$('#id_baseline_number_beg').prop('disabled',false);
						$('#id_baseline_number_0to9').prop('disabled',false);
						$('#id_baseline_number_10to99').prop('disabled',false);
						$('#id_baseline_add_c').prop('disabled',false);
						$('#id_baseline_add_cn').prop('disabled',false);
						$('#id_baseline_sub_c').prop('disabled',false);
						$('#id_baseline_sub_cn').prop('disabled',false);
						$('#id_endline_children').prop('disabled',false);
						$('#id_endline_reading_beg').prop('disabled',false);
						$('#id_endline_reading_letter').prop('disabled',false);
						$('#id_endline_reading_word').prop('disabled',false);
						$('#id_endline_reading_para').prop('disabled',false);
						$('#id_endline_reading_story').prop('disabled',false);
						$('#id_endline_number_beg').prop('disabled',false);
						$('#id_endline_number_0to9').prop('disabled',false);
						$('#id_endline_number_10to99').prop('disabled',false);
						$('#id_endline_add_c').prop('disabled',false);
						$('#id_endline_add_cn').prop('disabled',false);
						$('#id_endline_sub_c').prop('disabled',false);
						$('#id_endline_sub_cn').prop('disabled',false);
						$('#id_camp1_govtofficials').prop('disabled',true);
						$('#id_camp1_statehead').prop('disabled',true);
						$('#id_camp1_contentsrg').prop('disabled',true);
						$('#id_camp1_bc_drl').prop('disabled',true);
						$('#id_camp1_mmeteam').prop('disabled',true);
						$('#id_camp1_community').prop('disabled',true);
						$('#id_camp1_others').prop('disabled',true);
						$('#id_camp2_govtofficials').prop('disabled',true);
						$('#id_camp2_statehead').prop('disabled',true);
						$('#id_camp2_contentsrg').prop('disabled',true);
						$('#id_camp2_bc_drl').prop('disabled',true);
						$('#id_camp2_mmeteam').prop('disabled',true);
						$('#id_camp2_community').prop('disabled',true);
						$('#id_camp2_others').prop('disabled',true);
						$('#id_camp3_govtofficials').prop('disabled',true);
						$('#id_camp3_statehead').prop('disabled',true);
						$('#id_camp3_contentsrg').prop('disabled',true);
						$('#id_camp3_bc_drl').prop('disabled',true);
						$('#id_camp3_mmeteam').prop('disabled',true);
						$('#id_camp3_community').prop('disabled',true);
						$('#id_camp3_others').prop('disabled',true);
						$('#id_camp4_govtofficials').prop('disabled',false);
						$('#id_camp4_statehead').prop('disabled',false);
						$('#id_camp4_contentsrg').prop('disabled',false);
						$('#id_camp4_bc_drl').prop('disabled',false);
						$('#id_camp4_mmeteam').prop('disabled',false);
						$('#id_camp4_community').prop('disabled',false);
						$('#id_camp4_others').prop('disabled',false);
						$('#id_std3_enroll').prop('disabled',true);
						$('#id_std3_tested').prop('disabled',true);
						$('#id_std3_reading_beg').prop('disabled',true);
						$('#id_std3_reading_letter').prop('disabled',true);
						$('#id_std3_reading_word').prop('disabled',true);
						$('#id_std3_reading_para').prop('disabled',true);
						$('#id_std3_reading_story').prop('disabled',true);
						$('#id_std3_number_beg').prop('disabled',true);
						$('#id_std3_number_09').prop('disabled',true);
						$('#id_std3_number_1099').prop('disabled',true);
						$('#id_std3_number_100999').prop('disabled',true);
						$('#id_std4_enrolled').prop('disabled',true);
						$('#id_std4_tested').prop('disabled',true);
						$('#id_std4_reading_beg').prop('disabled',true);
						$('#id_std4_reading_letter').prop('disabled',true);
						$('#id_std4_reading_word').prop('disabled',true);
						$('#id_std4_reading_para').prop('disabled',true);
						$('#id_std4_reading_story').prop('disabled',true);
						$('#id_std4_number_beg').prop('disabled',true);
						$('#id_std4_number_09').prop('disabled',true);
						$('#id_std4_number_1099').prop('disabled',true);
						$('#id_std4_number_100999').prop('disabled',true);
						$('#id_std5_enrolled').prop('disabled',true);
						$('#id_std5_tested').prop('disabled',true);
						$('#id_std5_reading_beg').prop('disabled',true);
						$('#id_std5_reading_letter').prop('disabled',true);
						$('#id_std5_reading_word').prop('disabled',true);
						$('#id_std5_reading_para').prop('disabled',true);
						$('#id_std5_reading_story').prop('disabled',true);
						$('#id_std5_number_beg').prop('disabled',true);
						$('#id_std5_number_09').prop('disabled',true);
						$('#id_std5_number_1099').prop('disabled',true);
						$('#id_std5_number_100999').prop('disabled',true);
						$('#id_first_baseline_endline1_enrolled').prop('disabled',false);
						$('#id_first_baseline_endline1_tested').prop('disabled',false);
						$('#id_first_baseline_endline1_reading_beg').prop('disabled',false);
						$('#id_first_baseline_endline1_reading_letter').prop('disabled',false);
						$('#id_first_baseline_endline1_reading_word').prop('disabled',false);
						$('#id_first_baseline_endline1_reading_para').prop('disabled',false);
						$('#id_first_baseline_endline1_reading_story').prop('disabled',false);
						$('#id_first_baseline_endline1_number_beg').prop('disabled',false);
						$('#id_first_baseline_endline1_number_09').prop('disabled',false);
						$('#id_first_baseline_endline1_number_1099').prop('disabled',false);
						$('#id_first_baseline_endline1_number_100999').prop('disabled',false);
						$('#id_additional_before_endline2_tested').prop('disabled',true);
						$('#id_additional_before_endline2_reading_beg').prop('disabled',true);
						$('#id_additional_before_endline2_reading_letter').prop('disabled',true);
						$('#id_additional_before_endline2_reading_word').prop('disabled',true);
						$('#id_additional_before_endline2_reading_para').prop('disabled',true);
						$('#id_additional_before_endline2_reading_story').prop('disabled',true);
						$('#id_additional_before_endline2_number_beg').prop('disabled',true);
						$('#id_additional_before_endline2_number_09').prop('disabled',true);
						$('#id_additional_before_endline2_number_1099').prop('disabled',true);
						$('#id_additional_before_endline2_number_100999').prop('disabled',true);
						$('#id_additional_before_endline3_tested').prop('disabled',true);
						$('#id_additional_before_endline3_reading_beg').prop('disabled',true);
						$('#id_additional_before_endline3_reading_letter').prop('disabled',true);
						$('#id_additional_before_endline3_reading_word').prop('disabled',true);
						$('#id_additional_before_endline3_reading_para').prop('disabled',true);
						$('#id_additional_before_endline3_reading_story').prop('disabled',true);
						$('#id_additional_before_endline3_number_beg').prop('disabled',true);
						$('#id_additional_before_endline3_number_09').prop('disabled',true);
						$('#id_additional_before_endline3_number_1099').prop('disabled',true);
						$('#id_additional_before_endline3_number_100999').prop('disabled',true);
						$('#id_additional_before_endline4_tested').prop('disabled',false);
						$('#id_additional_before_endline4_reading_beg').prop('disabled',false);
						$('#id_additional_before_endline4_reading_letter').prop('disabled',false);
						$('#id_additional_before_endline4_reading_word').prop('disabled',false);
						$('#id_additional_before_endline4_reading_para').prop('disabled',false);
						$('#id_additional_before_endline4_reading_story').prop('disabled',false);
						$('#id_additional_before_endline4_number_beg').prop('disabled',false);
						$('#id_additional_before_endline4_number_09').prop('disabled',false);
						$('#id_additional_before_endline4_number_1099').prop('disabled',false);
						$('#id_additional_before_endline4_number_100999').prop('disabled',false);
						$('#id_consolidate_baseline_enroll').prop('disabled',true);
						$('#id_consolidate_baseline_tested').prop('disabled',true);
						$('#id_consolidate_baseline_reading_beg').prop('disabled',true);
						$('#id_consolidate_baseline_reading_letter').prop('disabled',true);
						$('#id_consolidate_baseline_reading_word').prop('disabled',true);
						$('#id_consolidate_baseline_reading_para').prop('disabled',true);
						$('#id_consolidate_baseline_reading_story').prop('disabled',true);
						$('#id_consolidate_baseline_number_beg').prop('disabled',true);
						$('#id_consolidate_baseline_number_09').prop('disabled',true);
						$('#id_consolidate_baseline_number_1099').prop('disabled',true);
						$('#id_consolidate_baseline_number_100999').prop('disabled',true);

		  		   	}
		            
		  		   if (entered_submissionno == 4 ){
		  		   //	$(".c_submission4").css("background-color", "#00b0f0");
		  		   		$("#id_submission1").prop('checked', true);
		  		   		$("#id_submission1").prop('disabled', true);

		  		   		$("#id_submission2").prop('checked', true);
		  		   		$("#id_submission2").prop('disabled', true);

		  		   		$("#id_submission3").prop('checked', true);
		  		   		$("#id_submission3").prop('disabled', true);

		  		   		$("#id_submission4").prop('checked', true);
		  		   		$("#id_submission4").prop('disabled', true);
		  		   	
		  		   	//DISABLED FIELD
		  		   		$('#id_campModel').prop('disabled',true);
						$('#id_campPhase').prop('disabled',true);
						$('#id_commonchildren').prop('disabled',true);
						$('#id_disecode').prop('disabled',true);
						$('#id_villagename').prop('disabled',true);
						$('#id_totalTeacher').prop('disabled',true);
						$('#id_classX').prop('disabled',true);
						$('#id_classY').prop('disabled',true);
						$('#id_std3').prop('disabled',true);
						$('#id_std4').prop('disabled',true);
						$('#id_std5').prop('disabled',true);
						$('#id_childrenMale').prop('disabled',true);
						$('#id_childrenFemale').prop('disabled',true);
						$('#id_teachingdays_camp1').prop('disabled',true);
						$('#id_teachingdays_camp2').prop('disabled',true);
						$('#id_teachingdays_camp3').prop('disabled',true);
						$('#id_teachingdays_camp4').prop('disabled',true);
						$('#id_teachingstart_date_camp1').prop('disabled',true);
						$('#id_teachingstart_date_camp2').prop('disabled',true);
						$('#id_teachingstart_date_camp3').prop('disabled',true);
						$('#id_teachingstart_date_camp4').prop('disabled',true);
						$('#id_teachingend_date_camp1').prop('disabled',true);
						$('#id_teachingend_date_camp2').prop('disabled',true);
						$('#id_teachingend_date_camp3').prop('disabled',true);
						$('#id_teachingend_date_camp4').prop('disabled',true);
						$('#id_nameBRGCamp1').prop('disabled',true);
						$('#id_nameBRGCamp2').prop('disabled',true);
						$('#id_nameBRGCamp3').prop('disabled',true);
						$('#id_nameBRGCamp4').prop('disabled',true);
						$('#id_totalchildren_0to20').prop('disabled',true);
						$('#id_totalchildren_21to50').prop('disabled',true);
						$('#id_totalchildren_51to70').prop('disabled',true);
						$('#id_totalchildren_71to100').prop('disabled',true);
						$('#id_communityMeetings').prop('disabled',true);
						$('#id_noofvisits_camp1').prop('disabled',true);
						$('#id_noofvisits_camp2').prop('disabled',true);
						$('#id_noofvisits_camp3').prop('disabled',true);
						$('#id_noofvisits_camp4').prop('disabled',true);
						$('#id_noofamilymember_camp1').prop('disabled',true);
						$('#id_noofamilymember_camp2').prop('disabled',true);
						$('#id_noofamilymember_camp3').prop('disabled',true);
						$('#id_noofamilymember_camp4').prop('disabled',true);
						$('#id_volunteer1_type').prop('disabled',true);
						$('#id_volunteer1_edu').prop('disabled',true);
						$('#id_volunteer1_attendance_camp1').prop('disabled',true);
						$('#id_volunteer1_attendance_camp2').prop('disabled',true);
						$('#id_volunteer1_attendance_camp3').prop('disabled',true);
						$('#id_volunteer1_attendance_camp4').prop('disabled',true);
						$('#id_volunteer2_type').prop('disabled',true);
						$('#id_volunteer2_edu').prop('disabled',true);
						$('#id_volunteer2_attendance_camp1').prop('disabled',true);
						$('#id_volunteer2_attendance_camp2').prop('disabled',true);
						$('#id_volunteer2_attendance_camp3').prop('disabled',true);
						$('#id_volunteer2_attendance_camp4').prop('disabled',true);
						$('#id_volunteer3_type').prop('disabled',true);
						$('#id_volunteer3_edu').prop('disabled',true);
						$('#id_volunteer3_attendance_camp1').prop('disabled',true);
						$('#id_volunteer3_attendance_camp2').prop('disabled',true);
						$('#id_volunteer3_attendance_camp3').prop('disabled',true);
						$('#id_volunteer3_attendance_camp4').prop('disabled',true);
						$('#id_volunteer4_type').prop('disabled',true);
						$('#id_volunteer4_edu').prop('disabled',true);
						$('#id_volunteer4_attendance_camp1').prop('disabled',true);
						$('#id_volunteer4_attendance_camp2').prop('disabled',true);
						$('#id_volunteer4_attendance_camp3').prop('disabled',true);
						$('#id_volunteer4_attendance_camp4').prop('disabled',true);
						$('#id_volunteer5_type').prop('disabled',true);
						$('#id_volunteer5_edu').prop('disabled',true);
						$('#id_volunteer5_attendance_camp1').prop('disabled',true);
						$('#id_volunteer5_attendance_camp2').prop('disabled',true);
						$('#id_volunteer5_attendance_camp3').prop('disabled',true);
						$('#id_volunteer5_attendance_camp4').prop('disabled',true);
						$('#id_volunteer6_type').prop('disabled',true);
						$('#id_volunteer6_edu').prop('disabled',true);
						$('#id_volunteer6_attendance_camp1').prop('disabled',true);
						$('#id_volunteer6_attendance_camp2').prop('disabled',true);
						$('#id_volunteer6_attendance_camp3').prop('disabled',true);
						$('#id_volunteer6_attendance_camp4').prop('disabled',true);
						$('#id_volunteer7_type').prop('disabled',true);
						$('#id_volunteer7_edu').prop('disabled',true);
						$('#id_volunteer7_attendance_camp1').prop('disabled',true);
						$('#id_volunteer7_attendance_camp2').prop('disabled',true);
						$('#id_volunteer7_attendance_camp3').prop('disabled',true);
						$('#id_volunteer7_attendance_camp4').prop('disabled',true);
						$('#id_volunteer8_type').prop('disabled',true);
						$('#id_volunteer8_edu').prop('disabled',true);
						$('#id_volunteer8_attendance_camp1').prop('disabled',true);
						$('#id_volunteer8_attendance_camp2').prop('disabled',true);
						$('#id_volunteer8_attendance_camp3').prop('disabled',true);
						$('#id_volunteer8_attendance_camp4').prop('disabled',true);
						$('#id_volunteer9_type').prop('disabled',true);
						$('#id_volunteer9_edu').prop('disabled',true);
						$('#id_volunteer9_attendance_camp1').prop('disabled',true);
						$('#id_volunteer9_attendance_camp2').prop('disabled',true);
						$('#id_volunteer9_attendance_camp3').prop('disabled',true);
						$('#id_volunteer9_attendance_camp4').prop('disabled',true);
						$('#id_volunteer10_type').prop('disabled',true);
						$('#id_volunteer10_edu').prop('disabled',true);
						$('#id_volunteer10_attendance_camp1').prop('disabled',true);
						$('#id_volunteer10_attendance_camp2').prop('disabled',true);
						$('#id_volunteer10_attendance_camp3').prop('disabled',true);
						$('#id_volunteer10_attendance_camp4').prop('disabled',true);
						$('#id_totaltested_total_tested').prop('disabled',true);
						$('#id_totaltested_reading_beg').prop('disabled',true);
						$('#id_totaltested_reading_letter').prop('disabled',true);
						$('#id_totaltested_reading_word').prop('disabled',true);
						$('#id_totaltested_reading_para').prop('disabled',true);
						$('#id_totaltested_reading_story').prop('disabled',true);
						$('#id_totaltested_number_beg').prop('disabled',true);
						$('#id_totaltested_number_09').prop('disabled',true);
						$('#id_totaltested_number_1099').prop('disabled',true);
						$('#id_totaltested_number_100999').prop('disabled',true);
						$('#id_lc1_endline_totaltested').prop('disabled',true);
						$('#id_lc1_endline_reading_beg').prop('disabled',true);
						$('#id_lc1_endline_reading_letter').prop('disabled',true);
						$('#id_lc1_endline_reading_word').prop('disabled',true);
						$('#id_lc1_endline_reading_para').prop('disabled',true);
						$('#id_lc1_endline_reading_story').prop('disabled',true);
						$('#id_lc1_endline_number_beg').prop('disabled',true);
						$('#id_lc1_endline_number_09').prop('disabled',true);
						$('#id_lc1_endline_number_1099').prop('disabled',true);
						$('#id_lc1_endline_number_100999').prop('disabled',true);
						$('#id_lc1_endline_add_can').prop('disabled',true);
						$('#id_lc1_endline_add_cant').prop('disabled',true);
						$('#id_lc1_endline_sub_can').prop('disabled',true);
						$('#id_lc1_endline_sub_cant').prop('disabled',true);
						$('#id_lc1_endline_mul_can').prop('disabled',true);
						$('#id_lc1_endline_mul_cant').prop('disabled',true);
						$('#id_lc1_endline_div_can').prop('disabled',true);
						$('#id_lc1_endline_div_cant').prop('disabled',true);
						$('#id_lc2_endline_totaltested').prop('disabled',true);
						$('#id_lc2_endline_reading_beg').prop('disabled',true);
						$('#id_lc2_endline_reading_letter').prop('disabled',true);
						$('#id_lc2_endline_reading_word').prop('disabled',true);
						$('#id_lc2_endline_reading_para').prop('disabled',true);
						$('#id_lc2_endline_reading_story').prop('disabled',true);
						$('#id_lc2_endline_number_beg').prop('disabled',true);
						$('#id_lc2_endline_number_09').prop('disabled',true);
						$('#id_lc2_endline_number_1099').prop('disabled',true);
						$('#id_lc2_endline_number_100999').prop('disabled',true);
						$('#id_lc2_endline_add_can').prop('disabled',true);
						$('#id_lc2_endline_add_cant').prop('disabled',true);
						$('#id_lc2_endline_sub_can').prop('disabled',true);
						$('#id_lc2_endline_sub_cant').prop('disabled',true);
						$('#id_lc2_endline_mul_can').prop('disabled',true);
						$('#id_lc2_endline_mul_cant').prop('disabled',true);
						$('#id_lc2_endline_div_can').prop('disabled',true);
						$('#id_lc2_endline_div_cant').prop('disabled',true);
						$('#id_lc3_endline_totaltested').prop('disabled',true);
						$('#id_lc3_endline_reading_beg').prop('disabled',true);
						$('#id_lc3_endline_reading_letter').prop('disabled',true);
						$('#id_lc3_endline_reading_word').prop('disabled',true);
						$('#id_lc3_endline_reading_para').prop('disabled',true);
						$('#id_lc3_endline_reading_story').prop('disabled',true);
						$('#id_lc3_endline_number_beg').prop('disabled',true);
						$('#id_lc3_endline_number_09').prop('disabled',true);
						$('#id_lc3_endline_number_1099').prop('disabled',true);
						$('#id_lc3_endline_number_100999').prop('disabled',true);
						$('#id_lc3_endline_add_can').prop('disabled',true);
						$('#id_lc3_endline_add_cant').prop('disabled',true);
						$('#id_lc3_endline_sub_can').prop('disabled',true);
						$('#id_lc3_endline_sub_cant').prop('disabled',true);
						$('#id_lc3_endline_mul_can').prop('disabled',true);
						$('#id_lc3_endline_mul_cant').prop('disabled',true);
						$('#id_lc3_endline_div_can').prop('disabled',true);
						$('#id_lc3_endline_div_cant').prop('disabled',true);
						$('#id_lc4_endline_totaltested').prop('disabled',true);
						$('#id_lc4_endline_reading_beg').prop('disabled',true);
						$('#id_lc4_endline_reading_letter').prop('disabled',true);
						$('#id_lc4_endline_reading_word').prop('disabled',true);
						$('#id_lc4_endline_reading_para').prop('disabled',true);
						$('#id_lc4_endline_reading_story').prop('disabled',true);
						$('#id_lc4_endline_number_beg').prop('disabled',true);
						$('#id_lc4_endline_number_09').prop('disabled',true);
						$('#id_lc4_endline_number_1099').prop('disabled',true);
						$('#id_lc4_endline_number_100999').prop('disabled',true);
						$('#id_lc4_endline_add_can').prop('disabled',true);
						$('#id_lc4_endline_add_cant').prop('disabled',true);
						$('#id_lc4_endline_sub_can').prop('disabled',true);
						$('#id_lc4_endline_sub_cant').prop('disabled',true);
						$('#id_lc4_endline_mul_can').prop('disabled',true);
						$('#id_lc4_endline_mul_cant').prop('disabled',true);
						$('#id_lc4_endline_div_can').prop('disabled',true);
						$('#id_lc4_endline_div_cant').prop('disabled',true);
						$('#id_cons_endline_totaltested').prop('disabled',true);
						$('#id_cons_endline_reading_beg').prop('disabled',true);
						$('#id_cons_endline_reading_letter').prop('disabled',true);
						$('#id_cons_endline_reading_word').prop('disabled',true);
						$('#id_cons_endline_reading_para').prop('disabled',true);
						$('#id_cons_endline_reading_story').prop('disabled',true);
						$('#id_cons_endline_number_beg').prop('disabled',true);
						$('#id_cons_endline_number_09').prop('disabled',true);
						$('#id_cons_endline_number_1099').prop('disabled',true);
						$('#id_cons_endline_number_100999').prop('disabled',true);
						$('#id_cons_endline_add_can').prop('disabled',true);
						$('#id_cons_endline_add_cant').prop('disabled',true);
						$('#id_cons_endline_sub_can').prop('disabled',true);
						$('#id_cons_endline_sub_cant').prop('disabled',true);
						$('#id_cons_endline_mul_can').prop('disabled',true);
						$('#id_cons_endline_mul_cant').prop('disabled',true);
						$('#id_cons_endline_div_can').prop('disabled',true);
						$('#id_cons_endline_div_cant').prop('disabled',true);
						$('#id_baseline_beg_beg').prop('disabled',true);
						$('#id_baseline_beg_letter').prop('disabled',true);
						$('#id_baseline_beg_word').prop('disabled',true);
						$('#id_baseline_beg_para').prop('disabled',true);
						$('#id_baseline_beg_story').prop('disabled',true);
						$('#id_baseline_beg_total').prop('disabled',true);
						$('#id_baseline_letter_beg').prop('disabled',true);
						$('#id_baseline_letter_letter').prop('disabled',true);
						$('#id_baseline_letter_word').prop('disabled',true);
						$('#id_baseline_letter_para').prop('disabled',true);
						$('#id_baseline_letter_story').prop('disabled',true);
						$('#id_baseline_letter_total').prop('disabled',true);
						$('#id_baseline_word_beg').prop('disabled',true);
						$('#id_baseline_word_letter').prop('disabled',true);
						$('#id_baseline_word_word').prop('disabled',true);
						$('#id_baseline_word_para').prop('disabled',true);
						$('#id_baseline_word_story').prop('disabled',true);
						$('#id_baseline_word_total').prop('disabled',true);
						$('#id_baseline_para_beg').prop('disabled',true);
						$('#id_baseline_para_letter').prop('disabled',true);
						$('#id_baseline_para_word').prop('disabled',true);
						$('#id_baseline_para_para').prop('disabled',true);
						$('#id_baseline_para_story').prop('disabled',true);
						$('#id_baseline_para_total').prop('disabled',true);
						$('#id_baseline_story_beg').prop('disabled',true);
						$('#id_baseline_story_letter').prop('disabled',true);
						$('#id_baseline_story_word').prop('disabled',true);
						$('#id_baseline_story_para').prop('disabled',true);
						$('#id_baseline_story_story').prop('disabled',true);
						$('#id_baseline_story_total').prop('disabled',true);
						$('#id_endline_beg_total').prop('disabled',true);
						$('#id_endline_letter_total').prop('disabled',true);
						$('#id_endline_word_total').prop('disabled',true);
						$('#id_endline_para_total').prop('disabled',true);
						$('#id_endline_story_total').prop('disabled',true);
						$('#id_total').prop('disabled',true);
						$('#id_baseline_children').prop('disabled',true);
						$('#id_baseline_reading_beg').prop('disabled',true);
						$('#id_baseline_reading_letter').prop('disabled',true);
						$('#id_baseline_reading_word').prop('disabled',true);
						$('#id_baseline_reading_para').prop('disabled',true);
						$('#id_baseline_reading_story').prop('disabled',true);
						$('#id_baseline_number_beg').prop('disabled',true);
						$('#id_baseline_number_0to9').prop('disabled',true);
						$('#id_baseline_number_10to99').prop('disabled',true);
						$('#id_baseline_add_c').prop('disabled',true);
						$('#id_baseline_add_cn').prop('disabled',true);
						$('#id_baseline_sub_c').prop('disabled',true);
						$('#id_baseline_sub_cn').prop('disabled',true);
						$('#id_endline_children').prop('disabled',true);
						$('#id_endline_reading_beg').prop('disabled',true);
						$('#id_endline_reading_letter').prop('disabled',true);
						$('#id_endline_reading_word').prop('disabled',true);
						$('#id_endline_reading_para').prop('disabled',true);
						$('#id_endline_reading_story').prop('disabled',true);
						$('#id_endline_number_beg').prop('disabled',true);
						$('#id_endline_number_0to9').prop('disabled',true);
						$('#id_endline_number_10to99').prop('disabled',true);
						$('#id_endline_add_c').prop('disabled',true);
						$('#id_endline_add_cn').prop('disabled',true);
						$('#id_endline_sub_c').prop('disabled',true);
						$('#id_endline_sub_cn').prop('disabled',true);
						$('#id_camp1_govtofficials').prop('disabled',true);
						$('#id_camp1_statehead').prop('disabled',true);
						$('#id_camp1_contentsrg').prop('disabled',true);
						$('#id_camp1_bc_drl').prop('disabled',true);
						$('#id_camp1_mmeteam').prop('disabled',true);
						$('#id_camp1_community').prop('disabled',true);
						$('#id_camp1_others').prop('disabled',true);
						$('#id_camp2_govtofficials').prop('disabled',true);
						$('#id_camp2_statehead').prop('disabled',true);
						$('#id_camp2_contentsrg').prop('disabled',true);
						$('#id_camp2_bc_drl').prop('disabled',true);
						$('#id_camp2_mmeteam').prop('disabled',true);
						$('#id_camp2_community').prop('disabled',true);
						$('#id_camp2_others').prop('disabled',true);
						$('#id_camp3_govtofficials').prop('disabled',true);
						$('#id_camp3_statehead').prop('disabled',true);
						$('#id_camp3_contentsrg').prop('disabled',true);
						$('#id_camp3_bc_drl').prop('disabled',true);
						$('#id_camp3_mmeteam').prop('disabled',true);
						$('#id_camp3_community').prop('disabled',true);
						$('#id_camp3_others').prop('disabled',true);
						$('#id_camp4_govtofficials').prop('disabled',true);
						$('#id_camp4_statehead').prop('disabled',true);
						$('#id_camp4_contentsrg').prop('disabled',true);
						$('#id_camp4_bc_drl').prop('disabled',true);
						$('#id_camp4_mmeteam').prop('disabled',true);
						$('#id_camp4_community').prop('disabled',true);
						$('#id_camp4_others').prop('disabled',true);
						$('#id_std3_enroll').prop('disabled',true);
						$('#id_std3_tested').prop('disabled',true);
						$('#id_std3_reading_beg').prop('disabled',true);
						$('#id_std3_reading_letter').prop('disabled',true);
						$('#id_std3_reading_word').prop('disabled',true);
						$('#id_std3_reading_para').prop('disabled',true);
						$('#id_std3_reading_story').prop('disabled',true);
						$('#id_std3_number_beg').prop('disabled',true);
						$('#id_std3_number_09').prop('disabled',true);
						$('#id_std3_number_1099').prop('disabled',true);
						$('#id_std3_number_100999').prop('disabled',true);
						$('#id_std4_enrolled').prop('disabled',true);
						$('#id_std4_tested').prop('disabled',true);
						$('#id_std4_reading_beg').prop('disabled',true);
						$('#id_std4_reading_letter').prop('disabled',true);
						$('#id_std4_reading_word').prop('disabled',true);
						$('#id_std4_reading_para').prop('disabled',true);
						$('#id_std4_reading_story').prop('disabled',true);
						$('#id_std4_number_beg').prop('disabled',true);
						$('#id_std4_number_09').prop('disabled',true);
						$('#id_std4_number_1099').prop('disabled',true);
						$('#id_std4_number_100999').prop('disabled',true);
						$('#id_std5_enrolled').prop('disabled',true);
						$('#id_std5_tested').prop('disabled',true);
						$('#id_std5_reading_beg').prop('disabled',true);
						$('#id_std5_reading_letter').prop('disabled',true);
						$('#id_std5_reading_word').prop('disabled',true);
						$('#id_std5_reading_para').prop('disabled',true);
						$('#id_std5_reading_story').prop('disabled',true);
						$('#id_std5_number_beg').prop('disabled',true);
						$('#id_std5_number_09').prop('disabled',true);
						$('#id_std5_number_1099').prop('disabled',true);
						$('#id_std5_number_100999').prop('disabled',true);
						$('#id_first_baseline_endline1_enrolled').prop('disabled',true);
						$('#id_first_baseline_endline1_tested').prop('disabled',true);
						$('#id_first_baseline_endline1_reading_beg').prop('disabled',true);
						$('#id_first_baseline_endline1_reading_letter').prop('disabled',true);
						$('#id_first_baseline_endline1_reading_word').prop('disabled',true);
						$('#id_first_baseline_endline1_reading_para').prop('disabled',true);
						$('#id_first_baseline_endline1_reading_story').prop('disabled',true);
						$('#id_first_baseline_endline1_number_beg').prop('disabled',true);
						$('#id_first_baseline_endline1_number_09').prop('disabled',true);
						$('#id_first_baseline_endline1_number_1099').prop('disabled',true);
						$('#id_first_baseline_endline1_number_100999').prop('disabled',true);
						$('#id_additional_before_endline2_tested').prop('disabled',true);
						$('#id_additional_before_endline2_reading_beg').prop('disabled',true);
						$('#id_additional_before_endline2_reading_letter').prop('disabled',true);
						$('#id_additional_before_endline2_reading_word').prop('disabled',true);
						$('#id_additional_before_endline2_reading_para').prop('disabled',true);
						$('#id_additional_before_endline2_reading_story').prop('disabled',true);
						$('#id_additional_before_endline2_number_beg').prop('disabled',true);
						$('#id_additional_before_endline2_number_09').prop('disabled',true);
						$('#id_additional_before_endline2_number_1099').prop('disabled',true);
						$('#id_additional_before_endline2_number_100999').prop('disabled',true);
						$('#id_additional_before_endline3_tested').prop('disabled',true);
						$('#id_additional_before_endline3_reading_beg').prop('disabled',true);
						$('#id_additional_before_endline3_reading_letter').prop('disabled',true);
						$('#id_additional_before_endline3_reading_word').prop('disabled',true);
						$('#id_additional_before_endline3_reading_para').prop('disabled',true);
						$('#id_additional_before_endline3_reading_story').prop('disabled',true);
						$('#id_additional_before_endline3_number_beg').prop('disabled',true);
						$('#id_additional_before_endline3_number_09').prop('disabled',true);
						$('#id_additional_before_endline3_number_1099').prop('disabled',true);
						$('#id_additional_before_endline3_number_100999').prop('disabled',true);
						$('#id_additional_before_endline4_tested').prop('disabled',true);
						$('#id_additional_before_endline4_reading_beg').prop('disabled',true);
						$('#id_additional_before_endline4_reading_letter').prop('disabled',true);
						$('#id_additional_before_endline4_reading_word').prop('disabled',true);
						$('#id_additional_before_endline4_reading_para').prop('disabled',true);
						$('#id_additional_before_endline4_reading_story').prop('disabled',true);
						$('#id_additional_before_endline4_number_beg').prop('disabled',true);
						$('#id_additional_before_endline4_number_09').prop('disabled',true);
						$('#id_additional_before_endline4_number_1099').prop('disabled',true);
						$('#id_additional_before_endline4_number_100999').prop('disabled',true);
						$('#id_consolidate_baseline_enroll').prop('disabled',true);
						$('#id_consolidate_baseline_tested').prop('disabled',true);
						$('#id_consolidate_baseline_reading_beg').prop('disabled',true);
						$('#id_consolidate_baseline_reading_letter').prop('disabled',true);
						$('#id_consolidate_baseline_reading_word').prop('disabled',true);
						$('#id_consolidate_baseline_reading_para').prop('disabled',true);
						$('#id_consolidate_baseline_reading_story').prop('disabled',true);
						$('#id_consolidate_baseline_number_beg').prop('disabled',true);
						$('#id_consolidate_baseline_number_09').prop('disabled',true);
						$('#id_consolidate_baseline_number_1099').prop('disabled',true);
						$('#id_consolidate_baseline_number_100999').prop('disabled',true);
		  		   	}

		         	//TABLE 2 - GEETING EXISTING DATA
		            $("#id_communityMeetings").val(table2_response[0][2]); 		
		  		    $("#id_noofvisits_camp1").val(table2_response[0][3]);		  		          
		  		    $("#id_noofvisits_camp2").val(table2_response[0][4]);
		  		    $("#id_noofvisits_camp3").val(table2_response[0][5]);		  		          
		  		    $("#id_noofvisits_camp4").val(table2_response[0][6]);


		            $("#id_noofamilymember_camp1").val(table2_response[0][7]); 		
		  		    $("#id_noofamilymember_camp2").val(table2_response[0][8]);		  		          
		  		    $("#id_noofamilymember_camp3").val(table2_response[0][9]);
		  		    $("#id_noofamilymember_camp4").val(table2_response[0][10]);		  		          

		         	//TABLE 3 - GEETING EXISTING DATA
		            $("#id_communityMeetings").val(table3_response[0][2]); 		
		  		    $("#id_noofvisits_camp1").val(table3_response[0][3]);		  		          
		  		    $("#id_noofvisits_camp2").val(table3_response[0][4]);
		  		    $("#id_noofvisits_camp3").val(table3_response[0][5]);		  		          
		  		    $("#id_noofvisits_camp4").val(table_response[0][6]);


		            $("#id_noofamilymember_camp1").val(table2_response[0][7]); 		
		  		    $("#id_noofamilymember_camp2").val(table2_response[0][8]);		  		          
		  		    $("#id_noofamilymember_camp3").val(table2_response[0][9]);
		  		    $("#id_noofamilymember_camp4").val(table2_response[0][10]);	


				}		            //alert(response);		        
		     });
		//    });
		});

		function getRequestData1(){

	        var requestData1 = { }; 
	        //Fetch table 1 info.

		    requestData1['tbl1Info'] = { };
		    requestData1['tbl1Info']['campno'] = $('#id_submission1').val();
	        requestData1['tbl1Info']['schoolCode'] = $('#id_schoolcode').val();

			return requestData1;
	    }    
	</script>	
	
	<script type="text/javascript"> 
		$(document).ready(function() {

			//Making sure that numeric field accept only numeric values
				jQuery.fn.ForceNumericOnly =
				function()
				{
				    return this.each(function()
				    {
				        $(this).keydown(function(e)
				        {
				            var key = e.charCode || e.keyCode || 0;
				            // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
				            // home, end, period, and numpad decimal
				            return (
				                key == 8 || 
				                key == 9 ||
				                key == 13 ||
				                key == 46 ||
				                key == 110 ||
				                key == 190 ||
				                (key >= 35 && key <= 40) ||
				                (key >= 48 && key <= 57) ||
				                (key >= 96 && key <= 105));
				        });
				    });
				};

			$("#id_totalchildren_71to100").ForceNumericOnly();
			
	        //Click on Save Button
	        $('.save').click(function(e) {
	        	
	        //Checking, Which camp is going to entered
				var submissionno_entered = $('input:checkbox:checked').length;


			//Making sure Submission 2 check box should be checked during camp 2 entry.
				if (submissionno_entered == 0){
					$(".er_checkbox").after('<p> Submission 1 rows check box is not checked</p>');																
					$(".er_submission1").css("background-color", "#FF6347");
				}; 

			//Making sure Submission 2 check box should be checked during camp 2 entry.
				if (submissionno_entered == 1 && ($("#id_submission2").prop('checked') == false)){
					alert('Submission 2 rows');						
					$(".er_submission2").css("background-color", "#FF6347");
				}; 

			//Making sure Submission 3 check box should be checked during camp 3 entry.
				if (submissionno_entered == 2 && ($("#id_submission3").prop('checked') == false)){
					alert('Submission 2 rows');						
					$(".er_submission3").css("background-color", "#FF6347");
				}; 


			//Making sure Submission 4 check box should be checked during camp 4 entry.
				if (submissionno_entered == 2 && ($("#id_submission4").prop('checked') == false)){
					alert('Submission 2 rows');						
					$(".er_submission4").css("background-color", "#FF6347");

				}; 


			//Making sure target childrend and sum of std3, std4 and std4 children are equal
				var std3_children = +$("#id_std3").val();
				var std4_children = +$("#id_std4").val();
				var std5_children = +$("#id_std5").val();

				var total_std3to5 = std3_children + std4_children + std5_children;
				var totalchildren = +$("#id_commonchildren").val();

				var mismatch_children = totalchildren - total_std3to5;

				if (mismatch_children != 0) {

					var t1_error1 = 1;
					$("#id_t1error").after('<p>Number of targeted and Calss wise entered children are not matching</p>');
					$(".er_class").css("background-color", "#FF6347");					
				};

			//Making sure target children and sum of male and female children's number are equal.
				var childrenMale = +$("#id_childrenMale").val();
				var childrenFemale = +$("#id_childrenFemale").val();

				var total_malefemale = childrenMale + childrenFemale;

				var totalchildren = +$("#id_commonchildren").val();
				var mismatch_children = totalchildren - total_malefemale;

				if (mismatch_children != 0) {
					var t1_error2 = 1;
					$("#id_t1error").after('<p>Number of targeted and Calss wise entered children are not matching</p>');
					$(".er_gender").css("background-color", "#FF6347");
				};

			//Making sure target children and number of attendent children are equal.
				var totalchildren_0to20 = +$("#id_totalchildren_0to20").val();
				var totalchildren_21to50 = +$("#id_totalchildren_21to50").val();
				var totalchildren_51to70 = +$("#id_totalchildren_51to70").val();
				var totalchildren_71to100 = +$("#id_totalchildren_71to100").val();

				var total_attendance = totalchildren_0to20 + totalchildren_21to50 + totalchildren_51to70 + totalchildren_71to100;

				var totalchildren = +$("#id_commonchildren").val();
				var mismatch_children = totalchildren - total_attendance;

				if (mismatch_children != 0) {
					var t1_error3 = 1;
					$("#id_t1error").after('<p>Number of targeted and Calss wise entered children are not matching</p>');
					$(".er_attend").css("background-color", "#FF6347");
				};

			//DISE code shouldn't be more or less than 10 digits	
		  		if ($("#id_disecode").val().trim().length != 10) {
		  			var t1_error4 = 1;
					$("#id_t1error").after('<p>Number of targeted and Calss wise entered children are not matching</p>');
					
		  		};

		  		var error = t1_error1 + t1_error2 + t1_error3 ;
		  		if (error > 0 ) {
	  			return;
		  		};

			//[Table 4]	 Tested no of children shouldn't be more than enrolled children for STD 3, STD 4 and STD 5



			//Counting submission no	
				var submissionno = $('input:checkbox:checked').length;
				if (submissionno > 1){
		  		   		

		        	var requestData = getRequestData();
		        	console.log(requestData);

		        	$.ajax({
						url: 'databaseconnection_update.php',
						method:'POST',
						data:requestData,
						dataType:'json',
						success:function(data)
						{
							//alert(data);
							console.log('server response', data);                           
							
						},
						error: function (xhr, ajaxOptions, thrownError) {
							console.log('server error.', thrownError);
						}
					});		  		   		
		  		    
		  		}

			//Counting again Submission no, some how above defined submissionno is not working here so getting submission number again		         
				var submissionno_2 = $('input:checkbox:checked').length;


					if (submissionno_2 < 2){
	  		   		
	  		   		var requestData = getRequestData();
		        	console.log(requestData);

		        	$.ajax({
						url: 'databaseconnection.php',
						method:'POST',
						data:requestData,
						dataType:'json',
						success:function(data)
						{
							//alert(data);
							console.log('server response', data);                           
							
						},
						error: function (xhr, ajaxOptions, thrownError) {
							console.log('server error.', thrownError);
						}
					});	
		  		}
			});
		});

		function getRequestData(){

	        var requestData = { }; 
	        //Fetch table 1 info.
		    
		    requestData['tbl1Info'] = { };


		    requestData['tbl1Info']['campno'] = $('input:checkbox:checked').length;

	        requestData['tbl1Info']['schoolCode'] = $('#id_schoolcode').val();
			requestData['tbl1Info']['campModel'] = $('#id_campModel').val();
			requestData['tbl1Info']['campPhase'] = $('#id_campPhase').val();
			requestData['tbl1Info']['commonChildren'] = $('#id_commonchildren').val();
			requestData['tbl1Info']['diseCode'] = $('#id_disecode').val();
			requestData['tbl1Info']['villageName'] = $('#id_villagename').val();
			requestData['tbl1Info']['totalTeacher'] = $('#id_totalTeacher').val();
			requestData['tbl1Info']['classX'] = $('#id_classX').val();
			requestData['tbl1Info']['classY'] = $('#id_classY').val();
			requestData['tbl1Info']['std3TragetChildren'] = $('#id_std3').val();
			requestData['tbl1Info']['std4TragetChildren'] = $('#id_std4').val();
			requestData['tbl1Info']['std5TragetChildren'] = $('#id_std5').val();
			requestData['tbl1Info']['childrenMale'] = $('#id_childrenMale').val();
			requestData['tbl1Info']['childrenMale'] = $('#id_childrenFemale').val();


			requestData['tbl1Info']['camp1'] = [];
	        requestData['tbl1Info']['camp1'].push({
	        	'teachingDays': $('#id_teachingdays_camp1').val(),
	        	'startdate': $('#id_teachingstart_date_camp1').val(),
	        	'enddate': $('#id_teachingend_date_camp1').val(),
	        	'brgname': $('#id_nameBRGCamp1').val(),
	        });

			requestData['tbl1Info']['camp2'] = [];
	        requestData['tbl1Info']['camp2'].push({
	        	'teachingDays': $('#id_teachingdays_camp2').val(),
	        	'startdate': $('#id_teachingstart_date_camp2').val(),
	        	'enddate': $('#id_teachingend_date_camp1').val(),
	        	'brgname': $('#id_nameBRGCamp2').val(),
	        });

	        requestData['tbl1Info']['camp3'] = [];
			requestData['tbl1Info']['camp3'].push({
	        	'teachingDays': $('#id_teachingdays_camp3').val(),
	        	'startdate': $('#id_teachingstart_date_camp3').val(),
	        	'enddate': $('#id_teachingend_date_camp3').val(),
	        	'brgname': $('#id_nameBRGCamp3').val(),
	        });

			requestData['tbl1Info']['camp4'] = [];
	        requestData['tbl1Info']['camp4'].push({
	        	'teachingDays': $('#id_teachingdays_camp4').val(),
	        	'startdate': $('#id_teachingstart_date_camp4').val(),
	        	'enddate': $('#id_teachingend_date_camp4').val(),
	        	'brgname': $('#id_nameBRGCamp4').val(),
	        });

			requestData['tbl1Info']['attendance0to20'] = $('#id_totalchildren_0to20').val();
			requestData['tbl1Info']['attendance21to50'] = $('#id_totalchildren_21to50').val();
			requestData['tbl1Info']['attendance51to70'] = $('#id_totalchildren_51to70').val();
			requestData['tbl1Info']['attendance71to100'] = $('#id_attendance71to100').val();


			//Fetch table 2 info.
			requestData['tbl2Info'] = { };
			requestData['tbl2Info']['communityMeetings'] = $('#id_communityMeetings').val();

			// Table 2 - Community Engaement Camp1
	        requestData['tbl2Info']['community_engaement_info'] = [];
	        requestData['tbl2Info']['visits'] = []
	        requestData['tbl2Info']['visits'].push({
	        	'cmap1_visit': $('#id_noofvisits_camp1').val(),
	        	'cmap2_visit': $('#id_noofvisits_camp2').val(),
	        	'cmap3_visit': $('#id_noofvisits_camp3').val(),
	        	'cmap4_visit': $('#id_noofvisits_camp4').val(),		        	
	        });
	       
	        requestData['tbl2Info']['awareness'] = []
		    requestData['tbl2Info']['awareness'].push({
	        	'cmap1_awareness': $('#id_noofamilymember_camp1').val(),
	        	'cmap2_awareness': $('#id_noofamilymember_camp2').val(),
	        	'cmap3_awareness': $('#id_noofamilymember_camp3').val(),
	        	'cmap4_awareness': $('#id_noofamilymember_camp4').val(),		        	
	        });


			//Fetch table 3 info.		        
			requestData['tbl3Info'] = { };        
	        //Volunteer 1
	        requestData['tbl3Info']['volunteer1'] = []
	        requestData['tbl3Info']['volunteer1'].push({

				'Type':$('#id_volunteer1_type').val(),
				'Education':$('#id_volunteer1_edu').val(),
				'AttendanceCamp1':$('#id_volunteer1_attendance_camp1').val(),
				'AttendanceCamp2':$('#id_volunteer1_attendance_camp2').val(),
				'AttendanceCamp3':$('#id_volunteer1_attendance_camp3').val(),
				'AttendanceCamp4':$('#id_volunteer1_attendance_camp4').val(),
			});
	    
	        //Volunteer 2
	        requestData['tbl3Info']['volunteer2']=[]
	        requestData['tbl3Info']['volunteer2'].push({

				'Type':$('#id_volunteer2_type').val(),
				'Education':$('#id_volunteer2_edu').val(),
				'AttendanceCamp1':$('#id_volunteer2_attendance_camp1').val(),
				'AttendanceCamp2':$('#id_volunteer2_attendance_camp2').val(),
				'AttendanceCamp3':$('#id_volunteer2_attendance_camp3').val(),
				'AttendanceCamp4':$('#id_volunteer2_attendance_camp4').val(),
			});
	    
	        //Volunteer 3
	        requestData['tbl3Info']['volunteer3']=[]
	        requestData['tbl3Info']['volunteer3'].push({

				'Type':$('#id_volunteer3_type').val(),
				'Education':$('#id_volunteer3_edu').val(),
				'AttendanceCamp1':$('#id_volunteer3_attendance_camp1').val(),
				'AttendanceCamp2':$('#id_volunteer3_attendance_camp2').val(),
				'AttendanceCamp3':$('#id_volunteer3_attendance_camp3').val(),
				'AttendanceCamp4':$('#id_volunteer3_attendance_camp4').val(),
			});
	    
	        //Volunteer 4	
	        requestData['tbl3Info']['volunteer4'] = []		
	        requestData['tbl3Info']['volunteer4'].push({

		        'Type':$('#id_volunteer4_type').val(),
				'Education':$('#id_volunteer4_edu').val(),
				'AttendanceCamp1':$('#id_volunteer4_attendance_camp1').val(),
				'AttendanceCamp2':$('#id_volunteer4_attendance_camp2').val(),
				'AttendanceCamp3':$('#id_volunteer4_attendance_camp3').val(),
				'AttendanceCamp4':$('#id_volunteer4_attendance_camp4').val(),
			});
	        
	        //Volunteer 5
	        requestData['tbl3Info']['volunteer5']= []
	        requestData['tbl3Info']['volunteer5'].push({

				'Type':$('#id_volunteer5_type').val(),
				'Education':$('#id_volunteer5_edu').val(),
				'AttendanceCamp1':$('#id_volunteer5_attendance_camp1').val(),
				'AttendanceCamp2':$('#id_volunteer5_attendance_camp2').val(),
				'AttendanceCamp3':$('#id_volunteer5_attendance_camp3').val(),
				'AttendanceCamp4':$('#id_volunteer5_attendance_camp4').val(),
			});
	        
	        //Volunteer 6
	        requestData['tbl3Info']['volunteer6']=[]
	        requestData['tbl3Info']['volunteer6'].push({

				'Type':$('#id_volunteer6_type').val(),
				'Education':$('#id_volunteer6_edu').val(),
				'AttendanceCamp1':$('#id_volunteer6_attendance_camp1').val(),
				'AttendanceCamp2':$('#id_volunteer6_attendance_camp2').val(),
				'AttendanceCamp3':$('#id_volunteer6_attendance_camp3').val(),
				'AttendanceCamp4':$('#id_volunteer6_attendance_camp4').val(),
			});
	        
	        //Volunteer 7
	        requestData['tbl3Info']['volunteer7']=[]
	        requestData['tbl3Info']['volunteer7'].push({

				'Type':$('#id_volunteer7_type').val(),
				'Education':$('#id_volunteer7_edu').val(),
				'AttendanceCamp1':$('#id_volunteer7_attendance_camp1').val(),
				'AttendanceCamp2':$('#id_volunteer7_attendance_camp2').val(),
				'AttendanceCamp3':$('#id_volunteer7_attendance_camp3').val(),
				'AttendanceCamp4':$('#id_volunteer7_attendance_camp4').val(),
			});
	        
	        //Volunteer 8
	        requestData['tbl3Info']['volunteer8']=[]
	        requestData['tbl3Info']['volunteer8'].push({

				'Type':$('#id_volunteer8_type').val(),
				'Education':$('#id_volunteer8_edu').val(),
				'AttendanceCamp1':$('#id_volunteer8_attendance_camp1').val(),
				'AttendanceCamp2':$('#id_volunteer8_attendance_camp2').val(),
				'AttendanceCamp3':$('#id_volunteer8_attendance_camp3').val(),
				'AttendanceCamp4':$('#id_volunteer8_attendance_camp4').val(),
			});
	        
	        //Volunteer 9
	        requestData['tbl3Info']['volunteer9']=[]

	        requestData['tbl3Info']['volunteer9'].push({

				'Type':$('#id_volunteer9_type').val(),
				'Education':$('#id_volunteer9_edu').val(),
				'AttendanceCamp1':$('#id_volunteer9_attendance_camp1').val(),
				'AttendanceCamp2':$('#id_volunteer9_attendance_camp2').val(),
				'AttendanceCamp3':$('#id_volunteer9_attendance_camp3').val(),
				'AttendanceCamp4':$('#id_volunteer9_attendance_camp4').val(),

			});
	        requestData['tbl3Info']['volunteer10']=[]
	        requestData['tbl3Info']['volunteer10'].push({
	        
	        //Volunteer 10
				'Type':$('#id_volunteer10_type').val(),
				'Education':$('#id_volunteer10_edu').val(),
				'AttendanceCamp1':$('#id_volunteer10_attendance_camp1').val(),
				'AttendanceCamp2':$('#id_volunteer10_attendance_camp2').val(),
				'AttendanceCamp3':$('#id_volunteer10_attendance_camp3').val(),
				'AttendanceCamp4':$('#id_volunteer10_attendance_camp4').val(),
			});

			//Fetch table 4 info.
			requestData['tbl4Info'] = { };
	        requestData['tbl4Info']['std3'] = []		    	
	        requestData['tbl4Info']['std3'].push({

		        'Enrolled':$('#id_std3_enroll').val(),
				'Tested':$('#id_std3_tested').val(),
				'ReadingBG':$('#id_std3_reading_beg').val(),
				'ReadingLT':$('#id_std3_reading_letter').val(),
				'ReadingWD':$('#id_std3_reading_word').val(),
				'ReadingPR':$('#id_std3_reading_para').val(),
				'ReadingSY':$('#id_std3_reading_story').val(),
				'NumberBG':$('#id_std3_number_beg').val(),
				'Number1Digit':$('#id_std3_number_09').val(),
				'Number2Digits':$('#id_std3_number_1099').val(),
				'Number3Digits':$('#id_std3_number_100999').val(),

			});

	       //std 4
	        requestData['tbl4Info']['std4'] = []
	        requestData['tbl4Info']['std4'].push({				
				'Enrolled':$('#id_std4_enrolled').val(),
				'Tested':$('#id_std4_tested').val(),
				'ReadingBG':$('#id_std4_reading_beg').val(),
				'ReadingLT':$('#id_std4_reading_letter').val(),
				'ReadingWD':$('#id_std4_reading_word').val(),
				'ReadingPR':$('#id_std4_reading_para').val(),
				'ReadingSY':$('#id_std4_reading_story').val(),
				'NumberBG':$('#id_std4_number_beg').val(),
				'Number1Digit':$('#id_std4_number_09').val(),
				'Number2Digits':$('#id_std4_number_1099').val(),
				'Number3Digits':$('#id_std4_number_100999').val(),
	        });

	       //std 5
	       	requestData['tbl4Info']['std5'] = []
	        requestData['tbl4Info']['std5'].push({								
				'Enrolled':$('#id_std5_enrolled').val(),
				'Tested':$('#id_std5_tested').val(),
				'ReadingBG':$('#id_std5_reading_beg').val(),
				'ReadingLT':$('#id_std5_reading_letter').val(),
				'ReadingWD':$('#id_std5_reading_word').val(),
				'ReadingPR':$('#id_std5_reading_para').val(),
				'ReadingSY':$('#id_std5_reading_story').val(),
				'NumberBG':$('#id_std5_number_beg').val(),
				'Number1Digit':$('#id_std5_number_09').val(),
				'Number2Digits':$('#id_std5_number_1099').val(),
				'Number3Digits':$('#id_std5_number_100999').val(),
	        });

	       //std BLbeforeEL1
	       	requestData['tbl4Info']['beforeEL1'] = []
	        requestData['tbl4Info']['beforeEL1'].push({								
				'Enrolled':$('#id_first_baseline_endline1_enrolled').val(),
				'Tested':$('#id_first_baseline_endline1_tested').val(),
				'ReadingBG':$('#id_first_baseline_endline1_reading_beg').val(),
				'ReadingLT':$('#id_first_baseline_endline1_reading_letter').val(),
				'ReadingPR':$('#id_first_baseline_endline1_reading_para').val(),
				'ReadingSY':$('#id_first_baseline_endline1_reading_story').val(),
				'NumberBG':$('#id_first_baseline_endline1_number_beg').val(),
				'Number1Digit':$('#id_first_baseline_endline1_number_09').val(),
				'Number2Digits':$('#id_first_baseline_endline1_number_1099').val(),
				'Number3Digits':$('#id_first_baseline_endline1_number_100999').val(),
	        });

	       //std AdditionalChildrenbeforeEL2
	        requestData['tbl4Info']['beforeEL2']= []
	        requestData['tbl4Info']['beforeEL2'].push({								

				'Tested':$('#id_additional_before_endline2_tested').val(),
				'ReadingBG':$('#id_additional_before_endline2_reading_beg').val(),
				'ReadingLT':$('#id_additional_before_endline2_reading_letter').val(),
				'ReadingWD':$('#id_additional_before_endline2_reading_word').val(),
				'ReadingPR':$('#id_additional_before_endline2_reading_para').val(),
				'ReadingSY':$('#id_additional_before_endline2_reading_story').val(),
				'NumberBG':$('#id_additional_before_endline2_number_beg').val(),
				'Number1Digit':$('#id_additional_before_endline2_number_09').val(),
				'Number2Digits':$('#id_additional_before_endline2_number_1099').val(),
				'Number3Digits':$('#id_additional_before_endline2_number_100999').val(),
	       
	        });
	       //std AdditionalChildrenbeforeEL3
	        requestData['tbl4Info']['beforEL3'] =[]
	        requestData['tbl4Info']['beforEL3'].push({								
			
				'Tested':$('#id_additional_before_endline3_tested').val(),
				'ReadingBG':$('#id_additional_before_endline3_reading_beg').val(),
				'ReadingLT':$('#id_additional_before_endline3_reading_letter').val(),
				'ReadingWD':$('#id_additional_before_endline3_reading_word').val(),
				'ReadingPR':$('#id_additional_before_endline3_reading_para').val(),
				'ReadingSY':$('#id_additional_before_endline3_reading_story').val(),
				'NumberBG':$('#id_additional_before_endline3_number_beg').val(),
				'Number1Digit':$('#id_additional_before_endline3_number_09').val(),
				'Number2Digits':$('#id_additional_before_endline3_number_1099').val(),
				'Number3Digits':$('#id_additional_before_endline3_number_100999').val(),
	        });

	       //std AdditionalChildrenbeforeEL4
	        requestData['tbl4Info']['beforEL4'] =[]
	        requestData['tbl4Info']['beforEL4'].push({												

				'Tested':$('#id_additional_before_endline4_tested').val(),
				'ReadingBG':$('#id_additional_before_endline4_reading_beg').val(),
				'ReadingLT':$('#id_additional_before_endline4_reading_letter').val(),
				'ReadingWD':$('#id_additional_before_endline4_reading_word').val(),
				'ReadingPR':$('#id_additional_before_endline4_reading_para').val(),
				'ReadingSY':$('#id_additional_before_endline4_reading_story').val(),
				'NumberBG':$('#id_additional_before_endline4_number_beg').val(),
				'Number1Digit':$('#id_additional_before_endline4_number_09').val(),
				'Number2Digits':$('#id_additional_before_endline4_number_1099').val(),
				'Number3Digits':$('#id_additional_before_endline4_number_100999').val(),
	        });

	       //ConsolidatedBL
	        requestData['tbl4Info']['consolidatedBL']=[]	
	        requestData['tbl4Info']['consolidatedBL'].push({								

				'Enrolled':$('#id_consolidate_baseline_enroll').val(),
				'Tested':$('#id_consolidate_baseline_tested').val(),
				'ReadingBG':$('#id_consolidate_baseline_reading_beg').val(),
				'ReadingLT':$('#id_consolidate_baseline_reading_letter').val(),
				'ReadingWD':$('#id_consolidate_baseline_reading_word').val(),
				'ReadingPR':$('#id_consolidate_baseline_reading_para').val(),
				'ReadingSY':$('#id_consolidate_baseline_reading_story').val(),
				'NumberBG':$('#id_consolidate_baseline_number_beg').val(),
				'Number1Digit':$('#id_consolidate_baseline_number_09').val(),
				'Number2Digits':$('#id_consolidate_baseline_number_1099').val(),
				'Number3Digits':$('#id_consolidate_baseline_number_100999').val(),
					});
	    
	        //Table 5 info
				
			requestData['tbl5Info'] = { };

		    //Baseline
		    requestData['tbl5Info']['baseline'] = []			       
		    requestData['tbl5Info']['baseline'].push({
				'Tested':$('#id_totaltested_total tested').val(),
				'ReadingBG':$('#id_totaltested_reading_beg').val(),
				'ReadingLT':$('#id_totaltested_reading_letter').val(),
				'ReadingWD':$('#id_totaltested_reading_word').val(),
				'ReadingPR':$('#id_totaltested_reading_para').val(),
				'ReadingSY':$('#id_totaltested_reading_story').val(),
				'NumberBG':$('#id_totaltested_number_beg').val(),
				'Number1Digit':$('#id_totaltested_number_09').val(),
				'Number2Digits':$('#id_totaltested_number_1099').val(),
				'Number3Digits':$('#id_totaltested_number_100999').val(),
			});

			//LC1
	        requestData['tbl5Info']['LC1'] =[]
	        requestData['tbl5Info']['LC1'].push({								
			
				'Tested':$('#id_lc1_endline_totaltested').val(),
				'ReadingBG':$('#id_lc1_endline_reading_beg').val(),
				'ReadingLT':$('#id_lc1_endline_reading_letter').val(),
				'ReadingWD':$('#id_lc1_endline_reading_word').val(),
				'ReadingPR':$('#id_lc1_endline_reading_para').val(),
				'ReadingSY':$('#id_lc1_endline_reading_story').val(),
				'NumberBG':$('#id_lc1_endline_number_beg').val(),
				'Number1Digit':$('#id_lc1_endline_number_09').val(),
				'Number2Digits':$('#id_lc1_endline_number_1099').val(),
				'Number3Digits':$('#id_lc1_endline_number_100999').val(),
				'OperationAC':$('#id_lc1_endline_add_can').val(),
				'OperationACN':$('#id_lc1_endline_add_cant').val(),
			
				'OperationSC':$('#id_lc1_endline_sub_can').val(),
				'OperationSCN':$('#id_lc1_endline_sub_cant').val(),
			
				'OperationMC':$('#id_lc1_endline_mul_can').val(),
				'OperationMCN':$('#id_lc1_endline_mul_cant').val(),
				'OperationDC':$('#id_lc1_endline_div_can').val(),
				'OperationDCN':$('#id_lc1_endline_div_cant').val(),
			});
			
			//LC2
	        requestData['tbl5Info']['LC2'] = []
	        requestData['tbl5Info']['LC2'].push({					

				'Tested':$('#id_lc2_endline_totaltested').val(),
				'ReadingBG':$('#id_lc2_endline_reading_beg').val(),
				'ReadingLT':$('#id_lc2_endline_reading_letter').val(),
				'ReadingWD':$('#id_lc2_endline_reading_word').val(),
				'ReadingPR':$('#id_lc2_endline_reading_para').val(),
				'ReadingSY':$('#id_lc2_endline_reading_story').val(),
				'NumberBG':$('#id_lc2_endline_number_beg').val(),
				'Number1Digit':$('#id_lc2_endline_number_09').val(),
				'Number2Digits':$('#id_lc2_endline_number_1099').val(),
				'Number3Digits':$('#id_lc2_endline_number_100999').val(),
				'OperationAC':$('#id_lc2_endline_add_can').val(),
				'OperationACN':$('#id_lc2_endline_add_cant').val(),
				'OperationSC':$('#id_lc2_endline_sub_can').val(),
				'OperationSCN':$('#id_lc2_endline_sub_cant').val(),
				'OperationMC':$('#id_lc2_endline_mul_can').val(),
				'OperationMCN':$('#id_lc2_endline_mul_cant').val(),
				'OperationDC':$('#id_lc2_endline_div_can').val(),
				'OperationDCN':$('#id_lc2_endline_div_cant').val(),
			});

			//LC3
	        requestData['tbl5Info']['LC3'] =[]
	        requestData['tbl5Info']['LC3'].push({					
				'Tested':$('#id_lc3_endline_totaltested').val(),
				'ReadingBG':$('#id_lc3_endline_reading_beg').val(),
				'ReadingLT':$('#id_lc3_endline_reading_letter').val(),
				'ReadingWD':$('#id_lc3_endline_reading_word').val(),
				'ReadingPR':$('#id_lc3_endline_reading_para').val(),
				'ReadingSY':$('#id_lc3_endline_reading_story').val(),
				'NumberBG':$('#id_lc3_endline_number_beg').val(),
				'Number1Digit':$('#id_lc3_endline_number_09').val(),
				'Number2Digits':$('#id_lc3_endline_number_1099').val(),
				'Number3Digits':$('#id_lc3_endline_number_100999').val(),
				'OperationAC':$('#id_lc3_endline_add_can').val(),
				'OperationACN':$('#id_lc3_endline_add_cant').val(),
				'OperationSC':$('#id_lc3_endline_sub_can').val(),
				'OperationSCN':$('#id_lc3_endline_sub_cant').val(),
				'OperationMC':$('#id_lc3_endline_mul_can').val(),
				'OperationMCN':$('#id_lc3_endline_mul_cant').val(),
				'OperationDC':$('#id_lc3_endline_div_can').val(),
				'OperationDCN':$('#id_lc3_endline_div_cant').val(),
			});

			//LC4
			requestData['tbl5Info']['LC4']=[]
	        requestData['tbl5Info']['LC4'].push({					

				'Tested':$('#id_lc4_endline_totaltested').val(),
				'ReadingBG':$('#id_lc4_endline_reading_beg').val(),
				'ReadingLT':$('#id_lc4_endline_reading_letter').val(),
				'ReadingWD':$('#id_lc4_endline_reading_word').val(),
				'ReadingPR':$('#id_lc4_endline_reading_para').val(),
				'ReadingSY':$('#id_lc4_endline_reading_story').val(),
				'NumberBG':$('#id_lc4_endline_number_beg').val(),
				'Number1Digit':$('#id_lc4_endline_number_09').val(),
				'Number2Digits':$('#id_lc4_endline_number_1099').val(),
				'Number3Digits':$('#id_lc4_endline_number_100999').val(),
				'OperationAC':$('#id_lc4_endline_add_can').val(),
				'OperationACN':$('#id_lc4_endline_add_cant').val(),
				'OperationSC':$('#id_lc4_endline_sub_can').val(),
				'OperationSCN':$('#id_lc4_endline_sub_cant').val(),
				'OperationMC':$('#id_lc4_endline_mul_can').val(),
				'OperationMCN':$('#id_lc4_endline_mul_cant').val(),
				'OperationDC':$('#id_lc4_endline_div_can').val(),
				'OperationDCN':$('#id_lc4_endline_div_cant').val(),
			});
			//Cons Endline1
			requestData['tbl5Info']['ConsolidatedEL']=[]
	        requestData['tbl5Info']['ConsolidatedEL'].push({					

				'Tested':$('#id_cons_endline_totaltested').val(),
				'ReadingBG':$('#id_cons_endline_reading_beg').val(),
				'ReadingLT':$('#id_cons_endline_reading_letter').val(),
				'ReadingWD':$('#id_cons_endline_reading_word').val(),
				'ReadingPR':$('#id_cons_endline_reading_para').val(),
				'ReadingSY':$('#id_cons_endline_reading_story').val(),
				'NumberBG':$('#id_cons_endline_number_beg').val(),
				'Number1Digit':$('#id_cons_endline_number_09').val(),
				'Number2Digits':$('#id_cons_endline_number_1099').val(),
				'Number3Digits':$('#id_cons_endline_number_100999').val(),
				'OperationAC':$('#id_cons_endline_add_can').val(),
				'OperationACN':$('#id_cons_endline_add_cant').val(),
				'OperationSC':$('#id_cons_endline_sub_can').val(),
				'OperationSCN':$('#id_cons_endline_sub_cant').val(),
				'OperationMC':$('#id_cons_endline_mul_can').val(),
				'OperationMCN':$('#id_cons_endline_mul_cant').val(),
				'OperationDC':$('#id_cons_endline_div_can').val(),
				'OperationDCN':$('#id_cons_endline_div_cant').val(),
			});

	       //Table 6 info
			
			requestData['tbl6Info'] = { };

			//Beginner
		    requestData['tbl6Info']['beginner'] =[]				
	        requestData['tbl6Info']['beginner'].push({					

				'ReadingBGBG':$('#id_baseline_beg_beg').val(),
				'ReadingBGLT':$('#id_baseline_beg_letter').val(),
				'ReadingBGWD':$('#id_baseline_beg_word').val(),
				'ReadingBGPR':$('#id_baseline_beg_para').val(),
				'ReadingBGSY':$('#id_baseline_beg_story').val(),
				'ReadingBGTotal':$('#id_baseline_beg_total').val(),
			});
			
			//Letter
			requestData['tbl6Info']['letter']=[]
	        requestData['tbl6Info']['letter'].push({									

				'ReadingLTBG':$('#id_baseline_letter_beg').val(),
				'ReadingLTLT':$('#id_baseline_letter_letter').val(),
				'ReadingLTWD':$('#id_baseline_letter_word').val(),
				'ReadingLTPR':$('#id_baseline_letter_para').val(),
				'ReadingLTSY':$('#id_baseline_letter_story').val(),
				'ReadingLTTotal':$('#id_baseline_letter_total').val(),
			});
			
			//Word
			requestData['tbl6Info']['word']=[]
	        requestData['tbl6Info']['word'].push({						

				'ReadingWDBG':$('#id_baseline_word_beg').val(),
				'ReadingWDLT':$('#id_baseline_word_letter').val(),
				'ReadingWDWD':$('#id_baseline_word_word').val(),
				'ReadingWDPR':$('#id_baseline_word_para').val(),
				'ReadingWDSY':$('#id_baseline_word_story').val(),
				'ReadingWDTotal':$('#id_baseline_word_total').val(),
			});
			
			//Para
			requestData['tbl6Info']['para'] =[]
	        requestData['tbl6Info']['para'].push({						


				'ReadingPRBG':$('#id_baseline_para_beg').val(),
				'PRWD':$('#id_baseline_para_letter').val(),
				'ReadingPRLT':$('#id_baseline_para_word').val(),
				'ReadingPRPR':$('#id_baseline_para_para').val(),
				'ReadingPRSY':$('#id_baseline_para_story').val(),
				'ReadingPRTotal':$('#id_baseline_para_total').val(),
			});
			
			//Story
			requestData['tbl6Info']['story']=[]
	        requestData['tbl6Info']['story'].push({						
			
				'ReadingSYBG':$('#id_baseline_story_beg').val(),
				'ReadingSYLT':$('#id_baseline_story_letter').val(),
				'ReadingSYWD':$('#id_baseline_story_word').val(),
				'ReadingSYPR':$('#id_baseline_story_para').val(),
				'ReadingSYSY':$('#id_baseline_story_story').val(),
				'ReadingSYTotal':$('#id_baseline_story_total').val(),
			});
	       

			//Table 7 info
			requestData['tbl7Info'] = { };

			//Baseline
			requestData['tbl7Info']['baseline'] =[]				
	        requestData['tbl7Info']['baseline'].push({

				'no_children':$('#id_baseline_children').val(),
				'reading_beg':$('#id_baseline_reading_beg').val(),
				'reading_letter':$('#id_baseline_reading_letter').val(),
				'reading_word':$('#id_baseline_reading_word').val(),
				'reading_para':$('#id_baseline_reading_para').val(),
				'reading_story':$('#id_baseline_reading_story').val(),
				'number_beg':$('#id_baseline_number_beg').val(),
				'number_0to9':$('#id_baseline_number_0to9').val(),
				'number_10to99':$('#id_baseline_number_10to99').val(),
				'add_c':$('#id_baseline_add_c').val(),
				'add_cn':$('#id_baseline_add_cn').val(),
				'sub_c':$('#id_baseline_sub_c').val(),
				'sub_cn':$('#id_endline_sub_cn').val(),
				
			});

			//Endline
			requestData['tbl7Info']['endline']=[]
	        requestData['tbl7Info']['endline'].push({						
				'no_children':$('#id_endline_children').val(),
				'reading_beg':$('#id_endline_reading_beg').val(),
				'reading_letter':$('#id_endline_reading_letter').val(),
				'reading_word':$('#id_endline_reading_word').val(),
				'reading_para':$('#id_endline_reading_para').val(),
				'reading_story':$('#id_endline_reading_story').val(),
				'number_beg':$('#id_endline_number_beg').val(),
				'number_0to9':$('#id_endline_number_0to9').val(),
				'number_10to99':$('#id_endline_number_10to99').val(),
				'add_c':$('#id_endline_add_c').val(),
				'add_cn':$('#id_endline_add_cn').val(),
				'sub_c':$('#id_endline_sub_c').val(),
				'sub_cn':$('#id_endline_sub_cn').val(),
			});

	        //Table 8 info
			requestData['tbl8Info'] = { };
			
			//Baseline
		    requestData['tbl8Info']['cmap1']=[]			
	        requestData['tbl8Info']['cmap1'].push({

				'GovtOfficials':$('#id_camp1_govtofficials').val(),
				'StateHead':$('#id_camp1_statehead').val(),
				'ContentSRG':$('#id_camp1_contentsrg').val(),
				'BCDRL':$('#id_camp1_bc_drl').val(),
				'MMETeam':$('#id_camp1_mmeteam').val(),
				'Community':$('#id_camp1_community').val(),
				'Others':$('#id_camp1_others').val(),
			});
			
			//cmap2
			requestData['tbl8Info']['camp2']=[]
		    requestData['tbl8Info']['camp2'].push({				
				'GovtOfficials':$('#id_camp2_govtofficials').val(),
				'StateHead':$('#id_camp2_statehead').val(),
				'ContentSRG':$('#id_camp2_contentsrg').val(),
				'BCDRL':$('#id_camp2_bc_drl').val(),
				'MMETeam':$('#id_camp2_mmeteam').val(),
				'Community':$('#id_camp2_community').val(),
				'Others':$('#id_camp2_others').val(),
			});

			//cmap3
			requestData['tbl8Info']['camp3']=[]
		    requestData['tbl8Info']['camp3'].push({				

				'GovtOfficials':$('#id_camp3_govtofficials').val(),
				'StateHead':$('#id_camp3_statehead').val(),
				'ContentSRG':$('#id_camp3_contentsrg').val(),
				'BCDRL':$('#id_camp3_bc_drl').val(),
				'MMETeam':$('#id_camp3_mmeteam').val(),
				'Community':$('#id_camp3_community').val(),
				'Others':$('#id_camp3_others').val(),
			});							
			
			//cmap4
			requestData['tbl8Info']['camp4']=[]
		    requestData['tbl8Info']['camp4'].push({	
				'GovtOfficials':$('#id_camp4_govtofficials').val(),
				'StateHead':$('#id_camp4_statehead').val(),
				'ContentSRG':$('#id_camp4_contentsrg').val(),
				'BCDRL':$('#id_camp4_bc_drl').val(),
				'METeam':$('#id_camp4_mmeteam').val(),
				'Community':$('#id_camp4_community').val(),
				'Others':$('#id_camp4_others').val(),
			});

			return requestData;
		}

	</script>
</body>
</Html>