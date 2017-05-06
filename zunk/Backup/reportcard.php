<Html>
	<head>
		<title>Read India Report Card Data Entry </title>

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<form name ="SummarySheet" id = "SummarySheet" method="post" >

			<!-- Table 1 Start from here -->
			<p>  Table 1: Basic Information </p>         
			<table align="center" border="1px" bordercolor="#538467" cellpadding="2" cellspacing="0" id="table1" style="border-collapse:collapse;" width="98%">
				<tbody>
				<tr align="center">
					
					<td colspan="4" id="tb_hd">School Code</td>
					
					<td colspan="2" style="">
						<label style="font-family:calibri;font-size:17px;font-weight:bold;">
						<input class="" id="c_schoolcode" maxlength="11" name="school_code" size="20" style="width:98px;" type="text"></label></td>
					<td id="tb_hd" rowspan="2"> Camp Model  </td>
					
					<td rowspan="2">
						<select class="" id="" name="" style="width:80px;">
							<option value="None">--None--</option>
							<option value="1">1 Camp</option>
							<option value="2">2 Camp
							</option>
						</select>	
					</td>
					
					<td id="ft" rowspan="2"> Camp Phase number</td>
					
					<td rowspan="2" style="">
						<select class="submission_1" id="j_id0:j_id2:j_id43:j_id50" name="j_id0:j_id2:j_id43:j_id50" style="width:50px;"><option value="">--None--</option><option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
					</td>
					
					<td colspan="2" id="ft" rowspan="2">Total number of common children <br>(Children assessed at baseline and all endlines)</td>
					<td colspan="2" rowspan="2"> <input class="submission_1" id="comm_children" maxlength="11" name="comm_children" size="20" style="width:30px;" type="number" min = "1" max = "100">  </td>
					 
				</tr>
				
				<tr align="center">
					<td colspan="4" id="tb_hd"> DISE Code</td>
					<td colspan="2" style=""><input class="submission_1" onFocusout = "validation()" id="field1"  maxlength="11" name="j_id0:j_id2:j_id43:j_id57" size="20" style="width:98px;" type="text"></td>
				</tr>
		
				<tr align="center">
					<td colspan="4" id="tb_hd"> Village Name</td>
					<td colspan="2"><input class="submission_1" id="j_id0:j_id2:j_id43:j_id57" maxlength="11" name="j_id0:j_id2:j_id43:j_id57" size="20" style="width:98px;" type="text"></td>
					<td id="ft" rowspan="2"> No. of Targeted Children </td>
					<td id="ft">Class 3</td>
					<td id="ft">Class 4</td>
					<td id="ft">Class 5</td>
					<td colspan="2" id="ft" rowspan="2">No. of teachers in school</td>
					<td colspan="2" rowspan="2" style="">
						<select class="submission_1" id="j_id0:j_id2:j_id43:j_id64" name="j_id0:j_id2:j_id43:j_id64" style="width:50px;"><option value="">--None--</option><option value="1">1</option>
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
					<td style=""><font size="2">
						<select class="submission_12" id="" name="j_id0:j_id2:j_id43:j_id67" style="width:50px;"><option value="">--None--</option><option value="1">1</option>
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
					<td style=""><font size="2">
						<select class="submission_12" id="j_id0:j_id2:j_id43:j_id70" name="j_id0:j_id2:j_id43:j_id70" style="width:50px;"><option value="">--None--</option><option value="1">1</option>
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
					<td style=""><font size="2"><input class="submission_12" id="j_id0:j_id2:j_id43:j_id73" name="j_id0:j_id2:j_id43:j_id73" size="20" style="width:35px;" type="text"> </font></td>	
					<td style=""><font size="2"><input class="submission_12" id="j_id0:j_id2:j_id43:j_id76" name="j_id0:j_id2:j_id43:j_id76" size="20" style="width:35px;" type="text"> </font></td>
					<td style=""><font size="2"><input class="submission_12" id="j_id0:j_id2:j_id43:j_id79" name="j_id0:j_id2:j_id43:j_id79" size="20" style="width:35px;" type="text"> </font></td>
				</tr>
				
				<tr align="center">    
					<td colspan="4" id="ft">Tot. targeted children *  </td>
					<td style=""><font size="2"><b>M:</b><input class="submission_12" id="j_id0:j_id2:j_id43:j_id82" name="j_id0:j_id2:j_id43:j_id82" size="20" style="width:35px;" type="text"> </font></td>
					<td style=""><font size="2"><b>F:</b><input class="submission_12" id="j_id0:j_id2:j_id43:j_id85" name="j_id0:j_id2:j_id43:j_id85" size="20" style="width:35px;" type="text"> </font></td>
					<td colspan="3" id="tb_hd">Type of camp (1=Regular, 2=Follow-up)  </td> 
					<td> <label style="font-family:calibri;font-size:17px;font-weight:bold;"> 1=Regular</label></td>
					<td colspan="4" id="ft"><center>Attendance (No. of children)    </center></td>
				</tr>
					
				<tr align="center">     
					<td colspan="2" id="ft">Camp No.  </td>
					<td colspan="2" id="ft">No. Of Teaching Days</td> 
					<td id="ft">Start Date</td>  
					<td id="ft">End Date</td>  
					<td colspan="4" id="ft">Name of the BRG</td>  
					<td id="ft">Range (%)</td>  					
					<td colspan="3" id="ft">No. of children</td>  
				</tr> 
					
				<tr align="center">     
					<td colspan="2" id="ft">Camp1 </td>
					<td colspan="2" style=""><input class="submission_1" id="j_id0:j_id2:j_id43:j_id90" name="date" size="20" style="width:50px;" type="text"></td> 
					<td style="" class="date"> </td>  
					<!--	 Date picker here        -->		
					<td style="">  </td>  
					<td colspan="4" style=""><select name="j_id0:j_id2:j_id43:j_id99" class="submission_1" size="1">	<option value="">None</option>
						<option value="a0f9000000CCufvAAD"> ............. </option></select></td>  
					<td id="ft">0% - 20%</td>   
					<td colspan="3"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:30px;" type="text"> </td>  
				</tr> 
			   
				<tr align="center">     
					<td colspan="2" id="ft">Camp2 </td>
					<td colspan="2"> <input class="submission_1" id="j_id0:j_id2:j_id43:j_id90" name="j_id0:j_id2:j_id43:j_id90" size="20" style="width:50px;" type="text"> </td> 
					<td></td>  
					<td></td>  
					<td colspan="4"><select name="j_id0:j_id2:j_id43:j_id99" class="submission_1" size="1">	<option value="">None</option>
						<option value="a0f9000000CCufvAAD"> ............. </option></td>						   									   
					<td id="ft">21% - 50%</td> 
					<td colspan="3"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:30px;" type="text"></td>				 
				</tr> 
				
				<tr align="center">     
					<td colspan="2" id="ft">Camp3 </td>
					<td colspan="2"><input class="submission_1" id="j_id0:j_id2:j_id43:j_id90" name="j_id0:j_id2:j_id43:j_id90" size="20" style="width:50px;" type="text"></td> 
					<td> </td>  
					<td></td>  
					<td colspan="4"><select name="j_id0:j_id2:j_id43:j_id99" class="submission_1" size="1">	<option value="">None</option>
						<option value="a0f9000000CCufvAAD"> ............. </option> </td>  
					<td id="ft">51% - 70%</td>  					 
					<td colspan="3"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:30px;" type="text"></td>  					
				</tr> 
				
			   <tr align="center">     
					<td colspan="2" id="ft">Camp4 </td>
					<td colspan="2"> <input class="submission_1" id="j_id0:j_id2:j_id43:j_id90" name="j_id0:j_id2:j_id43:j_id90" size="20" style="width:50px;" type="text"></td> 
					<td>  </td>  
					<td> </td>  
					<td colspan="4"> <select name="j_id0:j_id2:j_id43:j_id99" class="submission_1" size="1">	<option value="">None</option>
						<option value="a0f9000000CCufvAAD"> ............. </option></td>								    
					<td id="ft">71% - 100%</td>  				
					<td colspan="3"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:30px;" type="text"></td>
				    
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
								<td id="ft" width="51%">Total no. of community meetings held in the village</td>
								<td colspan="4" id="ft" width="10%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id165:j_id173" name="j_id0:j_id2:j_id163:j_id165:j_id173" size="20" style="width:50px;" type="text"></td>	
							</tr>
							
							<tr align="center">
								<td id="ft" width="49%">Camp number</td>
								<td width="10%">1</td>
								<td width="11%">2</td>
								<td width="13%">3</td>
								<td width="10%">4</td>
							</tr>
								<tr align="center">
								<td align="center" id="ft" width="49%">Number of visits</td>
								<td width="10%" style=""><input class="submission_1" id="j_id0:j_id2:j_id163:j_id165:j_id173" name="j_id0:j_id2:j_id163:j_id165:j_id173" size="20" style="width:35px;" type="text">
								</td>
								<td width="11%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id165:j_id173" name="j_id0:j_id2:j_id163:j_id165:j_id173" size="20" style="width:35px;" type="text">
								</td>
								<td width="13%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id165:j_id173" name="j_id0:j_id2:j_id163:j_id165:j_id173" size="20" style="width:35px;" type="text">
								</td>
								<td width="10%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id165:j_id173" name="j_id0:j_id2:j_id163:j_id165:j_id173" size="20" style="width:35px;" type="text">
								</td>
							</tr>
							<tr align="center">
								<td id="ft" width="49%"> No. of family members who were aware of the learning level</td>
								<td width="10%" style=""><input class="submission_1" id="j_id0:j_id2:j_id163:j_id165:j_id185" name="j_id0:j_id2:j_id163:j_id165:j_id185" size="20" style="width:35px;" type="text"></td>								
								<td width="11%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id165:j_id173" name="j_id0:j_id2:j_id163:j_id165:j_id173" size="20" style="width:35px;" type="text"></td>								
								<td width="13%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id165:j_id173" name="j_id0:j_id2:j_id163:j_id165:j_id173" size="20" style="width:35px;" type="text"></td>								
								<td width="10%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id165:j_id173" name="j_id0:j_id2:j_id163:j_id165:j_id173" size="20" style="width:35px;" type="text"></td>								
							</tr> </tbody>
						</table>
					</td>
			 
				 <!-- Table 3 start from here -->
					<td> <b>TABLE 3: VOLUNTEER/TEACHER INFORMATION</b>
						<table class="list" id="j_id0:j_id2:j_id163:j_id198:j_id200" align="right" border="1px" bordercolor="#538467" cellpadding="2" cellspacing="0" style="border-collapse:collapse;">
							<tr align="center">
								<td id="ft" rowspan="2" width="10%">Volunteer/<br>Teacher number</td>
								<td id="ft" rowspan="2" width="14%">Type<br> 1-Volunteer<br> 2-Teacher</td>
								<td id="ft" rowspan="2" width="21%">  Highest Education<br>
									1-Not 10th pass<br>
									2-10th pass<br>
									3-12th pass<br>
									4-Graduate<br>
									5-Post graduate</td>
								<td colspan="4" id="ft" width="16%">Attendance</td>
							</tr>
							
							<tr> 
								<td align="center" id="ft" width="4%">Camp<br>1</td>
								<td align="center" id="ft" width="4%">Camp<br>2</td>
								<td align="center" id="ft" width="4%">Camp<br>3</td>
								<td align="center" id="ft" width="4%">Camp<br>4</td>
							</tr>
							
							<tr>							
								<td class="dataCell  " id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id203" colspan="1"></td>
							</tr>
							
							<tr>
								<td align="center" width="3%"><b>V/T 1</b></td>
								<td width="61%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id205" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id205" style="width:90px;"><option value="">--None--</option><option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select></td>												
								<td width="32%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id208" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id208" style="width:120px;"><option value="">--None--</option><option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select>	</td>
								 
								<td width="32%" style=""><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"> </td>									
									<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
									<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
									<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
							</tr>
							
							<tr>
								<td class="dataCell  " id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id223" colspan="1"></td>
							</tr>
							
							<tr>
								<td align="center" width="3%"><b>V/T 2</b></td>
								<td width="61%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select></td>
										
								<td width="32%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" style="width:120px;"><option value="">--None--</option><option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select></td>
									
								<td width="32%" style=""><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
							</tr>
							
							<tr>
								<td align="center" width="3%"><b>V/T 3</b></td>
								<td width="61%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select></td>
										
								<td width="32%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" style="width:120px;"><option value="">--None--</option><option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select></td>
									
								<td width="32%" style=""><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
							</tr>
							<tr>
								<td align="center" width="3%"><b>V/T 4</b></td>
								<td width="61%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select></td>
										
								<td width="32%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" style="width:120px;"><option value="">--None--</option><option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select></td>
									
								<td width="32%" style=""><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
							</tr>							

							<tr>
								<td align="center" width="3%"><b>V/T 5</b></td>
								<td width="61%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select></td>
										
								<td width="32%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" style="width:120px;"><option value="">--None--</option><option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select></td>
									
								<td width="32%" style=""><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
							</tr>							

							<tr>
								<td align="center" width="3%"><b>V/T 6</b></td>
								<td width="61%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select></td>
										
								<td width="32%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" style="width:120px;"><option value="">--None--</option><option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select></td>
									
								<td width="32%" style=""><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
							</tr>
							
							<tr>
								<td align="center" width="3%"><b>V/T 7</b></td>
								<td width="61%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select></td>
										
								<td width="32%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" style="width:120px;"><option value="">--None--</option><option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select></td>
									
								<td width="32%" style=""><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
							</tr>
							
							<tr>
								<td align="center" width="3%"><b>V/T 8</b></td>
								<td width="61%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select></td>
										
								<td width="32%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" style="width:120px;"><option value="">--None--</option><option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select></td>
									
								<td width="32%" style=""><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
							</tr>
							
							<tr>
								<td align="center" width="3%"><b>V/T 9</b></td>
								<td width="61%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select></td>
										
								<td width="32%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" style="width:120px;"><option value="">--None--</option><option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select></td>
									
								<td width="32%" style=""><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
							</tr>
							
							<tr>
								<td align="center" width="3%"><b>V/T 10</b></td>
								<td width="61%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id225" style="width:90px;">
										<option value="">--None--</option>
										<option value="Volunteer">Volunteer</option>
										<option value="Teacher">Teacher</option>
									</select></td>
										
								<td width="32%">
									<select id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id228" style="width:120px;"><option value="">--None--</option><option value="Not 10th pass">Not 10th pass</option>
										<option value="10th pass">10th pass</option>
										<option value="12th pass">12th pass</option>
										<option value="Graduate">Graduate</option>
										<option value="Post graduate">Post graduate</option>
									</select></td>
									
								<td width="32%" style=""><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id231" size="20" style="width:35px;" type="text"></td>									
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
								<td width="32%"><input class="submission_1" id="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" name="j_id0:j_id2:j_id163:j_id198:j_id200:0:j_id211" size="20" style="width:35px;" type="text"></td>									</td>
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
			
				<tr align="center">
					<td colspan="2" height="26" id="ft" width="8%">Std. 3</td>
					<td height="26" width="9%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text">  </td>
					<td height="26" width="6%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td height="26" width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"> </td>
					<td height="26" width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"> </td>
					<td height="26" width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"> </td>
					<td height="26" width="3%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>					
					<td height="26" width="3%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td height="26" width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text">  </td>
					<td height="26" width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"> </td>
					<td height="26" width="5%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"> </td>
					<td height="26" width="5%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"> </td>
					<td height="26" id="ft" width="19%">Update from Std 3 Universal Child List</td>
				</tr>
			
				<tr align="center">
				  <td colspan="2" id="ft" width="16%"> Std. 4 </td>				  
				  <td width="9%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text">  </td>
				  <td width="6%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text">  </td>
				  <td style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"> </td>
				  <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"> </td>
				  <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"> </td>
				  <td width="3%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				  <td width="3%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				  <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				  <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				  <td width="5%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				  <td width="5%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				  <td id="ft" width="19%">Update from Std 4 Universal Child List  </td>
				 
				</tr>
				
				<tr align="center">
				  <td colspan="2" id="ft" width="16%"> Std. 5 </td>				  
				  <td width="9%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text">  </td>
				  <td width="6%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text">  </td>
				  <td style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"> </td>
				  <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"> </td>
				  <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"> </td>
				  <td width="3%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				  <td width="3%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				  <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				  <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				  <td width="5%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				  <td width="5%" style=""><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				  <td id="ft" width="19%">Update from Std 4 Universal Child List  </td>
				 
				</tr>

				<tr align="center">
				   <td id="ft" rowspan="4">BaseLine <br>Totals</td>
				   <td id="ft" width="16%">First Baseline<br>Before Endline 1</td>
				   <td id="ft1" width="9%"><label style="width:20px;">0</label></td>
				   <td id="ft1" width="6%"><label style="width:20px;">0</label></td>
				   <td id="ft1" width="4%"><label style="width:20px;">0</label></td>
				   <td id="ft1" width="4%"><label style="width:20px;">0</label></td>
				   <td id="ft1" width="4%"><label style="width:20px;">0</label></td>
				   <td id="ft1" width="3%"><label style="width:20px;">0</label></td>
				   <td id="ft1" width="3%"><label style="width:20px;">0</label></td>
				   <td id="ft1" width="4%"><label style="width:20px;">0</label></td>
				   <td id="ft1" width="4%"><label style="width:20px;">0</label></td>
				   <td id="ft1" width="5%"><label style="width:20px;">0</label></td>
				   <td id="ft1" width="5%"><label style="width:20px;">0</label></td>
				   <td id="ft" width="22%">Add data for all the classes in this box</td>
				</tr>

				<tr align="center">
					<td id="ft" width="8%">Additional children<br>Before Endline 2</td>
					<td id="ft" width="9%">NA</td>
					<td width="6%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="3%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="3%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>					
					<td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>					
					<td id="ft" width="22%">Update from Universal Child Sheet for each class and add all three classes</td>
				</tr>

				<tr align="center">
					<td id="ft" width="8%"> Additional children<br>Before Endline 3</td>
					<td id="ft" width="9%">  NA</td>
					<td width="6%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="3%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="3%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
					<td id="ft" width="22%">Update from Universal Child Sheet for each class and add all three classes</td>
				</tr>

				  
			   <tr align="center">
				   <td id="ft" width="8%">Additional children<br>Before Endline 4</td>
				   <td id="ft" width="9%">NA</td>
				   <td width="6%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				   <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				   <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				   <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				   <td width="3%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				   <td width="3%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				   <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				   <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				   <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				   <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id364:j_id367" name="j_id0:j_id2:j_id364:j_id367" size="10" style="width:20px;" type="text"></td>
				   <td id="ft" width="25%">Update from Universal Child Sheet for each class and add all three classes</td>
				</tr>

				<tr align="center">
					<td colspan="2" height="41" id="ft" width="17%">CONSOLIDATED BASELINE</td>
					<td height="41" id="ft1" width="6%"><label style="width:20px;">0</label></td>
					<td height="41" id="ft1" width="4%"><label style="width:20px;">0</label></td>
					<td height="41" id="ft1" width="4%"><label style="width:20px;">0</label></td>
					<td height="41" id="ft1" width="4%"><label style="width:20px;">0</label></td>
					<td height="41" id="ft1" width="3%"><label style="width:20px;">0</label></td>
					<td height="41" id="ft1" width="3%"><label style="width:20px;">0</label></td>
					<td height="41" id="ft1" width="4%"><label style="width:20px;">0</label></td>
					<td height="41" id="ft1" width="4%"><label style="width:20px;">0</label></td>
					<td height="41" id="ft1" width="5%"><label style="width:20px;">0</label></td>
					<td height="41" id="ft1" width="5%"><label style="width:20px;">0</label></td>
					<td height="41" id="ft1" width="6%"><label style="width:20px;">0</label></td>
					<td height="41" id="ft" width="30%">Add data for all the four baseline totals</td>
				</tr>
					
				<tr>
					<td colspan="16" id="ft_note">*Consolidated baseline will only be calculated after 4 Camps are over in this Schlool/village.</td>
				</tr>

				</tbody>
			</table>
			
			<br><br>
			<!-- Table 5 start from here -->			
			<font color="#96763B" face="calibri" size="4.5"><b>TABLE 5: ENDLINE ASSESSMENT ( To be filled form "LEARNING CAMP PROGRESS SHEETS")</b></font></div><div class="pbBody">           
			<table border="1px" bordercolor="#538467" cellpadding="2" cellspacing="0" style="border-collapse:collapse;" width="100%">   
				<tbody>
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
				   <td id="ft" width="11%">Selected Children Baseline<br>(before endline 1)</td>
				   <td width="9%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				   <td width="5%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id606" name="j_id0:j_id2:j_id600:j_id606" size="10" style="width:20px;" type="text"></td>
				   <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id609" name="j_id0:j_id2:j_id600:j_id609" size="10" style="width:20px;" type="text"></td>
				   <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id612" name="j_id0:j_id2:j_id600:j_id612" size="10" style="width:20px;" type="text"></td>
				   <td width="3%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id615" name="j_id0:j_id2:j_id600:j_id615" size="10" style="width:20px;" type="text"></td>
				   <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id618" name="j_id0:j_id2:j_id600:j_id618" size="10" style="width:20px;" type="text"></td>
				   <td width="6%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id621" name="j_id0:j_id2:j_id600:j_id621" size="10" style="width:20px;" type="text"></td>
				   <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id624" name="j_id0:j_id2:j_id600:j_id624" size="10" style="width:20px;" type="text"></td>
				   <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id627" name="j_id0:j_id2:j_id600:j_id627" size="10" style="width:20px;" type="text"></td>
				   <td width="5%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id630" name="j_id0:j_id2:j_id600:j_id630" size="10" style="width:20px;" type="text"></td>
				   <td colspan="8" width="5%"></td>
			   </tr>
			   
				<tr align="center">
				   <td id="ft" width="11%">LC 1 Endline</td>
				   <td width="9%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id633" name="j_id0:j_id2:j_id600:j_id633" size="10" style="width:20px;" type="text"></td>
				   <td width="5%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id636" name="j_id0:j_id2:j_id600:j_id636" size="10" style="width:20px;" type="text"></td>
				   <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id639" name="j_id0:j_id2:j_id600:j_id639" size="10" style="width:20px;" type="text"></td>
				   <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id642" name="j_id0:j_id2:j_id600:j_id642" size="10" style="width:20px;" type="text"></td>
				   <td width="3%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id645" name="j_id0:j_id2:j_id600:j_id645" size="10" style="width:20px;" type="text"></td>
				   <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id648" name="j_id0:j_id2:j_id600:j_id648" size="10" style="width:20px;" type="text"></td>
				   <td width="6%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id651" name="j_id0:j_id2:j_id600:j_id651" size="10" style="width:20px;" type="text"></td>
				   <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id654" name="j_id0:j_id2:j_id600:j_id654" size="10" style="width:20px;" type="text"> </td>
				   <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id657" name="j_id0:j_id2:j_id600:j_id657" size="10" style="width:20px;" type="text"></td>
				   <td width="5%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id660" name="j_id0:j_id2:j_id600:j_id660" size="10" style="width:20px;" type="text"></td>
				   <td width="5%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id663" name="j_id0:j_id2:j_id600:j_id663" size="10" style="width:20px;" type="text"></td>
				   <td width="5%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id666" name="j_id0:j_id2:j_id600:j_id666" size="10" style="width:20px;" type="text"></td>
				   <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id669" name="j_id0:j_id2:j_id600:j_id669" size="10" style="width:20px;" type="text"></td>
				   <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id672" name="j_id0:j_id2:j_id600:j_id672" size="10" style="width:20px;" type="text"></td>
				   <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id675" name="j_id0:j_id2:j_id600:j_id675" size="10" style="width:20px;" type="text"></td>
				   <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id678" name="j_id0:j_id2:j_id600:j_id678" size="10" style="width:20px;" type="text"></td>
				   <td width="4%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id681" name="j_id0:j_id2:j_id600:j_id681" size="10" style="width:20px;" type="text"></td>
				   <td width="3%" style=""><input class="submission_1" id="j_id0:j_id2:j_id600:j_id684" name="j_id0:j_id2:j_id600:j_id684" size="10" style="width:20px;" type="text"></td>
				</tr>
					  
				<tr align="center">
				  <td id="ft" width="11%">LC 2 Endline</td>
				  <td width="9%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>					  
				  <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				  <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				  <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				  <td width="3%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				  <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				  <td width="6%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				  <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				  <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				  <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				  <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				  <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				  <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				  <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				  <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				  <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				  <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				  <td width="3%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				</tr>
				
				<tr align="center">
				 <td id="ft" width="11%">LC 3 Endline</td>
				 <td width="9%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="3%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="6%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="3%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
			   </tr>
			   
			   <tr align="center">         
				 <td id="ft" width="11%">LC 4 Endline</td>
				 <td width="9%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="3%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="6%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
				 <td width="3%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"> </td>
			    </tr>
				
				<tr align="center">        
				 <td id="ft" width="11%">Consolidated Endline Of Selected Children*</td>
				 <td width="9%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				 <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				 <td width="3%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				 <td width="6%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				 <td width="6%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>    
				 <td width="6%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				 <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				 <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				 <td width="5%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				 <td width="4%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				 <td width="3%"><input class="submission_1" id="j_id0:j_id2:j_id600:j_id603" name="j_id0:j_id2:j_id600:j_id603" size="10" style="width:20px;" type="text"></td>
				</tr>
				
				<tr>
				 <td colspan="19" id="ft_note">* The last endline of all selected children will be considered while calculating consolidated endline</td>
			   
			    </tr></tbody>
			
		    </table>					   
				<br><br>
			<!--  Table 6 start from here -->
		 <div class="apexp"><div class="individualPalette"><div class="Custom92Block"><div id="j_id0:j_id2:j_id1074" class="bPageBlock brandSecondaryBrd apexDefaultPageBlock secondaryPalette">
		   
		   <div class="pbHeader"><font color="#96763B" face="calibri" size="4"><b>TABLE 6: PROGRESS ACROSS READING LEVELS (Baseline vs Endline 4)*</b></font></div><div class="pbBody">           
						<table border="1px" bordercolor="#538467" cellpadding="2" cellspacing="0" style="border-collapse:collapse;" width="100%">   
						 
						  <tbody><tr align="center">
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
						 <td width="13%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text"></td>
						  <td width="13%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
						  </td>
						  <td width="12%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
						  </td>
						  <td width="11%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
						  </td>
						  <td width="9%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
						  </td>
						  <td width="10%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
						 </td>
						 </tr>
						 <tr align="center">
						 <td id="ft" width="29%">Letter</td>
						 <td width="13%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
						 </td>
						 <td width="13%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
						 </td>
						 <td width="12%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
						 </td>
						 <td width="11%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
						 </td>
						 <td width="9%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
						 </td>
						 <td width="10%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
						 </td>
						</tr>
					  <tr align="center">
					  <td id="ft" width="29%">Word</td>
					  <td width="13%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
					  </td>
					  <td width="13%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
					  </td>
					  <td width="12%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
					  </td>
					  <td width="11%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
					  </td>
					  <td width="9%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
						</td>
					  <td width="10%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
					  </td>
				   </tr>
				   <tr align="center">
				   <td id="ft" width="29%">Para</td>
				   <td width="13%"> <input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
				   </td>
				   <td width="13%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
				   </td>
				   <td width="12%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
				   </td>
				   <td width="11%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
				   </td>
				   <td width="9%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
				   </td>
				   <td width="10%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
				   </td>
				</tr>
				<tr align="center">
				<td id="ft" width="29%">Story</td>
				<td width="13%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
				</td>
				<td width="13%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
				</td>
				<td width="12%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
				  
				</td>
				<td width="11%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
				  
				</td>
				<td width="9%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
				  
				</td>
				<td width="10%"><input class="submission_1" id="j_id0:j_id2:j_id1074:j_id1077" name="j_id0:j_id2:j_id1074:j_id1077" size="10" style="width:50px;" type="text">
				  
				 </td>
				</tr>
				<tr align="center">
				<td id="ft" width="29%">
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
				   <td colspan="7" id="ft_note">* This table pertains to only those children for whom there is a baseline and endline 4</td>
			   </tr>
				  </tbody></table></div>
				  <div class="pbFooter secondaryPalette"><div class="bg"></div></div></div></div></div></div><div class="apexp"><div class="individualPalette"><div class="Custom92Block"><div id="j_id0:j_id2:j_id1074" class="bPageBlock brandSecondaryBrd apexDefaultPageBlock secondaryPalette">
		   
		   
		   
		   
		   

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

					
					
					
					</form>
					</table>
			<br><br><br><br><br>
			</form>			
		</body>


		<script>
			
			//SCHOOL CODE
			$("#school_code").on("blur", function () {
			  if ($(this).val().trim().length != 10) {
				   alert("Please enter your password");//or any process you want to be done
				$( "#school_code" ).focus();
			  }
			});	

			//
		</script>			
		
</Html>