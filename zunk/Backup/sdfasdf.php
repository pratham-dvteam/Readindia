
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

				//_REQUEST[''];

				

			@$schoolCode=$_REQUEST['schoolCode'];
			@$campModel=$_REQUEST['campModel'];
			@$campPhase=$_REQUEST['campPhase'];
			@$commonChildren=$_REQUEST['commonChildren'];
			@$diseCode=$_REQUEST['diseCode'];
			@$villageName=$_REQUEST['villageName'];
			@$std3TragetChildren=$_REQUEST['std3TragetChildren'];
			@$std4TragetChildren=$_REQUEST['std4TragetChildren'];
			$std5TragetChildren=$_REQUEST[std5TragetChildren];
			@$totalTeacher=$_REQUEST['totalTeacher'];
			@$classX=$_REQUEST['classX'];
			@$classY=$_REQUEST['classY'];
			@$childrenMale=$_REQUEST['childrenMale'];
			@$childrenFemale=$_REQUEST['childrenFemale'];
			@$campType=$_REQUEST['campType'];
			@$teachingDaysCamp1=$_REQUEST['teachingDaysCamp1'];
			@$teachingDaysCamp2=$_REQUEST['teachingDaysCamp2'];
			@$teachingDaysCamp3=$_REQUEST['teachingDaysCamp3'];
			@$teachingDaysCamp4=$_REQUEST['teachingDaysCamp4'];
			@$startDateCamp1=$_REQUEST['startDateCamp1'];
			@$startDateCamp2=$_REQUEST['startDateCamp2'];
			@$startDateCamp3=$_REQUEST['startDateCamp3'];
			@$startDateCamp4=$_REQUEST['startDateCamp4'];
			@$endDateCamp1=$_REQUEST['endDateCamp1'];
			@$endDateCamp2=$_REQUEST['endDateCamp2'];
			@$endDateCamp3=$_REQUEST['endDateCamp3'];
			@$endDateCamp4=$_REQUEST['endDateCamp4'];
			@$nameBRGCamp1=$_REQUEST['nameBRGCamp1'];
			@$nameBRGCamp2=$_REQUEST['nameBRGCamp2'];
			@$nameBRGCamp3=$_REQUEST['nameBRGCamp3'];
			@$nameBRGCamp4=$_REQUEST['nameBRGCamp4'];
			@$attendance0to20=$_REQUEST['attendance0to20'];
			@$attendance21to50=$_REQUEST['attendance21to50'];
			@$attendance51to70=$_REQUEST['attendance51to70'];
			@$attendance71to100=$_REQUEST['attendance71to100'];
			@$communityMeetings=$_REQUEST['communityMeetings'];
			@$visitNumberCamp1=$_REQUEST['visitNumberCamp1'];
			@$visitNumberCamp2=$_REQUEST['visitNumberCamp2'];
			@$visitNumberCamp3=$_REQUEST['visitNumberCamp3'];
			@$visitNumberCamp4=$_REQUEST['visitNumberCamp4'];
			@$familyAwarenessCamp1=$_REQUEST['familyAwarenessCamp1'];
			@$familyAwarenessCamp2=$_REQUEST['familyAwarenessCamp2'];
			@$familyAwarenessCamp3=$_REQUEST['familyAwarenessCamp3'];
			@$familyAwarenessCamp4=$_REQUEST['familyAwarenessCamp4'];


			// @$volunteer1Type=$_REQUEST['volunteer1Type'];
			// @$volunteer1Education=$_REQUEST['volunteer1Education'];
			// @$volunteer1AttendanceCamp1=$_REQUEST['volunteer1AttendanceCamp1'];
			// @$volunteer1AttendanceCamp2=$_REQUEST['volunteer1AttendanceCamp2'];
			// @$volunteer1AttendanceCamp3=$_REQUEST['volunteer1AttendanceCamp3'];
			// @$volunteer1AttendanceCamp4=$_REQUEST['volunteer1AttendanceCamp4'];
			// @$volunteer2Type=$_REQUEST['volunteer2Type'];
			// @$volunteer2Education=$_REQUEST['volunteer2Education'];
			// @$volunteer2AttendanceCamp1=$_REQUEST['volunteer2AttendanceCamp1'];
			// @$volunteer2AttendanceCamp2=$_REQUEST['volunteer2AttendanceCamp2'];
			// @$volunteer2AttendanceCamp3=$_REQUEST['volunteer2AttendanceCamp3'];
			// @$volunteer2AttendanceCamp4=$_REQUEST['volunteer2AttendanceCamp4'];
			// @$volunteer3Type=$_REQUEST['volunteer3Type'];
			// @$volunteer3Education=$_REQUEST['volunteer3Education'];
			// @$volunteer3AttendanceCamp1=$_REQUEST['volunteer3AttendanceCamp1'];
			// @$volunteer3AttendanceCamp2=$_REQUEST['volunteer3AttendanceCamp2'];
			// @$volunteer3AttendanceCamp3=$_REQUEST['volunteer3AttendanceCamp3'];
			// @$volunteer3AttendanceCamp4=$_REQUEST['volunteer3AttendanceCamp4'];
			// @$volunteer4Type=$_REQUEST['volunteer4Type'];
			// @$volunteer4Education=$_REQUEST['volunteer4Education'];
			// @$volunteer4AttendanceCamp1=$_REQUEST['volunteer4AttendanceCamp1'];
			// @$volunteer4AttendanceCamp2=$_REQUEST['volunteer4AttendanceCamp2'];
			// @$volunteer4AttendanceCamp3=$_REQUEST['volunteer4AttendanceCamp3'];
			// @$volunteer4AttendanceCamp4=$_REQUEST['volunteer4AttendanceCamp4'];
			// @$volunteer5Type=$_REQUEST['volunteer5Type'];
			// @$volunteer5Education=$_REQUEST['volunteer5Education'];
			// @$volunteer5AttendanceCamp1=$_REQUEST['volunteer5AttendanceCamp1'];
			// @$volunteer5AttendanceCamp2=$_REQUEST['volunteer5AttendanceCamp2'];
			// @$volunteer5AttendanceCamp3=$_REQUEST['volunteer5AttendanceCamp3'];
			// @$volunteer5AttendanceCamp4=$_REQUEST['volunteer5AttendanceCamp4'];
			// @$volunteer6Type=$_REQUEST['volunteer6Type'];
			// @$volunteer6Education=$_REQUEST['volunteer6Education'];
			// @$volunteer6AttendanceCamp1=$_REQUEST['volunteer6AttendanceCamp1'];
			// @$volunteer6AttendanceCamp2=$_REQUEST['volunteer6AttendanceCamp2'];
			// @$volunteer6AttendanceCamp3=$_REQUEST['volunteer6AttendanceCamp3'];
			// @$volunteer6AttendanceCamp4=$_REQUEST['volunteer6AttendanceCamp4'];
			// @$volunteer7Type=$_REQUEST['volunteer7Type'];
			// @$volunteer7Education=$_REQUEST['volunteer7Education'];
			// @$volunteer7AttendanceCamp1=$_REQUEST['volunteer7AttendanceCamp1'];
			// @$volunteer7AttendanceCamp2=$_REQUEST['volunteer7AttendanceCamp2'];
			// @$volunteer7AttendanceCamp3=$_REQUEST['volunteer7AttendanceCamp3'];
			// @$volunteer7AttendanceCamp4=$_REQUEST['volunteer7AttendanceCamp4'];
			// @$volunteer8Type=$_REQUEST['volunteer8Type'];
			// @$volunteer8Education=$_REQUEST['volunteer8Education'];
			// @$volunteer8AttendanceCamp1=$_REQUEST['volunteer8AttendanceCamp1'];
			// @$volunteer8AttendanceCamp2=$_REQUEST['volunteer8AttendanceCamp2'];
			// @$volunteer8AttendanceCamp3=$_REQUEST['volunteer8AttendanceCamp3'];
			// @$volunteer8AttendanceCamp4=$_REQUEST['volunteer8AttendanceCamp4'];
			// @$volunteer9Type=$_REQUEST['volunteer9Type'];
			// @$volunteer9Education=$_REQUEST['volunteer9Education'];
			// @$volunteer9AttendanceCamp1=$_REQUEST['volunteer9AttendanceCamp1'];
			// @$volunteer9AttendanceCamp2=$_REQUEST['volunteer9AttendanceCamp2'];
			// @$volunteer9AttendanceCamp3=$_REQUEST['volunteer9AttendanceCamp3'];
			// @$volunteer9AttendanceCamp4=$_REQUEST['volunteer9AttendanceCamp4'];
			// @$volunteer10Type=$_REQUEST['volunteer10Type'];
			// @$volunteer10Education=$_REQUEST['volunteer10Education'];
			// @$volunteer10AttendanceCamp1=$_REQUEST['volunteer10AttendanceCamp1'];
			// @$volunteer10AttendanceCamp2=$_REQUEST['volunteer10AttendanceCamp2'];
			// @$volunteer10AttendanceCamp3=$_REQUEST['volunteer10AttendanceCamp3'];
			// @$volunteer10AttendanceCamp4=$_REQUEST['volunteer10AttendanceCamp4'];
			// @$std3Enrolled=$_REQUEST['std3Enrolled'];
			// @$std3Tested=$_REQUEST['std3Tested'];
			// @$std3ReadingBG=$_REQUEST['std3ReadingBG'];
			// @$std3ReadingLT=$_REQUEST['std3ReadingLT'];
			// @$std3ReadingWD=$_REQUEST['std3ReadingWD'];
			// @$std3ReadingPR=$_REQUEST['std3ReadingPR'];
			// @$std3ReadingSY=$_REQUEST['std3ReadingSY'];
			// @$std3NumberBG=$_REQUEST['std3NumberBG'];
			// @$std3Number1Digit=$_REQUEST['std3Number1Digit'];
			// @$std3Number2Digits=$_REQUEST['std3Number2Digits'];
			// @$std3Number3Digits=$_REQUEST['std3Number3Digits'];
			// @$std4Enrolled=$_REQUEST['std4Enrolled'];
			// @$std4Tested=$_REQUEST['std4Tested'];
			// @$std4ReadingBG=$_REQUEST['std4ReadingBG'];
			// @$std4ReadingLT=$_REQUEST['std4ReadingLT'];
			// @$std4ReadingWD=$_REQUEST['std4ReadingWD'];
			// @$std4ReadingPR=$_REQUEST['std4ReadingPR'];
			// @$std4ReadingSY=$_REQUEST['std4ReadingSY'];
			// @$std4NumberBG=$_REQUEST['std4NumberBG'];
			// @$std4Number1Digit=$_REQUEST['std4Number1Digit'];
			// @$std4Number2Digits=$_REQUEST['std4Number2Digits'];
			// @$std4Number3Digits=$_REQUEST['std4Number3Digits'];
			// @$std5Enrolled=$_REQUEST['std5Enrolled'];
			// @$std5Tested=$_REQUEST['std5Tested'];
			// @$std5ReadingBG=$_REQUEST['std5ReadingBG'];
			// @$std5ReadingLT=$_REQUEST['std5ReadingLT'];
			// @$std5ReadingWD=$_REQUEST['std5ReadingWD'];
			// @$std5ReadingPR=$_REQUEST['std5ReadingPR'];
			// @$std5ReadingSY=$_REQUEST['std5ReadingSY'];
			// @$std5NumberBG=$_REQUEST['std5NumberBG'];
			// @$std5Number1Digit=$_REQUEST['std5Number1Digit'];
			// @$std5Number2Digits=$_REQUEST['std5Number2Digits'];
			// @$std5Number3Digits=$_REQUEST['std5Number3Digits'];
			// @$firstBLBeforeEL1ReadingBG=$_REQUEST['firstBLBeforeEL1ReadingBG'];
			// @$firstBLBeforeEL1ReadingLT=$_REQUEST['firstBLBeforeEL1ReadingLT'];
			// @$firstBLBeforeEL1ReadingWD=$_REQUEST['firstBLBeforeEL1ReadingWD'];
			// @$firstBLBeforeEL1ReadingPR=$_REQUEST['firstBLBeforeEL1ReadingPR'];
			// @$firstBLBeforeEL1ReadingSY=$_REQUEST['firstBLBeforeEL1ReadingSY'];
			// @$firstBLBeforeEL1NumberBG=$_REQUEST['firstBLBeforeEL1NumberBG'];
			// @$firstBLBeforeEL1Number1Digit=$_REQUEST['firstBLBeforeEL1Number1Digit'];
			// @$firstBLBeforeEL1Number2Digits=$_REQUEST['firstBLBeforeEL1Number2Digits'];
			// @$firstBLBeforeEL1Number3Digits=$_REQUEST['firstBLBeforeEL1Number3Digits'];
			// @$additionalChildBeforeEL2Tested=$_REQUEST['additionalChildBeforeEL2Tested'];
			// @$additionalChildBeforeEL2ReadingBG=$_REQUEST['additionalChildBeforeEL2ReadingBG'];
			// @$additionalChildBeforeEL2ReadingLT=$_REQUEST['additionalChildBeforeEL2ReadingLT'];
			// @$additionalChildBeforeEL2ReadingWD=$_REQUEST['additionalChildBeforeEL2ReadingWD'];
			// @$additionalChildBeforeEL2ReadingPR=$_REQUEST['additionalChildBeforeEL2ReadingPR'];
			// @$additionalChildBeforeEL2ReadingSY=$_REQUEST['additionalChildBeforeEL2ReadingSY'];
			// @$additionalChildBeforeEL2NumberBG=$_REQUEST['additionalChildBeforeEL2NumberBG'];
			// @$additionalChildBeforeEL2Number1Digit=$_REQUEST['additionalChildBeforeEL2Number1Digit'];
			// @$additionalChildBeforeEL2Number2Digits=$_REQUEST['additionalChildBeforeEL2Number2Digits'];
			// @$additionalChildBeforeEL2Number3Digits=$_REQUEST['additionalChildBeforeEL2Number3Digits'];
			// @$additionalChildBeforeEL3Tested=$_REQUEST['additionalChildBeforeEL3Tested'];
			// @$additionalChildBeforeEL3ReadingBG=$_REQUEST['additionalChildBeforeEL3ReadingBG'];
			// @$additionalChildBeforeEL3ReadingLT=$_REQUEST['additionalChildBeforeEL3ReadingLT'];
			// @$additionalChildBeforeEL3ReadingWD=$_REQUEST['additionalChildBeforeEL3ReadingWD'];
			// @$additionalChildBeforeEL3ReadingPR=$_REQUEST['additionalChildBeforeEL3ReadingPR'];
			// @$additionalChildBeforeEL3ReadingSY=$_REQUEST['additionalChildBeforeEL3ReadingSY'];
			// @$additionalChildBeforeEL3NumberBG=$_REQUEST['additionalChildBeforeEL3NumberBG'];
			// @$additionalChildBeforeEL3Number1Digit=$_REQUEST['additionalChildBeforeEL3Number1Digit'];
			// @$additionalChildBeforeEL3Number2Digits=$_REQUEST['additionalChildBeforeEL3Number2Digits'];
			// @$additionalChildBeforeEL3Number3Digits=$_REQUEST['additionalChildBeforeEL3Number3Digits'];
			// @$additionalChildBeforeEL4Tested=$_REQUEST['additionalChildBeforeEL4Tested'];
			// @$additionalChildBeforeEL4ReadingBG=$_REQUEST['additionalChildBeforeEL4ReadingBG'];
			// @$additionalChildBeforeEL4ReadingLT=$_REQUEST['additionalChildBeforeEL4ReadingLT'];
			// @$additionalChildBeforeEL4ReadingWD=$_REQUEST['additionalChildBeforeEL4ReadingWD'];
			// @$additionalChildBeforeEL4ReadingPR=$_REQUEST['additionalChildBeforeEL4ReadingPR'];
			// @$additionalChildBeforeEL4ReadingSY=$_REQUEST['additionalChildBeforeEL4ReadingSY'];
			// @$additionalChildBeforeEL4NumberBG=$_REQUEST['additionalChildBeforeEL4NumberBG'];
			// @$additionalChildBeforeEL4Number1Digit=$_REQUEST['additionalChildBeforeEL4Number1Digit'];
			// @$additionalChildBeforeEL4Number2Digits=$_REQUEST['additionalChildBeforeEL4Number2Digits'];
			// @$additionalChildBeforeEL4Number3Digits=$_REQUEST['additionalChildBeforeEL4Number3Digits'];
			// @$consolidateBLEnrolled=$_REQUEST['consolidateBLEnrolled'];
			// @$consolidateBLTested=$_REQUEST['consolidateBLTested'];
			// @$consolidateBLReadingBG=$_REQUEST['consolidateBLReadingBG'];
			// @$consolidateBLReadingLT=$_REQUEST['consolidateBLReadingLT'];
			// @$consolidateBLReadingWD=$_REQUEST['consolidateBLReadingWD'];
			// @$consolidateBLReadingPR=$_REQUEST['consolidateBLReadingPR'];
			// @$consolidateBLReadingSY=$_REQUEST['consolidateBLReadingSY'];
			// @$consolidateBLNumberBG=$_REQUEST['consolidateBLNumberBG'];
			// @$consolidateBLNumber1Digit=$_REQUEST['consolidateBLNumber1Digit'];
			// @$consolidateBLNumber2Digits=$_REQUEST['consolidateBLNumber2Digits'];
			// @$consolidateBLNumber3Digits=$_REQUEST['consolidateBLNumber3Digits'];
			// @$ELAssTested=$_REQUEST['ELAssTested'];
			// @$ELAssReadingBG=$_REQUEST['ELAssReadingBG'];
			// @$ELAssReadingLT=$_REQUEST['ELAssReadingLT'];
			// @$ELAssReadingWD=$_REQUEST['ELAssReadingWD'];
			// @$ELAssReadingPR=$_REQUEST['ELAssReadingPR'];
			// @$ELAssReadingSY=$_REQUEST['ELAssReadingSY'];
			// @$ELAssNumberBG=$_REQUEST['ELAssNumberBG'];
			// @$ELAssNumber1Digit=$_REQUEST['ELAssNumber1Digit'];
			// @$ELAssNumber2Digits=$_REQUEST['ELAssNumber2Digits'];
			// @$ELAssNumber3Digits=$_REQUEST['ELAssNumber3Digits'];
			// @$ELAssLC1Tested=$_REQUEST['ELAssLC1Tested'];
			// @$ELAssLC1ReadingBG=$_REQUEST['ELAssLC1ReadingBG'];
			// @$ELAssLC1ReadingLT=$_REQUEST['ELAssLC1ReadingLT'];
			// @$ELAssLC1ReadingWD=$_REQUEST['ELAssLC1ReadingWD'];
			// @$ELAssLC1ReadingPR=$_REQUEST['ELAssLC1ReadingPR'];
			// @$ELAssLC1ReadingSY=$_REQUEST['ELAssLC1ReadingSY'];
			// @$ELAssLC1NumberBG=$_REQUEST['ELAssLC1NumberBG'];
			// @$ELAssLC1Number1Digit=$_REQUEST['ELAssLC1Number1Digit'];
			// @$ELAssLC1Number2Digits=$_REQUEST['ELAssLC1Number2Digits'];
			// @$ELAssLC1Number3Digits=$_REQUEST['ELAssLC1Number3Digits'];
			// @$ELAssLC1OperationAC=$_REQUEST['ELAssLC1OperationAC'];
			// @$ELAssLC1OperationACN=$_REQUEST['ELAssLC1OperationACN'];
			// @$ELAssLC1OperationSC=$_REQUEST['ELAssLC1OperationSC'];
			// @$ELAssLC1OperationSCN=$_REQUEST['ELAssLC1OperationSCN'];
			// @$ELAssLC1OperationMC=$_REQUEST['ELAssLC1OperationMC'];
			// @$ELAssLC1OperationMCN=$_REQUEST['ELAssLC1OperationMCN'];
			// @$ELAssLC1OperationDC=$_REQUEST['ELAssLC1OperationDC'];
			// @$ELAssLC1OperationDCN=$_REQUEST['ELAssLC1OperationDCN'];
			// @$ELAssLC2Tested=$_REQUEST['ELAssLC2Tested'];
			// @$ELAssLC2ReadingBG=$_REQUEST['ELAssLC2ReadingBG'];
			// @$ELAssLC2ReadingLT=$_REQUEST['ELAssLC2ReadingLT'];
			// @$ELAssLC2ReadingWD=$_REQUEST['ELAssLC2ReadingWD'];
			// @$ELAssLC2ReadingPR=$_REQUEST['ELAssLC2ReadingPR'];
			// @$ELAssLC2ReadingSY=$_REQUEST['ELAssLC2ReadingSY'];
			// @$ELAssLC2NumberBG=$_REQUEST['ELAssLC2NumberBG'];
			// @$ELAssLC2Number1Digit=$_REQUEST['ELAssLC2Number1Digit'];
			// @$ELAssLC2Number2Digits=$_REQUEST['ELAssLC2Number2Digits'];
			// @$ELAssLC2Number3Digits=$_REQUEST['ELAssLC2Number3Digits'];
			// @$ELAssLC2OperationAC=$_REQUEST['ELAssLC2OperationAC'];
			// @$ELAssLC2OperationACN=$_REQUEST['ELAssLC2OperationACN'];
			// @$ELAssLC2OperationSC=$_REQUEST['ELAssLC2OperationSC'];
			// @$ELAssLC2OperationSCN=$_REQUEST['ELAssLC2OperationSCN'];
			// @$ELAssLC2OperationMC=$_REQUEST['ELAssLC2OperationMC'];
			// @$ELAssLC2OperationMCN=$_REQUEST['ELAssLC2OperationMCN'];
			// @$ELAssLC2OperationDC=$_REQUEST['ELAssLC2OperationDC'];
			// @$ELAssLC2OperationDCN=$_REQUEST['ELAssLC2OperationDCN'];
			// @$ELAssLC3Tested=$_REQUEST['ELAssLC3Tested'];
			// @$ELAssLC3ReadingBG=$_REQUEST['ELAssLC3ReadingBG'];
			// @$ELAssLC3ReadingLT=$_REQUEST['ELAssLC3ReadingLT'];
			// @$ELAssLC3ReadingWD=$_REQUEST['ELAssLC3ReadingWD'];
			// @$ELAssLC3ReadingPR=$_REQUEST['ELAssLC3ReadingPR'];
			// @$ELAssLC3ReadingSY=$_REQUEST['ELAssLC3ReadingSY'];
			// @$ELAssLC3NumberBG=$_REQUEST['ELAssLC3NumberBG'];
			// @$ELAssLC3Number1Digit=$_REQUEST['ELAssLC3Number1Digit'];
			// @$ELAssLC3Number2Digits=$_REQUEST['ELAssLC3Number2Digits'];
			// @$ELAssLC3Number3Digits=$_REQUEST['ELAssLC3Number3Digits'];
			// @$ELAssLC3OperationAC=$_REQUEST['ELAssLC3OperationAC'];
			// @$ELAssLC3OperationACN=$_REQUEST['ELAssLC3OperationACN'];
			// @$ELAssLC3OperationSC=$_REQUEST['ELAssLC3OperationSC'];
			// @$ELAssLC3OperationSCN=$_REQUEST['ELAssLC3OperationSCN'];
			// @$ELAssLC3OperationMC=$_REQUEST['ELAssLC3OperationMC'];
			// @$ELAssLC3OperationMCN=$_REQUEST['ELAssLC3OperationMCN'];
			// @$ELAssLC3OperationDC=$_REQUEST['ELAssLC3OperationDC'];
			// @$ELAssLC3OperationDCN=$_REQUEST['ELAssLC3OperationDCN'];
			// @$ELAssLC4Tested=$_REQUEST['ELAssLC4Tested'];
			// @$ELAssLC4ReadingBG=$_REQUEST['ELAssLC4ReadingBG'];
			// @$ELAssLC4ReadingLT=$_REQUEST['ELAssLC4ReadingLT'];
			// @$ELAssLC4ReadingWD=$_REQUEST['ELAssLC4ReadingWD'];
			// @$ELAssLC4ReadingPR=$_REQUEST['ELAssLC4ReadingPR'];
			// @$ELAssLC4ReadingSY=$_REQUEST['ELAssLC4ReadingSY'];
			// @$ELAssLC4NumberBG=$_REQUEST['ELAssLC4NumberBG'];
			// @$ELAssLC4Number1Digit=$_REQUEST['ELAssLC4Number1Digit'];
			// @$ELAssLC4Number2Digits=$_REQUEST['ELAssLC4Number2Digits'];
			// @$ELAssLC4Number3Digits=$_REQUEST['ELAssLC4Number3Digits'];
			// @$ELAssLC4OperationAC=$_REQUEST['ELAssLC4OperationAC'];
			// @$ELAssLC4OperationACN=$_REQUEST['ELAssLC4OperationACN'];
			// @$ELAssLC4OperationSC=$_REQUEST['ELAssLC4OperationSC'];
			// @$ELAssLC4OperationSCN=$_REQUEST['ELAssLC4OperationSCN'];
			// @$ELAssLC4OperationMC=$_REQUEST['ELAssLC4OperationMC'];
			// @$ELAssLC4OperationMCN=$_REQUEST['ELAssLC4OperationMCN'];
			// @$ELAssLC4OperationDC=$_REQUEST['ELAssLC4OperationDC'];
			// @$ELAssLC4OperationDCN=$_REQUEST['ELAssLC4OperationDCN'];
			// @$ELAssConsELTested=$_REQUEST['ELAssConsELTested'];
			// @$ELAssConsELReadingBG=$_REQUEST['ELAssConsELReadingBG'];
			// @$ELAssConsELReadingLT=$_REQUEST['ELAssConsELReadingLT'];
			// @$ELAssConsELReadingWD=$_REQUEST['ELAssConsELReadingWD'];
			// @$ELAssConsELReadingPR=$_REQUEST['ELAssConsELReadingPR'];
			// @$ELAssConsELReadingSY=$_REQUEST['ELAssConsELReadingSY'];
			// @$ELAssConsELNumberBG=$_REQUEST['ELAssConsELNumberBG'];
			// @$ELAssConsELNumber1Digit=$_REQUEST['ELAssConsELNumber1Digit'];
			// @$ELAssConsELNumber2Digits=$_REQUEST['ELAssConsELNumber2Digits'];
			// @$ELAssConsELNumber3Digits=$_REQUEST['ELAssConsELNumber3Digits'];
			// @$ELAssConsELOperationAC=$_REQUEST['ELAssConsELOperationAC'];
			// @$ELAssConsELOperationACN=$_REQUEST['ELAssConsELOperationACN'];
			// @$ELAssConsELOperationSC=$_REQUEST['ELAssConsELOperationSC'];
			// @$ELAssConsELOperationSCN=$_REQUEST['ELAssConsELOperationSCN'];
			// @$ELAssConsELOperationMC=$_REQUEST['ELAssConsELOperationMC'];
			// @$ELAssConsELOperationMCN=$_REQUEST['ELAssConsELOperationMCN'];
			// @$ELAssConsELOperationDC=$_REQUEST['ELAssConsELOperationDC'];
			// @$ELAssConsELOperationDCN=$_REQUEST['ELAssConsELOperationDCN'];
			// @$progressAcrossReadingBGBG=$_REQUEST['progressAcrossReadingBGBG'];
			// @$progressAcrossReadingBGLT=$_REQUEST['progressAcrossReadingBGLT'];
			// @$progressAcrossReadingBGWD=$_REQUEST['progressAcrossReadingBGWD'];
			// @$progressAcrossReadingBGPR=$_REQUEST['progressAcrossReadingBGPR'];
			// @$progressAcrossReadingBGSY=$_REQUEST['progressAcrossReadingBGSY'];
			// @$progressAcrossReadingBGTotal=$_REQUEST['progressAcrossReadingBGTotal'];
			// @$progressAcrossReadingLTBG=$_REQUEST['progressAcrossReadingLTBG'];
			// @$progressAcrossReadingLTLT=$_REQUEST['progressAcrossReadingLTLT'];
			// @$progressAcrossReadingLTWD=$_REQUEST['progressAcrossReadingLTWD'];
			// @$progressAcrossReadingLTPR=$_REQUEST['progressAcrossReadingLTPR'];
			// @$progressAcrossReadingLTSY=$_REQUEST['progressAcrossReadingLTSY'];
			// @$progressAcrossReadingLTTotal=$_REQUEST['progressAcrossReadingLTTotal'];
			// @$progressAcrossReadingWDBG=$_REQUEST['progressAcrossReadingWDBG'];
			// @$progressAcrossReadingWDLT=$_REQUEST['progressAcrossReadingWDLT'];
			// @$progressAcrossReadingWDWD=$_REQUEST['progressAcrossReadingWDWD'];
			// @$progressAcrossReadingWDPR=$_REQUEST['progressAcrossReadingWDPR'];
			// @$progressAcrossReadingWDSY=$_REQUEST['progressAcrossReadingWDSY'];
			// @$progressAcrossReadingWDTotal=$_REQUEST['progressAcrossReadingWDTotal'];
			// @$progressAcrossReadingPRBG=$_REQUEST['progressAcrossReadingPRBG'];
			// @$progressAcrossReadingPRWD=$_REQUEST['progressAcrossReadingPRWD'];
			// @$progressAcrossReadingPRLT=$_REQUEST['progressAcrossReadingPRLT'];
			// @$progressAcrossReadingPRPR=$_REQUEST['progressAcrossReadingPRPR'];
			// @$progressAcrossReadingPRSY=$_REQUEST['progressAcrossReadingPRSY'];
			// @$progressAcrossReadingPRTotal=$_REQUEST['progressAcrossReadingPRTotal'];
			// @$progressAcrossReadingSYBG=$_REQUEST['progressAcrossReadingSYBG'];
			// @$proogressAcrossReadingSYLT=$_REQUEST['proogressAcrossReadingSYLT'];
			// @$proogressAcrossReadingSYWD=$_REQUEST['proogressAcrossReadingSYWD'];
			// @$progressAcrossReadingSYPR=$_REQUEST['progressAcrossReadingSYPR'];
			// @$progressAcrossReadingSYSY=$_REQUEST['progressAcrossReadingSYSY'];
			// @$progressAcrossReadingSYTotal=$_REQUEST['progressAcrossReadingSYTotal'];
			// @$progressAcrossReadingTotalBG=$_REQUEST['progressAcrossReadingTotalBG'];
			// @$progressAcrossReadingTotalLT=$_REQUEST['progressAcrossReadingTotalLT'];
			// @$progressAcrossReadingTotalWD=$_REQUEST['progressAcrossReadingTotalWD'];
			// @$progressAcrossReadingTotalPR=$_REQUEST['progressAcrossReadingTotalPR'];
			// @$progressAcrossReadingTotalSY=$_REQUEST['progressAcrossReadingTotalSY'];
			// @$progressAcrossReadingTotalTotal=$_REQUEST['progressAcrossReadingTotalTotal'];
			// @$std1_2BLChildren=$_REQUEST['std1_2BLChildren'];
			// @$std1_2BLReadingBG=$_REQUEST['std1_2BLReadingBG'];
			// @$std1_2BLReadingLT=$_REQUEST['std1_2BLReadingLT'];
			// @$std1_2BLReadingWD=$_REQUEST['std1_2BLReadingWD'];
			// @$std1_2BLReadingPR=$_REQUEST['std1_2BLReadingPR'];
			// @$std1_2BLReadingSY=$_REQUEST['std1_2BLReadingSY'];
			// @$std1_2BLNumberBG=$_REQUEST['std1_2BLNumberBG'];
			// @$std1_2BLNumber1Digit=$_REQUEST['std1_2BLNumber1Digit'];
			// @$std1_2BLNumber2Digits=$_REQUEST['std1_2BLNumber2Digits'];
			// @$std1_2BLOperationAC=$_REQUEST['std1_2BLOperationAC'];
			// @$std1_2BLOperationACN=$_REQUEST['std1_2BLOperationACN'];
			// @$std1_2BLOperationSC=$_REQUEST['std1_2BLOperationSC'];
			// @$std1_2BLOperationSCN=$_REQUEST['std1_2BLOperationSCN'];
			// @$std1_2ELChildren=$_REQUEST['std1_2ELChildren'];
			// @$std1_2ELReadingBG=$_REQUEST['std1_2ELReadingBG'];
			// @$std1_2ELReadingLT=$_REQUEST['std1_2ELReadingLT'];
			// @$std1_2ELReadingWD=$_REQUEST['std1_2ELReadingWD'];
			// @$std1_2ELReadingPR=$_REQUEST['std1_2ELReadingPR'];
			// @$std1_2ELReadingSY=$_REQUEST['std1_2ELReadingSY'];
			// @$std1_2ELNumberBG=$_REQUEST['std1_2ELNumberBG'];
			// @$std1_2ELNumber1Digit=$_REQUEST['std1_2ELNumber1Digit'];
			// @$std1_2ELNumber2Digits=$_REQUEST['std1_2ELNumber2Digits'];
			// @$std1_2ELOperationAC=$_REQUEST['std1_2ELOperationAC'];
			// @$std1_2ELOperationACN=$_REQUEST['std1_2ELOperationACN'];
			// @$std1_2ELOperationSC=$_REQUEST['std1_2ELOperationSC'];
			// @$std1_2ELOperationSCN=$_REQUEST['std1_2ELOperationSCN'];
			// @$camp1GovtOfficials=$_REQUEST['camp1GovtOfficials'];
			// @$camp1StateHead=$_REQUEST['camp1StateHead'];
			// @$camp1ContentSRG=$_REQUEST['camp1ContentSRG'];
			// @$Camp1BCDRL=$_REQUEST['Camp1BCDRL'];
			// @$camp1MMETeam=$_REQUEST['camp1MMETeam'];
			// @$camp1Community=$_REQUEST['camp1Community'];
			// @$camp1Others=$_REQUEST['camp1Others'];
			// @$camp2GovtOfficials=$_REQUEST['camp2GovtOfficials'];
			// @$camp2StateHead=$_REQUEST['camp2StateHead'];
			// @$camp2ContentSRG=$_REQUEST['camp2ContentSRG'];
			// @$camp2BCDRL=$_REQUEST['camp2BCDRL'];
			// @$camp2MMETeam=$_REQUEST['camp2MMETeam'];
			// @$camp2Community=$_REQUEST['camp2Community'];
			// @$camp2Others=$_REQUEST['camp2Others'];
			// @$camp3GovtOfficials=$_REQUEST['camp3GovtOfficials'];
			// @$camp3StateHead=$_REQUEST['camp3StateHead'];
			// @$camp3ContentSRG=$_REQUEST['camp3ContentSRG'];
			// @$camp3BCDRL=$_REQUEST['camp3BCDRL'];
			// @$camp3MMETeam=$_REQUEST['camp3MMETeam'];
			// @$camp3Community=$_REQUEST['camp3Community'];
			// @$camp3Others=$_REQUEST['camp3Others'];
			// @$camp4GovtOfficials=$_REQUEST['camp4GovtOfficials'];
			// @$camp4StateHead=$_REQUEST['camp4StateHead'];
			// @$camp4ContentSRG=$_REQUEST['camp4ContentSRG'];
			// @$camp4BCDRL=$_REQUEST['camp4BCDRL'];
			// @$camp4MMETeam=$_REQUEST['camp4MMETeam'];
			// @$camp4Community=$_REQUEST['camp4Community'];
			// @$camp4Others=$_REQUEST['camp4Others'];

