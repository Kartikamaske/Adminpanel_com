<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeesReport extends CI_Controller {
    public function __construct()
    {

        parent::__construct();
        $this->load->model('FeesReport_model');
      
    }
	
	public function index()
	{
        $data['group']=$this->FeesReport_model->getallGroup();
        $data['userByLogin']=$this->FeesReport_model->getUserByLogin();

        // echo "<pre>";
        // print_r($data);
        $this->load->view('common/header_view',$data);
		$this->load->view('FeesReport/feesReport_view',$data);
        $this->load->view('common/footer_view');

	}

    public function UserByFeeStatus()
    {
            $groupid=$this->input->post('groupid');

            $feestatus=$this->input->post('feestatus');
        //    echo $groupid;

        $data=$this->FeesReport_model->getUserByFeeStatus($groupid,$feestatus);

            echo json_encode($data);
            // echo "<pre>";
            // print_r($groupid);

            // print_r($data);
    
    }

    // public function activeUser(){

    //     $data=$this->FeesReport_model->getActiveUser();
    //         echo json_encode($data);

    //         // echo "<pre>";
    //         // print_r($data);
    // }

    // public function deactiveUser(){

    //     $data=$this->FeesReport_model->getDeactiveUser();
    //         echo json_encode($data);

    //         // echo "<pre>";
    //         // print_r($data);
    // }

}