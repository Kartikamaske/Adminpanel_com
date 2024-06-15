<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifyuser extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Country_model');
        
    }
	
	
	public function index()
	{
        //$data['data']=$this->Country_model->getallCountry();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view',$data);
		$this->load->view('Verifyuser/verifyuserDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{

        // $obj='';
        // $data['data']=$obj;

		$this->load->view('common/header_view',$data);
		$this->load->view('Verifyuser/verifyuser_view');
		$this->load->view('common/footer_view');
	

	}

    public function deactive()
	{
        //$data['data']=$this->Country_model->getallCountry();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view',$data);
		$this->load->view('Verifyuser/deactiveuserDetailsview');
		$this->load->view('common/footer_view');
	

	}

//     function insertCountry(){
//      $cname= $this->input->post('cname'); 
//       $ccode= $this->input->post('ccode');
      
      
     
//        $fields=array('cname'=>$cname,
//                       'ccode'=>$ccode,
                      
                     
                      
//              'created_date'=>date('Y-m-d H:i:s'),
//              'created_by'=>1);
//          echo json_encode($fields);
//      $this->Commonmodel->insertRecord("country",$fields);
//    } 
	
	
}