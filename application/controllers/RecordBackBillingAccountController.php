<?php

class RecordBackBillingAccountController extends CI_Controller {

    function __construct(){ // gets called every time the controller is loaded (example: $unit=new Unit_controller()) or when called in url
        // Call the Model constructor
        parent::__construct();
        $this->load->helper('url');

    }

    function index(){		// the default function that is called if no function is given in the uri
        $this->load->view('record_back_billing_account');
    }



}

?>