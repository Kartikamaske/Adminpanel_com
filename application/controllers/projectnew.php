<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        $this->load->model('Project_model');
        
    }
	
    public function index()

	{
        $data['data']=$this->Project_model->getallProject();

		// $data['data']=$this->Project_model->getallProject2();
		// $data['data']=$this->Project_model->getallProject3();
		// $data['data']=$this->Project_model->getallProject4();
		// $data['data']=$this->Project_model->getallProject5();
		// $data['data']=$this->Project_model->getallProject6();
		// $data['data']=$this->Project_model->getallProject7();
		// $data['data']=$this->Project_model->getalltag8();
	
		
	
        // echo "<pre>";
        // print_r($data);
	
		$this->load->view('common/header_view');
		$this->load->view('Project_management/modifyproject',$data);
		$this->load->view('common/footer_view');
	}
	
    public function create()
	{
		$data['Ptype']=$this->Project_model->getallProjectType();

		// $data['Ctype']=$this->Project_model->getallProjectType2();
		// $data['Ttype']=$this->Project_model->getallProjectType3();
		// $data['Gtype']=$this->Project_model->getallProjectType4();
		// $data['Atype']=$this->Project_model->getallProjectType5();
		// $data['Btype']=$this->Project_model->getallProjectType6();
		// $data['Utype']=$this->Project_model->getallProjectType7();
		// $data['TTtype']=$this->Project_model->getalltagsType8();

		$this->load->view('common/header_view');
		$this->load->view('Project_management/Project_view3',$data); //new data fetch
		$this->load->view('common/footer_view');



	}

		
	  

	

}