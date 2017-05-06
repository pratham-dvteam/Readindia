<?php
	$aclModel = $this->acl_model;
	$menuHash = $this->session->userdata('logged_in')['aclMenuHash'];			
?>

<!DOCTYPE html>
<html data-ng-app="godPanelApp" lang="en">
    <head> 
    	
    	<!-- Set Page Metadata -->
    	<meta charset="utf-8">
	 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	 	<?php echo link_tag('favicon.png', 'shortcut icon', 'image/ico'); ?>
		<title>Administrator | MOVE10X</title>
		
		<!-- Import javascript libraries -->
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/moment.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/moment-timezone.min.js"></script>			
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/jquery.plugin.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/jquery.countdown.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/jquery.datetimepicker.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/jquery.form.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/bootstrap-switch.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/jquery.progress.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/jquery-asPieProgress.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/jquery.toast.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/notifIt.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/socket.io-1.4.5.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/chosen.jquery.js"></script>
		<script src="http://bootboxjs.com/bootbox.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/angular.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIzxm_Wb-MoX82lBgqRjVHd1UWHqJqb_8&libraries=places">
			</script>

		<!-- Import CSS libraries -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<?php echo link_tag('css/libs/jquery.countdown.css'); ?>	
		<?php echo link_tag('css/libs/jquery.datetimepicker.css'); ?>
		<?php echo link_tag('css/libs/bootstrap-switch.css'); ?>
		<?php echo link_tag('css/libs/jquery.toast.css'); ?>
		<?php echo link_tag('assets/font-awesome-4.4.0/css/font-awesome.min.css'); ?>					
		<?php echo link_tag('css/main.css'); ?>		
		<?php echo link_tag('css/libs/chosen.css'); ?>
		<?php echo link_tag('css/libs/progress.css'); ?>		
		<?php echo link_tag('css/libs/notifIt.css'); ?>                        

		<!-- Import common angular controllers -->		
		<script type="text/javascript" src="<?php echo base_url(); ?>js/controllers/main.controller.js"></script>			
		<script type="text/javascript" src="<?php echo base_url(); ?>js/services/misc.service.js"></script>					
		<?php if(isset($all_drivers_last_location)): ?>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/controllers/mapHeader.controller.js"></script>
		<?php else: ?>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/controllers/header.controller.js"></script>			
		<?php endif; ?>		
    </head>
    
    <body data-ng-controller="mainController">

    	<input type="hidden" id="infoBaseUrl" value="<?php echo base_url(); ?>" />

    	<?php if(isset($all_drivers_last_location)): ?>
    	<div data-ng-controller="mapHeaderController">
    	<?php else: ?>
    	<div data-ng-controller="headerController">
    	<?php endif; ?>	

        	<!-- Fare Chart Modal -->
			<div class="modal fade" role="dialog" aria-labelledby="Fare Chart" id="fareChartModal">
			  <div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">FARE CHART</h4>
				  </div>
				  <div class="modal-body" style="max-height: 400px; overflow: scroll;">
					<small>Below fares do not include any tolls, octroi, labour or other government charges.</small><br/><br/>
					<div class="row" style="text-transform:uppercase;">
						<div class="col-md-3 text-center">
							<ul class='list-group'>
								<li class='list-group-item'><b>MINI</b></li>
								<li class='list-group-item'>Base Fare - <b style="text-decoration: line-through;"><span style="font-family: none;">&#x20B9;</span> 150 </b>&nbsp;<b><span style="font-size: 16px;"><span style="font-family: none;">&#x20B9;</span> 50</span></b></li>
								<li class='list-group-item'>Free Journey -<b> 2 Kms</b></li>
								<li class='list-group-item'>FREE TIME -<b> 30 mins </b></li>
								<li class='list-group-item'>Cost per Km - <b style="text-decoration: line-through;"><span style="font-family: none;">&#x20B9;</span> 22 </b>&nbsp;<b><span style="font-size: 16px;"><span style="font-family: none;">&#x20B9;</span> 11.5</span></b></li>
								<li class='list-group-item'>Cost per Min <span style="font-size:10px;"></span> - <b><span style="font-family: none;">&#x20B9;</span> 2 </b></li>
							</ul>
						</div>
						<div class="col-md-3 text-center">
							<ul class='list-group'>
								<li class='list-group-item'><b>MAX</b></li>
								<li class='list-group-item'>Base Fare -<b style="text-decoration: line-through;"><span style="font-family: none;">&#x20B9;</span> 200 </b>&nbsp;<b><span style="font-size: 16px;"><span style="font-family: none;">&#x20B9;</span> 100</span></b></li>
								<li class='list-group-item'>Free Journey -<b> 2 Kms</b></li>
								<li class='list-group-item'>FREE TIME -<b> 45 mins </b></li>
								<li class='list-group-item'>Cost per Km - <b style="text-decoration: line-through;"><span style="font-family: none;">&#x20B9;</span> 25 </b>&nbsp;<b><span style="font-size: 16px;"><span style="font-family: none;">&#x20B9;</span> 13</span></b></li>
								<li class='list-group-item'>Cost per Min <span style="font-size:10px;"></span> - <b><span style="font-family: none;">&#x20B9;</span> 2 </b></li>
							</ul>
						</div>
						<div class="col-md-3 text-center">
							<ul class='list-group'>
								<li class='list-group-item'><b>MAX+</b></li>
								<li class='list-group-item'>Base Fare -<b style="text-decoration: line-through;"><span style="font-family: none;">&#x20B9;</span> 250 </b>&nbsp;<b><span style="font-size: 16px;"><span style="font-family: none;">&#x20B9;</span> 150</span></b></li>
								<li class='list-group-item'>Free Journey -<b> 2 Kms</b></li>
								<li class='list-group-item'>FREE TIME -<b> 60 mins </b></li>
								<li class='list-group-item'>Cost per Km - <b style="text-decoration: line-through;"><span style="font-family: none;">&#x20B9;</span> 30 </b>&nbsp;<b><span style="font-size: 16px;"><span style="font-family: none;">&#x20B9;</span> 15</span></b></li>
								<li class='list-group-item'>Cost per Min <span style="font-size:10px;"></span> - <b><span style="font-family: none;">&#x20B9;</span> 2 </b></li>
							</ul>
						</div>
						<div class="col-md-3 text-center">
							<ul class='list-group'>
								<li class='list-group-item'><b>MEGA</b></li>
								<li class='list-group-item'>Base Fare - <b style="text-decoration: line-through;"><span style="font-family: none;">&#x20B9;</span> 800 </b>&nbsp;<b><span style="font-size: 16px;"><span style="font-family: none;">&#x20B9;</span> 500</span></b></li>
								<li class='list-group-item'>Free - <b>5 Kms</b> </li>
								<li class='list-group-item'>FREE TIME -<b> 120 mins </b></li>
								<li class='list-group-item'>Cost per Km - <b style="text-decoration: line-through;"><span style="font-family: none;">&#x20B9;</span> 30 </b>&nbsp;<b><span style="font-size: 16px;"><span style="font-family: none;">&#x20B9;</span> 25</span></b></li>
								<li class='list-group-item'>Cost per Min <span style="font-size:10px;"></span> - <b><span style="font-family: none;">&#x20B9;</span> 4 </b></li>
							</ul>
						</div>
					</div>
				  </div>
				</div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div>

			<!-- Vehicle Chart Modal -->
			<div class="modal fade" role="dialog" aria-labelledby="Vehicle Chart" id="vehicleChartModal">
			  <div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">VEHICLE CHART</h4>
				  </div>
				  <div class="modal-body" style="max-height: 470px; overflow: scroll;">
					<br>
					<div class="row">
						<div class="col-md-3 text-center">
							<ul class='list-group'>
								<li class='list-group-item'><img src='<?php echo base_url(); ?>assets/images/mini.png' width='150px' height='110px'></li>
								<li class='list-group-item'><b>MINI</b><br/><small><small>PIAGGIO APE, MAHINDRA ALFA</small></small></li>
								<li class='list-group-item'>Maximum (W x H x D) - <b> 5ft x 7ft x 5.3ft</b></li>
								<li class='list-group-item'>Maximum Payload -<b> 100 to 480kg </b></li>
								<li class='list-group-item'>Good for - <b><small>Chairs, Perishables, Lighting / Plumbing Fixtures etc.</small></b></li>
							</ul>
						</div>
						<div class="col-md-3 text-center">
							<ul class='list-group'>
								<li class='list-group-item'><img src='<?php echo base_url(); ?>assets/images/max.png' width='150px' height='110px'></li>
								<li class='list-group-item'><b>MAX</b><br/><small><small>TATA ACE, ASHOK-LEYLAND MADRAS, ASHOK-LEYLAND DOST</small></small></li>
								<li class='list-group-item'>Maximum (W x H x D) - <b> 6ft x 7ft x 7ft</b></li>
								<li class='list-group-item'>Maximum Payload -<b> 600 to 700kg </b></li>
								<li class='list-group-item'>Good for - <b><small>Plywood, Single bed, washing machine, fridge, glass etc.</small></b></li>
							</ul>
						</div>
						<div class="col-md-3 text-center">
							<ul class='list-group'>
								<li class='list-group-item'><img src='<?php echo base_url(); ?>assets/images/maxplus.png' width='150px' height='110px'></li>
								<li class='list-group-item'><b>MAX<span style="font-size: 20px;">+</span></b><br/><small><small>MAHINDRA BOLERO, TATA 709,MAHINDRA MAXIMO, ASHOK-LEYLAND DOST</small></small></li>
								<li class='list-group-item'>Maximum (W x H x D) - <b> 6ft x 7ft x 8.5ft</b></li>
								<li class='list-group-item'>Maximum Payload -<b> 600 to 1200kg </b></li>
								<li class='list-group-item'>Good for - <b><small>Plywood, Single bed, washing machine, fridge, glass etc.</small></b></li>
							</ul>
						</div>
						<div class="col-md-3 text-center">
							<ul class='list-group'>
								<li class='list-group-item'><img src='<?php echo base_url(); ?>assets/images/mega.png' width='150px' height='110px'></li>
								<li class='list-group-item'><b>MEGA</b><br/><small><small>TATA 407, EICHER 1080/1090/1100</small></small></li>
								<li class='list-group-item'>Maximum (W x H x D) - <b> 7ft x 10ft x 14ft</b></li>
								<li class='list-group-item'>Maximum Payload -<b> 900 to 3200kg </b></li>
								<li class='list-group-item'>Good for - <b><small>Double bed, Long pipes, Heavy machines etc.</small></b></li>
							</ul>
						</div>
					</div>
				  </div>
				</div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div>

			<!-- Fare Calculator Modal -->
			<div class="modal fade" role="dialog" aria-labelledby="Fare Calculator" id="fareCalculator">
			  <div class="modal-dialog modal-lg" role="document" style="width: 700px">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">FARE CALCULATOR</h4>
				  </div>
				  <div class='row'>
					<div class='col-md-12'>
						<div class='alert-placeholder12'> </div>
					</div>
				  </div>
				  <div class="modal-body" style="max-height: 470px; padding-bottom: 0px;">
					<div class="row">
						<div class="col-md-12">
							<table class='table table-condensed' style='margin-bottom: 0px'>
								<tr>
									<td style='border: 0px; '>
										<div class="well">
											<div class="row">
												<div class="col-md-4 text-center">
													<span style="font-size: 20px" class="totalFareDisp">
														20
													</span><br/>
													<span style="font-size: 11px">
														Total Fare
													</span>
												</div>
												<div class="col-md-4 text-center">
													<span style="font-size: 20px; color: #00c0f2;" class="payableAmountDisp">
														20
													</span><br/>
													<span style="font-size: 11px">
														Payable Amount
													</span>
												</div>
												<div class="col-md-4 text-center">
													<span style="font-size: 20px" class="discountDisp">
														20
													</span><br/>
													<span style="font-size: 11px">
														Discount Given
													</span>
												</div>
											</div>
										</div>
										<div class="well">
											<div class="row">
												<div class="col-md-6 text-center">
											
													<div class="btn-group btn-group-justified" role="group" aria-label="...">
														  <div class="btn-group" role="group">
														    <button type="button" class="btn btn-default btn-mini" <?php if(isset($booking_item['tempo_type'])): if($booking_item['tempo_type']!="MINI"): echo ""; endif; endif; ?>>MINI</button>
														  </div>
														  <div class="btn-group" role="group">
														    <button type="button" class="btn btn-default btn-max" <?php if(isset($booking_item['tempo_type'])): if($booking_item['tempo_type']!="MAX"): echo ""; endif; endif; ?>>MAX</button>
														  </div>
														  <div class="btn-group" role="group">
														    <button type="button" class="btn btn-default btn-maxplus" <?php if(isset($booking_item['tempo_type'])): if($booking_item['tempo_type']!="MAXPLUS"): echo ""; else: echo "style='color:#00c0f2'"; endif; endif; ?>>MAX+</button>
														  </div>
														  <div class="btn-group" role="group">
														    <button type="button" class="btn btn-default btn-mega" <?php if(isset($booking_item['tempo_type'])): if($booking_item['tempo_type']!="MEGA"): echo ""; endif; endif; ?>>MEGA</button>
														  </div>
													</div>
													<br/>
													<div class="form-group">
														<select id="fePromoCodeDropdown" class="btn btn-default" style="width:100%;">
															<option value="">Select Promo</option>
															<?php foreach ($promos as $promo) { ?>
																<option value="<?php echo $promo['code'] ?>"><?php echo $promo['code'] ?></option>
															<?php } ?>
														</select>
												  	</div>
												  	<div class="btn-group btn-group-justified" role="group" aria-label="...">
														<div class="btn-group" role="group">
															<button type="button" class="btn btn-default billTypeBtnClr" id="distance" style="color: rgb(0, 192, 242);">Pay Per Use</button>
														</div>
														<div class="btn-group" role="group">
															<button type="button" class="btn btn-default billTypeBtnClr" id="time">Full Day</button>
														</div>
													</div>
												</div>
												<div class="col-md-6 text-center">
													<div class="input-group form-group">
												      	<span class="input-group-addon" id="sizing-addon1">Distance</span>
														<input type="text" class="form-control" id="estKm" placeholder="" value="" />
													</div>
													<div class="input-group form-group">
														<span class="input-group-addon" id="sizing-addon1">Journey Time</span>
														<input type="text" class="form-control" id="estTotTime" placeholder="" value="" />
													</div>
													<div class="input-group form-group">
														<span class="input-group-addon" id="sizing-addon1">Wait Time</span>
														<input type="text" class="form-control" id="estWaitTime" placeholder="" value="" />
													</div>
													<div class="input-group form-group" style='display: none'>
														<span class="input-group-addon" id="sizing-addon1">Drops</span>
														<input type="text" class="form-control" id="estDrops" placeholder="" value="0" />
													</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
				  </div>
				  <div class="modal-footer">
				  	<?php if(isset($booking_item['booking_status'])): ?>
				  	  <button style="float:left;" type="button" id="copyFare" class="btn btn-success"><span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span> Copy</button>
				    <?php endif; ?>
			        <button type="button" class="btn btn-success calculateFare">Calculate</button>
			      </div>
				</div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div>

			<?php if(!isset($apiCall)){ ?>			
			<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/drivers/track">
				  	<img src="<?php echo base_url(); ?>assets/images/Move10X_Logo_White_Big.png" 
				  	class="headerLogo"/>
				  </a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
				  	
				  	<!-- Dashboard Menu -->
				  	<?php if($aclModel->isMenuAllowed($menuHash, ['dashboard'])) { ?>
						<li <?php if($active=="dashboard"){ ?> class="dropdown active" <?php } ?> >
							<a href="<?php echo base_url(); ?>index.php/dashboard">Dashboard </a>
						</li>
					<?php } ?>

					<!-- Booking Menu -->
					<?php if($aclModel->isMenuAllowed($menuHash, ['view_booking'])) { ?>
						<li <?php if($active=="booking"): ?> class="dropdown active" <?php else: ?>  class="dropdown" <?php endif; ?>>
					  		<a href="#" class="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bookings <!--<span class="caret"> --></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo base_url(); ?>index.php/bookings">Open Bookings <span class="sr-only">(current)</span></a></li>
								<li><a href="<?php echo base_url(); ?>index.php/bookings/complete">Complete Bookings <span class="sr-only">(current)</span></a></li>
							</ul>
						</li>
					<?php } ?>


					<!-- New Menu -->
					<?php if($aclModel->isMenuAllowed($menuHash, ['new_booking','new_driver_concern', 'new_driver', 'new_employee', 'new_lead'])) { ?>
						
						<li <?php if($active=="newdrivers" || $active=="newbooking" || $active=="newemployee"): ?> class="dropdown active" <?php else: ?>  class="dropdown" <?php endif; ?> >
					 		<a href="#" class="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">New <!--<span class="caret"></span>--></a>
					 	
						 	<ul class="dropdown-menu">

								<!-- Sub New booking link -->
								<?php if($aclModel->isMenuAllowed($menuHash, ['new_booking'])) { ?>
									<li><a href="<?php echo base_url(); ?>index.php/bookings/new">Booking</a></li>
									<li role="separator" class="divider"></li>
								<?php } ?>

								<!-- Sub New driver concern link -->
								<?php if($aclModel->isMenuAllowed($menuHash, ['new_driver_concern'])) { ?>
									<li><a href="#" class="concern_modal">Grievance</a></li>
									<li role="separator" class="divider"></li>
								<?php } ?>

								<!-- Sub New driver link -->
								<?php if($aclModel->isMenuAllowed($menuHash, ['new_driver'])) { ?>
									<li><a href="<?php echo base_url(); ?>index.php/drivers/new">Driver</a></li>
									<li role="separator" class="divider"></li>
								<?php } ?>

								<!-- Sub New employee link -->
								<?php if($aclModel->isMenuAllowed($menuHash, ['new_employee'])) { ?>
									<li><a href="<?php echo base_url(); ?>index.php/employee/newEmployee">Employee</a></li>
									<li role="separator" class="divider"></li>
								<?php } ?>

								<!-- Sub New lead link -->
								<?php if($aclModel->isMenuAllowed($menuHash, ['new_lead'])) { ?>
									<li><a href="<?php echo base_url(); ?>index.php/customers/newleads">Leads</a></li>
								<?php } ?>
							</ul>
						</li>
					<?php } ?>					
						
					<!-- View Menu -->
					<?php if($aclModel->isMenuAllowed($menuHash, ['view_drivers','view_pending_drivers', 'view_customers', 'view_leads', 'view_employees', 'view_driver_concerns'])) { ?>
						
						<li <?php if($active=="drivers" || $active=="customers" || $active=="employee"): ?> class="dropdown active" <?php else: ?>  class="dropdown" <?php endif; ?> >
					  		
					  		<a href="#" class="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View <!--<span class="caret"></span>--></a>
						
							<ul class="dropdown-menu">
								<!-- Sub View live track link -->
								<li><a href="<?php echo base_url(); ?>index.php/drivers/track">Live Track </a></li>
								<li role="separator" class="divider"></li>
								
								<!-- Sub View drivers link -->
								<?php if($aclModel->isMenuAllowed($menuHash, ['view_drivers'])) { ?>
									<li><a href="<?php echo base_url(); ?>index.php/drivers">Drivers </a></li>
								<?php } ?>

								<!-- Sub View pending drivers link -->
								<?php if($aclModel->isMenuAllowed($menuHash, ['view_pending_drivers'])) { ?>
									<li><a href="<?php echo base_url(); ?>index.php/tempdrivers">Pending Drivers </a></li>
								<?php } ?>
								
								<li role="separator" class="divider"></li>

								<!-- Sub View customers link -->
								<?php if($aclModel->isMenuAllowed($menuHash, ['view_customers'])) { ?>
									<li><a href="<?php echo base_url(); ?>index.php/customers">Customers </a></li>
								<?php } ?>

								<!-- Sub View leads link -->
								<?php if($aclModel->isMenuAllowed($menuHash, ['view_leads'])) { ?>
									<li><a href="<?php echo base_url(); ?>index.php/customers/leads">Leads </a></li>
								<?php } ?>

								<li role="separator" class="divider"></li>

								<!-- Sub View employees link -->
								<?php if($aclModel->isMenuAllowed($menuHash, ['view_employees'])) { ?>
									<li><a href="<?php echo base_url(); ?>index.php/employee">Employee</a></li>
									<li role="separator" class="divider"></li>
								<?php } ?>

								<!-- Sub View driver concern link -->
								<?php if($aclModel->isMenuAllowed($menuHash, ['view_driver_concerns'])) { ?>
									<li><a href="<?php echo base_url(); ?>index.php/drivers/viewconcern">Grievance</a></li>
								<?php } ?>							
							</ul>
						</li>

					<?php } ?>					
						
					<!-- Admin Menu -->
					<?php if($aclModel->isMenuAllowed($menuHash, ['admin_tools_appUpdate','admin_tools_demandMap', 'admin_tools_sms', 'admin_crmDigest', 'admin__vrmDigest'])) { ?>
						
						<li class="dropdown1">
					  		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin <!--<span class="caret"></span>--></a>
							
							<ul class="dropdown-menu admin multi-level">
															
								<!-- Sub Tools Menu  -->
								<?php if($aclModel->isMenuAllowed($menuHash, ['admin_tools_appUpdate', 'admin_tools_demandMap', 'admin_tools_sms'])) { ?>
									
									<li <?php if($active=="tools"): ?> class="dropdown-submenu active" <?php else: ?>  class="dropdown-submenu" <?php endif; ?> >
										<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tools</a>
										
										<ul class="dropdown-menu">

											<!-- Sub-sub App updates menu -->
											<?php 
												if($this->session->userdata('logged_in')) { 
													$session_data = $this->session->userdata('logged_in');
													$corporateCode = $session_data['corporate_code'];
													if($corporateCode=="move10x"){
														if($aclModel->isMenuAllowed($menuHash, ['admin_tools_appUpdate'])) 
														{ 
											?>
														<li><a href="<?php echo base_url(); ?>index.php/drivers/appUpdate">APP Update</a></li>
											<?php 		} 
													} 
												} 
											?>

											<!-- -sub demand map menu -->
											<?php if($aclModel->isMenuAllowed($menuHash, ['admin_tools_demandMap'])) { ?>
												<li><a href="<?php echo base_url(); ?>index.php/tools/">Demand Map</a></li>
											<?php } ?>


											<!-- Sub-sub tools_sms menu -->
											<?php
												if($this->session->userdata('logged_in')) { 
													$session_data = $this->session->userdata('logged_in');
													$corporateCode = $session_data['corporate_code'];
													if($corporateCode=="move10x"){
														if($aclModel->isMenuAllowed($menuHash, ['admin_tools_sms']))
														{  
											?>
														<li><a href="<?php echo base_url(); ?>index.php/tools/sms">SMS</a></li>	
											
											<?php 		} 
													} 
												} 
											?>

											<!-- Sub lead map menu -->
											<?php if($aclModel->isMenuAllowed($menuHash, ['admin_tools_sms'])) { ?>
												<li><a href="<?php echo base_url(); ?>index.php/tools/leadmap">Lead Map</a></li>
											<?php } ?>
										</ul>
									</li>										
									
								<?php } ?>

								<!-- Sub View Digest link -->
								<?php if($aclModel->isMenuAllowed($menuHash, ['admin_crmDigest', 'admin_vrmDigest'])) { ?>

									<li <?php if($active=="digests"): ?> class="dropdown-submenu active" <?php else: ?>  class="dropdown-submenu" <?php endif; ?> >
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Digests</a>
										
										<ul class="dropdown-menu">

											<!-- Sub-sub crm digest menu -->
											<?php if($aclModel->isMenuAllowed($menuHash, ['admin_crmDigest'])) { ?>
												<li><a href="<?php echo base_url(); ?>index.php/FieldReports/crmReport">CRM Digest</a></li>
											<?php } ?>
											
											<!-- Sub-sub vrm digest menu -->
											<?php if($aclModel->isMenuAllowed($menuHash, ['admin_vrmDigest'])) { ?>
												<li><a href="<?php echo base_url(); ?>index.php/FieldReports/">VRM Digest</a></li>
											<?php } ?>											
											
										</ul>
									</li>
									
								<?php } ?>
										
								<!-- Sub View Transactions link -->
								<?php if($aclModel->isMenuAllowed($menuHash, ['admin_accounts_new_ledger', 'admin_tools_company_ledger', 'admin_tools_driver_ledger', 'admin_tools_customer_ledger'])) { ?>

									<li <?php if($active=="transactions"): ?> class="dropdown-submenu active" <?php else: ?>  class="dropdown-submenu" <?php endif; ?> >
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
										<ul class="dropdown-menu">

											<!-- Sub-sub new_ledger menu -->
											<?php if($aclModel->isMenuAllowed($menuHash, ['admin_accounts_new_ledger'])) { ?>
												<li><a href="<?php echo base_url(); ?>index.php/transactions/newLedgerEntry">New Ledger Entry</a></li>
											<?php } ?>
											
											<!-- Sub-sub company ledger menu -->
											<?php if($aclModel->isMenuAllowed($menuHash, ['admin_tools_company_ledger'])) { ?>
												<li><a href="<?php echo base_url(); ?>index.php/transactions/companyLedger">Company Ledger</a></li>
											<?php } ?>
											
											<!-- Sub-sub driver ledger menu -->
											<?php if($aclModel->isMenuAllowed($menuHash, ['admin_tools_driver_ledger'])) { ?>
												<li><a href="<?php echo base_url(); ?>index.php/transactions/driverLedger">Driver Ledger</a></li>
											<?php } ?>

											<!-- Sub-sub customer ledger menu -->
											<?php if($aclModel->isMenuAllowed($menuHash, ['admin_tools_customer_ledger'])) { ?>
												<li><a href="<?php echo base_url(); ?>index.php/transactions/customerLedger">Customer Ledger</a></li>
											<?php } ?>

											<!-- Sub-sub Sale Report menu -->
											<?php if($aclModel->isMenuAllowed($menuHash, ['admin_tools_customer_ledger'])) { ?>
												<li><a href="<?php echo base_url(); ?>index.php/transactions/saleReport">Sale Report</a></li>
											<?php } ?>

										</ul>
									</li>
									
								<?php } ?>	

								<?php
								if($this->session->userdata('logged_in')) { 
									$session_data = $this->session->userdata('logged_in');
									$corporateCode = $session_data['corporate_code'];
									if($corporateCode=="move10x"){ 
								?>
								<!-- Sub Access Control link -->
								<?php if($aclModel->isMenuAllowed($menuHash, ['admin_acl_user_roles', 'admin_acl_role_modules', 'admin_acl_module_uris'])) { ?>

									<li <?php if($active=="acl"): ?> class="dropdown-submenu active" <?php else: ?>  class="dropdown-submenu" <?php endif; ?> >
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Access Control</a>
										<ul class="dropdown-menu">

											<!-- Sub-sub usr roles menu -->
											<?php if($aclModel->isMenuAllowed($menuHash, ['admin_acl_user_roles'])) { ?>
												<li><a href="<?php echo base_url(); ?>index.php/acl/users">User Roles</a></li>
											<?php } ?>
											
											<!-- Sub-sub role modules menu -->
											<?php if($aclModel->isMenuAllowed($menuHash, ['admin_acl_role_modules'])) { ?>
												<li><a href="<?php echo base_url(); ?>index.php/acl/roles">Role Modules</a></li>
											<?php } ?>
											
											<!-- Sub-sub module uris menu -->
											<?php if($aclModel->isMenuAllowed($menuHash, ['admin_acl_module_uris'])) { ?>
												<li><a href="<?php echo base_url(); ?>index.php/acl/modules">Module Uris</a></li>
											<?php } ?>
										</ul>
									</li>									
								<?php } } } ?>	


								<?php
								if($this->session->userdata('logged_in')) { 
									$session_data = $this->session->userdata('logged_in');
									$corporateCode = $session_data['corporate_code'];
									if($corporateCode=="move10x"){ 
								?>
								<!-- Sub Payouts link -->
								<?php if($aclModel->isMenuAllowed($menuHash, ['admin_acl_user_roles', 'admin_acl_role_modules', 'admin_acl_module_uris'])) { ?>

									<li <?php if($active=="payouts"): ?> class="dropdown-submenu active" <?php else: ?>  class="dropdown-submenu" <?php endif; ?> >
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Payouts</a>
										<ul class="dropdown-menu">

											<!-- Sub-sub usr roles menu -->
											<?php if($aclModel->isMenuAllowed($menuHash, ['admin_acl_user_roles'])) { ?>
												<li><a href="<?php echo base_url(); ?>index.php/payouts/financeReport">Finance Report</a></li>
											<?php } ?>
											
											<!-- Sub-sub role modules menu -->
											<?php if($aclModel->isMenuAllowed($menuHash, ['admin_acl_role_modules'])) { ?>
												<li><a href="<?php echo base_url(); ?>index.php/payouts/adminReport">Admin Report</a></li>
											<?php } ?>
											
										</ul>
									</li>									
								<?php } } } ?>	

							</ul>
						</li>
					<?php } ?>					

					<!-- MIS Menu -->
					<li <?php if($active=="mis"): ?> class="dropdown active" <?php else: ?>  class="dropdown" <?php endif; ?>  style="display: none;">
					  <a href="#" class="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MIS <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url(); ?>index.php/MisReports/driverWeeklyReport">Drivers Report</a></li>
							<li><a href="<?php echo base_url(); ?>index.php/MisReports/bookingsDailyReport">Daily Booking Report</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?php echo base_url(); ?>index.php/MisReports/operatingMetrics">Operating Metrics</a></li>
							
						</ul>
					</li>
					
					<!-- Help Menu -->
					<li class="dropdown">
					  	<a href="#" class="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Help <!--<span class="caret"></span>--></a>
						<ul class="dropdown-menu">
							<li><a href="javascript:void(0)" data-toggle="modal" data-target="#fareChartModal">Fare Chart</a></li>
							<li><a href="javascript:void(0)" data-toggle="modal" data-target="#vehicleChartModal">Vehicle Chart </a></li>
						</ul>
					</li>
				</ul>

				<!-- User Account Menu -->
			  	<ul class="nav navbar-nav navbar-right">

			  		<!-- Fare Calculator Button -->
					<li>
					  <a href="javascript:void(0)" data-toggle="modal" data-target="#fareCalculator">
					  	<span class="fa fa-calculator" style="color: white;"></span>
					  </a>
					</li>

					<!-- Notification Ticker -->
					<li class="notify" id="0">
						<a href="javascript:void(0)" data-toggle="modal" data-target="#tickerModal">
							<span class="glyphicon glyphicon-bell" style="color: white; z-index: -1; top: 4px"></span>
							<span class="badge ticker-badge acall">0</span>
						</a>

						<ul class="dropdown-menu notify1" id="notify1">
							<div>
								<ul class="nav nav-tabs notify2" role="tablist" style="font-size: 11px">
									<li role="presentation">
										<a href="#calls" aria-controls="calls" role="tab" data-toggle="tab" class="tickerTab">
											Calls
										</a>
									</li>
									<li role="presentation" class="active">
										<a href="#bookings" aria-controls="bookings" role="tab" data-toggle="tab" class="tickerTab">
											Bookings
										</a>
									</li>
									<li role="presentation">
										<a href="#others" aria-controls="others" role="tab" data-toggle="tab" class="tickerTab">
											Others
										</a>
									</li>
								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane" id="calls" style="max-height: 333px;overflow-y: scroll;width: 290px;" >
										<ul class="calls" style="list-style-type: none; padding: 0; margin: 0">
											<?php if(!isset($abandoned) || count($abandoned) == 0){ ?>
													<li></li>
											<?php }
												else{ 
													foreach($abandoned as $row){
														if($row['call_during_non_office_hours'] == 'Yes'){
															$row['call_during_non_office_hours']="NON working hours";
														}else{
															$row['call_during_non_office_hours']="Working hours";
														}
											?>
											<li style="font-weight: bold;float:left;border-bottom: 1px solid #e5e5e5;width: 264px;padding: 10px 0;">
												<span class="col-md-9" style="">
													<small>Missed Call from <?php echo $row['phone']; ?>. (during <?php echo $row['call_during_non_office_hours']; ?>) after ringing for <?php echo ($row['agent_queue_waiting_time']/ 1000) ?> seconds. Time: <?php echo $row['dialed_time'] ?>.
													</small>
												</span>
												<span class="col-md-3">
													<a class="callAmeyo1" style="cursor:pointer;" id="<?php echo $row['phone']; ?>"><i class="fa fa-phone-square" style="color: #00c0f2; font-size: 35px"></i>
													</a>
												</span>
											</li>
											<?php 
													}
												}
											?>
										</ul>
									</div>
								    <div role="tabpanel" class="tab-pane active" id="bookings" style="max-height: 333px;overflow-y: scroll;width: 290px;">
								    	<ul class="bookings" style="list-style-type: none; padding: 0; margin: 0">
								    		<li style='text-align: center; padding: 20px; 7px'><small> All new booking requests will show up here</small></li>
								    	</ul>
								    </div>
								    <div role="tabpanel" class="tab-pane" id="others" style="max-height: 333px;overflow-y: scroll;width: 290px;">
								    	<ul class="others" style="list-style-type: none; padding: 0; margin: 0">
								    		<li style='text-align: center; padding: 20px; 7px'><small> Driver delay alerts, mobile recharge requests, call back requests will show up here </small></li>
								    	</ul>
								    </div>
								</div>
							</div>
							
						</ul>
					</li>

					<!-- Node Connection Status Image -->					
					<li>
						<span class="navbar-text navbar-right connect-status">
							<i class="fa fa-circle" aria-hidden="true" style="color: lawngreen; font-size: 10px"></i>
							<!--<img src="<?php echo base_url(); ?>assets/images/connected.png" width="20px" height="20px">-->
						</span>
					</li>

					<li class="dropdown">
					  	<a href="#" class="dropdown-toggle login-status" 
					  		data-toggle="dropdown" role="button" aria-haspopup="true" 
					  		aria-expanded="false" style="margin-left: 20px;">
					  			<?php echo $username . '  '; ?>
					  			<span class="caret"></span>
					  	</a>
					  <ul class="dropdown-menu">
					  	<li><a href="" data-toggle="modal" data-target="#chgpass">Change Password</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/drivers/logout">Logout</a></li>
					  </ul>
					</li>
				</ul>
				<!--hello123-->
		  		
				
				<!-- Search Bar -->  
				<!--<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
					  <input type="text" class="form-control" placeholder="Search by Ref ID">
					</div>
					<button type="submit" class="btn btn-default"><span class='glyphicon glyphicon-search'></span></button>
				</form> -->
				</div><!-- /.navbar-collapse -->

			  </div><!-- /.container-fluid -->
			</nav>
			<?php } ?>

			<!-- Incoming Call Dialog -->
			<div class="modal fade" role="dialog" aria-labelledby="Incoming Call" id="incomingCallModal">
			  <div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Incoming Call</h4>
				  </div>
				  <div class="modal-body" style="max-height: 400px; overflow: scroll;">
						<div class="caller-number">
				
						</div>
						<div class="caller-info" style="margin-top: 20px;">
				
						</div>
				  </div>
				  <div class="modal-footer">
				  	<button style="float:left;" type="button" id="pickup" class="btn btn-success"><span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span> New Booking</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div>
		</div>

		<script>
		<?php if(isset($all_drivers_last_location)): ?>
	   		var driverLocationList = [];
	   		<?php foreach ($all_drivers_last_location as $driverLastLocation) { ?>
	   			var info = {'lat': <?php echo $driverLastLocation->lat; ?>, 'lng': <?php echo $driverLastLocation->lng; ?>};
	   			driverLocationList.push(info);
	   		<?php } ?>

	   		var activeDriverList = [];   		
	   		<?php foreach ($active_drivers as $activeDriver) { 
	   			echo 'activeDriverList.push(' . json_encode($activeDriver) . ');';    			   			
	   		} ?>

	   		var sessionId = "<?php echo $session['sessionId'] ?>";
	   	<?php endif; ?>

		</script>


