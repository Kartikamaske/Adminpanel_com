<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qualification extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        $this->load->model('Qualification_model');
        
    }
	
	public function index()
	{
        $data['data']=$this->Qualification_model->getallDuration();
		$data['userByLogin']=$this->Qualification_model->getUserByLogin();

        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view',$data);
		$this->load->view('Qualification/modify_qualificationview',$data);

		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$data['data']=$this->Qualification_model->getallDuration();
		$data['userByLogin']=$this->Qualification_model->getUserByLogin();
		$this->load->view('common/header_view',$data);
		$this->load->view('Qualification/Qualification_view');
		$this->load->view('common/footer_view');
	

	}
	
    
	function insertQualification(){
		$qualificationname= $this->input->post('qualificationname'); 
	
		  $fields=array(
			            'qualificationname'=>$qualificationname,
						'created_date'=>date('Y-m-d H:i:s'),
						'created_by'=>1);
			// echo json_encode($fields);

		$this->Commonmodel->insertRecord("qualification_master",$fields);
	  } 
   
	  public function update()
	  {
		  $data['dataa']=$this->Qualification_model->getallDurationByid($this->uri->segment(3));
			//  $data['country']=$this->Qualification_model->getCountry();

			// echo "<pre>";
			// print_r($data);
	
			$this->load->view('common/header_view',$data);
			$this->load->view('Qualification/Qualification_view',$data);
			$this->load->view('common/footer_view');
	  }
   
	  public function updateQualification()
	  {
			$qualificationname = $this->input->post('qualificationname'); 
			
			$qualificationId = $this->input->post('qualificationId'); 

   
			$fields=array(
			            'qualificationId'=>$qualificationId,
			            'qualificationname'=>$qualificationname,
						'modified_date'=>date('Y-m-d H:i:s'),
						'modified_by'=>1,
		   );

				echo "<pre>";
				print_r($fields);
				$whereArray=array('qualificationId'=>$qualificationId);
		
				$this->Commonmodel->updateRecord("qualification_master",$fields,$whereArray);
		  
		}

	
}