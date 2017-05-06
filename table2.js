	<script type="text/javascript">
		$(document).ready(function() {


				var requestData1 = getRequestData1();
	        	console.log(requestData1);
   		        $.ajax({    //create an ajax request to load_page.php
		        type: "post",
				data:requestData1,
		        url: "getdata_table3.php",             
		        dataType: "json",   //expect html to be returned 

		        //form validation for New Data Entry

		        success: function(table3_response){                    

	         	//TABLE 3 - GEETING EXISTING DATA
					$("#id_volunteer1_type").val(table3_response[0][2]);
					$("#id_volunteer1_edu").val(table3_response[0][3]);
					$("#id_volunteer1_attendance_camp1").val(table3_response[0][4]);
					$("#id_volunteer1_attendance_camp2").val(table3_response[0][5]);
					$("#id_volunteer1_attendance_camp3").val(table3_response[0][6]);
					$("#id_volunteer1_attendance_camp4").val(table3_response[0][7]);
					$("#id_volunteer2_type").val(table3_response[0][8]);
					$("#id_volunteer2_edu").val(table3_response[0][9]);
					$("#id_volunteer2_attendance_camp1").val(table3_response[0][10]);
  		          
				}


		    });    	
		});        	
	</script>	
