<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDetails extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        $this->load->model('Addnewsong_model');

        
    }
	
	
	public function index()
	{
        $data['data']=$this->Addnewsong_model->getallUsers();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view',$data);
		$this->load->view('UserDetail/userdetails',$data);
		$this->load->view('common/footer_view');
	

	}
  

   /*  function insertCountry(){
     $Countryname= $this->input->post('Countryname'); 
      $phone= $this->input->post('phone');
      $subject= $this->input->post('subject'); 
      
     
       $fields=array('Countryname'=>$Countryname,
                      'phone'=>$phone,
                      'fksubjectId'=>$subject,
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("Country_master",$fields);
   } 
	 */
	
}