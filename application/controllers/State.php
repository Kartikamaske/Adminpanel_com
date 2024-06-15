<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('State_model');
        
    }
	
	
	public function index()
	{
        //$data['data']=$this->State_model->getallState();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('State/StateDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
        $obj='';
        $data['data']=$obj;

		$this->load->view('common/header_view');
		$this->load->view('State/State_view',$data);
		$this->load->view('common/footer_view');
	

	}

    function insertState(){
     $cname= $this->input->post('cname'); 
      $sname= $this->input->post('sname');
      
      
     
       $fields=array('cname'=>$cname,
                      'sname'=>$sname,
                      
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("state",$fields);
   } 
	
	
}