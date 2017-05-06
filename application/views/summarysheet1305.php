<Html>
	<head>
		<link rel="stylesheet" type = "text/css" href="summary_sheet.css">
		<title>Read India Report Card Data Entry </title>

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->		
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>		
		<!--Datepicker -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css">
		<link rel="stylesheet" type="text/css" href="SummarySheet.js">
		
	</head>
	<body>
		<!-- Saave Button-->
		
		<center> <input type="submit" name="" value="Save" style="width:100px;font-family:calibri;font-size:17px;" /> </center><br />
		
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
					<td><center><input  id="" name="" type="checkbox" value="1" /> </center></td>
					<td><center><input  id="" name="" type="checkbox" value="1" /> </center></td>
					<td><center><input  id="" name="" type="checkbox" value="1" /> </center></td>
					<td><center><input  id="" name="" type="checkbox" value="1" /> </center></td>
					<td><center><input  id="" name="" type="checkbox" value="1" /> </center></td>
				</tr>
			</table>     
		</center> 

		<!-- Table 1 Start from here -->
			<font color="#96763B" face="calibri" size="4.5"><b>TABLE 1: Basic Information</b></font></div><div class="pbBody">           
			<table align="center" border="1px" bordercolor="#538467" cellpadding="2" cellspacing="0" id="table1" style="border-collapse:collapse;" width="98%">
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
				
			</tr> </tbody>
		  
		</table>
			
			<br><br><br><br><br>
			<!-- Table 2 start from here --->			
			<table border="0" width="100%"> <tbody>
			    <tr>
					<td valign="top" width="40%"><div class="apexp"><div class="individualPalette"><div class="Custom92Block"><div id="j_id0:j_id2:j_id163:j_id165" class="bPageBlock brandSecondaryBrd apexDefaultPageBlock secondaryPalette"><div class="pbHeader"><font color="#96763B" face="calibri" size="4.5"><b>TABLE 2: MISC INFORMATION</b></font></div><div class="pbBody">           
						<table align="left" border="1px" bordercolor="#538467" cellpadding="2" cellspacing="0" id="table2" style="border-collapse:collapse;" width="90%">
							<tbody>
							<tr align="center">
								<td colspan="5" id="ft">Community Engagement Information (to be filled at the end of all camps from the Community Engagement sheet)</td>
							</tr>
							 
							<tr align="center">
								<!--Total no. of community meetings held in the village -->
								<td id="" width="51%">Total no. of community meetings held in the village</td>
								<td colspan="4" id="ft" width="10%"><input class="submission_4" id="" name="" size="20" style="width:50px;" type="text"></td>	
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
								<td width="10%" style=""><input class="submission_1" id="id_noofvisits_camp1" name="" size="20" style="width:35px;" type="text"></td>
								<td width="11%"><input class="submission_2" id="id_noofvisits_camp2" name="" size="20" style="width:35px;" type="text"></td>
								<td width="13%"><input class="submission_3" id="id_noofvisits_camp3" name="" size="20" style="width:35px;" type="text"></td>
								<td width="10%"><input class="submission_4" id="id_noofvisits_camp4" name="" size="20" style="width:35px;" type="text"></td>
							</tr>
							
							<!-- Family Member Aware of Program -->
							<tr align="center">
								<td id="" width="49%"> No. of family members who were aware of the learning level</td>
								<td width="10%" style=""><input class="submission_1" id="" name="id_noofamilymember_camp1" size="20" style="width:35px;" type="text"></td>								
								<td width="11%"><input class="submission_2" id="id_noofamilymember_camp2" name="" size="20" style="width:35px;" type="text"></td>								
								<td width="13%"><input class="submission_3" id="id_noofamilymember_camp3" name="" size="20" style="width:35px;" type="text"></td>								
								<td width="10%"><input class="submission_4" id="id_noofamilymember_camp4" name="" size="20" style="width:35px;" type="text"></td>								
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
									<select id="id_volunteer1_type" name="" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select></td>
								
								<!-- 1st Volunteer Highest edu -->									
								<td width="32%">
									<select id="id_volunteer1_edu" name="" style="width:120px;">
										<option value="">--None--</option>
										<option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select>
								</td>
						
								<!-- 1st Volunteer Attendance for all 4 camps -->	
								<td width="32%" style=""><input class="submission_1" id="id_volunteer1_attendance_camp1" name="" size="20" style="width:35px;" type="text"> </td>									
								<td width="32%"><input class="submission_2" id="id_volunteer1_attendance_camp2" name="" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_3" id="id_volunteer1_attendance_camp3" name="" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_4" id="id_volunteer1_attendance_camp4" name="" size="20" style="width:35px;" type="text"></td>									</td>
							</tr>
							
							<tr>
								<td class="dataCell" id="" colspan="1"></td>
							</tr>
							
							<tr>
								<!-- 2nd Volunteer -->
								<td align="center" width="3%"><b>V/T 2</b></td>
								
								<!-- 2nd Volunteer Type -->
								<td width="61%">
									<select id="id_volunteer2_type" name="" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select>
								</td>
								
								<!-- 2nd Volunteer Highest edu -->
								<td width="32%">
									<select id="id_volunteer2_edu" name="" style="width:120px;">
										<option value="">--None--</option>
										<option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select>
								</td>
								<!-- 2nd Volunteer Attendance for all 4 camps -->
								<td width="32%" style=""><input class="submission_1" id="id_volunteer2_attendance_camp1" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_2" id="id_volunteer2_attendance_camp2" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_3" id="id_volunteer2_attendance_camp3" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_4" id="id_volunteer2_attendance_camp4" name="" size="20" style="width:35px;" type="text"></td>									
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
									<select id="id_volunteer3_edu" name="" style="width:120px;">
										<option value="">--None--</option>
										<option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select>
								</td>
								
								<!-- 3rd Volunteer Attendance for all 4 camps -->
								<td width="32%" style=""><input class="submission_1" id="id_volunteer3_attendance_camp1" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_2" id="id_volunteer3_attendance_camp2" name="" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_3" id="id_volunteer3_attendance_camp3" name="" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_4" id="id_volunteer3_attendance_camp4" name="" size="20" style="width:35px;" type="text"></td>									</td>
							</tr>
							
							<tr>
								<!-- 4th Volunteer -->
								<td align="center" width="3%"><b>V/T 4</b></td>
								
								<!-- 4th Volunteer Type -->
								<td width="61%">
									<select id="id_volunteer4_type" name="" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select></td>
									
								<!-- 4th Volunteer Highest edu -->			
								<td width="32%">
									<select id="id_volunteer4_edu" name="" style="width:120px;">
										<option value="">--None--</option>
										<option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select>
								</td>
								
								<!-- 4th Volunteer Attendance for all 4 camps -->
								<td width="32%" style=""><input class="submission_1" id="id_volunteer4_attendance_camp1" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_2" id="id_volunteer4_attendance_camp2" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_3" id="id_volunteer4_attendance_camp3" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_4" id="id_volunteer4_attendance_camp4" name="" size="20" style="width:35px;" type="text"></td>									
							</tr>							

							<tr>
								<!-- 5th Volunteer -->
								<td align="center" width="3%"><b>V/T 5</b></td>
								
								<!-- 5th Volunteer Type -->
								<td width="61%">
									<select id="id_volunteer5_type" name="" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select>
								</td>

								<!-- 5th Volunteer Highest edu -->
								<td width="32%">
									<select id="id_volunteer5_edu" name="" style="width:120px;">
										<option value="">--None--</option>
										<option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select>
								</td>
								
								<!-- 5th Volunteer Attendance for all 4 camps -->
								<td width="32%" style=""><input class="submission_1" id="id_volunteer5_attendance_camp1" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_2" id="id_volunteer5_attendance_camp2" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_3" id="id_volunteer5_attendance_camp3" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_4" id="id_volunteer5_attendance_camp4" name="" size="20" style="width:35px;" type="text"></td>									
							</tr>							

							<tr>
								<!-- 6th Volunteer -->
								<td align="center" width="3%"><b>V/T 6</b></td>
								
								<!-- 6th Volunteer Type -->
								<td width="61%">
									<select id="id_volunteer6_type" name="" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select>
								</td>
								
								<!-- 6th Volunteer Highest edu -->			
								<td width="32%">
									<select id="id_volunteer6_edu" name="" style="width:120px;">
										<option value="">--None--</option>
										<option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select>
								</td>
								
								<!-- 6th Volunteer Attendance for all 4 camps -->	
								<td width="32%" style=""><input class="submission_1" id="id_volunteer6_attendance_camp1" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_2" id="id_volunteer6_attendance_camp2" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_3" id="id_volunteer6_attendance_camp3" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_4" id="id_volunteer6_attendance_camp4" name="" size="20" style="width:35px;" type="text"></td>									
							</tr>
							
							<tr>
								<!-- 7th Volunteer -->
								<td align="center" width="3%"><b>V/T 7</b></td>
								
								<!-- 7th Volunteer Type -->
								<td width="61%">
									<select id="id_volunteer7_type" name="" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select>
								</td>
								
								<!-- 7th Volunteer Highest edu -->	
								<td width="32%">
									<select id="id_volunteer7_edu" name="" style="width:120px;">
										<option value="">--None--</option>
										<option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select>
								</td>
								
								<!-- 7th Volunteer Attendance for all 4 camps -->	
								<td width="32%" style=""><input class="submission_1" id="id_volunteer7_attendance_camp1" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_2" id="id_volunteer7_attendance_camp2" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_3" id="id_volunteer7_attendance_camp3" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_4" id="id_volunteer7_attendance_camp4" name="" size="20" style="width:35px;" type="text"></td>									
							</tr>
							
							<tr>
							
								<!-- 8th Volunteer -->
								<td align="center" width="3%"><b>V/T 8</b></td>
								
								<!-- 8th Volunteer Type -->
								<td width="61%">
									<select id="id_volunteer8_type" name="" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select>
								</td>
								
								<!-- 8th Volunteer Highest edu -->	
								<td width="32%">
									<select id="id_volunteer8_edu" name="" style="width:120px;">
										<option value="">--None--</option>
										<option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select>
								</td>
								
								<!-- 8th Volunteer Attendance for all 4 camps -->
								<td width="32%" style=""><input class="submission_1" id="id_volunteer8_attendance_camp1" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_2" id="id_volunteer8_attendance_camp2" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_3" id="id_volunteer8_attendance_camp3" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_4" id="id_volunteer8_attendance_camp4" name="" size="20" style="width:35px;" type="text"></td>									
							</tr>
							
							<tr>
								<!-- 9th Volunteer -->
								<td align="center" width="3%"><b>V/T 9</b></td>
								
								<!-- 9th Volunteer Type -->
								<td width="61%">
									<select id="id_volunteer9_type" name="" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select>
								</td>
								
								<!-- 9th Volunteer Highest edu -->
								<td width="32%">
									<select id="id_volunteer9_edu" name="" style="width:120px;">
										<option value="">--None--</option>
										<option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select>
								</td>
								
								<!-- 9th Volunteer Attendance for all 4 camps -->	
								<td width="32%" style=""><input class="submission_1" id="id_volunteer9_attendance_camp1" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_2" id="id_volunteer9_attendance_camp2" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_3" id="id_volunteer9_attendance_camp3" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_4" id="id_volunteer9_attendance_camp4" name="" size="20" style="width:35px;" type="text"></td>								
							</tr>
							
							<tr>
								<!-- 10th Volunteer -->
								<td align="center" width="3%"><b>V/T 10</b></td>
								
								<!-- 10th Volunteer Type -->
								<td width="61%">
									<select id="id_volunteer10_type" name="" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select>
								</td>
								
								<!-- 10th Volunteer Highest edu -->			
								<td width="32%">
									<select id="id_volunteer10_edu" name="" style="width:120px;">
										<option value="">--None--</option>
										<option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select>
								</td>
								
								<!-- 10th Volunteer Attendance for all 4 camps -->
								<td width="32%" style=""><input class="submission_1" id="id_volunteer10_attendance_camp1" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_2" id="id_volunteer10_attendance_camp2" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_3" id="id_volunteer10_attendance_camp3" name="" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_4" id="id_volunteer10_attendance_camp4" name="" size="20" style="width:35px;" type="text"></td>									
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
				<!-- Table 4 Headings -->
				<tr align="center">
					<td colspan="2" id = " ">Report Section1</td>
					<td id = " ">Enrolled</td>
					<td id = " ">Tested</td>
					<td colspan="5" id = " ">Reading </td>
					<td colspan="4" id = " ">Number Recognition</td>
					<td id = " ">Instructions</td>
				</tr>
				
				<tr align="center">
					<td id = " ">Beginner</td>
					<td id = " ">Letter</td>
					<td id = " ">Word</td>
					<td id = " ">Para</td>
					<td id = " ">Story</td>
					<td id = " ">Beginner</td>
					<td id = " ">0-9</td>
					<td id = " ">10-99</td>
					<td id = " ">100-999</td>
				</tr>
			    
				<!-- Table 4 - for STD 3 -->
				<tr align="center">
					<td colspan="2" height="26" id = " ">Std. 3</td>
					<!-- Table 4 - for STD 3 - Enrollment-->
					<td height="26" width="9%" style=""><input class="submission_1" id = " ">  </td>
					
					<!-- Table 4 - for STD 3 - Tested-->
					<td height="26" width="6%" style=""><input class="submission_1" id = " "></td>
					
					<!-- Table 4 - for STD 3 - Reading - Beg -->
					<td height="26" width="4%" style=""><input class="submission_1" id = " "> </td>
					
					<!-- Table 4 - for STD 3 - Reading - Letter-->
					<td height="26" width="4%" style=""><input class="submission_1" id = " "> </td>
					
					<!-- Table 4 - for STD 3 - Reading - Word-->
					<td height="26" width="4%" style=""><input class="submission_1" id = " "> </td>
					
					<!-- Table 4 - for STD 3 - Reading - Para-->
					<td height="26" width="3%" style=""><input class="submission_1" id = " "></td>					
					
					<!-- Table 4 - for STD 3 - Reading - Story-->
					<td height="26" width="3%" style=""><input class="submission_1" id = " "></td>
					
					<!-- Table 4 - for STD 3 - Number - Beg-->
					<td height="26" width="4%" style=""><input class="submission_1" id = " ">  </td>
					
					<!-- Table 4 - for STD 3 - Number - 0to9-->
					<td height="26" width="4%" style=""><input class="submission_1" id = " "> </td>
					
					<!-- Table 4 - for STD 3 - Number - 10to99-->
					<td height="26" width="5%" style=""><input class="submission_1" id = " "> </td>
					
					<!-- Table 4 - for STD 3 - Number - 100to999-->
					<td height="26" width="5%" style=""><input class="submission_1" id = " "> </td>
					
					<td height="26" id = " ">Update from Std 3 Universal Child List</td>
				</tr>
				<!-- Table 4 - for STD 4 -->			
				<tr align="center">
				  <td colspan="2" id = " "> Std. 4 </td>				  
				  <td width="9%" style=""><input class="submission_1" id = " ">  </td>
				  <td width="6%" style=""><input class="submission_1" id = " ">  </td>
				  <td style=""><input class="submission_1" id = " "> </td>
				  <td width="4%" style=""><input class="submission_1" id = " "> </td>
				  <td width="4%" style=""><input class="submission_1" id = " "> </td>
				  <td width="3%" style=""><input class="submission_1" id = " "></td>
				  <td width="3%" style=""><input class="submission_1" id = " "></td>
				  <td width="4%" style=""><input class="submission_1" id = " "></td>
				  <td width="4%" style=""><input class="submission_1" id = " "></td>
				  <td width="5%" style=""><input class="submission_1" id = " "></td>
				  <td width="5%" style=""><input class="submission_1" id = " "></td>
				  <td id = " ">Update from Std 4 Universal Child List  </td>
				 
				</tr>
				
				<tr align="center">
				  <td colspan="2" id = " "> Std. 5 </td>				  
				  <td width="9%" style=""><input class="submission_1" id = " ">  </td>
				  <td width="6%" style=""><input class="submission_1" id = " ">  </td>
				  <td style=""><input class="submission_1" id = " "> </td>
				  <td width="4%" style=""><input class="submission_1" id = " "> </td>
				  <td width="4%" style=""><input class="submission_1" id = " "> </td>
				  <td width="3%" style=""><input class="submission_1" id = " "></td>
				  <td width="3%" style=""><input class="submission_1" id = " "></td>
				  <td width="4%" style=""><input class="submission_1" id = " "></td>
				  <td width="4%" style=""><input class="submission_1" id = " "></td>
				  <td width="5%" style=""><input class="submission_1" id = " "></td>
				  <td width="5%" style=""><input class="submission_1" id = " "></td>
				  <td id = " ">Update from Std 4 Universal Child List  </td>
				 
				</tr>

				<tr align="center">
				   <td id = " ">BaseLine <br>Totals</td>
				   <td id = " ">First Baseline<br>Before Endline 1</td>
				   <td id = " ">0</label></td>
				   <td id = " ">0</label></td>
				   <td id = " ">0</label></td>
				   <td id = " ">0</label></td>
				   <td id = " ">0</label></td>
				   <td id = " ">0</label></td>
				   <td id = " ">0</label></td>
				   <td id = " ">0</label></td>
				   <td id = " ">0</label></td>
				   <td id = " ">0</label></td>
				   <td id = " ">0</label></td>
				   <td id = " ">Add data for all the classes in this box</td>
				</tr>

				<tr align="center">
					<td id = " ">Additional children<br>Before Endline 2</td>
					<td id = " ">NA</td>
					<td width="6%"><input class="submission_2" id = " "></td>
					<td width="4%"><input class="submission_2" id = " "></td>
					<td width="4%"><input class="submission_2" id = " "></td>
					<td width="4%"><input class="submission_2" id = " "></td>
					<td width="3%"><input class="submission_2" id = " "></td>
					<td width="3%"><input class="submission_2" id = " "></td>
					<td width="4%"><input class="submission_2" id = " "></td>
					<td width="4%"><input class="submission_2" id = " "></td>
					<td width="5%"><input class="submission_2" id = " "></td>					
					<td width="5%"><input class="submission_2" id = " "></td>					
					<td id = " ">Update from Universal Child Sheet for each class and add all three classes</td>
				</tr>

				<tr align="center">
					<td id = " "> Additional children<br>Before Endline 3</td>
					<td id = " ">  NA</td>
					<td width="6%"><input class="submission_3" id = " "></td>
					<td width="4%"><input class="submission_3" id = " "></td>
					<td width="4%"><input class="submission_3" id = " "></td>
					<td width="4%"><input class="submission_3" id = " "></td>
					<td width="3%"><input class="submission_3" id = " "></td>
					<td width="3%"><input class="submission_3" id = " "></td>
					<td width="4%"><input class="submission_3" id = " "></td>
					<td width="4%"><input class="submission_3" id = " "></td>
					<td width="5%"><input class="submission_3" id = " "></td>
					<td width="5%"><input class="submission_3" id = " "></td>
					<td id = " ">Update from Universal Child Sheet for each class and add all three classes</td>
				</tr>

				  
			   <tr align="center">
				   <td id = " ">Additional children<br>Before Endline 4</td>
				   <td id = " ">NA</td>
				   <td width="6%"><input class="submission_4" id = " "></td>
				   <td width="4%"><input class="submission_4" id = " "></td>
				   <td width="4%"><input class="submission_4" id = " "></td>
				   <td width="4%"><input class="submission_4" id = " "></td>
				   <td width="3%"><input class="submission_4" id = " "></td>
				   <td width="3%"><input class="submission_4" id = " "></td>
				   <td width="4%"><input class="submission_4" id = " "></td>
				   <td width="4%"><input class="submission_4" id = " "></td>
				   <td width="5%"><input class="submission_4" id = " "></td>
				   <td width="5%"><input class="submission_4" id = " "></td>
				   <td id = " ">Update from Universal Child Sheet for each class and add all three classes</td>
				</tr>

				<tr align="center">
					<td colspan="2" height="41" id = " ">CONSOLIDATED BASELINE</td>
					<td height="41" id = " ">0</label></td>
					<td height="41" id = " ">0</label></td>
					<td height="41" id = " ">0</label></td>
					<td height="41" id = " ">0</label></td>
					<td height="41" id = " ">0</label></td>
					<td height="41" id = " ">0</label></td>
					<td height="41" id = " ">0</label></td>
					<td height="41" id = " ">0</label></td>
					<td height="41" id = " ">0</label></td>
					<td height="41" id = " ">0</label></td>
					<td height="41" id = " ">0</label></td>
					<td height="41" id = " ">Add data for all the four baseline totals</td>
				</tr>
					
				<tr>
					<td colspan="16" id = " ">*Consolidated baseline will only be calculated after 4 Camps are over in this Schlool/village.</td>
				</tr>

				</tbody>
			</table>
			
			<br><br>
			<!-- Table 5 start from here -->			
			<font color="#96763B" face="calibri" size="4.5"><b>TABLE 5: ENDLINE ASSESSMENT ( To be filled form "LEARNING CAMP PROGRESS SHEETS")</b></font></div><div class="pbBody">           
			<table border="1px" bordercolor="#538467" cellpadding="2" cellspacing="0" style="border-collapse:collapse;" width="100%">   
				<tbody>
				<tr align="center">
				  <td id = " ">Endline</td>
				  <td id = " ">Total Tested <br>(Std 3 + 4 + 5)</td>
				  <td colspan="5" id = " ">Reading </td>
				  <td colspan="4" id = " ">Number Recognition</td>
				  <td colspan="8" id = " ">Operations</td>
			   </tr>
			   <tr align="center">
				   <td id = " ">Beginner</td>
				   <td id = " ">Letter</td>
				   <td id = " ">Word</td>
				   <td id = " ">Para</td>
				   <td id = " ">Story</td>
				   <td id = " ">Beginner</td>
				   <td id = " ">0-9</td>
				   <td id = " ">10-99</td>
				   <td id = " ">100-999</td>
				   <td colspan="2" id = " ">Add</td>
				   <td colspan="2" id = " ">Sub</td>
				   <td colspan="2" id = " ">Mul</td>
				   <td colspan="2" id = " ">Div</td>
			   </tr>

				<tr align="center">
				  <td id = " ">Can</td>
				  <td id = " ">Cannot</td>
				  <td id = " ">Can</td>
				  <td id = " ">Cannot</td>
				  <td id = " ">Can</td>
				  <td id = " ">Cannot</td>
				  <td id = " ">Can</td>
				  <td id = " ">Cannot</td>
			    </tr>
				   
				<tr align="center">
				   <td id = " ">Selected Children Baseline<br>(before endline 1)</td>
				   <td width="9%" style=""><input class="submission_1" id = " "></td>
				   <td width="5%" style=""><input class="submission_1" id = " "></td>
				   <td width="4%" style=""><input class="submission_1" id = " "></td>
				   <td width="4%" style=""><input class="submission_1" id = " "></td>
				   <td width="3%" style=""><input class="submission_1" id = " "></td>
				   <td width="4%" style=""><input class="submission_1" id = " "></td>
				   <td width="6%" style=""><input class="submission_1" id = " "></td>
				   <td width="4%" style=""><input class="submission_1" id = " "></td>
				   <td width="4%" style=""><input class="submission_1" id = " "></td>
				   <td width="5%" style=""><input class="submission_1" id = " "></td>
				   <td colspan="8" width="5%"></td>
			   </tr>
			   
				<tr align="center">

				   <td id = " ">LC 1 Endline</td>
				   <td width="9%" style=""><input class="submission_1" id = " "></td>
				   <td width="5%" style=""><input class="submission_1" id = " "></td>
				   <td width="4%" style=""><input class="submission_1" id = " "></td>
				   <td width="4%" style=""><input class="submission_1" id = " "></td>
				   <td width="3%" style=""><input class="submission_1" id = " "></td>
				   <td width="4%" style=""><input class="submission_1" id = " "></td>
				   <td width="6%" style=""><input class="submission_1" id = " "></td>
				   <td width="4%" style=""><input class="submission_1" id = " "> </td>
				   <td width="4%" style=""><input class="submission_1" id = " "></td>
				   <td width="5%" style=""><input class="submission_1" id = " "></td>
				   <td width="5%" style=""><input class="submission_1" id = " "></td>
				   <td width="5%" style=""><input class="submission_1" id = " "></td>
				   <td width="4%" style=""><input class="submission_1" id = " "></td>
				   <td width="4%" style=""><input class="submission_1" id = " "></td>
				   <td width="4%" style=""><input class="submission_1" id = " "></td>
				   <td width="4%" style=""><input class="submission_1" id = " "></td>
				   <td width="4%" style=""><input class="submission_1" id = " "></td>
				   <td width="3%" style=""><input class="submission_1" id = " "></td>
				</tr>
					  
				<tr align="center">
				  <td id = " ">LC 2 Endline</td>
				  <td width="9%"><input class="submission_2" id = " "> </td>					  
				  <td width="5%"><input class="submission_2" id = " "> </td>
				  <td width="4%"><input class="submission_2" id = " "> </td>
				  <td width="4%"><input class="submission_2" id = " "> </td>
				  <td width="3%"><input class="submission_2" id = " "> </td>
				  <td width="4%"><input class="submission_2" id = " "> </td>
				  <td width="6%"><input class="submission_2" id = " "> </td>
				  <td width="4%"><input class="submission_2" id = " "> </td>
				  <td width="4%"><input class="submission_2" id = " "> </td>
				  <td width="5%"><input class="submission_2" id = " "> </td>
				  <td width="5%"><input class="submission_2" id = " "> </td>
				  <td width="5%"><input class="submission_2" id = " "> </td>
				  <td width="4%"><input class="submission_2" id = " "> </td>
				  <td width="4%"><input class="submission_2" id = " "> </td>
				  <td width="4%"><input class="submission_2" id = " "> </td>
				  <td width="4%"><input class="submission_2" id = " "> </td>
				  <td width="4%"><input class="submission_2" id = " "> </td>
				  <td width="3%"><input class="submission_2" id = " "> </td>
				</tr>
				
				<tr align="center">
				 <td id = " ">LC 3 Endline</td>
				 <td width="9%"><input class="submission_3" id = " "> </td>					  
				  <td width="5%"><input class="submission_3" id = " "> </td>
				  <td width="4%"><input class="submission_3" id = " "> </td>
				  <td width="4%"><input class="submission_3" id = " "> </td>
				  <td width="3%"><input class="submission_3" id = " "> </td>
				  <td width="4%"><input class="submission_3" id = " "> </td>
				  <td width="6%"><input class="submission_3" id = " "> </td>
				  <td width="4%"><input class="submission_3" id = " "> </td>
				  <td width="4%"><input class="submission_3" id = " "> </td>
				  <td width="5%"><input class="submission_3" id = " "> </td>
				  <td width="5%"><input class="submission_3" id = " "> </td>
				  <td width="5%"><input class="submission_3" id = " "> </td>
				  <td width="4%"><input class="submission_3" id = " "> </td>
				  <td width="4%"><input class="submission_3" id = " "> </td>
				  <td width="4%"><input class="submission_3" id = " "> </td>
				  <td width="4%"><input class="submission_3" id = " "> </td>
				  <td width="4%"><input class="submission_3" id = " "> </td>
				  <td width="3%"><input class="submission_3" id = " "> </td>
			   </tr>
			   
			   <tr align="center">         
				<td id = " ">LC 4 Endline</td>
				<td width="9%"><input class="submission_1" id = " "> </td>
				<td width="5%"><input class="submission_1" id = " "> </td>
				<td width="4%"><input class="submission_1" id = " "> </td>
				<td width="4%"><input class="submission_1" id = " "> </td>
				<td width="3%"><input class="submission_1" id = " "> </td>
				<td width="4%"><input class="submission_1" id = " "> </td>
				<td width="6%"><input class="submission_1" id = " "> </td>
				<td width="4%"><input class="submission_1" id = " "> </td>
				<td width="4%"><input class="submission_1" id = " "> </td>
				<td width="5%"><input class="submission_1" id = " "> </td>
				<td width="5%"><input class="submission_1" id = " "> </td>
				<td width="5%"><input class="submission_1" id = " "> </td>
				<td width="4%"><input class="submission_1" id = " "> </td>
				<td width="4%"><input class="submission_1" id = " "> </td>
				<td width="4%"><input class="submission_1" id = " "> </td>
				<td width="4%"><input class="submission_1" id = " "> </td>
				<td width="4%"><input class="submission_1" id = " "> </td>
				<td width="3%"><input class="submission_1" id = " "> </td>
			 </tr>
		<tr align="center">        
				<td id = " ">Consolidated Endline Of Selected Children*</td>
				<td width="9%"><input class="submission_1" id = " ">
				</td>
				<td width="5%"><input class="submission_1" id = " ">
				</td>
				<td width="4%"><input class="submission_1" id = " ">
				</td>
				<td width="4%"><input class="submission_1" id = " ">
			  
				</td>
				<td width="3%"><input class="submission_1" id = " ">
			  
				</td>
				<td width="4%"><input class="submission_1" id = " ">
			  
				</td>
				<td width="6%"><input class="submission_1" id = " ">
			  
				
				</td>
				<td width="4%"><input class="submission_1" id = " ">
			  
				  
				</td>
				<td width="6%"><input class="submission_1" id = " ">
			  
				</td>    
				<td width="6%"><input class="submission_1" id = " ">
			  
				</td>
				<td width="4%"><input class="submission_1" id = " ">
			  
				</td>
				<td width="5%"><input class="submission_1" id = " ">
			  
				  
				</td>
				<td width="5%"><input class="submission_1" id = " ">
			   
				</td>
				<td width="5%"><input class="submission_1" id = " ">
			   
				</td>
				<td width="4%"><input class="submission_1" id = " ">
			   
				  
				</td>
				<td width="4%"><input class="submission_1" id = " ">
				</td>
				<td width="4%"><input class="submission_1" id = " ">
				</td>
				<td width="3%"><input class="submission_1" id = " ">
				</td>
		   </tr>
		   <tr>
		   <td colspan="19" id = " ">* The last endline of all selected children will be considered while calculating consolidated endline
		   </td>
		   </tr>
					   </tbody></table></div>
					   <div class="pbFooter secondaryPalette"><div class="bg"></div></div></div></div></div></div>

	<br><br>


		   <!--  Table 6 start from here -->
		 <div class="apexp"><div class="individualPalette"><div class="Custom92Block"><div id = " ">
		   
		   <div class="pbHeader"><font color="#96763B" face="calibri" size="4"><b>TABLE 6: PROGRESS ACROSS READING LEVELS (Baseline vs Endline 4)*</b></font></div><div class="pbBody">           
						<table border="1px" bordercolor="#538467" cellpadding="2" cellspacing="0" style="border-collapse:collapse;" width="100%">   
						 
						  <tbody><tr align="center">
						  <td id = " ">Learning levels</td>
						  <td id = " ">Beginner</td>
						  <td id = " ">Letter</td>
						  <td id = " ">Word</td>
						  <td id = " ">Para</td>
						  <td id = " ">Story</td>
						  <td id = " ">Total (Baseline)</td>
						  </tr>
						  <tr align="center">
						  <td id = " ">Beginner</td>
						 <td width="13%"><input class="submission_1" id = " "></td>
						  <td width="13%"><input class="submission_1" id = " ">
						  </td>
						  <td width="12%"><input class="submission_1" id = " ">
						  </td>
						  <td width="11%"><input class="submission_1" id = " ">
						  </td>
						  <td width="9%"><input class="submission_1" id = " ">
						  </td>
						  <td width="10%"><input class="submission_1" id = " ">
						 </td>
						 </tr>
						 <tr align="center">
						 <td id = " ">Letter</td>
						 <td width="13%"><input class="submission_1" id = " ">
						 </td>
						 <td width="13%"><input class="submission_1" id = " ">
						 </td>
						 <td width="12%"><input class="submission_1" id = " ">
						 </td>
						 <td width="11%"><input class="submission_1" id = " ">
						 </td>
						 <td width="9%"><input class="submission_1" id = " ">
						 </td>
						 <td width="10%"><input class="submission_1" id = " ">
						 </td>
						</tr>
					  <tr align="center">
					  <td id = " ">Word</td>
					  <td width="13%"><input class="submission_1" id = " ">
					  </td>
					  <td width="13%"><input class="submission_1" id = " ">
					  </td>
					  <td width="12%"><input class="submission_1" id = " ">
					  </td>
					  <td width="11%"><input class="submission_1" id = " ">
					  </td>
					  <td width="9%"><input class="submission_1" id = " ">
						</td>
					  <td width="10%"><input class="submission_1" id = " ">
					  </td>
				   </tr>
				   <tr align="center">
				   <td id = " ">Para</td>
				   <td width="13%"> <input class="submission_1" id = " ">
				   </td>
				   <td width="13%"><input class="submission_1" id = " ">
				   </td>
				   <td width="12%"><input class="submission_1" id = " ">
				   </td>
				   <td width="11%"><input class="submission_1" id = " ">
				   </td>
				   <td width="9%"><input class="submission_1" id = " ">
				   </td>
				   <td width="10%"><input class="submission_1" id = " ">
				   </td>
				</tr>
				<tr align="center">
				<td id = " ">Story</td>
				<td width="13%"><input class="submission_1" id = " ">
				</td>
				<td width="13%"><input class="submission_1" id = " ">
				</td>
				<td width="12%"><input class="submission_1" id = " ">
				  
				</td>
				<td width="11%"><input class="submission_1" id = " ">
				  
				</td>
				<td width="9%"><input class="submission_1" id = " ">
				  
				</td>
				<td width="10%"><input class="submission_1" id = " ">
				  
				 </td>
				</tr>
				<tr align="center">
				<td id = " ">
				Total (Endline)</td>
				<td width="13%"><label style="width:20px;">
		0</label></td>
				<td width="13%"><label style="width:20px;">
		0</label></td>
				<td width="12%"><label style="width:20px;">
		0</label></td>
				<td width="11%"><label style="width:20px;">
		0</label></td>
				<td width="9%"><label style="width:20px;">
		0</label></td>
				<td width="10%"><label style="width:20px;">
		0</label></td>
			   </tr>
			   
			   <tr>
				   <td colspan="7" id = " ">* This table pertains to only those children for whom there is a baseline and endline 4</td>
			   </tr>
				  </tbody></table></div>
				  <div class="pbFooter secondaryPalette"><div class="bg"></div></div></div></div></div></div><div class="apexp"><div class="individualPalette"><div class="Custom92Block"><div id = " ">
		   
		   
		   
		   
		   

				<!-- Table 7 start from here -->
			
		<br>
		<div class="apexp"><div class="individualPalette"><div class="Custom92Block"><div id="j_id0:j_id2:j_id1074" class="bPageBlock brandSecondaryBrd apexDefaultPageBlock secondaryPalette">
		<div class="pbHeader"><font color="#96763B" face="calibri" size="4.5"><b>TABLE 7: STD 1-2 INFORMATION</b></font></div></div></div></div></div>
		<div class="pbBody">           
						<table border="1px" bordercolor="#538467" cellpadding="2" cellspacing="0" style="border-collapse:collapse;" width="100%"> 
						<tbody><tr align="center">
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
					<td width="11%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:20px;" type="text">
					</td>
					<td width="9%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1080" name="j_id0:j_id2:j_id1074:j_id1080" size="10" style="width:20px;" type="text">
					</td>
					<td width="8%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1083" name="j_id0:j_id2:j_id1074:j_id1083" size="10" style="width:20px;" type="text">
					</td>
					<td width="7%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1086" name="j_id0:j_id2:j_id1074:j_id1086" size="10" style="width:20px;" type="text">
					</td>
					<td width="7%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1089" name="j_id0:j_id2:j_id1074:j_id1089" size="10" style="width:20px;" type="text">
					</td>
					<td width="7%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1092" name="j_id0:j_id2:j_id1074:j_id1092" size="10" style="width:20px;" type="text">
					</td>
					<td width="8%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1095" name="j_id0:j_id2:j_id1074:j_id1095" size="10" style="width:20px;" type="text">
					</td>
					<td width="5%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1098" name="j_id0:j_id2:j_id1074:j_id1098" size="10" style="width:20px;" type="text">
					</td>
					<td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1101" name="j_id0:j_id2:j_id1074:j_id1101" size="10" style="width:20px;" type="text">
					</td>
					<td width="3%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1104" name="j_id0:j_id2:j_id1074:j_id1104" size="10" style="width:20px;" type="text">
					</td>
					<td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1107" name="j_id0:j_id2:j_id1074:j_id1107" size="10" style="width:20px;" type="text">
					</td>
					<td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1110" name="j_id0:j_id2:j_id1074:j_id1110" size="10" style="width:20px;" type="text">
					</td>
					<td width="5%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1113" name="j_id0:j_id2:j_id1074:j_id1113" size="10" style="width:20px;" type="text">
					</td>
				</tr>
				<tr align="center">
					<td id="ft" width="11%">EndLine</td>
					<td width="11%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:20px;" type="text">
					</td>
					<td width="9%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1080" name="j_id0:j_id2:j_id1074:j_id1080" size="10" style="width:20px;" type="text">
					</td>
					<td width="8%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1083" name="j_id0:j_id2:j_id1074:j_id1083" size="10" style="width:20px;" type="text">
					</td>
					<td width="7%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1086" name="j_id0:j_id2:j_id1074:j_id1086" size="10" style="width:20px;" type="text">
					</td>
					<td width="7%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1089" name="j_id0:j_id2:j_id1074:j_id1089" size="10" style="width:20px;" type="text">
					</td>
					<td width="7%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1092" name="j_id0:j_id2:j_id1074:j_id1092" size="10" style="width:20px;" type="text">
					</td>
					<td width="8%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1095" name="j_id0:j_id2:j_id1074:j_id1095" size="10" style="width:20px;" type="text">
					</td>
					<td width="5%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1098" name="j_id0:j_id2:j_id1074:j_id1098" size="10" style="width:20px;" type="text">
					</td>
					<td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1101" name="j_id0:j_id2:j_id1074:j_id1101" size="10" style="width:20px;" type="text">
					</td>
					<td width="3%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1104" name="j_id0:j_id2:j_id1074:j_id1104" size="10" style="width:20px;" type="text">
					</td>
					<td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1107" name="j_id0:j_id2:j_id1074:j_id1107" size="10" style="width:20px;" type="text">
					</td>
					<td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1110" name="j_id0:j_id2:j_id1074:j_id1110" size="10" style="width:20px;" type="text">
					</td>
					<td width="5%" style=""><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1113" name="j_id0:j_id2:j_id1074:j_id1113" size="10" style="width:20px;" type="text">
					</td>
				</tr>
			</tbody></table></div>	



				
					<!-- Table 8 design  -->
					<br><br>
				<div class="apexp"><div class="individualPalette"><div class="Custom92Block"><div id="j_id0:j_id2:j_id1168" class="bPageBlock brandSecondaryBrd apexDefaultPageBlock secondaryPalette"><div class="pbHeader"><font color="#96763B" face="calibri" size="4.5"><b>TABLE 8: PEOPLE VISITING THE CAMPS (Only number of visits)</b></font></div>          
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
								<td id="ft" width="12%">Others</td></tr>
							<tr align="center">
							   <td id="ft" width="11%">Camp 1</td>
								<td width="13%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1171" name="j_id0:j_id2:j_id1168:j_id1171" style="width:50px;">
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
						

						<td width="14%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1174" name="j_id0:j_id2:j_id1168:j_id1174" style="width:50px;">
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
						 <td width="15%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1177" name="j_id0:j_id2:j_id1168:j_id1177" style="width:50px;">
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
						 <td width="16%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1180" name="j_id0:j_id2:j_id1168:j_id1180" style="width:50px;">
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
						 <td width="16%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1183" name="j_id0:j_id2:j_id1168:j_id1183" style="width:50px;">
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
						 <td width="16%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1186" name="j_id0:j_id2:j_id1168:j_id1186" style="width:50px;">
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
						 <td width="12%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1189" name="j_id0:j_id2:j_id1168:j_id1189" style="width:50px;">
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
					  <td width="13%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1171" name="j_id0:j_id2:j_id1168:j_id1171" style="width:50px;">
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
						 <td width="14%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1174" name="j_id0:j_id2:j_id1168:j_id1174" style="width:50px;">
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
						 <td width="15%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1177" name="j_id0:j_id2:j_id1168:j_id1177" style="width:50px;">
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
						 <td width="16%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1180" name="j_id0:j_id2:j_id1168:j_id1180" style="width:50px;">
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
						 <td width="16%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1183" name="j_id0:j_id2:j_id1168:j_id1183" style="width:50px;">
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
						 <td width="16%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1186" name="j_id0:j_id2:j_id1168:j_id1186" style="width:50px;">
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
						 <td width="12%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1189" name="j_id0:j_id2:j_id1168:j_id1189" style="width:50px;">
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
				   <td width="13%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1171" name="j_id0:j_id2:j_id1168:j_id1171" style="width:50px;">
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
						 <td width="14%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1174" name="j_id0:j_id2:j_id1168:j_id1174" style="width:50px;">
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
						 <td width="15%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1177" name="j_id0:j_id2:j_id1168:j_id1177" style="width:50px;">
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
						 <td width="16%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1180" name="j_id0:j_id2:j_id1168:j_id1180" style="width:50px;">
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
						 <td width="16%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1183" name="j_id0:j_id2:j_id1168:j_id1183" style="width:50px;">
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
						 <td width="16%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1186" name="j_id0:j_id2:j_id1168:j_id1186" style="width:50px;">
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
						 <td width="12%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1189" name="j_id0:j_id2:j_id1168:j_id1189" style="width:50px;">
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
				   <td width="13%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1171" name="j_id0:j_id2:j_id1168:j_id1171" style="width:50px;">
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
						 <td width="14%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1174" name="j_id0:j_id2:j_id1168:j_id1174" style="width:50px;">
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
						 <td width="15%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1177" name="j_id0:j_id2:j_id1168:j_id1177" style="width:50px;">
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
						 <td width="16%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1180" name="j_id0:j_id2:j_id1168:j_id1180" style="width:50px;">
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
						 <td width="16%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1183" name="j_id0:j_id2:j_id1168:j_id1183" style="width:50px;">
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
						 <td width="16%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1186" name="j_id0:j_id2:j_id1168:j_id1186" style="width:50px;">
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
						 <td width="12%" style="background: "><select class="submission_1" id="j_id0:j_id2:j_id1168:j_id1189" name="j_id0:j_id2:j_id1168:j_id1189" style="width:50px;">
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
					   </tr> </tbody></table></div><div class="pbFooter secondaryPalette"><div class="bg"></div></div></div></div></div></div><div id="j_id0:j_id2:j_id1256"></div>

					   
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
		  if ($(this).val() >= 40)  {
			   alert("Number of teaching days can't be less than 0 and more than 1 ");//or any process you want to be done
			$( "#id_teachingdays_camp1" ).focus();
		  }
		});
	
	//Teaching Days - Camp 2
	$("#id_teachingdays_camp2").on("blur", function () {
			if ($(this).val() >= 40)  {
				alert("Number of teaching days can't be less than 0 and more than 1 ");//or any process you want to be done
			$( "#id_teachingdays_camp2" ).focus();
		}
		});
	//Teaching Days - Camp 3
	$("#id_teachingdays_camp3").on("blur", function () {
			if ($(this).val() >= 40)  {
				alert("Number of teaching days can't be less than 0 and more than 1 ");//or any process you want to be done
			$( "#id_teachingdays_camp3" ).focus();
		}
		});
		
	//Teaching Days - Camp 4
	$("#id_teachingdays_camp4").on("blur", function () {
			if ($(this).val() >= 40)  {
				alert("Number of teaching days can't be less than 0 and more than 1 ");//or any process you want to be done
			$( "#id_teachingdays_camp4" ).focus();
		}
		});
	//No. of children - 0% to 20%
	$("#id_totalchildren_0to20").on("blur", function () {
			if ($(this).val() >= 500)  {
				alert("Number children can't be more than 500");//or any process you want to be done
			$( "#id_totalchildren_0to20" ).focus();
		}
	});
	//No. of children - 21% to 50%
	$("#id_totalchildren_21to50").on("blur", function () {
			if ($(this).val() >= 500)  {
				alert("Number children can't be more than 500");//or any process you want to be done
			$( "#id_totalchildren_21to50" ).focus();
		}
	});
	//No. of children - 51% to 70%
	$("#id_totalchildren_51to70").on("blur", function () {
			if ($(this).val() >= 500)  {
				alert("Number children can't be more than 500");//or any process you want to be done
			$( "#id_totalchildren_51to70" ).focus();
		}
	});

	//No. of children - 51% to 70%
	$("#id_totalchildren_71to100").on("blur", function () {
			if ($(this).val() >= 501)  {
				alert("Number children can't be more than 500");//or any process you want to be done
			$( "#id_totalchildren_71to100" ).focus();
		}
	});

	//No. of children - 51% to 70%
	$("#id_totalchildren_71to100").on("blur", function () {
			if ($(this).val() >= 501)  {
				alert("Number children can't be more than 500");//or any process you want to be done
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
					   
				   
					   
					   
					   
					   
					   <!--
					<script>
					  $(function() {
						$( "#camp1startdate" ).datepicker();
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
	-->				
						</form>
					</table>
			<br><br><br><br><br>
</body>
</Html>