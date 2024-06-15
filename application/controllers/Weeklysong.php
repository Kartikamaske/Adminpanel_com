<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weeklysong extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Company_model');
        
    }
	
	
	public function index()
	{
        // $data['data']=$this->Company_model->getallCompany();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Weeklysong/weeklyDetailsview');

		$this->load->view('common/footer_view');
	

	}
    public function create()
	{

		$obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Weeklysong/weekly_view',$data);
		$this->load->view('common/footer_view');
	

	}
    // public function edit()
	// {
	// 	$this->load->view('common/header_view');
	// 	$this->load->view('WeeklyTop15song/weeklyDetailsview');
	// 	$this->load->view('common/footer_view');
	

	// }

    function insertweeklytop(){
     $weeklytopsongname= $this->input->post('weeklytopsongname'); 
      $start_date= $this->input->post('start_date');
      $start_time= $this->input->post('start_time'); 
      $end_date= $this->input->post('end_date'); 
      $end_time= $this->input->post('end_time'); 

      
     
       $fields=array('weeklytopsongname'=>$weeklytopsongname,
                      'start_date'=>$start_date,
                      'start_time'=>$start_time,
                      'end_date'=>$end_date,
                      'end_time'=>$end_time,


                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("weeklytopsong_master",$fields);
   } 
	
	
}