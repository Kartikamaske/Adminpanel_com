<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Packagetype extends CI_Controller {
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
		$this->load->view('Packagetype/packagetypeDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
        $obj='';
        $data['data']=$obj;

		$this->load->view('common/header_view');
		$this->load->view('Packagetype/packagetype_view',$data);
		$this->load->view('common/footer_view');
	

	}

    function insertPackagetype1(){
     $package_type= $this->input->post('package_type'); 
     $value_of_days= $this->input->post('value_of_days'); 
    
      
     
       $fields=array('package_type'=>$package_type,
                    'value_of_days'=>$value_of_days,
                    
                        
                      
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("packagetype_master",$fields);
   } 
	
	
}