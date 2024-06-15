<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demooo extends CI_Controller {

    // public function __construct()
    // {
    //     parent::__construct();
    
        
    //     $this->load->model('TaskCreation_model');
        
    // }


    
	public function index()
	{
        // $data['data']=$this->TaskCreation_model->getalltask();
		// $data['userByLogin']=$this->TaskCreation_model->getUserByLogin();
        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view');
		$this->load->view('TaskCreation/demo_view');
		$this->load->view('common/footer_view');
	

	}

}