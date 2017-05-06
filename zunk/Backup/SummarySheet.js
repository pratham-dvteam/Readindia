	<script>			
		//SCHOOL CODE
		$("#school_code").on("blur", function () {
		  if ($(this).val().trim().length != 10) {
			   alert("Please enter your password");//or any process you want to be done
			$( "#school_code" ).focus();
		  }
		});	
		
	</script>
