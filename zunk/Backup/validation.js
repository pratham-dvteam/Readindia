		// <script>
		//  	document.getElementById('id_submission1').onchange = function() {
  //   			document.getElementById('id_teachingdays_camp2').disabled = !this.checked;

		// 	};		
		// </script>

		$(document).ready(function() {
		   
		});

		$('.Save').click(function(){
			console.log(111);
			  if ($("#id_disecode").val().trim().length != 10) {
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
