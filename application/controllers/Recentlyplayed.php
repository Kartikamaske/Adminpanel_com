<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recentlyplayed extends CI_Controller {
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
		$this->load->view('common/header_view');
		$this->load->view('Recentlyplayed/recentDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{

        $obj='';
        $data['data']=$obj;

		$this->load->view('common/header_view');
		$this->load->view('Recentlyplayed/recent_view',$data);
		$this->load->view('common/footer_view');
	

	}
    // public function edit()
	// {
	// 	$this->load->view('common/header_view');
    //     $this->load->view('Recentlyplayed/recentDetailsview');

	// 	$this->load->view('common/footer_view');
	

	// }

    function insertrecentlyplayed(){
     $song_name= $this->input->post('song_name'); 
      $song_type= $this->input->post('song_type');
      $start_date= $this->input->post('start_date'); 
      $start_time= $this->input->post('start_time'); 
      $end_date= $this->input->post('end_date'); 
      $end_time= $this->input->post('end_time'); 

      
     
       $fields=array('song_name'=>$song_name,
                      'song_type'=>$song_type,
                      'start_date'=>$start_date,
                      'start_time'=>$start_time,
                      'end_date'=>$end_date,
                      'end_time'=>$end_time,

                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("recentplayed_master",$fields);
   } 
	
	
}