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


				// //Making sure target childrend and sum of std3, std4 and std4 children are equal
				// var std3_children = +$("#id_std3").val();
				// var std4_children = +$("#id_std4").val();
				// var std5_children = +$("#id_std5").val();

				// var total_std3to5 = std3_children + std4_children + std5_children;
				// var totalchildren = +$("#id_commonchildren").val();

				// var mismatch_children = totalchildren - total_std3to5;

				// if (mismatch_children != 0) {

				// 	var t1_error1 = 1;
				// 	$("#id_t1error").after('<p>Number of targeted and Calss wise entered children are not matching</p>');
				// 	$(".er_class").css("background-color", "#FF6347");					
				// };

				// //Making sure target children and sum of male and female children's number are equal.
				// var childrenMale = +$("#id_childrenMale").val();
				// var childrenFemale = +$("#id_childrenFemale").val();

				// var total_malefemale = childrenMale + childrenFemale;

				// var totalchildren = +$("#id_commonchildren").val();
				// var mismatch_children = totalchildren - total_malefemale;

				// if (mismatch_children != 0) {
				// 	var t1_error2 = 1;
				// 	$("#id_t1error").after('<p>Number of targeted and Calss wise entered children are not matching</p>');
				// 	$(".er_gender").css("background-color", "#FF6347");
				// };

				// //Making sure target children and number of attendent children are equal.
				// var totalchildren_0to20 = +$("#id_totalchildren_0to20").val();
				// var totalchildren_21to50 = +$("#id_totalchildren_21to50").val();
				// var totalchildren_51to70 = +$("#id_totalchildren_51to70").val();
				// var totalchildren_71to100 = +$("#id_totalchildren_71to100").val();

				// var total_attendance = totalchildren_0to20 + totalchildren_21to50 + totalchildren_51to70 + totalchildren_71to100;

				// var totalchildren = +$("#id_commonchildren").val();
				// var mismatch_children = totalchildren - total_attendance;

				// if (mismatch_children != 0) {
				// 	var t1_error3 = 1;
				// 	$("#id_t1error").after('<p>Number of targeted and Calss wise entered children are not matching</p>');
				// 	$(".er_attend").css("background-color", "#FF6347");
				// };

				// //DISE code shouldn't be more or less than 10 digits	
		  // 		if ($("#id_disecode").val().trim().length != 10) {
		  // 			var t1_error4 = 1;
				// 	$("#id_t1error").after('<p>Number of targeted and Calss wise entered children are not matching</p>');
					
		  // 		};

		  		// var error = t1_error1 + t1_error2 + t1_error3 ;
		  		// if (error > 0 ) {
	  			// return;
		  		// };