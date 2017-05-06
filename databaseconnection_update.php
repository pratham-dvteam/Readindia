
<?php

			include_once 'dbconnect.php';

			//Table 1
				$tbl1Data = $_REQUEST['tbl1Info'];

				@$campno=  $tbl1Data['campno'];
				@$schoolCode=$tbl1Data['schoolCode'];				
				@$campModel=$tbl1Data['campModel'];
				@$campPhase=$tbl1Data['campPhase'];
				@$commonChildren=$tbl1Data['commonChildren'];
				@$diseCode=$tbl1Data['diseCode'];
				@$villageName=$tbl1Data['villageName'];
				@$std3TragetChildren=$tbl1Data['std3TragetChildren'];
				@$std4TragetChildren=$tbl1Data['std4TragetChildren'];
				@$std5TragetChildren=$tbl1Data['std5TragetChildren'];
				@$totalTeacher=$tbl1Data['totalTeacher'];
				@$classX=$tbl1Data['classX'];
				@$classY=$tbl1Data['classY'];
				@$childrenMale=$tbl1Data['childrenMale'];
				@$childrenFemale=$tbl1Data['childrenFemale'];


				@$id_teachingdays_camp1=  $tbl1Data['camp1'][0]['teachingDays'];
				@$startDateCamp1=  $tbl1Data['camp1'][0]['startdate'];
				@$endDateCamp1=  $tbl1Data['camp1'][0]['enddate'];
				@$nameBRGCamp1=  $tbl1Data['camp1'][0]['brgname'];

				@$id_teachingdays_camp2=  $tbl1Data['camp2'][0]['teachingDays'];
				@$startDateCamp2=  $tbl1Data['camp2'][0]['startdate'];
				@$endDateCamp2=  $tbl1Data['camp2'][0]['enddate'];
				@$nameBRGCamp2=  $tbl1Data['camp2'][0]['brgname'];


				@$id_teachingdays_camp3=  $tbl1Data['camp3'][0]['teachingDays'];
				@$startDateCamp3=  $tbl1Data['camp3'][0]['startdate'];
				@$endDateCamp3=  $tbl1Data['camp3'][0]['enddate'];
				@$nameBRGCamp3=  $tbl1Data['camp3'][0]['brgname'];

				@$id_teachingdays_camp4=  $tbl1Data['camp4'][0]['teachingDays'];
				@$startDateCamp4=  $tbl1Data['camp4'][0]['startdate'];
				@$endDateCamp4=  $tbl1Data['camp4'][0]['enddate'];
				@$nameBRGCamp4=  $tbl1Data['camp4'][0]['brgname'];

				@$attendance0to20=  $tbl1Data['attendance0to20'];
				@$attendance21to50=  $tbl1Data['attendance21to50'];
				@$attendance51to70=  $tbl1Data['attendance51to70'];
				@$attendance71to100=  $tbl1Data['attendance71to100'];

			$sql1 = mysql_query("UPDATE table1 SET campno = '$campno' , campPhase = '$campPhase' , 	commonChildren = '$commonChildren' , 	diseCode = '$diseCode' , 	villageName = '$villageName' , 	totalTeacher = '$totalTeacher' , 	classX = '$classX' , 	classY = '$classY' , 	std3TragetChildren = '$std3TragetChildren' , 	std4TragetChildren = '$std4TragetChildren' , 	std5TragetChildren = '$std5TragetChildren' , 	childrenMale = '$childrenMale' , 	childrenFemale = '$childrenFemale' , 	teachingDaysCamp1 = '$teachingDaysCamp1' , 	teachingDaysCamp2 = '$teachingDaysCamp2' , 	teachingDaysCamp3 = '$teachingDaysCamp3' , 	teachingDaysCamp4 = '$teachingDaysCamp4' , 	startDateCamp1 = '$startDateCamp1' , 	startDateCamp2 = '$startDateCamp2' , 	startDateCamp3 = '$startDateCamp3' , 	startDateCamp4 = '$startDateCamp4' , 	endDateCamp1 = '$endDateCamp1' , 	endDateCamp2 = '$endDateCamp2' , 	endDateCamp3 = '$endDateCamp3' , 	endDateCamp4 = '$endDateCamp4' , 	nameBRGCamp1 = '$nameBRGCamp1' , 	nameBRGCamp2 = '$nameBRGCamp2' , 	nameBRGCamp3 = '$nameBRGCamp3' , 	nameBRGCamp4 = '$nameBRGCamp4' , 	attendance0to20 = '$attendance0to20' , 	attendance21to50 = '$attendance21to50' , 	attendance51to70 = '$attendance51to70' , 	attendance71to100 = '$attendance71to100' where schoolCode  = '$schoolCode'");

			//Table 2				
				$tbl1Data = $_REQUEST['tbl1Info'];
	            $tbl2Data = $_REQUEST['tbl2Info'];

				@$campno=  $tbl1Data['campno'];
				@$schoolCode=$tbl1Data['schoolCode'];	

				@$communityMeetings=  $tbl2Data['communityMeetings'];

				@$visitNumberCamp1=  $tbl2Data['visits'][0]['cmap1_visit'];
				@$visitNumberCamp2=  $tbl2Data['visits'][0]['cmap2_visit'];
				@$visitNumberCamp3=  $tbl2Data['visits'][0]['cmap3_visit'];
				@$visitNumberCamp4=  $tbl2Data['visits'][0]['cmap4_visit'];

				@$familyAwarenessCamp1=  $tbl2Data['awareness'][0]['cmap1_awareness'];
				@$familyAwarenessCamp2=  $tbl2Data['awareness'][0]['cmap2_awareness'];
				@$familyAwarenessCamp3=  $tbl2Data['awareness'][0]['cmap3_awareness'];
				@$familyAwarenessCamp4=  $tbl2Data['awareness'][0]['cmap4_awareness'];

			$sql2 = mysql_query("UPDATE table2 SET campno = '$campno' , visitNumberCamp1 = '$visitNumberCamp1', visitNumberCamp2 = '$visitNumberCamp2', visitNumberCamp3 = '$visitNumberCamp3', visitNumberCamp4 = '$visitNumberCamp4' , familyAwarenessCamp1 = '$familyAwarenessCamp1' , familyAwarenessCamp2 = '$familyAwarenessCamp2' , familyAwarenessCamp3 = '$familyAwarenessCamp3' , familyAwarenessCamp4 = '$familyAwarenessCamp4' where schoolCode  = '$schoolCode'");

			//Table 3

	            $tbl1Data = $_REQUEST['tbl1Info'];
	            $tbl3Data = $_REQUEST['tbl3Info'];


				@$schoolCode=$tbl1Data['schoolCode'];

		        
		        @$volunteer1Type=  $tbl3Data['volunteer1'][0]['Type'];
				@$volunteer1Education=  $tbl3Data['volunteer1'][0]['Education'];
				@$volunteer1AttendanceCamp1=  $tbl3Data['volunteer1'][0]['AttendanceCamp1'];
				@$volunteer1AttendanceCamp2=  $tbl3Data['volunteer1'][0]['AttendanceCamp2'];
				@$volunteer1AttendanceCamp3=  $tbl3Data['volunteer1'][0]['AttendanceCamp3'];
				@$volunteer1AttendanceCamp4=  $tbl3Data['volunteer1'][0]['AttendanceCamp4'];

				@$volunteer2Type=  $tbl3Data['volunteer2'][0]['Type'];
				@$volunteer2Education=  $tbl3Data['volunteer2'][0]['Education'];
				@$volunteer2AttendanceCamp1=  $tbl3Data['volunteer2'][0]['AttendanceCamp1'];
				@$volunteer2AttendanceCamp2=  $tbl3Data['volunteer2'][0]['AttendanceCamp2'];
				@$volunteer2AttendanceCamp3=  $tbl3Data['volunteer2'][0]['AttendanceCamp3'];
				@$volunteer2AttendanceCamp4=  $tbl3Data['volunteer2'][0]['AttendanceCamp4'];
				
				@$volunteer3Type=  $tbl3Data['volunteer3'][0]['Type'];
				@$volunteer3Education=  $tbl3Data['volunteer3'][0]['Education'];
				@$volunteer3AttendanceCamp1=  $tbl3Data['volunteer3'][0]['AttendanceCamp1'];
				@$volunteer3AttendanceCamp2=  $tbl3Data['volunteer3'][0]['AttendanceCamp2'];
				@$volunteer3AttendanceCamp3=  $tbl3Data['volunteer3'][0]['AttendanceCamp3'];
				@$volunteer3AttendanceCamp4=  $tbl3Data['volunteer3'][0]['AttendanceCamp4'];
				
				@$volunteer4Type=  $tbl3Data['volunteer4'][0]['Type'];
				@$volunteer4Education=  $tbl3Data['volunteer4'][0]['Education'];
				@$volunteer4AttendanceCamp1=  $tbl3Data['volunteer4'][0]['AttendanceCamp1'];
				@$volunteer4AttendanceCamp2=  $tbl3Data['volunteer4'][0]['AttendanceCamp2'];
				@$volunteer4AttendanceCamp3=  $tbl3Data['volunteer4'][0]['AttendanceCamp3'];
				@$volunteer4AttendanceCamp4=  $tbl3Data['volunteer4'][0]['AttendanceCamp4'];
				
				@$volunteer5Type=  $tbl3Data['volunteer5'][0]['Type'];
				@$volunteer5Education=  $tbl3Data['volunteer5'][0]['Education'];
				@$volunteer5AttendanceCamp1=  $tbl3Data['volunteer5'][0]['AttendanceCamp1'];
				@$volunteer5AttendanceCamp2=  $tbl3Data['volunteer5'][0]['AttendanceCamp2'];
				@$volunteer5AttendanceCamp3=  $tbl3Data['volunteer5'][0]['AttendanceCamp3'];
				@$volunteer5AttendanceCamp4=  $tbl3Data['volunteer5'][0]['AttendanceCamp5'];
				
				@$volunteer6Type=  $tbl3Data['volunteer6'][0]['Type'];
				@$volunteer6Education=  $tbl3Data['volunteer6'][0]['Education'];
				@$volunteer6AttendanceCamp1=  $tbl3Data['volunteer6'][0]['AttendanceCamp1'];
				@$volunteer6AttendanceCamp2=  $tbl3Data['volunteer6'][0]['AttendanceCamp2'];
				@$volunteer6AttendanceCamp3=  $tbl3Data['volunteer6'][0]['AttendanceCamp3'];
				@$volunteer6AttendanceCamp4=  $tbl3Data['volunteer6'][0]['AttendanceCamp4'];
				
				@$volunteer7Type=  $tbl3Data['volunteer7'][0]['Type'];
				@$volunteer7Education=  $tbl3Data['volunteer7'][0]['Education'];
				@$volunteer7AttendanceCamp1=  $tbl3Data['volunteer7'][0]['AttendanceCamp1'];
				@$volunteer7AttendanceCamp2=  $tbl3Data['volunteer7'][0]['AttendanceCamp2'];
				@$volunteer7AttendanceCamp3=  $tbl3Data['volunteer7'][0]['AttendanceCamp3'];
				@$volunteer7AttendanceCamp4=  $tbl3Data['volunteer7'][0]['AttendanceCamp4'];
				
				@$volunteer8Type=  $tbl3Data['volunteer8'][0]['Type'];
				@$volunteer8Education=  $tbl3Data['volunteer8'][0]['Education'];
				@$volunteer8AttendanceCamp1=  $tbl3Data['volunteer8'][0]['AttendanceCamp1'];
				@$volunteer8AttendanceCamp2=  $tbl3Data['volunteer8'][0]['AttendanceCamp2'];
				@$volunteer8AttendanceCamp3=  $tbl3Data['volunteer8'][0]['AttendanceCamp3'];
				@$volunteer8AttendanceCamp4=  $tbl3Data['volunteer8'][0]['AttendanceCamp4'];
				
				@$volunteer9Type=  $tbl3Data['volunteer9'][0]['Type'];
				@$volunteer9Education=  $tbl3Data['volunteer9'][0]['Education'];
				@$volunteer9AttendanceCamp1=  $tbl3Data['volunteer9'][0]['AttendanceCamp1'];
				@$volunteer9AttendanceCamp2=  $tbl3Data['volunteer9'][0]['AttendanceCamp2'];
				@$volunteer9AttendanceCamp3=  $tbl3Data['volunteer9'][0]['AttendanceCamp3'];
				@$volunteer9AttendanceCamp4=  $tbl3Data['volunteer9'][0]['AttendanceCamp4'];
				
				@$volunteer10Type=  $tbl3Data['volunteer10'][0]['Type'];
				@$volunteer10Education=  $tbl3Data['volunteer10'][0]['Education'];
				@$volunteer10AttendanceCamp1=  $tbl3Data['volunteer10'][0]['AttendanceCamp1'];
				@$volunteer10AttendanceCamp2=  $tbl3Data['volunteer10'][0]['AttendanceCamp2'];
				@$volunteer10AttendanceCamp3=  $tbl3Data['volunteer10'][0]['AttendanceCamp3'];
				@$volunteer10AttendanceCamp4=  $tbl3Data['volunteer10'][0]['AttendanceCamp4'];

			$sql3 = mysql_query("UPDATE table3 SET campno = '$campno' , volunteer1Type = '$volunteer1Type' , 	volunteer1Education = '$volunteer1Education' , 	volunteer1AttendanceCamp1 = '$volunteer1AttendanceCamp1' , 	volunteer1AttendanceCamp2 = '$volunteer1AttendanceCamp2' , 	volunteer1AttendanceCamp3 = '$volunteer1AttendanceCamp3' , 	volunteer1AttendanceCamp4 = '$volunteer1AttendanceCamp4' , 	volunteer2Type = '$volunteer2Type' , 	volunteer2Education = '$volunteer2Education' , 	volunteer2AttendanceCamp1 = '$volunteer2AttendanceCamp1' , 	volunteer2AttendanceCamp2 = '$volunteer2AttendanceCamp2' , 	volunteer2AttendanceCamp3 = '$volunteer2AttendanceCamp3' , 	volunteer2AttendanceCamp4 = '$volunteer2AttendanceCamp4' , 	volunteer3Type = '$volunteer3Type' , 	volunteer3Education = '$volunteer3Education' , 	volunteer3AttendanceCamp1 = '$volunteer3AttendanceCamp1' , 	volunteer3AttendanceCamp2 = '$volunteer3AttendanceCamp2' , 	volunteer3AttendanceCamp3 = '$volunteer3AttendanceCamp3' , 	volunteer3AttendanceCamp4 = '$volunteer3AttendanceCamp4' , 	volunteer4Type = '$volunteer4Type' , 	volunteer4Education = '$volunteer4Education' , 	volunteer4AttendanceCamp1 = '$volunteer4AttendanceCamp1' , 	volunteer4AttendanceCamp2 = '$volunteer4AttendanceCamp2' , 	volunteer4AttendanceCamp3 = '$volunteer4AttendanceCamp3' , 	volunteer4AttendanceCamp4 = '$volunteer4AttendanceCamp4' , 	volunteer5Type = '$volunteer5Type' , 	volunteer5Education = '$volunteer5Education' , 	volunteer5AttendanceCamp1 = '$volunteer5AttendanceCamp1' , 	volunteer5AttendanceCamp2 = '$volunteer5AttendanceCamp2' , 	volunteer5AttendanceCamp3 = '$volunteer5AttendanceCamp3' , 	volunteer5AttendanceCamp4 = '$volunteer5AttendanceCamp4' , 	volunteer6Type = '$volunteer6Type' , 	volunteer6Education = '$volunteer6Education' , 	volunteer6AttendanceCamp1 = '$volunteer6AttendanceCamp1' , 	volunteer6AttendanceCamp2 = '$volunteer6AttendanceCamp2' , 	volunteer6AttendanceCamp3 = '$volunteer6AttendanceCamp3' , 	volunteer6AttendanceCamp4 = '$volunteer6AttendanceCamp4' , 	volunteer7Type = '$volunteer7Type' , 	volunteer7Education = '$volunteer7Education' , 	volunteer7AttendanceCamp1 = '$volunteer7AttendanceCamp1' , 	volunteer7AttendanceCamp2 = '$volunteer7AttendanceCamp2' , 	volunteer7AttendanceCamp3 = '$volunteer7AttendanceCamp3' , 	volunteer7AttendanceCamp4 = '$volunteer7AttendanceCamp4' , 	volunteer8Type = '$volunteer8Type' , 	volunteer8Education = '$volunteer8Education' , 	volunteer8AttendanceCamp1 = '$volunteer8AttendanceCamp1' , 	volunteer8AttendanceCamp2 = '$volunteer8AttendanceCamp2' , 	volunteer8AttendanceCamp3 = '$volunteer8AttendanceCamp3' , 	volunteer8AttendanceCamp4 = '$volunteer8AttendanceCamp4' , 	volunteer9Type = '$volunteer9Type' , 	volunteer9Education = '$volunteer9Education' , 	volunteer9AttendanceCamp1 = '$volunteer9AttendanceCamp1' , 	volunteer9AttendanceCamp2 = '$volunteer9AttendanceCamp2' , 	volunteer9AttendanceCamp3 = '$volunteer9AttendanceCamp3' , 	volunteer9AttendanceCamp4 = '$volunteer9AttendanceCamp4' , 	volunteer10Type = '$volunteer10Type' , 	volunteer10Education = '$volunteer10Education' , 	volunteer10AttendanceCamp1 = '$volunteer10AttendanceCamp1' , 	volunteer10AttendanceCamp2 = '$volunteer10AttendanceCamp2' , 	volunteer10AttendanceCamp3 = '$volunteer10AttendanceCamp3' , 	volunteer10AttendanceCamp4 = '$volunteer10AttendanceCamp4'  where schoolCode  = '$schoolCode'");


		    //Table 4
	
	            $tbl1Data = $_REQUEST['tbl1Info'];
	            $tbl4Data = $_REQUEST['tbl4Info'];

	
				 @$std3Enrolled= $tbl4Data['std3'][0]['Enrolled'];
				 @$std3Tested= $tbl4Data['std3'][0]['Tested'];
				 @$std3ReadingBG= $tbl4Data['std3'][0]['ReadingBG'];
				 @$std3ReadingLT= $tbl4Data['std3'][0]['ReadingLT'];
				 @$std3ReadingWD= $tbl4Data['std3'][0]['ReadingWD'];
				 @$std3ReadingPR= $tbl4Data['std3'][0]['ReadingPR'];
				 @$std3ReadingSY= $tbl4Data['std3'][0]['ReadingSY'];
				 @$std3NumberBG= $tbl4Data['std3'][0]['NumberBG'];
				 @$std3Number1Digit= $tbl4Data['std3'][0]['Number1Digit'];
				 @$std3Number2Digits= $tbl4Data['std3'][0]['Number2Digits'];
				 @$std3Number3Digits= $tbl4Data['std3'][0]['Number3Digits'];
				 @$std4Enrolled= $tbl4Data['std4'][0]['Enrolled'];
				 @$std4Tested= $tbl4Data['std4'][0]['Tested'];
				 @$std4ReadingBG= $tbl4Data['std4'][0]['ReadingBG'];
				 @$std4ReadingLT= $tbl4Data['std4'][0]['ReadingLT'];
				 @$std4ReadingWD= $tbl4Data['std4'][0]['ReadingWD'];
				 @$std4ReadingPR= $tbl4Data['std4'][0]['ReadingPR'];
				 @$std4ReadingSY= $tbl4Data['std4'][0]['ReadingSY'];
				 @$std4NumberBG= $tbl4Data['std4'][0]['NumberBG'];
				 @$std4Number1Digit= $tbl4Data['std4'][0]['Number1Digit'];
				 @$std4Number2Digits= $tbl4Data['std4'][0]['Number2Digits'];
				 @$std4Number3Digits= $tbl4Data['std4'][0]['Number3Digits'];
				 
				 @$std5Enrolled= $tbl4Data['std5'][0]['Enrolled'];
				 @$std5Tested= $tbl4Data['std5'][0]['Tested'];
				 @$std5ReadingBG= $tbl4Data['std5'][0]['ReadingBG'];
				 @$std5ReadingLT= $tbl4Data['std5'][0]['ReadingLT'];
				 @$std5ReadingWD= $tbl4Data['std5'][0]['ReadingWD'];
				 @$std5ReadingPR= $tbl4Data['std5'][0]['ReadingPR'];
				 @$std5ReadingSY= $tbl4Data['std5'][0]['ReadingSY'];
				 @$std5NumberBG= $tbl4Data['std5'][0]['NumberBG'];
				 @$std5Number1Digit= $tbl4Data['std5'][0]['Number1Digit'];
				 @$std5Number2Digits= $tbl4Data['std5'][0]['Number2Digits'];
				 @$std5Number3Digits= $tbl4Data['std5'][0]['Number3Digits'];



				 @$firstBLBeforeEL1Enrolled= $tbl4Data['beforeEL1'][0]['Enrolled'];
				 @$firstBLBeforeEL1Tested= $tbl4Data['beforeEL1'][0]['Tested'];				
				 @$firstBLBeforeEL1ReadingBG= $tbl4Data['beforeEL1'][0]['ReadingBG'];
				 @$firstBLBeforeEL1ReadingLT= $tbl4Data['beforeEL1'][0]['ReadingLT'];
				 @$firstBLBeforeEL1ReadingWD= $tbl4Data['beforeEL1'][0]['ReadingWD'];
				 @$firstBLBeforeEL1ReadingPR= $tbl4Data['beforeEL1'][0]['ReadingPR'];
				 @$firstBLBeforeEL1ReadingSY= $tbl4Data['beforeEL1'][0]['ReadingSY'];
				 @$firstBLBeforeEL1NumberBG= $tbl4Data['beforeEL1'][0]['NumberBG'];
				 @$firstBLBeforeEL1Number1Digit= $tbl4Data['beforeEL1'][0]['Number1Digit'];
				 @$firstBLBeforeEL1Number2Digits= $tbl4Data['beforeEL1'][0]['Number2Digits'];
				 @$firstBLBeforeEL1Number3Digits= $tbl4Data['beforeEL1'][0]['Number3Digits'];

				 @$additionalChildBeforeEL2Tested= $tbl4Data['beforeEL2'][0]['Tested'];
				 @$additionalChildBeforeEL2ReadingBG= $tbl4Data['beforeEL2'][0]['ReadingBG'];
				 @$additionalChildBeforeEL2ReadingLT= $tbl4Data['beforeEL2'][0]['ReadingLT'];
				 @$additionalChildBeforeEL2ReadingWD= $tbl4Data['beforeEL2'][0]['ReadingWD'];
				 @$additionalChildBeforeEL2ReadingPR= $tbl4Data['beforeEL2'][0]['ReadingPR'];
				 @$additionalChildBeforeEL2ReadingSY= $tbl4Data['beforeEL2'][0]['ReadingSY'];
				 @$additionalChildBeforeEL2NumberBG= $tbl4Data['beforeEL2'][0]['NumberBG'];
				 @$additionalChildBeforeEL2Number1Digit= $tbl4Data['beforeEL2'][0]['Number1Digit'];
				 @$additionalChildBeforeEL2Number2Digits= $tbl4Data['beforeEL2'][0]['Number2Digits'];
				 @$additionalChildBeforeEL2Number3Digits= $tbl4Data['beforeEL2'][0]['Number3Digits'];

				 @$additionalChildBeforeEL3Tested= $tbl4Data['beforeEL3'][0]['Tested'];
				 @$additionalChildBeforeEL3ReadingBG= $tbl4Data['beforeEL3'][0]['ReadingBG'];
				 @$additionalChildBeforeEL3ReadingLT= $tbl4Data['beforeEL3'][0]['ReadingLT'];
				 @$additionalChildBeforeEL3ReadingWD= $tbl4Data['beforeEL3'][0]['ReadingWD'];
				 @$additionalChildBeforeEL3ReadingPR= $tbl4Data['beforeEL3'][0]['ReadingPR'];
				 @$additionalChildBeforeEL3ReadingSY= $tbl4Data['beforeEL3'][0]['ReadingSY'];
				 @$additionalChildBeforeEL3NumberBG= $tbl4Data['beforeEL3'][0]['NumberBG'];
				 @$additionalChildBeforeEL3Number1Digit= $tbl4Data['beforeEL3'][0]['Number1Digit'];
				 @$additionalChildBeforeEL3Number2Digits= $tbl4Data['beforeEL3'][0]['Number2Digits'];
				 @$additionalChildBeforeEL3Number3Digits= $tbl4Data['beforeEL3'][0]['Number3Digits'];
				 
				 @$additionalChildBeforeEL4Tested= $tbl4Data['beforeEL4'][0]['Tested'];
				 @$additionalChildBeforeEL4ReadingBG= $tbl4Data['beforeEL4'][0]['ReadingBG'];
				 @$additionalChildBeforeEL4ReadingLT= $tbl4Data['beforeEL4'][0]['ReadingLT'];
				 @$additionalChildBeforeEL4ReadingWD= $tbl4Data['beforeEL4'][0]['ReadingWD'];
				 @$additionalChildBeforeEL4ReadingPR= $tbl4Data['beforeEL4'][0]['ReadingPR'];
				 @$additionalChildBeforeEL4ReadingSY= $tbl4Data['beforeEL4'][0]['ReadingSY'];
				 @$additionalChildBeforeEL4NumberBG= $tbl4Data['beforeEL4'][0]['NumberBG'];
				 @$additionalChildBeforeEL4Number1Digit= $tbl4Data['beforeEL4'][0]['Number1Digit'];
				 @$additionalChildBeforeEL4Number2Digits= $tbl4Data['beforeEL4'][0]['Number2Digits'];
				 @$additionalChildBeforeEL4Number3Digits= $tbl4Data['beforeEL4'][0]['Number3Digits'];
				 
				 @$consolidateBLEnrolled= $tbl4Data['consolidatedBL'][0]['Enrolled'];
				 @$consolidateBLTested= $tbl4Data['consolidatedBL'][0]['Tested'];
				 @$consolidateBLReadingBG= $tbl4Data['consolidatedBL'][0]['ReadingBG'];
				 @$consolidateBLReadingLT= $tbl4Data['consolidatedBL'][0]['ReadingLT'];
				 @$consolidateBLReadingWD= $tbl4Data['consolidatedBL'][0]['ReadingWD'];
				 @$consolidateBLReadingPR= $tbl4Data['consolidatedBL'][0]['ReadingPR'];
				 @$consolidateBLReadingSY= $tbl4Data['consolidatedBL'][0]['ReadingSY'];
				 @$consolidateBLNumberBG= $tbl4Data['consolidatedBL'][0]['NumberBG'];
				 @$consolidateBLNumber1Digit= $tbl4Data['consolidatedBL'][0]['Number1Digit'];
				 @$consolidateBLNumber2Digits= $tbl4Data['consolidatedBL'][0]['Number2Digits'];
				 @$consolidateBLNumber3Digits= $tbl4Data['consolidatedBL'][0]['Number3Digits'];

		
			$sql4 = mysql_query("UPDATE table4 SET campno = '$campno' , std3Enrolled = '$std3Enrolled' , 	std3Tested = '$std3Tested' , 	std3ReadingBG = '$std3ReadingBG' , 	std3ReadingLT = '$std3ReadingLT' , 	std3ReadingWD = '$std3ReadingWD' , 	std3ReadingPR = '$std3ReadingPR' , 	std3ReadingSY = '$std3ReadingSY' , 	std3NumberBG = '$std3NumberBG' , 	std3Number1Digit = '$std3Number1Digit' , 	std3Number2Digits = '$std3Number2Digits' , 	std3Number3Digits = '$std3Number3Digits' , 	std4Enrolled = '$std4Enrolled' , 	std4Tested = '$std4Tested' , 	std4ReadingBG = '$std4ReadingBG' , 	std4ReadingLT = '$std4ReadingLT' , 	std4ReadingWD = '$std4ReadingWD' , 	std4ReadingPR = '$std4ReadingPR' , 	std4ReadingSY = '$std4ReadingSY' , 	std4NumberBG = '$std4NumberBG' , 	std4Number1Digit = '$std4Number1Digit' , 	std4Number2Digits = '$std4Number2Digits' , 	std4Number3Digits = '$std4Number3Digits' , 	std5Enrolled = '$std5Enrolled' , 	std5Tested = '$std5Tested' , 	std5ReadingBG = '$std5ReadingBG' , 	std5ReadingLT = '$std5ReadingLT' , 	std5ReadingWD = '$std5ReadingWD' , 	std5ReadingPR = '$std5ReadingPR' , 	std5ReadingSY = '$std5ReadingSY' , 	std5NumberBG = '$std5NumberBG' , 	std5Number1Digit = '$std5Number1Digit' , 	std5Number2Digits = '$std5Number2Digits' , 	std5Number3Digits = '$std5Number3Digits' , 	firstBLBeforeEL1enrolled = '$firstBLBeforeEL1enrolled' , 	firstBLBeforeEL1tested = '$firstBLBeforeEL1tested' , 	firstBLBeforeEL1ReadingBG = '$firstBLBeforeEL1ReadingBG' , 	firstBLBeforeEL1ReadingLT = '$firstBLBeforeEL1ReadingLT' , 	firstBLBeforeEL1ReadingWD = '$firstBLBeforeEL1ReadingWD' , 	firstBLBeforeEL1ReadingPR = '$firstBLBeforeEL1ReadingPR' , 	firstBLBeforeEL1ReadingSY = '$firstBLBeforeEL1ReadingSY' , 	firstBLBeforeEL1NumberBG = '$firstBLBeforeEL1NumberBG' , 	firstBLBeforeEL1Number1Digit = '$firstBLBeforeEL1Number1Digit' , 	firstBLBeforeEL1Number2Digits = '$firstBLBeforeEL1Number2Digits' , 	firstBLBeforeEL1Number3Digits = '$firstBLBeforeEL1Number3Digits' , 	additionalChildBeforeEL2Tested = '$additionalChildBeforeEL2Tested' , 	additionalChildBeforeEL2ReadingBG = '$additionalChildBeforeEL2ReadingBG' , 	additionalChildBeforeEL2ReadingLT = '$additionalChildBeforeEL2ReadingLT' , 	additionalChildBeforeEL2ReadingWD = '$additionalChildBeforeEL2ReadingWD' , 	additionalChildBeforeEL2ReadingPR = '$additionalChildBeforeEL2ReadingPR' , 	additionalChildBeforeEL2ReadingSY = '$additionalChildBeforeEL2ReadingSY' , 	additionalChildBeforeEL2NumberBG = '$additionalChildBeforeEL2NumberBG' , 	additionalChildBeforeEL2Number1Digit = '$additionalChildBeforeEL2Number1Digit' , 	additionalChildBeforeEL2Number2Digits = '$additionalChildBeforeEL2Number2Digits' , 	additionalChildBeforeEL2Number3Digits = '$additionalChildBeforeEL2Number3Digits' , 	additionalChildBeforeEL3Tested = '$additionalChildBeforeEL3Tested' , 	additionalChildBeforeEL3ReadingBG = '$additionalChildBeforeEL3ReadingBG' , 	additionalChildBeforeEL3ReadingLT = '$additionalChildBeforeEL3ReadingLT' , 	additionalChildBeforeEL3ReadingWD = '$additionalChildBeforeEL3ReadingWD' , 	additionalChildBeforeEL3ReadingPR = '$additionalChildBeforeEL3ReadingPR' , 	additionalChildBeforeEL3ReadingSY = '$additionalChildBeforeEL3ReadingSY' , 	additionalChildBeforeEL3NumberBG = '$additionalChildBeforeEL3NumberBG' , 	additionalChildBeforeEL3Number1Digit = '$additionalChildBeforeEL3Number1Digit' , 	additionalChildBeforeEL3Number2Digits = '$additionalChildBeforeEL3Number2Digits' , 	additionalChildBeforeEL3Number3Digits = '$additionalChildBeforeEL3Number3Digits' , 	additionalChildBeforeEL4Tested = '$additionalChildBeforeEL4Tested' , 	additionalChildBeforeEL4ReadingBG = '$additionalChildBeforeEL4ReadingBG' , 	additionalChildBeforeEL4ReadingLT = '$additionalChildBeforeEL4ReadingLT' , 	additionalChildBeforeEL4ReadingWD = '$additionalChildBeforeEL4ReadingWD' , 	additionalChildBeforeEL4ReadingPR = '$additionalChildBeforeEL4ReadingPR' , 	additionalChildBeforeEL4ReadingSY = '$additionalChildBeforeEL4ReadingSY' , 	additionalChildBeforeEL4NumberBG = '$additionalChildBeforeEL4NumberBG' , 	additionalChildBeforeEL4Number1Digit = '$additionalChildBeforeEL4Number1Digit' , 	additionalChildBeforeEL4Number2Digits = '$additionalChildBeforeEL4Number2Digits' , 	additionalChildBeforeEL4Number3Digits = '$additionalChildBeforeEL4Number3Digits' , 	consolidateBLEnrolled = '$consolidateBLEnrolled' , 	consolidateBLTested = '$consolidateBLTested' , 	consolidateBLReadingBG = '$consolidateBLReadingBG' , 	consolidateBLReadingLT = '$consolidateBLReadingLT' , 	consolidateBLReadingWD = '$consolidateBLReadingWD' , 	consolidateBLReadingPR = '$consolidateBLReadingPR' , 	consolidateBLReadingSY = '$consolidateBLReadingSY' , 	consolidateBLNumberBG = '$consolidateBLNumberBG' , 	consolidateBLNumber1Digit = '$consolidateBLNumber1Digit' , 	consolidateBLNumber2Digits = '$consolidateBLNumber2Digits' , 	consolidateBLNumber3Digits = '$consolidateBLNumber3Digits'  where schoolCode  = '$schoolCode'");
             
            echo json_encode("UPDATE table4 SET campno = '$campno' , std3Enrolled = '$std3Enrolled' , 	std3Tested = '$std3Tested' , 	std3ReadingBG = '$std3ReadingBG' , 	std3ReadingLT = '$std3ReadingLT' , 	std3ReadingWD = '$std3ReadingWD' , 	std3ReadingPR = '$std3ReadingPR' , 	std3ReadingSY = '$std3ReadingSY' , 	std3NumberBG = '$std3NumberBG' , 	std3Number1Digit = '$std3Number1Digit' , 	std3Number2Digits = '$std3Number2Digits' , 	std3Number3Digits = '$std3Number3Digits' , 	std4Enrolled = '$std4Enrolled' , 	std4Tested = '$std4Tested' , 	std4ReadingBG = '$std4ReadingBG' , 	std4ReadingLT = '$std4ReadingLT' , 	std4ReadingWD = '$std4ReadingWD' , 	std4ReadingPR = '$std4ReadingPR' , 	std4ReadingSY = '$std4ReadingSY' , 	std4NumberBG = '$std4NumberBG' , 	std4Number1Digit = '$std4Number1Digit' , 	std4Number2Digits = '$std4Number2Digits' , 	std4Number3Digits = '$std4Number3Digits' , 	std5Enrolled = '$std5Enrolled' , 	std5Tested = '$std5Tested' , 	std5ReadingBG = '$std5ReadingBG' , 	std5ReadingLT = '$std5ReadingLT' , 	std5ReadingWD = '$std5ReadingWD' , 	std5ReadingPR = '$std5ReadingPR' , 	std5ReadingSY = '$std5ReadingSY' , 	std5NumberBG = '$std5NumberBG' , 	std5Number1Digit = '$std5Number1Digit' , 	std5Number2Digits = '$std5Number2Digits' , 	std5Number3Digits = '$std5Number3Digits' , 	firstBLBeforeEL1enrolled = '$firstBLBeforeEL1enrolled' , 	firstBLBeforeEL1tested = '$firstBLBeforeEL1tested' , 	firstBLBeforeEL1ReadingBG = '$firstBLBeforeEL1ReadingBG' , 	firstBLBeforeEL1ReadingLT = '$firstBLBeforeEL1ReadingLT' , 	firstBLBeforeEL1ReadingWD = '$firstBLBeforeEL1ReadingWD' , 	firstBLBeforeEL1ReadingPR = '$firstBLBeforeEL1ReadingPR' , 	firstBLBeforeEL1ReadingSY = '$firstBLBeforeEL1ReadingSY' , 	firstBLBeforeEL1NumberBG = '$firstBLBeforeEL1NumberBG' , 	firstBLBeforeEL1Number1Digit = '$firstBLBeforeEL1Number1Digit' , 	firstBLBeforeEL1Number2Digits = '$firstBLBeforeEL1Number2Digits' , 	firstBLBeforeEL1Number3Digits = '$firstBLBeforeEL1Number3Digits' , 	additionalChildBeforeEL2Tested = '$additionalChildBeforeEL2Tested' , 	additionalChildBeforeEL2ReadingBG = '$additionalChildBeforeEL2ReadingBG' , 	additionalChildBeforeEL2ReadingLT = '$additionalChildBeforeEL2ReadingLT' , 	additionalChildBeforeEL2ReadingWD = '$additionalChildBeforeEL2ReadingWD' , 	additionalChildBeforeEL2ReadingPR = '$additionalChildBeforeEL2ReadingPR' , 	additionalChildBeforeEL2ReadingSY = '$additionalChildBeforeEL2ReadingSY' , 	additionalChildBeforeEL2NumberBG = '$additionalChildBeforeEL2NumberBG' , 	additionalChildBeforeEL2Number1Digit = '$additionalChildBeforeEL2Number1Digit' , 	additionalChildBeforeEL2Number2Digits = '$additionalChildBeforeEL2Number2Digits' , 	additionalChildBeforeEL2Number3Digits = '$additionalChildBeforeEL2Number3Digits' , 	additionalChildBeforeEL3Tested = '$additionalChildBeforeEL3Tested' , 	additionalChildBeforeEL3ReadingBG = '$additionalChildBeforeEL3ReadingBG' , 	additionalChildBeforeEL3ReadingLT = '$additionalChildBeforeEL3ReadingLT' , 	additionalChildBeforeEL3ReadingWD = '$additionalChildBeforeEL3ReadingWD' , 	additionalChildBeforeEL3ReadingPR = '$additionalChildBeforeEL3ReadingPR' , 	additionalChildBeforeEL3ReadingSY = '$additionalChildBeforeEL3ReadingSY' , 	additionalChildBeforeEL3NumberBG = '$additionalChildBeforeEL3NumberBG' , 	additionalChildBeforeEL3Number1Digit = '$additionalChildBeforeEL3Number1Digit' , 	additionalChildBeforeEL3Number2Digits = '$additionalChildBeforeEL3Number2Digits' , 	additionalChildBeforeEL3Number3Digits = '$additionalChildBeforeEL3Number3Digits' , 	additionalChildBeforeEL4Tested = '$additionalChildBeforeEL4Tested' , 	additionalChildBeforeEL4ReadingBG = '$additionalChildBeforeEL4ReadingBG' , 	additionalChildBeforeEL4ReadingLT = '$additionalChildBeforeEL4ReadingLT' , 	additionalChildBeforeEL4ReadingWD = '$additionalChildBeforeEL4ReadingWD' , 	additionalChildBeforeEL4ReadingPR = '$additionalChildBeforeEL4ReadingPR' , 	additionalChildBeforeEL4ReadingSY = '$additionalChildBeforeEL4ReadingSY' , 	additionalChildBeforeEL4NumberBG = '$additionalChildBeforeEL4NumberBG' , 	additionalChildBeforeEL4Number1Digit = '$additionalChildBeforeEL4Number1Digit' , 	additionalChildBeforeEL4Number2Digits = '$additionalChildBeforeEL4Number2Digits' , 	additionalChildBeforeEL4Number3Digits = '$additionalChildBeforeEL4Number3Digits' , 	consolidateBLEnrolled = '$consolidateBLEnrolled' , 	consolidateBLTested = '$consolidateBLTested' , 	consolidateBLReadingBG = '$consolidateBLReadingBG' , 	consolidateBLReadingLT = '$consolidateBLReadingLT' , 	consolidateBLReadingWD = '$consolidateBLReadingWD' , 	consolidateBLReadingPR = '$consolidateBLReadingPR' , 	consolidateBLReadingSY = '$consolidateBLReadingSY' , 	consolidateBLNumberBG = '$consolidateBLNumberBG' , 	consolidateBLNumber1Digit = '$consolidateBLNumber1Digit' , 	consolidateBLNumber2Digits = '$consolidateBLNumber2Digits' , 	consolidateBLNumber3Digits = '$consolidateBLNumber3Digits'  where schoolCode  = '$schoolCode'");


			//Table 5
		            $tbl1Data = $_REQUEST['tbl1Info'];
		            $tbl5Data = $_REQUEST['tbl5Info'];	
		            
	             @$ELAssTested= $tbl5Data['baseline'][0]['Tested'];
				 @$ELAssReadingBG= $tbl5Data['baseline'][0]['ReadingBG'];
				 @$ELAssReadingLT= $tbl5Data['baseline'][0]['ReadingLT'];
				 @$ELAssReadingWD= $tbl5Data['baseline'][0]['ReadingWD'];
				 @$ELAssReadingPR= $tbl5Data['baseline'][0]['ReadingPR'];
				 @$ELAssReadingSY= $tbl5Data['baseline'][0]['ReadingSY'];
				 @$ELAssNumberBG= $tbl5Data['baseline'][0]['NumberBG'];
				 @$ELAssNumber1Digit= $tbl5Data['baseline'][0]['Number1Digit'];
				 @$ELAssNumber2Digits= $tbl5Data['baseline'][0]['Number2Digits'];
				 @$ELAssNumber3Digits= $tbl5Data['baseline'][0]['Number3Digits'];
				 @$ELAssLC1Tested= $tbl5Data['LC1'][0]['Tested'];
				 @$ELAssLC1ReadingBG= $tbl5Data['LC1'][0]['ReadingBG'];
				 @$ELAssLC1ReadingLT= $tbl5Data['LC1'][0]['ReadingLT'];
				 @$ELAssLC1ReadingWD= $tbl5Data['LC1'][0]['ReadingWD'];
				 @$ELAssLC1ReadingPR= $tbl5Data['LC1'][0]['ReadingPR'];
				 @$ELAssLC1ReadingSY= $tbl5Data['LC1'][0]['ReadingSY'];
				 @$ELAssLC1NumberBG= $tbl5Data['LC1'][0]['NumberBG'];
				 @$ELAssLC1Number1Digit= $tbl5Data['LC1'][0]['Number1Digit'];
				 @$ELAssLC1Number2Digits= $tbl5Data['LC1'][0]['Number2Digits'];
				 @$ELAssLC1Number3Digits= $tbl5Data['LC1'][0]['Number3Digits'];
				 @$ELAssLC1OperationAC= $tbl5Data['LC1'][0]['OperationAC'];
				 @$ELAssLC1OperationACN= $tbl5Data['LC1'][0]['OperationACN'];
				 @$ELAssLC1OperationSC= $tbl5Data['LC1'][0]['OperationSC'];
				 @$ELAssLC1OperationSCN= $tbl5Data['LC1'][0]['OperationSCN'];
				 @$ELAssLC1OperationMC= $tbl5Data['LC1'][0]['OperationMC'];
				 @$ELAssLC1OperationMCN= $tbl5Data['LC1'][0]['OperationMCN'];
				 @$ELAssLC1OperationDC= $tbl5Data['LC1'][0]['OperationDC'];
				 @$ELAssLC1OperationDCN= $tbl5Data['LC1'][0]['OperationDCN'];
				 @$ELAssLC2Tested= $tbl5Data['LC2'][0]['Tested'];
				 @$ELAssLC2ReadingBG= $tbl5Data['LC2'][0]['ReadingBG'];
				 @$ELAssLC2ReadingLT= $tbl5Data['LC2'][0]['ReadingLT'];
				 @$ELAssLC2ReadingWD= $tbl5Data['LC2'][0]['ReadingWD'];
				 @$ELAssLC2ReadingPR= $tbl5Data['LC2'][0]['ReadingPR'];
				 @$ELAssLC2ReadingSY= $tbl5Data['LC2'][0]['ReadingSY'];
				 @$ELAssLC2NumberBG= $tbl5Data['LC2'][0]['NumberBG'];
				 @$ELAssLC2Number1Digit= $tbl5Data['LC2'][0]['Number1Digit'];
				 @$ELAssLC2Number2Digits= $tbl5Data['LC2'][0]['Number2Digits'];
				 @$ELAssLC2Number3Digits= $tbl5Data['LC2'][0]['Number3Digits'];
				 @$ELAssLC2OperationAC= $tbl5Data['LC2'][0]['OperationAC'];
				 @$ELAssLC2OperationACN= $tbl5Data['LC2'][0]['OperationACN'];
				 @$ELAssLC2OperationSC= $tbl5Data['LC2'][0]['OperationSC'];
				 @$ELAssLC2OperationSCN= $tbl5Data['LC2'][0]['OperationSCN'];
				 @$ELAssLC2OperationMC= $tbl5Data['LC2'][0]['OperationMC'];
				 @$ELAssLC2OperationMCN= $tbl5Data['LC2'][0]['OperationMCN'];
				 @$ELAssLC2OperationDC= $tbl5Data['LC2'][0]['OperationDC'];
				 @$ELAssLC2OperationDCN= $tbl5Data['LC2'][0]['OperationDCN'];
				 @$ELAssLC3Tested= $tbl5Data['LC3'][0]['Tested'];
				 @$ELAssLC3ReadingBG= $tbl5Data['LC3'][0]['ReadingBG'];
				 @$ELAssLC3ReadingLT= $tbl5Data['LC3'][0]['ReadingLT'];
				 @$ELAssLC3ReadingWD= $tbl5Data['LC3'][0]['ReadingWD'];
				 @$ELAssLC3ReadingPR= $tbl5Data['LC3'][0]['ReadingPR'];
				 @$ELAssLC3ReadingSY= $tbl5Data['LC3'][0]['ReadingSY'];
				 @$ELAssLC3NumberBG= $tbl5Data['LC3'][0]['NumberBG'];
				 @$ELAssLC3Number1Digit= $tbl5Data['LC3'][0]['Number1Digit'];
				 @$ELAssLC3Number2Digits= $tbl5Data['LC3'][0]['Number2Digits'];
				 @$ELAssLC3Number3Digits= $tbl5Data['LC3'][0]['Number3Digits'];
				 @$ELAssLC3OperationAC= $tbl5Data['LC3'][0]['OperationAC'];
				 @$ELAssLC3OperationACN= $tbl5Data['LC3'][0]['OperationACN'];
				 @$ELAssLC3OperationSC= $tbl5Data['LC3'][0]['OperationSC'];
				 @$ELAssLC3OperationSCN= $tbl5Data['LC3'][0]['OperationSCN'];
				 @$ELAssLC3OperationMC= $tbl5Data['LC3'][0]['OperationMC'];
				 @$ELAssLC3OperationMCN= $tbl5Data['LC3'][0]['OperationMCN'];
				 @$ELAssLC3OperationDC= $tbl5Data['LC3'][0]['OperationDC'];
				 @$ELAssLC3OperationDCN= $tbl5Data['LC3'][0]['OperationDCN'];
				 @$ELAssLC4Tested= $tbl5Data['LC4'][0]['Tested'];
				 @$ELAssLC4ReadingBG= $tbl5Data['LC4'][0]['ReadingBG'];
				 @$ELAssLC4ReadingLT= $tbl5Data['LC4'][0]['ReadingLT'];
				 @$ELAssLC4ReadingWD= $tbl5Data['LC4'][0]['ReadingWD'];
				 @$ELAssLC4ReadingPR= $tbl5Data['LC4'][0]['ReadingPR'];
				 @$ELAssLC4ReadingSY= $tbl5Data['LC4'][0]['ReadingSY'];
				 @$ELAssLC4NumberBG= $tbl5Data['LC4'][0]['NumberBG'];
				 @$ELAssLC4Number1Digit= $tbl5Data['LC4'][0]['Number1Digit'];
				 @$ELAssLC4Number2Digits= $tbl5Data['LC4'][0]['Number2Digits'];
				 @$ELAssLC4Number3Digits= $tbl5Data['LC4'][0]['Number3Digits'];
				 @$ELAssLC4OperationAC= $tbl5Data['LC4'][0]['OperationAC'];
				 @$ELAssLC4OperationACN= $tbl5Data['LC4'][0]['OperationACN'];
				 @$ELAssLC4OperationSC= $tbl5Data['LC4'][0]['OperationSC'];
				 @$ELAssLC4OperationSCN= $tbl5Data['LC4'][0]['OperationSCN'];
				 @$ELAssLC4OperationMC= $tbl5Data['LC4'][0]['OperationMC'];
				 @$ELAssLC4OperationMCN= $tbl5Data['LC4'][0]['OperationMCN'];
				 @$ELAssLC4OperationDC= $tbl5Data['LC4'][0]['OperationDC'];
				 @$ELAssLC4OperationDCN= $tbl5Data['LC4'][0]['OperationDCN'];
				 @$ELAssConsELTested= $tbl5Data['ConsolidatedEL'][0]['Tested'];
				 @$ELAssConsELReadingBG= $tbl5Data['ConsolidatedEL'][0]['ReadingBG'];
				 @$ELAssConsELReadingLT= $tbl5Data['ConsolidatedEL'][0]['ReadingLT'];
				 @$ELAssConsELReadingWD= $tbl5Data['ConsolidatedEL'][0]['ReadingWD'];
				 @$ELAssConsELReadingPR= $tbl5Data['ConsolidatedEL'][0]['ReadingPR'];
				 @$ELAssConsELReadingSY= $tbl5Data['ConsolidatedEL'][0]['ReadingSY'];
				 @$ELAssConsELNumberBG= $tbl5Data['ConsolidatedEL'][0]['NumberBG'];
				 @$ELAssConsELNumber1Digit= $tbl5Data['ConsolidatedEL'][0]['Number1Digit'];
				 @$ELAssConsELNumber2Digits= $tbl5Data['ConsolidatedEL'][0]['Number2Digits'];
				 @$ELAssConsELNumber3Digits= $tbl5Data['ConsolidatedEL'][0]['Number3Digits'];
				 @$ELAssConsELOperationAC= $tbl5Data['ConsolidatedEL'][0]['OperationAC'];
				 @$ELAssConsELOperationACN= $tbl5Data['ConsolidatedEL'][0]['OperationACN'];
				 @$ELAssConsELOperationSC= $tbl5Data['ConsolidatedEL'][0]['OperationSC'];
				 @$ELAssConsELOperationSCN= $tbl5Data['ConsolidatedEL'][0]['OperationSCN'];
				 @$ELAssConsELOperationMC= $tbl5Data['ConsolidatedEL'][0]['OperationMC'];
				 @$ELAssConsELOperationMCN= $tbl5Data['ConsolidatedEL'][0]['OperationMCN'];
				 @$ELAssConsELOperationDC= $tbl5Data['ConsolidatedEL'][0]['OperationDC'];
				 @$ELAssConsELOperationDCN= $tbl5Data['ConsolidatedEL'][0]['OperationDCN'];

			$sql5 = mysql_query("UPDATE table5 SET campno = '$campno' , ELAssTested = '$ELAssTested' , 	ELAssReadingBG = '$ELAssReadingBG' , 	ELAssReadingLT = '$ELAssReadingLT' , 	ELAssReadingWD = '$ELAssReadingWD' , 	ELAssReadingPR = '$ELAssReadingPR' , 	ELAssReadingSY = '$ELAssReadingSY' , 	ELAssNumberBG = '$ELAssNumberBG' , 	ELAssNumber1Digit = '$ELAssNumber1Digit' , 	ELAssNumber2Digits = '$ELAssNumber2Digits' , 	ELAssNumber3Digits = '$ELAssNumber3Digits' , 	ELAssLC1Tested = '$ELAssLC1Tested' , 	ELAssLC1ReadingBG = '$ELAssLC1ReadingBG' , 	ELAssLC1ReadingLT = '$ELAssLC1ReadingLT' , 	ELAssLC1ReadingWD = '$ELAssLC1ReadingWD' , 	ELAssLC1ReadingPR = '$ELAssLC1ReadingPR' , 	ELAssLC1ReadingSY = '$ELAssLC1ReadingSY' , 	ELAssLC1NumberBG = '$ELAssLC1NumberBG' , 	ELAssLC1Number1Digit = '$ELAssLC1Number1Digit' , 	ELAssLC1Number2Digits = '$ELAssLC1Number2Digits' , 	ELAssLC1Number3Digits = '$ELAssLC1Number3Digits' , 	ELAssLC1OperationAC = '$ELAssLC1OperationAC' , 	ELAssLC1OperationACN = '$ELAssLC1OperationACN' , 	ELAssLC1OperationSC = '$ELAssLC1OperationSC' , 	ELAssLC1OperationSCN = '$ELAssLC1OperationSCN' , 	ELAssLC1OperationMC = '$ELAssLC1OperationMC' , 	ELAssLC1OperationMCN = '$ELAssLC1OperationMCN' , 	ELAssLC1OperationDC = '$ELAssLC1OperationDC' , 	ELAssLC1OperationDCN = '$ELAssLC1OperationDCN' , 	ELAssLC2Tested = '$ELAssLC2Tested' , 	ELAssLC2ReadingBG = '$ELAssLC2ReadingBG' , 	ELAssLC2ReadingLT = '$ELAssLC2ReadingLT' , 	ELAssLC2ReadingWD = '$ELAssLC2ReadingWD' , 	ELAssLC2ReadingPR = '$ELAssLC2ReadingPR' , 	ELAssLC2ReadingSY = '$ELAssLC2ReadingSY' , 	ELAssLC2NumberBG = '$ELAssLC2NumberBG' , 	ELAssLC2Number1Digit = '$ELAssLC2Number1Digit' , 	ELAssLC2Number2Digits = '$ELAssLC2Number2Digits' , 	ELAssLC2Number3Digits = '$ELAssLC2Number3Digits' , 	ELAssLC2OperationAC = '$ELAssLC2OperationAC' , 	ELAssLC2OperationACN = '$ELAssLC2OperationACN' , 	ELAssLC2OperationSC = '$ELAssLC2OperationSC' , 	ELAssLC2OperationSCN = '$ELAssLC2OperationSCN' , 	ELAssLC2OperationMC = '$ELAssLC2OperationMC' , 	ELAssLC2OperationMCN = '$ELAssLC2OperationMCN' , 	ELAssLC2OperationDC = '$ELAssLC2OperationDC' , 	ELAssLC2OperationDCN = '$ELAssLC2OperationDCN' , 	ELAssLC3Tested = '$ELAssLC3Tested' , 	ELAssLC3ReadingBG = '$ELAssLC3ReadingBG' , 	ELAssLC3ReadingLT = '$ELAssLC3ReadingLT' , 	ELAssLC3ReadingWD = '$ELAssLC3ReadingWD' , 	ELAssLC3ReadingPR = '$ELAssLC3ReadingPR' , 	ELAssLC3ReadingSY = '$ELAssLC3ReadingSY' , 	ELAssLC3NumberBG = '$ELAssLC3NumberBG' , 	ELAssLC3Number1Digit = '$ELAssLC3Number1Digit' , 	ELAssLC3Number2Digits = '$ELAssLC3Number2Digits' , 	ELAssLC3Number3Digits = '$ELAssLC3Number3Digits' , 	ELAssLC3OperationAC = '$ELAssLC3OperationAC' , 	ELAssLC3OperationACN = '$ELAssLC3OperationACN' , 	ELAssLC3OperationSC = '$ELAssLC3OperationSC' , 	ELAssLC3OperationSCN = '$ELAssLC3OperationSCN' , 	ELAssLC3OperationMC = '$ELAssLC3OperationMC' , 	ELAssLC3OperationMCN = '$ELAssLC3OperationMCN' , 	ELAssLC3OperationDC = '$ELAssLC3OperationDC' , 	ELAssLC3OperationDCN = '$ELAssLC3OperationDCN' , 	ELAssLC4Tested = '$ELAssLC4Tested' , 	ELAssLC4ReadingBG = '$ELAssLC4ReadingBG' , 	ELAssLC4ReadingLT = '$ELAssLC4ReadingLT' , 	ELAssLC4ReadingWD = '$ELAssLC4ReadingWD' , 	ELAssLC4ReadingPR = '$ELAssLC4ReadingPR' , 	ELAssLC4ReadingSY = '$ELAssLC4ReadingSY' , 	ELAssLC4NumberBG = '$ELAssLC4NumberBG' , 	ELAssLC4Number1Digit = '$ELAssLC4Number1Digit' , 	ELAssLC4Number2Digits = '$ELAssLC4Number2Digits' , 	ELAssLC4Number3Digits = '$ELAssLC4Number3Digits' , 	ELAssLC4OperationAC = '$ELAssLC4OperationAC' , 	ELAssLC4OperationACN = '$ELAssLC4OperationACN' , 	ELAssLC4OperationSC = '$ELAssLC4OperationSC' , 	ELAssLC4OperationSCN = '$ELAssLC4OperationSCN' , 	ELAssLC4OperationMC = '$ELAssLC4OperationMC' , 	ELAssLC4OperationMCN = '$ELAssLC4OperationMCN' , 	ELAssLC4OperationDC = '$ELAssLC4OperationDC' , 	ELAssLC4OperationDCN = '$ELAssLC4OperationDCN' , 	ELAssConsELTested = '$ELAssConsELTested' , 	ELAssConsELReadingBG = '$ELAssConsELReadingBG' , 	ELAssConsELReadingLT = '$ELAssConsELReadingLT' , 	ELAssConsELReadingWD = '$ELAssConsELReadingWD' , 	ELAssConsELReadingPR = '$ELAssConsELReadingPR' , 	ELAssConsELReadingSY = '$ELAssConsELReadingSY' , 	ELAssConsELNumberBG = '$ELAssConsELNumberBG' , 	ELAssConsELNumber1Digit = '$ELAssConsELNumber1Digit' , 	ELAssConsELNumber2Digits = '$ELAssConsELNumber2Digits' , 	ELAssConsELNumber3Digits = '$ELAssConsELNumber3Digits' , 	ELAssConsELOperationAC = '$ELAssConsELOperationAC' , 	ELAssConsELOperationACN = '$ELAssConsELOperationACN' , 	ELAssConsELOperationSC = '$ELAssConsELOperationSC' , 	ELAssConsELOperationSCN = '$ELAssConsELOperationSCN' , 	ELAssConsELOperationMC = '$ELAssConsELOperationMC' , 	ELAssConsELOperationMCN = '$ELAssConsELOperationMCN' , 	ELAssConsELOperationDC = '$ELAssConsELOperationDC' , 	ELAssConsELOperationDCN = '$ELAssConsELOperationDCN'  where schoolCode  = '$schoolCode'");

			//Table 6
	            $tbl1Data = $_REQUEST['tbl1Info'];
	            $tbl6Data = $_REQUEST['tbl6Info'];

	             @$progressAcrossReadingBGBG= $tbl6Data['beginner'][0]['ReadingBGBG'];
				 @$progressAcrossReadingBGLT= $tbl6Data['beginner'][0]['ReadingBGLT'];
				 @$progressAcrossReadingBGWD= $tbl6Data['beginner'][0]['ReadingBGWD'];
				 @$progressAcrossReadingBGPR= $tbl6Data['beginner'][0]['ReadingBGPR'];
				 @$progressAcrossReadingBGSY= $tbl6Data['beginner'][0]['ReadingBGSY'];
				 @$progressAcrossReadingBGTotal= $tbl6Data['beginner'][0]['ReadingBGTotal'];

				 @$progressAcrossReadingLTBG= $tbl6Data['letter'][0]['ReadingLTBG'];
				 @$progressAcrossReadingLTLT= $tbl6Data['letter'][0]['ReadingLTLT'];
				 @$progressAcrossReadingLTWD= $tbl6Data['letter'][0]['ReadingLTWD'];
				 @$progressAcrossReadingLTPR= $tbl6Data['letter'][0]['ReadingLTPR'];
				 @$progressAcrossReadingLTSY= $tbl6Data['letter'][0]['ReadingLTSY'];
				 @$progressAcrossReadingLTTotal= $tbl6Data['letter'][0]['ReadingLTTotal'];
				 
				 @$progressAcrossReadingWDBG= $tbl6Data['word'][0]['ReadingWDBG'];
				 @$progressAcrossReadingWDLT= $tbl6Data['word'][0]['ReadingWDLT'];
				 @$progressAcrossReadingWDWD= $tbl6Data['word'][0]['ReadingWDWD'];
				 @$progressAcrossReadingWDPR= $tbl6Data['word'][0]['ReadingWDPR'];
				 @$progressAcrossReadingWDSY= $tbl6Data['word'][0]['ReadingWDSY'];
				 @$progressAcrossReadingWDTotal= $tbl6Data['word'][0]['ReadingWDTotal'];

				 @$progressAcrossReadingPRBG= $tbl6Data['para'][0]['ReadingPRBG'];
				 @$progressAcrossReadingPRWD= $tbl6Data['para'][0]['ReadingPRLT'];
				 @$progressAcrossReadingPRLT= $tbl6Data['para'][0]['ReadingPRWD'];
				 @$progressAcrossReadingPRPR= $tbl6Data['para'][0]['ReadingPRPR'];
				 @$progressAcrossReadingPRSY= $tbl6Data['para'][0]['ReadingPRSY'];
				 @$progressAcrossReadingPRTotal= $tbl6Data['para'][0]['ReadingPRTotal'];
				 
				 @$progressAcrossReadingSYBG= $tbl6Data['story'][0]['ReadingSYBG'];
				 @$proogressAcrossReadingSYLT= $tbl6Data['story'][0]['ReadingSYLT'];
				 @$proogressAcrossReadingSYWD= $tbl6Data['story'][0]['ReadingSYWD'];
				 @$progressAcrossReadingSYPR= $tbl6Data['story'][0]['ReadingSYPR'];
				 @$progressAcrossReadingSYSY= $tbl6Data['story'][0]['ReadingSYSY'];
				 @$progressAcrossReadingSYTotal= $tbl6Data['story'][0]['ReadingSYTotal'];

				 @$progressAcrossReadingTotalBG= $tbl6Data['total'][0]['ReadingTotalBG'];
				 @$progressAcrossReadingTotalLT= $tbl6Data['total'][0]['ReadingTotalLT'];
				 @$progressAcrossReadingTotalWD= $tbl6Data['total'][0]['ReadingTotalSYWD'];
				 @$progressAcrossReadingTotalPR= $tbl6Data['total'][0]['ReadingTotalSYPR'];
				 @$progressAcrossReadingTotalSY= $tbl6Data['total'][0]['ReadingTotalSYSY'];
				 @$progressAcrossReadingTotalTotal= $tbl6Data['total'][0]['ReadingTotalSYTotal'];

			$sql6 = mysql_query("UPDATE table6 SET campno = '$campno' , progressAcrossReadingBGBG = '$progressAcrossReadingBGBG' , 	progressAcrossReadingBGLT = '$progressAcrossReadingBGLT' , 	progressAcrossReadingBGWD = '$progressAcrossReadingBGWD' , 	progressAcrossReadingBGPR = '$progressAcrossReadingBGPR' , 	progressAcrossReadingBGSY = '$progressAcrossReadingBGSY' , 	progressAcrossReadingBGTotal = '$progressAcrossReadingBGTotal' , 	progressAcrossReadingLTBG = '$progressAcrossReadingLTBG' , 	progressAcrossReadingLTLT = '$progressAcrossReadingLTLT' , 	progressAcrossReadingLTWD = '$progressAcrossReadingLTWD' , 	progressAcrossReadingLTPR = '$progressAcrossReadingLTPR' , 	progressAcrossReadingLTSY = '$progressAcrossReadingLTSY' , 	progressAcrossReadingLTTotal = '$progressAcrossReadingLTTotal' , 	progressAcrossReadingWDBG = '$progressAcrossReadingWDBG' , 	progressAcrossReadingWDLT = '$progressAcrossReadingWDLT' , 	progressAcrossReadingWDWD = '$progressAcrossReadingWDWD' , 	progressAcrossReadingWDPR = '$progressAcrossReadingWDPR' , 	progressAcrossReadingWDSY = '$progressAcrossReadingWDSY' , 	progressAcrossReadingWDTotal = '$progressAcrossReadingWDTotal' , 	progressAcrossReadingPRBG = '$progressAcrossReadingPRBG' , 	progressAcrossReadingPRWD = '$progressAcrossReadingPRWD' , 	progressAcrossReadingPRLT = '$progressAcrossReadingPRLT' , 	progressAcrossReadingPRPR = '$progressAcrossReadingPRPR' , 	progressAcrossReadingPRSY = '$progressAcrossReadingPRSY' , 	progressAcrossReadingPRTotal = '$progressAcrossReadingPRTotal' , 	progressAcrossReadingSYBG = '$progressAcrossReadingSYBG' , 	proogressAcrossReadingSYLT = '$proogressAcrossReadingSYLT' , 	proogressAcrossReadingSYWD = '$proogressAcrossReadingSYWD' , 	progressAcrossReadingSYPR = '$progressAcrossReadingSYPR' , 	progressAcrossReadingSYSY = '$progressAcrossReadingSYSY' , 	progressAcrossReadingSYTotal = '$progressAcrossReadingSYTotal' , 	progressAcrossReadingTotalBG = '$progressAcrossReadingTotalBG' , 	progressAcrossReadingTotalLT = '$progressAcrossReadingTotalLT' , 	progressAcrossReadingTotalWD = '$progressAcrossReadingTotalWD' , 	progressAcrossReadingTotalPR = '$progressAcrossReadingTotalPR' , 	progressAcrossReadingTotalSY = '$progressAcrossReadingTotalSY' , 	progressAcrossReadingTotalTotal = '$progressAcrossReadingTotalTotal'  where schoolCode  = '$schoolCode'");

			//Table 7
	            $tbl1Data = $_REQUEST['tbl1Info'];
	            $tbl7Data = $_REQUEST['tbl7Info'];

				 @$std1_2BLChildren= $tbl7Data['baseline'][0]['no_children'];
				 @$std1_2BLReadingBG= $tbl7Data['baseline'][0]['reading_beg'];
				 @$std1_2BLReadingLT= $tbl7Data['baseline'][0]['reading_letter'];
				 @$std1_2BLReadingWD= $tbl7Data['baseline'][0]['reading_word'];
				 @$std1_2BLReadingPR= $tbl7Data['baseline'][0]['reading_para'];
				 @$std1_2BLReadingSY= $tbl7Data['baseline'][0]['reading_story'];
				 @$std1_2BLNumberBG= $tbl7Data['baseline'][0]['number_beg'];
				 @$std1_2BLNumber1Digit= $tbl7Data['baseline'][0]['number_0to9'];
				 @$std1_2BLNumber2Digits= $tbl7Data['baseline'][0]['number_10to99'];
				 @$std1_2BLOperationAC= $tbl7Data['baseline'][0]['add_c'];
				 @$std1_2BLOperationACN= $tbl7Data['baseline'][0]['add_cn'];
				 @$std1_2BLOperationSC= $tbl7Data['baseline'][0]['sub_c'];
				 @$std1_2BLOperationSCN= $tbl7Data['baseline'][0]['sub_cn'];
				 @$std1_2ELChildren= $tbl7Data['endline'][0]['no_children'];
				 @$std1_2ELReadingBG= $tbl7Data['endline'][0]['reading_beg'];
				 @$std1_2ELReadingLT= $tbl7Data['endline'][0]['reading_letter'];
				 @$std1_2ELReadingWD= $tbl7Data['endline'][0]['reading_word'];
				 @$std1_2ELReadingPR= $tbl7Data['endline'][0]['reading_para'];
				 @$std1_2ELReadingSY= $tbl7Data['endline'][0]['reading_story'];
				 @$std1_2ELNumberBG= $tbl7Data['endline'][0]['number_beg'];
				 @$std1_2ELNumber1Digit= $tbl7Data['endline'][0]['number_0to9'];
				 @$std1_2ELNumber2Digits= $tbl7Data['endline'][0]['number_10to99'];
				 @$std1_2ELOperationAC= $tbl7Data['endline'][0]['add_c'];
				 @$std1_2ELOperationACN= $tbl7Data['endline'][0]['add_cn'];
				 @$std1_2ELOperationSC= $tbl7Data['endline'][0]['sub_c'];
				 @$std1_2ELOperationSCN= $tbl7Data['endline'][0]['sub_cn'];	

			$sql7 = mysql_query("UPDATE table7 SET campno = '$campno' , std1_2BLChildren = '$std1_2BLChildren' , 	std1_2BLReadingBG = '$std1_2BLReadingBG' , 	std1_2BLReadingLT = '$std1_2BLReadingLT' , 	std1_2BLReadingWD = '$std1_2BLReadingWD' , 	std1_2BLReadingPR = '$std1_2BLReadingPR' , 	std1_2BLReadingSY = '$std1_2BLReadingSY' , 	std1_2BLNumberBG = '$std1_2BLNumberBG' , 	std1_2BLNumber1Digit = '$std1_2BLNumber1Digit' , 	std1_2BLNumber2Digits = '$std1_2BLNumber2Digits' , 	std1_2BLOperationAC = '$std1_2BLOperationAC' , 	std1_2BLOperationACN = '$std1_2BLOperationACN' , 	std1_2BLOperationSC = '$std1_2BLOperationSC' , 	std1_2BLOperationSCN = '$std1_2BLOperationSCN' , 	std1_2ELChildren = '$std1_2ELChildren' , 	std1_2ELReadingBG = '$std1_2ELReadingBG' , 	std1_2ELReadingLT = '$std1_2ELReadingLT' , 	std1_2ELReadingWD = '$std1_2ELReadingWD' , 	std1_2ELReadingPR = '$std1_2ELReadingPR' , 	std1_2ELReadingSY = '$std1_2ELReadingSY' , 	std1_2ELNumberBG = '$std1_2ELNumberBG' , 	std1_2ELNumber1Digit = '$std1_2ELNumber1Digit' , 	std1_2ELNumber2Digits = '$std1_2ELNumber2Digits' , 	std1_2ELOperationAC = '$std1_2ELOperationAC' , 	std1_2ELOperationACN = '$std1_2ELOperationACN' , 	std1_2ELOperationSC = '$std1_2ELOperationSC' , 	std1_2ELOperationSCN = '$std1_2ELOperationSCN' where schoolCode  = '$schoolCode'");

			//Table 8
	            $tbl1Data = $_REQUEST['tbl1Info'];
	            $tbl8Data = $_REQUEST['tbl8Info'];

	             @$camp1GovtOfficials= $tbl8Data['camp1'][0]['GovtOfficials'];
				 @$camp1StateHead= $tbl8Data['camp1'][0]['StateHead'];
				 @$camp1ContentSRG= $tbl8Data['camp1'][0]['ContentSRG'];
				 @$Camp1BCDRL= $tbl8Data['camp1'][0]['BCDRL'];
				 @$camp1MMETeam= $tbl8Data['camp1'][0]['MMETeam'];
				 @$camp1Community= $tbl8Data['camp1'][0]['Community'];
				 @$camp1Others= $tbl8Data['camp1'][0]['Others'];
				 @$camp2GovtOfficials= $tbl8Data['camp2'][0]['GovtOfficials'];
				 @$camp2StateHead= $tbl8Data['camp2'][0]['StateHead'];
				 @$camp2ContentSRG= $tbl8Data['camp2'][0]['ContentSRG'];
				 @$camp2BCDRL= $tbl8Data['camp2'][0]['BCDRL'];
				 @$camp2MMETeam= $tbl8Data['camp2'][0]['MMETeam'];
				 @$camp2Community= $tbl8Data['camp2'][0]['Community'];
				 @$camp2Others= $tbl8Data['camp2'][0]['Others'];
				 @$camp3GovtOfficials= $tbl8Data['camp3'][0]['GovtOfficials'];
				 @$camp3StateHead= $tbl8Data['camp3'][0]['StateHead'];
				 @$camp3ContentSRG= $tbl8Data['camp3'][0]['ContentSRG'];
				 @$camp3BCDRL= $tbl8Data['camp3'][0]['BCDRL'];
				 @$camp3MMETeam= $tbl8Data['camp3'][0]['MMETeam'];
				 @$camp3Community= $tbl8Data['camp3'][0]['Community'];
				 @$camp3Others= $tbl8Data['camp3'][0]['Others'];
				 @$camp4GovtOfficials= $tbl8Data['camp4'][0]['GovtOfficials'];
				 @$camp4StateHead= $tbl8Data['camp4'][0]['StateHead'];
				 @$camp4ContentSRG= $tbl8Data['camp4'][0]['ContentSRG'];
				 @$camp4BCDRL= $tbl8Data['camp4'][0]['BCDRL'];
				 @$camp4MMETeam= $tbl8Data['camp4'][0]['MMETeam'];
				 @$camp4Community= $tbl8Data['camp4'][0]['Community'];
				 @$camp4Others= $tbl8Data['camp4'][0]['Others'];

			$sql8 = mysql_query("UPDATE table8 SET campno = '$campno' ,camp1GovtOfficials = '$camp1GovtOfficials' , 	camp1StateHead = '$camp1StateHead' , 	camp1ContentSRG = '$camp1ContentSRG' , 	Camp1BCDRL = '$Camp1BCDRL' , 	camp1MMETeam = '$camp1MMETeam' , 	camp1Community = '$camp1Community' , 	camp1Others = '$camp1Others' , 	camp2GovtOfficials = '$camp2GovtOfficials' , 	camp2StateHead = '$camp2StateHead' , 	camp2ContentSRG = '$camp2ContentSRG' , 	camp2BCDRL = '$camp2BCDRL' , 	camp2MMETeam = '$camp2MMETeam' , 	camp2Community = '$camp2Community' , 	camp2Others = '$camp2Others' , 	camp3GovtOfficials = '$camp3GovtOfficials' , 	camp3StateHead = '$camp3StateHead' , 	camp3ContentSRG = '$camp3ContentSRG' , 	camp3BCDRL = '$camp3BCDRL' , 	camp3MMETeam = '$camp3MMETeam' , 	camp3Community = '$camp3Community' , 	camp3Others = '$camp3Others' , 	camp4GovtOfficials = '$camp4GovtOfficials' , 	camp4StateHead = '$camp4StateHead' , 	camp4ContentSRG = '$camp4ContentSRG' , 	camp4BCDRL = '$camp4BCDRL' , 	camp4MMETeam = '$camp4MMETeam' , 	camp4Community = '$camp4Community' , 	camp4Others = '$camp4Others' where schoolCode  = '$schoolCode'");
	



	
?>