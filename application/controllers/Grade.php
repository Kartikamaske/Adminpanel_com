<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grade extends CI_Controller {
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
		$this->load->view('Grade/gradeDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
        $obj='';
        $data['data']=$obj;

		$this->load->view('common/header_view');
		$this->load->view('Grade/grade_view',$data);
		$this->load->view('common/footer_view');
	

	}

    function insertGrade(){
     $grade= $this->input->post('grade'); 
    //  $destination= $this->input->post('destination'); 
    //  $arrial_date= $this->input->post('arrial_date'); 
    //  $departure_date= $this->input->post('departure_date'); 
      
      
     
       $fields=array('grade'=>$grade,
                    // 'destination'=>$destination,
                    // 'arrial_date'=>$arrial_date,
                    // 'departure_date'=>$departure_date,
                        
                      
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("grade_master",$fields);
   } 
	
	
}