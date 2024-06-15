<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewRelease extends CI_Controller {
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
		$this->load->view('NewRelease/newreleaseDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$obj='';
        $data['data']=$obj;

		$this->load->view('common/header_view');
		$this->load->view('NewRelease/newrelease_view',$data);
		$this->load->view('common/footer_view');
	

	}
    // public function edit()
	// {
	// 	$this->load->view('common/header_view');
	// 	$this->load->view('NewRelesed/newreleaseDetailsview');
	// 	$this->load->view('common/footer_view');
	

	// }

    function insertNewrelease(){
     $song_name= $this->input->post('song_name'); 
      $date= $this->input->post('date');
      
      
     
       $fields=array('song_name'=>$song_name,
                      'date'=>$date,
                     
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("released_master",$fields);
   } 
	
	
}