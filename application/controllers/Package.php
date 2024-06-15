<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Branch_model');
        
    }
	
	
	public function index()
	{
        // $data['data']=$this->Branch_model->getallBranch();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Package/packageDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
        $obj='';
        $data['data']=$obj;

		$this->load->view('common/header_view');
		$this->load->view('Package/package_view',$data);
		$this->load->view('common/footer_view');
	

	}

    function insertPackagetype(){
     $package_name= $this->input->post('package_name'); 
     $amount= $this->input->post('amount'); 
     $discount= $this->input->post('discount'); 
     $start_date= $this->input->post('start_date'); 
     $end_date= $this->input->post('end_date');
     $features= $this->input->post('features');
      
      
     
       $fields=array('package_name'=>$package_name,
                    'amount'=>$amount,
                    'discount'=>$discount,
                    'start_date'=>$start_date,
                    'end_date'=>$end_date,
                    'features'=>$features,
                        
                      
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("packagecreation_master",$fields);
   } 
	
	
}