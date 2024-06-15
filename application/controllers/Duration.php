<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Duration extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        $this->load->model('Duration_model');
        
    }
	
	public function index()
	{
        $data['data']=$this->Duration_model->getallDuration();
		$data['userByLogin']=$this->Duration_model->getUserByLogin();

        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view',$data);
		$this->load->view('Duration/modifyDuration_view',$data);

		$this->load->view('common/footer_view');
	

	}
    public function create()
	{

		$data['userByLogin']=$this->Duration_model->getUserByLogin();

		$this->load->view('common/header_view',$data);
		$this->load->view('Duration/Duration_view');
		$this->load->view('common/footer_view');
	

	}
	
    
	function insertDuration(){
		$durationname= $this->input->post('durationname'); 
	
		  $fields=array(
			            'durationname'=>$durationname,
						'created_date'=>date('Y-m-d H:i:s'),
						'created_by'=>1);
			// echo json_encode($fields);

		$this->Commonmodel->insertRecord("duration_master",$fields);
	  } 
   
	  public function update()
	  {
		  $data['dataa']=$this->Duration_model->getallDurationByid($this->uri->segment(3));
			//  $data['country']=$this->Duration_model->getCountry();

			// echo "<pre>";
			// print_r($data);
	
			$this->load->view('common/header_view');
			$this->load->view('Duration/Duration_view',$data);
			$this->load->view('common/footer_view');
	  }
   
	  public function updateDuration()
	  {
			$durationname = $this->input->post('durationname'); 
			
			$durationId = $this->input->post('durationId'); 

   
			$fields=array(
			            'durationId'=>$durationId,
			            'durationname'=>$durationname,
						'modified_date'=>date('Y-m-d H:i:s'),
						'modified_by'=>1,
		   );

				echo "<pre>";
				print_r($fields);
				$whereArray=array('durationId'=>$durationId);
				$this->Commonmodel->updateRecord("duration_master",$fields,$whereArray);
		  
		}

	
}