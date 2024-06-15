<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TaskReport extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    
        
        $this->load->model('TaskReport_model');
        
    }

    public function index()
	
	{

        
        $data['data']=$this->TaskReport_model->getalltaskdetails();

		// for table data show
        $data['alltask']=$this->TaskReport_model->getalltaskcompleted();

        $data['running']=$this->TaskReport_model->getalltaskrunning();

        $data['pending']=$this->TaskReport_model->getalltaskpending();


		$data['user']=$this->TaskReport_model->getuserid();


        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view',$data);

        $this->load->view('taskmanagement/TaskReport_view',$data);

		$this->load->view('common/footer_view');
	
	}
}