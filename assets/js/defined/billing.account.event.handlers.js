var tbl_back_bill_list;
var tbl_item_cart;

$(document).ready(function(){
    //initialize customer list
    tbl_back_bill_list=$('#tbl_back_bill_list').DataTable({
        "iDisplayLength":7,
        "bLengthChange":false,
        "order": [[ 0, "desc" ]],
        "oLanguage": {
            "sSearch": "Search: ",
            "sProcessing": "Please wait..."
        },
        "dom": '<"toolbar">frtip',
        "columnDefs": [
            {//column 6
                'bSortable': false,
                'targets': [6],
                'render': function(data, type, full, meta){
                    var btn_create='<button class="btn btn-white btn-sm" style="margin-left:-15px;" data-toggle="tooltip" data-placement="top" title="Edit Customer"><i class="fa fa-pencil"></i> </button>';
                    var btn_trash='<button class="btn btn-white btn-sm" style="margin-right:-15px;" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

                    return '<center>'+btn_create+btn_trash+'</center>';
                }
            }//column 6
        ]

    });
	
	
	tbl_item_cart=$('#tbl_item_cart').DataTable({
        "iDisplayLength":7,
        "bLengthChange":false,
        "order": [[ 0, "desc" ]],
        "oLanguage": {
            "sSearch": "Search: ",
            "sProcessing": "Please wait..."
        },
		
		"columnDefs": [
            {//column 6
                'bSortable': false,
                'targets': [5],
                'render': function(data, type, full, meta){
                
					var btn_trash='<button class="btn btn-white btn-sm" style="margin-right:-15px;" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

                    return '<center>'+btn_trash+'</center>';
                }
            }//column 6
        ]

    });


    //sparkline graph
    $("#sparkline8").sparkline([2,5, 6, 7, 2, 0, 4, 2, 4, 5, 7, 2, 4, 12, 14, 4, 2, 14, 12, 7,5,4,3,4], {
        type: 'bar',
        barWidth: 8,
        height: '80px',
        barColor: '#1ab394',
        negBarColor: '#c6c6c6'
    });



    //write toolbar on datatable
    var _btnNew='<button class="btn btn-white btn-sm"  id="btn-new" data-toggle="tooltip" data-placement="left" title="Record Back Bill Account" ><i class="fa fa-paste"></i> Record Back Bill Account</button>';
    $("div.toolbar").html(_btnNew);

    $('#btn-new').click(function(){
        $('#consumer_modal').modal('show');

    })



    /***********************typehead*************************/
    var $input = $('#plu_typehead');

    //get product list
    $.get('SalesInvoiceController/ActionGetProductList', function(response){
        //initialize typehead after data request is completed
        $input.typeahead({
            source:response,
            updater: function(data) {
                //tbl_item_cart.row.add(["1",data.id+"|"+data.description,data.discount,data.srp,data.srp,""]).draw();
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


});




function fnShowCustomerModal(){
    $('#customer_modal').modal('show');
}















