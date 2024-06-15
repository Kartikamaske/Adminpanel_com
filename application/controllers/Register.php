<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('State_model');
        
    }
	
	
	public function index()
	{ 
		$this->load->view('WebView/Home/registration');
	}


	function insertUser(){
		
		$username= $this->input->post('username');
		
		$email= $this->input->post('email');
		$password= $this->input->post('password');
		$cpwd= $this->input->post('cpwd');
		
		

	       	$fields=array(
	       	
	       	'username'=>$username,
	       	 'email'=>$email,
   			   'password'=>$password,
   			   'cpwd'=>$cpwd,
   			    
			'is_active'=>1,
			// 'created_by'=>$this->session->userdata('userId'),
			'created_by'=>1,
			'created_date'=>date('Y-m-d H:i:s')
		);
	  	  
		 $this->Commonmodel->insertRecord("registration_master",$fields);
		 // print_r($fields);
	       }
    

    
	
}