<div class='container'>
	<form method="post" class="uploadform"  enctype="multipart/form-data" action='<?php echo base_url(); ?>curl/uploadphoto.php'>
	<div class='row'>
		<div class='col-md-12'>
			<ol class="breadcrumb">
			  <li><a href="<?php echo base_url(); ?>/index.php/drivers/track">Dashboard</a></li>
			  <li class="active">New Driver</li>
			</ol>
		</div>	
	</div>	
	<div class='row'>
		<div class='col-md-12'>
			<div class='page-header'> 
				<button type="button" name="submitbtn" class="btn btn-info submit pull-right " id="img_submit">Create Account</button>
				
				<h4> NEW DRIVER </h4><small> Fields marked * are Mandatory </small>
				<div class="ajax-loader pull-right hidden" style="background: url('<?php echo base_url(); ?>assets/images/ajax-loader.gif'); width: 220px; height: 20px; margin-right: 20px; margin-top: -20px;"> </div>
			</div>
		</div>
	</div>
	
	<div class='row'>
		<div class='col-md-12'>
			<div class='alert-placeholder'> </div>
		</div>
	</div>
	
		<div class='row'>
			<div class='col-md-4'>
				<div class='panel panel-info'>
					<div class='panel-heading'>
						Personal Information
					</div>
					<div class='panel-body'>
						<div class="form-group">
							<div class="dropdown pull-left">
							  <button class="btn btn-default dropdown-toggle" type="button" id="selectRegion" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" value="">
								Region
								<span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" id='regionDropdown' aria-labelledby="selectRegion">
								<li><a href="javascript:void(0)">Mumbai</a></li>
							  </ul>
							</div>
							<div class="dropdown pull-right">
							  <button class="btn btn-default dropdown-toggle" type="button" id="selectAuthority" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" value="">
								Authority
								<span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" id='authorityDropdown' aria-labelledby="selectAuthority">
								<li><a href="javascript:void(0)">Owner</a></li>
								<li><a href="javascript:void(0)">Driver</a></li>
							  </ul>
							</div>
						</div>
						<br/><br/>
						<div class="form-group clearfix">
							<label for="ownerId">Owner ID</label>
							<select class="form-control" id="ownerName" disabled>
							<option value="" selected="selected">Select Owner Name</option>
							<?php foreach($driver_owner as $owner) { ?>
							    <option value="<?php echo $owner['owner_id']; ?>" ><?php echo $owner['owner_name']; ?></option>
							<?php	} ?>
							</select>
						</div>
						<div class="form-group">
							<label for="driverFirstName">First Name*</label>
							<input type="text" class="form-control" id="driverFirstName" placeholder="Firstname">
						</div>
						<div class="form-group">
							<label for="driverLastName">Last Name*</label>
							<input type="text" class="form-control" id="driverLastName" placeholder="Lastname">
						</div>
						<div class="form-group">
							<label for="driverPhone">Personal Mobile*</label>
							<div class="input-group">
								<div class="input-group-addon">+91</div>
								<input type="phone" class="form-control" id="driverPhone" placeholder="Mobile Number">
							</div>
						</div>
						<div class="form-group" id='driverEmailGroup'>
							<label for="driverEmail">Email</label>
							<input type="text" class="form-control" id="driverEmail" placeholder="Email ID">
						</div>
						<div class="form-group">
							<label for="address">Address*</label>
							<textarea rows='3' class="form-control" id="address" placeholder="Personal Address"></textarea>
						</div>
						<div class="form-group">
							<label for="baseStation">Base Station*</label>
							<input type="text" class="form-control" id="baseStation" placeholder="Base Station">
						</div>
						<div class="form-group">
							<label for="selectSourcedBy">Sourced By*</label>
							<div class="dropdown center-block dropup">
							  	<select class="form-control" id="sourcedByDropdown">
									<option value="0">Select Employee Name</option>
									<?php foreach($employees as $employee) { ?>
									<option value="<?php echo $employee['firstname'].' '.$employee['lastname']; ?>"><?php echo $employee['firstname'].' '.$employee['lastname']; ?></option>
									<?php	} ?>
								</select>							  
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='col-md-4'>
				<div class='panel panel-info'>
					<div class='panel-heading'>
						Vehicle and Device Info
					</div>
					<div class='panel-body'>
						<div class="form-group">
							<div class="dropdown" id='vehicleDropdown'>
							  <button class="btn btn-default dropdown-toggle" type="button" id="selectTempoType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" value="">
								Tempo Type
								<span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" id='vehicleDropdown' aria-labelledby="selectTempoType">
								<li><a href="javascript:void(0)">MINI</a></li>
								<li><a href="javascript:void(0)">MAX</a></li>
								<li><a href="javascript:void(0)">MAXPLUS</a></li>
								<li><a href="javascript:void(0)">MEGA</a></li>
							  </ul>
							</div>
						</div>
						<div class="form-group">
							<label for="vehicleMake">Vehicle Make*</label>
							<input type="text" class="form-control" id="vehicleMake" placeholder="Vehicle Make">
						</div>
						<div class="form-group">
							<label for="vehicleModel">Vehicle Model*</label>
							<input type="text" class="form-control" id="vehicleModel" placeholder="Vehicle Model">
						</div>
						<div class="form-group">
							<label for="vehicleRegno">Vehicle Registration*</label>
							<input type="text" class="form-control" id="vehicleRegno" placeholder="Registration Plate No.">
						</div>
						<div class="form-group">
							<label for="vehicleVin">Vehicle VIN*</label>
							<input type="text" class="form-control" id="vehicleVin" placeholder="VIN / Chasis No.">
						</div>
						<div class="form-group">
							<label for="IMEI">IMEI*</label>
							<input type="text" class="form-control" id="IMEI" placeholder="IMEI Number">
						</div>
						<div class="form-group">
							<label for="MSISDN">MSISDN* (Company Phone)</label>
							<input type="text" class="form-control" id="MSISDN" placeholder="Company Phone Number">
						</div>
						<div class="form-group">
							<label for="appVersion">App Version*</label>
							<input type="text" class="form-control" id="appVersion" placeholder="App Version">
						</div>
						<div class="form-group">
							<label for="phoneModel">Phone Model*</label>
							<input type="text" class="form-control" id="phoneModel" placeholder="Phone Model">
						</div>
					</div>
				</div>
			</div>
			<div class='col-md-4'>
				<div class='panel panel-info'>
					<div class='panel-heading'>
						Plan and Files
					</div>
					<div class='panel-body'>
						<div class="form-group">
							<label for="joiningDate">Joining Date*</label>
							<input type="text" class="form-control" id="joiningDate">
						</div>
						<div class="form-group">
							<div class="dropdown center-block">
							  <button class="btn btn-default btn-block dropdown-toggle" type="button" id="selectScheme" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" value="">
								Scheme
								<span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" id='schemeDropdown' aria-labelledby="selectScheme">
								<li><a href="javascript:void(0)">fixplus</a></li>
								<li><a href="javascript:void(0)">semi-fixed</a></li>
								<li><a href="javascript:void(0)">freelance</a></li>
								<li><a href="javascript:void(0)">associate</a></li>
							  </ul>
							</div>
						</div>
						<div class="form-group">
							<div class="dropdown center-block">
							  <button class="btn btn-default btn-block dropdown-toggle" type="button" id="selectWorkStatus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" value="">
								Work Status
								<span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" id='workStatusDropdown' aria-labelledby="selectWorkStatus">
								<li><a href="javascript:void(0)">ACTIVE</a></li>
								<li><a href="javascript:void(0)">TRAINING</a></li>
								<li><a href="javascript:void(0)">TEST</a></li>
								<li><a href="javascript:void(0)">NOTICE</a></li>
								<li><a href="javascript:void(0)">TERMINATED</a></li>
							  </ul>
							</div>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" id="vehicleBranded"> Vehicle Branded?
							</label>
						</div>
						<div class="form-group"> 
							<label for="driverImage">Driver Photo*</label>
							<div><input type="file" class="form-control inputBox" name="imagefile[]" id="imgproof" placeholder="Upload Image File"><span id="file_error"></span></div>
							<input type="hidden" name="imagefile1[]" id="uid" value="<?php echo uniqid('', true); ?>">
							
						</div>
						<div class="form-group">
							<label for="idProof">ID Proof</label>
							<input type="file" class="form-control" id="idProof">
						</div>
						<div class="form-group">
							<label for="addressProof">Address Proof</label>
							<input type="file" class="form-control" id="addressProof">
						</div>
						<div class="form-group">
							<label for="drivingLicense">Driving License</label>
							<input type="file" class="form-control" id="drivingLicense">
						</div>
						<div class="form-group">
							<label for="vehiclePermit">Vehicle Permit / Certificate</label>
							<input type="file" class="form-control" id="vehiclePermit">
						</div>
						<div class="form-group">
							<label for="rcBook">RC Book</label>
							<input type="file" class="form-control" id="rcBook">
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</form>
	
	<div class='row'>
		<div class='col-md-12'>
			
		</div>
	</div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
