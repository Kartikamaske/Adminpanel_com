<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Technology extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        $this->load->model('Technology_model');
        
    }
	
	public function index()
	{
        $data['data']=$this->Technology_model->getallTechnology();
		$data['userByLogin']=$this->Technology_model->getUserByLogin();

        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view',$data);
		$this->load->view('Technology/modifyTechnology_view',$data);

		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$data['data']=$this->Technology_model->getallTechnology();
		$data['userByLogin']=$this->Technology_model->getUserByLogin();
		$this->load->view('common/header_view',$data);
		$this->load->view('Technology/Technology_view');
		$this->load->view('common/footer_view');
	

	}
	
    
	function insertTechnology(){
		$technologyname= $this->input->post('technologyname'); 
	
		  $fields=array(
			            'technologyname'=>$technologyname,
						'created_date'=>date('Y-m-d H:i:s'),
						'created_by'=>1);
			// echo json_encode($fields);

		$this->Commonmodel->insertRecord("technology_master",$fields);
	  } 
   
	  public function update()
	  {
		  $data['dataa']=$this->Technology_model->getallTechnologyByid($this->uri->segment(3));
			//  $data['country']=$this->Technology_model->getCountry();

			// echo "<pre>";
			// print_r($data);
	
			$this->load->view('common/header_view',$data);
			$this->load->view('Technology/Technology_view',$data);
			$this->load->view('common/footer_view');
	  }
   
	  public function updateTechnology()
	  {
			$technologyname = $this->input->post('technologyname'); 
			
			$technologyId = $this->input->post('technologyId'); 

   
			$fields=array(
				
			            'technologyId'=>$technologyId,
			            'technologyname'=>$technologyname,
						'modified_date'=>date('Y-m-d H:i:s'),
						'modified_by'=>1,
		   );

				echo "<pre>";
				print_r($fields);
				$whereArray=array('technologyId'=>$technologyId);
		
				$this->Commonmodel->updateRecord("technology_master",$fields,$whereArray);
		  
		}

	
}