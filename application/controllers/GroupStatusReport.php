<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GroupStatusReport extends CI_Controller {
    public function __construct()
    {

        parent::__construct();
        $this->load->model('GroupStatusReport_model');
      
    }
	
	public function index()
	{
        // $data['bystatus']=$this->GroupStatusReport_model->getUserByStatus();
        $data['group']=$this->GroupStatusReport_model->getallGroup();
		$data['userByLogin']=$this->GroupStatusReport_model->getUserByLogin();

        // echo "<pre>";
        // print_r($data);
        
        $this->load->view('common/header_view',$data);
		$this->load->view('GroupStatusReport/groupStatusReport_view',$data);
        $this->load->view('common/footer_view');

	}


    // public function getUserbyGroup(){


    // }

    public function UserByGroupid()
    {
            $groupid=$this->input->post('groupid');

            $status=$this->input->post('status');
        //    echo $groupid;

        $data=$this->GroupStatusReport_model->getUserByGroupStatusid($groupid,$status);


        // if( $status==3){
        //     $data=$this->GroupStatusReport_model->getUserByGroupStatusid($groupid,$status);

        // }else{
        //     $data=$this->GroupStatusReport_model->getUserByGroupid($groupid);
        // }


            echo json_encode($data);
            // echo "<pre>";
            // print_r($groupid);

            // print_r($data);
    
    }

    public function activeUser(){

        $data=$this->GroupStatusReport_model->getActiveUser();
            echo json_encode($data);

            // echo "<pre>";
            // print_r($data);
    }

    public function deactiveUser(){

        $data=$this->GroupStatusReport_model->getDeactiveUser();
            echo json_encode($data);

            // echo "<pre>";
            // print_r($data);
    }

}