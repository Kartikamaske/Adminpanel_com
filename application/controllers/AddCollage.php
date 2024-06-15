<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddCollage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    
        $this->load->model('AddCollage_model');
        
    }
	
	public function index()
	{

        $data['data']=$this->AddCollage_model->getallCollage();
		$data['userByLogin']=$this->AddCollage_model->getUserByLogin();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view',$data);
		$this->load->view('College/modifyAddCollage_view',$data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{

		$data['userByLogin']=$this->AddCollage_model->getUserByLogin();
		$this->load->view('common/header_view',$data);
		$this->load->view('College/AddCollage_view');
		$this->load->view('common/footer_view');

	}
	
    
	function insertCollage(){
		$collagename= $this->input->post('collagename'); 
	
		  $fields=array(
			            'collagename'=>$collagename,
						'created_date'=>date('Y-m-d H:i:s'),
						'created_by'=>1);
			// echo json_encode($fields);

		$this->Commonmodel->insertRecord("collage_master",$fields);
	  } 
   
	  public function update()
	  {
		  $data['dataa']=$this->AddCollage_model->getallCollageByid($this->uri->segment(3));
			//  $data['country']=$this->AddCollage_model->getCountry();

			// echo "<pre>";
			// print_r($data);
	
			$this->load->view('common/header_view');
			$this->load->view('College/AddCollage_view',$data);
			$this->load->view('common/footer_view');
	  }
   
	  public function updateCollage()
	  {
			$collagename= $this->input->post('collagename'); 
			
			$collageId = $this->input->post('collageId'); 

   
			$fields=array(
			            'collageId'=>$collageId,
			            'collagename'=>$collagename,
						'modified_date'=>date('Y-m-d H:i:s'),
						'modified_by'=>1,
		   );

				echo "<pre>";
				print_r($fields);
				$whereArray=array('collageId'=>$collageId);
		
				$this->Commonmodel->updateRecord("collage_master",$fields,$whereArray);
		  
		}

	
}