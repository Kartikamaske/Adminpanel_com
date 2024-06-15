<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sem extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        $this->load->model('Sem_model');
        
    }
	
	public function index()
	{
        $data['data']=$this->Sem_model->getallSem();
		$data['userByLogin']=$this->Sem_model->getUserByLogin();

        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view',$data);
		$this->load->view('Sem/modifySem_view',$data);

		$this->load->view('common/footer_view');
	

	}
    public function create()
	{

		$data['userByLogin']=$this->Sem_model->getUserByLogin();
		$this->load->view('common/header_view',$data);
		$this->load->view('Sem/Sem_view');
		$this->load->view('common/footer_view');
	

	}
	
    
	function insertSem(){
		$semname= $this->input->post('semname'); 
	
		  $fields=array(
			            'semname'=>$semname,
						'created_date'=>date('Y-m-d H:i:s'),
						'created_by'=>1);
			// echo json_encode($fields);

		$this->Commonmodel->insertRecord("sem_master",$fields);
	  } 
   
	  public function update()
	  {
		  $data['dataa']=$this->Sem_model->getallSemByid($this->uri->segment(3));
			//  $data['country']=$this->Sem_model->getCountry();

			// echo "<pre>";
			// print_r($data);
	
			$this->load->view('common/header_view');
			$this->load->view('Sem/Sem_view',$data);
			$this->load->view('common/footer_view');
	  }
   
	  public function updateSem()
	  {
			$semname = $this->input->post('semname'); 
			
			$semId = $this->input->post('semId'); 

   
			$fields=array(
			            'semId'=>$semId,
			            'semname'=>$semname,
						'modified_date'=>date('Y-m-d H:i:s'),
						'modified_by'=>1,
		   );

				echo "<pre>";
				print_r($fields);
				$whereArray=array('semId'=>$semId);
		
				$this->Commonmodel->updateRecord("sem_master",$fields,$whereArray);
		  
		}

	
}