<script>
	
	var tempoType;
	var region;
	var authority;
	var scheme;
	var ownerId;
	var driverFirstName;
	var driverLastName;
	var personalMobile;
	var email;
	var address;
	var baseStation;
	var vmake;
	var vmodel;
	var vreg;
	var vvin;
	var IMEI;
	var MSISDN;
	var appVersion;
	var phoneModel;
	var joinDate;
	var scheme;
	var vBranded;
	var workStatus;
	var sourcedBy;
	var uid;
	
	function isValidEmailAddress(emailAddress) {            
		var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
		return pattern.test(emailAddress);
	};
	
	var dateOptions = {
		minDate:'-1970/01/1',
		maxDate:'+1970/01/3',
		timepicker:false,
		format:'Y/m/d H:i'
	}

	

	$('#joiningDate').datetimepicker(dateOptions);
	
	$('#driverEmail').blur(function(){				
		if(isValidEmailAddress($(this).val()))
		{
			$('#driverEmailGroup').removeClass('has-error');
		}
		else
		{
			$('#driverEmailGroup').addClass('has-error');
		}
	});
	
	$("#vehicleDropdown").on('click', 'li a', function(){
	  	$("#selectTempoType").html($(this).text() + '  <span class="caret"> </span>');
	  	$("#selectTempoType").val($(this).text());
	  	tempoType = $('#selectTempoType').val();
   	});
   	
   	$("#regionDropdown").on('click', 'li a', function(){
	  	$("#selectRegion").html($(this).text() + '  <span class="caret"> </span>');
	  	$("#selectRegion").val($(this).text());
	  	region = $("#selectRegion").val();
   	});
   	
   	$("#authorityDropdown").on('click', 'li a', function(){
	  	$("#selectAuthority").html($(this).text() + '  <span class="caret"> </span>');
	  	$("#selectAuthority").val($(this).text());
	  	authority = $("#selectAuthority").val();
	  	if(authority=="Owner"){
	  		$( "#ownerName" ).prop( "disabled", true);
	  	}
	  	else{
	  		$( "#ownerName" ).prop( "disabled", false);
	  	}
   	});
   	
   	$("#schemeDropdown").on('click', 'li a', function(){
	  	$("#selectScheme").html($(this).text() + '  <span class="caret"> </span>');
	  	$("#selectScheme").val($(this).text());
	  	scheme = $("#selectScheme").val();
   	});
   	
   	$("#workStatusDropdown").on('click', 'li a', function(){
	  	$("#selectWorkStatus").html($(this).text() + '  <span class="caret"> </span>');
	  	$("#selectWorkStatus").val($(this).text());
	  	workStatus = $("#selectWorkStatus").val();
   	});
   	
   	$("#sourcedByDropdown").on('click', 'li a', function(){
	  	$("#selectSourcedBy").html($(this).text() + '  <span class="caret"> </span>');
	  	$("#selectSourcedBy").val($(this).text());
	  	sourcedBy = $("#selectSourcedBy").val();
   	});

   	$('#img_submit').click( function(){    
        
        $("#file_error").html("");
        $("#file_error").css("color", "#FF0000");
        $(".inputBox").css("border-color","#F0F0F0");
        if($('#imgproof').val()){
	        var fsize = $('#imgproof')[0].files[0].size;
	        
	        if(fsize>524288) 
	        {	
	        	$("#file_error").html("Files size should be less than 500KB");
	        	$(".inputBox").css("border-color","#FF0000");
	        }
	    }
    });


   	$(document).ready(function() {
        $('.submit').click(function(e) {

	   		//ownerId = $('#ownerId').val();
	   		ownerId = $( "#ownerName option:selected" ).attr("value");
	   		driverFirstName = $('#driverFirstName').val();
	   		driverLastName = $('#driverLastName').val();
	   		personalMobile = $('#driverPhone').val();
	   		email = $('#driverEmail').val();
	   		address = $('#address').val();
	   		baseStation = $('#baseStation').val();
	   		vmake = $('#vehicleMake').val();
	   		vmodel = $('#vehicleModel').val();
	   		vreg = $('#vehicleRegno').val();
	   		vvin = $('#vehicleVin').val();
	   		IMEI = $('#IMEI').val();
	   		MSISDN = $('#MSISDN').val();
	   		appVersion = $('#appVersion').val();
	   		phoneModel = $('#phoneModel').val();
	   		joinDate = $('#joiningDate').val().slice(0,10);
	   		joinDate = joinDate.replace(/\//g,'-');
	   		sourcedBy = $("#sourcedByDropdown").val();
	   		workStatus = $("#selectWorkStatus").val();
	   		scheme = $("#selectScheme").val();
	   		authority = $("#selectAuthority").val();
	   		region = $("#selectRegion").val();
	   		tempoType = $('#selectTempoType').val();
	   		imgproof = $('#imgproof').val();
		   	uid = $('#uid').val();
	   		
	   		if($('#vehicleBranded').attr('checked')) {
	   			vBranded = 1;
	   			
	   		}
	   		else {
	   			vBranded = 0;
	   		}
	   		
	   		if(region == 'Region' || workStatus == 'Work Status' || tempoType == 'Tempo Type' || driverFirstName == '' || driverLastName == '' || personalMobile == '' || address == '' || baseStation == '' || vmake == '' || vmodel == '' || vreg == '' || vvin == '' || IMEI == '' || MSISDN == '' || appVersion == '' || phoneModel == '' || joinDate == '' || sourcedBy == '' || scheme == '') {
				$('.alert-placeholder').html('<div class="alert alert-danger fade in"><a class="close" data-dismiss="alert">×</a><span>Fill All Mandatory Fields Before Submit</span></div>');
			}
			else {	
				if($('#imgproof').val()!="")
	        	{
		        	$(this).attr( "type", "submit" );
		        	$(".uploadform").ajaxForm({
				            target: '#viewimage'
				        }).submit();
		        }
		        else
		        {
				    e.preventDefault();
		        }
		        for (var i = 0, len = IMEI.length; i < len; i++)
		        {
		        	if(IMEI.length>15 || IMEI.length<15)
					{
						$('.alert-placeholder').html('<div class="alert alert-danger fade in"><a class="close" data-dismiss="alert">×</a><span>Enter 15 digit IMEI Number</span></div>');
						return false;
					}
		        }
		        for (var i = 0, len = personalMobile.length; i < len; i++) 
		        {
		        	if(isNaN(personalMobile[i]) && personalMobile!="")
					{
						$('.alert-placeholder').html('<div class="alert alert-danger fade in"><a class="close" data-dismiss="alert">×</a><span>Enter Valid Personal Number</span></div>');
						//alert("Enter Valid Number");
						return false;
					}
					if(personalMobile[0]!="7" && personalMobile[0]!="8" && personalMobile[0]!="9")
					{
						$('.alert-placeholder').html('<div class="alert alert-danger fade in"><a class="close" data-dismiss="alert">×</a><span>Personal Number should be 7,8,9</span></div>');
						//alert("Enter First Number should be 0,7,8,9");
						return false;
					}
					if(personalMobile.length>10 || personalMobile.length<10)
					{
						$('.alert-placeholder').html('<div class="alert alert-danger fade in"><a class="close" data-dismiss="alert">×</a><span>Enter 10 digit Personal Number</span></div>');
						//alert("Enter 10 digit Number");
						return false;
					}
		        }
		        for (var i = 0, len = MSISDN.length; i < len; i++) 
		        {
		        	if(isNaN(MSISDN[i]) && MSISDN!="")
					{
						$('.alert-placeholder').html('<div class="alert alert-danger fade in"><a class="close" data-dismiss="alert">×</a><span>Enter Valid MSISDN Number</span></div>');
						//alert("Enter Valid Number");
						return false;
					}
					if(MSISDN[0]!="7" && MSISDN[0]!="8" && MSISDN[0]!="9")
					{
						$('.alert-placeholder').html('<div class="alert alert-danger fade in"><a class="close" data-dismiss="alert">×</a><span>MSISDN Number should be 7,8,9</span></div>');
						//alert("Enter First Number should be 0,7,8,9");
						return false;
					}
					if(MSISDN.length>10 || MSISDN.length<10)
					{
						$('.alert-placeholder').html('<div class="alert alert-danger fade in"><a class="close" data-dismiss="alert">×</a><span>Enter 10 digit MSISDN Number</span></div>');
						//alert("Enter 10 digit Number");
						return false;
					}
		        }
				setTimeout(function(){                
					$('.ajax-loader').removeClass('hidden');					
					jobject = {
						region:region,
						firstname: driverFirstName,
						lastname: driverLastName,
						email: email,
						username: personalMobile,
						tmake: vmake,
						tmodel: vmodel,
						tcat: tempoType,
						treg: vreg,
						tvin: vvin,
						IMEI: IMEI,
						MSISDN: MSISDN,
						address: address,
						basestation: baseStation,
						appVersion: appVersion,
						pmodel: phoneModel,
						authority: authority,
						owner_id: ownerId,
						joinDate: joinDate,
						plan: scheme,
						workStatus: workStatus,
						vehicle_branded: vBranded,
						sourced_by: sourcedBy,
						imgproof: imgproof,
						uid: uid
					}
					console.log(jobject);
					
					
					$.ajax({
						url: '<?php echo base_url(); ?>index.php/drivers/registerDriver',
						method:'POST',
						crossDomain: true,
						data:jobject,
						dataType:'json',
						success:function(data)
						{
							console.log(data);                            
							if(data[0].result=='fail')
							{
								$('.alert-placeholder').html('<div class="alert alert-success fade in"><a class="close" data-dismiss="alert">×</a><span>'+data[0].error_msg+'.</span></div>');
							}
							else
							{
								$('.alert-placeholder').html('<div class="alert alert-success fade in"><a class="close" data-dismiss="alert">×</a><span>Driver Account Created.</span></div>');
							} 
							$('.ajax-loader').addClass('hidden');
						},
						error: function (xhr, ajaxOptions, thrownError) {
							//alert(xhr.status);
							//alert(thrownError);
						}
					});
					
				},1000)
			}
   		});
   	});

</script>

