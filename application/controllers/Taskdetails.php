<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taskdetails extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    
        
        $this->load->model('Taskdetail_model');
        
    }
	
	
	public function index()
	
	{
        $data['data']=$this->Taskdetail_model->getalltaskdetails();
		
        $data['alltask']=$this->Taskdetail_model->getalltask();

		$data['user']=$this->Taskdetail_model->getuserid();

		$data['userByLogin']=$this->Taskdetail_model->getUserByLogin();



        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view',$data);
        $this->load->view('taskmanagement/taskdetails_view',$data);
		$this->load->view('common/footer_view');
	
	}

	// public function create()

	// {


	// 	$data['data']=$this->Taskdetail_model->getalltask();


	// 	// $data['data1']=$this->Taskdetail_model->gettaskbyID();

	// 	$data['data2']=$this->Taskdetail_model->gettaskdata();

	// 	$data['data3']=$this->Taskdetail_model->gettasknamedata();


	// 	// $data['user']=$this->Taskdetail_model->getalltaskdetails();
		
		
	// 	// $data['tasktype']=$this->Taskmanagement_model->getTasktype();


	// 	//  echo "<pre>";
    //     // print_r($data);

	// 	$this->load->view('common/header_view',$data);
	// 	$this->load->view('taskmanagement/taskdetails_view',$data);
	// 	$this->load->view('common/footer_view');


	// }


	



	}