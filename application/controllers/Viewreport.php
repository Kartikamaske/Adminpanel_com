<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viewreport extends CI_Controller {
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
		$this->load->view('common/header_view',$data);
		$this->load->view('Viewreport/viewreport');
		$this->load->view('common/footer_view');
	

	}
    // public function create()
	// {
	// 	$this->load->view('common/header_view',$data);
	// 	$this->load->view('Weeklysong/weekly_view');
	// 	$this->load->view('common/footer_view');
	

	// }
    // public function edit()
	// {
	// 	$this->load->view('common/header_view',$data);
	// 	$this->load->view('WeeklyTop15song/weeklyDetailsview');
	// 	$this->load->view('common/footer_view');
	

	// }

//     function insertCompany(){
//      $Companyname= $this->input->post('Companyname'); 
//       $phone= $this->input->post('phone');
//       $subject= $this->input->post('subject'); 
      
     
//        $fields=array('Companyname'=>$Companyname,
//                       'phone'=>$phone,
//                       'fksubjectId'=>$subject,
                     
                      
//              'created_date'=>date('Y-m-d H:i:s'),
//              'created_by'=>1);
//          echo json_encode($fields);
//      $this->Commonmodel->insertRecord("Company_master",$fields);
//    } 
	
	
}