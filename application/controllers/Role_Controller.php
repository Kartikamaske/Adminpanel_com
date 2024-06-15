<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        $this->load->model('Role_model');
        
    }
	
	public function index()
	{
        $data['data']=$this->Role_model->getallRole();
		$data['userByLogin']=$this->Role_model->getUserByLogin();

        // echo "<pre>";
        // print_r($data);

		$this->load->view('common/header_view',$data);
		$this->load->view('Role/modifyrole_view',$data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{

		$data['userByLogin']=$this->Role_model->getUserByLogin();

		$this->load->view('common/header_view',$data);
		$this->load->view('Role/Role_view');
		$this->load->view('common/footer_view');
	

	}
	
    
	function insertRole(){
		$rolename= $this->input->post('rolename'); 
	
		  $fields=array(
			            'rolename'=>$rolename,
						'created_date'=>date('Y-m-d H:i:s'),
						'created_by'=>1);
			// echo json_encode($fields);

		$this->Commonmodel->insertRecord("role_master",$fields);
	  } 
   
	  public function update()
	  {
		  $data['dataa']=$this->Role_model->getallRoleByid($this->uri->segment(3));
			//  $data['country']=$this->Role_model->getCountry();

			// echo "<pre>";
			// print_r($data);
	
			$this->load->view('common/header_view');
			$this->load->view('Role/Role_view',$data);
			$this->load->view('common/footer_view');
	  }
   
	  public function updateRole()
	  {
			$rolename = $this->input->post('rolename'); 
			
			$roleId = $this->input->post('roleId'); 

   
			$fields=array(
			            'roleId'=>$roleId,
			            'rolename'=>$rolename,
						'modified_date'=>date('Y-m-d H:i:s'),
						'modified_by'=>1,
		   );

				echo "<pre>";
				print_r($fields);
				$whereArray=array('roleId'=>$roleId);
		
				$this->Commonmodel->updateRecord("role_master",$fields,$whereArray);
		  
		}

	
}