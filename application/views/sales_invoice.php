<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JCore v2</title>

	
    <?php include('assets/includes/global_css.html'); ?>
	
	<!-- Checkbox / Radio -->
    <link href="assets/css/plugins/iCheck/custom.css" rel="stylesheet">
	
	<!-- Dropdown / Select picker-->
	<link href="assets/css/dropdown-enhance/dist/css/bootstrap-select.min.css" rel="stylesheet">
	
	<!-- Datepicker --->
	<link href="assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
	 
	<!-- Data Tables -->
    <link href="assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="assets/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="assets/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
	

	
   
	<style>
		.toolbar{			
			float: left;
		}
		
		.tools {
			float: left;
			margin-bottom:5px;
		}
		
		[contenteditable="true"]:active,
		[contenteditable="true"]:focus{
			border:3px solid #F5C116;
			outline:none;
			
			background: white;
		}
	</style>
</head>

<body>

    <div id="wrapper">
		<!-- /left navigation -->
		<?php $this->load->view('templates/left_navigation.php'); ?>
		<!-- /left navigation -->
	
	
	
        <div id="page-wrapper" class="gray-bg">
				<div class="row border-bottom">
					<!-- /top navigation -->
					<?php $this->load->view('templates/top_navigation.php'); ?>
					<!-- /top navigation -->
				</div>

		
		
		
        <div class="wrapper wrapper-content"><!-- /main content area -->
				<div class="row">
					<div class="col-lg-2">
						<div class="ibox float-e-margins">
							<div class="ibox-content mailbox-content">
								<div class="file-manager">
														
									<button type="button" class="btn btn-block btn-primary compose-mail" data-toggle="modal" data-target="#invoice_modal">
										<i class="fa fa-file-text-o"></i> 
										<u>N</u>ew Invoice
									</button>
									
									<div class="space-25"></div>
									<h5>Options</h5>
									<ul class="folder-list m-b-md" style="padding: 0">
										<li><a href="#"> <i class="fa fa-inbox "></i> Adjust Invoice </a></li>                                
										<li><a href="#"> <i class="fa fa-certificate"></i> Set to Inactive</a></li>                              
										<li><a href="#"> <i class="fa fa-trash-o"></i> Trash</a></li>
									</ul>
									<h5>Reference</h5>
									<ul class="category-list" style="padding: 0">
										<li><a href="#"> <i class="fa fa-circle text-navy"></i> Department </a></li>
										<li><a href="#"> <i class="fa fa-circle text-danger"></i> Products </a></li>
										<li><a href="#"> <i class="fa fa-circle text-primary"></i> Categories</a></li>                                
									</ul>

									
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-10 animated fadeInRight">
							<div class="mail-box-header" style="margin-bottom:-25px;">
								<h2 style="block:inline;"><i class="fa fa-clipboard"></i> Sales Invoice </h2>
								
							</div>
							
							<div class="mail-box" style="padding-left:10px;padding-right:10px;">
							
							
								<div class="panel-heading">                            
									<div class="panel-options">
										<div class="pull-right box-tools" style="margin-top:15px"><!-- /. tools -->
													  <i class="fa fa-clipboard"></i> Today's Invoice  [<a href="#">View Previous?</a>]
										</div><!-- /. tools -->
											
									
										<ul class="nav nav-tabs">
											<li class="active"><a data-toggle="tab" href="#tab-1">Invoice History</a></li>
											<li class=""><a data-toggle="tab" href="#tab-2">Invoice # [ 201510290001 ]</a></li>
										</ul>
									</div>
								</div>

								<div class="panel-body">

									<div class="tab-content">
										<div id="tab-1" class="tab-pane active">
												<table id="tbl_invoice_list" class="table table-bordered">
													<thead>
														<tr>
															<td></td>
															<td>Invoice #</td>
															<td>Txn Date</td>
															<td>Customer</td>
															<td>Seller</td>
															<td>Amount</td>
															<td style="text-align:center;">Status</td>
															<td style="text-align:center;">Action</td>
														</tr>
													</thead>
													<tbody>
														<?php for($i=0;$i<=55;$i++){ ?>
														<tr>
															<td><input type="checkbox"></td>
															<td>201510290000<?php echo $i; ?></td>
															<td>10/29/2015 12:01PM</td>
															<td>Paul Christian Rueda</td>
															<td>Admin</td>
															<td>10,000.00</td>
															<td><center><a href="#"><i class="fa fa-check-circle" style="color:green;"></a></center></td>
															<td align="center">
																<button class="btn btn-white btn-sm" style="margin-left:-15px;" data-toggle="tooltip" data-placement="top" title="Create Invoice"><i class="fa fa-file-text-o"></i> </button>
																<button class="btn btn-white btn-sm" style="margin-right:-15px;" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>
															</td>
														</tr>
														<?php } ?>
													</tbody>
												</table>	
										</div>
										
										<div id="tab-2" class="tab-pane">
										
										</div>
									</div>
								</div>
							</div>
						
					</div>
				</div>
        </div><!-- /main content area -->
		
		<!-- /footer -->
        <?php $this->load->view('templates/footer'); ?>
		<!-- /footer -->
		
		
        </div>
        </div>
		
		
		<!---/invoice modal--->
		<div class="modal fade" id="invoice_modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog"  style="width:70%;">
                                <div class="modal-content animated bounceInRight">
                                        
										
										
                                        <div class="modal-body"><!--/modal body-->
											<div class="row" style="margin-left:-25px;margin-right:-25px;"><!--/row-->
												<ul id="tab-content" class="nav nav-tabs" style="margin-left:10px;margin-right:10px;">
													<li class="active">
														<a href="#create_invoice" data-toggle="tab">
															<label class="modal_label"><i class="fa fa-clipboard"></i> Create Invoice</label>
														</a>
													</li>
													</ul>
													
													<div id="tabs" class="tab-content"  style="margin-left:10px;margin-right:10px;"><!-- /tab contents -->
														<div class="tab-pane fade in active" id="create_invoice" style="border-bottom:1px solid #d5d4d4;border-right:1px solid #d5d4d4;border-left:1px solid #d5d4d4;padding:15px;">
															<div class="row">
																
																	<div class="col-lg-5"><!--column-->
																			<div class="panel panel-primary" style="padding:10px;">
																				<div class="form-group">
																					<label>C<u>u</u>stomer *</label>
																					<select id="customer_dropdown" style="color:white;" name="customer" class="selectpicker show-tick form-control" data-live-search="true">
																						
																						<?php foreach($customers as $customer){ ?>
																							<option value="<?php echo $customer->customer_id; ?>"><?php echo $customer->customer; ?></option>
																						<?php } ?>
																					</select>
																				</div>
																			</div>	
																	</div><!--column-->
																	<div class="col-lg-4"></div>
																	<div class="col-lg-3">
																		<div class="panel panel-primary" style="padding:10px;">
																			<div class="form-group" id="data_1">
																				<label class="font-noraml"><u>D</u>ate Due *</label>
																				<div class="input-group date" id="dt_due_date">
																					<span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="03/04/2014">
																				</div>
																			</div>
																		</div>
																	</div>
																
															</div>
															
															<div class="row">
																	<div class="col-lg-12">
																		<div class="panel panel-primary" style="padding:15px 10px 0px 10px;margin-top:-12px;">
																			<div class="form-group">																		
																				<div class="input-group">																			
																					<input type="text" id="plu_typehead" data-provide="typeahead" class="form-control" placeholder="Enter PLU or Desription / Press F2 to Browse Item List"> 
																					<span class="input-group-btn">																				
																						<button type="button" class="btn btn-primary">Browse List</button>
																					</span>
																					
																				</div>
																			</div>
																		</div>
																		
																		<div class="panel panel-primary" style="padding:10px;margin-top:-12px;">
																			<table id="tbl_item_cart" class="table table-bordered">
																				<thead>
																					<tr>
																						<td>Qty</td>
																						<td>Description</td>
																						<td>Discount</td>
																						<td>Unit Price</td>																				
																						<td>Total</td>
																						<td>Action</td>
																					</tr>
																				</thead>
																				<tbody>
																					
																				</tbody>
																				
																				<tfoot>
																					<tr>
																						<td colspan="2" align="right"><strong>Total Discount</strong></td>
																						<td align="right" style="color:red;"><strong>0.00</strong></td>																		
																						<td align="right"><strong>Total Invoice</strong></td>																						
																						<td align="right" style="color:red;"><strong>0.00</strong></td>
																						<td></td>
																					</tr>
																				</tfoot>
																			</table>
																		</div>
																	</div>
															</div>
															
															
															<div class="row">
																<div class="col-lg-12" style="">
																	
																	
																		 <div class="panel-heading" style="margin-left:-15px;margin-top:-20px;">
																			
																			<div class="panel-options">

																				<ul class="nav nav-tabs">
																					<li class="active"><a data-toggle="tab" href="#tab-modal-1"><u>B</u>ill to Address *</a></li>
																					<li class=""><a data-toggle="tab" href="#tab-modal-2">S<u>h</u>ipping Address</a></li>
																					<li class=""><a data-toggle="tab" href="#tab-modal-3">Re<u>m</u>arks</a></li>
																				</ul>
																			</div>
																		</div>
																		
																		<div class="panel-body">

																				<div class="tab-content">
																					<div id="tab-modal-1" class="tab-pane active">
																						<div class="form-group" style="margin-top:-10px;">
																							<textarea class="form-control"></textarea>
																						</div>
																					</div>

																					<div id="tab-modal-2" class="tab-pane">
																						<div class="form-group" style="margin-top:-10px;">
																							<textarea class="form-control"></textarea>
																						</div>
																					</div>
																					
																					<div id="tab-modal-3" class="tab-pane">
																						<div class="form-group" style="margin-top:-10px;">
																							<textarea class="form-control"></textarea>
																						</div>
																					</div>
																				</div>

																		</div>
																	
																	
																	
																	
																</div>
																
																
																
															</div>
														</div>
														
														
													</div><!-- /tab contents -->
												
											</div>	<!--/row-->	
                                        </div><!--/modal body-->
										
                                        <div class="modal-footer">   
                                            <button id="btn_create_invoice" type="button" class="btn btn-primary"><i class="fa fa-save"></i> <u>R</u>ecord Invoice </button>
											<button type="button" class="btn btn-white" data-dismiss="modal"><u>C</u>lose</button>
                                        </div>
                                    </div>
                                </div>
        </div><!---/invoice modal--->
		
		

	<?php include('assets/includes/global_js.php'); ?>
	
	<!--- Dropdown / Selectpicker --->
	<script src="assets/css/dropdown-enhance/dist/js/bootstrap-select.min.js"></script>
	<script src="assets/js/plugins/typehead/bootstrap3-typeahead.js"></script>
	
	
	 <!-- iCheck -->
    <script src="assets/js/plugins/iCheck/icheck.min.js"></script>
	
	 <!-- Datepicker -->
	<script src="assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>
	
	<!-- Data Tables -->
    <script src="assets/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="assets/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="assets/js/plugins/dataTables/dataTables.tableTools.min.js"></script>
	
    <script src="assets/js/defined/sales.invoice.event.handlers.js"></script>
	
</body>

</html>