$sql="INSERT INTO summarysheet (schoolCode ,	campModel ,	campPhase ,	commonChildren ,	diseCode ,	villageName ,	std3TragetChildren ,	std4TragetChildren ,	std5TragetChildren ,	totalTeacher ,	classX ,	classY ,	childrenMale ,	childrenFemale ,	campType ,	teachingDaysCamp1 ,	teachingDaysCamp2 ,	teachingDaysCamp3 ,	teachingDaysCamp4 ,	startDateCamp1 ,	startDateCamp2 ,	startDateCamp3 ,	startDateCamp4 ,	endDateCamp1 ,	endDateCamp2 ,	endDateCamp3 ,	endDateCamp4 ,	nameBRGCamp1 ,	nameBRGCamp2 ,	nameBRGCamp3 ,	nameBRGCamp4 ,	attendance0to20 ,	attendance21to50 ,	attendance51to70 ,	attendance71to100 ,	communityMeetings ,	visitNumberCamp1 ,	visitNumberCamp2 ,	visitNumberCamp3 ,	visitNumberCamp4 ,	familyAwarenessCamp1 ,	familyAwarenessCamp2 ,	familyAwarenessCamp3 ,	familyAwarenessCamp4 ,	volunteer1Type ,	volunteer1Education ,	volunteer1AttendanceCamp1 ,	volunteer1AttendanceCamp2 ,	volunteer1AttendanceCamp3 ,	volunteer1AttendanceCamp4 ,	volunteer2Type ,	volunteer2Education ,	volunteer2AttendanceCamp1 ,	volunteer2AttendanceCamp2 ,	volunteer2AttendanceCamp3 ,	volunteer2AttendanceCamp4 ,	volunteer3Type ,	volunteer3Education ,	volunteer3AttendanceCamp1 ,	volunteer3AttendanceCamp2 ,	volunteer3AttendanceCamp3 ,	volunteer3AttendanceCamp4 ,	volunteer4Type ,	volunteer4Education ,	volunteer4AttendanceCamp1 ,	volunteer4AttendanceCamp2 ,	volunteer4AttendanceCamp3 ,	volunteer4AttendanceCamp4 ,	volunteer5Type ,	volunteer5Education ,	volunteer5AttendanceCamp1 ,	volunteer5AttendanceCamp2 ,	volunteer5AttendanceCamp3 ,	volunteer5AttendanceCamp4 ,	volunteer6Type ,	volunteer6Education ,	volunteer6AttendanceCamp1 ,	volunteer6AttendanceCamp2 ,	volunteer6AttendanceCamp3 ,	volunteer6AttendanceCamp4 ,	volunteer7Type ,	volunteer7Education ,	volunteer7AttendanceCamp1 ,	volunteer7AttendanceCamp2 ,	volunteer7AttendanceCamp3 ,	volunteer7AttendanceCamp4 ,	volunteer8Type ,	volunteer8Education ,	volunteer8AttendanceCamp1 ,	volunteer8AttendanceCamp2 ,	volunteer8AttendanceCamp3 ,	volunteer8AttendanceCamp4 ,	volunteer9Type ,	volunteer9Education ,	volunteer9AttendanceCamp1 ,	volunteer9AttendanceCamp2 ,	volunteer9AttendanceCamp3 ,	volunteer9AttendanceCamp4 ,	volunteer10Type ,	volunteer10Education ,	volunteer10AttendanceCamp1 ,	volunteer10AttendanceCamp2 ,	volunteer10AttendanceCamp3 ,	volunteer10AttendanceCamp4 ,	std3Enrolled ,	std3Tested ,	std3ReadingBG ,	std3ReadingLT ,	std3ReadingWD ,	std3ReadingPR ,	std3ReadingSY ,	std3NumberBG ,	std3Number1Digit ,	std3Number2Digits ,	std3Number3Digits ,	std4Enrolled ,	std4Tested ,	std4ReadingBG ,	std4ReadingLT ,	std4ReadingWD ,	std4ReadingPR ,	std4ReadingSY ,	std4NumberBG ,	std4Number1Digit ,	std4Number2Digits ,	std4Number3Digits ,	std5Enrolled ,	std5Tested ,	std5ReadingBG ,	std5ReadingLT ,	std5ReadingWD ,	std5ReadingPR ,	std5ReadingSY ,	std5NumberBG ,	std5Number1Digit ,	std5Number2Digits ,	std5Number3Digits ,	firstBLBeforeEL1ReadingBG ,	firstBLBeforeEL1ReadingLT ,	firstBLBeforeEL1ReadingWD ,	firstBLBeforeEL1ReadingPR ,	firstBLBeforeEL1ReadingSY ,	firstBLBeforeEL1NumberBG ,	firstBLBeforeEL1Number1Digit ,	firstBLBeforeEL1Number2Digits ,	firstBLBeforeEL1Number3Digits ,	additionalChildBeforeEL2Tested ,	additionalChildBeforeEL2ReadingBG ,	additionalChildBeforeEL2ReadingLT ,	additionalChildBeforeEL2ReadingWD ,	additionalChildBeforeEL2ReadingPR ,	additionalChildBeforeEL2ReadingSY ,	additionalChildBeforeEL2NumberBG ,	additionalChildBeforeEL2Number1Digit ,	additionalChildBeforeEL2Number2Digits ,	additionalChildBeforeEL2Number3Digits ,	additionalChildBeforeEL3Tested ,	additionalChildBeforeEL3ReadingBG ,	additionalChildBeforeEL3ReadingLT ,	additionalChildBeforeEL3ReadingWD ,	additionalChildBeforeEL3ReadingPR ,	additionalChildBeforeEL3ReadingSY ,	additionalChildBeforeEL3NumberBG ,	additionalChildBeforeEL3Number1Digit ,	additionalChildBeforeEL3Number2Digits ,	additionalChildBeforeEL3Number3Digits ,	additionalChildBeforeEL4Tested ,	additionalChildBeforeEL4ReadingBG ,	additionalChildBeforeEL4ReadingLT ,	additionalChildBeforeEL4ReadingWD ,	additionalChildBeforeEL4ReadingPR ,	additionalChildBeforeEL4ReadingSY ,	additionalChildBeforeEL4NumberBG ,	additionalChildBeforeEL4Number1Digit ,	additionalChildBeforeEL4Number2Digits ,	additionalChildBeforeEL4Number3Digits ,	consolidateBLEnrolled ,	consolidateBLTested ,	consolidateBLReadingBG ,	consolidateBLReadingLT ,	consolidateBLReadingWD ,	consolidateBLReadingPR ,	consolidateBLReadingSY ,	consolidateBLNumberBG ,	consolidateBLNumber1Digit ,	consolidateBLNumber2Digits ,	consolidateBLNumber3Digits ,	ELAssTested ,	ELAssReadingBG ,	ELAssReadingLT ,	ELAssReadingWD ,	ELAssReadingPR ,	ELAssReadingSY ,	ELAssNumberBG ,	ELAssNumber1Digit ,	ELAssNumber2Digits ,	ELAssNumber3Digits ,	ELAssLC1Tested ,	ELAssLC1ReadingBG ,	ELAssLC1ReadingLT ,	ELAssLC1ReadingWD ,	ELAssLC1ReadingPR ,	ELAssLC1ReadingSY ,	ELAssLC1NumberBG ,	ELAssLC1Number1Digit ,	ELAssLC1Number2Digits ,	ELAssLC1Number3Digits ,	ELAssLC1OperationAC ,	ELAssLC1OperationACN ,	ELAssLC1OperationSC ,	ELAssLC1OperationSCN ,	ELAssLC1OperationMC ,	ELAssLC1OperationMCN ,	ELAssLC1OperationDC ,	ELAssLC1OperationDCN ,	ELAssLC2Tested ,	ELAssLC2ReadingBG ,	ELAssLC2ReadingLT ,	ELAssLC2ReadingWD ,	ELAssLC2ReadingPR ,	ELAssLC2ReadingSY ,	ELAssLC2NumberBG ,	ELAssLC2Number1Digit ,	ELAssLC2Number2Digits ,	ELAssLC2Number3Digits ,	ELAssLC2OperationAC ,	ELAssLC2OperationACN ,	ELAssLC2OperationSC ,	ELAssLC2OperationSCN ,	ELAssLC2OperationMC ,	ELAssLC2OperationMCN ,	ELAssLC2OperationDC ,	ELAssLC2OperationDCN ,	ELAssLC3Tested ,	ELAssLC3ReadingBG ,	ELAssLC3ReadingLT ,	ELAssLC3ReadingWD ,	ELAssLC3ReadingPR ,	ELAssLC3ReadingSY ,	ELAssLC3NumberBG ,	ELAssLC3Number1Digit ,	ELAssLC3Number2Digits ,	ELAssLC3Number3Digits ,	ELAssLC3OperationAC ,	ELAssLC3OperationACN ,	ELAssLC3OperationSC ,	ELAssLC3OperationSCN ,	ELAssLC3OperationMC ,	ELAssLC3OperationMCN ,	ELAssLC3OperationDC ,	ELAssLC3OperationDCN ,	ELAssLC4Tested ,	ELAssLC4ReadingBG ,	ELAssLC4ReadingLT ,	ELAssLC4ReadingWD ,	ELAssLC4ReadingPR ,	ELAssLC4ReadingSY ,	ELAssLC4NumberBG ,	ELAssLC4Number1Digit ,	ELAssLC4Number2Digits ,	ELAssLC4Number3Digits ,	ELAssLC4OperationAC ,	ELAssLC4OperationACN ,	ELAssLC4OperationSC ,	ELAssLC4OperationSCN ,	ELAssLC4OperationMC ,	ELAssLC4OperationMCN ,	ELAssLC4OperationDC ,	ELAssLC4OperationDCN ,	ELAssConsELTested ,	ELAssConsELReadingBG ,	ELAssConsELReadingLT ,	ELAssConsELReadingWD ,	ELAssConsELReadingPR ,	ELAssConsELReadingSY ,	ELAssConsELNumberBG ,	ELAssConsELNumber1Digit ,	ELAssConsELNumber2Digits ,	ELAssConsELNumber3Digits ,	ELAssConsELOperationAC ,	ELAssConsELOperationACN ,	ELAssConsELOperationSC ,	ELAssConsELOperationSCN ,	ELAssConsELOperationMC ,	ELAssConsELOperationMCN ,	ELAssConsELOperationDC ,	ELAssConsELOperationDCN ,	progressAcrossReadingBGBG ,	progressAcrossReadingBGLT ,	progressAcrossReadingBGWD ,	progressAcrossReadingBGPR ,	progressAcrossReadingBGSY ,	progressAcrossReadingBGTotal ,	progressAcrossReadingLTBG ,	progressAcrossReadingLTLT ,	progressAcrossReadingLTWD ,	progressAcrossReadingLTPR ,	progressAcrossReadingLTSY ,	progressAcrossReadingLTTotal ,	progressAcrossReadingWDBG ,	progressAcrossReadingWDLT ,	progressAcrossReadingWDWD ,	progressAcrossReadingWDPR ,	progressAcrossReadingWDSY ,	progressAcrossReadingWDTotal ,	progressAcrossReadingPRBG ,	progressAcrossReadingPRWD ,	progressAcrossReadingPRLT ,	progressAcrossReadingPRPR ,	progressAcrossReadingPRSY ,	progressAcrossReadingPRTotal ,	progressAcrossReadingSYBG ,	proogressAcrossReadingSYLT ,	proogressAcrossReadingSYWD ,	progressAcrossReadingSYPR ,	progressAcrossReadingSYSY ,	progressAcrossReadingSYTotal ,	progressAcrossReadingTotalBG ,	progressAcrossReadingTotalLT ,	progressAcrossReadingTotalWD ,	progressAcrossReadingTotalPR ,	progressAcrossReadingTotalSY ,	progressAcrossReadingTotalTotal ,	std1_2BLChildren ,	std1_2BLReadingBG ,	std1_2BLReadingLT ,	std1_2BLReadingWD ,	std1_2BLReadingPR ,	std1_2BLReadingSY ,	std1_2BLNumberBG ,	std1_2BLNumber1Digit ,	std1_2BLNumber2Digits ,	std1_2BLOperationAC ,	std1_2BLOperationACN ,	std1_2BLOperationSC ,	std1_2BLOperationSCN ,	std1_2ELChildren ,	std1_2ELReadingBG ,	std1_2ELReadingLT ,	std1_2ELReadingWD ,	std1_2ELReadingPR ,	std1_2ELReadingSY ,	std1_2ELNumberBG ,	std1_2ELNumber1Digit ,	std1_2ELNumber2Digits ,	std1_2ELOperationAC ,	std1_2ELOperationACN ,	std1_2ELOperationSC ,	std1_2ELOperationSCN ,	camp1GovtOfficials ,	camp1StateHead ,	camp1ContentSRG ,	Camp1BCDRL ,	camp1MMETeam ,	camp1Community ,	camp1Others ,	camp2GovtOfficials ,	camp2StateHead ,	camp2ContentSRG ,	camp2BCDRL ,	camp2MMETeam ,	camp2Community ,	camp2Others ,	camp3GovtOfficials ,	camp3StateHead ,	camp3ContentSRG ,	camp3BCDRL ,	camp3MMETeam ,	camp3Community ,	camp3Others ,	camp4GovtOfficials ,	camp4StateHead ,	camp4ContentSRG ,	camp4BCDRL ,	camp4MMETeam ,	camp4Community ,	camp4Others ) VALUES ('$schoolCode ' ,	'$campModel ' ,	'$campPhase ' ,	'$commonChildren ' ,	'$diseCode ' ,	'$villageName ' ,	'$std3TragetChildren ' ,	'$std4TragetChildren ' ,	'$std5TragetChildren ' ,	'$totalTeacher ' ,	'$classX ' ,	'$classY ' ,	'$childrenMale ' ,	'$childrenFemale ' ,	'$campType ' ,	'$teachingDaysCamp1 ' ,	'$teachingDaysCamp2 ' ,	'$teachingDaysCamp3 ' ,	'$teachingDaysCamp4 ' ,	'$startDateCamp1 ' ,	'$startDateCamp2 ' ,	'$startDateCamp3 ' ,	'$startDateCamp4 ' ,	'$endDateCamp1 ' ,	'$endDateCamp2 ' ,	'$endDateCamp3 ' ,	'$endDateCamp4 ' ,	'$nameBRGCamp1 ' ,	'$nameBRGCamp2 ' ,	'$nameBRGCamp3 ' ,	'$nameBRGCamp4 ' ,	'$attendance0to20 ' ,	'$attendance21to50 ' ,	'$attendance51to70 ' ,	'$attendance71to100 ' ,	'$communityMeetings ' ,	'$visitNumberCamp1 ' ,	'$visitNumberCamp2 ' ,	'$visitNumberCamp3 ' ,	'$visitNumberCamp4 ' ,	'$familyAwarenessCamp1 ' ,	'$familyAwarenessCamp2 ' ,	'$familyAwarenessCamp3 ' ,	'$familyAwarenessCamp4 ' ,	'$volunteer1Type ' ,	'$volunteer1Education ' ,	'$volunteer1AttendanceCamp1 ' ,	'$volunteer1AttendanceCamp2 ' ,	'$volunteer1AttendanceCamp3 ' ,	'$volunteer1AttendanceCamp4 ' ,	'$volunteer2Type ' ,	'$volunteer2Education ' ,	'$volunteer2AttendanceCamp1 ' ,	'$volunteer2AttendanceCamp2 ' ,	'$volunteer2AttendanceCamp3 ' ,	'$volunteer2AttendanceCamp4 ' ,	'$volunteer3Type ' ,	'$volunteer3Education ' ,	'$volunteer3AttendanceCamp1 ' ,	'$volunteer3AttendanceCamp2 ' ,	'$volunteer3AttendanceCamp3 ' ,	'$volunteer3AttendanceCamp4 ' ,	'$volunteer4Type ' ,	'$volunteer4Education ' ,	'$volunteer4AttendanceCamp1 ' ,	'$volunteer4AttendanceCamp2 ' ,	'$volunteer4AttendanceCamp3 ' ,	'$volunteer4AttendanceCamp4 ' ,	'$volunteer5Type ' ,	'$volunteer5Education ' ,	'$volunteer5AttendanceCamp1 ' ,	'$volunteer5AttendanceCamp2 ' ,	'$volunteer5AttendanceCamp3 ' ,	'$volunteer5AttendanceCamp4 ' ,	'$volunteer6Type ' ,	'$volunteer6Education ' ,	'$volunteer6AttendanceCamp1 ' ,	'$volunteer6AttendanceCamp2 ' ,	'$volunteer6AttendanceCamp3 ' ,	'$volunteer6AttendanceCamp4 ' ,	'$volunteer7Type ' ,	'$volunteer7Education ' ,	'$volunteer7AttendanceCamp1 ' ,	'$volunteer7AttendanceCamp2 ' ,	'$volunteer7AttendanceCamp3 ' ,	'$volunteer7AttendanceCamp4 ' ,	'$volunteer8Type ' ,	'$volunteer8Education ' ,	'$volunteer8AttendanceCamp1 ' ,	'$volunteer8AttendanceCamp2 ' ,	'$volunteer8AttendanceCamp3 ' ,	'$volunteer8AttendanceCamp4 ' ,	'$volunteer9Type ' ,	'$volunteer9Education ' ,	'$volunteer9AttendanceCamp1 ' ,	'$volunteer9AttendanceCamp2 ' ,	'$volunteer9AttendanceCamp3 ' ,	'$volunteer9AttendanceCamp4 ' ,	'$volunteer10Type ' ,	'$volunteer10Education ' ,	'$volunteer10AttendanceCamp1 ' ,	'$volunteer10AttendanceCamp2 ' ,	'$volunteer10AttendanceCamp3 ' ,	'$volunteer10AttendanceCamp4 ' ,	'$std3Enrolled ' ,	'$std3Tested ' ,	'$std3ReadingBG ' ,	'$std3ReadingLT ' ,	'$std3ReadingWD ' ,	'$std3ReadingPR ' ,	'$std3ReadingSY ' ,	'$std3NumberBG ' ,	'$std3Number1Digit ' ,	'$std3Number2Digits ' ,	'$std3Number3Digits ' ,	'$std4Enrolled ' ,	'$std4Tested ' ,	'$std4ReadingBG ' ,	'$std4ReadingLT ' ,	'$std4ReadingWD ' ,	'$std4ReadingPR ' ,	'$std4ReadingSY ' ,	'$std4NumberBG ' ,	'$std4Number1Digit ' ,	'$std4Number2Digits ' ,	'$std4Number3Digits ' ,	'$std5Enrolled ' ,	'$std5Tested ' ,	'$std5ReadingBG ' ,	'$std5ReadingLT ' ,	'$std5ReadingWD ' ,	'$std5ReadingPR ' ,	'$std5ReadingSY ' ,	'$std5NumberBG ' ,	'$std5Number1Digit ' ,	'$std5Number2Digits ' ,	'$std5Number3Digits ' ,	'$firstBLBeforeEL1ReadingBG ' ,	'$firstBLBeforeEL1ReadingLT ' ,	'$firstBLBeforeEL1ReadingWD ' ,	'$firstBLBeforeEL1ReadingPR ' ,	'$firstBLBeforeEL1ReadingSY ' ,	'$firstBLBeforeEL1NumberBG ' ,	'$firstBLBeforeEL1Number1Digit ' ,	'$firstBLBeforeEL1Number2Digits ' ,	'$firstBLBeforeEL1Number3Digits ' ,	'$additionalChildBeforeEL2Tested ' ,	'$additionalChildBeforeEL2ReadingBG ' ,	'$additionalChildBeforeEL2ReadingLT ' ,	'$additionalChildBeforeEL2ReadingWD ' ,	'$additionalChildBeforeEL2ReadingPR ' ,	'$additionalChildBeforeEL2ReadingSY ' ,	'$additionalChildBeforeEL2NumberBG ' ,	'$additionalChildBeforeEL2Number1Digit ' ,	'$additionalChildBeforeEL2Number2Digits ' ,	'$additionalChildBeforeEL2Number3Digits ' ,	'$additionalChildBeforeEL3Tested ' ,	'$additionalChildBeforeEL3ReadingBG ' ,	'$additionalChildBeforeEL3ReadingLT ' ,	'$additionalChildBeforeEL3ReadingWD ' ,	'$additionalChildBeforeEL3ReadingPR ' ,	'$additionalChildBeforeEL3ReadingSY ' ,	'$additionalChildBeforeEL3NumberBG ' ,	'$additionalChildBeforeEL3Number1Digit ' ,	'$additionalChildBeforeEL3Number2Digits ' ,	'$additionalChildBeforeEL3Number3Digits ' ,	'$additionalChildBeforeEL4Tested ' ,	'$additionalChildBeforeEL4ReadingBG ' ,	'$additionalChildBeforeEL4ReadingLT ' ,	'$additionalChildBeforeEL4ReadingWD ' ,	'$additionalChildBeforeEL4ReadingPR ' ,	'$additionalChildBeforeEL4ReadingSY ' ,	'$additionalChildBeforeEL4NumberBG ' ,	'$additionalChildBeforeEL4Number1Digit ' ,	'$additionalChildBeforeEL4Number2Digits ' ,	'$additionalChildBeforeEL4Number3Digits ' ,	'$consolidateBLEnrolled ' ,	'$consolidateBLTested ' ,	'$consolidateBLReadingBG ' ,	'$consolidateBLReadingLT ' ,	'$consolidateBLReadingWD ' ,	'$consolidateBLReadingPR ' ,	'$consolidateBLReadingSY ' ,	'$consolidateBLNumberBG ' ,	'$consolidateBLNumber1Digit ' ,	'$consolidateBLNumber2Digits ' ,	'$consolidateBLNumber3Digits ' ,	'$ELAssTested ' ,	'$ELAssReadingBG ' ,	'$ELAssReadingLT ' ,	'$ELAssReadingWD ' ,	'$ELAssReadingPR ' ,	'$ELAssReadingSY ' ,	'$ELAssNumberBG ' ,	'$ELAssNumber1Digit ' ,	'$ELAssNumber2Digits ' ,	'$ELAssNumber3Digits ' ,	'$ELAssLC1Tested ' ,	'$ELAssLC1ReadingBG ' ,	'$ELAssLC1ReadingLT ' ,	'$ELAssLC1ReadingWD ' ,	'$ELAssLC1ReadingPR ' ,	'$ELAssLC1ReadingSY ' ,	'$ELAssLC1NumberBG ' ,	'$ELAssLC1Number1Digit ' ,	'$ELAssLC1Number2Digits ' ,	'$ELAssLC1Number3Digits ' ,	'$ELAssLC1OperationAC ' ,	'$ELAssLC1OperationACN ' ,	'$ELAssLC1OperationSC ' ,	'$ELAssLC1OperationSCN ' ,	'$ELAssLC1OperationMC ' ,	'$ELAssLC1OperationMCN ' ,	'$ELAssLC1OperationDC ' ,	'$ELAssLC1OperationDCN ' ,	'$ELAssLC2Tested ' ,	'$ELAssLC2ReadingBG ' ,	'$ELAssLC2ReadingLT ' ,	'$ELAssLC2ReadingWD ' ,	'$ELAssLC2ReadingPR ' ,	'$ELAssLC2ReadingSY ' ,	'$ELAssLC2NumberBG ' ,	'$ELAssLC2Number1Digit ' ,	'$ELAssLC2Number2Digits ' ,	'$ELAssLC2Number3Digits ' ,	'$ELAssLC2OperationAC ' ,	'$ELAssLC2OperationACN ' ,	'$ELAssLC2OperationSC ' ,	'$ELAssLC2OperationSCN ' ,	'$ELAssLC2OperationMC ' ,	'$ELAssLC2OperationMCN ' ,	'$ELAssLC2OperationDC ' ,	'$ELAssLC2OperationDCN ' ,	'$ELAssLC3Tested ' ,	'$ELAssLC3ReadingBG ' ,	'$ELAssLC3ReadingLT ' ,	'$ELAssLC3ReadingWD ' ,	'$ELAssLC3ReadingPR ' ,	'$ELAssLC3ReadingSY ' ,	'$ELAssLC3NumberBG ' ,	'$ELAssLC3Number1Digit ' ,	'$ELAssLC3Number2Digits ' ,	'$ELAssLC3Number3Digits ' ,	'$ELAssLC3OperationAC ' ,	'$ELAssLC3OperationACN ' ,	'$ELAssLC3OperationSC ' ,	'$ELAssLC3OperationSCN ' ,	'$ELAssLC3OperationMC ' ,	'$ELAssLC3OperationMCN ' ,	'$ELAssLC3OperationDC ' ,	'$ELAssLC3OperationDCN ' ,	'$ELAssLC4Tested ' ,	'$ELAssLC4ReadingBG ' ,	'$ELAssLC4ReadingLT ' ,	'$ELAssLC4ReadingWD ' ,	'$ELAssLC4ReadingPR ' ,	'$ELAssLC4ReadingSY ' ,	'$ELAssLC4NumberBG ' ,	'$ELAssLC4Number1Digit ' ,	'$ELAssLC4Number2Digits ' ,	'$ELAssLC4Number3Digits ' ,	'$ELAssLC4OperationAC ' ,	'$ELAssLC4OperationACN ' ,	'$ELAssLC4OperationSC ' ,	'$ELAssLC4OperationSCN ' ,	'$ELAssLC4OperationMC ' ,	'$ELAssLC4OperationMCN ' ,	'$ELAssLC4OperationDC ' ,	'$ELAssLC4OperationDCN ' ,	'$ELAssConsELTested ' ,	'$ELAssConsELReadingBG ' ,	'$ELAssConsELReadingLT ' ,	'$ELAssConsELReadingWD ' ,	'$ELAssConsELReadingPR ' ,	'$ELAssConsELReadingSY ' ,	'$ELAssConsELNumberBG ' ,	'$ELAssConsELNumber1Digit ' ,	'$ELAssConsELNumber2Digits ' ,	'$ELAssConsELNumber3Digits ' ,	'$ELAssConsELOperationAC ' ,	'$ELAssConsELOperationACN ' ,	'$ELAssConsELOperationSC ' ,	'$ELAssConsELOperationSCN ' ,	'$ELAssConsELOperationMC ' ,	'$ELAssConsELOperationMCN ' ,	'$ELAssConsELOperationDC ' ,	'$ELAssConsELOperationDCN ' ,	'$progressAcrossReadingBGBG ' ,	'$progressAcrossReadingBGLT ' ,	'$progressAcrossReadingBGWD ' ,	'$progressAcrossReadingBGPR ' ,	'$progressAcrossReadingBGSY ' ,	'$progressAcrossReadingBGTotal ' ,	'$progressAcrossReadingLTBG ' ,	'$progressAcrossReadingLTLT ' ,	'$progressAcrossReadingLTWD ' ,	'$progressAcrossReadingLTPR ' ,	'$progressAcrossReadingLTSY ' ,	'$progressAcrossReadingLTTotal ' ,	'$progressAcrossReadingWDBG ' ,	'$progressAcrossReadingWDLT ' ,	'$progressAcrossReadingWDWD ' ,	'$progressAcrossReadingWDPR ' ,	'$progressAcrossReadingWDSY ' ,	'$progressAcrossReadingWDTotal ' ,	'$progressAcrossReadingPRBG ' ,	'$progressAcrossReadingPRWD ' ,	'$progressAcrossReadingPRLT ' ,	'$progressAcrossReadingPRPR ' ,	'$progressAcrossReadingPRSY ' ,	'$progressAcrossReadingPRTotal ' ,	'$progressAcrossReadingSYBG ' ,	'$proogressAcrossReadingSYLT ' ,	'$proogressAcrossReadingSYWD ' ,	'$progressAcrossReadingSYPR ' ,	'$progressAcrossReadingSYSY ' ,	'$progressAcrossReadingSYTotal ' ,	'$progressAcrossReadingTotalBG ' ,	'$progressAcrossReadingTotalLT ' ,	'$progressAcrossReadingTotalWD ' ,	'$progressAcrossReadingTotalPR ' ,	'$progressAcrossReadingTotalSY ' ,	'$progressAcrossReadingTotalTotal ' ,	'$std1_2BLChildren ' ,	'$std1_2BLReadingBG ' ,	'$std1_2BLReadingLT ' ,	'$std1_2BLReadingWD ' ,	'$std1_2BLReadingPR ' ,	'$std1_2BLReadingSY ' ,	'$std1_2BLNumberBG ' ,	'$std1_2BLNumber1Digit ' ,	'$std1_2BLNumber2Digits ' ,	'$std1_2BLOperationAC ' ,	'$std1_2BLOperationACN ' ,	'$std1_2BLOperationSC ' ,	'$std1_2BLOperationSCN ' ,	'$std1_2ELChildren ' ,	'$std1_2ELReadingBG ' ,	'$std1_2ELReadingLT ' ,	'$std1_2ELReadingWD ' ,	'$std1_2ELReadingPR ' ,	'$std1_2ELReadingSY ' ,	'$std1_2ELNumberBG ' ,	'$std1_2ELNumber1Digit ' ,	'$std1_2ELNumber2Digits ' ,	'$std1_2ELOperationAC ' ,	'$std1_2ELOperationACN ' ,	'$std1_2ELOperationSC ' ,	'$std1_2ELOperationSCN ' ,	'$camp1GovtOfficials ' ,	'$camp1StateHead ' ,	'$camp1ContentSRG ' ,	'$Camp1BCDRL ' ,	'$camp1MMETeam ' ,	'$camp1Community ' ,	'$camp1Others ' ,	'$camp2GovtOfficials ' ,	'$camp2StateHead ' ,	'$camp2ContentSRG ' ,	'$camp2BCDRL ' ,	'$camp2MMETeam ' ,	'$camp2Community ' ,	'$camp2Others ' ,	'$camp3GovtOfficials ' ,	'$camp3StateHead ' ,	'$camp3ContentSRG ' ,	'$camp3BCDRL ' ,	'$camp3MMETeam ' ,	'$camp3Community ' ,	'$camp3Others ' ,	'$camp4GovtOfficials ' ,	'$camp4StateHead ' ,	'$camp4ContentSRG ' ,	'$camp4BCDRL ' ,	'$camp4MMETeam ' ,	'$camp4Community ' ,	'$camp4Others ')";
			 


		if(!mysql_query($sql)){
				die('Error:'.mysql_error());
		}
				mysql_close();
			 
//To see values
			 			echo "<pre>";
			print_r($_REQUEST['tbl2Info']);
			exit();


$tbl2Data = $_REQUEST['tbl2Info'];
			echo "<pre>";
			print_r($tbl2Data);

			@$schoolCode=$tbl1Data['schoolCode'];
			@$communityMeetings=  $tbl2Data['communityMeetings'];
			@$visitNumberCamp1=  $tbl2Data['visits'][0]['cmap1_visit'];
			@$visitNumberCamp2=  $tbl2Data['visits'][0]['cmap2_visit'];
			@$visitNumberCamp3=  $tbl2Data[0]['cmap3_visit'];
			@$visitNumberCamp4=  $tbl2Data[0]['cmap4_visit'];
			@$familyAwarenessCamp1=  $tbl2Data[0]['cmap1_awareness'];
			@$familyAwarenessCamp2=  $tbl2Data[0]['cmap2_awareness'];
			@$familyAwarenessCamp3=  $tbl2Data[0]['cmap3_awareness'];
			@$familyAwarenessCamp4=  $tbl2Data[0]['cmap4_awareness'];

			echo $visitNumberCamp2;
			exit();			