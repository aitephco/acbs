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

            <div class="col-lg-12 animated fadeInRight">
                <div class="mail-box-header" style="margin-bottom:-25px;">
                    <h2 style="block:inline;"><i class="fa fa-users"></i> Record Apprehended Consumer Account </h2>

                </div>

                <div class="mail-box" style="padding-left:10px;padding-right:10px;">


                    <div class="panel-heading">
                        <div class="panel-options">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1">Apprehended Account(s)</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-2">Payment Schedule</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-3">Customer Ledger</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-4">Aging of Receivable</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="tab-content">

                            <div id="tab-1" class="tab-pane active">
                                <table id="tbl_back_bill_list" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <td></td>
                                        <td>Reference #</td>
                                        <td>Consumer</td>  
										<td>Contact No</td>  
										<td>Period of Payable</td>     										
                                        <td style="text-align:right;">Amount</td>
                                        <td>Action</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i=0;$i<=55;$i++){ ?>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>10222111</td>
                                            <td>Paul Christian Bontia Rueda</td>
											<td>09357467601</td>
											<td>January 2015 to December 2015</td>              											
                                            <td align="right">1,500,000.00</td>
                                            <td></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                            <div id="tab-2" class="tab-pane">

                               <table id="tbl_back_bill_list" class="table table-bordered">
                                    <thead>
                                    <tr>                                       
                                        <td>Payment Schedule</td>
                                        <td>Descriptoin</td>					
                                        <td style="text-align:right;">Amount Due</td>                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i=0;$i<=10;$i++){ ?>
                                        <tr>                                            
                                            <td>January 1, 2015</td>
                                            <td>August 2014</td>
											<td align="right">2,100.00</td>											
                                        </tr>
                                    <?php } ?>
                                    </tbody>
									
									<tfoot>
										<tr>
											<td colspan="2" align="right"><strong>Total Back Bill Amount</strong></td>
											<td align="right" style="color:red;"><strong>24,000.00</strong></td>
										</tr>
									</tfoot>
                                </table>

                                
                            </div>


                            <div id="tab-3" class="tab-pane">
                                <table id="tbl_consumer_history" class="table table-bordered">
                                    <thead>
                                    <tr>
										<td>Txn Date</td>
                                        <td>Reference #</td>
                                        <td>Receipt #</td>
                                        <td>Amount Due</td>
                                        <td>Amount Paid</td>
                                        <td>Balance</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i=0;$i<=10;$i++){ ?>
                                        <tr>    
											<td>January 1, 2015</td>
                                            <td>2015101000001</td>
                                            <td>na</td>
                                            <td>1,200.00</td>
                                            <td>0.00</td>
                                            <td>1,200.00</td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
									
									<tfoot>
										<tr>
											<td colspan="5" align="right"><strong>Current Balance</strong></td>
											<td align="right" style="color:red;"><strong>24,000.00</strong></td>
										</tr>
									</tfoot>
                                </table>
                            </div>
							
							
							<div id="tab-4" class="tab-pane">
								<table id="tbl_receivables_aging" class="table table-bordered">
                                    <thead>
                                    <tr>
										<td>Consumer</td>
                                        <td style="text-align:right;">1 month</td>
                                        <td style="text-align:right;">2 months</td>
                                        <td style="text-align:right;">3 months</td>
                                        <td style="text-align:right;">4 months</td>
                                        <td style="text-align:right;">Over 4 months</td>
                                    </tr>
                                    </thead>
									
                                    <tbody>
                                    <?php for($i=0;$i<=10;$i++){ ?>
                                        <tr>    
											<td>Paul Christian Rueda</td>
                                            <td align="right">1,000.00</td>
                                            <td align="right">0.00</td>
                                            <td align="right">0.00</td>
                                            <td align="right">0.00</td>
                                            <td align="right">1,000.00</td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
									
									
                                </table>
							
							</div>

                        </div>
                    </div>
                </div>

            </div>

            

        </div>
    </div><!-- /main content area -->


    <!---/invoice modal--->
    <div class="modal fade" id="consumer_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog"  style="width:70%;">
            <div class="modal-content animated bounceInRight">


                <div class="modal-body"><!--/modal body-->
                    <div class="row" style="margin-left:-25px;margin-right:-25px;"><!--/row-->
							<ul id="tab-content" class="nav nav-tabs" style="margin-left:10px;margin-right:10px;">
								<li class="active">
									<a href="#create_invoice" data-toggle="tab">
										<label class="modal_label"><i class="fa fa-paste"></i> Account Information</label>
									</a>
								</li>
							</ul>
													
							<div id="tabs" class="tab-content"  style="margin-left:10px;margin-right:10px;"><!-- /tab contents -->
								<div class="tab-pane fade in active" id="create_invoice" style="border-bottom:1px solid #d5d4d4;border-right:1px solid #d5d4d4;border-left:1px solid #d5d4d4;padding:15px;">
									<div class="row"><!---/ row -->		
									
																
										<div class="col-lg-4"><!--column-->	
											<div class="panel panel-default" style="padding:5px 10px 0px 10px;">
												<div class="form-group">
															<label>Reference #</label>
															<input class="form-control" type="text" name="user_code" placeholder=""  data-container="body" data-trigger="manual" data-toggle="tooltip" title="Employee number is required.">
												</div>
											
												<div class="form-group">
															<label>Account No *</label>
															<input class="form-control" type="text" name="user_code" placeholder="Account #"  data-container="body" data-trigger="manual" data-toggle="tooltip" title="Employee number is required.">
												</div>	
												
												
												<div class="form-group">
															<label>Term</label>
															<input class="form-control" type="text" name="user_code" placeholder="No. of months payable"  data-container="body" data-trigger="manual" data-toggle="tooltip" title="Employee number is required.">
												</div>
											</div>
										</div>
												
										<div class="col-lg-8">
												
												<ul id="tab-content" class="nav nav-tabs" style="margin-left:10px;margin-right:10px;">
													<li class="active">
														<a href="#consumer_info" data-toggle="tab">
															<label class="modal_label">Consumer Info *</label>
														</a>
													</li>
													
													<li class="">
														<a href="#consumer_address" data-toggle="tab">
															<label class="modal_label">Address Detailed Info</label>
														</a>
													</li>
												</ul>
												
												
												
												<div id="tabs" class="tab-content"  style="margin-left:10px;margin-right:10px;"><!-- /tab contents -->
													<div class="tab-pane fade in active" id="consumer_info" style="border-bottom:1px solid #d5d4d4;border-right:1px solid #d5d4d4;border-left:1px solid #d5d4d4;padding:15px;">
														<div class="row">	
															<div class="col-lg-12">
																<div class="form-group">																		
																	<label>Consumer Name *</label>															
																	<input type="text" id="plu_typehead" data-provide="typeahead" class="form-control" placeholder="Consumer Name"> 
																</div>
															</div>
														</div>
														
														<div class="row">	
															<div class="col-lg-6">
																<div class="form-group">																		
																	<label>Barangay</label>															
																	<input type="text" id="plu_typehead" data-provide="typeahead" class="form-control" placeholder="Consumer Name"> 
																</div>
															</div>
															
															<div class="col-lg-6">
																<div class="form-group">																		
																	<label>Municipality</label>															
																	<input type="text" id="plu_typehead" data-provide="typeahead" class="form-control" placeholder="Consumer Name"> 
																</div>
															</div>
														</div>
													</div>
												</div>
										</div>
											
										
									</div>
										<br />
									<div class="row">
											<div class="col-lg-12">
												<div class="panel panel-default" style="padding:15px 10px 0px 10px;margin-top:-20px;">
													<div class="form-group">																		
														<div class="input-group">																			
															<input type="text" id="plu_typehead" data-provide="typeahead" class="form-control" placeholder="Search Unit here"> 
																<span class="input-group-btn">																				
																<button type="button" class="btn btn-primary">Browse List</button>
															</span>
																					
														</div>
													</div>
												</div>
											</div>
									</div>
									

									<div class="row">
										<div class="col-lg-12">
											<table id="tbl_item_cart" class="table table-bordered">
																				<thead>
																					<tr>																					
																						<td>Unit Description</td>
																						<td style="text-align:right">KWH</td>
																						<td style="text-align:right">Unit Qty</td>
																						<td style="text-align:right">Hour(s)</td>	
																						<td style="text-align:right">Total KWH</td>
																						<td>Action</td>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>																						
																						<td>Refrigerator</td>
																						<td align="right">20</td>
																						<td align="right">1</td>
																						<td align="right"8</td>	
																						<td align="right">160KWH</td>
																						<td></td>
																					</tr>
																				</tbody>
																				
																				<tfoot>
																					<tr>
																						<td colspan="2" align="right"><strong>Amount per KWH</strong></td>
																						<td align="right" style="color:red;"><strong>9.00</strong></td>
																						<td align="right"><strong>Total KWH</strong></td>
																						<td align="right" style="color:red;"><strong>160</strong></td>
																						<td>KWH</td>
																					</tr>
																					<tr>
																						<td colspan="2" align="right"><strong>Downpayment</strong></td>
																						<td align="right" style="color:red;"><strong>3,200.00</strong></td>
																						<td align="right"><strong>No. of Day(s)</strong></td>
																						<td align="right" style="color:red;"><strong>100</strong></td>
																						<td>Day(s)</td>
																					</tr>
																					<tr>
																						<td colspan="4" align="right"><h2>Net Amount</h2></td>
																						<td colspan="2" align="right"><h2>12,000.00</h2></td>
																					</tr>
																				</tfoot>
											</table>
										</div>									
									</div>
								</div>
														
														
							</div><!-- /tab contents -->
												
					</div>	
					
					
					
                </div><!--/modal body-->

                <div class="modal-footer">
                    <button id="btn_create_invoice" type="button" class="btn btn-primary"><i class="fa fa-save"></i> <u>R</u>ecord Back Bill Account </button>
                    <button type="button" class="btn btn-white" data-dismiss="modal"><u>C</u>lose</button>
                </div>
            </div>
        </div>
    </div><!---/invoice modal--->



    <!-- /footer -->
    <?php $this->load->view('templates/footer'); ?>
    <!-- /footer -->


</div>
</div>



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

<!-- sparkline -->
<script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Peity -->
<script src="assets/js/plugins/peity/jquery.peity.min.js"></script>

<script src="assets/js/defined/billing.account.event.handlers.js"></script>

</body>

</html>
