var tbl_invoice_list;
var tbl_item_cart;

$(document).ready(function(){
			tbl_invoice_list=$('#tbl_invoice_list').DataTable({
					"bLengthChange":false,
					"order": [[ 0, "desc" ]],
                    "oLanguage": {
                        "sSearch": "Search: ",
						"sProcessing": "Please wait..."
                    },
				"dom": '<"toolbar">frtip'	
				
			});	
			
			tbl_item_cart=$('#tbl_item_cart').DataTable({
					"iDisplayLength":5,
					"bLengthChange":false,
					"order": [[ 0, "desc" ]],
					"bFilter":false,
					"bInfo":false,
					"dom": '<"tools">frtip<"bottom">',
					"columnDefs": [
					
							{//column 2

								'bSortable': false,
								'targets': [1],
								'render': function(data, type, full, meta){
									return data.split('|')[1];
								}
							}//column 2
							,						
							
							{//column 6

								'bSortable': false,
								'targets': [5],
								'render': function(data, type, full, meta){	
									var btn_create='<button class="btn btn-white btn-sm" style="margin-left:-15px;" data-toggle="tooltip" data-placement="top" title="Create Invoice"><i class="fa fa-file-text-o"></i> </button>';
									var btn_trash='<button class="btn btn-white btn-sm" style="margin-right:-15px;" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
									
									return '<center>'+btn_create+btn_trash+'</center>';
								}
							}//column 6
					],
					"rowCallback":function( row, data, index ){	
						$(row).find('td').eq(0).attr({
							"align":"right",
							"contenteditable":"true"
						});
						
						var _item=data[1].split('|');
						$(row).find('td').eq(2).attr({
							"align":"right",
							"data-product-id":_item[0]
						});
						
						$(row).find('td').eq(3).attr({
									"align":"right"
						});
						
						$(row).find('td').eq(4).attr({
									"align":"right"
						});
					}
				
			});	
			
			
			$('#dt_due_date').datepicker();


			/***********************typehead*************************/
			var $input = $('#plu_typehead');	
			
			//get product list
			$.get('SalesInvoiceController/ActionGetProductList', function(response){	
				//initialize typehead after data request is completed
				$input.typeahead({ 
					source:response,
					updater: function(data) {	
						tbl_item_cart.row.add(["1",data.id+"|"+data.description,data.discount,data.srp,data.srp,""]).draw();
						return ""; //specifies what would be going to display			
					},
					afterSelect:function(data){ //callback after item is selected, data here depends on the content of textbox
						$('#tbl_item_cart_paginate ul li:nth-last-child(2) a').click(); //trigger 2nd to the last link, the last page number
					}
				
				});
			},'json').fail(function(xhr){
				console.log(xhr);
			});
			
			
			/************************************************************************************/
			
				
		
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
			
			
			$('#btn_create_invoice').click(function(){
				
				
				tbl_item_cart.rows().eq(0).each( function ( index ) {					
					var row = tbl_item_cart.row( index );				 
					var data = row.data();
					alert(data);
					// ... do something with data(), or row.node(), etc
				} );
				
				
			});
					
			
			var _btnRefresh='<button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="Refresh Invoice"><i class="fa fa-refresh"></i> Refresh</button>';
            var _btnActive='<button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as Active"><i class="fa fa-check-circle"></i> </button>';
            var _btnInactive='<button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Mark as Inactive"><i class="fa fa-times-circle"></i> </button>';
            var _btnTrash='<button class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
			
			$("div.toolbar").html(_btnRefresh+_btnActive+_btnInactive+_btnTrash);
			
			var _btnApplyGlobalDiscount='<button style="margin-right:3px;" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="Apply Global Discount"><i class="fa fa-refresh"></i> Apply Global Discount</button>';
			var _btnIncreaseCount='<button style="margin-right:3px;" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="Add Qty"><i class="fa fa-plus"></i> Increase <b><u>Q</u></b>ty</button>';
			var _btnDecreaseCount='<button style="margin-right:3px;" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="left" title="Subtract Qty"><i class="fa fa-minus"></i> Descrease <b><u>Q</u></b>ty</button>';
			$("div.tools").html(_btnIncreaseCount+_btnDecreaseCount+_btnApplyGlobalDiscount);
			
				
});