<div class='container'>
<form method="post" class="uploadform" enctype="multipart/form-data" action='<?php echo base_url(); ?>curl/addfile.php'>
	<div class='row'>
		<div class='col-md-12'>
			<ol class="breadcrumb">
			  <li><a href="<?php echo base_url(); ?>/index.php/drivers/track">Dashboard</a></li>
			  <li class="active">New Employee</li>
			</ol>
		</div>	
	</div>	
	<div class='row'>
		<div class='col-md-12'>
			<div class='page-header'> 
				<button type="Submit" name="submitbtn" class="btn btn-info add pull-right">Create Employee</button>
				
				<h4> New Employee </h4><small> Fields marked * are Mandatory </small>
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
							<div class="form-group clearfix">
								<label for="ownerId">First Name*</label>
								<input type="text" class="form-control" id="fname" placeholder="" />
							</div>
							<div class="form-group clearfix">
								<label for="ownerId">Last Name*</label>
								<input type="text" class="form-control" id="lname" placeholder="" />
							</div>
							<div class="form-group clearfix">
								<label for="ownerId">Email Id*</label>
								<input type="text" class="form-control" id="email" placeholder="" />
							</div>
							<div class="form-group clearfix">
								<label for="ownerId">Phone*</label>
								<input type="text" class="form-control" id="phone" placeholder="" />
							</div>
						</div>
					</div>
				</div>
				<div class='col-md-4'>
				<div class='panel panel-info'>
					<div class='panel-heading'>
						Other Information
					</div>
					<div class='panel-body'>
						<div class="form-group clearfix">
							<label for="ownerId">Username*</label>
							<input type="text" class="form-control" id="uname" placeholder="" />
						</div>
						<div class="form-group clearfix">
							<label for="ownerId">Department*</label>
							<div class="form-group">
							  <select class="form-control" id="dept">
							    <option>Select Department</option>
							    <option value="Core">Core</option>
							    <option value="Admin">Admin</option>
							    <option value="CC">CC</option>
							    <option value="CRM">CRM</option>
							    <option value="ARM">ARM</option>
							    <option value="VRM">VRM</option>
							    <option value="Prod-Dev">Prod-Dev</option>
							    <option value="Brand">Brand</option>
							    <option value="Operations">Operations</option>
							    <option value="Strategy">Strategy</option>

							  </select>
							</div>
						</div>
						<div class="form-group clearfix">
							<label for="ownerId">Role*</label>
							<div class="form-group">
							  <select class="form-control" id="role">
							    <option value="">Select Role</option>
							    <option value="Junior">Junior</option>
							    <option value="Senior">Senior</option>
							    <option value="Head">Head</option>
							    <option value="Intern">Intern</option>
							  </select>
							</div>
						</div>
						
					</div>
				</div>
				</div>
				<div class='col-md-4'>
				<div class='panel panel-info'>
					<div class='panel-heading'>
						Other Information
					</div>
					<div class='panel-body'>
						<div class="form-group clearfix">
							<label for="ownerId">Agent Number*</label>
							<input type="text" class="form-control" id="anumber" placeholder="" />
						</div>
						<div class="form-group clearfix">
							<label for="ownerId">Kitty</label>
							<input type="text" class="form-control" id="kitty" placeholder="" />
						</div>
						<div class="form-group clearfix">
							<label for="ownerId">Image</label>
							<input type="file" class="form-control" name="imagefile" id="img" placeholder="" />
						</div>
					</div>
				</div>
				</div>

			</div>
		</div>
	</div>
</div>
</form>

<script>
   	
   	$(document).ready(function() {
        $('.add').click(function(e) {

        	if($('#img').val()!="")
        	{
	        	$(".uploadform").ajaxForm({
			            target: '#viewimage'
			        }).submit();
	        }
	        else
	        {
			    e.preventDefault();
	        }

        	var fname = $('#fname').val();
			var lname = $('#lname').val();
			var email = $('#email').val();
			var phone = $('#phone').val();
			var uname = $('#uname').val();
			var anumber = $('#anumber').val();
			var dept = $('#dept').val();
			var role = $('#role').val();
			var kitty = $('#kitty').val();
			var img = $('#img').val();
			//alert(img);
	   		
	   		if(fname == '' || lname == '' || email == '' || uname == '' || anumber == '' || dept == 'Select Department' || role == 'Select Role' ) {
				$('.alert-placeholder').html('<div class="alert alert-danger fade in"><a class="close" data-dismiss="alert">×</a><span>Fill All Mandatory Fields Before Submit</span></div>');
			}
			else {
				

				setTimeout(function(){                
					$('.ajax-loader').removeClass('hidden');					
					jobject = {
						fname: fname,
						lname: lname,
						email: email,
						phone: phone,
						uname: uname,
						anumber: anumber,
						dept: dept,
						role: role,
						kitty: kitty,
						img: img
					}
					console.log(jobject);
					
					
					$.ajax({
						url: '<?php echo base_url(); ?>curl/createemployee.php',
						method:'POST',
						crossDomain: true,
						data:jobject,
						dataType:'json',
						success:function(data)
						{
							//alert(data);
							console.log(data);                            
							$('.alert-placeholder').html('<div class="alert alert-success fade in"><a class="close" data-dismiss="alert">×</a><span>Employee Account Created.</span></div>');
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



