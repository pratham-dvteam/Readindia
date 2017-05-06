<Html>
	<head>
		<link rel="stylesheet" type = "text/css" href="summary_sheet.css">
		<title>Read India Report Card Data Entry </title>
	
		<!-- jQuery library -->
		<script src="js/jquery-1.11.3.min.js"></script>
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<!-- Latest compiled JavaScript 		
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>		
		<!--Datepicker -->
		<!--
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css">-->
		
	</head>
	<body>
		<!-- <form id = "id_summarysheet" name="summarysheet" method = "post" >-->
		
			<!-- Saave Button-->
			<center> 	<button type="Submit" name="savebutton" id ="id_save" class="Save">Save</button> </center><br />
		
			<center><b>
			<big>[</big>Once data entry is over for the respective Camp, tick the checkbox and click on Save to "Submit" the camp details.<big>]</big></font></b></center>
			<center> 
				<table border="1" cellpadding="3" cellspacing="0">
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
						<td><center><input  class = "optionBox" id="id_submission1" name="" type="checkbox" value="1" /> </center></td>
						<td><center><input class = "optionBox"  id="id_submission2" name="" type="checkbox" value="1" /> </center></td>
						<td><center><input class = "optionBox"  id="id_submission3" name="" type="checkbox" value="1" /> </center></td>
						<td><center><input  class = "optionBox" id="id_submission4" name="" type="checkbox" value="1" /> </center></td>
						<td><center><input  class = "optionBox" sid="id_submitted" name="" type="checkbox" value="1" /> </center></td>
					</tr>
				</table>     
			</center> 
			
			<!-- Table 1 Start from here -->
			<font color="#96763B" face="calibri" size="4.5"><b>TABLE 1: Basic Information</b></font>
			
			<table align="center" border="1px" bordercolor="#538467" cellpadding="2" cellspacing="0" id="" style="border-collapse:collapse;" width="98%">
				<tbody>
				<tr align="center">
					
					<td colspan="4" id="">School Code</td>
					<td colspan="2" style="">
						<label style="font-family:calibri;font-size:17px;font-weight:bold;">
							<input class="submission_1" id="id_schoolcode" maxlength="11" name="schoolCode" size="20" style="width:98px;" type="text"></label></td>
					
					<td id="tb_hd" rowspan="2"> Camp Model  </td>
					<td rowspan="2">
						<select class="submission_1" id="id_campModel" name="campModel" style="width:80px;">
						<option value="">--None--</option>
						<option value="1">1 Camp</option>
						<option value="2">2 Camp</option>
					</td>
					
					<td id="ft" rowspan="2"> Camp Phase number</td>
					<td rowspan="2" style="">
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
					<td colspan="2" rowspan="2"><input class="submission_4" id="id_commonchildren" maxlength="11" name="commonChildren" size="20" style="width:30px;" type="text">  </td>
					 
				</tr>
				
				<tr align="center">
					<td colspan="4" id="tb_hd"> DISE Code</td>
					<td colspan="2" style=""><input class="submission_1" id="id_disecode" maxlength="11" name="diseCode" size="20" style="width:98px;" type="text"></td>
				</tr>
		
				<tr align="center">
					<td colspan="4" id="tb_hd"> Village Name</td>
					<td colspan="2"><input class="submission_1" id="id_villagename" maxlength="11" name="villageName" size="20" style="width:98px;" type="text"></td>
					<td id="" rowspan="2"> No. of Targeted Children </td>
					<td id="">Class 3</td>
					<td id="">Class 4</td>
					<td id="">Class 5</td>
					<td colspan="2" id="" rowspan="2">No. of teachers in school</td>
					
					<!--No. of teachers in school -->
					<td colspan="2" rowspan="2" style="">
						<select class="submission_1" id="id_totalTeacher" name="totalTeacher" style="width:50px;">
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
						<select class="submission_12" id="id_classX" name="classX" style="width:50px;">
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
						<select class="submission_12" id="id_classY" name="classY" style="width:50px;">
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
					<td style=""><font size="2"><input class="submission_12" id="id_std3" name="std3TragetChildren" size="20" style="width:35px;" type="text"> </font></td>	
					
					<!-- No. of Targeted Children - STD 4 -->
					<td style=""><font size="2"><input class="submission_12" id="id_std4" name="std4TragetChildren" size="20" style="width:35px;" type="text"> </font></td>
					
					<!-- No. of Targeted Children - STD 5 -->
					<td style=""><font size="2"><input class="submission_12" id="id_std5" name="std5TragetChildren" size="20" style="width:35px;" type="text"> </font></td>
				</tr>
				
				<tr align="center">    
					<td colspan="4" id="ft">Tot. targeted children *  </td>
					
					<!-- No. of Targeted Children -  MALE-->
					<td style=""><font size="2"><b>M:</b><input class="submission_12" id="id_childrenMale" name="childrenMale" size="20" style="width:35px;" type="text"> </font></td>
					
					<!-- No. of Targeted Children - FEMALE -->
					<td style=""><font size="2"><b>F:</b><input class="submission_12" id="id_childrenFemale" name="" size="20" style="width:35px;" type="text"> </font></td>
					
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
					<td colspan="2" style=""><input class="submission_1" id="id_teachingdays_camp1" name="teachingDaysCamp1" size="20" style="width:50px;" type="text"></td> 
					
					<!--	 Camp 1 Start Date -->
					<td><input class="submission_1" type = "text" id = "id_teachingstart_date_camp1" name ="startDateCamp1"></td>  
					
					<!--	 Camp 1 End date  -->		
					<td><input class="submission_1" type = "text" id = "id_teachingend_date_camp1" name = "endDateCamp1"></td>  
					
					<!-- BRG Name will come form databse -->
					<td colspan="4" style="">
						<select name="" class="submission_1" id ="id_nameBRGCamp1" Name = "nameBRGCamp1" size="1">	
							<option value="">None</option>
							<option value="a0f9000000CCufvAAD"> ............. </option>
						</select>
					</td>
					
					<!--	 Attendance No. of children 0% - 20% -->	
					<td id="">0% - 20%</td>					
					<td colspan="3"><input class="submission_4" id="id_totalchildren_0to20" name="attendance0to20" size="10" style="width:30px;" type="text"> </td>  
				</tr> 
			   
				<tr align="center">     
					<td colspan="2" id="ft">Camp2 </td>
					
					<!--Camp 2 Teaching days -->
					<td colspan="2"> <input class="submission_2" id="id_teachingdays_camp2" name="teachingDaysCamp2" size="20" style="width:50px;" type="text"> </td> 
					
					<!--Camp 2 Teaching Start daate -->			
					<td><input class="submission_2" type = "text" id = "id_teachingstart_date_camp2" name ="startDateCamp2"></td>  
					
					<!--Camp 2 teaching End date -->	
					<td><input class="submission_2" type = "text" id = "id_teachingend_date_camp2" name ="endDateCamp2"></td>  
					<td colspan="4">
						<select name="nameBRGCamp2" id ="id_nameBRGCamp2" class="submission_2" size="1">
							<option value="">None</option>
							<option value="a0f9000000CCufvAAD"> ............. </option>
						</select>
					</td>
					
					<!--Camp 2 Attendance -->
					<td id="">21% - 50%</td> 				
					<td colspan="3"><input class="submission_4" id="id_totalchildren_21to50" name="attendance21to50" size="10" style="width:30px;" type="text"></td>				 
				</tr> 
				
				<tr align="center">     
					<td colspan="2" id="ft">Camp3 </td>
					
					<!--Camp 3 Teaching days -->
					<td colspan="2"><input class="submission_3" id="id_teachingdays_camp3" name="teachingDaysCamp3" size="20" style="width:50px;" type="text"></td>
					
					<!--Camp 3 Teaching Start Date -->				
					<td><input class="submission_3" type = "text" id = "id_teachingstart_date_camp3" name = "startDateCamp3" > </td>  
					
					<!--Camp 3 Teaching End Date -->				
					<td><input class="submission_3" type = "text" id = "id_teachingstart_date_camp3" name "endDateCamp3"></td>  				
					<td colspan="4">
						<select name="nameBRGCamp3" id="id_nameBRGCamp3" class="submission_3" size="1">	
							<option value="">None</option>
							<option value="a0f9000000CCufvAAD"> ............. </option>
						</select>	
					</td> 	
					
					<!--Camp 3 Attendance -->
					<td id="">51% - 70%</td>  					 
					<td colspan="3"><input class="submission_4" id="id_totalchildren_51to70" name="attendance51to70" size="10" style="width:30px;" type="text"></td>  					
				</tr> 
				
			   <tr align="center">     
					<!--Camp 4 Teaching days -->
					<td colspan="2" id="">Camp4 </td>
					<td colspan="2"> <input class="submission_4" id="id_teachingdays_camp4" name="teachingDaysCamp4" size="20" style="width:50px;" type="text"></td> 

					<!--Camp 4 Start Date -->
					<td><input class="submission_4" type = "text" id = "id_teachingstart_date_camp4" name ="startDateCamp4"></td> 
					
					<!--Camp 4 End Date-->
					<td><input class="submission_4" type = "text" id = "id_teachingend_date_camp4" name = "endDateCamp4"></td> 
					<td colspan="4"> <select name="nameBRGCamp4" id = "id_nameBRGCamp4" class="submission_4" size="1">
						<option value="">None</option>
						<option value="a0f9000000CCufvAAD"> ............. </option>
					</td>								    
					
					<!--Camp 4 Attendance -->
					<td id="">71% - 100%</td>  				
					<td colspan="3"><input class="submission_4" id="id_attendance71to100" name="attendance71to100" size="10" style="width:30px;" type="text"></td>
				
				<br><br><br><br><br>
				
				<!-- Table 2 start from here --->			
				<table border="0" width="100%"> <tbody>
					<tr>
						<td valign="top" width="40%"><div class="apexp"><div class="individualPalette"><div class="Custom92Block"><div id="" class="bPageBlock brandSecondaryBrd apexDefaultPageBlock secondaryPalette"><div class="pbHeader"><font color="#96763B" face="calibri" size="4.5"><b>TABLE 2: MISC INFORMATION</b></font></div><div class="pbBody">           
							<table align="left" border="1px" bordercolor="#538467" cellpadding="2" cellspacing="0" id="table2" style="border-collapse:collapse;" width="90%">
								<tbody>
								<tr align="center">
									<td colspan="5" id="ft">Community Engagement Information (to be filled at the end of all camps from the Community Engagement sheet)</td>
								</tr>
								 
								<tr align="center">
									<!--Total no. of community meetings held in the village -->
									<td id="" width="51%">Total no. of community meetings held in the village</td>
									<td colspan="4" id="ft" width="10%"><input class="submission_4" id="id_communityMeetings" name="communityMeetings" size="20" style="width:50px;" type="text"></td>	
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
									<td width="10%" style=""><input class="submission_1" id="id_noofvisits_camp1" name="visitNumberCamp1" size="20" style="width:35px;" type="text"></td>
									<td width="11%"><input class="submission_2" id="id_noofvisits_camp2" name="visitNumberCamp2" size="20" style="width:35px;" type="text"></td>
									<td width="13%"><input class="submission_3" id="id_noofvisits_camp3" name="visitNumberCamp3" size="20" style="width:35px;" type="text"></td>
									<td width="10%"><input class="submission_4" id="id_noofvisits_camp4" name="visitNumberCamp4" size="20" style="width:35px;" type="text"></td>
								</tr>
								
								<!-- Family Member Aware of Program -->
								<tr align="center">
									<td id="" width="49%"> No. of family members who were aware of the learning level</td>
									<td width="10%" style=""><input class="submission_1" id="id_noofamilymember_camp1" name="familyAwarenessCamp1" size="20" style="width:35px;" type="text"></td>								
									<td width="11%"><input class="submission_2" id="id_noofamilymember_camp2" name="familyAwarenessCamp2" size="20" style="width:35px;" type="text"></td>								
									<td width="13%"><input class="submission_3" id="id_noofamilymember_camp3" name="familyAwarenessCamp3" size="20" style="width:35px;" type="text"></td>								
									<td width="10%"><input class="submission_4" id="id_noofamilymember_camp4" name="familyAwarenessCamp4" size="20" style="width:35px;" type="text"></td>								
								</tr> </tbody>
							</table>
						</td>
				 
					 <!-- Table 3 start from here -->
						<td valign="top" width="40%"><font color="#96763B" face="calibri" size="4.5"><b>TABLE 3: VOLUNTEER/TEACHER INFORMATION</b></font></div><div class="pbBody">
							<table class="" id="" align="right" border="1px" bordercolor="#538467" cellpadding="2" cellspacing="0" style="border-collapse:collapse;">
								<!-- Headings of table 3 -->
								<tr align="center">
									<td id="" rowspan="2" width="10%">Volunteer/<br>Teacher number</td>
									<td id="" rowspan="2" width="14%">Type<br> 1-Volunteer<br> 2-Teacher</td>
									<td id="" rowspan="2" width="21%">  Highest Education<br>
										1-Not 10th pass<br>
										2-10th pass<br>
										3-12th pass<br>
										4-Graduate<br>
										5-Post graduate</td>
									<td colspan="4" id="ft" width="16%">Attendance</td>
								</tr>
								
								<tr> 
									<td align="center" id="" width="4%">Camp<br>1</td>
									<td align="center" id="" width="4%">Camp<br>2</td>
									<td align="center" id="" width="4%">Camp<br>3</td>
									<td align="center" id="" width="4%">Camp<br>4</td>
								</tr>
								
								<tr>							
									<td class="  " id="" colspan="1"></td>
								</tr>
								
								
								<tr>
									<!-- 1st Volunteer -->
									<td align="center" width="3%"><b>V/T 1</b></td>
									<!-- 1st Volunteer Type -->
									<td width="61%">
										<select id="id_volunteer1_type" name="volunteer1Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select></td>
									
									<!-- 1st Volunteer Highest edu -->									
									<td width="32%">
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
									<td width="32%" style=""><input class="submission_1" id="id_volunteer1_attendance_camp1" name="volunteer1AttendanceCamp1" size="20" style="width:35px;" type="text"> </td>									
									<td width="32%"><input class="submission_2" id="id_volunteer1_attendance_camp2" name="volunteer1AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									</td>
									<td width="32%"><input class="submission_3" id="id_volunteer1_attendance_camp3" name="volunteer1AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									</td>
									<td width="32%"><input class="submission_4" id="id_volunteer1_attendance_camp4" name="volunteer1AttendanceCamp4" size="20" style="width:35px;" type="text"></td>									</td>
								</tr>
								
								<tr>
									<td class="dataCell" id="" colspan="1"></td>
								</tr>
								
								<tr>
									<!-- 2nd Volunteer -->
									<td align="center" width="3%"><b>V/T 2</b></td>
									
									<!-- 2nd Volunteer Type -->
									<td width="61%">
										<select id="id_volunteer2_type" name="volunteer2Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select>
									</td>
									
									<!-- 2nd Volunteer Highest edu -->
									<td width="32%">
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
									<td width="32%" style=""><input class="submission_1" id="id_volunteer2_attendance_camp1" name="volunteer2AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_2" id="id_volunteer2_attendance_camp2" name="volunteer2AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_3" id="id_volunteer2_attendance_camp3" name="volunteer2AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_4" id="id_volunteer2_attendance_camp4" name="volunteer2AttendanceCamp4" size="20" style="width:35px;" type="text"></td>									
								</tr>
								
								<tr>
									<!-- 3rd Volunteer -->
									<td align="center" width="3%"><b>V/T 3</b></td>
									
									<!-- 3rd Volunteer Type -->
									<td width="61%">
										<select id="id_volunteer3_type" name="" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select>
									</td>
									
									<!-- 3rd Volunteer Highest edu -->
									<td width="32%">
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
									<td width="32%" style=""><input class="submission_1" id="id_volunteer3_attendance_camp1" name="volunteer3Education" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_2" id="id_volunteer3_attendance_camp2" name="volunteer3AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									</td>
									<td width="32%"><input class="submission_3" id="id_volunteer3_attendance_camp3" name="volunteer3AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									</td>
									<td width="32%"><input class="submission_4" id="id_volunteer3_attendance_camp4" name="volunteer3AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									</td>
								</tr>
								
								<tr>
									<!-- 4th Volunteer -->
									<td align="center" width="3%"><b>V/T 4</b></td>
									
									<!-- 4th Volunteer Type -->
									<td width="61%">
										<select id="id_volunteer4_type" name="volunteer4Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select></td>
										
									<!-- 4th Volunteer Highest edu -->			
									<td width="32%">
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
									<td width="32%" style=""><input class="submission_1" id="id_volunteer4_attendance_camp1" name="volunteer4AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_2" id="id_volunteer4_attendance_camp2" name="volunteer4AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_3" id="id_volunteer4_attendance_camp3" name="volunteer4AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_4" id="id_volunteer4_attendance_camp4" name="volunteer4AttendanceCamp4" size="20" style="width:35px;" type="text"></td>									
								</tr>							

								<tr>
									<!-- 5th Volunteer -->
									<td align="center" width="3%"><b>V/T 5</b></td>
									
									<!-- 5th Volunteer Type -->
									<td width="61%">
										<select id="id_volunteer5_type" name="volunteer5Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select>
									</td>

									<!-- 5th Volunteer Highest edu -->
									<td width="32%">
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
									<td width="32%" style=""><input class="submission_1" id="id_volunteer5_attendance_camp1" name="volunteer5AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_2" id="id_volunteer5_attendance_camp2" name="volunteer5AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_3" id="id_volunteer5_attendance_camp3" name="volunteer5AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_4" id="id_volunteer5_attendance_camp4" name="volunteer5AttendanceCamp4" size="20" style="width:35px;" type="text"></td>									
								</tr>							

								<tr>
									<!-- 6th Volunteer -->
									<td align="center" width="3%"><b>V/T 6</b></td>
									
									<!-- 6th Volunteer Type -->
									<td width="61%">
										<select id="id_volunteer6_type" name="volunteer6Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select>
									</td>
									
									<!-- 6th Volunteer Highest edu -->			
									<td width="32%">
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
									<td width="32%" style=""><input class="submission_1" id="id_volunteer6_attendance_camp1" name="volunteer6AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_2" id="id_volunteer6_attendance_camp2" name="volunteer6AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_3" id="id_volunteer6_attendance_camp3" name="volunteer6AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_4" id="id_volunteer6_attendance_camp4" name="volunteer6AttendanceCamp4" size="20" style="width:35px;" type="text"></td>									
								</tr>
								
								<tr>
									<!-- 7th Volunteer -->
									<td align="center" width="3%"><b>V/T 7</b></td>
									
									<!-- 7th Volunteer Type -->
									<td width="61%">
										<select id="id_volunteer7_type" name="volunteer7Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select>
									</td>
									
									<!-- 7th Volunteer Highest edu -->	
									<td width="32%">
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
									<td width="32%" style=""><input class="submission_1" id="id_volunteer7_attendance_camp1" name="volunteer7AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_2" id="id_volunteer7_attendance_camp2" name="volunteer7AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_3" id="id_volunteer7_attendance_camp3" name="volunteer7AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_4" id="id_volunteer7_attendance_camp4" name="volunteer7AttendanceCamp4" size="20" style="width:35px;" type="text"></td>									
								</tr>
								
								<tr>
								
									<!-- 8th Volunteer -->
									<td align="center" width="3%"><b>V/T 8</b></td>
									
									<!-- 8th Volunteer Type -->
									<td width="61%">
										<select id="id_volunteer8_type" name="volunteer8Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select>
									</td>
									
									<!-- 8th Volunteer Highest edu -->	
									<td width="32%">
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
									<td width="32%" style=""><input class="submission_1" id="id_volunteer8_attendance_camp1" name="volunteer8AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_2" id="id_volunteer8_attendance_camp2" name="volunteer8AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_3" id="id_volunteer8_attendance_camp3" name="volunteer8AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_4" id="id_volunteer8_attendance_camp4" name="volunteer8AttendanceCamp4" size="20" style="width:35px;" type="text"></td>									
								</tr>
								
								<tr>
									<!-- 9th Volunteer -->
									<td align="center" width="3%"><b>V/T 9</b></td>
									
									<!-- 9th Volunteer Type -->
									<td width="61%">
										<select id="id_volunteer9_type" name="volunteer9Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select>
									</td>
									
									<!-- 9th Volunteer Highest edu -->
									<td width="32%">
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
									<td width="32%" style=""><input class="submission_1" id="id_volunteer9_attendance_camp1" name="volunteer9AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_2" id="id_volunteer9_attendance_camp2" name="volunteer9AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_3" id="id_volunteer9_attendance_camp3" name="volunteer9AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_4" id="id_volunteer9_attendance_camp4" name="volunteer9AttendanceCamp4" size="20" style="width:35px;" type="text"></td>								
								</tr>
								
								<tr>
									<!-- 10th Volunteer -->
									<td align="center" width="3%"><b>V/T 10</b></td>
									
									<!-- 10th Volunteer Type -->
									<td width="61%">
										<select id="id_volunteer10_type" name="volunteer10Type" style="width:90px;">
											<option value="">--None--</option>
											<option value="Volunteer">Volunteer</option>
											<option value="Teacher">Teacher</option>
										</select>
									</td>
									
									<!-- 10th Volunteer Highest edu -->			
									<td width="32%">
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
									<td width="32%" style=""><input class="submission_1" id="id_volunteer10_attendance_camp1" name="volunteer10AttendanceCamp1" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_2" id="id_volunteer10_attendance_camp2" name="volunteer10AttendanceCamp2" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_3" id="id_volunteer10_attendance_camp3" name="volunteer10AttendanceCamp3" size="20" style="width:35px;" type="text"></td>									
									<td width="32%"><input class="submission_4" id="id_volunteer10_attendance_camp4" name="volunteer10AttendanceCamp4" size="20" style="width:35px;" type="text"></td>									
								</tr>						 	
							</table>		
						</td>							  	
					</tr>	   
				</table>	 				

				<!--    Table 4 Start from here ---->
				<br><br>
				<font color="#96763B" face="calibri" size="4.5"><b>TABLE 4: BASELINE ASSESSMENT (To be filled from "UNIVERSAL CHILD LIST")</b></font>
				<table border="1px" bordercolor="#538467" cellpadding="2" cellspacing="0" style="border-collapse:collapse;" width="100%">   
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
						<td height="26" width="9%" style=""><input class="submission_1" id="id_std3_enroll" name="std3Enrolled" size="10" style="width:20px;" type="text">  </td>
						
						<!--  Table 4 - for STD 3 - Tested -->
						<td height="26" width="6%" style=""><input class="submission_1" id="id_std3_tested" name="std3Tested" size="10" style="width:20px;" type="text"></td>
						
						<!--  Table 4 - for STD 3 - Reading - Beg  -->
						<td height="26" width="4%" style=""><input class="submission_1" id="id_std3_reading_beg" name="std3ReadingBG" size="10" style="width:20px;" type="text"> </td>
						
						<!--  Table 4 - for STD 3 - Reading - Letter -->
						<td height="26" width="4%" style=""><input class="submission_1" id="id_std3_reading_letter" name="std3ReadingLT" size="10" style="width:20px;" type="text"> </td>
						
						<!--  Table 4 - for STD 3 - Reading - Word -->
						<td height="26" width="4%" style=""><input class="submission_1" id="id_std3_reading_word" name="std3ReadingWD" size="10" style="width:20px;" type="text"> </td>
						
						<!--  Table 4 - for STD 3 - Reading - Para -->
						<td height="26" width="3%" style=""><input class="submission_1" id="id_std3_reading_para" name="std3ReadingPR" size="10" style="width:20px;" type="text"></td>					
						
						<!--  Table 4 - for STD 3 - Reading - Story -->
						<td height="26" width="3%" style=""><input class="submission_1" id="id_std3_reading_story" name="std3ReadingSY" size="10" style="width:20px;" type="text"></td>
						
						<!--  Table 4 - for STD 3 - Number - Beg -->
						<td height="26" width="4%" style=""><input class="submission_1" id="id_std3_number_beg" name="std3NumberBG" size="10" style="width:20px;" type="text">  </td>
						
						<!--  Table 4 - for STD 3 - Number - 0to9 -->
						<td height="26" width="4%" style=""><input class="submission_1" id="id_std3_number_0-9" name="std3Number1Digit" size="10" style="width:20px;" type="text"> </td>
						
						<!--  Table 4 - for STD 3 - Number - 10to99 -->
						<td height="26" width="5%" style=""><input class="submission_1" id="id_std3_number_10-99" name="std3Number2Digits" size="10" style="width:20px;" type="text"> </td>
						
						<!--  Table 4 - for STD 3 - Number - 100to999 -->
						<td height="26" width="5%" style=""><input class="submission_1" id="id_std3_number_100-999" name="std3Number3Digits" size="10" style="width:20px;" type="text"> </td>
						
						
						<td height="26" id="ft" width="19%">Update from Std 3 Universal Child List</td>
					</tr>
				
					<tr align="center">
					  <! --  Table 4 - for STD 4  -->
					  <td colspan="2" id="ft" width="16%"> Std. 4 </td>				  
					  <!--  Table 4 - for STD 4 - Enrollment -->
					  <td width="9%" style=""><input class="submission_1" id="id_std4_enrolled" name="std4Enrolled" size="10" style="width:20px;" type="text">  </td>
					  
					  <!--  Table 4 - for STD 4 - Tested -->
					  <td width="6%" style=""><input class="submission_1" id="id_std4- tested" name="std4Tested" size="10" style="width:20px;" type="text">  </td>
					  
					  <!--  Table 4 - for STD 4 - Reading - Beg  -->
					  <td style=""><input class="submission_1" id="id_std4_reading_beg" name="std4ReadingBG" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  Table 4 - for STD 4 - Reading - Letter -->
					  <td width="4%" style=""><input class="submission_1" id="id_std4_reading_letter" name="std4ReadingLT" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  Table 4 - for STD 4 - Reading - Word -->
					  <td width="4%" style=""><input class="submission_1" id="id_std4_reading_word" name="std4ReadingWD" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  Table 4 - for STD 4 - Reading - Para -->
					  <td width="3%" style=""><input class="submission_1" id="id_std4_reading_para" name="std4ReadingPR" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 4 - Reading - Story -->
					  <td width="3%" style=""><input class="submission_1" id="id_std4_reading_story" name="std4ReadingSY" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 4 - Number - Beg -->
					  <td width="4%" style=""><input class="submission_1" id="id_std4_number_beg" name="std4NumberBG" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 4 - Number - 0to9 -->
					  <td width="4%" style=""><input class="submission_1" id="id_std4_number_0-9" name="std4Number1Digit" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 4 - Number - 10to99 -->
					  <td width="5%" style=""><input class="submission_1" id="id_std4_number_10-99" name="std4Number2Digits" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 4 - Number - 100to999 -->
					  <td width="5%" style=""><input class="submission_1" id="id_std4_number_100-999" name="std4Number3Digits" size="10" style="width:20px;" type="text"></td>
					  
					  
					  <td id="ft" width="19%">Update from Std 4 Universal Child List  </td>
					 
					</tr>
					
					<tr align="center">
					
					  <! --  Table 4 - for STD 5  -->
					  <td colspan="2" id="ft" width="16%"> Std. 5 </td>				  
					 
					  <!--  Table 4 - for STD 5 - Enrollment -->
					  <td width="9%" style=""><input class="submission_1" id="id_std5_enrolled" name="std5Enrolled" size="10" style="width:20px;" type="text">  </td>
					  
					  <!--  Table 4 - for STD 5 - Tested -->
					  <td width="6%" style=""><input class="submission_1" id="id_std5- tested" name="std5Tested" size="10" style="width:20px;" type="text">  </td>
					  
					  <!--  Table 4 - for STD 5 - Reading - Beg  -->
					  <td style=""><input class="submission_1" id="id_std5_reading_beg" name="std5ReadingBG" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  Table 4 - for STD 5 - Reading - Letter -->
					  <td width="4%" style=""><input class="submission_1" id="id_std5_reading_letter" name="std5ReadingLT" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  Table 4 - for STD 5 - Reading - Word -->
					  <td width="4%" style=""><input class="submission_1" id="id_std5_reading_word" name="std5ReadingWD" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  Table 4 - for STD 5 - Reading - Para -->
					  <td width="3%" style=""><input class="submission_1" id="id_std5_reading_para" name="std5ReadingPR" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 5 - Reading - Story -->
					  <td width="3%" style=""><input class="submission_1" id="id_std5_reading_story" name="std5ReadingSY" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 5 - Number - Beg -->
					  <td width="4%" style=""><input class="submission_1" id="id_std5_number_beg" name="std5NumberBG" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 5 - Number - 0to9 -->
					  <td width="4%" style=""><input class="submission_1" id="id_std5_number_0-9" name="std5Number1Digit" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 5 - Number - 10to99 -->
					  <td width="5%" style=""><input class="submission_1" id="id_std5_number_10-99" name="std5Number2Digits" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for STD 5 - Number - 100to999 -->
					  <td width="5%" style=""><input class="submission_1" id="id_std5_number_100-999" name="std5Number3Digits" size="10" style="width:20px;" type="text"></td>
					  
					  <td id="ft" width="19%">Update from Std 4 Universal Child List  </td>
					 
					</tr>

					<tr align="center">
					  <!--  Table 4 - for FIRST BASELINE  -->
					  <td id="ft" rowspan="4">BaseLine <br>Totals</td>
					  <td id="ft" width="16%">First Baseline<br>Before Endline 1</td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Enrollment -->
					  <td id="ft1" width="9%"><label style="width:20px;"name = "firstBLBeforeEL1ReadingBG" >0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Tested -->
					  <td id="ft1" width="6%"><label style="width:20px;">0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Reading - Beg  -->
					  <td id="ft1" width="4%"><label style="width:20px;">0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Reading - Letter -->
					  <td id="ft1" width="4%"><label style="width:20px;">0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Reading - Word -->
					  <td id="ft1" width="4%"><label style="width:20px;">0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Reading - Para -->
					  <td id="ft1" width="3%"><label style="width:20px;">0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Reading - Story -->
					  <td id="ft1" width="3%"><label style="width:20px;">0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Number - Beg -->
					  <td id="ft1" width="4%"><label style="width:20px;">0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Number - 0to9 -->
					  <td id="ft1" width="4%"><label style="width:20px;">0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Number - 10to99 -->
					  <td id="ft1" width="5%"><label style="width:20px;">0</label></td>
					  
					  <!--  Table 4 - for FIRST BASELINE - Number - 100to999 -->
					  <td id="ft1" width="5%"><label style="width:20px;">0</label></td>
					  <td id="ft" width="22%">Add data for all the classes in this box</td>
					</tr>

					<tr align="center">
					  <! --  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2  -->
					  <td id="ft" width="8%">Additional children<br>Before Endline 2</td>
					  <td id="ft" width="9%">NA</td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Tested -->
					  <td width="6%"><input class="submission_1" id="id_additional_before_endline 2_tested" name="additionalChildBeforeEL2Tested" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Reading - Beg  -->
					  <td width="4%"><input class="submission_1" id="id_additional_before_endline 2_reading_beg" name="additionalChildBeforeEL2ReadingBG" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Reading - Letter -->
					  <td width="4%"><input class="submission_1" id="id_additional_before_endline 2_reading_letter" name="additionalChildBeforeEL2ReadingLT" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Reading - Word -->
					  <td width="4%"><input class="submission_1" id="id_additional_before_endline 2_reading_word" name="additionalChildBeforeEL2ReadingWD" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Reading - Para -->
					  <td width="3%"><input class="submission_1" id="id_additional_before_endline 2_reading_para" name="additionalChildBeforeEL2ReadingPR" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Reading - Story -->
					  <td width="3%"><input class="submission_1" id="id_additional_before_endline 2_reading_story" name="additionalChildBeforeEL2ReadingSY" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Number - Beg -->
					  <td width="4%"><input class="submission_1" id="id_additional_before_endline 2_number_beg" name="additionalChildBeforeEL2NumberBG" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Number - 0to9 -->
					  <td width="4%"><input class="submission_1" id="id_additional_before_endline 2_number_0-9" name="additionalChildBeforeEL2Number1Digit" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Number - 10to99 -->
					  <td width="5%"><input class="submission_1" id="id_additional_before_endline 2_number_10-99" name="additionalChildBeforeEL2Number2Digits" size="10" style="width:20px;" type="text"></td>					
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 2 - Number - 100to999 -->
					  <td width="5%"><input class="submission_1" id="id_additional_before_endline 2_number_100-999" name="additionalChildBeforeEL2Number3Digits" size="10" style="width:20px;" type="text"></td>					
					  <td id="ft" width="22%">Update from Universal Child Sheet for each class and add all three classes</td>
					</tr>

					<tr align="center">
					  <! --  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3  -->
					  <td id="ft" width="8%"> Additional children<br>Before Endline 3</td>
					  <td id="ft" width="9%">  NA</td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Tested -->
					  <td width="6%"><input class="submission_1" id="id_additional_before_endline 3_tested" name="additionalChildBeforeEL3Tested" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Beg  -->
					  <td width="4%"><input class="submission_1" id="id_additional_before_endline 3_reading_beg" name="additionalChildBeforeEL3ReadingBG" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Letter -->
					  <td width="4%"><input class="submission_1" id="id_additional_before_endline 3_reading_letter" name="additionalChildBeforeEL3ReadingLT" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Word -->
					  <td width="4%"><input class="submission_1" id="id_additional_before_endline 3_reading_word" name="additionalChildBeforeEL3ReadingWD" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Para -->
					  <td width="3%"><input class="submission_1" id="id_additional_before_endline 3_reading_para" name="additionalChildBeforeEL3ReadingPR" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Story -->
					  <td width="3%"><input class="submission_1" id="id_additional_before_endline 3_reading_story" name="additionalChildBeforeEL3ReadingSY" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Number - Beg -->
					  <td width="4%"><input class="submission_1" id="id_additional_before_endline 3_number_beg" name="additionalChildBeforeEL3NumberBG" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Number - 0to9 -->
					  <td width="4%"><input class="submission_1" id="id_additional_before_endline 3_number_0-9" name="additionalChildBeforeEL3Number1Digit" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Number - 10to99 -->
					  <td width="5%"><input class="submission_1" id="id_additional_before_endline 3_number_10-99" name="additionalChildBeforeEL3Number2Digits" size="10" style="width:20px;" type="text"></td>
					  
					  <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Number - 100to999 -->
					  <td width="5%"><input class="submission_1" id="id_additional_before_endline 3_number_100-999" name="additionalChildBeforeEL3Number3Digits" size="10" style="width:20px;" type="text"></td>
					  <td id="ft" width="22%">Update from Universal Child Sheet for each class and add all three classes</td>
					</tr>

					  
				   <tr align="center">
					   <! --  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3  -->
					   <td id="ft" width="8%">Additional children<br>Before Endline 4</td>
					   <td id="ft" width="9%">NA</td>
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Tested -->
					   <td width="6%"><input class="submission_1" id="id_additional_before_endline 4_tested" name="additionalChildBeforeEL4Tested" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Beg  -->
					   <td width="4%"><input class="submission_1" id="id_additional_before_endline 4_reading_beg" name="additionalChildBeforeEL4ReadingBG" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Letter -->
					   <td width="4%"><input class="submission_1" id="id_additional_before_endline 4_reading_letter" name="additionalChildBeforeEL4ReadingLT" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Word -->
					   <td width="4%"><input class="submission_1" id="id_additional_before_endline 4_reading_word" name="additionalChildBeforeEL4ReadingWD" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Para -->
					   <td width="3%"><input class="submission_1" id="id_additional_before_endline 4_reading_para" name="additionalChildBeforeEL4ReadingPR" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Reading - Story -->
					   <td width="3%"><input class="submission_1" id="id_additional_before_endline 4_reading_story" name="additionalChildBeforeEL4ReadingSY" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Number - Beg -->
					   <td width="4%"><input class="submission_1" id="id_additional_before_endline 4_number_beg" name="additionalChildBeforeEL4NumberBG" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Number - 0to9 -->
					   <td width="4%"><input class="submission_1" id="id_additional_before_endline 4_number_0-9" name="additionalChildBeforeEL4Number1Digit" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Number - 10to99 -->
					   <td width="5%"><input class="submission_1" id="id_additional_before_endline 4_number_10-99" name="additionalChildBeforeEL4Number2Digits" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 3 - Number - 100to999 -->
					   <td width="5%"><input class="submission_1" id="id_additional_before_endline 4_number_100-999" name="additionalChildBeforeEL4Number3Digits" size="10" style="width:20px;" type="text"></td>
					   <td id="ft" width="25%">Update from Universal Child Sheet for each class and add all three classes</td>
					</tr>

					<tr align="center">
					   <! --  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4  -->
					   <td colspan="2" height="41" id="ft" width="17%">CONSOLIDATED BASELINE</td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Enrolled -->
					   <td height="41" id="ft1" width="6%"><label id = "consolidateBaselineEnrolled" style="width:20px;">0</label></td>				   
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Tested -->
					   <td height="41" id="ft1" width="6%"><label style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Reading - Beg  -->
					   <td height="41" id="ft1" width="4%"><label style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Reading - Letter -->
					   <td height="41" id="ft1" width="4%"><label style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Reading - Word -->
					   <td height="41" id="ft1" width="4%"><label style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Reading - Para -->
					   <td height="41" id="ft1" width="3%"><label style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Reading - Story -->
					   <td height="41" id="ft1" width="3%"><label style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Number - Beg -->
					   <td height="41" id="ft1" width="4%"><label style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Number - 0to9 -->
					   <td height="41" id="ft1" width="4%"><label style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Number - 10to99 -->
					   <td height="41" id="ft1" width="5%"><label style="width:20px;">0</label></td>
					   
					   <!--  Table 4 - for ADDITIONAL CHILDREN BEFORE ENDLINE 4 - Number - 100to999 -->
					   <td height="41" id="ft1" width="5%"><label style="width:20px;">0</label></td>
					   
					   

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
				<table border="1px" bordercolor="#538467" cellpadding="2" cellspacing="0" style="border-collapse:collapse;" width="100%">   
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
					   <td width="9%" style=""><input class="submission_1" id="id_totaltested_total tested" name="ELAssTested" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- READING - BEG  -->
					   <td width="5%" style=""><input class="submission_1" id="id_totaltested_reading_beg" name="ELAssReadingBG" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- READING - LETTER -->
					   <td width="4%" style=""><input class="submission_1" id="id_totaltested_reading_letter" name="ELAssReadingLT" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- READING - WORD -->
					   <td width="4%" style=""><input class="submission_1" id="id_totaltested_reading_word" name="ELAssReadingWD" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- READING - PARA -->
					   <td width="3%" style=""><input class="submission_1" id="id_totaltested_reading_para" name="ELAssReadingPR" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- READING - STORY -->
					   <td width="4%" style=""><input class="submission_1" id="id_totaltested_reading_story" name="ELAssReadingSY" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- NUMBER - BEG -->
					   <td width="6%" style=""><input class="submission_1" id="id_totaltested_number_beg" name="ELAssNumberBG" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- NUMBER - 0TO9 -->
					   <td width="4%" style=""><input class="submission_1" id="id_totaltested_number_0-9" name="ELAssNumber1Digit" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- NUMBER - 10TO99 -->
					   <td width="4%" style=""><input class="submission_1" id="id_totaltested_number_10-99" name="ELAssNumber2Digits" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - FOR BASELINE- NUMBER - 100TO999 -->
					   <td width="5%" style=""><input class="submission_1" id="id_totaltested_number_100-999" name="ELAssNumber3Digits" size="10" style="width:20px;" type="text"></td>
					   <td colspan="8" width="5%"></td>
				   </tr>
				   
					<tr align="center">
					   <! --  TABLE 5 - LC1  -->
					   <td id="ft" width="11%">LC 1 Endline</td>
					   <!--  TABLE 5 - LC1 – TOTAL TESTED -->
					   <td width="9%" style=""><input class="submission_1" id="id_lc1_endline_totaltested" name="ELAssLC1Tested" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - LC1- READING - BEG  -->
					   <td width="5%" style=""><input class="submission_1" id="id_lc1_endline_reading_beg" name="ELAssLC1ReadingBG" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 - LC1- READING - LETTER -->
					   <td width="4%" style=""><input class="submission_1" id="id_lc1_endline_reading_letter" name="ELAssLC1ReadingLT" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- READING - WORD -->
					   <td width="4%" style=""><input class="submission_1" id="id_lc1_endline_reading_word" name="ELAssLC1ReadingWD" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- READING - PARA -->
					   <td width="3%" style=""><input class="submission_1" id="id_lc1_endline_reading_para" name="ELAssLC1ReadingPR" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- READING - STORY -->
					   <td width="4%" style=""><input class="submission_1" id="id_lc1_endline_reading_story" name="ELAssLC1ReadingSY" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- NUMBER - BEG -->
					   <td width="6%" style=""><input class="submission_1" id="id_lc1_endline_number_beg" name="ELAssLC1NumberBG" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- NUMBER - 0TO9 -->
					   <td width="4%" style=""><input class="submission_1" id="id_lc1_endline_number_0-9" name="ELAssLC1Number1Digit" size="10" style="width:20px;" type="text"> </td>
					   
					   <!--  TABLE 5 – LC1- NUMBER - 10TO99 -->
					   <td width="4%" style=""><input class="submission_1" id="id_lc1_endline_number_10-99" name="ELAssLC1Number2Digits" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- NUMBER - 100TO999 -->
					   <td width="5%" style=""><input class="submission_1" id="id_lc1_endline_number_100-999" name="ELAssLC1Number3Digits" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- ADD C -->
					   <td width="5%" style=""><input class="submission_1" id="id_lc1_endline_add_can" name="ELAssLC1OperationAC" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- ADD CN -->
					   <td width="5%" style=""><input class="submission_1" id="id_lc1_endline_add_cant" name="ELAssLC1OperationACN" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- SUB C -->
					   <td width="4%" style=""><input class="submission_1" id="id_lc1_endline_sub_can" name="ELAssLC1OperationSC" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- SUB CN -->
					   <td width="4%" style=""><input class="submission_1" id="id_lc1_endline_sub_cant" name="ELAssLC1OperationSCN" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- MUL C -->
					   <td width="4%" style=""><input class="submission_1" id="id_lc1_endline_mul_can" name="ELAssLC1OperationMC" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- MUL CN -->
					   <td width="4%" style=""><input class="submission_1" id="id_lc1_endline_mul_cant" name="ELAssLC1OperationMCN" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- DIV C -->
					   <td width="4%" style=""><input class="submission_1" id="id_lc1_endline_div_can" name="ELAssLC1OperationDC" size="10" style="width:20px;" type="text"></td>
					   
					   <!--  TABLE 5 – LC1- DIV CN -->
					   <td width="3%" style=""><input class="submission_1" id="id_lc1_endline_div_cant" name="ELAssLC1OperationDCN" size="10" style="width:20px;" type="text"></td>
					</tr>
					
					<tr align="center">
					  <! --  TABLE 5 - LC2  -->
					  <td id="ft" width="11%">LC 2 Endline</td>
					  
					  <!--  TABLE 5 - LC2 – TOTAL TESTED -->
					  <td width="9%"><input class="submission_1" id="id_lc2_endline_totaltested" name="ELAssLC2Tested" size="10" style="width:20px;" type="text"> </td>					  
					  
					  <!--  TABLE 5 - LC2- READING - BEG  -->
					  <td width="5%"><input class="submission_1" id="id_lc2_endline_reading_beg" name="ELAssLC2ReadingBG" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 - LC2- READING - LETTER -->
					  <td width="4%"><input class="submission_1" id="id_lc2_endline_reading_letter" name="ELAssLC2ReadingLT" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- READING - WORD -->
					  <td width="4%"><input class="submission_1" id="id_lc2_endline_reading_word" name="ELAssLC2ReadingWD" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- READING - PARA -->
					  <td width="3%"><input class="submission_1" id="id_lc2_endline_reading_para" name="ELAssLC2ReadingPR" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- READING - STORY -->
					  <td width="4%"><input class="submission_1" id="id_lc2_endline_reading_story" name="ELAssLC2ReadingSY" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- NUMBER - BEG -->
					  <td width="6%"><input class="submission_1" id="id_lc2_endline_number_beg" name="ELAssLC2NumberBG" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- NUMBER - 0TO9 -->
					  <td width="4%"><input class="submission_1" id="id_lc2_endline_number_0-9" name="ELAssLC2Number1Digit" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- NUMBER - 10TO99 -->
					  <td width="4%"><input class="submission_1" id="id_lc2_endline_number_10-99" name="ELAssLC2Number2Digits" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- NUMBER - 100TO999 -->
					  <td width="5%"><input class="submission_1" id="id_lc2_endline_number_100-999" name="ELAssLC2Number3Digits" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- ADD C -->
					  <td width="5%"><input class="submission_1" id="id_lc2_endline_add_can" name="ELAssLC2OperationAC" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- ADD CN -->
					  <td width="5%"><input class="submission_1" id="id_lc2_endline_add_cant" name="ELAssLC2OperationACN" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- SUB C -->
					  <td width="4%"><input class="submission_1" id="id_lc2_endline_sub_can" name="ELAssLC2OperationSC" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- SUB CN -->
					  <td width="4%"><input class="submission_1" id="id_lc2_endline_sub_cant" name="ELAssLC2OperationSCN" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- MUL C -->
					  <td width="4%"><input class="submission_1" id="id_lc2_endline_mul_can" name="ELAssLC2OperationMC" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- MUL CN -->
					  <td width="4%"><input class="submission_1" id="id_lc2_endline_mul_cant" name="ELAssLC2OperationMCN" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- DIV C -->
					  <td width="4%"><input class="submission_1" id="id_lc2_endline_div_can" name="ELAssLC2OperationDC" size="10" style="width:20px;" type="text"> </td>
					  
					  <!--  TABLE 5 – LC2- DIV CN -->
					  <td width="3%"><input class="submission_1" id="id_lc2_endline_div_cant" name="ELAssLC2OperationDCN" size="10" style="width:20px;" type="text"> </td>
					</tr>
					
					<tr align="center">
					 <! --  TABLE 5 - LC3  -->
					 <td id="ft" width="11%">LC 3 Endline</td>
					 
					 <!--  TABLE 5 - LC3 – TOTAL TESTED -->
					 <td width="9%"><input class="submission_1" id="id_lc3_endline_totaltested" name="ELAssLC3Tested" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 - LC3- READING - BEG  -->
					 <td width="5%"><input class="submission_1" id="id_lc3_endline_reading_beg" name="ELAssLC3ReadingBG" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 - LC3- READING - LETTER -->
					 <td width="4%"><input class="submission_1" id="id_lc3_endline_reading_letter" name="ELAssLC3ReadingLT" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- READING - WORD -->
					 <td width="4%"><input class="submission_1" id="id_lc3_endline_reading_word" name="ELAssLC3ReadingWD" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- READING - PARA -->
					 <td width="3%"><input class="submission_1" id="id_lc3_endline_reading_para" name="ELAssLC3ReadingPR" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- READING - STORY -->
					 <td width="4%"><input class="submission_1" id="id_lc3_endline_reading_story" name="ELAssLC3ReadingSY" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- NUMBER - BEG -->
					 <td width="6%"><input class="submission_1" id="id_lc3_endline_number_beg" name="ELAssLC3NumberBG" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- NUMBER - 0TO9 -->
					 <td width="4%"><input class="submission_1" id="id_lc3_endline_number_0-9" name="ELAssLC3Number1Digit" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- NUMBER - 10TO99 -->
					 <td width="4%"><input class="submission_1" id="id_lc3_endline_number_10-99" name="ELAssLC3Number2Digits" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- NUMBER - 100TO999 -->
					 <td width="5%"><input class="submission_1" id="id_lc3_endline_number_100-999" name="ELAssLC3Number3Digits" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- ADD C -->
					 <td width="5%"><input class="submission_1" id="id_lc3_endline_add_can" name="ELAssLC3OperationAC" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- ADD CN -->
					 <td width="5%"><input class="submission_1" id="id_lc3_endline_add_cant" name="ELAssLC3OperationACN" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- SUB C -->
					 <td width="4%"><input class="submission_1" id="id_lc3_endline_sub_can" name="ELAssLC3OperationSC" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- SUB CN -->
					 <td width="4%"><input class="submission_1" id="id_lc3_endline_sub_cant" name="ELAssLC3OperationSCN" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- MUL C -->
					 <td width="4%"><input class="submission_1" id="id_lc3_endline_mul_can" name="ELAssLC3OperationMC" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- MUL CN -->
					 <td width="4%"><input class="submission_1" id="id_lc3_endline_mul_cant" name="ELAssLC3OperationMCN" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- DIV C -->
					 <td width="4%"><input class="submission_1" id="id_lc3_endline_div_can" name="ELAssLC3OperationDC" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC3- DIV CN -->
					 <td width="3%"><input class="submission_1" id="id_lc3_endline_div_cant" name="ELAssLC3OperationDCN" size="10" style="width:20px;" type="text"> </td>
				   </tr>
				   
				   <tr align="center">
					 <! --  TABLE 5 - LC4  -->
					 <td id="ft" width="11%">LC 4 Endline</td>
					 
					 <!--  TABLE 5 - LC4 – TOTAL TESTED -->
					 <td width="9%"><input class="submission_1" id="id_lc4_endline_totaltested" name="ELAssLC4Tested" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 - LC4- READING - BEG  -->
					 <td width="5%"><input class="submission_1" id="id_lc4_endline_reading_beg" name="ELAssLC4ReadingBG" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 - LC4- READING - LETTER -->
					 <td width="4%"><input class="submission_1" id="id_lc4_endline_reading_letter" name="ELAssLC4ReadingLT" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- READING - WORD -->
					 <td width="4%"><input class="submission_1" id="id_lc4_endline_reading_word" name="ELAssLC4ReadingWD" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- READING - PARA -->
					 <td width="3%"><input class="submission_1" id="id_lc4_endline_reading_para" name="ELAssLC4ReadingPR" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- READING - STORY -->
					 <td width="4%"><input class="submission_1" id="id_lc4_endline_reading_story" name="ELAssLC4ReadingSY" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- NUMBER - BEG -->
					 <td width="6%"><input class="submission_1" id="id_lc4_endline_number_beg" name="ELAssLC4NumberBG" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- NUMBER - 0TO9 -->
					 <td width="4%"><input class="submission_1" id="id_lc4_endline_number_0-9" name="ELAssLC4Number1Digit" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- NUMBER - 10TO99 -->
					 <td width="4%"><input class="submission_1" id="id_lc4_endline_number_10-99" name="ELAssLC4Number2Digits" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- NUMBER - 100TO999 -->
					 <td width="5%"><input class="submission_1" id="id_lc4_endline_number_100-999" name="ELAssLC4Number3Digits" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- ADD C -->
					 <td width="5%"><input class="submission_1" id="id_lc4_endline_add_can" name="ELAssLC4OperationAC" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- ADD CN -->
					 <td width="5%"><input class="submission_1" id="id_lc4_endline_add_cant" name="ELAssLC4OperationACN" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- SUB C -->
					 <td width="4%"><input class="submission_1" id="id_lc4_endline_sub_can" name="ELAssLC4OperationSC" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- SUB CN -->
					 <td width="4%"><input class="submission_1" id="id_lc4_endline_sub_cant" name="ELAssLC4OperationSCN" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- MUL C -->
					 <td width="4%"><input class="submission_1" id="id_lc4_endline_mul_can" name="ELAssLC4OperationMC" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- MUL CN -->
					 <td width="4%"><input class="submission_1" id="id_lc4_endline_mul_cant" name="ELAssLC4OperationMCN" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- DIV C -->c
					 <td width="4%"><input class="submission_1" id="id_lc4_endline_div_can" name="ELAssLC4OperationDC" size="10" style="width:20px;" type="text"> </td>
					 
					 <!--  TABLE 5 – LC4- DIV CN -->
					 <td width="3%"><input class="submission_1" id="id_lc4_endline_div_cant" name="ELAssLC4OperationDCN" size="10" style="width:20px;" type="text"> </td>
					</tr>
					
					<tr align="center">
					  <! --  TABLE 5 - CONSOLIDATED ENDLINE  -->
					 <td id="ft" width="11%">Consolidated Endline Of Selected Children*</td>
					 
					 <!--  TABLE 5 - CONSOLIDATED ENDLINE – TOTAL TESTED -->
					 <td width="9%"><input class="submission_1" id="id_cons_endline_totaltested" name="ELAssConsELTested" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 - CONSOLIDATED ENDLINE- READING - BEG  -->
					 <td width="5%"><input class="submission_1" id="id_cons_endline_reading_beg" name="ELAssConsELReadingBG" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 - CONSOLIDATED ENDLINE- READING - LETTER -->
					 <td width="4%"><input class="submission_1" id="id_cons_endline_reading_letter" name="ELAssConsELReadingLT" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- READING - WORD -->
					 <td width="4%"><input class="submission_1" id="id_cons_endline_reading_word" name="ELAssConsELReadingWD" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- READING - PARA -->
					 <td width="3%"><input class="submission_1" id="id_cons_endline_reading_para" name="ELAssConsELReadingPR" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- READING - STORY -->
					 <td width="4%"><input class="submission_1" id="id_cons_endline_reading_story" name="ELAssConsELReadingSY" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- NUMBER - BEG -->
					 <td width="6%"><input class="submission_1" id="id_cons_endline_number_beg" name="ELAssConsELNumberBG" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- NUMBER - 0TO9 -->
					 <td width="4%"><input class="submission_1" id="id_cons_endline_number_0-9" name="ELAssConsELNumber1Digit" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- NUMBER - 10TO99 -->
					 <td width="6%"><input class="submission_1" id="id_cons_endline_number_10-99" name="ELAssConsELNumber2Digits" size="10" style="width:20px;" type="text"></td>    
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- NUMBER - 100TO999 -->
					 <td width="6%"><input class="submission_1" id="id_cons_endline_number_100-999" name="ELAssConsELNumber3Digits" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- ADD C -->
					 <td width="4%"><input class="submission_1" id="id_cons_endline_add_can" name="ELAssConsELOperationAC" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- ADD CN -->
					 <td width="5%"><input class="submission_1" id="id_cons_endline_add_cant" name="ELAssConsELOperationACN" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- SUB C -->
					 <td width="5%"><input class="submission_1" id="id_cons_endline_sub_can" name="ELAssConsELOperationSC" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- SUB CN -->
					 <td width="5%"><input class="submission_1" id="id_cons_endline_sub_cant" name="ELAssConsELOperationSCN" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- MUL CN -->
					 <td width="4%"><input class="submission_1" id="id_cons_endline_mul_can" name="ELAssConsELOperationMC" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- MUL CN -->
					 <td width="4%"><input class="submission_1" id="id_cons_endline_mul_cant" name="ELAssConsELOperationMCN" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- DIV C -->
					 <td width="4%"><input class="submission_1" id="id_cons_endline_div_can" name="ELAssConsELOperationDC" size="10" style="width:20px;" type="text"></td>
					 
					 <!--  TABLE 5 – CONSOLIDATED ENDLINE- DIV CN -->
					 <td width="3%"><input class="submission_1" id="id_cons_endline_div_cant" name="ELAssConsELOperationDCN" size="10" style="width:20px;" type="text"></td>
					</tr>
					
					<tr>
					<td colspan="19" id="ft_note">* The last endline of all selected children will be considered while calculating consolidated endline</td>
					</tr> </tbody>
				
				</table>					   
				<br><br>
			
				<! --  Table 6 start from here -->
				<font color="#96763B" face="calibri" size="4"><b>TABLE 6: PROGRESS ACROSS READING LEVELS (Baseline vs Endline 4)*</b></font></div><div class="pbBody">           
				<table border="1px" bordercolor="#538467" cellpadding="2" cellspacing="0" style="border-collapse:collapse;" width="100%">   
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
					   <td width="13%"><input class="submission_1" id="id_baseline_beg_beg" name="progressAcrossReadingBGBG" size="10" style="width:50px;" type="text"></td>
					   <td width="13%"><input class="submission_1" id="id_baseline_beg_letter" name="progressAcrossReadingBGLT" size="10" style="width:50px;" type="text"></td>
					   <td width="12%"><input class="submission_1" id="id_baseline_beg_ word" name="progressAcrossReadingBGWD" size="10" style="width:50px;" type="text"></td>
					   <td width="11%"><input class="submission_1" id="id_baseline_beg_ para" name="progressAcrossReadingBGPR" size="10" style="width:50px;" type="text"></td>
					   <td width="9%"><input class="submission_1" id="id_baseline_beg_ story" name="progressAcrossReadingBGSY" size="10" style="width:50px;" type="text"></td>
					   <td width="10%"><input class="submission_1" id="id_baseline_beg_ total" name="progressAcrossReadingBGTotal" size="10" style="width:50px;" type="text"></td>
					</tr>
					<tr align="center">
					   <td id="ft" width="29%">Letter</td>
					   <td width="13%"><input class="submission_1" id="id_baseline_letter_beg" name="progressAcrossReadingLTBG" size="10" style="width:50px;" type="text"></td>
					   <td width="13%"><input class="submission_1" id="id_baseline_letter_letter" name="progressAcrossReadingLTLT" size="10" style="width:50px;" type="text"></td>
					   <td width="12%"><input class="submission_1" id="id_baseline_letter_ word" name="progressAcrossReadingLTWD" size="10" style="width:50px;" type="text"></td>
					   <td width="11%"><input class="submission_1" id="id_baseline_letter_ para" name="progressAcrossReadingLTPR" size="10" style="width:50px;" type="text"></td>
					   <td width="9%"><input class="submission_1" id="id_baseline_letter_ story" name="progressAcrossReadingLTSY" size="10" style="width:50px;" type="text"></td>
					   <td width="10%"><input class="submission_1" id="id_baseline_letter_ total" name="progressAcrossReadingLTTotal" size="10" style="width:50px;" type="text"></td>
					</tr>
					<tr align="center">
					   <td id="ft" width="29%">Word</td>
					   <td width="13%"><input class="submission_1" id="id_baseline_word_beg" name="progressAcrossReadingWDBG" size="10" style="width:50px;" type="text"></td>
					   <td width="13%"><input class="submission_1" id="id_baseline_word_letter" name="progressAcrossReadingWDLT" size="10" style="width:50px;" type="text"></td>
					   <td width="12%"><input class="submission_1" id="id_baseline_word_ word" name="progressAcrossReadingWDWD" size="10" style="width:50px;" type="text"></td>
					   <td width="11%"><input class="submission_1" id="id_baseline_word_ para" name="progressAcrossReadingWDPR" size="10" style="width:50px;" type="text"></td>
					   <td width="9%"><input class="submission_1" id="id_baseline_word_ story" name="progressAcrossReadingWDSY" size="10" style="width:50px;" type="text"></td>
					   <td width="10%"><input class="submission_1" id="id_baseline_word_ total" name="progressAcrossReadingWDTotal" size="10" style="width:50px;" type="text"></td>
					</tr>
				   
				   <tr align="center">
					   <td id="ft" width="29%">Para</td>
					   <td width="13%"> <input class="submission_1" id="id_baseline_para_beg" name="progressAcrossReadingPRBG" size="10" style="width:50px;" type="text"></td>
					   <td width="13%"><input class="submission_1" id="id_baseline_para_letter" name="progressAcrossReadingPRWD" size="10" style="width:50px;" type="text"></td>
					   <td width="12%"><input class="submission_1" id="id_baseline_para_ word" name="progressAcrossReadingPRLT" size="10" style="width:50px;" type="text"></td>
					   <td width="11%"><input class="submission_1" id="id_baseline_para_ para" name="progressAcrossReadingPRPR" size="10" style="width:50px;" type="text"></td>
					   <td width="9%"><input class="submission_1" id="id_baseline_para_ story" name="progressAcrossReadingPRSY" size="10" style="width:50px;" type="text"></td>
					   <td width="10%"><input class="submission_1" id="id_baseline_para_ total" name="progressAcrossReadingPRTotal" size="10" style="width:50px;" type="text"></td>
					</tr>
					
					<tr align="center">
					   <td id="ft" width="29%">Story</td>
					   <td width="13%"><input class="submission_1" id="id_baseline_story_beg" name="progressAcrossReadingSYBG" size="10" style="width:50px;" type="text"></td>
					   <td width="13%"><input class="submission_1" id="id_baseline_story_letter" name="proogressAcrossReadingSYLT" size="10" style="width:50px;" type="text"></td>
					   <td width="12%"><input class="submission_1" id="id_baseline_story_ word" name="proogressAcrossReadingSYWD" size="10" style="width:50px;" type="text"></td>
					   <td width="11%"><input class="submission_1" id="id_baseline_story_ para" name="progressAcrossReadingSYPR" size="10" style="width:50px;" type="text"></td>
					   <td width="9%"><input class="submission_1" id="id_baseline_story_ story" name="progressAcrossReadingSYSY" size="10" style="width:50px;" type="text"></td>
					   <td width="10%"><input class="submission_1" id="id_baseline_story_ total" name="progressAcrossReadingSYTotal" size="10" style="width:50px;" type="text"></td>
					</tr>
					
					<tr align="center">
					   <td id="ft" width="29%">Total (Endline)</td>
					   <td width="13%"><label style="width:20px;">0</label></td>
					   <td width="13%"><label style="width:20px;">0</label></td>
					   <td width="12%"><label style="width:20px;">0</label></td>
					   <td width="11%"><label style="width:20px;">0</label></td>
					   <td width="9%"><label style="width:20px;">0</label></td>
					   <td width="10%"><label style="width:20px;">0</label></td>
					</tr>
	  
					<tr>
					   <td colspan="7" id="ft_note">* This table pertains to only those children for whom there is a baseline and endline 4</td>
					</tr> </tbody>
				</table>

				<!-- Table 7 start from here -->
				<br>
				<font color="#96763B" face="calibri" size="4.5"><b>TABLE 7: STD 1-2 INFORMATION</b></font>      
				<table border="1px" bordercolor="#538467" cellpadding="2" cellspacing="0" style="border-collapse:collapse;" width="100%"> 
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
						<td width="11%" style=""><input class="submission_1" id="id_baseline_children" name="std1_2BLChildren" size="10" style="width:20px;" type="text"></td>
						<td width="9%" style=""><input class="submission_1" id="id_baseline_reading_beg" name="std1_2BLReadingBG" size="10" style="width:20px;" type="text"></td>
						<td width="8%" style=""><input class="submission_1" id="id_baseline_reading_letter" name="std1_2BLReadingLT" size="10" style="width:20px;" type="text"></td>
						<td width="7%" style=""><input class="submission_1" id="id_baseline_reading_word" name="std1_2BLReadingWD" size="10" style="width:20px;" type="text"></td>
						<td width="7%" style=""><input class="submission_1" id="id_baseline_reading_para" name="std1_2BLReadingPR" size="10" style="width:20px;" type="text"></td>
						<td width="7%" style=""><input class="submission_1" id="id_baseline_reading_story" name="std1_2BLReadingSY" size="10" style="width:20px;" type="text"></td>
						<td width="8%" style=""><input class="submission_1" id="id_baseline_number_beg" name="std1_2BLNumberBG" size="10" style="width:20px;" type="text"></td>
						<td width="5%" style=""><input class="submission_1" id="id_baseline_number_0to9" name="std1_2BLNumber1Digit" size="10" style="width:20px;" type="text"></td>
						<td width="4%" style=""><input class="submission_1" id="id_baseline_number_10to99" name="std1_2BLNumber2Digits" size="10" style="width:20px;" type="text"></td>
						<td width="3%" style=""><input class="submission_1" id="id_baseline_add_c" name="std1_2BLOperationAC" size="10" style="width:20px;" type="text"></td>
						<td width="4%" style=""><input class="submission_1" id="id_baseline_add_cn" name="std1_2BLOperationACN" size="10" style="width:20px;" type="text"></td>
						<td width="4%" style=""><input class="submission_1" id="id_baseline_sub_c" name="std1_2BLOperationSC" size="10" style="width:20px;" type="text"></td>
						<td width="5%" style=""><input class="submission_1" id="id_baseline_sub_cn" name="std1_2BLOperationSCN" size="10" style="width:20px;" type="text"></td>
					</tr>
					
					<tr align="center">
						<td id="ft" width="11%">EndLine</td>
						<td width="11%" style=""><input class="submission_1" id="id_endline_children" name="std1_2ELChildren" size="10" style="width:20px;" type="text"></td>
						<td width="9%" style=""><input class="submission_1" id="id_endline_reading_beg" name="std1_2ELReadingBG" size="10" style="width:20px;" type="text"></td>
						<td width="8%" style=""><input class="submission_1" id="id_endline_reading_letter" name="std1_2ELReadingLT" size="10" style="width:20px;" type="text"></td>
						<td width="7%" style=""><input class="submission_1" id="id_endline_reading_word" name="std1_2ELReadingWD" size="10" style="width:20px;" type="text"></td>
						<td width="7%" style=""><input class="submission_1" id="id_endline_reading_para" name="std1_2ELReadingPR" size="10" style="width:20px;" type="text"></td>
						<td width="7%" style=""><input class="submission_1" id="id_endline_reading_story" name="std1_2ELReadingSY" size="10" style="width:20px;" type="text"></td>
						<td width="8%" style=""><input class="submission_1" id="id_endline_number_beg" name="std1_2ELNumberBG" size="10" style="width:20px;" type="text"></td>
						<td width="5%" style=""><input class="submission_1" id="id_endline_number_0to9" name="std1_2ELNumber1Digit" size="10" style="width:20px;" type="text"></td>
						<td width="4%" style=""><input class="submission_1" id="id_endline_number_10to99" name="std1_2ELNumber2Digits" size="10" style="width:20px;" type="text"></td>
						<td width="3%" style=""><input class="submission_1" id="id_endline_add_c" name="std1_2ELOperationAC" size="10" style="width:20px;" type="text"></td>
						<td width="4%" style=""><input class="submission_1" id="id_endline_add_cn" name="std1_2ELOperationACN" size="10" style="width:20px;" type="text"></td>
						<td width="4%" style=""><input class="submission_1" id="id_endline_sub_c" name="std1_2ELOperationSC" size="10" style="width:20px;" type="text"></td>
						<td width="5%" style=""><input class="submission_1" id="id_endline_sub_cn" name="std1_2ELOperationSCN" size="10" style="width:20px;" type="text"></td>
					</tr>
					</tbody>
				</table>
				<!-- Table 8 design  -->
				<br><br>
				<font color="#96763B" face="calibri" size="4.5">
				<b>TABLE 8: PEOPLE VISITING THE CAMPS (Only number of visits)</b></font>         
				
				<table border="1px" bordercolor="#538467" cellpadding="1" cellspacing="0" style="border-collapse:collapse;" width="100%">
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
						<td width="13%" style="background: ">
							<select class="submission_1" id="id_camp1_govtofficials" name="camp1GovtOfficials" style="width:50px;">
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
						
						<td width="14%" style="background: ">
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
						
						<td width="15%" style="background: ">
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
						
						<td width="16%" style="background: ">
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
						
						<td width="16%" style="background: ">
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
						
						<td width="16%" style="background: ">
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
						
						<td width="12%" style="background: ">
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
						<td width="13%" style="background: ">
							<select class="submission_1" id="id_camp2_govtofficials" name="camp2GovtOfficials" style="width:50px;">
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
						<td width="14%" style="background: ">
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
						
						<td width="15%" style="background: ">
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
						
						<td width="16%" style="background: ">
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
						
						<td width="16%" style="background: ">
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
						
						<td width="16%" style="background: ">
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
						
						<td width="12%" style="background: ">
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
						<td width="13%" style="background: ">
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
						
						<td width="14%" style="background: ">
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
						
						<td width="15%" style="background: ">
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
						
						<td width="16%" style="background: ">
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
						
						<td width="16%" style="background: ">
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
						
						<td width="16%" style="background: ">
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
						
						<td width="12%" style="background: ">
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
						<td width="13%" style="background: ">
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
						
						<td width="14%" style="background: ">
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
						
						<td width="15%" style="background: ">
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
						
						<td width="16%" style="background: ">
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
						
						<td width="16%" style="background: ">
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
						
						<td width="16%" style="background: ">
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
						
						<td width="12%" style="background: ">
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

		</form>	

	<?php 

		// code for DB query to get count of camps already entered for this school

		echo "<input type=text id='campnumber' style='display:none' value='$var' />"; 

	?>
	
	<script type="text/javascript"> 
		$(document).ready(function() {
		   		alert('at ready');
		        $('.save').click(function(e) {

		        var requestData = { }; 
		        //Fetch table 1 info.
		        requestData['tbl1Info'] = { };

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
				requestData['tbl1Info']['std4TragetChildren'] = $('#id_std5').val();
				requestData['tbl1Info']['std5TragetChildren'] = $('#id_std4').val();
				requestData['tbl1Info']['childrenMale'] = $('#id_childrenMale').val();

		        requestData['tbl1Info']['campTeachingInfo'] = [];


		        requestData['tbl1Info']['campTeachingInfo'].push({
		        	'teachingDays': $('#id_teachingdays_camp1').val(),
		        	'startdate': $('#id_teachingstart_date_camp1').val(),
		        	'enddate': $('#id_teachingend_date_camp1').val(),
		        	'brgname': $('#id_nameBRGCamp1').val(),
		        });

		         requestData['tbl1Info']['campTeachingInfo'].push({
		        	'teachingDays': $('#id_teachingdays_camp2').val(),
		        	'startdate': $('#id_teachingstart_date_camp2').val(),
		        	'enddate': $('#id_teachingend_date_camp1').val(),
		        	'brgname': $('#id_nameBRGCamp2').val(),
		        });

		          requestData['tbl1Info']['campTeachingInfo'].push({
		        	'teachingDays': $('#id_teachingdays_camp3').val(),
		        	'startdate': $('#id_teachingstart_date_camp3').val(),
		        	'enddate': $('#id_teachingend_date_camp3').val(),
		        	'brgname': $('#id_nameBRGCamp3').val(),
		        });

		           requestData['tbl1Info']['campTeachingInfo'].push({
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
		        requestData['tbl2Info']['community_engaement_info'].push({
		        	'community_engaement': $('#id_noofvisits_camp1').val(),
		        	'community_engaement': $('#id_noofamilymember_camp1').val(),
		        });




				// Table 2 - Community Engaement Camp2
		        requestData['tbl2Info']['community_engaement_info'].push({
		        	'community_engaement': $('#id_noofvisits_camp2').val(),
		        	'community_engaement': $('#id_noofamilymember_camp2').val(),
		        });


				// Table 2 - Community Engaement Camp3
		        requestData['tbl2Info']['community_engaement_info'].push({
		        	'community_engaement': $('#id_noofvisits_camp3').val(),
		        	'community_engaement': $('#id_noofamilymember_camp3').val(),
		        });


				// Table 2 - Community Engaement Camp4
		        requestData['tbl2Info']['community_engaement_info'].push({
		        	'community_engaement': $('#id_noofvisits_camp4').val(),
		        	'community_engaement': $('#id_noofamilymember_camp4').val(),
		        });

	 
				//Fetch table 3 info.		        
		        requestData['tbl3Info']['volunteerinfo'] = [];
		        
		        //Volunteer 1
		        requestData['tbl3Info']['volunteerinfo'].push({

				'volunteer1Type':$('#id_volunteer1_type').val(),
				'volunteer1Education':$('#id_volunteer1_edu').val(),
				'volunteer1AttendanceCamp1':$('#id_volunteer1_attendance_camp1').val(),
				'volunteer1AttendanceCamp2':$('#id_volunteer1_attendance_camp2').val(),
				'volunteer1AttendanceCamp3':$('#id_volunteer1_attendance_camp3').val(),
				'volunteer1AttendanceCamp4':$('#id_volunteer1_attendance_camp4').val(),
				});
		        
		        //Volunteer 2
		        requestData['tbl3Info']['volunteerinfo'].push({

				'volunteer2Type':$('#id_volunteer2_type').val(),
				'volunteer2Education':$('#id_volunteer2_edu').val(),
				'volunteer2AttendanceCamp1':$('#id_volunteer2_attendance_camp1').val(),
				'volunteer2AttendanceCamp2':$('#id_volunteer2_attendance_camp2').val(),
				'volunteer2AttendanceCamp3':$('#id_volunteer2_attendance_camp3').val(),
				'volunteer2AttendanceCamp4':$('#id_volunteer2_attendance_camp4').val(),
				});
		        
		        //Volunteer 3
		        requestData['tbl3Info']['volunteerinfo'].push({

				'volunteer3Type':$('#id_volunteer3_type').val(),
				'volunteer3Education':$('#id_volunteer3_edu').val(),
				'volunteer3AttendanceCamp1':$('#id_volunteer3_attendance_camp1').val(),
				'volunteer3AttendanceCamp2':$('#id_volunteer3_attendance_camp2').val(),
				'volunteer3AttendanceCamp3':$('#id_volunteer3_attendance_camp3').val(),
				'volunteer3AttendanceCamp4':$('#id_volunteer3_attendance_camp4').val(),
				});
		        
		        //Volunteer 4				
		        requestData['tbl3Info']['volunteerinfo'].push({

		        'volunteer4Type':$('#id_volunteer4_type').val(),
				'volunteer4Education':$('#id_volunteer4_edu').val(),
				'volunteer4AttendanceCamp1':$('#id_volunteer4_attendance_camp1').val(),
				'volunteer4AttendanceCamp2':$('#id_volunteer4_attendance_camp2').val(),
				'volunteer4AttendanceCamp3':$('#id_volunteer4_attendance_camp3').val(),
				'volunteer4AttendanceCamp4':$('#id_volunteer4_attendance_camp4').val(),
				});
		        
		        //Volunteer 5
		        requestData['tbl3Info']['volunteerinfo'].push({

				'volunteer5Type':$('#id_volunteer5_type').val(),
				'volunteer5Education':$('#id_volunteer5_edu').val(),
				'volunteer5AttendanceCamp1':$('#id_volunteer5_attendance_camp1').val(),
				'volunteer5AttendanceCamp2':$('#id_volunteer5_attendance_camp2').val(),
				'volunteer5AttendanceCamp3':$('#id_volunteer5_attendance_camp3').val(),
				'volunteer5AttendanceCamp4':$('#id_volunteer5_attendance_camp4').val(),
				});
		        
		        //Volunteer 6
		        requestData['tbl3Info']['volunteerinfo'].push({

				'volunteer6Type':$('#id_volunteer6_type').val(),
				'volunteer6Education':$('#id_volunteer6_edu').val(),
				'volunteer6AttendanceCamp1':$('#id_volunteer6_attendance_camp1').val(),
				'volunteer6AttendanceCamp2':$('#id_volunteer6_attendance_camp2').val(),
				'volunteer6AttendanceCamp3':$('#id_volunteer6_attendance_camp3').val(),
				'volunteer6AttendanceCamp4':$('#id_volunteer6_attendance_camp4').val(),
				});
		        
		        //Volunteer 7
		        requestData['tbl3Info']['volunteerinfo'].push({

				'volunteer7Type':$('#id_volunteer7_type').val(),
				'volunteer7Education':$('#id_volunteer7_edu').val(),
				'volunteer7AttendanceCamp1':$('#id_volunteer7_attendance_camp1').val(),
				'volunteer7AttendanceCamp2':$('#id_volunteer7_attendance_camp2').val(),
				'volunteer7AttendanceCamp3':$('#id_volunteer7_attendance_camp3').val(),
				'volunteer7AttendanceCamp4':$('#id_volunteer7_attendance_camp4').val(),
				});
		        
		        //Volunteer 8
		        requestData['tbl3Info']['volunteerinfo'].push({

				'volunteer8Type':$('#id_volunteer8_type').val(),
				'volunteer8Education':$('#id_volunteer8_edu').val(),
				'volunteer8AttendanceCamp1':$('#id_volunteer8_attendance_camp1').val(),
				'volunteer8AttendanceCamp2':$('#id_volunteer8_attendance_camp2').val(),
				'volunteer8AttendanceCamp3':$('#id_volunteer8_attendance_camp3').val(),
				'volunteer8AttendanceCamp4':$('#id_volunteer8_attendance_camp4').val(),
				});
		        
		        //Volunteer 9
		        requestData['tbl3Info']['volunteerinfo'].push({

				'volunteer9Type':$('#id_volunteer9_type').val(),
				'volunteer9Education':$('#id_volunteer9_edu').val(),
				'volunteer9AttendanceCamp1':$('#id_volunteer9_attendance_camp1').val(),
				'volunteer9AttendanceCamp2':$('#id_volunteer9_attendance_camp2').val(),
				'volunteer9AttendanceCamp3':$('#id_volunteer9_attendance_camp3').val(),
				'volunteer9AttendanceCamp4':$('#id_volunteer9_attendance_camp4').val(),

				});

		        requestData['tbl3Info']['volunteerinfo'].push({
		        
		        //Volunteer 10
				'volunteer10Type':$('#id_volunteer10_type').val(),
				'volunteer10Education':$('#id_volunteer10_edu').val(),
				'volunteer10AttendanceCamp1':$('#id_volunteer10_attendance_camp1').val(),
				'volunteer10AttendanceCamp2':$('#id_volunteer10_attendance_camp2').val(),
				'volunteer10AttendanceCamp3':$('#id_volunteer10_attendance_camp3').val(),
				'volunteer10AttendanceCamp4':$('#id_volunteer10_attendance_camp4').val(),
				});

				//Fetch table 4 info.
		        requestData['tbl4Info']['BLAssessment'] = [];


		        requestData['tbl4Info']['BLAssessment'].push({

		        'std3Enrolled':$('#id_std3_enroll').val(),
				'std3Tested':$('#id_std3_tested').val(),
				'std3ReadingBG':$('#id_std3_reading_beg').val(),
				'std3ReadingLT':$('#id_std3_reading_letter').val(),
				'std3ReadingWD':$('#id_std3_reading_word').val(),
				'std3ReadingPR':$('#id_std3_reading_para').val(),
				'std3ReadingSY':$('#id_std3_reading_story').val(),
				'std3NumberBG':$('#id_std3_number_beg').val(),
				'std3Number1Digit':$('#id_std3_number_0-9').val(),
				'std3Number2Digits':$('#id_std3_number_10-99').val(),
				'std3Number3Digits':$('#id_std3_number_100-999').val(),

				});

		       //std 4
		        requestData['tbl4Info']['BLAssessment'].push({				
				'std4Enrolled':$('#id_std4_enrolled').val(),
				'std4Tested':$('#id_std4- tested').val(),
				'std4ReadingBG':$('#id_std4_reading_beg').val(),
				'std4ReadingLT':$('#id_std4_reading_letter').val(),
				'std4ReadingWD':$('#id_std4_reading_word').val(),
				'std4ReadingPR':$('#id_std4_reading_para').val(),
				'std4ReadingSY':$('#id_std4_reading_story').val(),
				'std4NumberBG':$('#id_std4_number_beg').val(),
				'std4Number1Digit':$('#id_std4_number_0-9').val(),
				'std4Number2Digits':$('#id_std4_number_10-99').val(),
				'std4Number3Digits':$('#id_std4_number_100-999').val(),
		       });

		       //std 5
		        requestData['tbl4Info']['BLAssessment'].push({								
				'std5Enrolled':$('#id_std5_enrolled').val(),
				'std5Tested':$('#id_std5- tested').val(),
				'std5ReadingBG':$('#id_std5_reading_beg').val(),
				'std5ReadingLT':$('#id_std5_reading_letter').val(),
				'std5ReadingWD':$('#id_std5_reading_word').val(),
				'std5ReadingPR':$('#id_std5_reading_para').val(),
				'std5ReadingSY':$('#id_std5_reading_story').val(),
				'std5NumberBG':$('#id_std5_number_beg').val(),
				'std5Number1Digit':$('#id_std5_number_0-9').val(),
				'std5Number2Digits':$('#id_std5_number_10-99').val(),
				'std5Number3Digits':$('#id_std5_number_100-999').val(),
		       });

		       //std BLbeforeEL1
		        requestData['tbl4Info']['BLAssessment'].push({								
				'firstBLBeforeEL1enrolled':$('#id_first_baseline_endline1_enrolled').val(),
				'firstBLBeforeEL1tested':$('#id_first_baseline_endline1_tested').val(),
				'firstBLBeforeEL1ReadingBG':$('#id_first_baseline_endline1_reading_beg').val(),
				'firstBLBeforeEL1ReadingLT':$('#id_first_baseline_endline1_reading_letter').val(),
				'firstBLBeforeEL1ReadingWD':$('#id_first_baseline_endline1_reading_word').val(),
				'firstBLBeforeEL1ReadingPR':$('#id_first_baseline_endline1_reading_para').val(),
				'firstBLBeforeEL1ReadingSY':$('#id_first_baseline_endline1_reading_story').val(),
				'firstBLBeforeEL1NumberBG':$('#id_first_baseline_endline1_number_beg').val(),
				'firstBLBeforeEL1Number1Digit':$('#id_first_baseline_endline1_number_0-9').val(),
				'firstBLBeforeEL1Number2Digits':$('#id_first_baseline_endline1_number_10-99').val(),
				'firstBLBeforeEL1Number3Digits':$('#id_first_baseline_endline1_number_100-999').val(),
		       });

		       //std AdditionalChildrenbeforeEL2
		        requestData['tbl4Info']['BLAssessment'].push({								

				'additionalChildBeforeEL2Tested':$('#id_additional_before_endline 2_tested').val(),
				'additionalChildBeforeEL2ReadingBG':$('#id_additional_before_endline 2_reading_beg').val(),
				'additionalChildBeforeEL2ReadingLT':$('#id_additional_before_endline 2_reading_letter').val(),
				'additionalChildBeforeEL2ReadingWD':$('#id_additional_before_endline 2_reading_word').val(),
				'additionalChildBeforeEL2ReadingPR':$('#id_additional_before_endline 2_reading_para').val(),
				'additionalChildBeforeEL2ReadingSY':$('#id_additional_before_endline 2_reading_story').val(),
				'additionalChildBeforeEL2NumberBG':$('#id_additional_before_endline 2_number_beg').val(),
				'additionalChildBeforeEL2Number1Digit':$('#id_additional_before_endline 2_number_0-9').val(),
				'additionalChildBeforeEL2Number2Digits':$('#id_additional_before_endline 2_number_10-99').val(),
				'additionalChildBeforeEL2Number3Digits':$('#id_additional_before_endline 2_number_100-999').val(),
		       
		       });
		       //std AdditionalChildrenbeforeEL3
		        requestData['tbl4Info']['BLAssessment'].push({								
				
				'additionalChildBeforeEL3Tested':$('#id_additional_before_endline 3_tested').val(),
				'additionalChildBeforeEL3ReadingBG':$('#id_additional_before_endline 3_reading_beg').val(),
				'additionalChildBeforeEL3ReadingLT':$('#id_additional_before_endline 3_reading_letter').val(),
				'additionalChildBeforeEL3ReadingWD':$('#id_additional_before_endline 3_reading_word').val(),
				'additionalChildBeforeEL3ReadingPR':$('#id_additional_before_endline 3_reading_para').val(),
				'additionalChildBeforeEL3ReadingSY':$('#id_additional_before_endline 3_reading_story').val(),
				'additionalChildBeforeEL3NumberBG':$('#id_additional_before_endline 3_number_beg').val(),
				'additionalChildBeforeEL3Number1Digit':$('#id_additional_before_endline 3_number_0-9').val(),
				'additionalChildBeforeEL3Number2Digits':$('#id_additional_before_endline 3_number_10-99').val(),
				'additionalChildBeforeEL3Number3Digits':$('#id_additional_before_endline 3_number_100-999').val(),
		       });

		       //std AdditionalChildrenbeforeEL4
		        requestData['tbl4Info']['BLAssessment'].push({												

				'additionalChildBeforeEL4Tested':$('#id_additional_before_endline 4_tested').val(),
				'additionalChildBeforeEL4ReadingBG':$('#id_additional_before_endline 4_reading_beg').val(),
				'additionalChildBeforeEL4ReadingLT':$('#id_additional_before_endline 4_reading_letter').val(),
				'additionalChildBeforeEL4ReadingWD':$('#id_additional_before_endline 4_reading_word').val(),
				'additionalChildBeforeEL4ReadingPR':$('#id_additional_before_endline 4_reading_para').val(),
				'additionalChildBeforeEL4ReadingSY':$('#id_additional_before_endline 4_reading_story').val(),
				'additionalChildBeforeEL4NumberBG':$('#id_additional_before_endline 4_number_beg').val(),
				'additionalChildBeforeEL4Number1Digit':$('#id_additional_before_endline 4_number_0-9').val(),
				'additionalChildBeforeEL4Number2Digits':$('#id_additional_before_endline 4_number_10-99').val(),
				'additionalChildBeforeEL4Number3Digits':$('#id_additional_before_endline 4_number_100-999').val(),
		       });

		       //ConsolidatedBL
		        requestData['tbl4Info']['BLAssessment'].push({								

				'consolidateBLEnrolled':$('#id_consolidate_baseline_enroll').val(),
				'consolidateBLTested':$('#id_consolidate_baseline_tested').val(),
				'consolidateBLReadingBG':$('#id_consolidate_baseline_reading_beg').val(),
				'consolidateBLReadingLT':$('#id_consolidate_baseline_reading_letter').val(),
				'consolidateBLReadingWD':$('#id_consolidate_baseline_reading_word').val(),
				'consolidateBLReadingPR':$('#id_consolidate_baseline_reading_para').val(),
				'consolidateBLReadingSY':$('#id_consolidate_baseline_reading_story').val(),
				'consolidateBLNumberBG':$('#id_consolidate_baseline_number_beg').val(),
				'consolidateBLNumber1Digit':$('#id_consolidate_baseline_number_0-9').val(),
				'consolidateBLNumber2Digits':$('#id_consolidate_baseline_number_10-99').val(),
				'consolidateBLNumber3Digits':$('#id_consolidate_baseline_number_100-999').val(),
				});
		    
		       //Table 5 info
				
				requestData['tbl5Info'] = { };

		        requestData['tbl5Info']['Endlineassment'] = [];
		        
		        //Baseline
		        requestData['tbl5Info']['Endlineassment'].push({
				'ELAssTested':$('#id_totaltested_total tested').val(),
				'ELAssReadingBG':$('#id_totaltested_reading_beg').val(),
				'ELAssReadingLT':$('#id_totaltested_reading_letter').val(),
				'ELAssReadingWD':$('#id_totaltested_reading_word').val(),
				'ELAssReadingPR':$('#id_totaltested_reading_para').val(),
				'ELAssReadingSY':$('#id_totaltested_reading_story').val(),
				'ELAssNumberBG':$('#id_totaltested_number_beg').val(),
				'ELAssNumber1Digit':$('#id_totaltested_number_0-9').val(),
				'ELAssNumber2Digits':$('#id_totaltested_number_10-99').val(),
				'ELAssNumber3Digits':$('#id_totaltested_number_100-999').val(),
				});

				//LC1
		        requestData['tbl5Info']['BLAssessment'].push({								
				
				'ELAssLC1Tested':$('#id_lc1_endline_totaltested').val(),
				'ELAssLC1ReadingBG':$('#id_lc1_endline_reading_beg').val(),
				'ELAssLC1ReadingLT':$('#id_lc1_endline_reading_letter').val(),
				'ELAssLC1ReadingWD':$('#id_lc1_endline_reading_word').val(),
				'ELAssLC1ReadingPR':$('#id_lc1_endline_reading_para').val(),
				'ELAssLC1ReadingSY':$('#id_lc1_endline_reading_story').val(),
				'ELAssLC1NumberBG':$('#id_lc1_endline_number_beg').val(),
				'ELAssLC1Number1Digit':$('#id_lc1_endline_number_0-9').val(),
				'ELAssLC1Number2Digits':$('#id_lc1_endline_number_10-99').val(),
				'ELAssLC1Number3Digits':$('#id_lc1_endline_number_100-999').val(),
				'ELAssLC1OperationAC':$('#id_lc1_endline_add_can').val(),
				'ELAssLC1OperationACN':$('#id_lc1_endline_add_cant').val(),
			
				'ELAssLC1OperationSC':$('#id_lc1_endline_sub_can').val(),
				'ELAssLC1OperationSCN':$('#id_lc1_endline_sub_cant').val(),
			
				'ELAssLC1OperationMC':$('#id_lc1_endline_mul_can').val(),
				'ELAssLC1OperationMCN':$('#id_lc1_endline_mul_cant').val(),
				'ELAssLC1OperationDC':$('#id_lc1_endline_div_can').val(),
				'ELAssLC1OperationDCN':$('#id_lc1_endline_div_cant').val(),
				});
				
				//LC2
		        requestData['tbl5Info']['BLAssessment'].push({					

				'ELAssLC2Tested':$('#id_lc2_endline_totaltested').val(),
				'ELAssLC2ReadingBG':$('#id_lc2_endline_reading_beg').val(),
				'ELAssLC2ReadingLT':$('#id_lc2_endline_reading_letter').val(),
				'ELAssLC2ReadingWD':$('#id_lc2_endline_reading_word').val(),
				'ELAssLC2ReadingPR':$('#id_lc2_endline_reading_para').val(),
				'ELAssLC2ReadingSY':$('#id_lc2_endline_reading_story').val(),
				'ELAssLC2NumberBG':$('#id_lc2_endline_number_beg').val(),
				'ELAssLC2Number1Digit':$('#id_lc2_endline_number_0-9').val(),
				'ELAssLC2Number2Digits':$('#id_lc2_endline_number_10-99').val(),
				'ELAssLC2Number3Digits':$('#id_lc2_endline_number_100-999').val(),
				'ELAssLC2OperationAC':$('#id_lc2_endline_add_can').val(),
				'ELAssLC2OperationACN':$('#id_lc2_endline_add_cant').val(),
				'ELAssLC2OperationSC':$('#id_lc2_endline_sub_can').val(),
				'ELAssLC2OperationSCN':$('#id_lc2_endline_sub_cant').val(),
				'ELAssLC2OperationMC':$('#id_lc2_endline_mul_can').val(),
				'ELAssLC2OperationMCN':$('#id_lc2_endline_mul_cant').val(),
				'ELAssLC2OperationDC':$('#id_lc2_endline_div_can').val(),
				'ELAssLC2OperationDCN':$('#id_lc2_endline_div_cant').val(),
				});

				//LC3
		        requestData['tbl5Info']['BLAssessment'].push({					
				'ELAssLC3Tested':$('#id_lc3_endline_totaltested').val(),
				'ELAssLC3ReadingBG':$('#id_lc3_endline_reading_beg').val(),
				'ELAssLC3ReadingLT':$('#id_lc3_endline_reading_letter').val(),
				'ELAssLC3ReadingWD':$('#id_lc3_endline_reading_word').val(),
				'ELAssLC3ReadingPR':$('#id_lc3_endline_reading_para').val(),
				'ELAssLC3ReadingSY':$('#id_lc3_endline_reading_story').val(),
				'ELAssLC3NumberBG':$('#id_lc3_endline_number_beg').val(),
				'ELAssLC3Number1Digit':$('#id_lc3_endline_number_0-9').val(),
				'ELAssLC3Number2Digits':$('#id_lc3_endline_number_10-99').val(),
				'ELAssLC3Number3Digits':$('#id_lc3_endline_number_100-999').val(),
				'ELAssLC3OperationAC':$('#id_lc3_endline_add_can').val(),
				'ELAssLC3OperationACN':$('#id_lc3_endline_add_cant').val(),
				'ELAssLC3OperationSC':$('#id_lc3_endline_sub_can').val(),
				'ELAssLC3OperationSCN':$('#id_lc3_endline_sub_cant').val(),
				'ELAssLC3OperationMC':$('#id_lc3_endline_mul_can').val(),
				'ELAssLC3OperationMCN':$('#id_lc3_endline_mul_cant').val(),
				'ELAssLC3OperationDC':$('#id_lc3_endline_div_can').val(),
				'ELAssLC3OperationDCN':$('#id_lc3_endline_div_cant').val(),
				});

				//LC4
		        requestData['tbl5Info']['BLAssessment'].push({					

				'ELAssLC4Tested':$('#id_lc4_endline_totaltested').val(),
				'ELAssLC4ReadingBG':$('#id_lc4_endline_reading_beg').val(),
				'ELAssLC4ReadingLT':$('#id_lc4_endline_reading_letter').val(),
				'ELAssLC4ReadingWD':$('#id_lc4_endline_reading_word').val(),
				'ELAssLC4ReadingPR':$('#id_lc4_endline_reading_para').val(),
				'ELAssLC4ReadingSY':$('#id_lc4_endline_reading_story').val(),
				'ELAssLC4NumberBG':$('#id_lc4_endline_number_beg').val(),
				'ELAssLC4Number1Digit':$('#id_lc4_endline_number_0-9').val(),
				'ELAssLC4Number2Digits':$('#id_lc4_endline_number_10-99').val(),
				'ELAssLC4Number3Digits':$('#id_lc4_endline_number_100-999').val(),
				'ELAssLC4OperationAC':$('#id_lc4_endline_add_can').val(),
				'ELAssLC4OperationACN':$('#id_lc4_endline_add_cant').val(),
				'ELAssLC4OperationSC':$('#id_lc4_endline_sub_can').val(),
				'ELAssLC4OperationSCN':$('#id_lc4_endline_sub_cant').val(),
				'ELAssLC4OperationMC':$('#id_lc4_endline_mul_can').val(),
				'ELAssLC4OperationMCN':$('#id_lc4_endline_mul_cant').val(),
				'ELAssLC4OperationDC':$('#id_lc4_endline_div_can').val(),
				'ELAssLC4OperationDCN':$('#id_lc4_endline_div_cant').val(),
				});
				//Cons Endline
		        requestData['tbl5Info']['BLAssessment'].push({					


				'ELAssConsELTested':$('#id_cons_endline_totaltested').val(),
				'ELAssConsELReadingBG':$('#id_cons_endline_reading_beg').val(),
				'ELAssConsELReadingLT':$('#id_cons_endline_reading_letter').val(),
				'ELAssConsELReadingWD':$('#id_cons_endline_reading_word').val(),
				'ELAssConsELReadingPR':$('#id_cons_endline_reading_para').val(),
				'ELAssConsELReadingSY':$('#id_cons_endline_reading_story').val(),
				'ELAssConsELNumberBG':$('#id_cons_endline_number_beg').val(),
				'ELAssConsELNumber1Digit':$('#id_cons_endline_number_0-9').val(),
				'ELAssConsELNumber2Digits':$('#id_cons_endline_number_10-99').val(),
				'ELAssConsELNumber3Digits':$('#id_cons_endline_number_100-999').val(),
				'ELAssConsELOperationAC':$('#id_cons_endline_add_can').val(),
				'ELAssConsELOperationACN':$('#id_cons_endline_add_cant').val(),
				'ELAssConsELOperationSC':$('#id_cons_endline_sub_can').val(),
				'ELAssConsELOperationSCN':$('#id_cons_endline_sub_cant').val(),
				'ELAssConsELOperationMC':$('#id_cons_endline_mul_can').val(),
				'ELAssConsELOperationMCN':$('#id_cons_endline_mul_cant').val(),
				'ELAssConsELOperationDC':$('#id_cons_endline_div_can').val(),
				'ELAssConsELOperationDCN':$('#id_cons_endline_div_cant').val(),
				});

		       //Table 6 info
				
				requestData['tbl6Info'] = { };
		        requestData['tbl6Info']['readinglevels'] = [];

				//Beginner
		        requestData['tbl6Info']['readinglevels'].push({					

				'progressAcrossReadingBGBG':$('#id_baseline_beg_beg').val(),
				'progressAcrossReadingBGLT':$('#id_baseline_beg_letter').val(),
				'progressAcrossReadingBGWD':$('#id_baseline_beg_ word').val(),
				'progressAcrossReadingBGPR':$('#id_baseline_beg_ para').val(),
				'progressAcrossReadingBGSY':$('#id_baseline_beg_ story').val(),
				'progressAcrossReadingBGTotal':$('#id_baseline_beg_ total').val(),
				});
				
				//Letter
		        requestData['tbl6Info']['readinglevels'].push({									

				'progressAcrossReadingLTBG':$('#id_baseline_letter_beg').val(),
				'progressAcrossReadingLTLT':$('#id_baseline_letter_letter').val(),
				'progressAcrossReadingLTWD':$('#id_baseline_letter_ word').val(),
				'progressAcrossReadingLTPR':$('#id_baseline_letter_ para').val(),
				'progressAcrossReadingLTSY':$('#id_baseline_letter_ story').val(),
				'progressAcrossReadingLTTotal':$('#id_baseline_letter_ total').val(),
				});
				
				//Word
		        requestData['tbl6Info']['readinglevels'].push({						

				'progressAcrossReadingWDBG':$('#id_baseline_word_beg').val(),
				'progressAcrossReadingWDLT':$('#id_baseline_word_letter').val(),
				'progressAcrossReadingWDWD':$('#id_baseline_word_ word').val(),
				'progressAcrossReadingWDPR':$('#id_baseline_word_ para').val(),
				'progressAcrossReadingWDSY':$('#id_baseline_word_ story').val(),
				'progressAcrossReadingWDTotal':$('#id_baseline_word_ total').val(),
				});
				
				//Para
		        requestData['tbl6Info']['readinglevels'].push({						


				'progressAcrossReadingPRBG':$('#id_baseline_para_beg').val(),
				'progressAcrossReadingPRWD':$('#id_baseline_para_letter').val(),
				'progressAcrossReadingPRLT':$('#id_baseline_para_ word').val(),
				'progressAcrossReadingPRPR':$('#id_baseline_para_ para').val(),
				'progressAcrossReadingPRSY':$('#id_baseline_para_ story').val(),
				'progressAcrossReadingPRTotal':$('#id_baseline_para_ total').val(),
				});
				
				//Story
		        requestData['tbl6Info']['readinglevels'].push({						
				
				'progressAcrossReadingSYBG':$('#id_baseline_story_beg').val(),
				'proogressAcrossReadingSYLT':$('#id_baseline_story_letter').val(),
				'proogressAcrossReadingSYWD':$('#id_baseline_story_ word').val(),
				'progressAcrossReadingSYPR':$('#id_baseline_story_ para').val(),
				'progressAcrossReadingSYSY':$('#id_baseline_story_ story').val(),
				'progressAcrossReadingSYTotal':$('#id_baseline_story_ total').val(),
				});
		       

		        //Table 7 info
				requestData['tbl7Info'] = { };
		        requestData['tbl7Info']['std1_2'] = [];				

				//Baseline
		        requestData['tbl7Info']['std1_2'].push({

				'std1_2BLChildren':$('#id_baseline_children').val(),
				'std1_2BLReadingBG':$('#id_baseline_reading_beg').val(),
				'std1_2BLReadingLT':$('#id_baseline_reading_letter').val(),
				'std1_2BLReadingWD':$('#id_baseline_reading_word').val(),
				'std1_2BLReadingPR':$('#id_baseline_reading_para').val(),
				'std1_2BLReadingSY':$('#id_baseline_reading_story').val(),
				'std1_2BLNumberBG':$('#id_baseline_number_beg').val(),
				'std1_2BLNumber1Digit':$('#id_baseline_number_0to9').val(),
				'std1_2BLNumber2Digits':$('#id_baseline_number_10to99').val(),
				'std1_2BLOperationAC':$('#id_baseline_add_c').val(),
				'std1_2BLOperationACN':$('#id_baseline_add_cn').val(),
				'std1_2BLOperationSC':$('#id_baseline_sub_c').val(),
				
				});

				//Endlibe
		        requestData['tbl7Info']['std1_2'].push({						
				'std1_2BLOperationSCN':$('#id_baseline_sub_cn').val(),
				'std1_2ELChildren':$('#id_endline_children').val(),
				'std1_2ELReadingBG':$('#id_endline_reading_beg').val(),
				'std1_2ELReadingLT':$('#id_endline_reading_letter').val(),
				'std1_2ELReadingWD':$('#id_endline_reading_word').val(),
				'std1_2ELReadingPR':$('#id_endline_reading_para').val(),
				'std1_2ELReadingSY':$('#id_endline_reading_story').val(),
				'std1_2ELNumberBG':$('#id_endline_number_beg').val(),
				'std1_2ELNumber1Digit':$('#id_endline_number_0to9').val(),
				'std1_2ELNumber2Digits':$('#id_endline_number_10to99').val(),
				'std1_2ELOperationAC':$('#id_endline_add_c').val(),
				'std1_2ELOperationACN':$('#id_endline_add_cn').val(),
				'std1_2ELOperationSC':$('#id_endline_sub_c').val(),
				'std1_2ELOperationSCN':$('#id_endline_sub_cn').val(),
				});

		        //Table 8 info
				requestData['tbl8Info'] = { };
		        requestData['tbl8Info']['visits'] = [];				

				//Baseline
		        requestData['tbl8Info']['visits'].push({

				'camp1GovtOfficials':$('#id_camp1_govtofficials').val(),
				'camp1StateHead':$('#id_camp1_statehead').val(),
				'camp1ContentSRG':$('#id_camp1_contentsrg').val(),
				'Camp1BCDRL':$('#id_camp1_bc_drl').val(),
				'camp1MMETeam':$('#id_camp1_mmeteam').val(),
				'camp1Community':$('#id_camp1_community').val(),
				'camp1Others':$('#id_camp1_others').val(),
				});
				
				//cmap2
		        requestData['tbl8Info']['visits'].push({				
				'camp2GovtOfficials':$('#id_camp2_govtofficials').val(),
				'camp2StateHead':$('#id_camp2_statehead').val(),
				'camp2ContentSRG':$('#id_camp2_contentsrg').val(),
				'camp2BCDRL':$('#id_camp2_bc_drl').val(),
				'camp2MMETeam':$('#id_camp2_mmeteam').val(),
				'camp2Community':$('#id_camp2_community').val(),
				'camp2Others':$('#id_camp2_others').val(),
				});

				//cmap3
		        requestData['tbl8Info']['visits'].push({				

				'camp3GovtOfficials':$('#id_camp3_govtofficials').val(),
				'camp3StateHead':$('#id_camp3_statehead').val(),
				'camp3ContentSRG':$('#id_camp3_contentsrg').val(),
				'camp3BCDRL':$('#id_camp3_bc_drl').val(),
				'camp3MMETeam':$('#id_camp3_mmeteam').val(),
				'camp3Community':$('#id_camp3_community').val(),
				'camp3Others':$('#id_camp3_others').val(),
				});							
				
				//cmap4
		        requestData['tbl8Info']['visits'].push({				

				'camp4GovtOfficials':$('#id_camp4_govtofficials').val(),
				'camp4StateHead':$('#id_camp4_statehead').val(),
				'camp4ContentSRG':$('#id_camp4_contentsrg').val(),
				'camp4BCDRL':$('#id_camp4_bc_drl').val(),
				'camp4MMETeam':$('#id_camp4_mmeteam').val(),
				'camp4Community':$('#id_camp4_community').val(),
				'camp4Others':$('#id_camp4_others').val(),
				});


/*

				//Fetch table 8 info.
		        requestData['tbl1Info'] = 
		     
		        //Fetch table 8 info.
		        var trList = $('.table8 tbody').children();
				var campList = [];
				for(var i = 0; i < trList.length; i++){
   					var currentTr = $(trList[i]);
   					var newCamp = {};
  					
   					newCamp['govtofficials'] = (currentTr.find('.govtofficials')).val();
   					newCamp['Statehead'] = $(currentTr.find('.statehead')).val();
   					newCamp['ContentSRG'] = $(currentTr.find('.contentsrg')).val();
   					newCamp['BCDRL'] = $(currentTr.find('.bc_drl')).val();   					
   					newCamp['MMEteam'] = $(currentTr.find('.mmeteam')).val();
   					newCamp['Community'] = $(currentTr.find('.Community')).val(); 
   					newCamp['Others'] = $(currentTr.find('.other')).val();   					  					

   					campList.push(newCamp);

				}
				console.log('camplis', campList);		     

				//Fetch taable 1 info.   
 				
				 

	   //      	var camp1GovtOfficials = $('#id_camp1_govtofficials').val();
				// var camp1StateHead = $('#id_camp1_statehead').val();
				// var camp1ContentSRG = $('#id_camp1_contentsrg').val();
				// var Camp1BCDRL = $('#id_camp1_bc_drl').val();
				// var camp1MMETeam = $('#id_camp1_mmeteam').val();
				// var camp1Community = $('#id_camp1_community').val();
				// var camp1Others = $('#id_camp1_others').val();
				// var camp2GovtOfficials = $('#id_camp2_govtofficials').val();
				// var camp2StateHead = $('#id_camp2_statehead').val();
				// var camp2ContentSRG = $('#id_camp2_contentsrg').val();
				// var camp2BCDRL = $('#id_camp2_bc_drl').val();
				// var camp2MMETeam = $('#id_camp2_mmeteam').val();
				// var camp2Community = $('#id_camp2_community').val();
				// var camp2Others = $('#id_camp2_others').val();
				// var camp3GovtOfficials = $('#id_camp3_govtofficials').val();
				// var camp3StateHead = $('#id_camp3_statehead').val();
				// var camp3ContentSRG = $('#id_camp3_contentsrg').val();
				// var camp3BCDRL = $('#id_camp3_bc_drl').val();
				// var camp3MMETeam = $('#id_camp3_mmeteam').val();
				// var camp3Community = $('#id_camp3_community').val();
				// var camp3Others = $('#id_camp3_others').val();
				// var camp4GovtOfficials = $('#id_camp4_govtofficials').val();
				// var camp4StateHead = $('#id_camp4_statehead').val();
				// var camp4ContentSRG = $('#id_camp4_contentsrg').val();
				// var camp4BCDRL = $('#id_camp4_bc_drl').val();
				// var camp4MMETeam = $('#id_camp4_mmeteam').val();
				// var camp4Community = $('#id_camp4_community').val();
				// var camp4Others = $('#id_camp4_others').val();



				var jobject = {
					'campList' : campList,
					// 'camp1GovtOfficials': camp1GovtOfficials ,
					// 'camp1StateHead': camp1StateHead ,
					// 'camp1ContentSRG': camp1ContentSRG ,
					// 'Camp1BCDRL': Camp1BCDRL ,
					// 'camp1MMETeam': camp1MMETeam ,
					// 'camp1Community': camp1Community ,
					// 'camp1Others': camp1Others ,
					// 'camp2GovtOfficials': camp2GovtOfficials ,
					// 'camp2StateHead': camp2StateHead ,
					// 'camp2ContentSRG': camp2ContentSRG ,
					// 'camp2BCDRL': camp2BCDRL ,
					// 'camp2MMETeam': camp2MMETeam ,
					// 'camp2Community': camp2Community ,
					// 'camp2Others': camp2Others ,
					// 'camp3GovtOfficials': camp3GovtOfficials ,
					// 'camp3StateHead': camp3StateHead ,
					// 'camp3ContentSRG': camp3ContentSRG ,
					// 'camp3BCDRL': camp3BCDRL ,
					// 'camp3MMETeam': camp3MMETeam ,
					// 'camp3Community': camp3Community ,
					// 'camp3Others': camp3Others ,
					// 'camp4GovtOfficials': camp4GovtOfficials ,
					// 'camp4StateHead': camp4StateHead ,
					// 'camp4ContentSRG': camp4ContentSRG ,
					// 'camp4BCDRL': camp4BCDRL ,
					// 'camp4MMETeam': camp4MMETeam ,
					// 'camp4Community': camp4Community ,
					// 'camp4Others': camp4Others ,



				}
					
				console.log(jobject);				

				$.ajax({
					url: 'databaseconnection.php',
					method:'POST',
					data:jobject,
					dataType:'json',
					success:function(data)
					{
						//alert(data);
						console.log('server response', data);                            
						
					},
					error: function (xhr, ajaxOptions, thrownError) {
						console.log('server error.');
					}
				});

				console.log('at end');

		   	});
	   	});


		
*/  


	</script>
	





<!--		
		
		<script>
		 	document.getElementById('id_submission1').onchange = function() {
    			document.getElementById('id_teachingdays_camp2').disabled = !this.checked;

			};		
		</script>
		
		<script>
			//DISE CODE

		
		$("#id_disecode").on("blur", function () {
			  if ($(this).val().trim().length != 10) {
				   alert("Please Enter 10 digits School DISE code");//or any process you want to be done
				$( "#id_disecode" ).focus();
			  }
			});		
			
		$("#id_std3").on("blur", function () {
		if ($(this).val() >= 500 ) {
				   alert("Please enter No of children between 0 to 500");//or any process you want to be done
				$( "#id_std3" ).focus();
			  }
			});
			
		$("#id_std4").on("blur", function () {
			  if ($(this).val() >= 500) {
				   alert("Please enter No of children between 0 to 500");//or any process you want to be done
				$( "#id_std4" ).focus();
			  }
			});	
		
		$("#id_std5").on("blur", function () {
			  if ($(this).val() >= 500) {
				   alert("Please enter No of children between 0 to 500");//or any process you want to be done
				$( "#id_std5" ).focus();
			  }
			});
		
		//Teaching Days - Camp 1
		$("#id_teachingdays_camp1").on("blur", function () {
			  if ( $(this).val() >= 40 && $(this).val()<= 10)  {

				   alert("Number of teaching days cant be less than 0 and more than 1 ");//or any process you want to be done
				$( "#id_teachingdays_camp1" ).focus();
			  }
			});
		
		//Teaching Days - Camp 2
		$("#id_teachingdays_camp2").on("blur", function () {
				if ($(this).val() >= 40)  {
					alert("Number of teaching days cant be less than 0 and more than 1 ");//or any process you want to be done
				$( "#id_teachingdays_camp2" ).focus();
			}
			});
		//Teaching Days - Camp 3
		$("#id_teachingdays_camp3").on("blur", function () {
				if ($(this).val() >= 40)  {
					alert("Number of teaching days cant be less than 0 and more than 1 ");//or any process you want to be done
				$( "#id_teachingdays_camp3" ).focus();
			}
			});
			
		//Teaching Days - Camp 4
		$("#id_teachingdays_camp4").on("blur", function () {
				if ($(this).val() >= 40)  {
					alert("Number of teaching days cant be less than 0 and more than 1 ");//or any process you want to be done
				$( "#id_teachingdays_camp4" ).focus();
			}
			});
		//No. of children - 0% to 20%
		$("#id_totalchildren_0to20").on("blur", function () {
				if ($(this).val() >= 500)  {
					alert("Number children cant be more than 500");//or any process you want to be done
				$( "#id_totalchildren_0to20" ).focus();
			}
		});
		//No. of children - 21% to 50%
		$("#id_totalchildren_21to50").on("blur", function () {
				if ($(this).val() >= 500)  {
					alert("Number children cant be more than 500");//or any process you want to be done
				$( "#id_totalchildren_21to50" ).focus();
			}
		});
		//No. of children - 51% to 70%
		$("#id_totalchildren_51to70").on("blur", function () {
				if ($(this).val() >= 500)  {
					alert("Number children cant be more than 500");//or any process you want to be done
				$( "#id_totalchildren_51to70" ).focus();
			}
		});

		//No. of children - 51% to 70%
		$("#id_totalchildren_71to100").on("blur", function () {
				if ($(this).val() >= 501)  {
					alert("Number children cant be more than 500");//or any process you want to be done
				$( "#id_totalchildren_71to100" ).focus();
			}
		});

		//No. of children - 51% to 70%
		$("#id_totalchildren_71to100").on("blur", function () {
				if ($(this).val() >= 501)  {
					alert("Number children cant be more than 500");//or any process you want to be done
				$( "#id_totalchildren_71to100" ).focus();
			}
		});

		//Total no. of community meetings held in the village
		$("#id_totalcommunitymeetings").on("blur", function () {
				if ($(this).val() >= 51)  {
					alert("Enter no of community meeting held in village between 0 to 50");//or any process you want to be done
				$( "#id_totalcommunitymeetings" ).focus();
			}
		});
		
		//Number of visits Camp 1
		$("#id_noofvisits_camp1").on("blur", function () {
				if ($(this).val() >= 21)  {
					alert("Enter no of Visits in the village between  0 to 20");//or any process you want to be done
				$( "#id_noofvisits_camp1" ).focus();
			}
		});
		
		//Number of visits Camp 2
		$("#id_noofvisits_camp2").on("blur", function () {
				if ($(this).val() >= 21)  {
					alert("Enter no of Visits in the village between  0 to 20");//or any process you want to be done
				$( "#id_noofvisits_camp2" ).focus();
			}
		});
		
		//Number of visits Camp 3
		$("#id_noofvisits_camp3").on("blur", function () {
				if ($(this).val() >= 21)  {
					alert("Enter no of Visits in the village between  0 to 20");//or any process you want to be done
				$( "#id_noofvisits_camp3" ).focus();
			}
		});

		//Number of visits Camp 4
		$("#id_noofvisits_camp4").on("blur", function () {
				if ($(this).val() >= 21)  {
					alert("Enter no of Visits in the village between  0 to 20");//or any process you want to be done
				$( "#id_noofvisits_camp4" ).focus();
			}
		});

		//No. of family members who were aware of the learning level - Camp 1
		$("#id_noofamilymember_camp1").on("blur", function () {
				if ($(this).val() >= 21)  {
					alert("Enter no of Visits in the village between  0 to 20");//or any process you want to be done
				$( "#id_noofamilymember_camp1" ).focus();
			}
		});

		//No. of family members who were aware of the learning level - Camp 2
		$("#id_noofamilymember_camp2").on("blur", function () {
				if ($(this).val() >= 21)  {
					alert("Enter no of Visits in the village between  0 to 20");//or any process you want to be done
				$( "#id_noofamilymember_camp2" ).focus();
			}
		});

		//No. of family members who were aware of the learning level - Camp 3
		$("#id_noofamilymember_camp3").on("blur", function () {
				if ($(this).val() >= 21)  {
					alert("Enter no of Visits in the village between  0 to 20");//or any process you want to be done
				$( "#id_noofamilymember_camp3" ).focus();
			}
		});

		//No. of family members who were aware of the learning level - Camp 4
		$("#id_noofamilymember_camp4").on("blur", function () {
				if ($(this).val() >= 21)  {
					alert("Enter no of Visits in the village between  0 to 20");//or any process you want to be done
				$( "#id_noofamilymember_camp4" ).focus();
			}
		});
		

	</script>		   
	
	<script>
	  $(function() {
		$( "#id_teachingstart_date_camp1" ).datepicker();
	  });
	  $(function() {
		$( "#camp1enddate" ).datepicker();
	  });
	  $(function() {
		$( "#camp2startdate" ).datepicker();
	  });
	  $(function() {
		$( "#camp2enddate" ).datepicker();
	  });
	  $(function() {
		$( "#camp3startdate" ).datepicker();
	  });
	  $(function() {
		$( "#camp3enddate" ).datepicker();
	  });
	  $(function() {
		$( "#camp4startdate" ).datepicker();
	  });
	  $(function() {
		$( "#camp4enddate" ).datepicker();
	  });
	 </script>
	 
	 <script>
	function setFocusOnLoad() {}
	 $(document).ready(function()
		{
	  if (true) {
		$(".submission_1").parent().css('background', '#00b0f0');
		$(".submission_12").parent().parent().css('background', '#00b0f0');
		$("[id$=submit1]").attr("checked", false);
	  }
	  if (true) {
		$(".submission_2").parent().css('background', '#ffff00');
		$(".submission_22").parent().parent().css('background', '#ffff00');
		$("[id$=submit2]").attr("checked", false);
	  }
	  if (true) {
		$(".submission_3").parent().css('background', '#FF66FF');
		$(".submission_32").parent().parent().css('background', '#FF66FF');
		$("[id$=submit3]").attr("checked", false);
	  }
	  if (true) {
		$(".submission_4").parent().css('background', '#92d050');
		$(".submission_42").parent().parent().css('background', '#92d050');
		$("[id$=submit4]").attr("checked", false);
	  }
	 
		});

		</script>
					
							</form>
						</table>
				<br><br><br><br><br> -->
	
</body>
</Html>