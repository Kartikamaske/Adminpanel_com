<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Songstype extends CI_Controller {
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
		$this->load->view('Songstype/songstypeDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
        $obj='';
        $data['data']=$obj;

		$this->load->view('common/header_view');
		$this->load->view('Songstype/songstype_view',$data);
		$this->load->view('common/footer_view');
	

	}

    function insertSongstype(){
     $songtype_name= $this->input->post('songtype_name'); 
     
      
      
     
       $fields=array('songtype_name'=>$songtype_name,
                   
                        
                      
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("songstype_master",$fields);
   } 
	
	
}